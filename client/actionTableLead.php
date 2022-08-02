<?php
session_start();
include("config.php");
$id=$_SESSION['id'];
$empQuery = "select lead.*, client.*, lead.Mobile_Number from lead inner join client on client.Client_Code=lead.Firm_Name where lead.deal=0 and Client_Code='$id' ";
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
?>