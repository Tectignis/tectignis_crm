<?php
session_start();
include("config.php");
?>

<?php
//client delete
    if(isset($_GET['del_id'])){
        $delid = $_GET['del_id'];
        $sql = mysqli_query($conn,"DELETE FROM client WHERE Client_Code = '$delid'");
        if($sql){
          header ("location:clients.php"); 
         
        }
        else{ echo "<script>alert('Failed to Delete')</script>"; }
      }
?>

<?php
//client edit fetch
  if(isset($_POST['dnk'])){
    $id=$_POST['dnk'];
         $sql=mysqli_query($conn,"select category.*,client.* from category inner join client on category.id=client.category where Client_Code='".$id."'");
              
           $row=mysqli_fetch_array($sql)
           ?>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="inputName">Name</label>
                                    <input type="hidden" name="id" value="<?php echo $id ?>">
                                    <input type="text" name="updateName" value="<?php echo $row['Authorized_Name']; ?>" class="form-control" id="inputName"
                                        placeholder="Enter Name">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="inputEmail">Email</label>
                                    <input type="email" name="updateEmail"  value="<?php echo $row['Email']; ?>" class="form-control" id="inputEmail"
                                        placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="inputPass">Mobile Number</label>
                                    <input type="text" minlength="10" maxlength="10" class="form-control" value="<?php echo $row['Mobile_Number']; ?>" name="number" id="number" placeholder="Mobile Number" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                <label>Category</label>
                                    <select class="form-control" value="<?php echo $row['category']; ?>" name="category" id="inputcategory">
                                        <option selected value="<?php echo $row['category']; ?>"><?php echo $row['category']; ?></option>
    
                                        <?php 
                   $query=mysqli_query($conn,"select * from category");
                    while($sql=mysqli_fetch_array($query))
                    {
                      ?>

                         <option value="<?php echo $sql['id']; ?>"> <?php echo $sql['category']; ?></option>
                         <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6" style="display: flex;">
                            <a href="clinet_details.php" target="_blank">
               <?php
                  if($row['image']==""){
                 echo '<img src="../admin/dist/img/avatar1.jpeg" alt="User Image" class="img-fluid rounded-circle  card-avatar" style="width:100px;height:100px;">';
                 }else{

                ?>
                <img alt="user-image" class="img-fluid rounded-circle card-avatar" src="../admin/dist/img/<?php echo $row['image'] ?>" style="height:100px;width:100px;">
                <?php } ?>
                </a>
                             <div class="form-group">
                                    <label for="inputPass">Image</label>
                                    <input type="file" name="image" class="form-control" id="inputimg"
                                        placeholder="image">
                                </div>
                            </div>
                        
                        </div>
                        <?php  } ?>

<?php
if(isset($_POST["resetpass"])){
  $id=$_POST["resetpass"];
	echo '
  <div class="row">
                            <div class="col-12">
                            <input type="hidden" name="id" value="'.$id.'">
                                <div class="form-group">
                                    <label for="inputPass">Password</label>
                                    <input type="password" name="resetPass" class="form-control" id="resetPass"
                                        placeholder="Enter Password">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="inputConfirmPass">Confirm Password</label>
                                    <input type="password" name="confirmResetPass" class="form-control"
                                        id="confirmResetPass" placeholder="Re-enter Password">
                                </div>
                            </div>
                        </div>
  ';
	
	}
?>     


<?php
//clients POST & Email->Password

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $Email=$_POST['email'];
    $Mobile_Number=$_POST['number'];
    $Category=$_POST['category'];
date_default_timezone_set('Asia/Kolkata');
$Date = date('y-m-d h:i:s');
$Password= rand(100000, 999999);
$hashPassword=password_hash($Password,PASSWORD_BCRYPT);

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
<p style="font-size:1.1em">Hi '.$name.'</p>
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

    $sql=mysqli_query($conn,"INSERT INTO `client`( `Authorized_Name`, `Email`, `Mobile_Number`, `Category`, `Password`,  `Date`, `Status`) VALUES ('$name','$Email','$Mobile_Number','$Category','$hashPassword','$Date','Activated')");

    if($sql==1){
        echo '<script>alert("data successfully submitted");</script>';
        header("location:clients.php");
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