<div class="container">
<br><br>
	<div class="row">
	<div class="col-md-10">
	</div>
	<div class="col-md-2">
		<a href="<?php echo base_url();?>form/logout"><button class="btn btn-danger"><i class="fa fa-sign-out"></i> Logout</button></a>
	</div>
	</div>
	<div class="row">
	<div class="col-md-12">
	<h3>You have successfully logged in!</h3>

	<p>Registered Member <br><?php echo $_SESSION['email'];?></p>
	</div>
	</div>
</div>