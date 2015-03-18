<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Darts Statistics App">
    <meta name="author" content="Cloud Wales Web Development">
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo $settings->site_title; ?>  - Darts Statistics App</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('');?>assets/css/styles.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="container"> <!-- Ends in the footer.php -->


      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">



            <!-- HOME -->
            <?php if($page == 'home'){ ?>
                <li role="presentation" class="active"><a href="<?php echo base_url(''); ?>">Home</a></li>
            <?php } else { ?>
                <li role="presentation"><a href="<?php echo base_url(''); ?>">Home</a></li>
            <?php } ?>
            



            <!-- ABOUT -->
            <?php if($page == 'about'){ ?>
                <li role="presentation" class="active"><a href="<?php echo base_url('about'); ?>">About</a></li>
            <?php } else { ?>
                <li role="presentation"><a href="<?php echo base_url('about'); ?>">About</a></li>
            <?php } ?>




            <!-- LEAGUE TABLES -->
            <?php if($page == 'league_tables'){ ?>
                <li role="presentation" class="dropdown active">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                      League Tables <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                      <li role="presentation"><a href="<?php echo base_url('league_tables'); ?>">Leage Table 1</a></li>
                      <li class="divider"></li>
                      <li role="presentation"><a href="<?php echo base_url('submit_results'); ?>">Submit Results</a></li>
                    </ul>



                </li>
            <?php } else { ?>
                <li role="presentation" class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                      League Tables <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                      <li role="presentation"><a href="<?php echo base_url('league_tables'); ?>">Leage Table 1</a></li>
                      <li class="divider"></li>
                      <li role="presentation"><a href="<?php echo base_url('submit_results'); ?>">Submit Results</a></li>
                    </ul>

                </li>
            <?php } ?>



            <!-- CONTACT -->
            <?php if($page == 'contact'){ ?>
                <li role="presentation" class="active"><a href="<?php echo base_url('contact'); ?>">Contact</a></li>
            <?php } else { ?>
                <li role="presentation"><a href="<?php echo base_url('contact'); ?>">Contact</a></li>
            <?php } ?>


            <!-- LOGGED IN -->
            <?php if($this->session->userdata('is_logged_in')) { ?>

                <li role="presentation" class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                      Admin <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">              
                      <li role="presentation"><a href="<?php echo base_url(''); ?>">Team Managment</a></li>
                      <li role="presentation"><a href="<?php echo base_url(''); ?>">League Managment</a></li>
                      <li class="divider"></li>
                      <li role="presentation"><a href="<?php echo base_url('users'); ?>">User Managment</a></li>
                      <li role="presentation"><a href="<?php echo base_url(''); ?>">Settings</a></li>
                      <li role="presentation"><a href="<?php echo base_url('logout'); ?>">Logout</a></li>
                    </ul>
                </li>
                <?php } ?>
          
          </ul> 
        </nav>


        <!-- TITLE -->
        <h3 class="text-muted"><?php echo $settings->site_title; ?></h3>



      </div>
      <p><?php echo $this->session->flashdata('message'); ?></p>  