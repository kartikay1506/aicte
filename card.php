<?php
	include './src/php/db.php';
	include './get_user.php';

	if($login == 'institution') {
		echo('<div class="card-body">
				<div class="row" style="margin-bottom: 20px;margin-top: 10px">
					<div class="col-md-4">
						<h5 style="display: inline"><b>Institution ID :</b></h5>
						<p style="display: inline">'.$userid.'</p>
					</div>
					<div class="col-md-3">
						<h5 style="display: inline"><b>Contact :</b></h5>
						<p style="display: inline">'.$contact.'</p>
					</div>
					<div class="col-md-5">
						<h5 style="display: inline"><b>Email :</b></h5>
						<p style="display: inline">'.$email.'</p>
					</div>
				</div>
			</div>');
	}
	else if($login == 'hod') {
		echo('<div class="card-body">
				<div class="row" style="margin-bottom: 20px;margin-top: 10px">
					<div class="col-md-4">
						<h5 style="display: inline"><b>Institution ID :</b></h5>
						<p style="display: inline">'.$userid.'</p>
					</div>
					<div class="col-md-4">
						<h5 style="display: inline"><b>Faculty Id :</b></h5>
						<p style="display: inline">'.$username.'</p>
					</div>
					<div class="col-md-4">
						<h5 style="display: inline"><b>Level :</b></h5>
						<p style="display: inline">'.$level_name.'</p>
					</div>
				</div>
				<div class="row" style="margin-bottom: 20px;margin-top: 10px">
					<div class="col-md-4">
						<h5 style="display: inline"><b>Contact :</b></h5>
						<p style="display: inline">'.$contact.'</p>
					</div>
					<div class="col-md-4">
						<h5 style="display: inline"><b>Email :</b></h5>
						<p style="display: inline">'.$email.'</p>
					</div>
					<div class="col-md-4">
						<h5 style="display: inline"><b>Date of Joining :</b></h5>
						<p style="display: inline">'.$joining.'</p>
					</div>
				</div>
			</div>');
	}
	else if($login == 'faculty') {
		echo('<div class="card-body">
				<div class="row" style="margin-bottom: 20px;margin-top: 10px">
					<div class="col-md-4">
						<h5 style="display: inline"><b>Institution ID :</b></h5>
						<p style="display: inline">'.$userid.'</p>
					</div>
					<div class="col-md-4">
						<h5 style="display: inline"><b>Faculty Id :</b></h5>
						<p style="display: inline">'.$username.'</p>
					</div>
					<div class="col-md-4">
						<h5 style="display: inline"><b>Level :</b></h5>
						<p style="display: inline">'.$level_name.'</p>
					</div>
				</div>
				<div class="row" style="margin-bottom: 20px;margin-top: 10px">
					<div class="col-md-4">
						<h5 style="display: inline"><b>Contact :</b></h5>
						<p style="display: inline">'.$contact.'</p>
					</div>
					<div class="col-md-4">
						<h5 style="display: inline"><b>Email :</b></h5>
						<p style="display: inline">'.$email.'</p>
					</div>
					<div class="col-md-4">
						<h5 style="display: inline"><b>Date of Joining :</b></h5>
						<p style="display: inline">'.$joining.'</p>
					</div>
				</div>
			</div>');
	}
?>