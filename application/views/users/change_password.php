<div class="row marketing">
    <div class="col-lg-12">
<h3>
  Change Password
</h3>
<form role="form" action="<?php echo base_url('users/change_password'); ?>/<?php echo $user->id; ?>" method="POST">
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Enter New Password"> <?php echo form_error('password'); ?>
  </div>

  <div class="form-group">
    <label for="confirm_password">Confirm Password</label>
    <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password"> <?php echo form_error('confirm_password'); ?>
  </div>
  

  <button type="submit" class="btn btn-default">Submit</button>
</form>



    </div>
</div>