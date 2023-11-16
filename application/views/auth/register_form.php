<?php
if ($use_username) {
    $username = array(
        'name'  => 'username',
        'id'    => 'username',
        'value' => set_value('username'),
        'maxlength' => $this->config->item('username_max_length', 'tank_auth'),
        'size'  => 30,
    );
}
$email = array(
    'name'  => 'email',
    'id'    => 'email',
    'value' => set_value('email'),
    'maxlength' => 80,
    'size'  => 30,
);
$password = array(
    'name'  => 'password',
    'id'    => 'password',
    'value' => set_value('password'),
    'maxlength' => $this->config->item('password_max_length', 'tank_auth'),
    'size'  => 30,
);
$confirm_password = array(
    'name'  => 'confirm_password',
    'id'    => 'confirm_password',
    'value' => set_value('confirm_password'),
    'maxlength' => $this->config->item('password_max_length', 'tank_auth'),
    'size'  => 30,
);
$FName = array(
    'name'  => 'FName',
    'id'    => 'FName',
    'value' => set_value('FName'),
    'maxlength' => $this->config->item('username_max_length', 'tank_auth'),
    'size'  => 30,
);
$LName = array(
    'name'  => 'LName',
    'id'    => 'LName',
    'value' => set_value('LName'),
    'maxlength' => $this->config->item('username_max_length', 'tank_auth'),
    'size'  => 30,
);
$option=array(''=>"Select Role");
foreach ($Role as $key) {
    $option[$key['RoleID']]=$key['RoleName'];
}

$RoleID = array('name' => 'RoleID','options' => $option,'selected' => (isset($data_info) && $data_info->RoleID  != "") ? $data_info->RoleID  : "", 'value' => (isset($data_info) && $data_info->RoleID  != "") ? $data_info->RoleID  : set_value('RoleID'),);
// $RoleID = array(
//  'name'  => 'RoleID',
//  'id'    => 'RoleID',
//     'options' => $option,
//  'value' => set_value('RoleID'),
//  'maxlength' => 2,
//  'size'  => 30,
//     'class' => "form-control",
// );
$EmpCode = array(
    'name'  => 'EmpCode',
    'id'    => 'EmpCode',
    'value' => set_value('EmpCode'),
    'maxlength' => 20,
    'size'  => 30,
);
$captcha = array(
    'name'  => 'captcha',
    'id'    => 'captcha',
    'maxlength' => 8,
);
?>
<?php echo form_open($this->uri->uri_string()); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title><?php echo WEBSITE_NAME; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN CORE CSS FRAMEWORK -->
        <link href="<?php echo base_url(); ?>assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="<?php echo base_url(); ?>assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
        <!-- END CORE CSS FRAMEWORK -->
        <!-- BEGIN CSS TEMPLATE -->
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
        <!-- END CSS TEMPLATE -->
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body class="error-body no-top lazy"  data-original="<?php echo base_url(); ?>assets/img/vizn-bg.jpg"  style="background-position: 100% 100%;background-repeat: no-repeat;background-size: cover;">
        <div class="container">
            <div class="row register-container animated fadeInUp">  
                <div class="col-md-7 col-md-offset-2 tiles white no-padding">
                    <div class="p-t-30 p-l-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10"> 
                        <h2 class="normal">Add User</h2>
                    </div>
                    <div class="tiles grey p-t-20 p-b-20 text-black">
                            <?php echo form_open($this->uri->uri_string(), array('class' => 'animated fadeIn', 'id' => 'frm_login')); ?>
                            <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                                <div class="col-md-6 col-sm-6 ">
                                    <?php echo form_label('Email Address', $email['id']); ?>
                                    <?php echo form_input($email); ?>
                                    <?php echo form_error($email['name'], '<p class="error">', '</p>'); ?><?php echo isset($errors[$email['name']])?'<p class="error">'.$errors[$email['name']].'</p>':''; ?>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <?php echo form_label('Password', $password['id']); ?>
                                    <?php echo form_password($password); ?>
                                    <?php echo form_error($password['name'], '<p class="error">', '</p>'); ?><?php echo isset($errors[$password['name']])?'<p class="error">'.$errors[$password['name']].'</p>':''; ?>
                                </div>

                            </div>
                            <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                                <div class="col-md-6 col-sm-6">
                                    <?php echo form_label('Confirm Password', $confirm_password['id']); ?>
                                    <?php echo form_password($confirm_password); ?>
                                    <?php echo form_error($confirm_password['name'], '<p class="error">', '</p>'); ?><?php echo isset($errors[$confirm_password['name']])?'<p class="error">'.$errors[$confirm_password['name']].'</p>':''; ?>
                                </div>
                            </div>
                            <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                                <div class="col-md-6 col-sm-6 ">
                                    <?php echo form_label('First Name', $FName['id']); ?>
                                    <?php echo form_input($FName); ?>
                                    <?php echo form_error($FName['name'], '<p class="error">', '</p>'); ?><?php echo isset($errors[$FName['name']])?'<p class="error">'.$errors[$FName['name']].'</p>':''; ?>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <?php echo form_label('Last Name', $LName['id']); ?>
                                    <?php echo form_input($LName); ?>
                                    <?php echo form_error($LName['name'], '<p class="error">', '</p>'); ?><?php echo isset($errors[$LName['name']])?'<p class="error">'.$errors[$LName['name']].'</p>':''; ?>
                                </div>
                            </div>
                            <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                                <div class="col-md-6 col-sm-6">
                                    <?php echo form_label('Role'); ?>
                                    <?php echo form_dropdown($RoleID); ?>
                                     <!-- <select id="RoleID" name="RoleID">
                                        <option>Select Role</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Sales manager</option>
                                        <option value="3">Support</option>
                                    </select> -->
                                    <?php echo form_error($RoleID['name'], '<p class="error">', '</p>'); ?><?php echo isset($errors[$RoleID['name']])?'<p class="error">'.$errors[$RoleID['name']].'</p>':''; ?>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <?php echo form_label('Employe Code', $EmpCode['id']); ?>
                                    <?php echo form_input($EmpCode); ?>
                                    <?php echo form_error($EmpCode['name'], '<p class="error">', '</p>'); ?><?php echo isset($errors[$EmpCode['name']])?'<p class="error">'.$errors[$EmpCode['name']].'</p>':''; ?>
                                </div>
                            </div>
                            <div class="row p-t-10 m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                                <!-- <div class="control-group  col-md-8">
                                </div> -->
                                <!-- already have an account ? &nbsp;
                                <a href="<?php echo base_url() ?>auth/login">Login</a> -->
                                <div class="text-right">
                                    <button class="register-btn"> Register</button>
                                    <!-- <?php echo form_submit('register', 'Register'); ?> -->
                                </div>
                                
                            </div>
                        <?php echo form_close(); ?>
                    </div>   
                </div>   
            </div>
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN CORE JS FRAMEWORK-->
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/pace/pace.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-lazyload/jquery.lazyload.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/login_v2.js" type="text/javascript"></script>
        <!-- BEGIN CORE TEMPLATE JS -->
        <!-- END CORE TEMPLATE JS -->
    </body>

</html>