<?php
session_start();
include("config.php");
if(isset($_POST['login'])){
$Email=$_POST['email'];
$Password1=$_POST['password'];

$sql=mysqli_query($conn,"select * from client where Email='$Email' AND Status='Activated'");

if(mysqli_num_rows($sql)>0){
  $row=mysqli_fetch_assoc($sql); 
  $verify=password_verify($Password1,$row['Password']);

 if($verify==1){
  // $_SESSION['aemail']=$row['email'];
   $_SESSION['aname']=$row['Authorized_Name'];
   $_SESSION['firm']=$row['Firm_Name'];
     $_SESSION['id']=$row['Client_Code'];
  //   $_SESSION['aaddress']=$row['office_address'];
  //   $_SESSION['admin']=$row['is_admin'];
  //   $d=$_SESSION['aid'];

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
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | CRM</title>
        <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css"
  rel="stylesheet"
/>
<style>
            .gradient-custom-2 {
/* fallback for old browsers */
background: #fccb90;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
}

@media (min-width: 768px) {
.gradient-form {
height: 100vh !important;
}
}
@media (min-width: 769px) {
.gradient-custom-2 {
border-top-right-radius: .3rem;
border-bottom-right-radius: .3rem;
}
}
</style>
</head>
<body>

<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-5">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-12">
              <div class="card-body p-md-5 mx-md-5">

                <div class="text-center">
                    <h2>CRM</h2>
                </div><br>

                <form method="post">

                <div class="form-outline mb-4">
                    <input type="email" id="email" class="form-control active"
                    name="email"
                    >
                    <label class="form-label" for="form3Example3" style="margin-left: 0px;">Email address</label>
                    <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 83.2px;"></div><div class="form-notch-trailing"></div></div>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="password" name="password" class="form-control active">
                    <label class="form-label" for="form3Example3" style="margin-left: 0px;">Password</label>
                    <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 60px;"></div><div class="form-notch-trailing"></div></div>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="login" name="login" id="login" value="login">Login</button>
                    <a class="text-muted" href="forgotpassword.php">Forgot password?</a>
                  </div>
                </form>

              </div>
            </div>
           
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>


<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"
></script>

</html>