<div class="col-md-9 mainbody">     

        <div class="row">
            <div class="message2">
                Enter question number to display the answer
            </div>
        </div> 
    <div class="row">

        <form  class="form-horizontal" method="post" action="<?php echo base_url();?>admin/get_answer">
                <div class="form-group">
                                <label class="col-md-2 control-label" for="sn">S.N.</label>
                                 <div class="col-md-6">
                                    <input type="number" class="form-control" name="qno" id="sn" 
                                          value="<?php echo set_value('qno'); ?>" placeholder="Enter Question Number" required>
                                 </div>   
                </div>
            <button type="submit" name="submit" value="submit" class="btn btn-primary col-md-offset-3 col-md-2">submit</button>
            <button type="reset" class="btn btn-primary  col-md-2">Reset</button>
        </form>
                  
  </div>
        <div class="row">
        <div class="message1">
                         <?php 
                   if (isset($qno)) { ?>  
            <table class="table table-bordered">
                        <tr>
                            <td>
                                <span id="qno"><?php echo '<b>Question Number: </b></td><td>'.$qno;?></span>
                            </td>
                        <tr>
                            <td>  
                                <span id="question"><?php echo '<b>Question: </b></td><td>'.$question;?></span>
                            </td>
                        </tr>
                     <tr>
                         <td>  
                            <span id="answer"><?php echo '<b>Answer: </b></td><td>'.$answer;?></span>
                        </td>
                     </tr>   
            </table>
                   <?php unset($msg);}
                 if(isset($no_answer)){?>
                    <span id="no_answer">Sorry !!! question is not available at the moment</span><br>
               <?php }
                   ?>
      </div>
    </div>
       </div>
       
       
 