<div class="row clearfix">
	<div class="col-md-12 column">
		<nav class="navbar navbar-default" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span><span
						class="icon-bar"></span><span class="icon-bar"></span><span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo base_url();?>">Home</a>
			</div>
			<div class="collapse navbar-collapse"
				id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<?php
						foreach ( $categories as $category => $cat_name ) {
							?>
				
						<li>
							<a href="<?php echo base_url().$cat_name['name'] ?>"><?php echo $cat_name['name']?></a>
						</li>
						<?php }?>
						
					</ul>
						

				<!-- 						<form class="navbar-form navbar-left" role="search"> -->
				<!-- 					<div class="form-group"> -->
				<!-- 						<input class="form-control" type="text" /> -->
				<!-- 					</div> -->
				<!-- 					<button type="submit" class="btn btn-default">Submit</button> -->
				<!-- 				</form> -->
				<ul class="nav navbar-nav navbar-right">
					<li><button type="submit" id="logoutBtn"
							class="btn btn-default btn-lg">logout</button></li>
					<li>
						<!-- Trigger the modal with a button -->
						<button type="button" class="btn btn-default btn-lg" id="loginBtn">Login</button>
						<!-- Modal -->
						<div class="modal fade" id="myModal" role="dialog">
							<div class="modal-dialog">
								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header" style="padding: 35px 50px;">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>
											<span class="glyphicon glyphicon-lock"></span> Login
										</h4>
									</div>
									<div class="modal-body" style="padding: 40px 50px;">
										<!-- 										<form role="form" action="login.php" method="POST"> -->
										<!-- 											<div class="form-group"> -->
										<!-- 												<label for="usrname"><span class="glyphicon glyphicon-user"></span> -->
										<!-- 													Username</label> <input type="text" name="login" required -->
										<!-- 													class="form-control" id="usrname" placeholder="Enter login"> -->
										<!-- 											</div> -->
										<!-- 											<div class="form-group"> -->
										<!-- 												<label for="psw"><span class="glyphicon glyphicon-eye-open"></span> -->
										<!-- 													Password</label> <input type="password" name="password" -->
										<!-- 													required class="form-control" id="psw" -->
										<!-- 													placeholder="Enter password"> -->
										<!-- 											</div> -->
										<!-- 											<div class="checkbox"> -->
										<!-- 												<label><input type="checkbox" value="" checked>Remember me</label> -->
										<!-- 											</div> -->
										<!-- 											<button type="submit" name="submit" -->
										<!-- 												class="btn btn-success btn-block"> -->
										<!-- 												<span class="glyphicon glyphicon-off"></span> Login -->
										<!-- 											</button> -->
										<!-- 										</form> -->
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
										
										?>
									</div>
									<div class="modal-footer">
										<button type="submit"
											class="btn btn-danger btn-default pull-left"
											data-dismiss="modal">
											<span class="glyphicon glyphicon-remove"></span> Cancel
										</button>
										<p>
											Not a member? <a
												href="<?php echo base_url().'login/register'; ?>">Sign Up</a>
										</p>
										<p>
											Forgot <a href="#">Password?</a>
										</p>
									</div>
								</div>

							</div>
						</div>
					</li>
					<li>
						<!-- Trigger the modal with a button -->
						<button type="button" class="btn btn-default btn-lg"
							id="registerBtn">Register</button> <!-- Modal -->
						<div class="modal fade" id="regModal" role="dialog">
							<div class="modal-dialog">
								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header" style="padding: 35px 50px;">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>
											<span class="glyphicon glyphicon-lock"></span> Register
										</h4>
									</div>
									<div class="modal-body" style="padding: 40px 50px;">
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
<!-- 										<form role="form" action="register.php" method="POST"> -->
										<!-- 											<div class="form-group"> -->
										<!-- 												<label for="usrname"><span class="glyphicon glyphicon-user"></span> -->
										<!-- 													Username</label> <input class="form-control" type="text" -->
										<!-- 													name="new_login" id="usrname" placeholder="login" -->
										<!-- 													required="" /> -->
										<!-- 											</div> -->
										<!-- 											<div class="form-group"> -->
										<!-- 												<label for="email"><span -->
										<!-- 													class="glyphicon glyphicon-envelope"></span> Еmail</label> -->
										<!-- 												<input class="form-control" type="email" name="email" -->
										<!-- 													id="email" placeholder="Enter email" required="" /> -->
										<!-- 											</div> -->
										<!-- 											<div class="form-group"> -->
										<!-- 												<label for="psw"><span class="glyphicon glyphicon-eye-open"></span> -->
										<!-- 													Password</label> <input class="form-control" -->
										<!-- 													type="password" name="new_password" id="psw" -->
										<!-- 													placeholder="Enter password" required="" /> -->
										<!-- 											</div> -->
										<!-- 											<div class="form-group"> -->
										<!-- 												<label for="r_psw"><span -->
										<!-- 													class="glyphicon glyphicon-eye-open"></span> Password</label> -->
										<!-- 												<input class="form-control" type="password" -->
										<!-- 													name="new_r_password" id="r_psw" -->
										<!-- 													placeholder="Repeat password" required="" /> -->
										<!-- 											</div> -->
										<!-- 											<div class="checkbox"> -->
										<!-- 												<label><input type="checkbox" value="" checked>Remember me</label> -->
										<!-- 											</div> -->
										<!-- 											<button type="submit" name="register" -->
										<!-- 												class="btn btn-success btn-block"> -->
										<!-- 												<span class="glyphicon glyphicon-off"></span> register -->
										<!-- 											</button> -->
										<!-- 										</form> -->
									</div>
									<div class="modal-footer">
										<button type="submit"
											class="btn btn-danger btn-default pull-left"
											data-dismiss="modal">
											<span class="glyphicon glyphicon-remove"></span> Cancel
										</button>
										<p>
											Already registered? <a
												href="<?php echo base_url().'login'; ?>">Sign In</a>
										</p>
										<p>
											Forgot <a href="#">Password?</a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</div>