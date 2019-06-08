<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ACR</title>
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

  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="https://www.aicte-india.org" class="logo">
		<img src="/assets/img/AICTE_LOGO.png" style="height: 45px;width: 50px;margin-right: 10px"><b>AICTE</b>
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
          <a href="teaching_process.html">
            <i class="fa fa-home"></i><span>Teaching Process</span>
		  </a>
		</li>
		<li>
			<a href="departmental_activities.html">
				<i class="fa fa-puzzle-piece"></i><span>Departmental Activities</span>
			</a>  
		</li>
		<li>
			<a href="institutional_activities.html">
				<i class="fa fa-puzzle-piece"></i><span>Institutional Activities</span>
			</a>  
		</li>
		<li>
			<a href="acr.html">
				<i class="fa fa-puzzle-piece"></i><span>ACR</span>
			</a>  
		</li>
		<li>
          <a href="society_contribution.html">
            <i class="fa fa-home"></i><span>Contribution To Society</span>
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
          <a href="teaching_process.html">
            <i class="fa fa-home"></i><span>Teaching Process</span>
		  </a>
		</li>
		<li>
			<a href="departmental_activities.html">
				<i class="fa fa-puzzle-piece"></i><span>Departmental Activities</span>
			</a>  
		</li>
		<li>
			<a href="institutional_activities.html">
				<i class="fa fa-puzzle-piece"></i><span>Institutional Activities</span>
			</a>  
		</li>
		<li>
			<a href="acr.html">
				<i class="fa fa-puzzle-piece"></i><span>ACR</span>
			</a>  
		</li>
		<li>
          <a href="society_contribution.html">
            <i class="fa fa-home"></i><span>Contribution To Society</span>
		  </a>
		</li>
		<li>
			<a href="upload_time_table.html">
				<i class="fa fa-calendar-plus-o"></i><span>Upload Time Table</span>
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
          <a href="teaching_process.html">
            <i class="fa fa-home"></i><span>Teaching Process</span>
		  </a>
		</li>
		<li>
			<a href="departmental_activities.html">
				<i class="fa fa-puzzle-piece"></i><span>Departmental Activities</span>
			</a>  
		</li>
		<li>
			<a href="institutional_activities.html">
				<i class="fa fa-puzzle-piece"></i><span>Institutional Activities</span>
			</a>  
		</li>
		<li>
			<a href="acr.html">
				<i class="fa fa-puzzle-piece"></i><span>ACR</span>
			</a>  
		</li>
		<li>
          <a href="society_contribution.html">
            <i class="fa fa-home"></i><span>Contribution To Society</span>
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
          <a href="teaching_process.html">
            <i class="fa fa-home"></i><span>Teaching Process</span>
		  </a>
		</li>
		<li>
			<a href="departmental_activities.html">
				<i class="fa fa-puzzle-piece"></i><span>Departmental Activities</span>
			</a>  
		</li>
		<li>
			<a href="institutional_activities.html">
				<i class="fa fa-puzzle-piece"></i><span>Institutional Activities</span>
			</a>  
		</li>
		<li>
			<a href="acr.html">
				<i class="fa fa-puzzle-piece"></i><span>ACR</span>
			</a>  
		</li>
		<li>
          <a href="society_contribution.html">
            <i class="fa fa-home"></i><span>Contribution To Society</span>
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
		<div class="card">
			<div class="card-body">
				<div class="card">
					<div class="card-header">
						<i class="fa fa-reorder" style="margin-right: 5px"></i>ACR
					</div>
					<form action="./src/php/main.php" enctype="multipart/form-data" name="add_name" id="add_name">
						<table class="table table-bordered" id="dynamic_field">
							<tr>
								<td>
									<input type="text" name="year[]" class="form-control" id="year">
								</td>
								<td>
									<select name="activity[]" id="activity">
										<option value="activity1">Activity 1</option>
										<option value="activity2">Activity 2</option>
									</select>
								</td>
								<td>
									<select name="credit[]" id="credit">
										<option value="credit1">Credit 1</option>
										<option value="credit2">Credit 2</option>
									</select>
								</td>
								<td>
									<button type="button" name="add" id="add">Add More</button>
								</td>
							</tr>
						</table>
						<button type="button" name="submit-btn" id="submit-btn">Submit</button>
					</form>
					<script>
						$(document).ready(() => {
							var i = 1;
							$("#add").click(() => {
								i++;
								// $("#dynamic_field").append('<tr id="row'+i+'"><td><input type="text" name="name[]" class="form-control" id="name"></td><td><button class="btn btn_remove btn-danger" type="button" name="remove" id="'+i+'">Remove</button></td></tr>')
								$("#dynamic_field").append('<tr id="row'+i+'"><td><input type="text" name="year[]" class="form-control" id="year"></td><td><select name="activity[]" id="activity"><option value="activity1">Activity 1</option><option value="activity2">Activity 2</option></select></td><td><select name="credit[]" id="credit"><option value="credit1">Credit 1</option><option value="credit2">Credit 2</option></select></td><td><button class="btn btn_remove btn-danger" type="button" name="remove" id="'+i+'">X</button></td></tr>')
							})
							
							$(document).on('click', '.btn_remove', function(){
								var button_id = $(this).attr("id"); 
								$('#row'+button_id+'').remove();
							});

							$(document).on('click', '.btn_remove', function(){
								var button_id = $(this).attr("id"); 
								$('#row'+button_id+'').remove();
							});
							
							$('#submit-btn').click(function(){		
								$.ajax({
									url:"./php/acr_data_add.php",
									method:"POST",
									data:$('#add_name').serialize(),
									success:function(data)
									{
										alert(data);
										$('#add_name')[0].reset();
									}
								});
							});
						})
					</script>



					<form id="add-activities" method="post" enctype="multipart/form-data">
						<div class="card-body">
							<table class="table table-bordered">
										<thead>
											<tr>
												<th style="width: 10vw">Year</th>
												<th style="width: 20vw">Activity</th>
												<th style="width: 8vw">Credit Points</th>
												<th>Proof</th>
												<th>Settings</th>
											</tr>
										</thead>
										<tbody>
											<tr id="">
												<td>
													<input type="text" class="form-control" placeholder="Year" required>
												</td>
												<td>
													<select class="form-control" required>
														<option selected disabled></option>
														<option value=""></option>
														<option value=""></option>
														<option value=""></option>
														<option value=""></option>
													</select>
												</td>
												<td>
													<!--Make Disabled for faculty but enabled for hod -->
													<select class="form-control">
														<option selected disabled></option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
														<option value="6">6</option>
														<option value="7">7</option>
														<option value="8">8</option>
														<option value="9">9</option>
														<option value="10">10</option>
													</select>
												</td>
												<td>
													<input type="file" style="margin-top: 5px" required>
												</td>
												<td>
													<button type="button" class="btn btn-sm btn-danger" style="border-radius: 50%;"><i class="fa fa-remove"></i></button>
												</td>
											</tr>
										</tbody>
									</table>
							<div class="row">
								<div class="col-md-3">
									<button type="button" class="btn btn-block btn-primary"><i class="fa fa-plus" style="margin-right: 5px"></i> Add More</button>
								</div>
								<div class="col-md-3">
									<button type="submit" class="btn btn-block btn-success"><i class="fa fa-check" style="margin-right: 5px"></i>Submit</button>
								</div>
							</div>
						  </div>
					</form>
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
