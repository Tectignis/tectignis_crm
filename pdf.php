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
    <th>Address</th>
    <th>City</th>
    <th>Postal Code</th>
    <th>Country</th>
   </tr>
 ';
 foreach($result as $row)
 {
  $output .= '
   <tr>
    <td>'.$row["CustomerName"].'</td>
    <td>'.$row["Address"].'</td>
    <td>'.$row["City"].'</td>
    <td>'.$row["PostalCode"].'</td>
    <td>'.$row["Country"].'</td>
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