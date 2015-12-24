<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?php echo $title;?></title>

    <!-- Bootstrap -->
   <link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/admin_style.css'); ?>" rel="stylesheet">
    <script src="<?php echo base_url('assets/js/Newjscript.js');?>"></script>
 
    
  
  
  <style type="text/css">
      
      
</style>

<link rel="SHORTCUT ICON" href="<?php echo base_url('assets/event_images/quiz.png');?>" />
    <link rel="icon" href="<?php echo base_url('assets/event_images/quiz.png');?>" type="image/png" />
</head> 
<body class="container">
<div class="navigation">
    <nav role="navigation" class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="<?php echo base_url('admin');?>" class="navbar-brand">Admin Panel</a>
        </div>
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">ADMIN  &nbsp;&nbsp;<span class="glyphicon glyphicon-menu-hamburger right"></span></a>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="<?php echo base_url('admin/profile');?>">Profile<span class="glyphicon glyphicon-user right"></a></li>
                        <li><a href="#">Logyout<span class="glyphicon glyphicon-log-out right"></a></li>
                        
                    </ul>
                </li>
        </div>
    </nav>
</div>
    
    <div class="clearfix"></div>