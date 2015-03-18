
<div class="row marketing">
    <div class="col-lg-12">
<h3>New User</h3>
<form role="form" action="<?php echo base_url('users/new_user'); ?>" method="POST">
	<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" id="name" value="<?php echo set_value('name'); ?>" placeholder="Enter name"> <?php echo form_error('name'); ?>
  </div>
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" name="username" id="username" value="<?php echo set_value('username'); ?>" placeholder="Enter email"> <?php echo form_error('username'); ?>
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" name="email" id="email" value="<?php echo set_value('email'); ?>" placeholder="Enter email"><?php echo form_error('email'); ?>
  </div>

  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" id="password" value="<?php echo set_value('password'); ?>" placeholder="Enter password"><?php echo form_error('password'); ?>
  </div>

  <div class="form-group">
    <label for="confirm_password">Confirm Password</label>
    <input type="password" class="form-control" name="confirm_password" id="confirm_password" value="<?php echo set_value('confirm_password'); ?>" placeholder="Confirm Password"><?php echo form_error('confirm_password'); ?>
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>



    </div>
</div>