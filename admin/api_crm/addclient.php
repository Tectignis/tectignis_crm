<?php
include("../config.php");
?>


<?php
//clients Password

if(isset($_POST['submit'])){
    $Firm_Name=$_POST['Fname'];
    $Authorized_Name=$_POST['Aname'];
    $Email=$_POST['email'];
    $Mobile_Number=$_POST['number'];
    $Category=$_POST['category'];
    $status="Activated";
date_default_timezone_set('Asia/Kolkata');
$Date = date('d-m-y h:i:s');
$Password= rand(100000, 999999);
$hasPassword=password_hash($Password,PASSWORD_BCRYPT);


$from = 'Enquiry <naiduvedant@gmail.com>' . "\r\n";
$sendTo = 'Enquiry <'.$Email.'>';
$subject = 'Your New Password';
// $fields = array( 'name' => 'name' );
$from = 'Tectignis IT Solution: 1.0' . "\r\n";
$from .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


$emailText = '
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="x-apple-disable-message-reformatting"> 
  <title></title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
  <style>
      html,
body {
  margin: 0 auto !important;
  padding: 0 !important;
  height: 100% !important;
  width: 100% !important;
  background: #f1f1f1;
}
* {
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
}
  </style>
</head>
<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1;">
<div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2">
<div style="margin:50px auto;width:70%;padding:20px 0">
<div style="border-bottom:1px solid #eee">
  <a href="" style="font-size:1.4em;color: #00466a;text-decoration:none;font-weight:600">Agreerent</a>
</div>
<p style="font-size:1.1em">Hi '.$Authorized_Name.'</p>
<p>Please enter below password</p>
<h2 style="background: #00466a;margin: 0 auto;width: max-content;padding: 0 10px;color: #fff;border-radius: 4px;">'.$Password.'</h2>
<p style="font-size:0.9em;">Regards,<br />Your Brand</p>
<hr style="border:none;border-top:1px solid #eee" />
<div style="float:right;padding:8px 0;color:#aaa;font-size:0.8em;line-height:1;font-weight:300">
  <p>Your Brand Inc</p>
  <p>1600 Amphitheatre Parkway</p>
  <p>California</p>
</div>
</div>
</div>
</body>
</html>';

try{
foreach($_POST as $key => $value){
  if(isset($fields[$key])){
    $emailText.="$fields[$key]: $value\n";
  }
}
if( mail($sendTo,$subject,$emailText, "From:" .$from)){

    $sql=mysqli_query($conn,"insert into client( `Firm_Name`, `Authorized_Name`, `Email`, `Mobile_Number`, `Category`, `Status`, `Date`, `Password`) values('$Firm_Name','$Authorized_Name','$Email','$Mobile_Number','$Category','$status', '$Date', '$hasPassword')");

    if($sql==1){
        echo '<script>alert("data successfully submitted");</script>';
        header("location:../client.php");
    }else {
        echo '<script>alert("oops...somthing went wrong");</script>';
    }
 
}else{
  echo "eeee $sendTo $subject $emailText $from";
}
}
catch(\Exception $e){
echo "not done";
}


}
?>


<?php
//leads post
if(isset($_POST['submitt'])){
    $Firm_Name=$_POST['Fname'];
    $Client_Name=$_POST['Cname'];
    $Mobile_Number=$_POST['number'];
    $Requirement=$_POST['requirement'];
    date_default_timezone_set('Asia/Kolkata');
    $Date = date("Y-m-d H:i:s");
   
    $sql=mysqli_query($conn,"INSERT INTO `lead`(`Firm_Name`,`Client_Name`, `Mobile_Number`,`Requirement`,`Created_On`) VALUES ('$Firm_Name','$Client_Name','$Mobile_Number','$Requirement','$Date')");

    if($sql==1){
        echo '<script>alert("Saved!", "data successfully submitted", "success");</script>';
        header("location:lead.php");
    }else {
        echo '<script>alert("oops...somthing went wrong");</script>';
    }
}
?>

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
        <option selected="selected">Select</option>
        <option>Open</option>
        <option>Hold</option>
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
