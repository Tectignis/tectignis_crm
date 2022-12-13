<?php
include("config.php");
$id=$_GET['view'];
if(isset($_GET['del_id'])){
    $delid = $_GET['del_id'];
    $client_id=$_GET['client_id'];
    $sql = mysqli_query($conn,"DELETE FROM lead WHERE id = '$delid'");
    header ('location:view_clients/'.$client_id);
  }
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <base href="http://localhost:8000/tectignis_crm/admin/" />
    <title>View Clients</title>
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <style>
        .select{
            /* border:none !important; */
            padding: 0.571rem 2rem !important;
        }
        .select option{
            border: none !important;
    color: #848079;
    box-shadow: rgb(149 157 165 / 20%) 0px 8px 24px;
        }
    </style>
    <?php 
    include "include/header.php"; ?>
    <?php include "include/sidebar.php"; ?>
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">View Client</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="clients.php">Clients</a>
                                    </li>
                                    <li class="breadcrumb-item active">Client Details
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header border-bottom p-1">
                        <div class="head-label">
                            <h4 class="mb-0">Leads</h4>
                        </div>
                        <div class="dt-action-buttons text-end">
                            <a href="" button="" type="button"
                                class="btn btn-primary float-right waves-effect waves-float waves-light"
                                data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-right: 5px;">
                                + Add Lead
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header border-bottom p-1">
                        <form style="float:left" class="head-label">
                            <input type="hidden" id="leadid" value="<?php echo $id;?>">
                            <select id="demo_overview_minimal_multiselect" class="dropbtn form-control select"
                                style="background-color:#fff;" onChange="package(this.value)">
                                <option disabled selected>Select Package</option>
                                <?php 
                                $qpackageselect=mysqli_query($conn,"SELECT * FROM package_assign WHERE firm_id='$id'");
                                while($row=mysqli_fetch_array($qpackageselect)){ ?>
                                <option value="<?php echo $row['title'] ?>"><?php echo $row['title'] ?></option>
                                <?php }
                                 ?>
                            </select>
                        </form>
                        <form style="float:right" class="dt-action-buttons text-end">
                            <input type="hidden" id="leadid" value="<?php echo $id;?>">
                            <select id="demo_overview_minimal_multiselect" class="dropbtn form-control select"
                                onChange="getdata(this.value)" style="background-color:#fff;">
                                <option disabled>select</option>
                                <option value="Last Week">Last Week</option>
                                <option value="Monthly">Monthly</option>
                                <option value="3 Month">3 Month</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div class="packageresult">
                    <section id="dashboard-ecommerce">
                        <div class="row" id="leads">
                            <div class="col-lg-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <div>
                                            <?php $query=mysqli_query($conn,"select * from lead where Firm_Name='$id'");
                                            $count1=mysqli_num_rows($query);
                                            ?>
                                            <h3 class="fw-bolder mb-75"><?php echo $count1; ?></h3>
                                            <span>Total Lead</span>
                                        </div>
                                        <div class="avatar bg-light-primary p-50">
                                            <span class="avatar-content">
                                                <i class="far fa-user" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <div>
                                            <?php
                                            $query=mysqli_query($conn,"select * from lead where nature='Hot'");
                                            $count1=mysqli_num_rows($query);
                                            ?>
                                            <h3 class="fw-bolder mb-75"><?php echo $count1; ?></h3>
                                            <span>Hot</span>
                                        </div>
                                        <div class="avatar bg-light-danger p-50">
                                            <span class="avatar-content">
                                                <i class="fas fa-user-plus" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <div>
                                            <?php
                                            $query=mysqli_query($conn,"select * from lead where nature='Cold'");
                                            $count1=mysqli_num_rows($query);
                                            ?>
                                            <h3 class="fw-bolder mb-75"><?php echo $count1; ?></h3>
                                            <span>Cold</span>
                                        </div>
                                        <div class="avatar bg-light-success p-50">
                                            <span class="avatar-content">
                                                <i class="fas fa-user-check" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <div>
                                            <?php
                                                $query=mysqli_query($conn,"select * from lead where nature='Warm'");
                                                $count1=mysqli_num_rows($query);
                                                ?>
                                            <h3 class="fw-bolder mb-75"><?php echo $count1; ?></h3>
                                            <span>Warm</span>
                                        </div>
                                        <div class="avatar bg-light-warning p-50">
                                            <span class="avatar-content">
                                                <i class="fas fa-user-times" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Basic table -->
                    <section id="basic-datatable">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Sr No.</th>
                                                <th>Package</th>
                                                <th>Client Name</th>
                                                <th>Client Mobile No.</th>
                                                <th>Requirment</th>
                                                <th>Created On</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        $id=$_GET['view'];
                                        $sql=mysqli_query($conn,"select *, lead.Mobile_Number as mob from lead inner join client on lead.Firm_Name=client.Client_Code where Client_Code='$id'");
                                        $count=1;?>
                                        <tbody class="packresult">
                                            <?php while ($row=mysqli_fetch_array($sql)){ 

                                           ?>
                                            <tr>
                                                <td><?php echo $count;?></td>
                                                <td><?php echo $row['package']; ?></td>
                                                <td><?php echo $row['Client_Name']; ?></td>
                                                <td><?php echo $row['mob']; ?></td>
                                                <td><?php echo $row['Requirement']; ?></td>
                                                <td><?php echo $row['Created_On']; ?></td>
                                                <td>
                                                    <div class="btn-group" role="group"
                                                        aria-label="Basic outlined example">
                                                        <button type="button" onclick="deleteBtn()"
                                                            class="btn btn-sm btn-danger m-1 delbtn" 
                                                            data-id="=<?php echo $row['id']; ?>"><i
                                                        class="fa fa-trash"
                                                        style="font-size:15px; margin: right 80px;"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php $count++; } ?>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>
                </div>
                <!-- Modal to add new record -->

                <!--/ Basic table -->
            </div>
        </div>
    </div>
    <!-- END: Content-->
    <div class="modal fade " id="exampleModal">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <h1 class="text-center mb-1" id="addNewCardTitle">Add Lead</h1>
                <div class="modal-body">
                    <form method="post" class="add-new-record pt-0">
                        <div class="row" style="padding-bottom: 21px;">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Package</label>
                                    <input type="hidden" value="<?php echo $id; ?>" id="firm_name" name="firm_name" required>
                                    <input type="text" value="" class="form-control" name="package" id="package" required>
                                    <!-- <select class="form-control" name="package" >
                                        <option value="" id="package" ></option>
                                        <?php 
                                $qpackageselect=mysqli_query($conn,"SELECT * FROM package_assign WHERE firm_id='$id'");
                                while($row=mysqli_fetch_array($qpackageselect)){ ?>
                                <option value="<?php echo $row['title'] ?>"><?php echo $row['title'] ?></option>
                                <?php }
                                 ?>
                                    </select> -->
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group" style="padding-top: 15px;">
                                    <label class="form-label">Client Mobile Number</label>
                                    <input type="tel" 
                                        class="form-control number" minlength="10" maxlength="10" name="number"
                                        id="number" placeholder="Mobile Number" required>
                                    <span id="numberspan" class="mb-4"></span>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Client Name</label>
                                    <input type="text" class="form-control" name="Cname" id="cname" placeholder="Client Name" required>
                                    <span id="cnamespan" class="mb-4"></span>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group" style="padding-top: 15px;">
                                    <label class="form-label">Requirement</label>
                                    <input type="text" class="form-control" name="requirement" id="Rname"  placeholder="Requirement" required>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.form-group -->

                            <div class="col-md-6">
                                <div class="form-group" style="padding-top: 15px;">
                                    <label class="form-label">Social Media</label>
                                    <select class="form-control select2" name="social_media" id="social_media"
                                        style="width: 100%;" required>
                                        <option selected="selected" disabled>Select</option>
                                        <option>Facebook</option>
                                        <option>Instagram</option>
                                        <option>Twitter</option>
                                        <option>Linkdin</option>
                                        <option>Youtube</option>
                                    </select>
                                </div>
                                <!-- /.form-group -->
                            </div>
                        </div>
                        <div class="modal-footer">
                        <button type="reset" class="btn btn-outline-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                            <button type="button" name="submitt" class="btn btn-primary float-right my-3 " id="sub"
                                style="margin-right: 5px;">Submit </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    <?php include "include/footer.php"; ?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        function deleteBtn() {

            swal({
                title: "Are You Sure...?",
                text: "This action can not be undone. Do you want to continue?",
                icon: "warning",
                buttons: ["No", "Yes"],
            });

        }
    </script>
    <script>
        $(document).ready(function () {
            $('.delbtn').click(function (e) {
                e.preventDefault();
                let del_id = $(this).data('id');
                let client_id=<?= $id ?>;
                swal({
                        title: "Are you sure?",
                        text: "Once deleted, you will not be able to recover this file!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            swal("Poof! Your file has been deleted!", {
                                icon: "success",
                            });
                            window.location.href = "view_clients.php?del_id" + del_id + "&client_id=" + client_id;
                        } else {
                            swal("Your file is safe!");
                        }
                    });
            })
        });
    </script>
    <script>
        function getdata(val) {
            let leadid = $("#leadid").val();
            $.ajax({
                url: "action_clients.php",
                method: "POST",
                data: {
                    fetch: val,
                    leadid: leadid
                },
                success: function (data) {
                    $('#leads').html(data);
                }
            });
        }

        function package(val) {
            
            $("#package").val(val);
            $("#package").html(val);
            let firm_name = $("#leadid").val();
            $.ajax({
                url: "action_clients.php",
                method: "POST",
                data: {
                    packa: val,
                    firm_name: firm_name
                },
                success: function (data) {
                    $(".packageresult").html(data);
                }
            });
        }

        $(document).ready(function () {
            $("#sub").click(function () {
                let firm_name = $("#firm_name").val();
                let package = $("#package").val();
                let number = $("#number").val();
                let cname = $("#cname").val();
                let Rname = $("#Rname").val();
                let numbarspan=$("#numberspan").html();
                let social_media = $("#social_media").val();
                let sub = $("#sub").val();
                if(firm_name=='' || package=='' || number=='' || cname=='' || Rname=='' || social_media==''){
                    alert('Please fill all fields');
                }
                else{
                    if(numbarspan != ''){
                        alert('please enter valid mobile number');
                    }else{
                $.ajax({
                    type: "POST",
                    url: "action_clients.php",
                    data: {
                        firm_name: firm_name,
                        package: package,
                        number: number,
                        cname: cname,
                        Rname: Rname,
                        social_media: social_media,
                        sub: sub
                    },
                    success: function (data) {
                        $(".packresult").html(data);
                        $("#exampleModal").modal('hide');
                        $('.modal-backdrop').css('display', 'none');
                    }
                });
            }
            }
            });
        });
        let odnkname;

        $(document).ready(function(){
            $(".number").keyup(function(){
                num_check();
            });
            function num_check(){
                odnkname="no";
                let txt=$(".number").val();
                let text=/^\d{10}$/;
                if(!text.test(txt)){
                    $("#numberspan").show().html('please enter valid mobile number').css('color','red').focus();
                }
                else{
                    odnkname="yes";
                    $("#numberspan").hide().html('');
                }
            }
        })
    </script>
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

    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "buttons": ["csv", "excel", "pdf", "print"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        });
    </script>
    </body>
    <!-- END: Body-->

</html>