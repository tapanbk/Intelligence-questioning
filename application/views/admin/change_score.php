<div class="col-md-9 mainbody">     
    <div class="row">
        <div class="message1">
                        <?php if (isset($msg4)) { ?>
                        <span id="change_group_data"><?php echo $msg4;?></span>
                   <?php unset($msg4); }
                   echo validation_errors();
                   ?>
      </div>
    </div>
        <div class="row">
            <div class="message2">
               Enter group Name and points to update the points of that group
            </div>
        </div> 
    <div class="row">
                <form class="form-horizontal" method="post" action="<?php echo base_url();?>admin/correct_score">
                    
                    
                    <div class="form-group">
                                <label class="col-md-3 control-label" for="groupSymbol">Group Symbol</label>
                                 <div class="col-md-6">
                                    <input type="text" class="form-control" name="groupSymbol" id="groupSymbol" 
                                           value="<?php echo set_value('groupSymbol'); ?>" placeholder="Group Symbol like A B C" required>
                                 </div>   
                            </div>
                           <div class="form-group">
                                <label class="col-md-3 control-label" for="marks">Marks</label>
                                 <div class="col-md-6">
                                    <input type="number" class="form-control" name="marks" id="marks" 
                                           value="<?php echo set_value('marks'); ?>" placeholder="Points Obtained" required>
                                 </div>   
                            </div>   
                      <button type="submit" name="submit" value="submit" class="btn btn-primary col-md-offset-3 col-md-2">Save changes</button>
                      <button type="reset" class="btn btn-primary  col-md-2">Reset</button>
                    
                </form>
                

            </div>
        </div>
    
                

                              
               
               
               
               