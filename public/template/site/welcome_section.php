<!-- Header -->
<header class="masthead">
    <div class="container">
        <div class="intro-text w-100 float-right">
            <p class="mb-5">
                فاعلية نظام تكيفى ذكى قائم على أساليب الإبحار لتنمية مهارات تصميم مواقع الويب
            </p>
            <div class="intro-heading  mb-5">
                <div class="w-100 m-auto font-weight-bold">
                    <h4>أ.م. د/ إسماعيل محمد إسماعيل حسن</h4>
                    <span class="d-block">أستاذ تكنولوجيا التعليم المساعد</span>
                    <span class="d-block">كلية التربية</span>
                    <span class="d-block">جامعة المنصورة</span>
                </div>
                <div class="w-50 float-right font-weight-bold">
                    <h5>د/ رضا جرجس حكيم</h5>
                    <span class="d-block">
                            مدرس تكنولوجيا التعليم
                        </span>
                    <span class="d-block">
                            كلية التربية النوعية
                        </span>
                    <span class="d-block">
                            جامعة بورسعيد
                        </span>
                </div>
                <div class="w-50 font-weight-bold">
                    <h5>
                        د/ داليا محمود بقلاوة
                    </h5>
                    <span class="d-block">
                            مدرس تكنولوجيا التعليم
                        </span>
                    <span class="d-block">
                            كلية التربية النوعية
                        </span>
                    <span class="d-block">
                            جامعة بورسعيد
                        </span>
                </div>
            </div>
            <?php

                if (!$this->session->has('user_id')){ ?>
                    <a data-toggle="modal" data-target=".sign_in_modal" class="btn btn-success btn-xl text-uppercase mr-3 login" >Sign in</a>
                    <a data-toggle="modal" data-target=".sign_up_modal" class="btn btn-primary btn-xl text-uppercase register">Sign up</a>
                <?php } ?>
        </div>
        <div class="clearfix"></div>
    </div>
</header>


<!-- Sign in modal -->
<div class="modal fade sign_in_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-title mt-3">
                <h3 class="w-25 m-auto">Sign in</h3>
            </div>
            <div class="alert alert-danger error_msg alert-dismissible d-none my-3 col-lg-11 mx-auto" data-auto-dismiss role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong></strong>
            </div>
            <div class="alert alert-success success_msg alert-dismissible d-none my-3 col-lg-11 mx-auto" data-auto-dismiss role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong></strong>
            </div>
            <div class="modal-body">
                <div class="sign_in_form text-center col-sm-9 m-auto">
                    <!-- Form -->
                    <form action="<?=  $this->route->baseUrl() . 'login/checkLoginUser' ?>" method="post"class="text-center w-100" style="color: #757575;">
                        <!-- Email -->
                        <div class="block mb-3">
                            <i class="fa fa-envelope-o"></i>
                            <label for="login_email">E-mail</label>
                            <input type="email" id="login_email" name="user_email">
                            <span></span>
                        </div>
                        <!-- Password -->
                        <div class="block mb-4">
                            <i class="fa fa-lock"></i>
                            <label for="login_password">Password</label>
                            <input type="password" id="login_password" name="user_password">
                            <span></span>
                        </div>
<!--                        <div class="d-flex justify-content-around">-->
<!--                            <div>-->
<!--                                <div class="form-check">-->
<!--                                    <input type="checkbox" class="form-check-input" id="remember" name="remember">-->
<!--                                    <label class="form-check-label" for="remember">Remember me</label>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                        <!-- Sign in button -->
                        <button class="btn btn-outline-success btn-block my-5 waves-effect z-depth-0" type="submit">Sign in</button>
                    </form>
                    <!-- Form -->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Sign up modal -->
<div class="modal fade sign_up_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-title mt-3">
                <h3 class="w-25 m-auto">Sign up</h3>
            </div>
            <div class="alert alert-danger error_msg alert-dismissible d-none my-3 col-lg-11 mx-auto" data-auto-dismiss role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong></strong>
            </div>
            <div class="alert alert-success success_msg alert-dismissible d-none my-3 col-lg-11 mx-auto" data-auto-dismiss role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong></strong>
            </div>
            <div class="modal-body">

                <div class="sign_up_form text-center col-sm-9 m-auto">
                    <!-- Form -->
                    <form action="<?=  $this->route->baseUrl() . 'register/checkRegister' ?>" method="post" class="text-center w-100" style="color: #757575;">

                        <div class="block mb-3">
                            <i class="fa fa-user"></i>
                            <label for="full_name">Full name</label>
                            <input type="text" id="full_name" name="full_name">
                            <span></span>
                        </div>
                        <!-- Email -->
                        <div class="block mb-3">
                            <i class="fa fa-envelope-o"></i>
                            <label for="user_email">E-mail</label>
                            <input type="email" id="user_email" name="user_email">
                            <span></span>
                        </div>
                        <!-- Confirm Email -->
                        <div class="block mb-3">
                            <i class="fa fa-envelope-o"></i>
                            <label for="confirm_email">Confirm-mail</label>
                            <input type="email" id="confirm_email" name="confirm_email">
                            <span></span>
                        </div>
                        <!-- Password -->
                        <div class="block mb-4">
                            <i class="fa fa-lock"></i>
                            <label for="user_password">Password</label>
                            <input type="password" id="user_password" name="user_password">
                            <span></span>
                        </div>
                        <!-- Confirm Password -->
                        <div class="block mb-5">
                            <i class="fa fa-lock"></i>
                            <label for="confirm_password">Confirm password</label>
                            <input type="password" id="confirm_password" name="confirm_password">
                            <span></span>
                        </div>
                        <!-- Sign in button -->
                        <div class="col-sm-4 bg-primary mb-4 text-light py-1 rounded gender"> Gender </div>
                        <!-- Default inline 1-->
                        <div class="custom-control custom-radio custom-control-inline w-25 pull-left">
                            <input type="radio" class="custom-control-input" id="male" name="gender" value="male">
                            <label class="custom-control-label" for="male">Male</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline w-25 pull-left mb-5">
                            <input type="radio" class="custom-control-input" id="female" name="gender" value="female">
                            <label class="custom-control-label" for="female">Female</label>
                        </div>

                        <button class="btn btn-outline-primary btn-block my-4 waves-effect z-depth-0 text-uppercase" type="submit">Sign up now</button>
                    </form>
                    <!-- Form -->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
