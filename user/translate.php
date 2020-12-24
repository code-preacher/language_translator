<?php
session_start();
error_reporting(0);
include '../checklogin.php';
check_login();
$r="";
?>
<?php
include '../config.php';
if(isset($_POST['sub'])){
$word=$_POST['word'];

$g=mysqli_query($con,"select * from translation where english_word='$word' ");
$jp=mysqli_fetch_array($g);

if($jp){
$r='
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                <div class="col-md-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>SEARCH RESULT</h4><hr/>

                                <p>
                        <span style="color:#006e80;">
                            Searched Word : '. $word.'
                        </span>       
                               </p> <p>
                        <span style="color:#3e0878;">
                             Word Description : '.$jp['description'].'
                        </span>        </p>   <p>
                        <span style="color:#0b154d;">
                             Edo Translation : '. $jp['edo_translation'].'
                        </span>       
                               
                            </p>

                            </div>
                           

                        </div>
                    </div>
                   
                </div>
                
            </div>';
            
}
else{

$r='
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                <div class="col-md-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>SEARCH RESULT</h4><hr/>

                                <p>
                        <span style="color:red;">
                            No result found for &nbsp; <i><b><span style="color:#0b154d;">  " '.$word.' "</span></b></i>
                        </span>       
                               </p> 

                            </div>
                           

                        </div>
                    </div>
                   
                </div>
                
            </div>';
            
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
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Translate Word</a></li>
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
                                <h4>SEARCH FOR WORD</h4>

                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="#" method="POST">
                                       
                                      <div class="form-group">
                                         
                                            <div class="input-group input-group-rounded">
                                                <span class="input-group-btn"><button class="btn btn-primary input-group-close-icon btn-group-left" type="reset"><i class="ti-close"></i></button></span>
                                                <input type="text" style="height: 45px;" class="form-control" placeholder="Please enter English word to get Edo translation" name="word">
                                                <span class="input-group-btn"><button class="btn btn-primary btn-group-right" type="submit" name="sub"><i class="ti-search"></i></button></span>
                                            </div>
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
                               
                                
    

<?php  echo $r; ?>
 <?php  echo $r=""; ?>




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