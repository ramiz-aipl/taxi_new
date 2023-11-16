<?php
$old_password = array(
    'name' => 'old_password',
    'id' => 'old_password',
    'value' => set_value('old_password'),
    'size' => 30,
    'class' => 'form-control',
);
$new_password = array(
    'name' => 'new_password',
    'id' => 'new_password',
    'maxlength' => $this->config->item('password_max_length', 'tank_auth'),
    'size' => 30,
    'class' => 'form-control',
);
$confirm_new_password = array(
    'name' => 'confirm_new_password',
    'id' => 'confirm_new_password',
    'maxlength' => $this->config->item('password_max_length', 'tank_auth'),
    'size' => 30,
    'class' => 'form-control',
);
$submit_btn = array(
    'value'    => 'Change Password',
    'type'    => 'submit',
    'class'    => 'btn btn-block btn-primary mb-4',
);
?>
<!-- <?php echo form_open($this->uri->uri_string()); ?> -->


<!DOCTYPE html>
<html lang="en">

<head>
    <title>New Theme</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.ico" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/new-admin-theme/css/style.css">

</head>
<!-- BEGIN BODY -->
<div class="auth-wrapper" style="background-image: url(<?php echo base_url() ?>assets/img/vizn-login.png);">
    <div class="auth-content" style="margin-left:700px">
        <div class="card">
            <div class="row align-items-center text-center">
                <div class="col-md-12">
                    <?php echo form_open($this->uri->uri_string(), array('class' => 'animated fadeIn', 'id' => 'frm_login')); ?>
                    <div class="card-body">
                        <img src="<?php echo base_url(); ?>assets/img/login-mobile.png" alt="" class="img-fluid mb-4">
                        <h4 class="mb-3 f-w-400">Forget Password Of <?php echo WEBSITE_NAME; ?>?</h2>
                            <div class="form-group mb-3">
                                <label class="floating-label" for="">Old Password</label>
                                <?php echo form_password($old_password); ?>
                                <?php echo form_error($old_password['name']); ?><?php echo isset($errors[$old_password['name']]) ? $errors[$old_password['name']] : ''; ?>
                            </div>

                            <div class="form-group mb-4">
                                <label class="floating-label" for="">New Passsword</label>
                                <?php echo form_password($new_password); ?>
                                <?php echo form_error($new_password['name']); ?><?php echo isset($errors[$new_password['name']]) ? $errors[$new_password['name']] : ''; ?>
                            </div>

                            <div class="form-group mb-4">
                                <label class="floating-label" for="">Confirm new Passsword</label>

                                <?php echo form_password($confirm_new_password); ?>

                                <?php echo form_error($confirm_new_password['name']); ?><?php echo isset($errors[$confirm_new_password['name']]) ? $errors[$confirm_new_password['name']] : ''; ?>
                            </div>
                    </div>
                    <div class="form-group mb-3">
                        <?php echo form_submit($submit_btn); ?>
                        <?php echo form_close(); ?>

                        <div class="mb-3">
                            <?php echo anchor('', 'Go Back'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- [ auth-change passwrod ] end -->

<!-- Required Js -->
<script src="<?php echo base_url(); ?>assets/new-admin-theme/js/vendor-all.min.js"></script>
<script src="<?php echo base_url(); ?>assets/new-admin-theme/js/plugins/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/new-admin-theme/js/ripple.js"></script>
<script src="<?php echo base_url(); ?>assets/new-admin-theme/js/pcoded.min.js"></script>



</body>

</html>