



<?php
//client delete
if(isset($_GET['delidd'])){
    $id=mysqli_real_escape_string($conn,$_GET['delidd']);
    $sql=mysqli_query($conn,"delete from client where Client_code='$id'");
    if($sql=1){
        header("location:client.php");
    }
    }
?>

<?php
//lead delete
if(isset($_GET['delid'])){
    $id=mysqli_real_escape_string($conn,$_GET['delid']);
    $sql=mysqli_query($conn,"delete from lead where id='$id'");
    if($sql=1){
        header("location:lead.php");
    }
    }
?>

<?php
//client status
if(isset($_GET['statusyes'])){
    $staid=$_GET['statusyes'];
        $query=mysqli_query($conn,"UPDATE `client` SET `Status`='Deactivated' where Client_Code='$staid'");
    if($query==1){
        header("location:client.php");
    }
}

if(isset($_GET['statusno'])){
    $staid=$_GET['statusno'];
        $query=mysqli_query($conn,"UPDATE `client` SET `Status`='Activated' where Client_Code='$staid'");
    if($query==1){
        header("location:client.php");
    }
}
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