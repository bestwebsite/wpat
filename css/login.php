<?php 

// get the user selected theme options

global $WPAT; ?>

/****************************************/
/* FORMATTING FOR WP LOGIN PAGE */
/****************************************/

body.login {
  	<?php if( $WPAT['theme_background'] && $WPAT['theme_background_end'] && ! $WPAT['login_bg'] ) { ?>
		background: linear-gradient(to bottom right, <?php echo esc_html( $WPAT['theme_background'] ); ?>, <?php echo esc_html( $WPAT['theme_background_end'] ); ?>);
		background-repeat: no-repeat;
		background-attachment: fixed;
   	<?php } elseif( $WPAT['login_bg'] ) { ?>
		background-image: url('<?php echo esc_html( $WPAT['login_bg'] ); ?>');
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center center;
		background-attachment: fixed;
    <?php } else { ?>
		background: linear-gradient(to bottom right, #545c63, #32373c);
		background-repeat: no-repeat;
		background-attachment: fixed;
    <?php }?>
    height: auto;
}

<?php if( $WPAT['login_bg'] || $WPAT['theme_background'] && $WPAT['theme_background_end'] ) { ?>
body.login:before {
	content: '';
	background: rgba(0,0,0,0.3);
	position: fixed;
	top: 0px;
	right: 0px;
	bottom: 0px;
	left: 0px
}
<?php } ?>

.login a:hover, .login #nav a:hover {
	<?php if( $WPAT['theme_color'] ) { ?>
		color: <?php echo esc_html( $WPAT['theme_color'] ); ?>;
	<?php } else { ?>
		color: #4777CD;
	<?php }?>
}

.login #login {
	width: 360px;
	margin: 130px auto;
	position: relative;
    padding: 40px 40px 40px 40px;
    background: #fff;
    box-shadow: 0px 10px 30px rgba(0,0,0,0.3);
    text-align: center
}

.login h1 {
	position: relative
}

.login h1 a {
	<?php if( $WPAT['logo_upload'] ) { ?>
		background-image: url('<?php echo esc_html( $WPAT['logo_upload'] ); ?>');
	<?php } else { ?>
		background-image: none;
	<?php }?>
	width: auto;
	height: auto;
	padding: 20px 0px;
    background-position: center center;
    <?php if( $WPAT['logo_size'] ) { ?>
		background-size: <?php echo esc_html( $WPAT['logo_size'] ); ?>px;
	<?php } else { ?>
		background-size: 200px;
	<?php }?>
}

<?php if( ! $WPAT['logo_upload'] ) { ?>
.login h1 a:before {
	content: "\f120";
    font-family: dashicons;
    position: absolute;
    top: 50%;
    left: 50%;
    font-size: 70px;
    color: #cfd8e2;
	transform: translate(-50%, -50%);
	text-indent: 0px;
}
<?php }?>

.login .login-message, .login .message.register {
  	width:100%;
   	font-size: 24px;
    line-height: normal;
    <?php if( $WPAT['theme_color'] ) { ?>
		color: <?php echo esc_html( $WPAT['theme_color'] ); ?>;
	<?php } else { ?>
		color: #4777CD;
	<?php }?>
    font-weight: 600;
    border: 0px;
    padding: 0px;
    margin: 0px;
    box-shadow: none
}

.login form {
    margin: 0px;
    padding: 40px;
    background: #fff;
    box-shadow: none;
    text-align: center
}

.login label {
    font-size: 12px;
    text-transform: uppercase;
    font-weight: 600;
    color: #83919e;
    margin-top: 20px;
    display: block;
    text-align: center
}

.login input[type="text"], .login input[type="password"], .login input[type="email"] {
   	border: 0px;
   	border-bottom: 2px solid #cfd8e2;
    background: #fff;
    box-shadow: none;
    text-align: center;
    margin-top: 10px
}

.login input[type="text"]:focus, .login input[type="password"]:focus, .login input[type="email"]:focus,
.login input[type="text"]:hover, .login input[type="password"]:hover, .login input[type="email"]:hover {
    background: #f6f9fd;
}

.login .forgetmenot {
   	width: 100%;
   	padding: 10px 0px 20px 0px;
}

.login .forgetmenot label {
   	text-transform: none;
    font-weight: 400;
}

.login .forgetmenot input[type="checkbox"] {
   	border-color: #cfd8e2
}
  
.login .forgetmenot input[type="checkbox"]:before {
   	<?php if( $WPAT['theme_color'] ) { ?>
		color: <?php echo esc_html( $WPAT['theme_color'] ); ?>;
	<?php } else { ?>
		color: #4777CD;
	<?php } ?>
}

.login input[type="submit"] {
   	width: 100%;
   	<?php if( $WPAT['theme_color'] ) { ?>
		background: <?php echo esc_html( $WPAT['theme_color'] ); ?>!important;
		border: 1px solid <?php echo esc_html( $WPAT['theme_color'] ); ?>!important;
	<?php } else { ?>
		background: #4777CD!important;
		border: 1px solid #4777CD!important;
	<?php } ?>
	color: #fff!important;
    font-weight: 600;
    padding: 10px 2px!important;
    height: auto!important;
    line-height: normal!important;
    text-shadow: none!important;
    text-transform: uppercase;
    box-shadow: none
}

.login #nav {
	position: absolute;
	right: 0px;
	bottom: -40px;
	left: 0px;
	text-align: center;
	color: #fff
}

.login #nav a, .login #backtoblog a {
	color: #fff
}

.login #backtoblog {
	position: fixed;
	top: 0px;
	left: 0px;
	z-index: 0
}

.login div#login_error, p.message {
    margin: 20px 20px 5px 20px!important;
}

.login p.message {
	background: #e7f4f9!important
}

.login div#login_error {
	background: #f7e6e6!important
}

.login #reg_passmail {
 	font-size: 12px;
 	color: #83919e;
}

.login .privacy-policy-page-link {
    margin: 0px;
}

.login .privacy-policy-link {
 	color: #83919e;
    text-decoration: none;
}

/****************************************/
/* MOBILE VIEW */
/****************************************/

@media only screen and (max-width: 750px) {

	body.login {
		padding: 20px;
	}

	.login #login {
		width: 100%;
		margin: 40px auto;
		padding: 30px 0px;
	}

	.login h1 a::before {
		font-size: 50px;
	}

	.login form {
		padding: 20px;
	}

	.login label {
		margin-top: 5px;
	}

}

<?php if( $WPAT['css_login'] ) { ?>

/****************************************/
/* CUSTOM CSS BY USER */
/****************************************/

<?php echo esc_html( $WPAT['css_login'] ); ?>

<?php } ?>
