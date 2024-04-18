<div class="container mb-30">
    <div class="row flex-row">
        <div class="col-lg-1-5 primary-sidebar sticky-sidebar">
            <div class="sidebar-widget widget-category-2 mb-30">
                <h5 class="section-title style-1 mb-30 mt-10">Categorie</h5>
                <ul class="list-group" id="categories">
                    @foreach($uniqueCategories as $parentCategory)
                        @if($parentCategory->parent_id == null)
                            <li class="{{ in_array($parentCategory->id, $filters) ? 'bg-main' : '' }}"
                                data-id="{{ $parentCategory->id }}">

                                <a
                                        class="flex items-center rounded-full  text-[{{$parentCategory->name}}] hover:bg-amber-600 hover:text-white {{ in_array($parentCategory->id, $filters) ? 'text-white' : '' }}"><img
                                            src="/assets/imgs/theme/icons/category-1.svg"
                                            alt=""/><strong>{{ ucfirst($parentCategory->name) }}
                                        ({{ $parentCategory->products_count }})</strong></a>
                                <i class="fi-rs-angle-small-right"></i>
                            </li>
                        @endif
                        @if($parentCategory->childCategories->count())
                            <div data-id="{{ $parentCategory->id }}"
                                >
                                @foreach($parentCategory->childCategories as $category)
                                    <li class="{{ in_array($category->id, $filters) ? 'bg-main' : '' }} justify-content-start"
                                        style="margin-left:20px !important"
                                        data-id="{{ $category->id }}">

                                        <a
                                           class="flex items-center rounded-full  hover:bg-amber-600 hover:text-white {{ in_array($category->id, $filters) ? 'text-white' : '' }}">
                                            <img src="/assets/imgs/theme/icons/category-2.svg"
                                                 alt=""/> {{ ucfirst($category->name) }}
                                        </a>
                                    </li>
                                    @if($category->childCategories->count())
                                        @foreach($category->childCategories as $childCategory)
                                            <li class="{{ in_array($childCategory->id, $filters) ? 'bg-main' : '' }}"
                                                data-id="{{ $childCategory->id }}"><a
                                                        wire:click.debounce.200ms="$emit('filterByCategory', {{ $childCategory->id }})"
                                                        wire:ref="search-box"
                                                        class="flex items-center rounded-full  text-[{{$childCategory->name}}] hover:bg-amber-600 hover:text-white {{ in_array($childCategory->id, $filters) ? 'text-white' : '' }}"
                                                        data-id="{{ $childCategory->id }}">
                                                    <img src="/assets/imgs/theme/icons/category-3.svg"
                                                         alt=""/> {{ ucfirst($childCategory->name) }}
                                                </a></li>
                                        @endforeach
                                    @endif
                                @endforeach
                            </div>
                        @endif
                    @endforeach
                </ul>
            </div>

        </div>
        <div class="col-lg-4-5">
            <div class="shop-product-fillter ">
                <div class="totall-product">
                    @if(!isset($details))
                        <p>
                            {!!__('home.show.1')!!} <strong class="text-brand">{{ $products->firstItem() }}</strong>
                            - {{ $products->lastItem() }}
                            {!!__('home.show.2')!!}  {{$products->total()}} {!!__('home.show.3')!!}
                        </p>
                    @else
                        <p>
                            {!!__('home.show.1')!!} <strong class="text-brand">{{ $products->firstItem() }}</strong>
                            - {{ $products->lastItem() }}
                            {!!__('home.show.2')!!}  {{$products->total()}} {!!__('home.show.3')!!}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row product-grid" id="productarea">
                @foreach ($products as $p)
                    <div class="col-lg-1-3 col-md-3 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn"
                             data-wow-delay=".1s">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="{{ route('shop.show',[ 'lang'=>app()->getLocale(), $p->id,$p->slug]) }}">
                                        @if(file_exists(public_path('storage/' .$p->img_01 )) && $p->img_01 != null)
                                            <img class="default-img"
                                                 src="{{'/storage/' . $p->img_01 }}"
                                                 alt="{{Str::of('/storage/'. $p->img_01)->basename('.jpg')}}"
                                            >
                                            <img class="hover-img"
                                                 src="{{'/storage/' . $p->img_01 }}"
                                                 alt="{{Str::of('/storage/'. $p->img_01)->basename('.jpg')}}"
                                            >
                                        @else
                                            <img class="default-img"
                                                 src="{{'/uploads/default/default.jpg' }}"
                                                 alt="{{Str::of('/uploads/default/default.jpg')->basename('.jpg')}}"
                                            >
                                            <img class="hover-img"
                                                 src="{{'/uploads/default/default.jpg' }}"
                                                 alt="{{Str::of('/uploads/default/default.jpg')->basename('.jpg')}}"
                                            >
                                        @endif
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Aggiungi alla Wishlist" class="action-btn"
                                       href="{{route('addwishlist', ['lang' => app()->getLocale(), $p->id])}}"><i
                                                class="fi-rs-heart"></i></a>
                                    <a aria-label="Confronta" class="action-btn"
                                       href="{{route('addToCompare', ['lang'=>app()->getLocale(), $p->id,$p->slug])}}"><i
                                                class="fi-rs-shuffle"></i></a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    {{--                                    @if($categories = $p->categories)--}}

                                    {{--                                        <a>Categoria: @foreach($categories as $category)--}}
                                    {{--                                                @if($category->parent_id == null){{ ucfirst($category->name) }}--}}
                                    {{--                                                / @endif  @if($category->parent_id != null){{ ucfirst($category->name)  }}@endif--}}
                                    {{--                                            @endforeach--}}
                                    {{--                                        </a><br>--}}
                                    {{--                                    @endif--}}
                                    Codice articolo: <a>{{__($p->item_code)}}
                                </div>
                                <h2>
                                    <a href="{{ route('shop.show',[ 'lang'=>app()->getLocale(), $p->id,$p->slug]) }}">{{__($p->item_name)}}</a>
                                </h2>
                                <div class="product-card-bottom">
                                    @if($p->stock_qty > 0 && $p->purchasable == true)
                                        <div class="product-price">
                                            <span>€ {{ priceView($p->price) }}</span>
                                            {{--                                            <span class="old-price">$32.8</span>--}}
                                        </div>
                                        <div class="add-cart">
                                            <a href="{{route('addcart', ['lang'=>app()->getLocale(), $p->id, $p->slug])}}"
                                               class="add"
                                               title="Aggiungi al carrello"><i
                                                    class="fi-rs-shopping-cart mr-5"></i>Acquista</a>
                                        </div>
                                    @else
                                        <div class="product-price" hidden>
                                            <span>€ {{ priceView($p->price) }}</span>
                                            {{--                                            <span class="old-price">$32.8</span>--}}
                                        </div>
                                        <div class="add-cart">
                                            <a href="{{ route('shop.show',[ 'lang'=>app()->getLocale(), $p->id,$p->slug]) }}"
                                               class="add"
                                               title="Richiedi info"><i
                                                    class="fi-rs-envelope mr-5"></i>Richiedi info</a>
                                        </div>

                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!--end product card-->
            </div>
            <!--product grid-->
            <div class="pagination-area mt-20 mb-20">

                <ul class="pagination justify-content-start">
                    @if(isset($query))
                        {{ $products->appends($query)->onEachSide(1)->links() }}
                    @else
                        {{ $products->onEachSide(1)->links('vendor.livewire.bootstrap') }}
                    @endif
                </ul>

            </div>
        </div>
    </div>
</div>
@section('extraJs')
    <script>
        $(document).ready(function () {
            if ($("#slider").length) {
                let slider = document.getElementById("slider");
                noUiSlider.create(slider, {
                    start: [1, 1000],
                    connect: true,
                    step: 1,
                    range: {
                        'min': {{$min_price}},
                        'max': {{$max_price}}
                    },
                });

                slider.noUiSlider.on("update", function (value) {
                @this.set('min', value[0]);
                @this.set('max', value[1]);
                });
            }
        });
    </script>
    <script src="/assets/js/sliderCategory.js"></script>
@endsection
