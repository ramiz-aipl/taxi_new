<?php
if ($login_by_username AND $login_by_email) {
	$login_label = 'Email or login';
} else if ($login_by_username) {
	$login_label = 'Login';
} else {
	$login_label = 'Email';
}
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'class'	=> 'form-control',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
$password = array(
	'name'	=> 'password',
        'class'	=> 'form-control',
	'id'	=> 'password',
	'size'	=> 30,
);
$remember = array(
	'name'	=> 'remember',
	'id'	=> 'remember',
	'value'	=> 1,
	'checked'	=> set_value('remember'),
	'style' => 'margin:0;padding:0',
);
$login_btn = array(
	'value'	=> 'Login',
	'type'	=> 'submit',
	'class'	=> 'btn btn-block btn-primary mb-4',
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title><?php echo WEBSITE_NAME; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<!-- <link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.ico" type="image/x-icon"> -->
	<link rel="icon" href="<?php echo base_url(); ?>assets/images/icons.png" type="image/x-icon">
	<!-- vendor css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

</head>
<div class="auth-wrapper" style="background-image: url(<?php echo base_url()?>assets/img/glass_banner.png);">
	<div class="auth-content" >
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<?php echo form_open($this->uri->uri_string()); ?>
					<div class="card-body">
						<img src="<?php echo base_url(); ?>assets/img/logo2.jpeg" alt="" class="img-fluid mb-4">
						<h4 class="mb-3 f-w-400">Login </h4>
						<div class="form-group mb-3">
							<label class="floating-label" for="login">Email</label>
							<?php echo form_input($login); ?>
							<?php echo form_error($login['name'], '<p class="error" style="color: red;">', '</p>'); ?><?php echo isset($errors[$login['name']]) ? '<p class="error" style-"color:red;">' . $errors[$login['name']] . '</p>' : ''; ?>
						</div>
						<div class="form-group mb-4">
							<label class="floating-label" for="Password">Password</label>
							<?php echo form_password($password); ?>
							<?php echo form_error($password['name'],'<p class="error" style="color: red;">', '</p>'); ?><?php echo isset($errors[$password['name']]) ? '<p class="error" style="color:red;">' . $errors[$password['name']]. '</p>' : ''; ?>
						</div>
					</div>
					<div class="custom-control custom-checkbox text-left mb-4 mt-2">
						<?php echo form_checkbox($remember); ?>
						<?php echo form_label('Remember me', $remember['id']); ?>
					</div>
					<?php echo form_input($login_btn); ?>
					<p class="mb-2 text-muted">Forgot password? <?php echo anchor('/auth/forgot_password/', 'Reset'); ?></p>
					<!-- x -->
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="<?php echo base_url(); ?>assets/js/vendor-all.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/ripple.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pcoded.min.js"></script>



</body>

</html>

<!-- OLD LOGIN FORM -->