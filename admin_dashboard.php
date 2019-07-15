<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Dashboard</title>
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

                    
                     <?php if(!isset($_SESSION['admin_name']))
                        {
                      ?>
                         <div class="login_logout">
                            <span><a href="admin_login">login</a></span>
                        </div>

                       <?php
                        }
                    ?>

                      <?php if(isset($_SESSION['admin_name']))
                        {
                      ?>
                         <div class="login_logout">
                            <span  class="vl"><?php echo 'Hello '.$_SESSION['admin_name'].' !!'; ?></span>
                            <span><a href="admin_logout">logout</a></span>
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
                    <span class="site-name"></span>  

                    </div>
                </div> 
            </nav>
            <nav>
                <div class="main-nav">
                    <div class="sub-nav">
                    <div class="row">
                        <ul class="list-unstyled components">
                <li class="list-menu">
                    <a href="admin_index">
                        <i class="fas fa-th-large"></i>
                        Dashboard
                    </a>
                </li>

             <?php if(isset($_SESSION['admin_name']))
                        {
                      ?>
                <div class="dropdown">
                    <a class="droplink">
                        <i class="far fa-user"></i>
                        Sub Admin
                        <i class="fas fa-angle-down"></i>
                    </a>       
                        <div class="dropdown-content">
                            <?php if(!isset($_SESSION['superadmin_id']))
                          {
                          ?>
                            <a href="superadmin_login">SubAdmin Login</a>
                         <?php
                          }
                          else
                          {
                          ?>
                            <a href="superadmin_logout">SubAdmin Logout</a>
                           <?php
                           }
                           ?> 
                           
                           <?php if(isset($_SESSION['superadmin_id']))
                          {
                          ?>
                            <a href="feedback_data">Feedback Data</a>
                            <a href="contact_data">Contact Data</a>
                          <?php
                          }
                         ?>
                    </div>
                </div>

                <!--<div class="dropdown">
                    <a class="droplink">
                        <i class="fas fa-users"></i>
                        Mentors
                        <i class="fas fa-angle-down"></i>
                    </a>
                        <div class="dropdown-content">
                            <a href="plant_a_mentor">Plant a Mentor</a>
                            <a href="plant_b_mentor">Plant b Mentor</a>
                            <a href="plant_c_mentor">Plant c Mentor</a>
                    </div>
                </div>-->

                <div class="dropdown">
                    <a class="droplink">
                        <i class="fas fa-users"></i>
                        Learning Center
                        <i class="fas fa-angle-down"></i>
                    </a>
                        <div class="dropdown-content">
                            <?php if(!isset($_SESSION['lc_id']))
                          {
                          ?>
                            <a href="lc_login">LC Login</a>
                         <?php
                          }
                          else
                          {
                          ?>
                            <a href="lc_logout">LC Logout</a>
                           <?php
                           }
                           ?> 
                           
                           <?php if(isset($_SESSION['lc_id']))
                          {
                          ?>
                            <a href="intern_data_pagination">Intern Data</a>
                            <a href="internship_data">Internship Data</a>
                            <a href="intern_attendance_report">Intern Attendance Report</a>
                            <a href="admin_mentor_attendance">Attendance Fill up by Mentor</a>
                            <a href="admin_schedule_decide">Schedule Assign By Mentor</a>

                       <?php
                        }
                        ?>
                            
                    </div>
                </div>

                <div class="dropdown">
                    <a class="droplink">
                        <i class="fas fa-users"></i>
                        Security
                        <i class="fas fa-angle-down"></i>
                    </a>
                        <div class="dropdown-content">

                            <?php if(!isset($_SESSION['security_id']))
                          {
                          ?>
                            <a href="security_loginform">Security Login</a>
                         <?php
                          }
                          else
                          {
                          ?>
                            <a href="security_logoutform">Security Logout</a>
                           <?php
                           }
                           ?> 
                           
                           <?php if(isset($_SESSION['security_id']))
                          {
                          ?>
                            <a href="temporary_pass">Temporary Pass Info</a>
                            <a href="security_lc_password_change">Lc Password Change</a>
                            <a href="security_subadmin_password_change">Subadmin Password Change</a>
                         <?php
                          }
                          ?>
                    </div>
                </div>

                <?php
                 }
                 ?>




              <!--  <li>
                    <a href="mailbox.html">
                        <i class="far fa-envelope"></i>
                        Mailbox
                        <span class="badge badge-secondary float-md-right bg-danger">5 New</span>
                    </a>
                </li>-->
                
               <!--<?php if(isset($_SESSION['admin_name'])){ ?>
                 <li class="list-menu">
                    <a href="admin_mentor_attendance">
                        <i class="far fa-comment"></i>
                        Attendance
                    </a>
                </li>
                <?php 
                  }
                ?>

                <?php if(isset($_SESSION['admin_name'])){ ?>
                 <li class="list-menu">
                    <a href="admin_schedule_decide">
                        <i class="far fa-table"></i>
                        Schedule
                    </a>
                </li>
                <?php 
                  }
                ?>-->

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