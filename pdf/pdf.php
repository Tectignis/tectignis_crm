<?php
//index.php

$message = '';
$conn = new PDO("mysql:host=151.106.124.51;dbname=u188140722_crm1", "u188140722_crm1", "Admin@123");
function fetch_customer_data($conn)
{
 $query = "SELECT * FROM lead";
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
 header('location:http://wa.me/send?phone=9199&attachment=c://users/downloads/'.$file_name);
}

?>
<!DOCTYPE html>
<html>
 <head>
  <title>Create Dynamic PDF Send As Attachment with Email in PHP</title>
  <script src="jquery.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script></head>
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