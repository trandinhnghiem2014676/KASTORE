<div class="slide-header">
            <div class="contain-slide">
                <p>ACCOUNT</p>
                <ul>
                <li><a href="<?php echo _WEB_ROOT."/user/trangchu" ?>">HOME</a> </li>
                    <li>/</li>
                    <li>Account</li>
                </ul>
            </div>
</div>
 
 <!-- Contain -->
 <div class="container">
            <section class="h-100 gradient-form" style="background-color: #eee;">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-xl-10">
                            <div class="card rounded-3 text-black">
                                <div class="row g-0">
                                    <div class="col-lg-6">
                                        <div class="card-body p-md-5 mx-md-4">

                                            <div class="text-center">
                                                <img src= <?php echo _PATH_ROOT."/assets/img/img-header/shoe-logo-new_300x300.webp" ?>
                                                    style="width: 185px;" alt="logo">
                                                <h4 class="mt-1 mb-5 pb-1">
                                                    <div class="text-center">

                                                        <h4 class="mt-1 mb-5 pb-1">The best choice for you !!</h4>
                                                    </div>
                                                </h4>
                                            </div>
                                            <form action="<?php echo _WEB_ROOT.'/user/index' ?>" method="POST">
                                                <p>Please login to your account</p>

                                                <div class="form-outline mb-4">
                                                    <label class="form-label" for="form2Example11">Username</label>
                                                    <input required name="email" type="email" id="form2Example11" class="form-control"
                                                        placeholder="Phone number or email address" />
                                                </div>

                                                <div class="form-outline mb-4">
                                                    <label class="form-label" for="form2Example22">Password</label>
                                                    <input required name="password" type="password" id="form2Example22" class="form-control" />
                                                </div>

                                                <div class="text-center pt-1 mb-5 pb-1">
                                                    <button
                                                        class="btn btn-primary bg-primary   fa-lg gradient-custom-2 mb-3"
                                                        type="submit">Login</button>

                                                    <a class="" href="#">Forgot password?</a>
                                                </div>

                                                
                                                <input type="hidden" name="login" value="submitLogin">
                                                
                                            </form>
                                            <div class="d-flex align-items-center justify-content-center pb-4">
                                                <p class="mb-0 me-2">Don't have an account?</p>
                                                <a href="<?php echo _WEB_ROOT."/User/register" ?>"><button type="button"
                                                        class="btn btn-outline-danger">Create new</button></a>

                                            </div>

                                        </div>
                                        <div>
                                            <?php                                                        
                                                        if(isset($data['thongbao'])){
                                                            echo '<p class="alert alert-'.$data['trangthai'].'" >'.$data['thongbao'].'</p>';
                                                        }
                                                        
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                        <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                            <h4 class="mb-4">We are more than just a company</h4>
                                            <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud
                                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
 </div>