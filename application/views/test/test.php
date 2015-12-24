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
        
$('button').click(function() {
   

    $.ajax({
        url: link,
        type: "POST",
        data: {
            'submit': $(this).val()
        }
        
        success:function( msg ) {
         alert( "updated: " + msg );
        }
    });
});


        </script>
       
  <style type="text/css">

      
</style>
</head> 
<body class="container">
    
   <?php


$this->load->view('test/test2');
?>

 <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
 <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    
  </body>
</html>
  