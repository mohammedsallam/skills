<?php

header('location:'.$this->route->baseUrl());
exit();

?>

<style>
    body {
        background-color: #00BCD4;
        padding-left: 0;
        max-width: 360px;
        margin: 5% auto;
        overflow-x: hidden; }
     .signup-box .msg {
        color: #555;
        margin-bottom: 30px;
        text-align: center; }
     .signup-box a {
        font-size: 14px;
        text-decoration: none;
        color: #00BCD4; }
     .signup-box .logo {
        margin-bottom: 20px; }
     .signup-box .logo a {
        font-size: 36px;
        display: block;
        width: 100%;
        text-align: center;
        color: #fff; }
     .signup-box .logo small {
        display: block;
        width: 100%;
        text-align: center;
        color: #fff;
        margin-top: -5px; }
</style>

<div class="signup-box">
    <div class="logo">
        <a>Sign up</a>
    </div>
    <div class="card">
        <div class="body">
            <div class="alert alert-danger alert-dismissible error_msg hidden" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <span class="span_msg"></span>
            </div>
            <div class="alert alert-success alert-dismissible success_msg hidden" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <span class="span_msg"></span>
            </div>
            <form id="sign_up" method="POST" action="<?=  $this->route->baseUrl() . 'register/checkRegister' ?>">
                <div class="msg">Register a new membership</div>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                    <div class="form-line">
                        <input type="text" id="username" class="form-control" name="username" placeholder="User name"  autofocus>
                    </div>
                </div>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                    <div class="form-line">
                        <input type="email" id="email" class="form-control" name="email" placeholder="Email Address" >
                    </div>
                </div>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                    <div class="form-line">
                        <input type="email" id="confirm_email" class="form-control" name="confirm_email" placeholder="Confirm email address" >
                    </div>
                </div>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                    <div class="form-line">
                        <input type="password" id="password" class="form-control" name="password" placeholder="Password" >
                    </div>
                </div>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                    <div class="form-line">
                        <input type="password" id="confirm_password" class="form-control" name="confirm_password" placeholder="Confirm password" >
                    </div>
                </div>

<!--                <div class="form-group">-->
<!--                    <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">-->
<!--                    <label for="terms">I read and agree to the <a href="javascript:void(0);">terms of usage</a>.</label>-->
<!--                </div>-->

                <button id="new_register" class="btn btn-block btn-lg bg-pink waves-effect" type="submit">SIGN UP</button>

                <div class="m-t-25 m-b--5 align-center">
                    <a href="<?= $this->route->baseUrl() . 'login' ?>">You already have a membership?</a>
                </div>
            </form>
        </div>
    </div>
</div>
