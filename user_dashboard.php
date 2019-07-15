<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Dashboard</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    
    <!-- Bootstrap Css -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Common Css -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style4.css">
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
    <link href="<?php echo base_url(); ?>assets/css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
    <script src='<?php echo base_url(); ?>assets/js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->

    <!-- Sidebar-nav Js -->
   
    <!-- Validation Script -->
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict';

            window.addEventListener('load', function () {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');

                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
    <!--// Validation Script -->

    <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("slow");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("slow");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->

    <!-- Js for bootstrap working-->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</head>

<body>
    
    <div class="wrapper">
           
        <!-- Page Content Holder -->
        <div id="content">
            <!-- top-bar -->
            <nav class="navbar navbar-default">
                <div class="container-fluid">

                    <div class="navbar-header">
                        
                    </div>
                    <!-- Search-from -->
                    <!--<form action="#" method="post" class="form-inline mx-auto search-form">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" required="">
                        <button class="btn btn-style my-2 my-sm-0" type="submit">Search</button>
                    </form>-->

                    
                     <?php if(!isset($_SESSION['email']))
                        {
                      ?>
                         <div class="user_login">
                            <span><a href="user_login">login</a></span>
                        </div>

                       <?php
                        }
                    ?>

                      <?php if(isset($_SESSION['email']))
                        {
                      ?>
                         <div class="login_logout">
                            <span  class="vl"><?php echo 'Hello '.$_SESSION['firstname'].' !!'; ?></span>
                            <span><a href="user_logout">logout</a></span>
                        </div>
                       <?php
                        }
                    ?>
                    
                    <!--// Search-from -->
                    
                </div>
            </nav>
            <nav>
                <div class="site-logo">
                    <div class="col-sm-4">
                    <span class="logo"></span> 
                    <span class="site-name">
                        <?php
                        if(isset($_SESSION['email']))
                         {
                            ?>
                        <br><?php include 'headline.php'; }?></span>  

                    </div>
                </div> 
            </nav>
            <nav>
                <div class="main-nav">
                    <div class="sub-nav">
                    <div class="row">
                        <ul class="list-unstyled components">
                <li class="list-menu">
                    <a href="user_index">
                        <i class="fas fa-th-large"></i>
                        Dashboard
                    </a>
                </li>

                <?php if(!isset($_SESSION['email']))
                 {
                 ?>
                <li class="list-menu">
                    <a href="security_form">
                        <i class="fas fa-th-large"></i>
                        Temporary Pass Form
                    </a>
                </li>
                <?php
                 }
                 ?>
                                  
                <?php if(isset($_SESSION['email']))
                {
               ?>
                <div class="dropdown">
                    <a class="droplink">
                        <i class="far fa-user"></i>
                        Details
                        <i class="fas fa-angle-down"></i>
                    </a>
                        
                        <div class="dropdown-content">

                           <!-- <?php if(!isset($_SESSION['Ep_no']))
                            {
                            ?>
                            <a href="intern_details">Intern Details</a>
                            <?php
                            }?>-->
                            <a href="ep_no_generate">Intern Ep no</a>
                            
                          <!--<?php
                            if(isset($_SESSION['Ep_no']) && !isset($_SESSION['plant']) && !isset($_SESSION['mentor']) )
                            {
                            ?>
                            <a href="internship_details">Internship Details</a>
                            <?php
                            }
                            ?>-->
                           
                           <?php
                            if(isset($_SESSION['plant']) && isset($_SESSION['Ep_no']) && isset($_SESSION['mentor']))
                             {
                            ?>
                           <a href="user_details">Update Details</a>
                            <!--<a href="user_forgot_password">Forgot Password</a>
                            <a href="user_change_password">Change Password</a>-->
                          <?php
                      }
                      ?>
                    </div>
                </div>
                <?php
                 }
                 ?>

                <?php if(isset($_SESSION['email']))
                {
                    if(isset($_SESSION['plant']) && isset($_SESSION['Ep_no']) && isset($_SESSION['mentor']))
                    {
               ?> 
                <li class="list-menu">
                    <a href="schedule">
                        <i class="fas fa-table"></i>
                        Schedule
                    </a>
                </li>
                <?php
                 }
             }
                 ?>


               <?php if(isset($_SESSION['email']))
                {
                if(isset($_SESSION['plant']) && isset($_SESSION['Ep_no']) && isset($_SESSION['mentor']))
                    {
               ?>
                <li class="list-menu">
                    <a href="user_attendance_report">
                        <i class="fas fa-table"></i>
                        Attendance Report
                    </a>
                </li>
                <?php
                }
            }
                ?>

               <!-- <li class="list-menu">
                    <a href="map">
                        <i class="fas fa-map"></i>
                        Map
                    </a>
                </li>-->

                 <li class="list-menu">
                    <a href="contactus">
                        <i class="far fa fa-phone"></i>
                        Contact Us
                    </a>
                </li>

                <?php if(isset($_SESSION['email']))
                {
                ?>
                <li class="list-menu">
                    <a href="feedback">
                        <i class="far fa fa-comment"></i>
                        Feedback
                    </a>
                </li>
                <?php
                 }
                 ?>

                <div class="dropdown">
                    <a class="droplink">
                        <i class="far fa-user"></i>
                        About Us
                        <i class="fas fa-angle-down"></i>
                    </a>
                        
                        <div class="dropdown-content">
                            <a href="about_reliance_group">Reliance Group</a>
                            <a href="about_our_founder">Our Founder</a>
                            <a href="about_chairmain">Our Chairmain</a>
                            <a href="about_vision">Vision</a>
                            <a href="about_values">Values</a>
                        
                    </div>
                </div>

                <?php if(isset($_SESSION['email']))
                {
              if(isset($_SESSION['Ep_no']))
                {
                ?>
                 <div class="dropdown">
                    <a class="droplink">
                        <i class="far fa-user"></i>
                        Permission Form
                        <i class="fas fa-angle-down"></i>
                    </a>
                        
                        <div class="dropdown-content">
                        <?php
                        if(isset($_SESSION['plant']) && isset($_SESSION['mentor']))
                              {
                                ?>
                            <a href="leave_permission_form">Leave Permission Form </a>
                            <?php
                             }
                            ?>

                            <a href="laptop_permission_form">Laptop Permisson Form</a>
                    </div>
                </div>
                <?php
                 }
             }  
                 ?>



              <!--  <li>
                    <a href="mailbox.html">
                        <i class="far fa-envelope"></i>
                        Mailbox
                        <span class="badge badge-secondary float-md-right bg-danger">5 New</span>
                    </a>
                </li>-->
                
              


            </ul>
                    </div>
                </div>
            </div>
            </nav>
                
            <!--// top-bar -->
<!--// top-bar -->

           
            <!-- Copyright -->
            <!--<div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>© 2018 Modernize . All Rights Reserved | Design by
                    <a href="http://w3layouts.com/"> W3layouts </a>
                </p>
            </div>
       


    <!-- Required common Js -->
    
    <!-- //Js for bootstrap working -->