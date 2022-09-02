<?php
session_start();
include("config.php");
$id=$_SESSION['id'];

if(isset($_POST['package_id'])){
  $packageId=$_POST['package_id'];
$lead_id=$_POST['leadid'];
$empQuery = "select *,lead.id as id, lead.Mobile_Number from lead inner join client on client.Client_Code=lead.Firm_Name inner join package_assign on package_assign.title=lead.package where lead.deal=0 and package_assign.id='$packageId' and client.Client_Code='$id' and lead.package='$lead_id';";
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
                        <td>'.  $row['nature'] .'</td>
                        <td style="text-align:center">

                          <a href="#m'. $row['id'].'" type="button" class="btn btn-primary btn-rounded btn-icon usereditid"
                            data-toggle="modal" data-id='. $row['id'].' style="color: aliceblue"> <i
                              class="fas fa-pen"></i>
                          </a>

                          <a href="lead.php?delid='. $row['id'].'"><button type="button"
                              onclick="return confirm("Are you sure you want to delete this item")"
                              class="btn btn-danger btn-rounded btn-icon" style="color: aliceblue"><i
                                class="fas fa-trash"></i> </button></a>
                          <a href="lead.php?gen='.$row['id'] .'">
                            <button class="btn btn-warning" name="submit">Deals</button>
                          </a>
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
<div class="col-md-3 col-sm-6">
<div class="card comp-card">
    <div class="card-body bg-success">
        <div class="row align-items-center">
            <div class="col">
                <h6 class="m-b-20">Total Lead</h6>  ';
                $query=mysqli_query($conn,"select * from lead where Firm_Name='$sessionid' and package='$title' and YEARWEEK(Created_On) = YEARWEEK(NOW() - INTERVAL 1 WEEK)");
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
             
                  $query=mysqli_query($conn,"select * from lead where nature='Hot' and Firm_Name='$id' and package='$title' and YEARWEEK(Created_On) = YEARWEEK(NOW() - INTERVAL 1 WEEK)");
                  $count1=mysqli_num_rows($query);
                echo '  <h3>'. $count1.'</h3>
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
              
                  $query=mysqli_query($conn,"select * from lead where nature='Cold' and Firm_Name='$id' and package='$title' and YEARWEEK(Created_On) = YEARWEEK(NOW() - INTERVAL 1 WEEK)");
                  $count1=mysqli_num_rows($query);
                echo '  <h3>'.$count1.'</h3>
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
                  $query=mysqli_query($conn,"select * from lead where nature='Warm' and Firm_Name='$id' and package='$title' and YEARWEEK(Created_On) = YEARWEEK(NOW() - INTERVAL 1 WEEK)");
                  $count1=mysqli_num_rows($query);
                echo '  <h3>'.$count1.'</h3>
            </div>
            <div class="col-auto">
                <i class="fas fa-rocket bg-danger text-white"></i>
            </div>
        </div>
    </div>
</div>
</div>
';
} 
else if($fetch == 'Monthly'){
  echo '
  <div class="col-md-3 col-sm-6">
  <div class="card comp-card">
      <div class="card-body bg-success">
          <div class="row align-items-center">
              <div class="col">
                  <h6 class="m-b-20">Total Lead</h6>  ';
                  $query=mysqli_query($conn,"select * from lead where Firm_Name='$sessionid' and package='$title' and Created_On > DATE_SUB(NOW(), INTERVAL 1 MONTH)");
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
               
                    $query=mysqli_query($conn,"select * from lead where nature='Hot' and Firm_Name='$id' and package='$title' and Created_On > DATE_SUB(NOW(), INTERVAL 1 MONTH)");
                    $count1=mysqli_num_rows($query);
                  echo '  <h3>'. $count1.'</h3>
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
                
                    $query=mysqli_query($conn,"select * from lead where nature='Cold' and Firm_Name='$id' and package='$title' and Created_On > DATE_SUB(NOW(), INTERVAL 1 MONTH)");
                    $count1=mysqli_num_rows($query);
                  echo '  <h3>'.$count1.'</h3>
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
                    $query=mysqli_query($conn,"select * from lead where nature='Warm' and Firm_Name='$id' and package='$title' and Created_On > DATE_SUB(NOW(), INTERVAL 1 MONTH)");
                    $count1=mysqli_num_rows($query);
                  echo '  <h3>'.$count1.'</h3>
              </div>
              <div class="col-auto">
                  <i class="fas fa-rocket bg-danger text-white"></i>
              </div>
          </div>
      </div>
  </div>
  </div>
  ';
  } 
  else if($fetch == '3 Month'){
    echo '
    <div class="col-md-3 col-sm-6">
    <div class="card comp-card">
        <div class="card-body bg-success">
            <div class="row align-items-center">
                <div class="col">
                    <h6 class="m-b-20">Total Lead</h6>  ';
                    $query=mysqli_query($conn,"select * from lead where Firm_Name='$id' and package='$title' and Created_On >= DATE(NOW()) - INTERVAL 3 MONTH");
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
                 
                      $query=mysqli_query($conn,"select * from lead where nature='Hot' and Firm_Name='$id' and package='$title' and Created_On >= DATE(NOW()) - INTERVAL 3 MONTH");
                      $count1=mysqli_num_rows($query);
                    echo '  <h3>'. $count1.'</h3>
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
                  
                      $query=mysqli_query($conn,"select * from lead where nature='Cold' and Firm_Name='$id' and package='$title' and Created_On >= DATE(NOW()) - INTERVAL 3 MONTH");
                      $count1=mysqli_num_rows($query);
                    echo '  <h3>'. $count1.'</h3>
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
                      $query=mysqli_query($conn,"select * from lead where nature='Warm' and Firm_Name='$id' and package='$title' and Created_On >= DATE(NOW()) - INTERVAL 3 MONTH");
                      $count1=mysqli_num_rows($query);
                    echo '  <h3>'.$count1.'</h3>
                </div>
                <div class="col-auto">
                    <i class="fas fa-rocket bg-danger text-white"></i>
                </div>
            </div>
        </div>
    </div>
    </div>
    ';
    } 
}
?>