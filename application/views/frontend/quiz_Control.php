<div class="question_control"> 

 <form class="form-horizontal" method="post" action="<?php echo base_url();?>quiz/question_control">
            <button type="submit"  name="right_answer" 
                    value="right_answer" class="btn btn-primary btn-sm col-md-4" 
                    title="Click when answer is right and update the obtained marks">
                    Right Answer</button>
            
                
            <button type="submit"  name="next_question" value="next_question" class="btn btn-sm  btn-success  col-md-4" 
                    title="pls cick to ask the next question. No points is updated">
                Next Question</button>
     
            <button type="submit" name="wrong_answer" value="wrong_answer" class="btn btn-sm  btn-danger col-md-4" 
                    title="pass question to next group">
                Wrong Answer</button>
                   
 </form> 
    
     </div>

</div>
<div class="bottom_separator"></div>
</div>
   
 