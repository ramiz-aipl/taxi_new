<?php
if ($this->config->item('use_username', 'tank_auth')) {
    $login_label = 'Email or login';
} else {
    $login_label = 'Email';
}
$login = array(
    'name'    => 'login',
    'id'    => 'login',
    'value' => set_value('login'),
    'maxlength'    => 80,
    'size'    => 30,
    'class' => 'form-control',
);

$reset_btn = array(
    'value'    => 'Get a new password',
    'name'    => 'reset',
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

<body>
    <div class="auth-wrapper" style="background-image: url(<?php echo base_url() ?>assets/img/vizn-login.png);">
        <div class="auth-content" style="margin-left:700px">
            <div class="card">
                <div class="row align-items-center text-center">
                    <div class="col-md-12">
                        <?php echo form_open($this->uri->uri_string()); ?>
                        <div class="card-body">
                            <img src="<?php echo base_url(); ?>assets/img/login-mobile.png" alt="" class="img-fluid mb-4">
                            <h4 class="mb-3 f-w-400">Forget Password Of <?php echo WEBSITE_NAME; ?>?</h2>
                                <div class="form-group mb-3">
                                    <?php echo form_open($this->uri->uri_string(), array('class' => 'animated fadeIn', 'id' => 'frm_login')); ?>
                                    <div class="form-group mb-3">
                                        <label class="floating-label" for="">Email</label>
                                        <?php echo form_input($login); ?>
                                        <?php echo form_error($login['name'], '<p class="error" style="color:red;">', '</p>'); ?><?php echo isset($errors[$login['name']]) ? '<p class="error">' . $errors[$login['name']] . '</p>' : ''; ?>
                                    </div>
                                </div>
                        </div>
                        <div class="form-group mb-3">
                            <?php echo form_submit($reset_btn); ?>
                        </div>
                        <div class="form-group mb-3">
                            <div>
                                <?php echo anchor('/auth/login/', 'Go To Login'); ?>
                            </div>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- [ auth-signin ] end -->

    <!-- Required Js -->
    <script src="<?php echo base_url(); ?>assets/new-admin-theme/js/vendor-all.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/new-admin-theme/js/plugins/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/new-admin-theme/js/ripple.js"></script>
    <script src="<?php echo base_url(); ?>assets/new-admin-theme/js/pcoded.min.js"></script>



</body>

</html>