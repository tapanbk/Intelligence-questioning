<div class="col-md-9 mainbody">     
    <div class="row">
        <div class="message1">
                        <?php if (isset($msg1)) { ?>

                                <span id="insert_new_round"><?php echo $msg1;?></span>
                           <?php unset($msg1); } 
                           echo validation_errors();
                           ?>
                                
      </div>
    </div>
    <div class="row">
        
    </div>
        <div class="row">
            <div class="message2">
                Select game table from the database for current game..
            </div>
        </div> 
    <div class="row col-md-6 col-md-offset-2">
<form action="<?php echo base_url();?>admin/selectround" method="POST">
        
        <select name="round" class="form-control" placeholder="select the round" value="<?php echo set_value('round'); ?>">
            <option value="qualifying" selected>Qualifying</option>
                <option value="semifinal">Semi-final</option>
                <option value="final">Final</option>
          </select>
        
    <div class="clearfix"></div><br>
    
        <select name="subround" class="form-control" value="<?php echo set_value('subround'); ?>">
            <option value="game1" selected>Game 1</option>
            <option value="game2">Game 2</option>
            <option value="game3">Game 3</option>
            <option value="game4">Game 4</option>
            <option value="game5">Game 5</option>
            <option value="game6">Game 6</option>
            <option value="game7">Game 7</option>
            <option value="game8">Game 8</option>
			<option value="game9">Game 9</option>
			<option value="game10">Game 10</option>
        </select><br>
    <div class="form-group">
        <button type="submit" name="submit" value="submit" class="btn btn-primary  col-md-offset-1 col-md-4">submit</button>
    </div>    
</form>

    </div>
</div>
 

  			

  


                

               




