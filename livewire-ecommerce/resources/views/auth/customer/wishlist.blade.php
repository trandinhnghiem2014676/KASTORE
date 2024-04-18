@extends('layouts.main')
@section('title', __('home.seo.title'))
@section('description', __('home.seo.description'))

@section('content')
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{route('home', app()->getLocale())}}" rel="nofollow"><i class="fi-rs-home mr-5"></i>Trang chủ</a>
                <span></span> Đơn hàng của tôi
            </div>
        </div>
    </div>
    <div class="page-content pt-60 pb-60 mb-160">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="dashboard-menu">
                                @include('auth.customer.partials.header')

                            </div>
                        </div>
                        <div class="col-md-9">

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">Danh sách yêu thích</h5>
                                </div>
                                <div class="card-body">
                                    <td class="table-responsive shopping-summery">
                                        @if(count($wishlist) > 0)
                                            <table class="table table-wishlist">
                                                <thead>
                                                <tr class="main-heading">

                                                    <th class="custome-checkbox start pl-30">
                                                        <input class="form-check-input" type="checkbox" name="checkbox"
                                                               id="exampleCheckbox11" value=""/>
                                                        <label class="form-check-label" for="exampleCheckbox11"></label>
                                                    </th>
                                                    <th scope="col" colspan="2">Sản phẩm</th>
                                                    <th scope="col" style="width:200px !important">Giá</th>
                                                    <th scope="col" style="width:200px !important">Sẵn có</th>
                                                    <th scope="col" style="width:200px !important">Hành động</th>
                                                    <th scope="col" class="end">Xóa</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($wishlist as $id => $details)
                                                    <tr class="pt-30">
                                                        <td class="custome-checkbox pl-30">
                                                            <input class="form-check-input" type="checkbox"
                                                                   name="checkbox" id="exampleCheckbox1" value=""/>
                                                            <label class="form-check-label"
                                                                   for="exampleCheckbox1"></label>
                                                        </td>

                                                        <td class="image product-thumbnail pt-40">
                                                            <a href="{{ route('shop.show',[ 'lang'=>app()->getLocale(), $details->product->id,$details->product->slug]) }}">
                                                                <img
                                                                    src="{{'/storage/' . $details->product->img_01 }}"
                                                                    alt="product" id="img-cart">
                                                            </a>
                                                        </td>
                                                        <td class="product-des product-name">
                                                            <h6><a class="product-name mb-10"
                                                                   href="{{ route('shop.show',[ 'lang'=>app()->getLocale(), $details->product->id,$details->product->slug]) }}">{{$details->product->item_name}}</a>
                                                            </h6>
                                                            <div class="product-rate-cover">
                                                                <div class="product-rate d-inline-block">
                                                                    <div class="product-rating"
                                                                         style="width: 90%"></div>
                                                                </div>
                                                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                            </div>
                                                        </td>
                                                        <td class="price" data-title="Prezzo">
                                                            <h4 class="text-brand">
                                                                € {{ price($details->product->price) }}</h4>
                                                        </td>

                                                        <td class="text-center detail-info" data-title="Stock">
                                                            @if($details->product->stock_qty > 0 && $details->product->purchasable == true)
                                                                <span class="stock-status in-stock mb-0"
                                                                      style="color:#1c681c">{!! __('customer.favourites.6') !!}</span>
                                                            @else
                                                                <span
                                                                    class="stock-status out-stock mb-0">{!! __('customer.favourites.7') !!}</span>
                                                            @endif
                                                        </td>

                                                        @if($details->product->stock_qty > 0 && $details->product->purchasable == true)
                                                            <td class="text-right">
                                                                <div class="d-lg-flex">
                                                                    <a href="{{route('addcart', ['lang'=>app()->getLocale(), $details->product->id])}}"
                                                                       class="btn btn-sm">Thêm vào giỏ hàng
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        @else
                                                            <div class="product-price" hidden>
                                                                <span>€ {{ priceView($details->product->price) }}</span>
                                                                {{--                                            <span class="old-price">$32.8</span>--}}
                                                            </div>
                                                            <td class="text-right">
                                                                <div class="product-card-bottom">
                                                                    <a href="{{ route('shop.show',[ 'lang'=>app()->getLocale(), $details->product->id,$details->product->slug]) }}"
                                                                       class="add"
                                                                       title="Richiedi info"><i
                                                                            class="fi-rs-envelope mr-5"></i>Yêu cầu thông tin</a>
                                                                </div>
                                                            </td>

                                                        @endif
                                                        <td class="action text-center" data-title="Remove">
                                                            <a href="{{route('removewish', ['lang'=>app()->getLocale(),$details->product->id])}}"
                                                               class="text-body"><i class="fi-rs-trash"></i></a>
                                                        </td>

                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        @else
                                            <h4 class="notranslate text-center mb-10 pb-10">{{__('app.notFavorites')}}</h4>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <style>
        .shopping-summery table td, .shopping-summery table th, .shopping-summery table thead {
            border-radius: 0px !important;
        }
    </style>
@endsection

