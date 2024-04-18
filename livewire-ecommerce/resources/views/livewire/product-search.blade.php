{{--    <div class="search-style-2">--}}
{{--        <form wire:submit.prevent="searchProduct">--}}
{{--            <input  placeholder="Search for items..." wire:model="search" type="search"/>--}}
{{--        </form>--}}
{{--    </div>--}}
<div class=" py-5">
    <div style="width: 100% !important;max-width: 750px !important;">
        <div class="search-style-2">
            <form>
                <input wire:model="search" type="text" placeholder="Cerca prodotto">
            </form>
        </div>
    </div>
    @if($this->search)
        <div class="container " style="width: 100% !important; max-width: 750px !important;padding:22px !important;" x-data="{ mode: 'view' }">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-lg-2 py-2">
                        @if(file_exists(public_path('storage/' .$product->img_01 )) && $product->img_01 != null)
                            <div class="shopping-cart-img">
                                <a href="{{ route('shop.show',['lang'=>app()->getLocale(),$product->id,$product->slug]) }}">
                                    <img id="img-product" alt="Livewire" class="img-fluid" style="border-radius:5px ;box-shadow:5px 4px 5px #0000001f; height:100px !important"
                                        src="{{'/storage/' . $product->img_01 ?? 'default.jpg' }}"/></a>
                            </div>

                        @else
                            <div class="shopping-cart-img">
                                <a href="{{ route('shop.show',['lang'=>app()->getLocale(),$product->id,$product->slug]) }}"><img
                                        alt="{{Str::of('/uploads/default/default.jpg')->basename('.jpg')}}" class="img-fluid" style="height:100px !important"
                                        src="{{'/uploads/default/default.jpg' }}"/></a>
                            </div>
                        @endif
                        <div class="shopping-cart-title">
                            <p>
                                <a href="{{ route('shop.show',['lang'=>app()->getLocale(),$product->id,$product->slug]) }}">{{$product->item_name}}</a>
                            </p>

                        </div>
                    </div>

                @endforeach
                    <div class="pagination-area mt-5 mb-5 py-5">
                        <ul class="pagination justify-content-start">
                            {{ $products->onEachSide(4)->links('vendor.livewire.bootstrap') }}
                        </ul>
                    </div>
            </div>

        </div>
    @endif

</div>


