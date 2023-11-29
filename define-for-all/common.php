<?php

date_default_timezone_set('Asia/Kolkata');
$BASE_URL = '';
define("HOSTNAME", 'localhost');
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "taxi");
$BASE_URL = 'http://' . $_SERVER['HTTP_HOST'] . '/taxi_new/';
define("DOCUMENT_ROOT", $_SERVER['DOCUMENT_ROOT'] . '/taxi_new/');


define("WEBSITE_NAME", "American Platinum Limousine Taxy");
define("WEBSITE_EMAIL", "info@aplimo_.co");
define("WEBSITE_NUMBER", "+1 (224) 578-0598");
define("WEBSITE_ADDRESS", "Chicago");
define("ADMIN_EMAIL", "ramizg.aipl@gmail.com");
define('USER_PAN_DIR', 'user_pan/');
define('USER_PROFILE_DIR', 'user_profile/');
define('USER_ADD_PROOF_DIR', 'user_address_proof/');
define('USER_ID_PROOF_DIR', 'user_id_proof/');
define('USER_DIGISIGN_DOC', 'user_digisign_doc/');
define('USER_DIGISIGN_PARTICIPATE_DOC', 'user_digisign_particiate_doc/');
define('USER_PERSONAL_DETAIL_DIR', 'user_personal_detail/');
define('USER_PARTICIPANT_REQ_DIR', 'user_participant_req_detail/');
define('USER_GST_DIR', 'user_gst/');
define('PRODUCT_DIR', 'product/');
define('BLOG_DIR', 'blog/');
define('FEATURE_DIR', 'feature/');
define('BANNER_DIR', 'banner/');
define('INVOICE_DIR', 'invoice/');
define('BANK_INVOICE_DIR', 'bank_invoice/');
define('CAR_DIR', 'car/');
define('CAR_NOC_DIR', 'car_noc/');
define('CAR_NOC_HANDOVER_DIR', 'car_noc_handover/');
define('CAR_VALUATION_DIR', 'car_valuation/');
define('ORDER_DIR', 'order/');
define('UPLOAD_DIR', '../uploads/');
define('UPLOAD_ZIP_DIR', '../uploads_zip/');
define('UPLOAD_FRONT_DIR', 'uploads/');
define('UPLOAD_DIR_NAME', '/uploads/');
define('YARD_PAN_DIR', 'yard_pan/');

define('USER_PAYMENT_QR', 'payment_qr/');

define('USER_BANK_CHEQUE', 'user_bank_cheque/');
define('YARD_BANK_CHEQUE', 'yard_bank_cheque/');
define('MARKETING_KIT', 'marketing_kit/');

define('BASE_URL', $BASE_URL);
define('ROOT_URL', $BASE_URL);
define('DEFAULT_AVATAR', BASE_URL . 'admin/assets/img/profiles/default_avatar_wogjep.jpg');

define('DEFAULT_NO_EMAGE', BASE_URL . 'admin/assets/img/No_image_found.jpg');
define('DEFAULT_NO_IMAGE', BASE_URL . 'assets/images/NO-image.jpg');
define('DEFAULT_BANK_AVATAR', BASE_URL . 'assets/images/NO-image.jpg');

define('UNKNOWN_ERROR', 'There was an unknown error that occurred. You will need to refresh the page to continue working.');


?>