<?php

$user = \Models\UsersModel::getBy('user_id', $this->session->get('user_id'));
?>

<!-- Contact -->
<section id="contact" class="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Contact Us</h2>
                <h3 class="section-subheading text-muted">Send your custom message.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-danger error_msg alert-dismissible d-none my-3 col-sm-12 mx-auto" data-auto-dismiss role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong></strong>
                </div>
                <div class="alert alert-success success_msg alert-dismissible d-none my-3 col-lg-12 mx-auto" data-auto-dismiss role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong></strong>
                </div>
                <form action="<?= $this->route->baseUrl() . 'contact'?>" method="post" id="contact_form" class="contact_form" name="sentMessage" >
                    <input type="hidden" name="full_name" id="contact_full_name" value="<?= isset($user->full_name) ? $user->full_name : null ?>">
                    <input type="hidden" name="user_email" id="contact_user_email" value="<?= isset($user->user_email) ? $user->user_email: null ?>">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" id="message" name="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message." maxlength="255"></textarea>
                                <p class="help-block text-danger"></p>
                                <span class="counter text-success">0/255</span>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button id="send_message" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>