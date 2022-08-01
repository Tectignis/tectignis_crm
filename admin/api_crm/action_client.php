<?php
session_start();
include("../config.php");
if(isset($_POST['fetch'])){
    $fetch=$_POST['fetch'];
    $id=$_POST['leadid'];
  
 if($fetch == 'Last Week'){
    $query=mysqli_query($conn,"select * from lead where Firm_Name='$id' and  date(Created_On)=date(now())");
    $count=1;
    while ($row=mysqli_fetch_array($query)){
    echo '
    <tr>
    <td> '.$count.' </td>
    <td> '.$row['Client_Name'].' </td>
    <td> '.$row['Mobile_Number'].' </td>
    <td> '.$row['Requirement'].' </td>
    <td> '.$row['Created_On'].' </td>  
    <td><div class="btn-group" role="group" aria-label="Basic outlined example">
    <button type="button" onclick="deleteBtn()" class="btn btn-sm btn-danger m-1 delbtn" data-id="='.$row['id'].'"><i class="fa fa-trash"></i></button> 
  </div></td>
      </tr>';
      $count++;
}

 }
else if($fetch == 'Monthly'){
    $query=mysqli_query($conn,"select * from lead where Firm_Name='$id' and  Created_On > DATE_SUB(NOW(), INTERVAL 1 MONTH)");
    $count=1;
    while ($row=mysqli_fetch_array($query)){
        echo '
        <tr>
        <td> '.$count.' </td>
        <td> '.$row['Client_Name'].' </td>
        <td> '.$row['Mobile_Number'].' </td>
        <td> '.$row['Requirement'].' </td>
        <td> '.$row['Created_On'].' </td>  
        <td><div class="btn-group" role="group" aria-label="Basic outlined example">
        <button type="button" onclick="deleteBtn()" class="btn btn-sm btn-danger m-1 delbtn" data-id="='.$row['id'].'"><i class="fa fa-trash"></i></button> 
      </div></td>
          </tr>';
          $count++;
    }
  
}
else if($fetch == '3 Month'){
    $query=mysqli_query($conn,"select * from lead where Firm_Name='$id' and  Created_On >= DATE(NOW()) - INTERVAL 3 MONTH");
    $count=1;
    while ($row=mysqli_fetch_array($query)){
        echo '
        <tr>
        <td> '.$count.' </td>
        <td> '.$row['Client_Name'].' </td>
        <td> '.$row['Mobile_Number'].' </td>
        <td> '.$row['Requirement'].' </td>
        <td> '.$row['Created_On'].' </td>  
        <td><div class="btn-group" role="group" aria-label="Basic outlined example">
        <button type="button" onclick="deleteBtn()" class="btn btn-sm btn-danger m-1 delbtn" data-id="='.$row['id'].'"><i class="fa fa-trash"></i></button> 
      </div></td>
          </tr>';
          $count++;
}

}
}

?>
