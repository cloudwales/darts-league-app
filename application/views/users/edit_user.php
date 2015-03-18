<div class="row marketing">
    <div class="col-lg-12">
<h3>Edit User</h3>
<form role="form" action="<?php echo base_url('users/edit_user'); ?>/<?php echo $user->id; ?>" method="POST">
	<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" id="name" value="<?php echo $user->name; ?>" placeholder="Enter name"> <?php echo form_error('name'); ?>
  </div>
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" name="username" id="username" value="<?php echo $user->username; ?>" placeholder="Enter email" disabled> <?php echo form_error('username'); ?>
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" name="email" id="email" value="<?php echo $user->email; ?>" placeholder="Enter email"><?php echo form_error('email'); ?>
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>



    </div>
</div>