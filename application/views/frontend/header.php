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
    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/fontawesome.css'); ?>" rel="stylesheet">
    
    <script src="<?php echo base_url('assets/js/Newjscript.js');?>"></script>
    <link rel="SHORTCUT ICON" href="<?php echo base_url('assets/event_images/quiz.png');?>" />
    <link rel="icon" href="<?php echo base_url('assets/event_images/quiz.png');?>" type="image/png" />
 
  </head>
  <body class="container" >
     
      <div class="col-xs-16 col-md-12" style="background-color: lavender"> 
        <div class="row">
            <div class="col-xs-16 col-md-12 main_header">
                <div class="col-md-2 event_image">
                    <img src="<?php echo base_url('assets/event_images/Logo_NCO_final.jpg');?>" alt="Brushup online">
                </div>
                <div class="col-md-10 text-center title_wrapper">
                    <div class="title">2<sup>ND</sup> INTER SCHOOL ICT QUIZ CONTEST 2015<br>
                        <span class="game"><?php echo strtoupper($this->session->userdata('game')).' GAME';?></span>
                    </div>
                    <div class="title_hilighter"></div>
                </div>
                             <!--header of the quiz  -->
            </div>
        </div>
          
        
         