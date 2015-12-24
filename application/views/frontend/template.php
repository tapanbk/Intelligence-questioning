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
    <script src="<?php echo base_url('assets/js/Newjscript.js');?>"></script>
 
    <script>
      var secs=20;
  </script>

 
  </head>
  <body class="container" >
     
      <div class="col-xs-16 col-md-12 " style="background-color: lavender"> 
        <div class="row">
            <div class="col-xs-16 col-md-12 main_header box">
                       <?php $this->load->view('frontend/header.php');?>
                <!--header of the quiz  -->
            </div>
          
        </div>
         
          
 

<div class="row">
         <div class="col-xs-6 col-md-9 box question_display">
            
             <?php $this->load->view('frontend/question_display');?>
          
           <!-- display the question and when right answer is clicked displays the answer --> 
          </div>
    
    


 <div class="col-xs-6 col-md-3 timer_wrapper  box timer_wrapper">
     
    <?php $this->load->view('frontend/timer');?>  
<!-- Timer---------->
    
 </div> 
 <div class="bottom_separator"></div>
</div>

          
          

 <div class="row">
          <div class="col-xs-6 col-md-3 box">
         
              <?php $this->load->view('group_points');?>
                   <!---- School Symbol School Name and their points ---->
          
            </div>
            
    
         
         
<div class="col-xs-6 col-md-4 box">
<div>
    <?php $this->load->view('frontend/round_details');?>
   <!-- Contains details about current group name, start group name, qno and no of queestions passes-->

</div>
    <div>
          <?php $this->load->view('frontend/question_control');?>
      <!-- button of right answer wrong answer , next question-->
     </div> 

</div>
     


         
     <div class="col-xs-6 col-md-5 box"> 
          <?php $this->load->view('frontend/available_questions');?>
                    <!------List of available questions ---->
     </div>

 </div>
  <div class="bottom_separator"></div>

    <div class="row" >
        <?php$this->load->view('frontend/footer');?>
<!---Footer of the quiz-->
    </div>
  
    <div class="bottom_separator"></div>
</div>
    
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    
  </body>
</html>
  