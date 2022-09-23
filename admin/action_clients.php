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
                                    <label for="inputName">Firm Name</label>
                                    <input type="hidden" name="id" value="<?php echo $id ?>">
                                    <input type="text" name="updatefname" value="<?php echo $row['Firm_Name']; ?>" class="form-control" id="inputfname"
                                        placeholder="Enter Name">
                                </div>
                            </div>
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
                                        placeholder="Enter Email" readonly>
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

if(isset($_POST['submit1'])){
    $fname=$_POST['fname'];
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

$qcheckclient=mysqli_query($conn,"select * from client where Email='".$Email."'");
$qcheckclientcount=mysqli_num_rows($qcheckclient);
if($qcheckclientcount>0){
    echo '<script>alert("Email already exists");window.location.href="clients.php"</script>';
}else{

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
  <a href="" style="font-size:1.4em;color: #00466a;text-decoration:none;font-weight:600">CRM</a>
</div>
<p style="font-size:1.1em">Hi '.$name.'</p>
<p>Please enter below password</p>
<h2 style="background: #00466a;margin: 0 auto;width: max-content;padding: 0 10px;color: #fff;border-radius: 4px;">'.$Password.'</h2>
<p style="font-size:0.9em;">Regards,<br />Your Brand</p>
<hr style="border:none;border-top:1px solid #eee" />
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

    $sql=mysqli_query($conn,"INSERT INTO `client`( `Firm_Name`, `Authorized_Name`, `Email`, `Mobile_Number`, `Category`, `Password`,  `Date`, `Status`) VALUES ('$fname','$name','$Email','$Mobile_Number','$Category','$hashPassword','$Date','Activated')");

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
}

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
             <div class="form-group row">
              <label for="payment" class="col-sm-3 col-form-label">Balance</label>
              <div class="col-sm-9">
              <input type="hidden" value="'.$fpackage['balance'].'" id="bal" >
                <input type="text" class="form-control" value="'.$fpackage['balance'].'" id="balance" name="balance" readonly>
              </div>
            </div>
            <div class="form-group row">
            <label for="account_name" class="col-sm-3 col-form-label">Account Name</label>
            <div class="col-sm-9">
              <select class="form-control" name="account_name" id="account_name">
                <option value="Tectignis It Solution Pvt. Ltd">Tectignis It Solution Pvt. Ltd</option>
                <option value="Cash">Sachin Enterprises</option>
                <option value="Bank">Cash</option>
              </select>
            </div>
            </div>
            <div class="form-group row">
            <label for="paymentmode" class="col-sm-3 col-form-label">Payment Mode</label>
            <div class="col-sm-9">
              <select name="paymentmode" id="paymentmode" class="form-control">
                <option value="Cash">Cash</option>
                <option value="Imps">Imps</option>
                <option value="Gpay">Gpay</option>
              </select>
            </div>
            </div>
            <div class="form-group row">
              <label for="payment" class="col-sm-3 col-form-label">Payment</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" value="" id="payment" name="payment">
              </div>
            </div>
            <div class="form-group row">
            <label for="transaction" class="col-sm-3 col-form-label">Date of Transaction</label>
            <div class="col-sm-9">
              <input type="datetime-local" class="form-control" value=""  id="transaction" name="transaction">
            </div>
            </div>
            <div class="form-group row">
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
            $("#balance").val(balance);
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
            <div class="card">
                    <div class="row" style="margin:10px;">
                        <div class="col-md-3 col-sm-6">
                            <div class="card comp-card">
                                <div class="card-body bg-success">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-b-20">Total Lead</h6> '; 
                                            $query=mysqli_query($conn,"select * from lead where Firm_Name='$firm_name' and package='$package'");
                                            $count1=mysqli_num_rows($query);
                                            
                                           echo' <h3>'.$count1.'</h3>
                                                         </div>
                                        <div class="col-auto">
                                            <i class="fas fa-rocket bg-success text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="card comp-card">
                                <div class="card-body bg-warning">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-b-20">Hot</h6>';
                                            
                                            $query=mysqli_query($conn,"select * from lead where nature='Hot' and package='$package'");
                                            $count1=mysqli_num_rows($query);
                                           
                                           echo' <h3>'.$count1.'</h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-rocket bg-warning text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="card comp-card">
                                <div class="card-body bg-info">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-b-20">Cold</h6>';
                                            
                                            $query=mysqli_query($conn,"select * from lead where nature='Cold' and package='$package'");
                                            $count1=mysqli_num_rows($query);
                                           
                                           echo' <h3>'.$count1.'</h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-rocket bg-info text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="card comp-card">
                                <div class="card-body bg-danger">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-b-20">Warm</h6>';
                                           
                                                $query=mysqli_query($conn,"select * from lead where nature='Warm' and package='$package'");
                                                $count1=mysqli_num_rows($query);
                                                
                                                echo '<h3>'.$count1.'</h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-rocket bg-danger text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <!-- Main row -->
                    <!-- <div class="row"> -->
                        <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                              <h3 class="card-title">Leads</h3>
                              <button type="button" class="btn btn-primary float-right " data-toggle="modal" data-target="#exampleModal" style="margin-right: 5px;">+ Add Lead</button>
                            </div>
                            <!-- /.card-header -->
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
                           echo ' <tbody id="leads" class="packresult">';
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
                            <!-- /.card-body -->
                          </div>
                        </div>
                    <!-- </div> -->
</div>
                    <!-- /.row (main row) -->
                </div>';
}

?>
