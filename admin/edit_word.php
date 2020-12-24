<?php
session_start();
error_reporting(0);
include '../checklogin.php';
check_login();
$id=$_GET['id'];
?>
<?php
include '../config.php';
$x=mysqli_query($con,"select * from translation where id='$id'");
$xx=mysqli_fetch_array($x);

if(isset($_POST['sub'])){
$english_word=$_POST['eword'];
$description=$_POST['dpt'];
$translation=$_POST['tsl'];
$date=date("D-M-Y @ h:i A");
$qb=mysqli_query($con,"update translation set english_word='$english_word',description='$description',edo_translation='$translation',date='$date' where id='$id' ");
if($qb){
$_SESSION['hmsg']='<span style="color:green;">'."Word was successfully Updated".'</span>';
}
else{
$_SESSION['hmsg']='<span style="color:red;">'."Word was not successfully Updated".'</span>';    
}

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  
    <!-- important meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>ENGLISH TO EDO TRANSLATOR DASHBOARD</title>
    
    <!-- Basic SEO -->
     <meta name="description" content="ENGLISH TO EDO TRANSLATOR ">
    <meta name="keywords" content="ENGLISH TO EDO TRANSLATOR ">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="img/">
 
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->


    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
   <?php
include "inc/header.php";
   ?>
        <!-- End header header -->
        <!-- Left Sidebar  -->
   <?php
include "inc/sidebar.php";
   ?>     
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Add Word</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                <div class="col-md-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>ADD WORD</h4>

                                <p>
                               
                                <?php echo $_SESSION['hmsg'];  ?>
                                <?php echo $_SESSION['hmsg']="";  ?>

                            </p>

                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="#" method="POST">
                                       
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">English Word :</p>
                                            <input type="text" class="form-control input-rounded" name="eword"  required="required" value=<?php echo $xx['english_word'];?> >
                                        </div>
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Word Description :</p>
                                            <input type="text" class="form-control input-rounded" name="dpt"  required="required" value=<?php echo $xx['description'];?>>
                                        </div>
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Edo Translation :</p>
                                            <input type="text" class="form-control input-rounded" name="tsl"  required="required" value=<?php echo $xx['edo_translation'];?>>
                                        </div>
                                        <div class="form-actions">
                                        <button type="submit" name="sub" class="btn btn-success"> <i class="fa fa-check"></i>Update</button>
                                        <button type="reset" class="btn btn-inverse">Clear</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->

<!-- FOOTER REGION -->
<?php
include "inc/footer.php";
?>

            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/scripts.js"></script>

</body>

</html>