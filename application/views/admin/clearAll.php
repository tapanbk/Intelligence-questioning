<div class="col-md-9 mainbody">     

        <div class="row">
            <div class="message2">
                To reset the various parts of the database table
            </div>
        </div> 
    <div class="row reset_all"> 
            <form class="form-horizontal" method="post" action="<?php echo base_url();?>admin/clearAll">
            <button type="submit"  name="rCRQuestion" 
                    value="submit" class="btn btn-primary col-md-5" 
                    title="set start question and end question to 0 and round Name to UNKNOWN">
                    reset current round question</button>
            <div class="clearfix"></div>
                
            <button type="submit"  name="clearCGDWP" value="submit" class="btn btn-primary  col-md-5" 
                    title="delete all the school name and set school name to default and respective points to 0">
                clear current group details with point</button>
                    
             <div class="clearfix"></div>
             
             
            <button type="submit"  name="rstROund" value="submit"class="btn btn-primary  col-md-5" 
                    title="Sets current group and Start group to A and question table to default database table Question ">
                reset round</button>
             <div class="clearfix"></div>
             
            <button type="submit"  name="clearAllExceptQnaDatabase" value="submit"class="btn btn-primary col-md-5" 
                    title="clear all the above option">clear expect qna database</button>
             <div class="clearfix"></div>
             
            <button type="submit"  name="factoryReset" value="submit"class="btn btn-primary col-md-5" 
                    title="ALert!!! clear all the above and current database question">factory reset</button>
        </div> 
                     <?php if (isset($msg)) { ?>
                    
                        <span id="remain_casual"><?php echo $msg;?></span>
                   <?php } ?>
                    </p>
                          </div>
                 
                </form>
                 

            </div>
        </div>
    </div>
                        <!-- /block -->
                    </div>
</div></div>

                

                              
               
               
               
               