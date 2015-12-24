<div class="row">
          <div class="col-xs-6 col-md-4 group_points points_table">
            <table class="table table-condensed table-bordered">
     
                        <tr>

                           <th scope="col">SCHOOL</th>
                           <th scope="col">POINTS</th>
                        </tr>
                      <?php foreach ($post2 as $u_key){ ?>

                            <tr>
                                
                                <td><b><?php echo $u_key->school; ?></b></td>
                                <td><b><?php echo $u_key->points; ?></b></td>


                            </tr>

                    <?php }?>
        </table>
               <!---- School Symbol School Name and their points ---->
          
            </div>
    