
<?php 
include("config.php");
?>

<?php
if(isset($_POST['submit'])){
    $title=$_POST['title'];
    $category=$_POST['category'];
    $image=$_FILES['image']['name'];

    $extension=substr($image,strlen( $image)-4,strlen( $image)); 
    $all_extension = array(".jpg","jpeg",".png","gif");
    if(!in_array($extension,$all_extension)){
    $msg="Invalid format. Only jpg / jpeg/ png /gif format allowed";
        } 
    else{
    $image=md5($image).$extension;
    $dnk=$_FILES['image']['tmp_name'];
    $loc="app-assets/images/".$image;
    move_uploaded_file($dnk,$loc);
        }
	$sql = mysqli_query($conn,"INSERT INTO `poster`(`title`,`image`,`category`) VALUES ('$title','$image','$category')") ;
  if($sql==1){
    echo "<script>alert('Register successfully'),window.location='poster_form.php';</script>";
  }else{
    echo "<script>alert('something went wrong');</script>";
  }

  }

?>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, index template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Form Layouts - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <?php
       include('include/header.php');
       ?>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <?php
       include('include/sidebar.php');
       ?>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Category</h2>
                           
                        </div>
                    </div>
                </div>
              
            </div>
            <div class="content-body">
                <!-- Basic multiple Column Form section start -->
                <section id="multiple-column-form">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                <form class="form" method="post" enctype="multipart/form-data">
                                        <div class="row">

                                        <div class="col-md-6 col-12">
                                        <div class="mb-1">
                                        <label class="form-label" for="basicSelect">Category</label>
                                        <select class="form-select" id="basicSelect" name="category">
                                        <option selected="selected">select</option>
                                                        <?php
                                                   $query=mysqli_query($conn,"select * from category");
                                                            while($sql=mysqli_fetch_array($query))
                                                            {
                                                              ?>

                                                        <option value="<?php echo $sql['category']; ?>">
                                                        <?php echo $sql['category']; ?></option>
                                                        <?php }  ?>
                                                    </select>
                                    </div>
                                            </div>



                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-column">Title</label>
                                                    <input type="text" id="first-name-column" class="form-control" placeholder="Title" name="title" />
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="last-name-column">Image</label>
                                                    <input class="form-control" type='file' name="image" accept='image/*'  onchange="readURL(this)" ></p>
                                                    <img src="" alt="No Image" id="img" style='height:150px;'>
                                                </div>
                                            </div>
                                          
                                            <div class="col-12">
                                                <button type="submit" name="submit" class="btn btn-primary me-1">Submit</button>
                                             
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Floating Label Form section end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021<a class="ms-25" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-end d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>

<script>
  function readURL(input) {
    if (input.files && input.files[0]) {
    
      var reader = new FileReader();
      reader.onload = function (e) { 
        document.querySelector("#img").setAttribute("src",e.target.result);
      };

      reader.readAsDataURL(input.files[0]); 
    }
  }
  </script>
</body>
<!-- END: Body-->

</html>