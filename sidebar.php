<?php
	$login = $_SESSION['usertype'];
?>
<!--><script href="./src/js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
		  
		<!--Diploma Sidebar-->
		<?php
			if($login == 'institution') {

		?>
        <li class="active">
          <a href="index.php">
            <i class="fa fa-home"></i> <span>Home</span>
		  </a>
		</li>
		  
		<!--University Head-->
		<li>
			<a href="add_university_details.php">
				<i class="fa fa-pencil"></i><span>Edit Institution Details</span>
			</a>  
		</li>
		<li>
			<a href="add_department.php">
				<i class="fa fa-newspaper-o"></i><span>Add Department</span>
			</a>  
		</li>
		<li>
			<a href="add_hod_diploma.php">
				<i class="fa fa-user-plus"></i><span>Create HOD Account</span>
			</a>  
		</li>
		<li>
			<a href="faculty_list.php">
				<i class="fa fa-list"></i><span>Faculty List</span>
			</a>  
		</li>
		<?php }
			else if($login == 'hod') {  
		?> 
		<!--HOD-->
		 <li class="active">
          <a href="index.php">
            <i class="fa fa-home"></i> <span>Home</span>
		  </a>
		</li>
		<li>
			<a href="hod_details.php">
				<i class="fa fa-pencil"></i><span>Edit Details</span>
			</a>  
		</li> 
		<li>
			<a href="add_qualifications.php?page=add_qualifications">
				<i class="fa fa-graduation-cap"></i><span>Qualifications</span>
			</a>  
		</li>
		<li>
			<a href="add_faculty_diploma.php">
				<i class="fa fa-user-plus"></i><span>Add Faculty</span>
			</a>  
		</li>
		<li>
			<a href="faculty_list.php">
				<i class="fa fa-list"></i><span>Faculty List</span>
			</a>  
		</li>
		<li>
          <a href="teaching_process.php">
            <i class="fa fa-home"></i><span>Teaching Process</span>
		  </a>
		</li>
		<li>
			<a href="departmental_activities.php">
				<i class="fa fa-puzzle-piece"></i><span>Departmental Activities</span>
			</a>  
		</li>
		<li>
			<a href="institutional_activities.php">
				<i class="fa fa-puzzle-piece"></i><span>Institutional Activities</span>
			</a>  
		</li>
		<li>
			<a href="acr.php">
				<i class="fa fa-puzzle-piece"></i><span>ACR</span>
			</a>  
		</li>
		<li>
          <a href="society_contribution.php">
            <i class="fa fa-home"></i><span>Contribution To Society</span>
		  </a>
		</li>
		<li>
			<a href="upload_time_table.php">
				<i class="fa fa-calendar-plus-o"></i><span>Upload Time Table</span>
			</a>  
		</li>
		<?php }
			else if($login == 'faculty') {  
		?>
		<!-- HOD END-->
		  
		<!--Faculty-->
		 <li class="active">
          <a href="index.php">
            <i class="fa fa-home"></i> <span>Home</span>
		  </a>
		</li>
		<li>
			<a href="faculty_details_diploma.php">
				<i class="fa fa-pencil"></i><span>Edit Details</span>
			</a>  
		</li> 
		<li>
			<a href="add_qualifications.php?page=add_qualifications">
				<i class="fa fa-graduation-cap"></i><span>Qualifications</span>
			</a>  
		</li>
		<li>
          <a href="teaching_process.php">
            <i class="fa fa-home"></i><span>Teaching Process</span>
		  </a>
		</li>
		<li>
			<a href="departmental_activities.php">
				<i class="fa fa-puzzle-piece"></i><span>Departmental Activities</span>
			</a>  
		</li>
		<li>
			<a href="institutional_activities.php">
				<i class="fa fa-puzzle-piece"></i><span>Institutional Activities</span>
			</a>  
		</li>
		<li>
			<a href="acr.php">
				<i class="fa fa-puzzle-piece"></i><span>ACR</span>
			</a>  
		</li>
		<li>
          <a href="society_contribution.php">
            <i class="fa fa-home"></i><span>Contribution To Society</span>
		  </a>
		</li>
		<li>
			<a href="upload_time_table.php">
				<i class="fa fa-calendar-plus-o"></i><span>Upload Time Table</span>
			</a>  
		</li>
		<?php } ?>
		<!-- Faculty END-->
		<!--Diploma END--> 

      </ul>