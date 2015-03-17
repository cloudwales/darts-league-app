<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title></title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>

<?php 
    $attributes = array('class' => 'form-signin');
    echo form_open('auth/validate_login', $attributes);
?>
<div class="col-lg-3 col-lg-offset-4">
<br/><br/>
<div class="panel panel-default">
  <div class="panel-heading">
    <h1 class="panel-title text-center">Please sign in</h1>
  </div>
  <div class="panel-body">  

        <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus><br/>

        <input type="password" id="password" name="password"  class="form-control" placeholder="Password" required><br/>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button></br/>

        <p class="text-center"><a href="<?php echo base_url('');?>">Back to the main site</a></p>

        <?php echo $this->session->flashdata('message'); ?>
        
      <?php echo form_close();?>
      <p></p>
  </div>
  </div>

  </div>

</body>
</html>