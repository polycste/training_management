<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Master</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{!! asset('bootstrap/css/bootstrap.min.css') !!}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{!! asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css') !!}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{!! asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') !!}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{!! asset('dist/css/AdminLTE.min.css') !!}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{!! asset('dist/css/skins/_all-skins.min.css') !!}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{!! asset('plugins/iCheck/flat/blue.css') !!}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{!! asset('plugins/morris/morris.css') !!}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{!! asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css') !!}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{!! asset('plugins/datepicker/datepicker3.css') !!}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{!! asset('plugins/daterangepicker/daterangepicker-bs3.css') !!}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{!! asset('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') !!}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!-- for admin  --->
    <link href="{!! asset('css/bootstrap.css') !!}" rel="stylesheet">
    <script src="{!! asset('js/jquery-1.11.3.min.js') !!}"></script>
    <!-- Include roboto.css to use the Roboto web font, material.css to include the theme and ripples.css to style the ripple effect -->
    <link href="{!! asset('/css/roboto.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('/css/material.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('/css/ripples.min.css') !!}" rel="stylesheet">

    @yield('script')
    <link rel="stylesheet" href="{!! asset('assets/course-style/style.css') !!}">
    <style>
        @yield('style')
    </style>
</head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>B</b>ARD</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>BARD</b>Admin</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Admin <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/auth/logout">Logout</a></li>
                    </ul>
                </li>
            </ul>
          </div>
        </nav>
      </header>
       <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{!! asset('assets/images/logo.jpg') !!}" alt="BARD Image">
                </div>
                <div class="pull-left info">
                    <p>BARD Admin Panel</p>
                    
                </div>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">MAIN NAVIGATION</li>
                <li class="{{ (strpos(URL::current(), URL::to('healthCreate'))!== false) ? 'active' : '' }} | {{ (strpos(URL::current(), URL::to('adminHealthInfos'))!== false) ? 'active' : '' }}">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>HealthInfo</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">

                        <li class="{{ (strpos(URL::current(), URL::to('adminHealthInfos'))!== false) ? 'active' : '' }}"><a href="/adminHealthInfos"><i class="fa fa-circle-o"></i> All Health Info</a></li>

                    </ul>
                </li>
                {{--Following created by localhost--}}
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-users"></i> <span>Clients</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{ (strpos(URL::current(), URL::to('admin/clients'))!== false) ? 'active' : '' }}"><a href="{{ URL::to('admin/clients') }}"><i class="fa fa-circle-o"></i>All Clients</a></li>
                        <li class=""><a href="{{ URL::to('/clients/create') }}"><i class="fa fa-circle-o"></i>Create a Clients</a></li>
                        <li class=""><a href="{{ URL::to('/clients/create_newsletter') }}"><i class="fa fa-circle-o"></i>Send Newsletter</a></li>

                    </ul>
                </li>
                <li class=" treeview">
                    <a href="#">
                        <i class="fa fa-user"></i> <span>Users</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class=""><a href="{{ URL::to('/user/all') }}"><i class="fa fa-circle-o"></i>All Users</a></li>
                        <li class=""><a href="{{ URL::to('/user/registration') }}"><i class="fa fa-circle-o"></i>Create User</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-book"></i> <span>Course</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class=""><a href="{{ URL::to('/courses') }}"><i class="fa fa-circle-o"></i>All Coures</a></li>
                        <li class=""><a href="{{ URL::to('/create_course') }}"><i class="fa fa-circle-o"></i>Create Course</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-picture-o"></i> <span>Slider Management</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class=""><a href="{{ URL::to('/slider/all') }}"><i class="fa fa-circle-o"></i>All slider</a></li>
                        <li class=""><a href="{{ URL::to('/slider/create') }}"><i class="fa fa-circle-o"></i>Add New</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-newspaper-o"></i> <span>Report</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class=""><a href="{{ URL::to('/select_training') }}"><i class="fa fa-circle-o"></i>All report</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>Trainings</span><i class="fa fa-angle-left pull-right"></i>
                        <span class="label label-primary pull-right"></span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=""><a href="{{ URL::to('/training_info') }}"><i class="fa fa-circle-o"></i>Create Training</a></li>
                        <li class=""><a href="{{ URL::to('/trainings') }}"><i class="fa fa-circle-o"></i> Training List</a></li>
                        <li class=" treeview">
                            <a href="#">
                                <i class="fa fa-files-o"></i>
                                <span>Testimonial</span><i class="fa fa-angle-left pull-right"></i>
                                <span class="label label-primary pull-right"></span>
                            </a>
                            <ul class="treeview-menu">
                                <li class=""><a href="{{ URL::to('/create_testimonial') }}"><i class="fa fa-circle-o"></i>Create Testimonial</a></li>
                                <li><a href="{{ URL::to('/testimonials') }}"><i class="fa fa-circle-o"></i> Testimonial List</a></li>
                            </ul>
                        </li>
                        <li class=" treeview">
                            <a href="#">
                                <i class="fa fa-files-o"></i>
                                <span>FAQs</span>
                                <span class="label label-primary pull-right"></span><i class="fa fa-angle-left pull-right"></i>

                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{ URL::to('/create_frequently_asked_question') }}"><i class="fa fa-circle-o"></i> Create FAQs</a></li>
                                <li><a href="{{ URL::to('/frequently_asked_questions') }}"><i class="fa fa-circle-o"></i> FAQs List</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>


                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>Training</span>
                        <span class="label label-primary pull-right"></span><i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{!! URL::to('trainers') !!}"><i class="fa fa-circle-o"></i>Trainers</a></li>
                        <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Trainees</a></li>
                        <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Feedback</a></li>

                    </ul>
                </li>
            
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>Announcement</span>
                        <span class="label label-primary pull-right"></span><i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ URL::to('/announcement_create') }}"><i class="fa fa-circle-o"></i>Create Announcement</a></li>
                        <li><a href="{{ URL::to('/announcements') }}"><i class="fa fa-circle-o"></i> Announcement List</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>Feedbacks</span>
                        <span class="label label-primary pull-right"></span><i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ URL::to('/feedbackView') }}"><i class="fa fa-circle-o"></i>All Feedbacks</a></li>
                       
                    </ul>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

     
     
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

       @yield('dashboard')
        
        <section class="content">
            @yield('content')
        </section><!-- /.content -->
        
      </div><!-- /.content-wrapper -->
      <div class="control-sidebar-bg"></div>
    <footer class = "main-footer">
        <div class="col-md-12">
             <strong>Copyright &copy;  <a href="http://bard.com.bd">BARD</a>.</strong> All rights reserved.
        </div>
    </footer>


      
   
    </div><!-- ./wrapper -->
<!-- jQuery 2.1.4 -->
<script src="{!! asset('plugins/jQuery/jQuery-2.1.4.min.js') !!}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{!! asset('https://code.jquery.com/ui/1.11.4/jquery-ui.min.js') !!}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.5 -->
<script src="{!! asset('bootstrap/js/bootstrap.min.js') !!}"></script>
<!-- Morris.js charts -->
<script src="{!! asset('https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js') !!}"></script>
<script src="{!! asset('plugins/morris/morris.min.js') !!}"></script>
<!-- Sparkline -->
<script src="{!! asset('plugins/sparkline/jquery.sparkline.min.js') !!}"></script>
<!-- jvectormap -->
<script src="{!! asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') !!}"></script>
<script src="{!! asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') !!}"></script>
<!-- jQuery Knob Chart -->
<script src="{!! asset('plugins/knob/jquery.knob.js') !!}"></script>
<!-- daterangepicker -->
<script src="{!! asset('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js') !!}"></script>
<script src="{!! asset('plugins/daterangepicker/daterangepicker.js') !!}"></script>
<!-- datepicker -->
<script src="{!! asset('plugins/datepicker/bootstrap-datepicker.js') !!}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{!! asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') !!}"></script>
<!-- Slimscroll -->
<script src="{!! asset('plugins/slimScroll/jquery.slimscroll.min.js') !!}"></script>
<!-- FastClick -->
<script src="{!! asset('plugins/fastclick/fastclick.min.js') !!}"></script>
<!-- AdminLTE App -->
<script src="{!! asset('dist/js/app.min.js') !!}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{!! asset('dist/js/pages/dashboard.js') !!}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{!! asset('dist/js/demo.js') !!}"></script>
  </body>
</html>
