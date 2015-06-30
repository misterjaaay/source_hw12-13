<?php
echo validation_errors ();
echo 'login view';
$attributes = array (
		'class' => 'login_form' 
);
echo form_open ( 'login/validate', $attributes );
echo form_label ( 'username', 'username' );
echo form_input ( 'username', '', 'id="username" ' );
echo '<br />';
echo form_label ( 'Password', 'password' );
echo form_password ( 'password', '', 'id="password" ' );
echo '<br />';
echo form_submit ( 'loginBtn', 'Login' );
echo form_close ();