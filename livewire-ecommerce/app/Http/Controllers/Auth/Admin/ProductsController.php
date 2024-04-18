<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\AttributeProduct;
use App\Models\Category;
use App\Models\CategoryProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('adminAuth')->except('logout');
    }

    public function index()
    {
        $items = getProducts();

        if (!$items) {
            abort(404);
        }

        return view('auth.admin.products.index', [
            'items' => $items
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create($lang)
    {
        $product = Product::all();

        $subCategories = Category::with('parentCategory')
            ->whereHas('parentCategory')
            ->get();
        $mainCategory = Category::with('childCategories')
            ->whereHas('childCategories')
            ->get();
        $subAttributes = Attribute::with('parentAttribute')
            ->whereHas('parentAttribute')
            ->get();
        $mainAttributes = Attribute::with('childAttributes')
            ->whereHas('childAttributes')
            ->get();
        $product->purchasable = \request()->input('purchasable');

        return view('auth.admin.products.create', [
            'product' => $product,
            'subCategories' => $subCategories,
            'mainCategory' => $mainCategory,
            'subAttributes' => $subAttributes,
            'mainAttributes' => $mainAttributes,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store($lang, Request $request)
    {
        $request->validate([
            'img_01' => 'image|mimes:jpeg,png,webp,jpg,gif,svg|max:3048',
            'img_02' => 'image|mimes:jpeg,png,webp,jpg,gif,svg|max:3048',
            'img_03' => 'image|mimes:jpeg,png,webp,jpg,gif,svg|max:3048',
            'attachment' => 'file|mimes:ppt,pptx,doc,docx,pdf,xls,xlsx,txt|max:10048',
            'item_code' => 'unique:products',

        ]);

        $product = new Product;

//        $mainCategory = DB::table('categories')->where('id', '=', \request()->input('categories.0'))->first();
//        $subCategory = DB::table('categories')->where('id', '=', \request()->input('categories.1'))->first();
        $product->user_id = auth()->guard('admin')->id();
        $product->item_name = \request()->input('item_name');
        $product->slug = Str::slug($product->item_name);
        $product->item_code = \request()->input('item_code');
        $product->short_description = \request()->input('short_description');
        $product->long_description = \request()->input('long_description');
        $product->link = \request()->input('link');
        $product->link_2 = \request()->input('link_2');
        $product->stock_qty = \request()->input('stock_qty');
        $product->price = str_replace(',', '.', \request()->input('price'));
        $product->purchasable = \request()->input('purchasable');
        $product->published = \request()->input('published');

        if (\request()->hasFile('img_01')) {
            $image = \request()->file('img_01');
            $name = $image->getClientOriginalName();
            $destinationPath = public_path('storage/');
            $image->move($destinationPath, $name);
            $product->img_01 = $name;
        } else {
            $product->img_01 = 'default.jpg';
        }
        if (\request()->hasFile('img_02')) {
            $image2 = \request()->file('img_02');
            $name2 = $image2->getClientOriginalName();
            $destinationPath2 = public_path('storage/');
            $image2->move($destinationPath2, $name2);
            $product->img_02 = $name2;
        }
        if (\request()->hasFile('img_03')) {
            $image3 = \request()->file('img_03');
            $name3 = $image3->getClientOriginalName();
            $destinationPath3 = public_path('storage/');
            $image3->move($destinationPath3, $name3);
            $product->img_03 = $name3;
        }
        if (\request()->hasFile('attachment')) {
            $file = \request()->file('attachment');
            $fileName = $file->getClientOriginalName();
            $pathFile = public_path('storage/uploads/');
            $file->move($pathFile, $fileName);
            $product->attachment = $fileName;
        }

        try {
            $inputParentCategory = DB::table('categories')->where('id', '=', \request()->input('categories.0'))->first()->parent_id;
            $inputIdCategory = DB::table('categories')->where('id', '=', \request()->input('categories.0'))->first()->id;

            $selectedCategory = Category::orderBy('updated_at')
                ->where('parent_id', '=', $inputParentCategory)
                ->where('id', '=', $inputIdCategory)
                ->get()->toArray();

            $inputParentAttribute = DB::table('attributes')->where('id', '=', \request()->input('attributes.0'))->first()->parent_id;
            $inputIdAttribute = DB::table('attributes')->where('id', '=', \request()->input('attributes.0'))->first()->id;

            $selectedAttribute = Attribute::orderBy('updated_at')
                ->where('parent_id', '=', $inputParentAttribute)
                ->where('id', '=', $inputIdAttribute)
                ->get()->toArray();
//dd($selectedAttribute);
            $product->save();
            $product->categories()->sync([$selectedCategory[0]['parent_id'], $selectedCategory[0]['id']]);
            $product->attributes()->sync([$selectedAttribute[0]['parent_id'], $selectedAttribute[0]['id']]);

            return redirect()->route('products.index', app()->getLocale()
            )->with([
                'product' => $product
            ])->with('success', 'Prodotto creato con successo!');
        } catch (\Throwable $e) {

            return back()->withErrors('Errore! ' . $e->getMessage());
        }


    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($lang, $slug)
    {
        $product = Product::where('slug', $slug)->first();
        $correlated = DB::table('products')->orderBy('created_at', 'DESC');

        return view('pages.product', [
            'product' => $product,
            'correlated' => $correlated
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($lang, $id)
    {
        $product = Product::find($id);
//        dd($product->categories->first()->pivot->category_id);
        $subCategories = Category::with('parentCategory')
            ->whereHas('parentCategory')
            ->get();
        $subAttributes = Attribute::with('parentAttribute')
            ->whereHas('parentAttribute')
            ->get();
        $mainAttributes = Attribute::with('childAttributes')
            ->whereHas('childAttributes')
            ->get();
        $uniqueCategories = $this->getCategories();
        $mainCategory = Category::with('childCategories')
            ->whereHas('childCategories')
            ->get();
        $attributes = getAttributes();

        return view('auth.admin.products.edit', [
            'product' => $product,
            'subCategories' => $subCategories,
            'mainCategory' => $mainCategory,
            'subAttributes' => $subAttributes,
            'mainAttributes' => $mainAttributes,
            'uniqueCategories' => $uniqueCategories,
            'attributes' => $attributes
//            'selectedCategory' => $selectedCategory
        ]);
    }

    private function getCategories()
    {
        return Category::withCount('products')
            ->having('products_count', '>', 0)
            ->orderBy('products_count', 'DESC')
            ->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function update($lang, $id)
    {

        $product = Product::findOrFail($id);
        \request()->validate([
            'img_01' => 'image|mimes:jpeg,png,webp,jpg,gif,svg|max:3048',
            'img_02' => 'image|mimes:jpeg,png,webp,jpg,gif,svg|max:3048',
            'img_03' => 'image|mimes:jpeg,png,webp,jpg,gif,svg|max:3048',
            'attachment' => 'file|mimes:ppt,pptx,doc,docx,pdf,xls,xlsx,txt|max:10048',
            'purchasable' => 'required'
        ]);

        $product->user_id = auth()->guard('admin')->id();

        $product->update([
            'item_name' => \request()->input('item_name'),
            'item_code' => \request()->input('item_code'),
            'short_description' => \request()->input('short_description'),
            'long_description' => \request()->input('long_description'),
            'link' => \request()->input('link'),
            'link_2' => \request()->input('link_2'),
            'slug' => Str::slug(\request()->input('item_name')),
            'stock_qty' => \request()->input('stock_qty'),
            'price' => str_replace(',', '.', \request()->input('price')),
            'purchasable' => \request()->input('purchasable'),
            'published' => \request()->input('published'),
        ]);

        if (\request()->hasFile('img_01')) {
            $image = \request()->file('img_01');
            $name = $image->getClientOriginalName();
            $destinationPath = public_path('storage/');
            $image->move($destinationPath, $name);
            $product->img_01 = $name;
        }

        if (\request()->hasFile('img_02')) {
            $image2 = \request()->file('img_02');
            $name2 = $image2->getClientOriginalName();
            $destinationPath2 = public_path('storage/');
            $image2->move($destinationPath2, $name2);
            $product->img_02 = $name2;
        }

        if (\request()->hasFile('img_03')) {
            $image3 = \request()->file('img_03');
            $name3 = $image3->getClientOriginalName();
            $destinationPath3 = public_path('storage/');
            $image3->move($destinationPath3, $name3);
            $product->img_03 = $name3;
        }

        if (\request()->hasFile('attachment')) {
            $file = \request()->file('attachment');
            $fileName = $file->getClientOriginalName();
            $pathFile = public_path('storage/uploads/');
            $file->move($pathFile, $fileName);
            $product->attachment = $fileName;
        }

        try {
            $inputParentCategory = DB::table('categories')->where('id', '=', \request()->input('categories.0'))->first()->parent_id;
            $inputIdCategory = DB::table('categories')->where('id', '=', \request()->input('categories.0'))->first()->id;

            $selectedCategory = Category::orderBy('updated_at')
                ->where('parent_id', '=', $inputParentCategory)
                ->where('id', '=', $inputIdCategory)
                ->get()->toArray();

            $inputParentAttribute = DB::table('attributes')->where('id', '=', \request()->input('attributes.0'))->first()->parent_id;
            $inputIdAttribute = DB::table('attributes')->where('id', '=', \request()->input('attributes.0'))->first()->id;

            $selectedAttribute = Attribute::orderBy('updated_at')
                ->where('parent_id', '=', $inputParentAttribute)
                ->where('id', '=', $inputIdAttribute)
                ->get()->toArray();

            if ($selectedCategory[0]['parent_id'] !== null) {
                $product->categories()->sync([$selectedCategory[0]['parent_id'], $selectedCategory[0]['id']]);
            } else {
                $product->categories()->sync($selectedCategory[0]['parent_id'], \request()->input('categories.1'));
            }
            if ($selectedAttribute[0]['parent_id'] !== null) {
                $product->attributes()->sync([$selectedAttribute[0]['parent_id'], $selectedAttribute[0]['id']]);
            } else {
                $product->attributes()->sync($selectedAttribute[0]['parent_id'], \request()->input('attributes.1'));
            }
            $product->save();
//            dd($selectedCategory[0]);
//            dd(\request()->input('categories', []));
//            $product->categories()->sync(\request()->input('categories', []));
            return redirect()->route('products.index', app()->getLocale()
            )->with([
                'product' => $product,
                'selectedCategory' => $selectedCategory
            ])->with('success', 'Prodotto modificato con successo!');
        } catch (\Throwable $e) {

            return back()->withErrors('Errore! ' . $e->getMessage());
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function destroy($lang, $id)
    {
        $product = Product::findOrFail($id);

        if (!$product) {
            abort(404);
        }
        $product->delete();
        return redirect()->route('products.index', app()->getLocale()
        )->with([
            'product' => $product
        ])->with('success', 'Prodotto eliminato con successo!');
    }

    public function remove1($lang, $id)
    {
        $product = Product::findOrFail($id);

        if (file_exists(public_path('uploads/products/images/' . $product->img_01)))
            unlink(public_path('uploads/products/images/' . $product->img_01));
        File::delete('uploads/products/images/' . $product->img_01);
        $product->update([
            'img_01' => null,
        ]);

        return redirect()->route('products.index', app()->getLocale())->with('success', 'Immagine # 2 eliminata con successo!');
    }

    public function remove2($lang, $id)
    {
        $product = Product::findOrFail($id);

        if (file_exists(public_path('uploads/products/images/' . $product->img_02)))
            unlink(public_path('uploads/products/images/' . $product->img_02));
        File::delete('uploads/products/images/' . $product->img_02);
        $product->update([
            'img_02' => null,
        ]);

        return redirect()->route('products.index', app()->getLocale())->with('success', 'Immagine # 2 eliminata con successo!');
    }

    public function remove3($lang, $id)
    {
        $product = Product::findOrFail($id);

        if (file_exists(public_path('uploads/products/images/' . $product->img_03))) {
            Storage::delete('uploads/products/images/' . $product->img_03);

        }
        $product->update([
            'img_03' => null,
        ]);


        return redirect()->route('products.index', app()->getLocale())->with('success', 'Immagine # 3 eliminata con successo!');
    }

    public function removeAttachment($lang, $id)
    {
        $product = Product::findOrFail($id);

        if (file_exists(storage_path('uploads/' . $product->attachment)))
            unlink(storage_path('app/public/uploads/' . $product->attachment));
        File::delete(storage_path('app/public/uploads/' . $product->attachment));

        $product->update([
            'attachment' => null,
        ]);

        return redirect()->route('products.index', app()->getLocale())->with('success', 'Immagine # 2 eliminata con successo!');
    }

    public
    function duplicate($lang, $id)
    {
        $existingOpening = Product::find($id);
        $categoryProducts = CategoryProduct::where('product_id', '=', $id)->get()->toArray();
        $attributeProducts = AttributeProduct::where('product_id', '=', $id)->get()->toArray();

        $product = $existingOpening->replicate();
        $randomId = rand(0,9);
        $product->item_name = htmlspecialchars($product->item_name . Str::random(1));
        $product->slug = Str::slug($product->item_name);
        $product->item_code = htmlspecialchars($product->item_code . $randomId);
        $product->save();
        $product->categories()->sync([$categoryProducts[0]['category_id'], $categoryProducts[1]['category_id']]);
        $product->attributes()->sync([$attributeProducts[0]['attribute_id'], $attributeProducts[1]['attribute_id']]);

        return redirect()->route('products.index', app()->getLocale()
        )->with([
            'product' => $product
        ])->with('success', 'Prodotto duplicato con successo!');
    }

    public function searchProduct($lang)
    {
        $pagination = 10;
        $notifications = DB::table('notifications')->orderBy('created_at', 'DESC')->get();
        $customers = DB::table('customers')->orderBy('created_at', 'DESC')->get();
        $o = trim(\request()->input('o'));
        $query = \request()->all();
        $items = Product::query()->where('item_name', 'LIKE', '%' . $o . '%')
            ->orWhere('item_code', 'LIKE', '%' . $o . '%')
            ->paginate($pagination);
        $items->appends(['search' => $o]);

        if (count($items) > 0) {
            return view('auth.admin.products.index')->withDetails($items)->withQuery($o)->with([
                'o' => $o,
                'query' => $query,
                'customers' => $customers,
                'notifications' => $notifications,
                'items' => $items,
            ]);
        } else {
            return redirect()->route('products.index', app()->getLocale())->with('danger', 'Corrispondenza non trovata');
        }
    }
}
