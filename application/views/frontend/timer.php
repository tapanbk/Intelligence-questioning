
     <div class="timer col-xs-6 col-md-3">
         <?php
            if(($this->session->userdata('timer'))==20)
            { 
                ?>
                  <script>
                        var secs=20;
                    </script>
              <?php    
            }else{
               
                ?>
                  <script>
                   var secs=10;
                    </script>  
                 <?php }?>   
    
            
                    <input type="button" id="cntdwn" value="<?php echo $this->session->userdata('timer')?>" /> 

                   <input type="button" id="pr" name="start" onclick="resume()" value="Start"/> 
     </div>



   <div class="bottom_separator"></div>
</div> 