<?php
session_start();
include("config.php");
if(isset($_POST['login'])){
$Email=mysqli_real_escape_string($conn,$_POST['emailid']);
$Password1=mysqli_real_escape_string($conn,$_POST['password']);

$sql=mysqli_query($conn,"select * from client where Email='$Email' AND Status='Activated'");

if(mysqli_num_rows($sql)>0){
  $row=mysqli_fetch_assoc($sql); 
  $verify=password_verify($Password1,$row['Password']);

 if($verify==1){
   $_SESSION['aname']=$row['Authorized_Name'];
     $_SESSION['id']=$row['Client_Code'];
     $_SESSION['fname']=$row['Firm_Name'];
        header("location:index.php");
    }else{
        echo "<script>alert('Password is incorrect');</script>";
    }
}
else{
    echo "<script>alert('Invalid Email Id');</script>";
}
}

if(isset($_POST['raiseticket'])){
  $firm_name=$_POST['Firm_Name'];
  $clientname=$_POST['clientname'];
  $mobile=$_POST['mobile'];
  $Email=$_POST['Email'];
  $Description=$_POST['Description'];
  $status="Open";
      $qraise=mysqli_query($conn,"INSERT INTO `support`(`firm_name`, `client_name`, `mobile`, `email`, `description`,`status`) VALUES ('$firm_name','$clientname','$mobile','$Email','$Description','$status')");
      if($qraise){
        echo "<script>alert('Ticket Raised Successfully. Please wait Our teams will solve issue');</script>";
      }
      else{
        echo "<script>alert('Ticket Raised Failed');</script>";
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
            .gradient-custom-2 {
background: #fccb90;

background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

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
                    name="emailid" >
                    <label class="form-label" for="form3Example3" style="margin-left: 0px;">Email address</label>
                    <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 83.2px;"></div><div class="form-notch-trailing"></div></div>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="password" name="password" class="form-control active">
                    <label class="form-label" for="form3Example3" style="margin-left: 0px;">Password</label>
                    <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 60px;"></div><div class="form-notch-trailing"></div></div>
                  </div>

                  <div class="text-center pt-1 mb-3 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="login" name="login" id="login" value="login">Login</button>
                    <a class="text-muted" href="forgotpassword.php">Forgot password?</a>
                  </div>
                  <div class="text-center">
                  <a href="#myModal" class="text-muted" data-toggle="modal" data-target="#myModal">Raise Ticket</a>
                  </div>
                </form>

              </div>
            </div>
           
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--modal-->
        <div class="modal fade" id="myModal" data-easein="whirlIn">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title w-100 text-center">Raise Ticket</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <!-- adding Bootstrap Form here -->

                        <form method="post" id="myForm" class="needs-validation" novalidate>
                            <div class="container">

                                <div class="form-group row">
                                    <label for="id" class="col-sm-3 col-form-label">Firm Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="name_id" name="Firm_Name" placeholder="Enter your Firm Name" required />
                                            
                                            <div class="invalid-feedback">
                                                Please choose a Name.
                                              </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="validationCustomUsername"  class="col-sm-3 col-form-label">Client Name</label>
                                    <div class="input-group col-sm-9">
                                      
                                      <input type="text" class="form-control" id="username_id" name="clientname" placeholder="Enter your Client Name" aria-describedby="inputGroupPrepend" required>
                                      <div class="invalid-feedback">
                                        Please choose a username.
                                      </div>
                                    </div>
                                </div>

                                  <div class="form-group row">
                                    <label for="id" class="col-sm-3 col-form-label">Mobile Number</label>
                                    <div class="col-sm-9">
                                        <input type="tel" class="form-control" id="mobile" minlength="10" maxlength="10" name="mobile"
                                            placeholder="Enter your Mobile Number" required />
                                            <div class="invalid-feedback">
                                                Please choose a Password.
                                              </div>
                                    </div>
                                   </div>
                                   <div class="form-group row">
                                    <label for="id" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="email_id" name="Email"
                                            placeholder="Enter your Email" required />
                                            <div class="invalid-feedback">
                                                Please choose a Email.
                                              </div>
                                    </div>
                                   </div>
                                   <div class="form-group row">
                                    <label for="id" class="col-sm-3 col-form-label">Description</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" id="description_id" name="Description"
                                            placeholder="Enter your Description" required></textarea>
                                            <div class="invalid-feedback">
                                                Please choose a Description.
                                              </div>
                                    </div>
                                   </div>

                                 
                            </div>
                            <div class="modal-footer">
                            <div class="text-center">
                                 <button class="btn btn-primary btn-block fa-lg gradient-custom-2" name="raiseticket" type="submit">Submit</button>
                                 </div>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                        </form>

                        <script>
                           
                        </script>
                    </div>

                    <!-- Modal footer -->
                   

                </div>
            </div>
        </div>

  <!-- Modal -->
</section>
</body>

<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"
></script>

</html>