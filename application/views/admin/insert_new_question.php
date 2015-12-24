<div class="col-md-9 mainbody">     
    <div class="row">
        <div class="message1">
                         <?php if (isset($msg2)) { ?>
                    
                            <span id="new_question"><?php echo $msg2;?></span>
                        
                            <?php unset($msg2);} ?>
      </div>                 <?php echo validation_errors(); ?>
    </div>
        <div class="row">
            <div class="message2">
                Insert New question
            </div>
        </div> 
    <div class="row">

                   <form class="form-horizontal" method="post" action="<?php echo base_url();?>admin/new_question_process">
                       
                       <div class="form-group">
                                <label class="col-md-3 control-label" for="sn">S.N.</label>
                                 <div class="col-md-6">
                                        <input type="number" class="form-control" name="sn" id="sn" 
                                              value="<?php echo set_value('sn'); ?>" placeholder="Question Number" required>
                                 </div>       
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="question">Question </label>
                                 <div class="col-md-6">
                                        <input type="text" class="form-control" name="question" id="question" 
                                              value="<?php echo set_value('question'); ?>" placeholder="Question" required>
                                 </div>       
                            </div>
                            <div class="form-group">
                              <label class="col-md-3 control-label" for="answer">Answer</label>
                               <div class="col-md-6">
                                       <input type="text" class="form-control" name="answer" id="answer"
                                             value="<?php echo set_value('answer'); ?>" placeholder="answer" required>
                               </div>        
                            </div>
                       
                      
                            <button type="submit" name="submit" value="submit" class="btn btn-primary">Insert</button>
                            <button type="reset" class="btn">Cancel</button>
                                
                       
                       </div></div>

                

               