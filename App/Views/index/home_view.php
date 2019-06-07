<style>
    .finish_msg {
        position: absolute;
        top: -51px;
        z-index: 9999;
        left: 23%;
        transition: all 3s ease-in-out;
    }
</style>
<?php

if ($this->session->has('finish')){ ?>
    <div class="alert alert-success alert-dismissible finish_msg col-lg-6 m-auto" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        <span class="span_msg text-center d-block font-weight"><?= $this->session->get('finish') ?></span>
    </div>
<?php }
?>
