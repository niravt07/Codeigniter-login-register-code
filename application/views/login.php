
	<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Login</h1>
	               		
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

				<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-6">
				<?php if (isset($error)) : ?>
						<div class="alert alert-danger" role="alert">
						<span class="close" data-dismiss="alert" aria-label="close">&times;</span>
							<?= $error ?>
						</div>
				<?php endif; ?>
						</div>
				</div>

					<?php echo form_open('form/login'); ?>
					<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-6">
						<hr />

						<div class="form-group">
							<label for="email" class="col-md-4 control-label">Email</label>
							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
									<input type="email" class="form-control" name="email" value="<?php echo set_value('email'); ?>"  placeholder="Enter your Email"/>
								</div>
							</div>
						</div>

						

						<div class="form-group">
							<label for="password" class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" value="<?php echo set_value('password'); ?>"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>

						
						<hr />
						<div class="form-group ">
						    <div class="col-md-2"></div>
						    <div class="col-md-5">
							<button type="submit" class="btn btn-success btn-block"><i class="fa fa-sign-in"></i> Sign In</button>
							</div>
							<div class="col-md-3">
							<a href="<?php echo base_url();?>form/register"><button type="button" class="btn btn-primary btn-block"><i class="fa fa-user"></i> Register</button></a>
							</div>
						</div>
						<hr />
				         </div>
				         </div>
					</form>
				</div>
			</div>
		</div>
	
