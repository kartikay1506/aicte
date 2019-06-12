<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Feedback</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<?php
include './src/php/auth.php';
?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php
	include './src/php/auth.php';
?>
  <header class="main-header">
    <!-- Logo -->
    <a href="https://www.aicte-india.org" class="logo">
		<img src="/AICTE/assets/img/AICTE_LOGO.png" style="height: 45px;width: 50px;margin-right: 10px"><b>AICTE</b>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Username</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Username
                  <small>Details</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
               
                <!-- Some Interesting Things Can be Added-->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
		  <li class="active">
			  <a href="student_feedback.php">
				<i class="fa fa-user"></i><span>Student Feedback</span>
			  </a>
		</li>
		<li class="active">
			  <a href="feedback.php">
				<i class="fa fa-user"></i><span>Student Feedback</span>
			  </a>
		</li>
		<li>
          <a href="university_feedback.php">
            <i class="fa fa-institution"></i><span>Institution Feedback</span>
		  </a>
		</li>
		  <li>
          <a href="aicte_feedback.php">
            <i class="fa fa-university"></i><span>AICTE Feedback</span>
		  </a>
		</li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <form action="./src/php/main.php" method="POST">
    <!-- Main content -->
    <section class="content">
		 <!-- Content Wrapper. Contains page content -->
    <section class="content">
		<div class="card">
			<div class="card-header">
				<div class="row" style="margin-bottom: 20px;margin-top: 10px">
					<div class="col-md-3">
						<h5 style="display: inline">Course :</h5>
						<p style="display: inline">Course Name</p>
					</div>
					<div class="col-md-6">
						<h5 style="display: inline">Branch :</h5>
						<p style="display: inline">Branch Name</p>
					</div>
					<div class="col-md-3">
						<h5 style="display: inline">Batch :</h5>
						<p style="display: inline">Batch</p>
					</div>
				</div>
				<div class="row" style="margin-bottom: 20px;margin-top: 10px">
					<div class="col-md-3">
						<h5 style="display: inline">Semester :</h5>
						<p style="display: inline">Semester</p>
					</div>
					<div class="col-md-6">
						<h5 style="display: inline">Section :</h5>
						<p style="display: inline">Section</p>
					</div>
				</div>
			</div>
			<div class="card-body">
				<ul class="nav nav-tabs" role="tablist">
<li class="nav-item active">
<a class="nav-link" data-toggle="tab" href="#faculty1" role="tab" aria-controls="faculty1" aria-selected="false">Faculty1</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#faculty2" role="tab" aria-controls="faculty2" aria-selected="false">Faculty2</a>
</li>
<li class="nav-item">
<a class="nav-link " data-toggle="tab" href="#faculty3" role="tab" aria-controls="faculty3" aria-selected="false">Faculty3</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#faculty4" role="tab" aria-controls="faculty4" aria-selected="false">Faculty4</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#faculty5" role="tab" aria-controls="faculty5" aria-selected="false">Faculty5</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#faculty6" role="tab" aria-controls="faculty6" aria-selected="false">Faculty6</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#faculty7" role="tab" aria-controls="faculty7" aria-selected="false">Faculty7</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#faculty8" role="tab" aria-controls="faculty8" aria-selected="false">Faculty8</a>
</li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="faculty1" role="tabpanel">
					<div class="row">
					<div class="col-sm-8">
						<div class="card">
							<div class="card-body">
								<table class="table table-responsive-sm table-bordered">
									<thead>
										<tr>
											<td style="width: 80%">Qualities</td>
											<td style="width: 13%">Rating</td>
										</tr>
									</thead>
									<tbody>
										<tr>
						<td>Has the Teacher covered entire Syllabus as prescribed by University/ College/ Board?</td>
						<td>
							<select class="form-control" name="score_1" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Has the Teacher covered relevant topics beyond syllabus </td>
						<td>
							<select class="form-control" name="score_2" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Effectiveness of Teacher in terms of :
							(a) Technical content/course content 	
							(b) Communication skills 	
							(c) Use of teaching aids
							</td>
						<td>
							<select class="form-control" name="score_3" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Pace on which contents were covered </td>
						<td>
							<select class="form-control" name="score_4" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Motivation and inspiration for students to learn </td>
						<td>
							<select class="form-control" name="score_5" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Support for the development of Students’ skill
							(a) Practical demonstration 
							(b) Hands on training </td>
						<td>
							
							<select class="form-control" name="score_6" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Clarity of expectations of students </td>
						<td>
							<select class="form-control" name="score_7" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Feedback provided on Students’ progress </td>
						<td>
							<select class="form-control" name="score_8" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Willingness to offer help and advice to students. </td>
						<td>
							<select class="form-control" name="score_9" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card" style="height: 95%">
								<div class="card-header">Comments</div>
								<div class="card-body">
									<div class="form-group">
										<textarea class="form-control" rows="10" name="comment"></textarea>
									</div>
									<select class="form-control" name="comment_1" id="">
											<option value="1">Comment1</option>
											<option value="2">Comment2</option>
											<option value="3">Comment3</option>
											<option value="4">Comment4</option>
											<option value="5">Comment5</option>
									</select>
								</div>
						</div>
					</div>
				</div>
</div>
<div class="tab-pane" id="faculty2" role="tabpanel">
					<div class="row">
					<div class="col-sm-8">
						<div class="card">
							<div class="card-body">
								<table class="table table-responsive-sm table-bordered">
									<thead>
										<tr>
											<td style="width: 80%">Qualities</td>
											<td style="width: 13%">Rating</td>
										</tr>
									</thead>
									<tbody>
										<tr>
						<td>Has the Teacher covered entire Syllabus as prescribed by University/ College/ Board?</td>
						<td>
							<select class="form-control" name="score_10" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Has the Teacher covered relevant topics beyond syllabus </td>
						<td>
							<select class="form-control" name="score_11" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Effectiveness of Teacher in terms of :
							(a) Technical content/course content 	
							(b) Communication skills 	
							(c) Use of teaching aids
							</td>
						<td>
							<select class="form-control" name="score_12" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Pace on which contents were covered </td>
						<td>
							<select class="form-control" name="score_13" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Motivation and inspiration for students to learn </td>
						<td>
							<select class="form-control" name="score_14" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Support for the development of Students’ skill
							(a) Practical demonstration 
							(b) Hands on training </td>
						<td>
							<select class="form-control" name="score_15" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Clarity of expectations of students </td>
						<td>
							<select class="form-control" name="score_16" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Feedback provided on Students’ progress </td>
						<td>
							<select class="form-control" name="score_17" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Willingness to offer help and advice to students. </td>
						<td>
							<select class="form-control" name="score_18" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card" style="height: 95%">
								<div class="card-header">Comments</div>
								<div class="card-body">
									<div class="form-group">
										<textarea class="form-control" rows="10" name="comment"></textarea>
									</div>
									<select class="form-control" name="comment_2" id="">
											<option value="1">Comment1</option>
											<option value="2">Comment2</option>
											<option value="3">Comment3</option>
											<option value="4">Comment4</option>
											<option value="5">Comment5</option>
									</select>
								</div>
						</div>
					</div>
				</div>
</div>
<div class="tab-pane" id="faculty3" role="tabpanel">
	<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-sm-8">
						<div class="card">
							<div class="card-body">
								<table class="table table-responsive-sm table-bordered">
									<thead>
										<tr>
											<td style="width: 80%">Qualities</td>
											<td style="width: 13%">Rating</td>
										</tr>
									</thead>
									<tbody>
										<tr>
						<td>Has the Teacher covered entire Syllabus as prescribed by University/ College/ Board?</td>
						<td>
							<select class="form-control" name="score_19" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Has the Teacher covered relevant topics beyond syllabus </td>
						<td>
							<select class="form-control" name="score_20" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Effectiveness of Teacher in terms of :
							(a) Technical content/course content 	
							(b) Communication skills 	
							(c) Use of teaching aids
							</td>
						<td>
							<select class="form-control" name="score_21" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Pace on which contents were covered </td>
						<td>
							<select class="form-control" name="score_22" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Motivation and inspiration for students to learn </td>
						<td>
							<select class="form-control" name="score_23" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Support for the development of Students’ skill
							(a) Practical demonstration 
							(b) Hands on training </td>
						<td>
							<select class="form-control" name="score_24" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Clarity of expectations of students </td>
						<td>
							<select class="form-control" name="score_25" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Feedback provided on Students’ progress </td>
						<td>
							<select class="form-control" name="score_26" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Willingness to offer help and advice to students. </td>
						<td>
							<select class="form-control" name="score_27" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card" style="height: 95%">
								<div class="card-header">Comments</div>
								<div class="card-body">
									<div class="form-group">
										<textarea class="form-control" rows="10" name="comment"></textarea>
									</div>
									<select class="form-control" name="comment_3" id="">
											<option value="1">Comment1</option>
											<option value="2">Comment2</option>
											<option value="3">Comment3</option>
											<option value="4">Comment4</option>
											<option value="5">Comment5</option>
									</select>
								</div>
						</div>
					</div>
				</div>
		</div>
	</div>	
</div>
<div class="tab-pane" id="faculty4" role="tabpanel">
					<div class="row">
					<div class="col-sm-8">
						<div class="card">
							<div class="card-body">
								<table class="table table-responsive-sm table-bordered">
									<thead>
										<tr>
											<td style="width: 80%">Qualities</td>
											<td style="width: 13%">Rating</td>
										</tr>
									</thead>
									<tbody>
										<tr>
						<td>Has the Teacher covered entire Syllabus as prescribed by University/ College/ Board?</td>
						<td>
							<select class="form-control" name="score_28" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Has the Teacher covered relevant topics beyond syllabus </td>
						<td>
							<select class="form-control" name="score_29" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Effectiveness of Teacher in terms of :
							(a) Technical content/course content 	
							(b) Communication skills 	
							(c) Use of teaching aids
							</td>
						<td>
							<select class="form-control" name="score_30" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Pace on which contents were covered </td>
						<td>
							<select class="form-control" name="score_31" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Motivation and inspiration for students to learn </td>
						<td>
							<select class="form-control" name="score_32" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Support for the development of Students’ skill
							(a) Practical demonstration 
							(b) Hands on training </td>
						<td>
							<select class="form-control" name="score_33" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Clarity of expectations of students </td>
						<td>
							<select class="form-control" name="score_34" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Feedback provided on Students’ progress </td>
						<td>
							<select class="form-control" name="score_35" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Willingness to offer help and advice to students. </td>
						<td>
							<select class="form-control" name="score_36" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card" style="height: 95%">
								<div class="card-header">Comments</div>
								<div class="card-body">
									<div class="form-group">
										<textarea class="form-control" rows="10" name="comment"></textarea>
									</div>
									<select class="form-control" name="comment_4" id="">
											<option value="1">Comment1</option>
											<option value="2">Comment2</option>
											<option value="3">Comment3</option>
											<option value="4">Comment4</option>
											<option value="5">Comment5</option>
									</select>
								</div>
						</div>
					</div>
				</div>
</div>
<div class="tab-pane" id="faculty5" role="tabpanel">
					<div class="row">
					<div class="col-sm-8">
						<div class="card">
							<div class="card-body">
								<table class="table table-responsive-sm table-bordered">
									<thead>
										<tr>
											<td style="width: 80%">Qualities</td>
											<td style="width: 13%">Rating</td>
										</tr>
									</thead>
									<tbody>
										<tr>
						<td>Has the Teacher covered entire Syllabus as prescribed by University/ College/ Board?</td>
						<td>
							<select class="form-control" name="score_37" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Has the Teacher covered relevant topics beyond syllabus </td>
						<td>
							<select class="form-control" name="score_38" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Effectiveness of Teacher in terms of :
							(a) Technical content/course content 	
							(b) Communication skills 	
							(c) Use of teaching aids
							</td>
						<td>
							<select class="form-control" name="score_39" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Pace on which contents were covered </td>
						<td>
							<select class="form-control" name="score_40" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Motivation and inspiration for students to learn </td>
						<td>
							<select class="form-control" name="score_41" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Support for the development of Students’ skill
							(a) Practical demonstration 
							(b) Hands on training </td>
						<td>
							<select class="form-control" name="score_42" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Clarity of expectations of students </td>
						<td>
							<select class="form-control" name="score_43" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Feedback provided on Students’ progress </td>
						<td>
							<select class="form-control" name="score_44" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Willingness to offer help and advice to students. </td>
						<td>
							<select class="form-control" name="score_45" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card" style="height: 95%">
								<div class="card-header">Comments</div>
								<div class="card-body">
									<div class="form-group">
										<textarea class="form-control" rows="10" name="comment"></textarea>
									</div>
									<select class="form-control" name="comment_5" id="">
											<option value="1">Comment1</option>
											<option value="2">Comment2</option>
											<option value="3">Comment3</option>
											<option value="4">Comment4</option>
											<option value="5">Comment5</option>
									</select>
								</div>
						</div>
					</div>
				</div>
</div>
<div class="tab-pane" id="faculty6" role="tabpanel">
				<div class="row">
					<div class="col-sm-8">
						<div class="card">
							<div class="card-body">
								<table class="table table-responsive-sm table-bordered">
									<thead>
										<tr>
											<td style="width: 80%">Qualities</td>
											<td style="width: 13%">Rating</td>
										</tr>
									</thead>
									<tbody>
										<tr>
						<td>Has the Teacher covered entire Syllabus as prescribed by University/ College/ Board?</td>
						<td>
							<select class="form-control" name="score_46" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Has the Teacher covered relevant topics beyond syllabus </td>
						<td>
							<select class="form-control" name="score_47" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Effectiveness of Teacher in terms of :
							(a) Technical content/course content 	
							(b) Communication skills 	
							(c) Use of teaching aids
							</td>
						<td>
							<select class="form-control" name="score_48" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Pace on which contents were covered </td>
						<td>
							<select class="form-control" name="score_49" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Motivation and inspiration for students to learn </td>
						<td>
							<select class="form-control" name="score_50" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Support for the development of Students’ skill
							(a) Practical demonstration 
							(b) Hands on training </td>
						<td>
							<select class="form-control" name="score_51" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Clarity of expectations of students </td>
						<td>
							<select class="form-control" name="score_52" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Feedback provided on Students’ progress </td>
						<td>
							<select class="form-control" name="score_53" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Willingness to offer help and advice to students. </td>
						<td>
							<select class="form-control" name="score_54" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card" style="height: 95%">
								<div class="card-header">Comments</div>
								<div class="card-body">
									<div class="form-group">
										<textarea class="form-control" rows="10" name="comment"></textarea>
									</div>
									<select class="form-control" name="comment_6" id="">
											<option value="1">Comment1</option>
											<option value="2">Comment2</option>
											<option value="3">Comment3</option>
											<option value="4">Comment4</option>
											<option value="5">Comment5</option>
									</select>
								</div>
						</div>
					</div>
				</div>	
</div>
<div class="tab-pane" id="faculty7" role="tabpanel">
					<div class="row">
					<div class="col-sm-8">
						<div class="card">
							<div class="card-body">
								<table class="table table-responsive-sm table-bordered">
									<thead>
										<tr>
											<td style="width: 80%">Qualities</td>
											<td style="width: 13%">Rating</td>
										</tr>
									</thead>
									<tbody>
										<tr>
						<td>Has the Teacher covered entire Syllabus as prescribed by University/ College/ Board?</td>
						<td>
							<select class="form-control" name="score_55" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Has the Teacher covered relevant topics beyond syllabus </td>
						<td>
							<select class="form-control" name="score_56" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Effectiveness of Teacher in terms of :
							(a) Technical content/course content 	
							(b) Communication skills 	
							(c) Use of teaching aids
							</td>
						<td>
							<select class="form-control" name="score_57" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Pace on which contents were covered </td>
						<td>
							<select class="form-control" name="score_58" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Motivation and inspiration for students to learn </td>
						<td>
							<select class="form-control" name="score_59" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Support for the development of Students’ skill
							(a) Practical demonstration 
							(b) Hands on training </td>
						<td>
							<select class="form-control" name="score_60" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Clarity of expectations of students </td>
						<td>
							<select class="form-control" name="score_61" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Feedback provided on Students’ progress </td>
						<td>
							<select class="form-control" name="score_62" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Willingness to offer help and advice to students. </td>
						<td>
							<select class="form-control" name="score_63" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card" style="height: 95%">
								<div class="card-header">Comments</div>
								<div class="card-body">
									<div class="form-group">
										<textarea class="form-control" rows="10" name="comment"></textarea>
									</div>
									<select class="form-control" name="comment_7" id="">
											<option value="1">Comment1</option>
											<option value="2">Comment2</option>
											<option value="3">Comment3</option>
											<option value="4">Comment4</option>
											<option value="5">Comment5</option>
									</select>
								</div>
						</div>
					</div>
				</div>
</div>
<div class="tab-pane" id="faculty8" role="tabpanel">
					<div class="row">
					<div class="col-sm-8">
						<div class="card">
							<div class="card-body">
								<table class="table table-responsive-sm table-bordered">
									<thead>
										<tr>
											<td style="width: 80%">Qualities</td>
											<td style="width: 13%">Rating</td>
										</tr>
									</thead>
									<tbody>
										<tr>
						<td>Has the Teacher covered entire Syllabus as prescribed by University/ College/ Board?</td>
						<td>
							<select class="form-control" name="score_64" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Has the Teacher covered relevant topics beyond syllabus </td>
						<td>
							<select class="form-control" name="score_65" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Effectiveness of Teacher in terms of :
							(a) Technical content/course content 	
							(b) Communication skills 	
							(c) Use of teaching aids
							</td>
						<td>
							<select class="form-control" name="score_66" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Pace on which contents were covered </td>
						<td>
							<select class="form-control" name="score_67" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Motivation and inspiration for students to learn </td>
						<td>
							<select class="form-control" name="score_68" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Support for the development of Students’ skill
							(a) Practical demonstration 
							(b) Hands on training </td>
						<td>
							<select class="form-control" name="score_69" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Clarity of expectations of students </td>
						<td>
							<select class="form-control" name="score_70" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Feedback provided on Students’ progress </td>
						<td>
							<select class="form-control" name="score_71" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Willingness to offer help and advice to students. </td>
						<td>
							<select class="form-control" name="score_72" id="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</td>
					</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card" style="height: 95%">
								<div class="card-header">Comments</div>
								<div class="card-body">
									<div class="form-group">
										<textarea class="form-control" rows="10" name="comment"></textarea>
									</div>
									<select class="form-control" name="comment_8" id="">
											<option value="1">Comment1</option>
											<option value="2">Comment2</option>
											<option value="3">Comment3</option>
											<option value="4">Comment4</option>
											<option value="5">Comment5</option>
									</select>
								</div>
						</div>
						<button type="submit" name="studentFeedback_submit-btn" style="margin-top: 10px;" class="btn btn-success">Submit</button>

					</div>

				</div>

			</div>

			</div>
		</div>
    </section>
    <!-- /.content -->
	</section>
	
	<!-- /.content -->
	</form>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2019 <a href="https://www.aicte-india.org">AICTE</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!--Settings Menu-->
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>