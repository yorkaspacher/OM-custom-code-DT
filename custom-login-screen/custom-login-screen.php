<?php
/*
 * Plugin Name: Custom Code for MyArrow
 * Description: Addon code for MyArrow App
 * Author: Benjamin Bradley
 * Author URI: https://b.enjam.in
 * Version: 1.0.0
 * License: GPLv2 or later
*/

// Login Screen Customization
function arrow_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a{
        background-image: url("https://myarrow.app/wp-content/uploads/2019/05/arw-hz-80x80.png");
	height:100px;
	width:320px;
	background-size: 150px;
	background-repeat: no-repeat;
        padding-bottom: 30px;
    	}
    	#login h1 { display:block !important; }
    	body.login {background-color:#fff;}
    	#loginform {box-shadow:none;}
    	#loginform input {border-radius:10px;padding:10px;}
    	#wp-submit {padding: 0 12px 2px !important;}
    	#login {font-size:1.8em;}
    	.privacy-policy-page-link {display:none;}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'arrow_login_logo' );

/*
Note: Top Menu Bar Icon has had to be hard coded into the dt-assets/parts/nav-offcanvas-topbar.php template file due to DT not utilizing Child Themes
*/

/* Additional Group Fields are added on the Custom Group Fields Plugin */
