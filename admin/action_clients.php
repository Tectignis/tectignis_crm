<?php
session_start();
include("config.php");

if(isset($_POST['submit1'])){
    $fname=$_POST['fname'];
    $name=$_POST['name'];
    $Email=$_POST['email'];
    $Mobile_Number=$_POST['number'];
    $Category=$_POST['category'];
    $file=$_FILES['image']['name'];
    $filetmp=$_FILES['image']['tmp_name'];
    move_uploaded_file($filetmp,"images/clientImage/".$file);
date_default_timezone_set('Asia/Kolkata');
$Date = date('y-m-d h:i:s');
$Password= $_POST['pass'];
$hashPassword=password_hash($Password,PASSWORD_BCRYPT);

// $from = 'Enquiry <snehal7039@gmail.com>' . "\r\n";
// $sendTo = 'Enquiry <'.$Email.'>';
// $subject = 'Your New Password';
// // $fields = array( 'name' => 'name' );
// $from = 'Tectignis IT Solution: 1.0' . "\r\n";
// $from .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// $qcheckclient=mysqli_query($conn,"select * from client where Email='".$Email."'");
// $qcheckclientcount=mysqli_num_rows($qcheckclient);
// if($qcheckclientcount>0){
//     echo '<script>alert("Email already exists");window.location.href="clients.php"</script>';
// }else{

// $emailText = '
// <html>
// <head>
//   <meta charset="utf-8">
//   <meta name="viewport" content="width=device-width">
//   <meta http-equiv="X-UA-Compatible" content="IE=edge">
//   <meta name="x-apple-disable-message-reformatting"> 
//   <title></title>
//   <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
//   <style>
//       html,
// body {
//   margin: 0 auto !important;
//   padding: 0 !important;
//   height: 100% !important;
//   width: 100% !important;
//   background: #f1f1f1;
// }
// * {
//   -ms-text-size-adjust: 100%;
//   -webkit-text-size-adjust: 100%;
// }
//   </style>
// </head>
// <body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1;">
// <div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2">
// <div style="margin:50px auto;width:70%;padding:20px 0">
// <div style="border-bottom:1px solid #eee">
//   <a href="" style="font-size:1.4em;color: #00466a;text-decoration:none;font-weight:600">CRM</a>
// </div>
// <p style="font-size:1.1em">Hi '.$name.'</p>
// <p>Please enter below password</p>
// <h2 style="background: #00466a;margin: 0 auto;width: max-content;padding: 0 10px;color: #fff;border-radius: 4px;">'.$Password.'</h2>
// <p style="font-size:0.9em;">Regards,<br />Your Brand</p>
// <hr style="border:none;border-top:1px solid #eee" />
// </div>
// </div>
// </body>
// </html>';

// try{
// foreach($_POST as $key => $value){
//   if(isset($fields[$key])){
//     $emailText.="$fields[$key]: $value\n";
//   }
// }
// if( mail($sendTo,$subject,$emailText, "From:" .$from)){

    $sql=mysqli_query($conn,"INSERT INTO `client`( `Firm_Name`, `Authorized_Name`, `Email`, `Mobile_Number`, `Category`, `Password`,  `Date`, `Status`,`image`) VALUES ('$fname','$name','$Email','$Mobile_Number','$Category','$hashPassword','$Date','Activated','$file')");

//     if($sql==1){
//         echo '<script>alert("data successfully submitted");</script>';
//         header("location:clients.php");
//     }else {
//         echo '<script>alert("oops...somthing went wrong");</script>';
//     }
 
// }else{
//   echo "something went wrong";
// }
// }
// catch(\Exception $e){
// echo "not done";
// }
// }
}



if(isset($_POST['updateclient'])){
  $updatefname=$_POST['updatefname'];
  $name=$_POST['updateName'];
  $email=$_POST['updateEmail'];
  $category=$_POST['category'];
  $image=$_POST['imagehidden'];
  $id=$_POST['id'];
  $imagefile='avatar-s-9.jpg';
  $file=$_FILES['image']['name'];
  $tmp=$_FILES['image']['tmp_name'];
if(empty($_FILES['image']['tmp_name']) && ($_POST['imagehidden']) && ($_POST['id'])){
  $sql=mysqli_query($conn,"UPDATE `client` SET `Firm_Name`='$updatefname',`Authorized_Name`='$name',`Email`='$email',`Category`='$category',`image`='$image' where Client_Code='$id'");
  if($sql){
      echo "<script>alert('gfh1')</script>";
      header("location:clients.php");
  }
  else{
      echo "<script>alert('error1')</script>";
      header("location:clients.php");
  }
}
else if(!empty($_FILES['image']['tmp_name'] && ($_POST['imagehidden']) || !empty($_FILES['image']['tmp_name']) && (empty($_POST['imagehidden'])))){
  move_uploaded_file($tmp,"images/clientImage/".$file);
  $sql=mysqli_query($conn,"UPDATE `client` SET `Firm_Name`='$updatefname',`Authorized_Name`='$name',`Email`='$email',`Category`='$category',`image`='$file' where Client_Code='$id'");
  if($sql){
      echo "<script>alert('gfh2')</script>";
      header("location:clients.php");
  }
  else{
      echo "<script>alert('error2')</script>";
      header("location:clients.php");
  }
}
else{
  echo "<script>alert('e')</script>";
  header("location:clients.php");
}

}
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
  if(isset($_POST['editclient'])){
    $id=$_POST['editclient'];
         $sql=mysqli_query($conn,"select category.*,client.* from category inner join client on category.id=client.category where Client_Code='".$id."'");
              
           $row=mysqli_fetch_array($sql)
           ?>
<div class="row">
  <div class="col-6">
    <div class="form-group mb-2">
      <label for="inputName" class="form-label">Firm Name</label>
      <input type="hidden" name="id" value="<?php echo $id ?>">
      <input type="text" name="updatefname" value="<?php echo $row['Firm_Name']; ?>" class="form-control"
        id="inputfname" placeholder="Enter Name">
    </div>
  </div>
  <div class="col-6">
    <div class="form-group mb-2">
      <label for="inputName" class="form-label">Name</label>
      <input type="hidden" name="id" value="<?php echo $id ?>">
      <input type="text" name="updateName" value="<?php echo $row['Authorized_Name']; ?>" class="form-control"
        id="inputName" placeholder="Enter Name">
    </div>
  </div>
  <div class="col-6">
    <div class="form-group mb-2">
      <label for="inputEmail" class="form-label">Email</label>
      <input type="email" name="updateEmail" value="<?php echo $row['Email']; ?>" class="form-control" id="inputEmail"
        placeholder="Enter Email" readonly>
    </div>
  </div>
  <div class="col-6">
    <div class="form-group mb-2">
      <label for="inputPass" class="form-label">Mobile Number</label>
      <input type="text" minlength="10" maxlength="10" class="form-control" value="<?php echo $row['Mobile_Number']; ?>"
        name="number" id="number" placeholder="Mobile Number" required>
    </div>
  </div>
  <div class="col-6">
    <div class="form-group mb-2">
      <label class="form-label">Category</label>
      <select class="form-control" value="<?php echo $row['category']; ?>" name="category" id="inputcategory">
        <option selected value="<?php echo $row['id']; ?>"><?php echo $row['category']; ?></option>

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
      <?php
                  if($row['image']==""){
                 echo '<img src="app-assets/images/portrait/small/avatar-s-9.jpg" alt="Profile Picture" class="img-fluid rounded-circle card-avatar mt-2" style="width:50px;height:50px"/>';
                 }else{

                ?>
      <img alt="user-image" class="img-fluid rounded-circle card-avatar mt-2 mr-2"
        src="images/clientImage/<?php echo $row['image'] ?>" style="width:50px;height:50px">

      <?php } ?>
    <div class="form-group mb-2">
    <input type="hidden" name="imagehidden" value="<?php echo $row['image'] ?>">
      <label for="inputPass" class="form-label">Image</label>
      <input type="file" name="image" class="form-control" id="inputimg" placeholder="image">
    </div>
  </div>
  <div class="col-12 text-center mt-2 pt-50">
                                    <button type="submit" class="btn btn-primary me-1" name="updateclient">Update</button>
                                    <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal"
                                        aria-label="Close">
                                        Discard
                                    </button>
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
                                <div class="form-group mt-2">
                                    <label for="inputPass">Password</label>
                                    <input type="password" name="resetPass" class="form-control" id="resetPass"
                                        placeholder="Enter Password">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mt-2">
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



if(isset($_POST['assignId'])){
  $qpackage=mysqli_query($conn,"select * from package_assign where id='".$_POST['assignId']."'");
  $fpackage=mysqli_fetch_array($qpackage);
  echo '
           <div class="form-group row">
           <input type="hidden" name="assignId" value="'.$fpackage['id'].'">
           <input type="hidden" value="'.$fpackage['first_payment'].'" name="newpayment" >
              <label for="payment" class="col-sm-3 col-form-label">Total Amt</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" value="'.$fpackage['total_amt'].'"  id="totalamt" name="totalamt" readonly>
              </div>
            </div>
             <div class="form-group row mt-2">
              <label for="payment" class="col-sm-3 col-form-label">Balance</label>
              <div class="col-sm-9">
              <input type="hidden" value="'.$fpackage['balance'].'" id="bal" >
                <input type="text" class="form-control" value="'.$fpackage['balance'].'" id="balance" name="balance" readonly>
              </div>
            </div>
            <div class="form-group row mt-2">
            <label for="account_name" class="col-sm-3 col-form-label">Account Name</label>
            <div class="col-sm-9">
              <select class="form-control" name="account_name" id="account_name">
                <option value="Tectignis It Solution Pvt. Ltd">Tectignis It Solution Pvt. Ltd</option>
                <option value="Cash">Sachin Enterprises</option>
                <option value="Bank">Cash</option>
              </select>
            </div>
            </div>
            <div class="form-group row mt-2">
            <label for="paymentmode" class="col-sm-3 col-form-label">Payment Mode</label>
            <div class="col-sm-9">
              <select name="paymentmode" id="paymentmode" class="form-control">
                <option value="Cash">Cash</option>
                <option value="Imps">Imps</option>
                <option value="Gpay">Gpay</option>
              </select>
            </div>
            </div>
            <div class="form-group row mt-2">
              <label for="payment" class="col-sm-3 col-form-label">Payment</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" value="" id="payment" name="payment">
              </div>
            </div>
            <!--discount-->
            <div class="form-group row mt-2">
              <label for="month3" class="col-sm-3 col-form-label">3 Month discount</label>
              <div class="col-sm-9">
                <input type="number" class="form-control" value="" id="month3" name="month3">
              </div>
            </div>
            <div class="form-group row mt-2">
              <label for="month6" class="col-sm-3 col-form-label">6 Month discount</label>
              <div class="col-sm-9">
                <input type="number" class="form-control" value="" id="month6" name="month6">
              </div>
            </div>
            <div class="form-group row mt-2">
              <label for="year" class="col-sm-3 col-form-label">Year discount</label>
              <div class="col-sm-9">
                <input type="number" class="form-control" value="" id="year" name="year1">
              </div>
            </div>
            <!--discount-->
            <div class="form-group row mt-2">
            <label for="transaction" class="col-sm-3 col-form-label">Date of Transaction</label>
            <div class="col-sm-9">
              <input type="datetime-local" class="form-control" value=""  id="transaction" name="transaction">
            </div>
            </div>
            <div class="form-group row mt-2">
            <label for="due_date" class="col-sm-3 col-form-label">Date of Transaction</label>
            <div class="col-sm-9">
              <input type="datetime-local" class="form-control" value=""  id="due_date" name="due_date">
          </div>
        </div>
        <script>
        $(document).ready(function(){
          $("#payment").keyup(function(){
            let total = $("#bal").val();
            let payment = $("#payment").val();
            let balance = total - payment;
            if(balance < 0){
              alert("Payment is greater than balance");
              $("#payment").val("");
              $("#balance").val(total);}
              else{
            $("#balance").val(balance);}
          });
        });
        </script>
  ';
}

if(isset($_POST['sub'])){
  $firm_name=$_POST['firm_name'];
  $package=$_POST['package'];
  $number=$_POST['number'];
  $cname=$_POST['cname'];
  $Rname=$_POST['Rname'];
  $social_media=$_POST['social_media'];
  $status="Open";
  date_default_timezone_set('Asia/Kolkata');
  $Date = date("Y-m-d H:i:s");
 
  $sql=mysqli_query($conn,"INSERT INTO `lead`(`Firm_Name`,`Client_Name`, `Mobile_Number`,`Requirement`,`social_media`,`Created_On`,`status_deal`,`package`) VALUES ('$firm_name','$cname','$number','$Rname','$social_media','$Date','$status','$package')");

  $qselectlead=mysqli_query($conn,"select *, lead.Mobile_Number as mob from lead inner join client on lead.Firm_Name=client.Client_Code where Client_Code='$firm_name' and package='$package' ");
  $count=1;
  while($fselectlead=mysqli_fetch_array($qselectlead)){
    echo ' <tr>
    <td>'.$count.'</td>
    <td>'. $fselectlead['package'].'</td>
    <td>'. $fselectlead['Client_Name'].'</td>
    <td>'. $fselectlead['mob'].'</td>
    <td>'. $fselectlead['Requirement'].'</td>
    <td>'. $fselectlead['Created_On'].'</td>  
        <td><div class="btn-group" role="group" aria-label="Basic outlined example">
            <button type="button" onclick="deleteBtn()" class="btn btn-sm btn-danger m-1 delbtn" data-id="='. $fselectlead['id'].'"><i class="fa fa-trash"></i></button> 
        </div></td>
    </tr>';
    $count++;}
}

if(isset($_POST['packa'])){
  $package=$_POST['packa'];
  $firm_name=$_POST['firm_name'];
  echo '
            <div class="packageresult">
            <section id="dashboard-ecommerce">
                        <div class="row" id="leads">
                            <div class="col-lg-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <div>';
                                            $query=mysqli_query($conn,"select * from lead where Firm_Name='$firm_name' and package='$package'");
                                            $count1=mysqli_num_rows($query);
                                            
                                           echo' <h3 class="fw-bolder mb-75">'. $count1.'</h3>
                                           <span>Total Lead</span>
                                       </div>
                                       <div class="avatar bg-light-primary p-50">
                                           <span class="avatar-content">
                                           <i class="far fa-user" aria-hidden="true"></i>
                                           </span>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-3 col-sm-6">
                               <div class="card">
                                   <div class="card-body d-flex align-items-center justify-content-between">
                                       <div>';
                                            
                                            $query=mysqli_query($conn,"select * from lead where nature='Hot' and package='$package'");
                                            $count1=mysqli_num_rows($query);
                                           
                                           echo' <h3 class="fw-bolder mb-75">'.$count1.'</h3>
                                           <span>Hot</span>
                                       </div>
                                       <div class="avatar bg-light-danger p-50">
                                           <span class="avatar-content">
                                           <i class="fas fa-user-plus" aria-hidden="true"></i>
                                           </span>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-3 col-sm-6">
                               <div class="card">
                                   <div class="card-body d-flex align-items-center justify-content-between">
                                       <div>';
                                            
                                            $query=mysqli_query($conn,"select * from lead where nature='Cold' and package='$package'");
                                            $count1=mysqli_num_rows($query);
                                           
                                           echo'<h3 class="fw-bolder mb-75">'. $count1 .'</h3>
                                           <span>Cold</span>
                                       </div>
                                       <div class="avatar bg-light-success p-50">
                                           <span class="avatar-content">
                                           <i class="fas fa-user-check" aria-hidden="true"></i>
                                           </span>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-3 col-sm-6">
                               <div class="card">
                                   <div class="card-body d-flex align-items-center justify-content-between">
                                       <div>';
                                           
                                                $query=mysqli_query($conn,"select * from lead where nature='Warm' and package='$package'");
                                                $count1=mysqli_num_rows($query);
                                                
                                                echo '<h3 class="fw-bolder mb-75">'. $count1.'</h3>
                                                <span>Warm</span>
                                            </div>
                                            <div class="avatar bg-light-warning p-50">
                                                <span class="avatar-content">
                                                <i class="fas fa-user-times" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    <!-- Main row -->
                    <!-- <div class="row"> -->
                    <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                            <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sr No.</th>
                                    <th>Package</th>
                                    <th>Client Name</th>
                                    <th>Client Mobile No.</th>
                                    <th>Requirment</th>
                                    <th>Created On</th>
                                    <th>Action</th>
                                </tr>
                            </thead>';
                           
                            $sql=mysqli_query($conn,"select *, lead.Mobile_Number as mob from lead inner join client on lead.Firm_Name=client.Client_Code where Client_Code='$firm_name' and lead.package='$package'");
                            $count=1;
                           echo ' <tbody class="packresult">';
                             while ($row=mysqli_fetch_array($sql)){ 

                           
                           echo ' <tr>
                            <td>'. $count.'</td>
                            <td>'. $row['package'].'</td>
                            <td>'. $row['Client_Name'].'</td>
                            <td>'.$row['mob'].'</td>
                            <td>'.$row['Requirement'].'</td>
                            <td>'.$row['Created_On'].'</td>  
                                <td><div class="btn-group" role="group" aria-label="Basic outlined example">
                                    <button type="button" onclick="deleteBtn()" class="btn btn-sm btn-danger m-1 delbtn" data-id="='.$row['id'].'"><i class="fa fa-trash"></i></button> 
                                </div></td>
                            </tr>';
                             $count++; } 
                            echo '</tbody>
                            </table>
                            </div>
                            </div>
                            </div>
                        </div>
                        </section>
                        </div>';
}

?>

<?php
if(isset($_POST['fetch'])){
    $fetch=$_POST['fetch'];
    $id=$_POST['leadid'];
  
 if($fetch == 'Last Week'){
    echo '<div class="col-lg-3 col-sm-6">
    <div class="card">
        <div class="card-body d-flex align-items-center justify-content-between">
            <div>';
                $query=mysqli_query($conn,"select * from lead where Firm_Name='$id' and  date(Created_On)=date(now())");
                $count1=mysqli_num_rows($query);
                
              echo '<h3 class="fw-bolder mb-75">'. $count1.'</h3>
                <span>Total Lead</span>
            </div>
            <div class="avatar bg-light-primary p-50">
                <span class="avatar-content">
                <i class="far fa-user" aria-hidden="true"></i>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-3 col-sm-6">
    <div class="card">
        <div class="card-body d-flex align-items-center justify-content-between">
            <div>';
                $query=mysqli_query($conn,"select * from lead where nature='Hot' and  date(Created_On)=date(now())");
                $count1=mysqli_num_rows($query);
               echo' <h3 class="fw-bolder mb-75">'.$count1.'</h3>
                <span>Hot</span>
            </div>
            <div class="avatar bg-light-danger p-50">
                <span class="avatar-content">
                <i class="fas fa-user-plus" aria-hidden="true"></i>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-3 col-sm-6">
    <div class="card">
        <div class="card-body d-flex align-items-center justify-content-between">
            <div>';
                $query=mysqli_query($conn,"select * from lead where nature='Cold' and  date(Created_On)=date(now())");
                $count1=mysqli_num_rows($query);
              echo'  <h3 class="fw-bolder mb-75">'. $count1.'</h3>
                <span>Cold</span>
            </div>
            <div class="avatar bg-light-success p-50">
                <span class="avatar-content">
                <i class="fas fa-user-check" aria-hidden="true"></i>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-3 col-sm-6">
    <div class="card">
        <div class="card-body d-flex align-items-center justify-content-between">
            <div>';
                    $query=mysqli_query($conn,"select * from lead where nature='Warm' and  date(Created_On)=date(now())");
                    $count1=mysqli_num_rows($query);
               echo' <h3 class="fw-bolder mb-75">'. $count1.'</h3>
                <span>Warm</span>
            </div>
            <div class="avatar bg-light-warning p-50">
                <span class="avatar-content">
                <i class="fas fa-user-times" aria-hidden="true"></i>
                </span>
            </div>
        </div>
    </div>
</div>';

 }
else if($fetch == 'Monthly'){
    echo '<div class="col-lg-3 col-sm-6">
    <div class="card">
        <div class="card-body d-flex align-items-center justify-content-between">
            <div>';
                $query=mysqli_query($conn,"select * from lead where Firm_Name='$id' and  Created_On > DATE_SUB(NOW(), INTERVAL 1 MONTH)");
                $count1=mysqli_num_rows($query);
                
              echo '<h3 class="fw-bolder mb-75">'. $count1.'</h3>
                <span>Total Lead</span>
            </div>
            <div class="avatar bg-light-primary p-50">
                <span class="avatar-content">
                <i class="far fa-user" aria-hidden="true"></i>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-3 col-sm-6">
    <div class="card">
        <div class="card-body d-flex align-items-center justify-content-between">
            <div>';
                $query=mysqli_query($conn,"select * from lead where nature='Hot' and  Created_On > DATE_SUB(NOW(), INTERVAL 1 MONTH)");
                $count1=mysqli_num_rows($query);
               echo' <h3 class="fw-bolder mb-75">'.$count1.'</h3>
                <span>Hot</span>
            </div>
            <div class="avatar bg-light-danger p-50">
                <span class="avatar-content">
                <i class="fas fa-user-plus" aria-hidden="true"></i>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-3 col-sm-6">
    <div class="card">
        <div class="card-body d-flex align-items-center justify-content-between">
            <div>';
                $query=mysqli_query($conn,"select * from lead where nature='Cold' and  Created_On > DATE_SUB(NOW(), INTERVAL 1 MONTH)");
                $count1=mysqli_num_rows($query);
              echo'  <h3 class="fw-bolder mb-75">'. $count1.'</h3>
                <span>Cold</span>
            </div>
            <div class="avatar bg-light-success p-50">
                <span class="avatar-content">
                <i class="fas fa-user-check" aria-hidden="true"></i>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-3 col-sm-6">
    <div class="card">
        <div class="card-body d-flex align-items-center justify-content-between">
            <div>';
                    $query=mysqli_query($conn,"select * from lead where nature='Warm'  and  Created_On > DATE_SUB(NOW(), INTERVAL 1 MONTH)");
                    $count1=mysqli_num_rows($query);
               echo' <h3 class="fw-bolder mb-75">'. $count1.'</h3>
                <span>Warm</span>
            </div>
            <div class="avatar bg-light-warning p-50">
                <span class="avatar-content">
                <i class="fas fa-user-times" aria-hidden="true"></i>
                </span>
            </div>
        </div>
    </div>
</div>';
  
}
else if($fetch == '3 Month'){
    echo '<div class="col-lg-3 col-sm-6">
    <div class="card">
        <div class="card-body d-flex align-items-center justify-content-between">
            <div>';
                $query=mysqli_query($conn,"select * from lead where Firm_Name='$id' and  Created_On >= DATE(NOW()) - INTERVAL 3 MONTH");
                $count1=mysqli_num_rows($query);
                
              echo '<h3 class="fw-bolder mb-75">'. $count1.'</h3>
                <span>Total Lead</span>
            </div>
            <div class="avatar bg-light-primary p-50">
                <span class="avatar-content">
                <i class="far fa-user" aria-hidden="true"></i>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-3 col-sm-6">
    <div class="card">
        <div class="card-body d-flex align-items-center justify-content-between">
            <div>';
                $query=mysqli_query($conn,"select * from lead where nature='Hot' and  Created_On >= DATE(NOW()) - INTERVAL 3 MONTH");
                $count1=mysqli_num_rows($query);
               echo' <h3 class="fw-bolder mb-75">'.$count1.'</h3>
                <span>Hot</span>
            </div>
            <div class="avatar bg-light-danger p-50">
                <span class="avatar-content">
                <i class="fas fa-user-plus" aria-hidden="true"></i>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-3 col-sm-6">
    <div class="card">
        <div class="card-body d-flex align-items-center justify-content-between">
            <div>';
                $query=mysqli_query($conn,"select * from lead where nature='Cold' and  Created_On >= DATE(NOW()) - INTERVAL 3 MONTH");
                $count1=mysqli_num_rows($query);
              echo'  <h3 class="fw-bolder mb-75">'. $count1.'</h3>
                <span>Cold</span>
            </div>
            <div class="avatar bg-light-success p-50">
                <span class="avatar-content">
                <i class="fas fa-user-check" aria-hidden="true"></i>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-3 col-sm-6">
    <div class="card">
        <div class="card-body d-flex align-items-center justify-content-between">
            <div>';
                    $query=mysqli_query($conn,"select * from lead where nature='Warm' and  Created_On >= DATE(NOW()) - INTERVAL 3 MONTH");
                    $count1=mysqli_num_rows($query);
               echo' <h3 class="fw-bolder mb-75">'. $count1.'</h3>
                <span>Warm</span>
            </div>
            <div class="avatar bg-light-warning p-50">
                <span class="avatar-content">
                <i class="fas fa-user-times" aria-hidden="true"></i>
                </span>
            </div>
        </div>
    </div>
</div>';

}
}

?>
