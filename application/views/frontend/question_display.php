<div class="row">
    
         <div class="col-xs-6 col-md-9 box question_display_box">
            <div class="row">
             <?php
             if (isset($question)) { 
                $exetn= strchr($question,'.');
		if($exetn=='.jpg'||$exetn=='.jpeg'||$exetn=='.png')
		{
                        ?>
 

                        <span id="question_display">
                        <a href="<?php echo base_url('assets/images/'.$this->session->userdata('table').'/'.$question)?>" target="_blank">
                            <img src="<?php echo base_url('assets/images/'.$this->session->userdata('table').'/'.$question);?>" alt="picture"></a></span>
                        
                        
		<?php
		}
		else
		{
                    ?>
                    <span id="question_display"><h3><?php echo $question;?></h3></span>
                    <?php unset($question); 
		
		} 
                   
             }else
             {
                 echo "Please choose a question from available list";
             }
                   
                   
                   ?>
              </div>
                    <div class="clearfix"></div>
                    <div class="col-xs-6  col-md-12 answer_display">
                    <?php if($this->session->userdata('answer')){ ?>
                        <span>Answer: <b><?php echo $this->session->userdata('answer')?></b></span>
                   <?php $this->session->unset_userdata('answer'); }?>
                        
                    </div>
    </div>
          
           <!-- display the question and when right answer is clicked displays the answer --> 
                      



                        