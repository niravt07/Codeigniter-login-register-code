
	<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Register</h1>
	               		
	               	</div>
	            </div> 
				<div class="main-login main-center form-horizontal">

				<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-6">
				<?php if(validation_errors()){?>
							<div class="alert alert-danger alert-dismissable fade in">
  							<span class="close" data-dismiss="alert" aria-label="close">&times;</span>
			                   <?php echo validation_errors(); ?> 
			                </div>
				<?php } ?>
				</div>
				</div>

					<?php echo form_open('form/register'); ?>
					<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-6">
						<hr />
						<div class="form-group">
							<label for="name" class="col-md-4 control-label">Your Name</label>
							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" value="<?php echo set_value('name'); ?>"  placeholder="Enter your Name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="col-md-4 control-label">Your Email</label>
							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" value="<?php echo set_value('email'); ?>"  placeholder="Enter your Email"/>
								</div>
							</div>
						</div>

						<?php /* <div class="form-group">
							<label for="username" class="col-md-4 control-label">Username</label>
							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" value="<?php echo set_value('username'); ?>"  placeholder="Enter your Username"/>
								</div>
							</div>
						</div>  */ ?>

						<div class="form-group">
							<label for="password" class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" value="<?php echo set_value('password'); ?>" placeholder="Enter your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="col-md-4 control-label">Confirm Password</label>
							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="passconf" value="<?php echo set_value('passconf'); ?>"  placeholder="Confirm your Password"/>
								</div>
							</div>
						</div>
						<hr />
						<div class="form-group ">
						    <div class="col-md-2"></div>
						    <div class="col-md-6">
							<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-user"></i> Register</button>
							</div>
							<div class="col-md-2">
							<a href="<?php echo base_url();?>form/login"><button type="button" class="btn btn-success"><i class="fa fa-sign-in"></i> Sign In</button></a>
							</div>
						</div>
						<hr />
				         </div>
				         </div>
					</form>
				</div>
			</div>
		</div>
	
