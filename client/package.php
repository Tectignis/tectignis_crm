<?php
session_start();
include("config.php");

$id=$_SESSION['id'];
$uid = $_SESSION['aname'];
if(!isset($_SESSION['id']))
{
  header("location:clientlogin.php");
}
//lead delete
if(isset($_GET['delid'])){
    $id=mysqli_real_escape_string($conn,$_GET['delid']);
    $sql=mysqli_query($conn,"delete from lead where id='$id'");
    if($sql=1){
        header("location:package.php");
    }
    }

    if(isset($_GET['gen'])){
      $id=mysqli_real_escape_string($conn,$_GET['gen']);
      $sql=mysqli_query($conn,"update lead set `deal`='1' where id='$id'");
      if($sql==1){
       header("location:deal.php");
      }
    }
    $uid=$_SESSION['id'];
    mysqli_query($conn,"update lead set status=1 where Firm_Name=$uid");   
    
    if(isset($_POST['update'])){
      $id=$_POST['dnk'];
      $nature=$_POST['nature'];
       $remark=$_POST['remark'];
      $remainder_date=$_POST['remainder_date'];
      $sitevisit_date=$_POST['sitevisit_date'];
      $id=$_POST['id'];
    date_default_timezone_set('Asia/Kolkata');
    $date=date("Y-m-d h:i:s");
  
      $sql=mysqli_query($conn,"UPDATE `lead` SET `nature`='$nature',`remainder_date`='$remainder_date',`sitevisit_date`='$sitevisit_date' WHERE id='$id'");
      $qcheckremark=mysqli_query($conn,"select * from remarks where lead_id='$id'");
      if(mysqli_num_rows($qcheckremark)>0){
          $sql1=mysqli_query($conn,"update remarks set remark='$remark' , date_time='$date' where lead_id='$id'");
      }else{
       $sql1=mysqli_query($conn,"INSERT INTO `remarks`(`remark`,`lead_id`,`date_time`) VALUES ('$remark','$id','$date')");
      }
      if($sql==1){
          echo "Saved!", "data successfully submitted", "success";
          header("location:lead.php");
      }else {
          echo '<script>alert("oops...somthing went wrong");</script>';
      }
  }
?>
<?php
$packageId=$_GET['packageId'];
 $qcardpackage=mysqli_query($conn,"select *,package_assign.id as id from lead inner join package_assign on lead.package=package_assign.title inner join package on package_assign.lead_id=package.id where package_assign.firm_id='$id' and package_assign.id='$packageId'");
$fcardpackage=mysqli_fetch_array($qcardpackage);
$title= $fcardpackage['title'];


?>
<!DOCTYPE html>
<html lang="en">

<head>
<base href="https://realestate.tectignis.in/client/" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Leads | CRM</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <style>
    .card-header {
      padding: 0px;
      background-color: rgba(0, 0, 0, .03);

    }
    .card-title {
      float: left;
      padding: 25px;
    }

    .toast-header strong {
      margin-right: 40px !important;
    }

    .toast-body {
      cursor: pointer;
    }
    .vl{
      border-left: 3px solid #f1f3f4;
      height: 100%;
      float:left;
    }
   .dropbtn{
    width: 15% !important;
    padding:10px;
   }

        .card,.card-body {
            border-radius: 10px !important;
        }

        .badge{
            border-radius: 10px !important;
        }

  </style>

</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <?php
include("include/header.php");
include("include/sidebar.php");
?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
      <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <h1 class="m-0">Invoices

                            <?php
                $qnotification=mysqli_query($conn,"SELECT * , package, count(package) as count, DATEDIFF(due_date, NOW()) AS date_diff FROM lead inner join package_assign on package_assign.title=lead.package  where package_assign.id='$packageId' and firm_id='$id' group by lead_id HAVING COUNT(lead_id) > 0");
                $fnotification=mysqli_fetch_array($qnotification);
               
                if($fnotification['date_diff']<=5){
                  echo '<span style="font-size:17px;margin:18px;" class="badge badge-danger">Only '.$fnotification['date_diff'].' days left</span>';
                }
                $calculateRemainingLead=$fcardpackage['total_lead']-$fnotification['count'];
                if($calculateRemainingLead<=10){
                  echo '<span style="font-size:17px;margin:18px;" class="badge badge-info">You have only'. $calculateRemainingLead.' leads</span>';
                }
                ?>
                            </h1>
                            
                            <ol class="breadcrumb float-sm-left">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="index.php">Clients</a></li>
                                <li class="breadcrumb-item active">Clients Details</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
      </section>
      <?php 
      date_default_timezone_set('Asia/Kolkata');
if((date('Y-m-d , h:i:s')) <= ($fcardpackage['due_date'])){
?>
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
        <div class="card" style="height:215px;">
    
           <form onclick="getdat(this.value)"  style="float:left;padding: 15px 15px 0 15px;">
            <input type="hidden" id="sessionid" value="<?php echo $id;?>">
            <input type="hidden" id="packageid" value="<?php echo $title;?>">
            <select id="demo_overview_minimal_multiselect" class="dropbtn form-control" style="background-color:#fff;">
            <option selected>Last Week</option>
            <option >Monthly</option>
            <option >3 Month</option>
            </select>
            </form>
                      
                    <div class="row" style="margin:10px;" id="status">
                        <div class="col-md-3 col-sm-6">
                            <div class="card comp-card">
                                <div class="card-body bg-success">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-b-20">Total Lead</h6>  
                                            <?php $query=mysqli_query($conn,"select * from lead where Firm_Name='$id' and package='$title'");
                                            $count1=mysqli_num_rows($query);
                                            ?>
                                            <h3><?php echo $count1; ?></h3>

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
                                            <h6 class="m-b-20">Hot</h6>
                                            <?php
                                              $query=mysqli_query($conn,"select * from lead where nature='Hot' and Firm_Name='$id' and package='$title'");
                                              $count1=mysqli_num_rows($query);
                                              ?>
                                              <h3><?php echo $count1; ?></h3>
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
                                            <h6 class="m-b-20">Cold</h6>
                                            <?php
                                              $query=mysqli_query($conn,"select * from lead where nature='Cold' and Firm_Name='$id' and package='$title'");
                                              $count1=mysqli_num_rows($query);
                                              ?>
                                              <h3><?php echo $count1; ?></h3>
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
                                            <h6 class="m-b-20">Warm</h6>
                                            <?php
                                              $query=mysqli_query($conn,"select * from lead where nature='Warm' and Firm_Name='$id' and package='$title'");
                                              $count1=mysqli_num_rows($query);
                                              ?>
                                              <h3><?php echo $count1; ?></h3>
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
          <div class="row">
            <div class="col-12">

              <!-- /.card -->

              <div class="card">

                  <div class="card-header">
                    <h5 class="card-title">List of Leads</h5>
        
                  </div>
                
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Sr no.</th>

                        <th>Client Name</th>
                        <th>Client Mobile Number</th>
                        <th>Requirement</th>
                        <th>Created On</th>
                        <th>Source</th>
                        <th>Nature</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                   
                    <tbody id="display">
                    
                      <?php
                     
                          $qsql=mysqli_query($conn,"select *,lead.id as id, lead.Mobile_Number from lead inner join client on client.Client_Code=lead.Firm_Name inner join package_assign on package_assign.title=lead.package where lead.deal=0 and package_assign.id='$packageId' and client.Client_Code='$id' and lead.package='$title';");
                          $count=1;
                        while ($frow=mysqli_fetch_array($qsql)){ 
                                      ?>            
                      <tr>
                        <td><?php echo $count;?></td>
                        <td><?php echo $frow['Client_Name']; ?></td>
                        <td><?php echo $frow['Mobile_Number']; ?></td>
                        <td><?php echo $frow['Requirement']; ?></td>
                        <td><?php echo $frow['Created_On']; ?></td>
                        <td><?php echo $frow['social_media']; ?></td>
                        <td><?php echo $frow['nature']; ?></td>
                        <td style="text-align:center">

                          <a href="#m<?php echo $frow['id'] ?>" class="btn btn-primary btn-rounded btn-icon usereditid"data-toggle="modal" data-id='<?php echo $frow['id']; ?>' style="color: aliceblue"> <i
                              class="fas fa-pen"></i>
                          </button>

                          <a href="package?delid=<?php echo $frow['id']; ?>"><button type="button"
                              onclick="return confirm('Are you sure you want to delete this item')"
                              class="btn btn-danger btn-rounded btn-icon" style="color: aliceblue"><i
                                class="fas fa-trash"></i> </button></a>
                          <a href="package?gen=<?php echo $frow['id'];?>">
                            <button class="btn btn-warning" name="submit">Deals</button>
                          </a>
                        </td>
                      </tr>
                      <?php $count++; } ?>

                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>

        <!-- /.container-fluid -->
      </section>
      <?php }
else if($fcardpackage['total_amt']==$fcardpackage['first_payment']){ ?>
   <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">

              <!-- /.card -->

              <div class="card">

                  <div class="card-header">
                    <h5 class="card-title">List of Leads</h5>
        
                  </div>
                
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Sr no.</th>

                        <th>Client Name</th>
                        <th>Client Mobile Number</th>
                        <th>Requirement</th>
                        <th>Created On</th>
                        <th>Source</th>
                        <th>Nature</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                   
                    <tbody id="display">
                      <?php
                          $qsql1=mysqli_query($conn,"select *, lead.Mobile_Number from lead inner join client on client.Client_Code=lead.Firm_Name inner join package_assign on package_assign.title=lead.package where lead.deal=0 and package_assign.id='$packageId' and client.Client_Code='$id' and lead.package='$title';");
                          $count=1;
                        while ($row2=mysqli_fetch_array($qsql1)){ 
                                      ?>            
                      <tr>
                        <td><?php echo $count;?></td>
                        <td><?php echo $row2['Client_Name']; ?></td>
                        <td><?php echo $row2['Mobile_Number']; ?></td>
                        <td><?php echo $row2['Requirement']; ?></td>
                        <td><?php echo $row2['Created_On']; ?></td>
                        <td><?php echo $row2['social_media']; ?></td>
                        <td><?php echo $row2['nature']; ?></td>
                        <td style="text-align:center">

                          <a href="#m<?php echo $row2['id'] ?>" class="btn btn-primary btn-rounded btn-icon usereditid"data-toggle="modal" data-id='<?php echo $row2['id']; ?>' style="color: aliceblue"> <i
                              class="fas fa-pen"></i>
                          </button>

                          <a href="lead.php?delid=<?php echo $row2['id']; ?>"><button type="button"
                              onclick="return confirm('Are you sure you want to delete this item')"
                              class="btn btn-danger btn-rounded btn-icon" style="color: aliceblue"><i
                                class="fas fa-trash"></i> </button></a>
                          <a href="lead.php?gen=<?php echo $row2['id'];?>">
                            <button class="btn btn-warning" name="submit">Deals</button>
                          </a>
                        </td>
                      </tr>
                      <?php $count++; } ?>

                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>

        <!-- /.container-fluid -->
      </section>
<?php }
else{
    echo "<div style=' text-align: center;
    height: 100%;
    position: relative;
    top: 50%;
    color: mediumvioletred;
    font-size: xxx-large;
    font-weight: bolder;'>Please Pay</div>";
}
?>
      <!-- /.content -->
    </div>


 <!-- Modal -->

 <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="modal-box">
                <!-- Modal -->
                <?php 
                 $qclientsql=mysqli_query($conn,"select lead.*, client.*, lead.Mobile_Number from lead inner join client on client.Client_Code=lead.Firm_Name where lead.deal=0 and Client_Code='$id'");
                 while ($arr=mysqli_fetch_array($qclientsql)){ 
                ?>
    <div class="modal fade" id="m<?php echo $arr['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Leads</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="post" action="">
            <div class="modal-body body2">
            <div class="row">
    <div class="col-8">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="inputName">Client Name : </label>
                    <?php echo $arr['Client_Name']; ?>
                    <input type="hidden" name="id" value="<?php echo $arr['id'] ?>">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="inputEmail">Mobile Number : </label>
                    <?php echo $arr['Mobile_Number']; ?>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label>Source : </label>
                    <?php echo $arr['social_media']; ?>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="inputEmail">Requirement : </label>
                    <?php echo $arr['Requirement']; ?>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label>Nature</label>
                    <select class="form-control" name="nature" style="width: 100%;" onclick="drop<?php echo $arr['id']; ?>()">
                        <option selected="selected" value="<?php echo $arr['nature']; ?>"><?php echo $arr['nature']; ?>
                        </option>
                        <option value="Hot">Hot</option>
                        <option value="Cold">Cold</option>
                        <option value="Warm">Warm</option>
                        <option value="Deal Closed">Deal Closed</option>
                        <option value="Site Visit" id="dropdown<?php echo $arr['id']; ?>">Site Visit</option>
                    </select>
                </div>
            </div>
            <div class="col-3 " id="textt<?php echo $arr['id']; ?>" style="display:none">
                <div class="form-group">
                    <?php
                    if($arr['sitevisit_date']=='0000-00-00 00:00:00'){
                    ?>
                    <label>date : </label>
                    <input class="form-control" type="datetime-local" name="sitevisit_date">
                    <?php }else{ ?>
                    <label>date : </label>
                    <input class="form-control" type="text" value="<?php echo $arr['sitevisit_date']; ?>" name="sitevisit_date" readonly>
                    <?php } ?>
                </div>
            </div>
            <?php $leadId=$arr['id'];
            $qremark=mysqli_query($conn,"select * from remarks where lead_id='$leadId'");
            $fremark=mysqli_fetch_array($qremark);
            ?>
            <div class="col-6">
                <div class="form-group">
                    <label for="inputEmail">Remark : </label></br>
                    <?php  if(mysqli_num_rows($qremark)>0){ ?>
                    <textarea name="remark" class="form-control" style="width: 100%;resize: none;"><?php echo $fremark['remark'];  ?></textarea>
                    <?php }else{ ?>
                     <textarea name="remark" class="form-control" style="width: 100%;resize: none;"></textarea>
                     <?php } ?>
                </div>
            </div>
                <div class="col-6">
                    <div class="form-group">
                        <input type="checkbox" id="myCheck<?php echo $arr['id'] ?>" name="" value="remainder"
                            onclick="myFunction<?php echo $arr['id'] ?>()">
                        <label for="Remainder">Remainder </label>
                        
                        <div class="col-12 text" id="text<?php echo $arr['id'] ?>" style="display:none">
                            <div class="form-group">
                                <?php
                    if($arr['remainder_date']=='0000-00-00 00:00:00'){
                    ?>
                                <label>date : </label>
                                <input class="form-control" type="datetime-local" name="remainder_date">
                                <?php }else{ ?>
                                <label>date : </label>
                                <input class="form-control" type="text" value="<?php echo $arr['remainder_date']; ?>" name="remainder_date">
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <script>
                      function drop<?php echo $arr['id']; ?>() {
                        var select = document.getElementById("dropdown<?php echo $arr['id']; ?>");
                        var text = document.getElementById("textt<?php echo $arr['id']; ?>");
                        if (select.selected == true) {
                          text.style.display = "block";
                        } else {
                          text.style.display = "none";
                        }
                      }
                    </script>
                    <script>
                      function myFunction<?php echo $arr['id'] ?>() {
                        let checkBox = document.getElementById("myCheck<?php echo $arr['id'] ?>");
                        let text = document.getElementById("text<?php echo $arr['id'] ?>");
                        if (checkBox.checked == true) {
                          text.style.display = "block";
                        } else {
                          text.style.display = "none";
                        }
                      }
                    </script>
            </div>
        </div>
    </div>
   
    <div class="col-4">
<div class="vl"></div>
<ul class="sessions"style="overflow:scroll;height:300px" >
    <?php
    $lead_id=$arr['id'];
    $sql1=mysqli_query($conn,"select * from remarks where lead_id='$lead_id' order by id desc; ");
    while ($arr=mysqli_fetch_array($sql1)){ 
    
    ?>

  <li>
    <div class="time"><?php echo $arr['date_time']; ?></div>
    <p><?php echo $arr['remark']; ?></p>
  </li>
  <?php

} ?>
 </div>
            </div>
                 </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" name="update" class="btn btn-primary">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
   
<?php } ?>

 </div>
</div>

</div>

</div>

    <!-- /.content-wrapper -->
    <?php include("include/footer.php");?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="plugins/jszip/jszip.min.js"></script>
  <script src="plugins/pdfmake/pdfmake.min.js"></script>
  <script src="plugins/pdfmake/vfs_fonts.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <!-- Page specific script -->
  
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>

<script>
  function getdat(val){
    let packageid=$("#packageid").val();
    let sessionid=$("#sessionid").val();
    let dropbtn=$(".dropbtn").val();
    $.ajax({
      url:"actionTableLead.php",
      method:"POST",
      data:{packageid:packageid,
        sessionid:sessionid,
        dropbtn:dropbtn},
      success:function(data){
        $('#status').html(data);
      }
    });
  }
</script>
<script>
  function get_fb(){
    let package_id=<?php echo $packageId ?>;
    let leadid= "<?php echo $title ?>";
    let feedback = $.ajax({
        type: "POST",
        data: {package_id:package_id,
          leadid:leadid
        },
        url: "actionTableLead.php",
        async: false,
        success :function (feedback){
        $('#display').html(feedback);
        }
    })
}
get_fb(); // This will run on page load
setInterval(function(){
  get_fb(); // this will run after every 5 seconds
}, 10000);
</script>


</body>

</html>
