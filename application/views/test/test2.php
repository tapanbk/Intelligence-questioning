<?php if(isset($msg))
    echo $msg;
    ?>
<p id="demo"></p>
<script>
   
document.getElementById("myBtn").onclick = function(){displayDate()};

function displayDate() {
    document.getElementById("demo").innerHTML = Date();
}
     
</script>
<form class="form-horizontal" method="post"  action="<?php echo base_url();?>test/test_process">
      <button onclick="saveData()" name="submit" id="myBtn" value="asdsa">Support</button>
 </form>
    