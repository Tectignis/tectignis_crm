<?php
include("config.php");
if(isset($_POST['request'])){

    $request = $_POST['request'];

    $query = "SELECT * FROM property WHERE type1 = '$request'";
    $result = mysqli_query($conn,$query);
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
                                            while($row = mysqli_fetch_assoc($result)){ 
                                        ?>

                                        <tr>
                                            <td><?php echo $row['client_name']; ?></td>
                                            <td><?php echo $row['mobile_no']; ?></td>
                                            <td><?php echo $row['type1']; ?></td>
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
                                    <?php } ?>





                                    
    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/forms/select/select2.full.min.js"></script>
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
    <script src="app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
    <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="app-assets/vendors/js/forms/cleave/cleave.min.js"></script>
    <script src="app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/app-user-list.js"></script>
    <!-- END: Page JS-->

<script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        });
</script>