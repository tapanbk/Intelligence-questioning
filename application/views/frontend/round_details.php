<div class="col-xs-6 col-md-4 box group_points round_details">
  

<table class="table table-condensed ">
                            
                              <tr>
                                <td>Round Name: </td><td>
                                <?php echo $this->session->userdata('round');?></td>
                            </tr>
                              <tr>
                                  <td><b>Asked to: </b></td>
								  <td>
									<b><?php echo $startGroupName;?></b>
								</td>
                            </tr>

                         
                            <tr>
                                <td><b>Passed to: </b></td> 
                                <td>
									<b><?php echo $currentGroupName; ?></b>
								</td>
                            </tr>
                            <tr>
                                <td>Passed </td> <td>
                                <?php    if($this->session->userdata('passed')==$this->session->userdata('nog'))
                                {
                                    $passed="Audience";
                                }
                                else
                                {
                                    $passed=$this->session->userdata('passed');
                                }
                                     echo $passed; ?>
                                
                                </td>
                            </tr>

                            </tr>

                    
 </table>
    <div class="clearfix"></div>
     <form class="form-horizontal" method="post" action="<?php echo base_url();?>quiz/points">
            <button type="submit"  name="tenpoints" 
                    value="tenpoints" class="btn btn-sm btn-primary col-md-8 points" 
                    title="Add 10 points to the current group">
                    +10 POINTS</button>
            
                
            <button type="submit"  name="fivepoints" value="fivepoints" class="btn btn-sm btn-success  col-md-8 points" 
                    title="Add 5 points to the current group">
                +5 POINTS</button>
     
            <button type="submit" name="nfivepoints" value="n5points" class="btn btn-sm  btn-danger col-md-6 points" 
                    title="Add -5 points to the current group">
                -5 POINTS</button>
 
                   
 </form> 
         <form class="form-horizontal" method="post" action="<?php echo base_url();?>quiz/show_answer">
     
                <button type="submit" name="show_answer" value="show_answer" class="btn btn-sm btn-primary  col-md-6 points" 
                    title="show only answer of the question">
                Show Answer</button>  
                   
 </form> 
    
 
</div>   

