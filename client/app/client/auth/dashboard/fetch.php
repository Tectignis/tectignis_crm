<?php
include("config.php");
if(isset($_POST['request'])){

    $request = $_POST['request'];
    $query = "SELECT * FROM property WHERE type = '$request'";
    $result = mysqli_query($con,$query);
    $count = mysqli_num_rows($result);



?>

<table id="example1" class="table table-bordered table-striped">
    <?php
       if ($count){
    ?>
                                    <thead>
                                        <tr>
                                            <th>Client Name</th>
                                            <th>Mobile No.</th>
                                            <th>Type</th>
                                            <th>Apartment Type</th>
                                            <th>Area</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>

    <?php
       }else{
        echo "Sorry! No Records Found";
       }
    ?>
        </thead>

        <tbody>
                                    <?php
                                            while ($row=mysqli_fetch_assoc($result)){ 
                                        ?>

                                        <tr>
                                            <td><?php echo $row['client_name']; ?></td>
                                            <td><?php echo $row['mobile_no']; ?></td>
                                            <td><?php echo $row['type']; ?></td>
                                            <td><?php echo $row['apartment_type']; ?></td>
                                            <td><?php echo $row['area']; ?></td>
                                            <td style="text-align:center"><?php
                                                $status=$row['status'];
                                                if($status=='available'){
                                                    echo '<span class="badge badge-light-success">available</span>';
                                                }
                                                else if($status=='not available'){
                                                    echo '<span class="badge badge-light-danger">not available</span>';
                                                }
                                                ?>
                                            </td>
                                            <td>
                      

                
                    <button type="button" data-id="<?php echo $row['id'] ?>"  class="btn btn-outline-primary view" data-bs-toggle="modal" data-bs-target="#addNewCard" >
                    <i data-feather="eye"></i>
                                    </button>

                                    <a href="property.php?delid=<?php echo $row['id']; ?>"><button type="button" class="btn btn-outline-primary"><i data-feather="trash"></i></button></a>


                                    <button type="button" data-id="<?php echo $row['id'] ?>"  class="btn btn-outline-primary edit" data-bs-toggle="modal" data-bs-target="#edit" >
                                    <i data-feather="edit"></i>
                                    </button>

                  </td>

                                        </tr>
                                        <?php } ?> 
                                    </tbody>
                                    </table>
                                    <?php
}?>