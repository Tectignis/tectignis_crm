
<?php
include("config.php");
?>
<?php
//ticket comment
if(isset($_POST['dnkk'])){
    $id=$_POST['dnkk'];
	
	echo '  <div class="form-group">
    <input type="hidden" value='.$id.' name="id">
    <label>Status</label>
      <select class="form-control select2" name="category" style="width: 100%;">
        <option selected="selected">Open</option>
        <option>Hold On</option>
        <option>Inprocess</option>
        <option>Closed</option>
      </select>
</div>
<div class="form-group">
<label>Comment</label>
      <textarea class="form-control" name="comment" id="comment" placeholder="Comment"></textarea>
</div>

</div> ';
}
?>