
        
<div class="col-md-9 mainbody">     
    <div class="row">
        <div class="message1">
                        <?php if (isset($msg4)) { ?>
                        <span id="change_group_data"><?php echo $msg4;?></span>
                   <?php unset($msg4);} ?>
                   <?php echo validation_errors(); ?>
      </div>
                
                    
                
    </div>
        <div class="row">
            <div class="message2">
                Enter Group symbol, School Name and points to update the name and points of that group..<br>
                New group with  points can be inserted from here...
            </div>
        </div> 
    <div class="row">
        
        <form class="form-horizontal" method="post" action="<?php echo base_url();?>admin/update_group_data">
                           
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="groupSymbol">Group Symbol</label>
                                 <div class="col-md-6">
                                    <input type="text" class="form-control" id="groupSymbol" type="text" 
                                            value="<?php echo set_value('groupSymbol'); ?>" name="groupSymbol" placeholder="Enter Group Symbol" required>
                                 </div>    
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="school">School Name:</label>
                                 <div class="col-md-6">
                                    <input type="text" class="form-control" id="school" name="school" type="text" 
                                            value="<?php echo set_value('school'); ?>" placeholder="Enter School Name" required>
                                 </div>    
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="marks">Marks</label>
                                 <div class="col-md-6">
                                    <input type="number" class="form-control" id="marks" name="points" 
                                            value="<?php echo set_value('points'); ?>" placeholder="Enter Obtained points">
                                 </div>
                              
                            </div>
                            
                            <button type="submit" name="submit" value="submit" class="btn btn-primary col-md-offset-3 col-md-2">UPDATE</button>
                            <button type="reset" class="btn btn-primary  col-md-2">Reset</button>
                    </form>
                       
    </div>
</div>
        

                
                

                              
               
               
               
               