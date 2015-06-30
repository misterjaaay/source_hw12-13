<?php
echo validation_errors ();
echo 'login view';
$attributes = array (
		'class' => 'login_form' 
);
echo form_open ( 'login/register_form', $attributes );
?>
<div class="form-group">
<?php
echo '<span class="glyphicon glyphicon-user"></span><br />';
echo form_label ( 'new_login', 'new_login' );

echo form_input ( 'new_login', '', 'id="new_login", class="form-control" ' );
?>
									</div>
<div class="form-group">
<?php

echo form_label ( 'email', 'email' );
echo form_input ( 'email', '', 'id="email", class="form-control" ' );
?>
									</div>
<div class="form-group">
<?php
echo form_label ( 'new_password', 'new_password' );
echo form_password ( 'new_password', '', 'id="new_password", class="form-control" ' );
?>
									</div>
<div class="form-group">
<?php

echo form_label ( 'repeat password', 'repeat_password' );
echo form_password ( 'repeat_password', '', 'id="repeat_password", class="form-control" ' );
?>
</div>
<?php
echo form_submit ( 'loginBtn', 'Login', 'class="btn btn-success btn-block"' );
echo form_close ();
?>