<?php
include("config.php");
?>
<?php


if(isset($_POST['manualAttendanceEdit'])){

  $employee = $_POST['employee_name1'];
  $attendance_date = $_POST['attendance_date_m'];
  $in_time = $_POST['clock_in_m'];
  $out_time = $_POST['clock_out_m'];
 
  $sql="UPDATE `attendance` SET `date`='$attendance_date',`clock_in`='$in_time',`clock_out`='$out_time',`employee_id`='$emp_id',`employee_name`='$employee' WHERE id='$id
  .'";
  if (mysqli_query($conn, $sql)){
    header("location:manual-attendance.php");
 } else {
    echo "<script> alert ('connection failed !');window.location.href='manual-Attendance.php'</script>";
 }
}
?>