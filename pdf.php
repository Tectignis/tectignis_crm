<?php
//index.php

$message = '';
$conn = new PDO("mysql:host=151.106.124.51;dbname=u188140722_crm1", "u188140722_crm1", "Admin@123");
function fetch_customer_data($conn)
{
 $query = "SELECT * FROM LEAD";
 $statement = $conn->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $output = '
 <div class="table-responsive">
  <table class="table table-striped table-bordered">
   <tr>
    <th>Name</th>
    <th>Firm_Name</th>
    <th>Mobile_Number</th>
    <th>Requirement</th>
    <th>package</th>
   </tr>
 ';
 foreach($result as $row)
 {
  $output .= '
   <tr>
    <td>'.$row["Client_Name"].'</td>
    <td>'.$row["Firm_Name"].'</td>
    <td>'.$row["Mobile_Number"].'</td>
    <td>'.$row["Requirement"].'</td>
    <td>'.$row["package"].'</td>
   </tr>
  ';
 }
 $output .= '
  </table>
 </div>
 ';
 return $output;
}

if(isset($_POST["action"]))
{
 include('pdf.php');
 $file_name = md5(rand()) . '.pdf';
 
}

?>
<!DOCTYPE html>
<html>
 <head>
  <title>Create Dynamic PDF Send As Attachment with Email in PHP</title>
  <script src="jquery.min.js"></script>
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

    <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

  <link rel="stylesheet" href="bootstrap.min.css" />
  <script src="bootstrap.min.js"></script>
 </head>
 <body>
  <br />
  <div class="container">
   <h3 align="center">Create Dynamic PDF Send As Attachment with Email in PHP</h3>
   <br />
   <form method="post">
    <input type="submit" name="action" class="btn btn-danger" value="PDF Send" /><?php echo $message; ?>
   </form>
   <br />
   <?php
   echo fetch_customer_data($conn);
   ?>   
  </div>
  <br />
  <br />
 </body>
</html>