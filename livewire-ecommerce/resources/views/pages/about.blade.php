@extends('layouts.main')

@section('title', __('company.seo.title'))

@section('description', __('company.seo.description'))

@section('content')

    <!-- Start of Main -->
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{url('/')}}" rel="nofollow"><i class="fi-rs-home mr-5"></i>Trang chủ</a>
                <span></span> Về chúng tôi
            </div>
        </div>
    </div>
    <div class="page-content pt-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 col-lg-12 m-auto">
                    <section class="row align-items-center mb-50">
                        <div class="col-lg-6">
                            <img src="/assets/imgs/page/about-1.png" alt="" class="border-radius-15 mb-md-3 mb-lg-0 mb-sm-4" />
                        </div>
                        <div class="col-lg-6">
                            <div class="pl-25">
                                <h2 class="mb-30">Chào mừng bạn đến với KASTORE</h2>
                                <p class="mb-25">KASTORE là điểm đến lý tưởng cho những quý ông muốn tìm kiếm phong cách và sự thoải mái. Chúng tôi cung cấp một bộ sưu tập đa dạng các loại quần áo nam từ trang phục hàng ngày đến trang phục dành cho các sự kiện đặc biệt.Với sự chú trọng vào chất lượng và kiểu dáng, mỗi mẫu quần áo của chúng tôi đều được thiết kế để mang lại sự thoải mái và tự tin cho người mặc. Chúng tôi luôn đảm bảo rằng các sản phẩm của mình không chỉ phản ánh xu hướng thời trang mới nhất mà còn đảm bảo tính ứng dụng và tiện ích.</p>
                                <p class="mb-50">Dù bạn đang tìm kiếm một bộ trang phục lịch lãm cho công việc hoặc một bộ trang phục thể thao thoải mái cho cuộc vui cuối tuần, chúng tôi có mọi thứ bạn cần. Từ áo sơ mi thanh lịch đến áo polo thể thao, từ quần âu chính điệu đến quần thể thao thoải mái, chúng tôi đều có sẵn mọi lựa chọn để phù hợp với phong cách cá nhân của bạn.Hãy đến và khám phá bộ sưu tập đa dạng và phong phú của chúng tôi tại KASTORE. Chúng tôi cam kết mang đến cho bạn trải nghiệm mua sắm tuyệt vời và những sản phẩm chất lượng hàng đầu.</p>
                                <div class="carausel-3-columns-cover position-relative">
                                    <div id="carausel-3-columns-arrows"></div>
                                    <div class="carausel-3-columns" id="carausel-3-columns">
                                        <img src="/assets/imgs/page/about-2.png" alt="" />
                                        <img src="/assets/imgs/page/about-3.png" alt="" />
                                        <img src="/assets/imgs/page/about-4.png" alt="" />
                                        <img src="/assets/imgs/page/about-2.png" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="text-center mb-50">
                        <h2 class="title style-3 mb-40">Chúng tôi cung cấp những gì?</h2>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 mb-24">
                                <div class="featured-card">
                                    <img src="/assets/imgs/theme/icons/icon-1.svg" alt="" />
                                    <h4>Giá tốt nhất & Các Ưu Đãi Tốt Nhất</h4>
                                    <p>Với cam kết mang lại sự tiện lợi và giá trị tốt nhất, chúng tôi luôn đảm bảo bạn nhận được sự hài lòng cao nhất mỗi khi mua sắm tại cửa hàng của chúng tôi.</p>
                                    <a href="#">Nhiều hơn</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-24">
                                <div class="featured-card">
                                    <img src="/assets/imgs/theme/icons/icon-2.svg" alt="" />
                                    <h4>Đa dạng sản phẩm</h4>
                                    <p>Từ trang phục hàng ngày đến trang phục dành cho các sự kiện đặc biệt, từ quần jeans và áo sơ mi đến áo khoác và phụ kiện, bạn sẽ tìm thấy mọi thứ bạn cần để thể hiện phong cách riêng của mình ở KASTORE.</p>
                                    <a href="#">Nhiều hơn</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-24">
                                <div class="featured-card">
                                    <img src="/assets/imgs/theme/icons/icon-3.svg" alt="" />
                                    <h4>Miễn phí vận chuyển</h4>
                                    <p>KASTORE luôn cố gắng hỗ trợ bạn nhận hàng mà không phải trả chi phí vận chuyển.  Mua sắm tiện lợi hơn và tiết kiệm chi phí với dịch vụ giao hàng miễn phí từ công ty của chúng tôi.</p>
                                    <a href="#">Nhiều hơn</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-24">
                                <div class="featured-card">
                                    <img src="/assets/imgs/theme/icons/icon-4.svg" alt="" />
                                    <h4>Dễ dàng trả hàng</h4>
                                    <p>Nếu có bất cứ sự không hài lòng nào về sản phẩm của KASTORE chúng tôi cam kết sẽ hỗ trợ hoàn trả hàng cho quý khách hàng một cách nhanh chóng và dễ dàng nhất.</p>
                                    <a href="#">Nhiều hơn</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-24">
                                <div class="featured-card">
                                    <img src="/assets/imgs/theme/icons/icon-5.svg" alt="" />
                                    <h4>Hài lòng tuyệt đối</h4>
                                    <p>Nếu khách hàng không hài lòng với bất kỳ sản phẩm hoặc dịch vụ của KASTORE, bạn có thể yêu cầu hoàn trả tiền hoặc đổi trả sản phẩm mà không gặp phải bất kỳ rủi ro nào.</p>
                                    <a href="#">Nhiều hơn</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-24">
                                <div class="featured-card">
                                    <img src="/assets/imgs/theme/icons/icon-6.svg" alt="" />
                                    <h4>Ưu đãi khủng mỗi ngày</h4>
                                    <p>KASTORE luôn cung cấp cho bạn những ưu đãi tuyệt hằng ngày về giá cả, đến với chúng tôi bạn sẽ luôn được mua hàng với giá ưu đãi nhất, vì vậy bạn có thể mua hàng thỏa thích.</p>
                                    <a href="#">Nhiều hơn</a>
                                </div>
                            </div>
                        </div>
                    </section>
                   
                </div>
            </div>
        </div>
        <section class="container mb-50 d-none d-md-block">
            <div class="row about-count">
                <div class="col-lg-1-5 col-md-6 text-center mb-lg-0 mb-md-5">
                    <h1 class="heading-1"><span class="count">12</span></h1>
                    <h4>Năm thành lập</h4>
                </div>
                <div class="col-lg-1-5 col-md-6 text-center">
                    <h1 class="heading-1"><span class="count">99</span>+</h1>
                    <h4>Hài lòng</h4>
                </div>
                <div class="col-lg-1-5 col-md-6 text-center">
                    <h1 class="heading-1"><span class="count">1000</span>+</h1>
                    <h4>Đơn hàng được giao</h4>
                </div>
                <div class="col-lg-1-5 col-md-6 text-center">
                    <h1 class="heading-1"><span class="count">1000</span>+</h1>
                    <h4>Đơn hàng hoàn thành</h4>
                </div>
                <div class="col-lg-1-5 text-center d-none d-lg-block">
                    <h1 class="heading-1"><span class="count">100</span>+</h1>
                    <h4>Sản phẩm</h4>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-xl-10 col-lg-12 m-auto">
                    <section class="mb-50">
                        <h2 class="title style-3 mb-40 text-center">NHÀ SÁNG LẬP</h2>
                        <div class="row">
                            <div class="col-lg-4 mb-lg-0 mb-md-5 mb-sm-5">
                                <h6 class="mb-5 text-brand">Người thành lập KASTORE</h6>
                                <h1 class="mb-30">Gặp gỡ họ</h1>
                                <p class="mb-30">Trần Quốc Tuấn. Tốt nghiệp loại giỏi trường XXX. Có kinh nghiệm phong phú về thời trang trên thế giới.</p>
                                <p class="mb-30">Trần Quốc Tuấn. Tốt nghiệp loại giỏi trường XXX. Có kinh nghiệm phong phú về thời trang trên thế giới.</p>
                                <a href="#" class="btn">View All Members</a>
                            </div>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="team-card">
                                            <img src="/assets/imgs/page/about-6.png" alt="" />
                                            <div class="content text-center">
                                                <h4 class="mb-5">Trần Quốc Tuấn</h4>
                                                <span>CEO & Co-Founder</span>
                                                <div class="social-network mt-20">
                                                    <a href="#"><img src="/assets/imgs/theme/icons/icon-facebook-brand.svg" alt="" /></a>
                                                    <a href="#"><img src="/assets/imgs/theme/icons/icon-twitter-brand.svg" alt="" /></a>
                                                    <a href="#"><img src="/assets/imgs/theme/icons/icon-instagram-brand.svg" alt="" /></a>
                                                    <a href="#"><img src="/assets/imgs/theme/icons/icon-youtube-brand.svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="team-card">
                                            <img src="/assets/imgs/page/about-8.png" alt="" />
                                            <div class="content text-center">
                                                <h4 class="mb-5">Trần Quốc Tuấn</h4>
                                                <span>Head Engineer</span>
                                                <div class="social-network mt-20">
                                                    <a href="#"><img src="/assets/imgs/theme/icons/icon-facebook-brand.svg" alt="" /></a>
                                                    <a href="#"><img src="/assets/imgs/theme/icons/icon-twitter-brand.svg" alt="" /></a>
                                                    <a href="#"><img src="/assets/imgs/theme/icons/icon-instagram-brand.svg" alt="" /></a>
                                                    <a href="#"><img src="/assets/imgs/theme/icons/icon-youtube-brand.svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Main -->
@endsection
