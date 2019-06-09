<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>HOD</title>
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
</head>
<?php
	include './src/php/auth.php';
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="https://www.aicte-india.org" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>AICTE</b></span>
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
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
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
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
		<!--Technical Sidebar-->
        <li class="active">
          <a href="index.html">
            <i class="fa fa-home"></i> <span>Home</span>
		  </a>
		</li>
		  
		<!--University Head-->
		<li>
			<a href="add_university_details.html">
				<i class="fa fa-pencil"></i><span>Edit University Details</span>
			</a>  
		</li>
		<li>
			<a href="add_institutes.html">
				<i class="fa fa-institution"></i><span>Add Institutes</span>
			</a>  
		</li>
		<li>
			<a href="add_department.html">
				<i class="fa fa-newspaper-o"></i><span>Add Department</span>
			</a>  
		</li>
		<li>
			<a href="add_hod.html">
				<i class="fa fa-user-plus"></i><span>Create HOD Account</span>
			</a>  
		</li>
		<li>
			<a href="faculty_list.html">
				<i class="fa fa-list"></i><span>Faculty List</span>
			</a>  
		</li>
		  
		<!--HOD-->
		<li>
			<a href="hod_details.html">
				<i class="fa fa-pencil"></i><span>Edit Details</span>
			</a>  
		</li> 
		<li>
			<a href="add_qualifications.html">
				<i class="fa fa-graduation-cap"></i><span>Qualifications</span>
			</a>  
		</li>
		<li>
			<a href="add_faculty.html">
				<i class="fa fa-user-plus"></i><span>Add Faculty</span>
			</a>  
		</li>
		<li>
			<a href="faculty_list.html">
				<i class="fa fa-list"></i><span>Faculty List</span>
			</a>  
		</li>
		<li>
			<a href="add_activities.html">
				<i class="fa fa-puzzle-piece"></i><span>Add Activities</span>
			</a>  
		</li>
		<li>
			<a href="upload_time_table.html">
				<i class="fa fa-calendar-plus-o"></i><span>Upload Time Table</span>
			</a>  
		</li>
		<!-- HOD END-->
		  
		<!--Faculty-->
		<li>
			<a href="faculty_details.html">
				<i class="fa fa-pencil"></i><span>Edit Details</span>
			</a>  
		</li> 
		<li>
			<a href="add_qualifications.html">
				<i class="fa fa-graduation-cap"></i><span>Qualifications</span>
			</a>  
		</li>
		<li>
			<a href="add_activities.html">
				<i class="fa fa-puzzle-piece"></i><span>Add Activities</span>
			</a>  
		</li>
		<!-- Faculty END-->
		<!--Technical END-->
		  
		<!--Diploma Sidebar-->
        <li class="active">
          <a href="index.html">
            <i class="fa fa-home"></i> <span>Home</span>
		  </a>
		</li>
		  
		<!--University Head-->
		<li>
			<a href="add_university_details.html">
				<i class="fa fa-pencil"></i><span>Edit University Details</span>
			</a>  
		</li>
		<li>
			<a href="add_institutes.html">
				<i class="fa fa-institution"></i><span>Add Institutes</span>
			</a>  
		</li>
		<li>
			<a href="add_department.html">
				<i class="fa fa-newspaper-o"></i><span>Add Department</span>
			</a>  
		</li>
		<li>
			<a href="add_hod_diploma.html">
				<i class="fa fa-user-plus"></i><span>Create HOD Account</span>
			</a>  
		</li>
		<li>
			<a href="faculty_list.html">
				<i class="fa fa-list"></i><span>Faculty List</span>
			</a>  
		</li>
		  
		<!--HOD-->
		<li>
			<a href="hod_details_diploma.html">
				<i class="fa fa-pencil"></i><span>Edit Details</span>
			</a>  
		</li> 
		<li>
			<a href="add_qualifications_diploma.html">
				<i class="fa fa-graduation-cap"></i><span>Qualifications</span>
			</a>  
		</li>
		<li>
			<a href="add_faculty_diploma.html">
				<i class="fa fa-user-plus"></i><span>Add Faculty</span>
			</a>  
		</li>
		<li>
			<a href="faculty_list.html">
				<i class="fa fa-list"></i><span>Faculty List</span>
			</a>  
		</li>
		<li>
			<a href="add_activities.html">
				<i class="fa fa-puzzle-piece"></i><span>Add Activities</span>
			</a>  
		</li>
		<li>
			<a href="upload_time_table.html">
				<i class="fa fa-calendar-plus-o"></i><span>Upload Time Table</span>
			</a>  
		</li>
		<!-- HOD END-->
		  
		<!--Faculty-->
		<li>
			<a href="faculty_details_diploma.html">
				<i class="fa fa-pencil"></i><span>Edit Details</span>
			</a>  
		</li> 
		<li>
			<a href="add_qualifications.html">
				<i class="fa fa-graduation-cap"></i><span>Qualifications</span>
			</a>  
		</li>
		<li>
			<a href="add_activities.html">
				<i class="fa fa-puzzle-piece"></i><span>Add Activities</span>
			</a>  
		</li>
		<li>
			<a href="upload_time_table.html">
				<i class="fa fa-calendar-plus-o"></i><span>Upload Time Table</span>
			</a>  
		</li>
		<!-- Faculty END-->
		<!--Diploma END--> 

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="card" style="width: 50vw">
	  	<div class="card-body">
			<div class="card">
				<div class="card-header">
					<i class="fa fa-reorder" style="margin-right: 5px"></i>Edit Details
				</div>
				<div class="card-body">
					<div class="card">
						<div class="card-body">
					<div style="margin-left: 15px">
						<form action="./src/php/main.php" id="hod-form" method="post">
							<div class="form-group row">
								<div class="col-md-5">
									<label style="font-size: 1.20em;margin-top: 5px">University Code</label>
									<input type="text" class="form-control" name="university_code" placeholder="" disabled>
								</div>
								<div class="col-md-6">
									<label style="font-size: 1.20em;margin-top: 5px">Department</label>
									<input type="text" class="form-control" name="department" placeholder="" disabled>
								</div>
							</div>
							
							
						<div class="form-group row">
							<div class="col-md-5">
								<label style="font-size: 1.20em;margin-top: 5px">Faculty Id</label>
								<input type="text" class="form-control" name="facultyID" placeholder="Enter Faculty Id">
							</div>
							<div class="col-md-5">
								<label style="font-size: 1.20em;margin-top: 5px">Faculty Level</label>
								<select class="form-control" name="facultyLevel" id="">
									<option selected disabled value="Select Faculty Level">Select Faculty Level</option>
									<option value="10">Assistant Professor - 10</option>
									<option value="13A1">Associate Professor - 13A1</option>
									<option value="14">Professor - 14</option>
									<option value="14">Principal/Director - 14</option>
								</select>
							</div>
						</div>
							
						<div class="form-group row">
							<div class="col-md-7">
								<label style="font-size: 1.20em;margin-top: 5px">Faculty Name</label>
								<input type="text" name="facultyName" class="form-control" placeholder="Enter Name">
							</div>
							<div class="col-md-5">
								<label style="font-size: 1.20em;margin-top: 5px">Contact </label>
								<input type="text" name="facultyContact" class="form-control" placeholder="Contact No.">
							</div>
						</div>
						
						<div class="form-group row">
							<div class="col-md-7">
								<label style="font-size: 1.20em;margin-top: 5px">Faculty Email</label>
								<input type="text" name="facultyEmail" class="form-control" placeholder="Enter Faculty Email">
							</div>
							<div class="col-md-5">
								<label style="font-size: 1.20em;margin-top: 5px">Date Of Joining</label>
								<input type="text" name="facultyDateOfJoining" class="form-control" placeholder="dd/mm/yyyy">
							</div>
						</div>
							
					
					</div>
						</div>
					</div>

				</div>
				<div class="card-footer">
					<button class="btn btn-sm btn-primary" name="addFaculty-btn" style="margin-right: 5px"><i class="fa fa-check" style="margin-right: 5px"></i>Submit</button>
					<button class="btn btn-sm btn-danger"><i class="fa fa-refresh" style="margin-right: 5px"></i>Reset</button>
				</div>
			</div>  
			</form>
			
			<div class="card">
				<div class="card-header">
					<i class="fa fa-file-excel-o" style="margin-right: 5px"></i>Upload an Excel File
				</div>
				<div class="card-body">
					<div class="card">
						<div class="card-body">
							<input type="file">
						</div>
					</div>
				</div>
				<div class="card-footer">
					<button class="btn btn-sm btn-primary" style="margin-right: 5px"><i class="fa fa-check" style="margin-right: 5px"></i>Submit</button>
					<button class="btn btn-sm btn-danger"><i class="fa fa-refresh" style="margin-right: 5px"></i>Reset</button>
					<button class="btn btn-sm btn-success"><i class="fa fa-download" style="margin-right: 5px"></i>Template</button>
				</div>
			</div>
			
		</div>
	  </div>
    </section>
    <!-- /.content -->
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
