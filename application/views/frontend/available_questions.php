<div class="col-xs-6 col-md-4 box"> 
    <div>
<?php
$no=0;
$i=01;

foreach($data as $row){
    if($row['flag'])
    {
       if($i<10)
       {
           $i="0".$i;   
       }
        $temp[$i]=$row['qno'];
        $link='quiz/index/'.$temp[$i];?>
        <a href="<?php echo base_url($link);?>"><?php echo $i;?></a><?php  
          $no=1;      
    }
     $i++;
}
    if($no==0)
    {   ?>
        <div class="message1">
                
            No question available.<br>
            Please choose the appropriate question round from admin panel.
            
        </div>
         <?php            }
 ?>
        
        <!------List of available questions ---->
     </div>
    <div class="clearfix"></div>
    

  

