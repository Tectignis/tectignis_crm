<?php
session_start();
include("config.php");
if(isset($_POST['login'])){
$Email=$_POST['email'];
$Password1=$_POST['password'];

$sql=mysqli_query($conn,"select * from login where Email='$Email'");
if(mysqli_num_rows($sql)>0){
  $row=mysqli_fetch_assoc($sql); 
  $verify=password_verify($Password1,$row['Password']);

 if($verify==1){
    $_SESSION['aid']=$row['id'];
   
    header("location:index.php");
    }else{
        echo "<script>alert('Password is incorrect');</script>";
    }
}
else{
    echo "<script>alert('Invalid Email Id');</script>";
}
}


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <?php
    $logosql=mysqli_query($conn,'select * from system_setting');
    $fetchlogo=mysqli_fetch_array($logosql);
    ?>
    <link rel="icon" type="image/png" sizes="32x32" href="dist/img/logo/<?php echo $fetchlogo['favicon'] ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <style>

.container {
    padding: 60px;
    padding-top: 0;
    height: 200px;
    background-color: #0a0a23;
}

img {
    margin-left: 105px;
    width: 363px;
    margin-top: 80px;
}
.text{
    text-decoration: solid;
    color: #ffffff;
    margin-top: 20px;
}
input[type=text]{
  width: 53%;
  padding: 5px 20px;
  margin: 5px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
}
input[type=submit]{
        
        background-color:  #6fd943;
        padding:5px 20px;
        color:white;
        font-size:14px;
        margin:04px;
        border-radius:5px;
        border-style:none;
    }

.t{

 

font-family: 'Inria Sans';
font-style: normal;
font-weight: 400;
font-size: 24px;
line-height: 43px;

color: #ffffff;

}
.t1{
  font-family: 'Inria Sans';
font-style: normal;
font-weight: 400;
font-size: 16px;
line-height: 24px;

color: #FFFFFF;
}
@media screen and (min-width: 480px) {
  img {
    width: 400px;
  }
}
    </style>
  </head>
  <body>

 <div class="main-contaainer">
    <div class="row" style="margin: 20px; height: max-content;">

        <div class="col-6" style="background-color:#ffffff;  height: max-content;border-radius: 10px 0 0 10px;">
          <form style="margin-top:23%;margin-left:23%;" method="post">
            <h3 style="font-family: Arial, Helvetica, sans-serif; font-size:25px;">Login</h3>
                     <div class="form-group mb-6">
                         <div class="d-flex align-items-center justify-content-between">
                             <div>
                                 <label class="form-label">Email</label>
                             </div>
                         </div>
                         <input  type="text" class="form-control " name="email" required autofocus>
                                             </div>
                     <div class="form-group mb-6">
                         <div class="d-flex align-items-center justify-content-between">
                                 <div>
                                     <label class="form-label">Password</label>
                                 </div>
 
                         </div>
 
                         <input type="text"  class="form-control " name="password" required>
                                              </div>
                     <div class="form-group mb-6">
                         <div class="mb-">
                             <div class="text-left" style="font-size:12px;font-family:serif,Times New Roman">
 
                                         Forgot your password?
                             
                             </div>
                         </div>
 
                     </div>
                 <br>
           
                     
 
                     <div class="d-grid">
                         <input type="submit" value="Login" name="login" style="width:51%;font-family:Inria Sans;">
                     
                     
                   
                      
                       
                        
                     </div>
                
             </form>
        </div>
        <div class="col-6 container" style="background-color:#6fd943; height: max-content; border-radius:24px;">
<div style="margin-top:9px;">
    <img src="img-auth-3.svg" alt="FCC Logo" />

</div>
<div class="text t">
<p>
    <b style="    margin-left: 130px;">“Attention is the new currency”</b>
</p>
</div>
                
<div class="t1">
  <p>
      <h6 style="    margin-left: 130px; ">The more effortless the writing looks, the more effort the <br>
        writer actually put into the process.</h6>
  </p>
  </div>  
           
        </div>
    </div>
 </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>