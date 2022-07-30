<?php
session_start();
include("config.php");
$empQuery = "select lead.*, client.*, lead.Mobile_Number from lead inner join client on client.Client_Code=lead.Firm_Name where lead.deal=0 and Client_Code='$id'";
$empRecords = mysqli_query($conn, $empQuery);
$data = array();
?>