<div class="col-md-9 mainbody">     
    <div class="row">
        <div class="message1">
                        <?php if (isset($msg1)) { ?>

                                <span id="update_quiz_database"><?php echo $msg1;?></span>
                           <?php unset($msg1); } 
                           echo validation_errors();
                           ?>
      </div>
    </div>
        <div class="row">
            <div class="message2">
                Enter round Name, start question and end question for the quiz round
            </div>
        </div> 
    <div class="row">
        <form class="form-horizontal" method="post" action="<?php echo base_url();?>admin/insert_new_round">
                   
                        <div class="form-group">
                                <label class="col-md-3 control-label" for="roundName">Round Name</label>
                                 <div class="col-md-6">
                                    <input type="text" class="form-control" id="roundName" name="rname" 
                                           value="<?php echo set_value('rname'); ?>"placeholder="Round Name" required>
                                 </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="qstart">Question Start</label>
                                <div class="col-md-6">
                                <input type="number" class="form-control" id="qstart" name="qstart" 
                                       value="<?php echo set_value('qstart'); ?>" placeholder="Question Start" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="qend">Question End</label>
                                <div class="col-md-6">
                                    <input type="number" class="form-control" id="qend" name="qend" 
                                           value="<?php echo set_value('qend'); ?>" placeholder="Question End" required>
                               </div>
                            </div>
                            <button type="submit" name="submit" value="submit" class="btn btn-primary col-md-offset-3 col-md-2">Insert</button>
                            <button type="reset" class="btn btn-primary  col-md-2">Reset</button

        

        </form></div></div>

                              
               
               
               
               