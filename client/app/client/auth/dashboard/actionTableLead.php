<?php
session_start();
include("config.php");
$id=$_SESSION['id'];

if(isset($_POST['package_id'])){
  $packageId=$_POST['package_id'];
$lead_id=$_POST['leadid'];
$empQuery = "select *,lead.id as id, lead.Mobile_Number from lead inner join client on client.Client_Code=lead.Firm_Name inner join package_assign on package_assign.title=lead.package where package_assign.id='$packageId' and client.Client_Code='$id' and lead.package='$lead_id';";
$empRecords = mysqli_query($conn, $empQuery);
$count=1;
while ($row=mysqli_fetch_array($empRecords)){

echo '
<tr>
                        <td>'.$count .'</td>
                        <td>'. $row['Client_Name'].'</td>
                        <td>'. $row['Mobile_Number'] .'</td>
                        <td>'. $row['Requirement'] .'</td>
                        <td>'. $row['Created_On'] .'</td>
                        <td>'. $row['social_media'] .'</td>
                        <td>'; ?> <?php $status=$row['nature'];
                        if($status=='Hot'){
                            echo '<span class="badge badge-light-danger">Hot</span>';
                        }
                        else if($status=='Cold'){
                            echo '<span class="badge badge-light-primary">Cold</span>';
                        }else if($status=='Deal Closed'){
                           echo '<span class="badge badge-light-dark">Deal Closed</span>';
                        }else if($status=='Warm'){
                            echo '<span class="badge badge-light-success">Warm</span>';
                        } ?><?php echo '</td>
                        <td style="text-align:center">

                          <button type="button" class="btn btn-primary btn-rounded btn-icon usereditid"
                            data-bs-toggle="modal" data-bs-target="#m'. $row['id'] .'" data-id='. $row['id']; ?> <?php
                            if($status=='Deal Closed'){
                            echo 'style="display:none;"'; }else{ echo 'style="color: aliceblue"'; } ?> <?php echo '> <i
                              class="fas fa-pen"></i>
                          </button>

                          <button
                          class="btn btn-primary btn-rounded btn-icon usereditid"
                          data-bs-toggle="modal" data-bs-target="#m'. $row['id'] .'" data-id="'. $row['id'] .'"> <i class="fa fa-eye" ></i>
                          </button>

                        </td>
                      </tr>';
                      $count++; }
}
?>

<?php
if(isset($_POST['dropbtn'])){
$fetch=$_POST['dropbtn'];
$sessionid=$_POST['sessionid'];
$title=$_POST['packageid'];
if($fetch == 'Last Week'){
echo '
<div class="col-lg-3 col-sm-6">
<div class="card">
    <div class="card-body d-flex align-items-center justify-content-between">
        <div>';
        $query=mysqli_query($conn,"select * from lead where Firm_Name='$sessionid' and package='$title' and YEARWEEK(Created_On) = YEARWEEK(NOW() - INTERVAL 1 WEEK)");
        $count1=mysqli_num_rows($query);
            echo '<h3 class="fw-bolder mb-75">'. $count1 .'</h3>
            <span>Total Lead</span>
        </div>
        <div class="avatar bg-light-warning p-50">
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
        $query=mysqli_query($conn,"select * from lead where nature='Hot' and Firm_Name='$id' and package='$title' and YEARWEEK(Created_On) = YEARWEEK(NOW() - INTERVAL 1 WEEK)");
        $count1=mysqli_num_rows($query);
           echo ' <h3 class="fw-bolder mb-75">'. $count1.'</h3>
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
        $query=mysqli_query($conn,"select * from lead where nature='Cold' and Firm_Name='$id' and package='$title' and YEARWEEK(Created_On) = YEARWEEK(NOW() - INTERVAL 1 WEEK)");
        $count1=mysqli_num_rows($query);
           echo ' <h3 class="fw-bolder mb-75">'.$count1.'</h3>
            <span>Cold</span>
        </div>
        <div class="avatar bg-light-primary p-50">
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
        $query=mysqli_query($conn,"select * from lead where nature='Warm' and Firm_Name='$id' and package='$title' and YEARWEEK(Created_On) = YEARWEEK(NOW() - INTERVAL 1 WEEK)");
        $count1=mysqli_num_rows($query);
            echo '<h3 class="fw-bolder mb-75">'.$count1.'</h3>
            <span>Warm</span>
        </div>
        <div class="avatar bg-light-success p-50">
            <span class="avatar-content">
            <i class="fas fa-user-times" aria-hidden="true"></i>
            </span>
        </div>
    </div>
</div>
</div>
    ';
    } 
else if($fetch == 'Monthly'){
  echo '
  <div class="col-lg-3 col-sm-6">
<div class="card">
    <div class="card-body d-flex align-items-center justify-content-between">
        <div>';
        $query=mysqli_query($conn,"select * from lead where Firm_Name='$sessionid' and package='$title' and Created_On > DATE_SUB(NOW(), INTERVAL 1 MONTH)");
        $count1=mysqli_num_rows($query);
            echo '<h3 class="fw-bolder mb-75">'. $count1 .'</h3>
            <span>Total Lead</span>
        </div>
        <div class="avatar bg-light-warning p-50">
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
        $query=mysqli_query($conn,"select * from lead where nature='Hot' and Firm_Name='$id' and package='$title' and Created_On > DATE_SUB(NOW(), INTERVAL 1 MONTH)");
                    $count1=mysqli_num_rows($query);
           echo ' <h3 class="fw-bolder mb-75">'. $count1.'</h3>
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
        $query=mysqli_query($conn,"select * from lead where nature='Cold' and Firm_Name='$id' and package='$title' and Created_On > DATE_SUB(NOW(), INTERVAL 1 MONTH)");
        $count1=mysqli_num_rows($query);
           echo ' <h3 class="fw-bolder mb-75">'.$count1.'</h3>
            <span>Cold</span>
        </div>
        <div class="avatar bg-light-primary p-50">
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
        $query=mysqli_query($conn,"select * from lead where nature='Warm' and Firm_Name='$id' and package='$title' and Created_On > DATE_SUB(NOW(), INTERVAL 1 MONTH)");
                    $count1=mysqli_num_rows($query);
            echo '<h3 class="fw-bolder mb-75">'.$count1.'</h3>
            <span>Warm</span>
        </div>
        <div class="avatar bg-light-success p-50">
            <span class="avatar-content">
            <i class="fas fa-user-times" aria-hidden="true"></i>
            </span>
        </div>
    </div>
</div>
</div>
  ';
}
else if($fetch == '3 Month'){
    echo '
    <div class="col-lg-3 col-sm-6">
    <div class="card">
        <div class="card-body d-flex align-items-center justify-content-between">
            <div>';
            $query=mysqli_query($conn,"select * from lead where Firm_Name='$id' and package='$title' and Created_On >= DATE(NOW()) - INTERVAL 3 MONTH");
                    $count1=mysqli_num_rows($query);
                echo '<h3 class="fw-bolder mb-75">'. $count1 .'</h3>
                <span>Total Lead</span>
            </div>
            <div class="avatar bg-light-warning p-50">
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
            $query=mysqli_query($conn,"select * from lead where nature='Hot' and Firm_Name='$id' and package='$title' and Created_On >= DATE(NOW()) - INTERVAL 3 MONTH");
            $count1=mysqli_num_rows($query);
               echo ' <h3 class="fw-bolder mb-75">'. $count1.'</h3>
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
            $query=mysqli_query($conn,"select * from lead where nature='Cold' and Firm_Name='$id' and package='$title' and Created_On >= DATE(NOW()) - INTERVAL 3 MONTH");
            $count1=mysqli_num_rows($query);
               echo ' <h3 class="fw-bolder mb-75">'.$count1.'</h3>
                <span>Cold</span>
            </div>
            <div class="avatar bg-light-primary p-50">
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
            $query=mysqli_query($conn,"select * from lead where nature='Warm' and Firm_Name='$id' and package='$title' and Created_On >= DATE(NOW()) - INTERVAL 3 MONTH");
            $count1=mysqli_num_rows($query);
                echo '<h3 class="fw-bolder mb-75">'.$count1.'</h3>
                <span>Warm</span>
            </div>
            <div class="avatar bg-light-success p-50">
                <span class="avatar-content">
                <i class="fas fa-user-times" aria-hidden="true"></i>
                </span>
            </div>
        </div>
    </div>
    </div>
    ';
}
}

if(isset($_POST['save'])){

    $id=$_POST['id'];
    $status_deal=$_POST['status_deal'];
  
    $sql=mysqli_query($conn,"UPDATE `lead` SET `status_deal`='$status_deal' where id='$id'" );
    header("location:deal.php");
   
  }
  if(isset($_POST['dealsta'])){
    $dealid=$_POST['dealsta'];
      $sql=mysqli_query($conn,"SELECT * FROM lead where id='".$dealid."'");
      $arr=mysqli_fetch_array($sql);
      echo '
        <input type="hidden" value="'.$_POST['dealsta'].'" name="id">   
                  <div class="row">   
                  <div class="col-4">
                  <b>Client Name :</b><br>
                  </div>
                  <div class="col-8">
                  <p> '.$arr['Client_Name'].' </p>
                  </div>
                  </div>
  
                  <div class="row">   
                   <div class="col-4">
                  <b> Mobile No :</b><br>
                  </div>
                  <div class="col-8">
                  <p> '.$arr['Mobile_Number'].' </p>
                  </div>
                  </div>
  
                  <div class="row">   
                   <div class="col-4">
                  <b> Requirement :</b><br>
                  </div>
                  <div class="col-8">
                  <p>'.$arr['Requirement'].'</p>
                  </div>
                  </div>
  
                  <div class="row">   
                   <div class="col-4">
                  <b> Created On :</b><br>
                  </div>
                  <div class="col-8">
                  <p> '.$arr['Created_On'].' </p>
                  </div>
                  </div>
  
                  <div class="row">   
          <div class="col-4">
          <label>Status :</label>
          </div>
          <div class="col-8">
          <p> <select required class="form-control" name="status_deal" id="servicesid">
          <option value=" '.$arr['status_deal'].'"selected> '.$arr['status_deal'].'</option>
          <option value="Open">Open</option>
          <option value="In Process">In Process</option>
          <option value="On Hold">On Hold</option>
          <option value="Booked">Booked</option>
          <option value="Closed Deal">Closed Deal</option>
          
         
      
  
        </select> </p>
          </div>
          </div>
                  
            ';
  }
  
  
?>