<!DOCTYPE html>
<!-- saved from url=(0043)http://git.globallit.org/assessmentform.php -->
<html style="min-height: 487px;">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta charset="UTF-8">
    <title>GlobalLit | Dashboard</title>
    <link rel="shortcut icon" href="http://git.globallit.org/img/favicon.ico">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- bootstrap 3.0.2 -->
    <link href="./GlobalLit_ Dashboard_files/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- font Awesome -->
    <link href="./GlobalLit_ Dashboard_files/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Ionicons -->
    <link href="./GlobalLit_ Dashboard_files/ionicons.min.css" rel="stylesheet" type="text/css">

    <!-- jvectormap -->
    <link href="./GlobalLit_ Dashboard_files/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css">
    <!-- fullCalendar -->
    <link href="./GlobalLit_ Dashboard_files/fullcalendar.css" rel="stylesheet" type="text/css">
    <!-- Daterange picker -->
    <!--<link href="./GlobalLit_ Dashboard_files/daterangepicker-bs3.css" rel="stylesheet" type="text/css">-->
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="./GlobalLit_ Dashboard_files/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css">
    <!-- DATA TABLES -->
    <link href="./GlobalLit_ Dashboard_files/dataTables.bootstrap.css" rel="stylesheet" type="text/css">
    <!-- Theme style -->
    <link href="./GlobalLit_ Dashboard_files/AdminLTE.css" rel="stylesheet" type="text/css">
    <!-- jQuery 2.0.2 -->
    <script src="./GlobalLit_ Dashboard_files/jquery.min.js" type="text/javascript"></script>

    <!-- calHeatMap -->
    <link rel="stylesheet" href="./GlobalLit_ Dashboard_files/cal-heatmap.css" type="text/css"/>
    <link rel="stylesheet" href="./GlobalLit_ Dashboard_files/cal-heatmap_customstyle-Revised.css" type="text/css"/>
    <!-- Moment -->
    <script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js" type="text/javascript"></script>
    <!-- Daterange picker -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" type="text/css"/>
    <script src="./GlobalLit_ Dashboard_files/daterangepicker2.js" type="text/javascript"></script>
    <script src="./GlobalLit_ Dashboard_files/jquery.tipsy.js"> </script>
    <link href="./GlobalLit_ Dashboard_files/tipsy.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        .jqstooltip
        {
            position: absolute;
            left: 0px;
            top: 0px;
            visibility: hidden;
            background: rgb(0, 0, 0) transparent;
            background-color: rgba(0,0,0,0.6);
            filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
            color: white;
            font: 10px arial, san serif;
            text-align: left;
            white-space: nowrap;
            padding: 5px;
            border: 1px solid white;
            z-index: 10000;
        }
        .jqsfield
        {
            color: white;
            font: 10px arial, san serif;
            text-align: left;
        }
    </style>
</head>
<body class="skin-black  pace-done" style="min-height: 487px;">
<div class="pace  pace-inactive">
    <div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
        <div class="pace-progress-inner"></div>
    </div>
    <div class="pace-activity">

    </div>
</div>
<!-- header logo: style can be found in header.less -->
<header class="header">
    <a href="http://git.globallit.org/index.php" class="logo" style="padding-top: 10px; text-indent: -50px">
        Curious Learning
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="http://git.globallit.org/assessmentform.php#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->

                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="http://git.globallit.org/assessmentform.php#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-user"></i>
                        <span>David Gibbs <i class="caret"></i></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="http://git.globallit.org/changepassword.php" class="btn btn-default btn-flat">Change Password</a>
                            </div>
                            <div class="pull-right">
                                <a href="http://git.globallit.org/signout.php" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>

<div class="wrapper row-offcanvas row-offcanvas-left" style="min-height: 453px;">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas" style="min-height: 487px;">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                </div>
                <div class="pull-left info">
                    <p>Hello User</p>
                </div>
            </div>
            <ul class="sidebar-menu">
                <li><a href="http://git.globallit.org/index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li><li><a href="http://git.globallit.org/deployments.php"><i class="fa fa-upload"></i> <span>Deployments</span></a></li><li><a href="http://git.globallit.org/creategroupsandpeople.php"><i class="fa fa-sitemap"></i> <span>Create Groups and People</span></a></li><li><a href="http://git.globallit.org/managegroupsandpeople.php"><i class="fa fa-users"></i> <span>Manage Groups and People</span></a></li><li><a href="http://git.globallit.org/tablets.php"><i class="fa fa-tablet"></i> <span>Tablets</span></a></li><li><a href="http://git.globallit.org/ticket.php"><i class="fa fa-ticket"></i> <span>Open Problem Ticket</span></a></li><li><a href="http://git.globallit.org/websiteproblems.php"><i class="fa fa-cogs"></i> <span><font color="red">Report Website Problems</font></span></a></li><li><a href="http://git.globallit.org/managementportal.php"><i class="fa fa-wrench"></i> <span>Management Portal (beta)</span></a></li><li><a href="http://git.globallit.org/appreporting.php"><i class="fa fa-bar-chart-o"></i> <span>Your App Reports (testing)</span></a></li><li><a href="http://git.globallit.org/uploadapp.php"><i class="fa fa-tablet"></i> <span>Upload App</span></a></li><li><a href="http://git.globallit.org/uploadvideo.php"><i class="fa fa-video-camera"></i> <span>Upload Video</span></a></li><li class="active"><a href="./GlobalLit_ Dashboard_files/GlobalLit_ Dashboard.html"><i class="fa fa-file-o"></i> <span>Input Assessment Information</span></a></li><li><a href="http://git.globallit.org/assessmentview.php"><i class="fa fa-file-o"></i> <span>View Assessment Information</span></a></li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <section class="content-header">
            <h1>
                Input Assessment Information        <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="http://git.globallit.org/assessmentform.php#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Input Assessment Information</li>
            </ol>
        </section>

        <!-- Nothing above this line should be modified.  It's generated at runtime. -->
<?php

for($counter  = 0; $counter < 3; $counter++)
{
    echo <<< EOT
<section class="content">
            <div class="row">
                <section class="col-lg-11">
                    <div class="box box-primary">
                        <div class="box-header" style="cursor: move;">
                            <div class="box-title">
                                Standard Cal Heatmap $counter
                            </div>
                        </div>
                        <div class="box-body standard_background">
                            <div class="container-fluid">
                                <h2>
                                    <div id="standardHeatmap$counter" class="standard-heatmap" ></div>
                                    <div class="button previous" id="standardPreviousSelector$counter" >Prev</div>
                                    <div class="button next" id="standardNextSelector$counter" >Next</div>
                                    <div class="button_container">
                                        <div class="centerwrapper">
                                            <div class="yearsStandard$counter" id="yearSelector$counter"></div>
                                        </div>
                                        <div class="centerwrapper">
                                            <div class="monthsStandard$counter" id="monthSelector$counter"></div>
                                        </div>
                                    </div>
                                </h2>
                            </div>
                        </div>
                        <div id="continuous_header" class="box box-primary">
                            <div id="continuous_header_inner" class="box-header" style="cursor: move;">
                                    <div class="box-title">
                                        Continuous Cal Heatmap $counter
                                    </div>
                            </div>
                            <div class="box-body continuous_background">
                                <div class="container-fluid">
                                    <h2>
                                        <div id="continuousHeatmap$counter" class="continuous-heatmap" ></div>
                                        <div class="button previous" id="continuousPreviousSelector$counter" >Prev</div>
                                        <div class="button next" id="continuousNextSelector$counter" >Next</div>
                                        <div class="button_container">
                                            <div class="centerwrapper">
                                                <div class="yearsContinuous$counter" id="yearSelector$counter"></div>
                                            </div>
                                        </div>
                                    </h2>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
            </div>
        </section>
EOT;
}
?>

        <!-- Nothing below this line should be modified.  It's generated at runtime.  However, if truly needed, it can be completely removed. -->

        <!-- calHeatMap -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.6/d3.min.js" charset="utf-8" type="text/javascript"></script>
        <script src="./GlobalLit_ Dashboard_files/calheatmap.js" type="text/javascript"></script>
        <script src="./GlobalLit_ Dashboard_files/calHeatMapVisualizations-Revised.js" type="text/javascript"> </script>
        <!-- jQuery UI 1.10.3 -->
        <script src="./GlobalLit_ Dashboard_files/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="./GlobalLit_ Dashboard_files/bootstrap.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="./GlobalLit_ Dashboard_files/raphael-min.js"></script>

        <!-- Sparkline -->
        <script src="./GlobalLit_ Dashboard_files/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="./GlobalLit_ Dashboard_files/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="./GlobalLit_ Dashboard_files/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="./GlobalLit_ Dashboard_files/fullcalendar.min.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="./GlobalLit_ Dashboard_files/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <!--<script src="./GlobalLit_ Dashboard_files/daterangepicker.js" type="text/javascript"></script>-->
        <!-- Bootstrap WYSIHTML5 -->
        <script src="./GlobalLit_ Dashboard_files/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="./GlobalLit_ Dashboard_files/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="./GlobalLit_ Dashboard_files/app.js" type="text/javascript"></script>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="./GlobalLit_ Dashboard_files/dashboard.js" type="text/javascript"></script>

        <!-- AdminLTE for demo purposes -->
        <script src="./GlobalLit_ Dashboard_files/demo.js" type="text/javascript"></script>



    </aside></div><div class="jvectormap-label"></div></body></html>