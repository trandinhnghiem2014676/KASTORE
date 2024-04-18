<footer class="main">
    <section class="newsletter mb-15 wow animate__animated animate__fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="position-relative newsletter-inner"
                         style="background-image: url('/uploads/about/newsletter.jpg') !important;">
                        <div class="newsletter-content">
                            <h2 class="mb-20">
                                Đăng ký nhận những thông tin mới
                            </h2>
                            <form action="{{ route('newRegistration', app()->getLocale()) }}" method="POST"
                                  enctype="multipart/form-data"
                                  class="form-subcriber d-flex">
                                @csrf
                                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}"/>
                                <input type="email" id="emailSubscription" aria-describedby="emailSubscription"
                                       class="form-control mr-2 bg-white" name="emailSubscription"
                                       placeholder="Nhập địa chỉ email của bạn"/>
                                <button class="btn" type="submit" id="newsLetter">Đăng ký<i
                                            class="w-icon-long-arrow-right" id="emailSubscription"></i></button>
                            </form>
                        </div>
                        <img src="/assets/imgs/banner/banner-9.png" alt="newsletter"/>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="featured section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 mb-md-4 mb-xl-0">
                    <div class="banner-left-icon d-flex align-items-center wow fadeIn animated">
                        <div class="banner-icon">
                            <img src="/assets/imgs/theme/icons/icon-1.svg" alt=""/>
                        </div>
                        <div class="banner-text">
                            <h3 class="icon-box-title">Giá tốt nhất và các ưu đãi</h3>
                            <p>Đơn hàng từ $50 trở lên</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="banner-left-icon d-flex align-items-center wow fadeIn animated">
                        <div class="banner-icon">
                            <img src="/assets/imgs/theme/icons/icon-2.svg" alt=""/>
                        </div>
                        <div class="banner-text">
                            <h3 class="icon-box-title">Giao hàng miễn phí</h3>
                            <p>Dịch vụ tuyệt vời 24/7</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="banner-left-icon d-flex align-items-center wow fadeIn animated">
                        <div class="banner-icon">
                            <img src="/assets/imgs/theme/icons/icon-3.svg" alt=""/>
                        </div>
                        <div class="banner-text">
                            <h3 class="icon-box-title">Ưu đãi tuyệt vời hàng ngày</h3>
                            <p>Khi bạn đăng ký</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="banner-left-icon d-flex align-items-center wow fadeIn animated">
                        <div class="banner-icon">
                            <img src="/assets/imgs/theme/icons/icon-4.svg" alt=""/>
                        </div>
                        <div class="banner-text">
                            <h3 class="icon-box-title">Đa dạng mặt hàng</h3>
                            <p>Ưu đãi khủng"</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="banner-left-icon d-flex align-items-center wow fadeIn animated">
                        <div class="banner-icon">
                            <img src="/assets/imgs/theme/icons/icon-5.svg" alt=""/>
                        </div>
                        <div class="banner-text">
                            <h3 class="icon-box-title">Hoàn trả hàng dễ dàng</h3>
                            <p>Trong 15 ngày</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-xl-none">
                    <div class="banner-left-icon d-flex align-items-center wow fadeIn animated">
                        <div class="banner-icon">
                            <img src="/assets/imgs/theme/icons/icon-6.svg" alt=""/>
                        </div>
                        <div class="banner-text">
                            <h3 class="icon-box-title">Giao hàng an toàn</h3>
                            <p>Trong vòng 7 ngày</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding footer-mid">
        <div class="container pt-15 pb-20">
            <div class="row">
                <div class="col">
                    <div class="widget-about font-md mb-md-3 mb-lg-3 mb-xl-0 wow animate__animated animate__fadeInUp"
                         data-wow-delay="0">
                        <div class="logo mb-10">
                            <a href="{{route('index',['lang' => app()->getLocale()])}}" class="mb-15"
                               title="Livewire"><img
                                        src="/uploads/logo/logo.png" alt="Livewire" style="height:120px"></a>
                        </div>
                        <ul class="contact-infor">
                            <li><img src="/assets/imgs/theme/icons/icon-location.svg"
                                     alt=""/><strong>Địa chỉ: </strong>
                                <span> Cần Thơ
                                    <br> 216/8D, Tầm Vu
                                    <br> Hưng Lợi, Ninh Kiều  </span></li>
                            <li><img src="/assets/imgs/theme/icons/icon-contact.svg"
                                     alt=""/><strong>Số điện thoại:</strong><span><a> 0919948440</a> </span>
                            </li>
                            <li><img src="/assets/imgs/theme/icons/icon-email-2.svg"
                                     alt=""/><strong>Email:</strong><span> tuanb2014803@student.ctu.edu.vn</span></li>
                            {{--                            <li><img src="/assets/imgs/theme/icons/icon-clock.svg" alt=""/><strong>Mở cửa:</strong><span>9:00 - 2:00, Mon - Sat</span>--}}
                            {{--                            </li>--}}
                        </ul>
                    </div>
                </div>
                <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                    <h4 class="widget-title">Công ty</h4>
                    <ul class="footer-list mb-sm-5 mb-md-0">
                        <li><a href="{{route('about',app()->getLocale())}}">KASTORE</a></li>
                        <li><a href="#">Điều khoản và Điều kiện</a></li>
                        <li><a href="{{route('contacts',app()->getLocale())}}">Liên hệ chúng tôi</a></li>
                    </ul>
                </div>
                <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                    <h4 class="widget-title">Tài khoản</h4>
                    <ul class="footer-list mb-sm-5 mb-md-0">
                        {{--                        <li><a href="{{route('customerLogin',app()->getLocale())}}">Đăng nhập</a></li>--}}
                        <li><a href="{{route('cart', app()->getLocale())}}">Giỏ hàng</a></li>
                        <li><a href="{{route('wishlist', app()->getLocale())}}">Danh sách yêu thích</a></li>
                    </ul>
                </div>
                <div class="footer-link-widget col wow animate__animated animate__fadeInUp notranslate"
                     data-wow-delay=".4s">
                    <h4 class="widget-title">Danh mục</h4>
                    <ul class="footer-list mb-sm-5 mb-md-0 notranslate">
                        @foreach (getCategories() as $cat)
                            <li>
                                <a href="{{ route('categoryPage',['lang'=>app()->getLocale(),$cat->id,  $cat->category_slug]) }}">{{ucFirst($cat->name)}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="footer-link-widget widget-install-app col wow animate__animated animate__fadeInUp"
                     data-wow-delay=".5s">
                    <h4 class="widget-title">Thanh toán an toàn</h4>
                    <img src="/uploads/icon/stripe.png" alt="payment" width="159"/>
                    <img src="/uploads/icon/ssl.png" alt="payment" width="159"/>
                    {{--                    <img class="" src="/assets/imgs/theme/payment-method.png" alt=""/>--}}
                </div>
            </div>
        </div>
    </section>
    <div class="container pb-30 wow animate__animated animate__fadeInUp" data-wow-delay="0">
        <div class="row align-items-center">
            <div class="col-12 mb-30">
                <div class="footer-bottom"></div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <p class="font-sm mb-0">© {{ date('Y') }} - KASTORE <br>Designed by <a
                            href="https://github.com/kastwp" target="_blank"><strong class="text-brand">KAS
                            </strong></a></p>
            </div>
            <div class="col-xl-4 col-lg-6 text-center d-none d-xl-block">
                <div class="hotline d-lg-inline-flex mr-30">
                    <img src="/assets/imgs/theme/icons/phone-call.svg" alt="hotline"/>
                    <p>(+84) 0352274257<span>Giờ mở cửa 7:00 - 22:00</span></p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 text-end d-none d-md-block">
                <div class="mobile-social-icon">
                    <h6>Follow us</h6>
                    <a href="https://www.facebook.com/tw.kas" target="_blank"><img
                                src="/assets/imgs/theme/icons/icon-facebook-white.svg" alt=""/></a>
                    <a href="https://www.instagram.com/_kas411/"
                       target="_blank"><img src="/assets/imgs/theme/icons/icon-instagram-white.svg" alt=""/></a>
                </div>
            </div>
        </div>
    </div>
</footer>
