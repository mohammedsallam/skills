<?php use Models\UsersModel; ?>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#" data-toggle="modal" data-target=".robot_modal"><img class="w-100" src="<?= $this->route->baseUrl() . IMAGES_PATH . 'logo.png'?>"
                                                                                                               alt=""></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#page-top">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#portfolio">System Map</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#objective">Objective</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $this->route->baseUrl() ?>#books" target="_blank">Library</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                </li>
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="#" data-toggle="modal" data-target=".moderators_modal">Moderators</a>-->
<!--                </li>-->
                <?php
                if ($this->session->has('user_id')){
                    $user = UsersModel::getBy('user_id', $this->session->get('user_id'));
                    ?>
                    <div class="dropdown">
                        <!--Trigger-->
                        <button class="btn btn-info dropdown-toggle py-0 mt-2" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $user->full_name ?></button>
                        <!--Menu-->
                        <div class="dropdown-menu dropdown-info">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target=".profile_modal">Profile</a>
                            <a class="dropdown-item" href="<?= $this->route->baseUrl() . 'exams/surface' ?>">Go to Exams</a>
                            <a class="dropdown-item" href="<?= $this->route->baseUrl() . 'logout' ?>">Log out</a>
                        </div>
                    </div>
                    <!--/Dropdown primary-->
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>

<!-- Moderator modal -->
<div class="modal fade moderators_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="bg-black">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <section class="moderator text-center p-4 col-lg-12">
                <div class="block active text-center">
                    <p class="w-75 mb-3 mx-auto text-info font-weight-bold">
                        EFFECTIVENESS OF AN INTELLIGENT ADAPTIVE SYSTEM BASED ON NAVIGATION TECHNIQUES TO DEVELOP WEB-SITES DESIGN SKILLS
                        <br>
                    فاعلية نظام تكيفى ذكى قائم على أساليب الإبحار لتنمية مهارات تصميم مواقع الويب
                    </p>
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
            </section>
<!--            <div class="arrows m-auto pb-4">-->
<!--                <i class="fa fa-chevron-left left_arrow"></i>-->
<!--                <i class="fa fa-chevron-right right_arrow"></i>-->
<!--            </div>-->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- profile modal -->
<div class="modal fade profile_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-title mt-3">
                <h3 class="w-50 m-auto">Edit profile</h3>
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

                <div class="profile_form text-center col-sm-9 m-auto">
                    <!-- Form -->
                    <form action="<?=  $this->route->baseUrl() . 'users/editProfile' ?>" method="post" class="text-center w-100" style="color: #757575;">
                        <input type="hidden" name="user_id" value="<?= $user->user_id  ?>">
                        <div class="block mb-3">
                            <i class="fa fa-user"></i>
                            <input type="text" id="edit_full_name" name="full_name" value="<?= $user->full_name ?>" placeholder="Full name">
                            <span></span>
                        </div>
                        <!-- Email -->
                        <div class="block mb-3">
                            <i class="fa fa-envelope-o"></i>
                            <input type="email" id="edit_user_email" name="user_email" value="<?= $user->user_email ?>" placeholder="E-mail">
                            <span></span>
                        </div>
                        <!-- Confirm Email -->
                        <div class="block mb-3">
                            <i class="fa fa-envelope-o"></i>
                            <input type="email" id="edit_confirm_email" name="confirm_email" value="<?= $user->user_email ?>" placeholder="Confirm E-mail">
                            <span></span>
                        </div>
                        <!-- Password -->
                        <div class="block mb-4">
                            <i class="fa fa-lock"></i>
                            <input type="password" id="edit_user_password" name="user_password" placeholder="Password">
                            <span></span>
                        </div>
                        <!-- Confirm Password -->
                        <div class="block mb-5">
                            <i class="fa fa-lock"></i>
                            <input type="password" id="edit_confirm_password" name="confirm_password" placeholder="Confirm password">
                            <span></span>
                        </div>
                        <button class="btn btn-outline-primary btn-block my-4 waves-effect z-depth-0 text-uppercase" type="submit" id="edit_profile">Edit profile</button>
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


<!-- Robot modal -->
<div class="modal fade robot_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content m-auto">
            <div class="modal_overlay"></div>
            <div class="modal-body">
                <div class="result col-lg-12 bg-dark text-success rounded p-2 mb-5">
                    <p class="d-none">DEAR STUDENT WELCOME TO YOU IN HHM SYSTEM</p>
                    <span class="text-success"></span>
                </div>
                <div class="robot_form">
                    <form action="<?= $this->route->baseUrl() . 'robot'?>" method="post">
                        <input type="hidden" name="student_id" id="student_id" value="<?= $this->session->get('user_id') ?>">
                        <label for="short_cut" class="form-group col-lg-12">
                            <input type="text" name="short_cut" id="short_cut" class="form-control" placeholder="Type short cut here and click Enter button">
                        </label>
                    </form>
                    <a href="<?= $this->route->baseUrl() . 'robot/getAllChat'?>" class="btn btn-primary get_all_chat">Get all</a>
                    <a href="javascript:void;" class="btn btn-primary clear_all_chat">Clear all</a>
                </div>
            </div>
        </div>
    </div>
</div>
