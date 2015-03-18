<div class="row marketing">
    <div class="col-lg-12">
     <h3>Settings</h3> 
		
		<form role="form" action="<?php echo base_url('settings'); ?>" method="POST">
			<div class="form-group">
		    	<label for="site_title">Site Name</label>
		    	<input type="text" class="form-control" name="site_title" id="site_title" value="<?php echo $settings->site_title; ?>" placeholder="Site Title"> <?php echo form_error('site_title'); ?>
		  	</div>
		  	<div class="form-group">
		    	<label for="site_email">Site Email</label>
		    	<input type="email" class="form-control" name="site_email" id="site_email" value="<?php echo $settings->site_email; ?>" placeholder="Site email" > <?php echo form_error('site_email'); ?>
		  	</div>


		  <button type="submit" class="btn btn-default">Submit</button>
		</form>
       
    </div>
</div>