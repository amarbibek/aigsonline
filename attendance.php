<?php
include 'core/init.php';
include 'includes/overall/header.php';?>

<style type="text/css">
th{
	padding:10px;
}

</style>

</br>
</br>
<h1 align="center" style="font-family:verdana;"> Department of Compuer Applications</h1>
<h1 align="center" style="font-family:verdana;">Students Attendance</h1>


<?php

$months = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

$i=-1;
if (isset($_POST['submit']) ){
    $reg_no=$_POST['reg_no'];
	$semester=$_POST['semester'];
	/*
	$reg_no=$_POST['reg_no'];
	
	$query = mysql_query("SELECT * FROM `six_attendance` WHERE username ='$reg_no'") or die("couldnot search data");
	$count = mysql_num_rows($query);
				*/
	
	if($semester == 1){
		$query = mysql_query("SELECT * 
			FROM
			users 
			INNER JOIN first_attendance 
			ON users.username = first_attendance.username
			WHERE first_attendance.username='$reg_no'");
	$count = mysql_num_rows($query);
	
	$query1 = mysql_query("SELECT * FROM `users` WHERE username ='$reg_no'") or die("couldnot search data");
	$count1 = mysql_num_rows($query1);
	
	
	if($count == 0 && $count1 == 0) {
		
		
	echo '<h1 style="color:red;">'; 
		echo "There was no search results!";
	echo '</h1>';
	}
	else {
	
	while($row = mysql_fetch_array($query1)) {
			$username = $row['username'];
			$first_name= $row['first_name'];
			$last_name = $row['last_name'];
			$semester = $row['semester'];
		
    }
	echo '<table style="background-color:#f39f41"; align="center">
	<th style="padding:10px;">Registration Number</th>
	      <th style="padding:10px;">First Name</th>
	      <th style="padding:10px;">Last Name</th>
	      <th style="padding:10px;">Semester</th>';
	echo '<tr>';
	echo '<td style="padding:10px;">';
	echo $username;
	echo '</td>';
	echo '<td style="padding:10px;">';
	echo $first_name;
	echo '</td>';
	echo '<td style="padding:10px;">';
	echo $last_name;
	echo '</td>';
	echo '<td style="padding:10px;">';
	echo $semester;
	echo '</td>';
	echo '</tr>';
	echo '</table>';
	echo '</br>';
	
	
	//$output = mysql_query("SELECT * FROM `members` WHERE firstname LIKE '%$searchq%'");
	
		while($row = mysql_fetch_array($query)) {
			
			for($i=$i+1; $i<=$count;){
			echo "<h3>$months[$i]</h3>";
			break;
			}
			
			$additional_total = $row['additional_total'];
			$additional_attended= $row['additional_attended'];
			$additional_percentage = $row['additional_percentage'];
			$english_total = $row['english_total'];
			$english_attended= $row['english_attended'];
			$english_percentage = $row['english_percentage'];
			$c_total = $row['c_total'];
			$c_attended= $row['c_attended'];
			$c_percentage = $row['c_percentage'];
			$de_total = $row['de_total'];
			$de_attended= $row['de_attended'];
			$de_percentage = $row['de_percentage'];
			$dm_total = $row['dm_total'];
			$dm_attended= $row['dm_attended'];
			$dm_percentage = $row['dm_percentage'];
			$cf_total = $row['cf_total'];
			$cf_attended= $row['cf_attended'];
			$cf_percentage = $row['cf_percentage'];
			$total_percentage = $row['total_percentage'];
   echo '<table style="table-layout: fixed; width: 100%;"> 
	<th colspan="3" style="text-align:center";>Additional Language </th>
	<th colspan="3" style="text-align:center";>English</th>
	<th colspan="3" style="text-align:center";>C Language</th>
	<th colspan="3" style="text-align:center";>Digital Electronics</th>
    <th colspan="3" style="text-align:center";>Discrete Mathematics</th>
	<th colspan="3" style="text-align:center";>Compuer Fundamental</th>
	<th colspan="3"  rowspan="2" style="text-align:center";>Total Percentage</th>';
	echo '<tr>';
	echo '<td>';
	echo "Total";
	echo '</td>';
	echo '<td>';
	echo '<h6> Attended</h6>';
	echo '</td>';
	echo '<td>';
	echo "%";
	echo '</td>';
	echo '<td>';
	echo "Total";
	echo '</td>';
	echo '<td>';
echo '<h6> Attended</h6>';
	echo '</td>';
	echo '<td>';
	echo "%";
	echo '</td>';
	echo '<td>';
	echo "Total";
	echo '</td>';
	echo '<td>';
echo '<h6> Attended</h6>';
	echo '</td>';
	echo '<td>';
	echo "%";
	echo '</td>';
	echo '<td>';
	echo "Total";
	echo '</td>';
	echo '<td>';
	echo '<h6> Attended</h6>';
	echo '</td>';
	echo '<td>';
	echo "%";
	echo '</td>';
	echo '<td>';
	echo "Total";
	echo '</td>';
	echo '<td>';
	echo '<h6> Attended</h6>';
	echo '</td>';
	echo '<td>';
	echo "%";
	echo '</td>';
	echo '<td>';
	echo "Total";
	echo '</td>';
	echo '<td>';
	echo '<h6> Attended</h6>';
	echo '</td>';
	echo '<td>';
	echo "%";
	echo '</td>';
	echo '</tr>';
	echo '<tr>';
	echo  '<td >';
    echo $additional_total;
	echo '</td>';
	echo  '<td>';
    echo $additional_attended;
	echo '</td>';
	echo  '<td>';
    echo $additional_percentage;
	echo '</td>';
	echo '<td>';
    echo $english_total;
	echo '</td>';
	echo  '<td>';
    echo $english_attended;
	echo '</td>';
	echo  '<td>';
    echo $english_percentage;
	echo '</td>';
	echo '<td>';
    echo $c_total;
	echo '</td>';
	echo  '<td>';
    echo $c_attended;
	echo '</td>';
	echo  '<td>';
    echo $c_percentage;
	echo '</td>';
	echo '<td>';
    echo $de_total;
	echo '</td>';
	echo  '<td>';
    echo $de_attended;
	echo '</td>';
	echo  '<td>';
    echo $de_percentage;
	echo '</td>';
	echo '<td>';
	echo $dm_total;
	echo '</td>';
	echo  '<td>';
    echo $dm_attended;
	echo '</td>';
	echo  '<td>';
    echo $dm_percentage;
	echo '</td>';
	echo '<td>';
	echo $cf_total;
	echo '</td>';
	echo  '<td>';
    echo $cf_attended;
	echo '</td>';
	echo  '<td>';
    echo $cf_percentage;
	echo '</td>';
	echo '<td colspan="3">';
    echo $total_percentage;
	echo '</td>';
	echo '</tr>';	
	echo '</br>';
	echo '</table>';
	
    }	
	}
	}
	else
	if($semester == 2){
		$query = mysql_query("SELECT * 
			FROM
			users 
			INNER JOIN second_attendance 
			ON users.username = second_attendance.username
			WHERE second_attendance.username='$reg_no'");
	$count = mysql_num_rows($query);
	
	$query1 = mysql_query("SELECT * FROM `users` WHERE username ='$reg_no'") or die("couldnot search data");
	$count1 = mysql_num_rows($query1);
	
	
	if($count == 0 && $count1 == 0) {
		
		
	echo '<h1 style="color:red;">'; 
		echo "There was no search results!";
	echo '</h1>';
	}
	else {
	
	while($row = mysql_fetch_array($query1)) {
			$username = $row['username'];
			$first_name= $row['first_name'];
			$last_name = $row['last_name'];
			$semester = $row['semester'];
	
    }
	echo '<table style="background-color:#f39f41"; align="center">
	<th style="padding:10px;">Registration Number</th>
	      <th style="padding:10px;">First Name</th>
	      <th style="padding:10px;">Last Name</th>
	      <th style="padding:10px;">Semester</th>
		  ';
	echo '<tr>';
	echo '<td style="padding:10px;">';
	echo $username;
	echo '</td>';
	echo '<td style="padding:10px;">';
	echo $first_name;
	echo '</td>';
	echo '<td style="padding:10px;">';
	echo $last_name;
	echo '</td>';
	echo '<td style="padding:10px;">';
	echo $semester;
	echo '</td>';
	
	echo '</tr>';
		echo '</table>';
	echo '</br>';
	
	
	//$output = mysql_query("SELECT * FROM `members` WHERE firstname LIKE '%$searchq%'");
	
	
		
	    
		while($row = mysql_fetch_array($query)) {
			
			for($i=$i+1; $i<=$count;){
			echo "<h3>$months[$i]</h3>";
			break;
			}
			echo '<table align="center">';
			 $additional_total = $row['additional_total'];
			$additional_attended= $row['additional_attended'];
			$additional_percentage = $row['additional_percentage'];
			$english_total = $row['english_total'];
			$english_attended= $row['english_attended'];
			$english_percentage = $row['english_percentage'];
			$ds_total = $row['ds_total'];
			$ds_attended= $row['ds_attended'];
			$ds_percentage = $row['ds_percentage'];
			$dbms_total = $row['dbms_total'];
			$dbms_attended= $row['dbms_attended'];
			$dbms_percentage = $row['dbms_percentage'];
			$nsm_total = $row['nsm_total'];
			$nsm_attended= $row['nsm_attended'];
			$nsm_percentage = $row['nsm_percentage'];
			$total_percentage = $row['total_percentage'];
    echo' 
	<th colspan="3" style="text-align:center";>Additional Language </th>
	<th colspan="3" style="text-align:center";>English</th>
	<th colspan="3" style="text-align:center";>Data Structure</th>
	<th colspan="3" style="text-align:center";>Database Management System</th>
	<th colspan="3" style="text-align:center";>Numerical and Statistical Methods</th>
	<th colspan="3"  rowspan="2" style="text-align:center";>Total Percentage</th>
	';
	echo '<tr>';
	echo '<td>';
	echo "Total";
	echo '</td>';
	echo '<td>';
	echo "Attended";
	echo '</td>';
	echo '<td>';
	echo "Percentage %";
	echo '</td>';
	echo '<td>';
	echo "Total";
	echo '</td>';
	echo '<td>';
	echo "Attended";
	echo '</td>';
	echo '<td>';
	echo "Percentage %";
	echo '</td>';
	echo '<td>';
	echo "Total";
	echo '</td>';
	echo '<td>';
	echo "Attended";
	echo '</td>';
	echo '<td>';
	echo "Percentage %";
	echo '</td>';
	echo '<td>';
	echo "Total";
	echo '</td>';
	echo '<td>';
	echo "Attended";
	echo '</td>';
	echo '<td>';
	echo "Percentage %";
	echo '</td>';
	echo '<td>';
	echo "Total";
	echo '</td>';
	echo '<td>';
	echo "Attended";
	echo '</td>';
	echo '<td>';
	echo "Percentage %";
	echo '</td>';
	echo '</tr>';
	echo '<tr>';
	echo  '<td style="padding:10px;">';
    echo $additional_total;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $additional_attended;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $additional_percentage;
	echo '</td>';
	echo '<td style="padding:10px;">';
    echo $english_total;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $english_attended;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $english_percentage;
	echo '</td>';
	echo '<td style="padding:10px;">';
    echo $ds_total;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $ds_attended;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $ds_percentage;
	echo '</td>';
	echo '<td style="padding:10px;">';
    echo $dbms_total;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $dbms_attended;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $dbms_percentage;
	echo '</td>';
	echo '<td style="padding:10px;">';
	echo $nsm_total;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $nsm_attended;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $dnsm_percentage;
	echo '</td>';
	echo '<td colspan="3">';
    echo $total_percentage;
	echo '</td>';
	echo '</tr>';	
	echo '</br>';
	echo '</table>';
	
    }	
	}
	}
	else
	if($semester == 3){
		$query = mysql_query("SELECT * 
			FROM
			users 
			INNER JOIN third_attendance 
			ON users.username = third_attendance.username
			WHERE third_attendance.username='$reg_no'");
	$count = mysql_num_rows($query);
	
	$query1 = mysql_query("SELECT * FROM `users` WHERE username ='$reg_no'") or die("couldnot search data");
	$count1 = mysql_num_rows($query1);
	
	
	if($count == 0 && $count1 == 0) {
		
		
	echo '<h1 style="color:red;">';
		echo "There was no search results!";
	echo '</h1>';
	}
	else {
	
	while($row = mysql_fetch_array($query1)) {
			$username = $row['username'];
			$first_name= $row['first_name'];
			$last_name = $row['last_name'];
			$semester = $row['semester'];
	
    }
	echo '<table style="background-color:#f39f41"; align="center">
	<th style="padding:10px;">Registration Number</th>
	      <th style="padding:10px;">First Name</th>
	      <th style="padding:10px;">Last Name</th>
	      <th style="padding:10px;">Semester</th>
		  ';
	echo '<tr>';
	echo '<td style="padding:10px;">';
	echo $username;
	echo '</td>';
	echo '<td style="padding:10px;">';
	echo $first_name;
	echo '</td>';
	echo '<td style="padding:10px;">';
	echo $last_name;
	echo '</td>';
	echo '<td style="padding:10px;">';
	echo $semester;
	echo '</td>';
	echo '</tr>';
		echo '</table>';
	echo '</br>';
	
	
	//$output = mysql_query("SELECT * FROM `members` WHERE firstname LIKE '%$searchq%'");
	
	
		
	    
		while($row = mysql_fetch_array($query)) {
			
			for($i=$i+1; $i<=$count;){
			echo "<h3>$months[$i]</h3>";
			break;
			}
			echo '<table align="center">';
			 $additional_total = $row['additional_total'];
			$additional_attended= $row['additional_attended'];
			$additional_percentage = $row['additional_percentage'];
			$english_total = $row['english_total'];
			$english_attended= $row['english_attended'];
			$english_percentage = $row['english_percentage'];
			$cplusplus_total = $row['cplusplus_total'];
			$cplusplus_attended= $row['cplusplus_attended'];
			$cplusplus_percentage = $row['cplusplus_percentage'];
			$fam_total = $row['fam_total'];
			$fam_attended= $row['fam_attended'];
			$fam_percentage = $row['fam_percentage'];
			$op_total = $row['op_total'];
			$op_attended= $row['op_attended'];
			$op_percentage = $row['op_percentage'];
			$total_percentage = $row['total_percentage'];
    echo' 
	<th colspan="3" style="text-align:center";>Additional Language </th>
	<th colspan="3" style="text-align:center";>English</th>
	<th colspan="3" style="text-align:center";>Object Oriented Programming using C++</th>
	<th colspan="3" style="text-align:center";>Financial Accounting and Management </th>
	<th colspan="3" style="text-align:center";>Operating System</th>
	<th colspan="3"  rowspan="2" style="text-align:center";>Total Percentage</th>';
	echo '<tr>';
	echo '<td>';
	echo "Total";
	echo '</td>';
	echo '<td>';
	echo "Attended";
	echo '</td>';
	echo '<td>';
	echo "Percentage %";
	echo '</td>';
	echo '<td>';
	echo "Total";
	echo '</td>';
	echo '<td>';
	echo "Attended";
	echo '</td>';
	echo '<td>';
	echo "Percentage %";
	echo '</td>';
	echo '<td>';
	echo "Total";
	echo '</td>';
	echo '<td>';
	echo "Attended";
	echo '</td>';
	echo '<td>';
	echo "Percentage %";
	echo '</td>';
	echo '<td>';
	echo "Total";
	echo '</td>';
	echo '<td>';
	echo "Attended";
	echo '</td>';
	echo '<td>';
	echo "Percentage %";
	echo '</td>';
	echo '<td>';
	echo "Total";
	echo '</td>';
	echo '<td>';
	echo "Attended";
	echo '</td>';
	echo '<td>';
	echo "Percentage %";
	echo '</td>';
	echo '</tr>';
	echo '<tr>';
	echo  '<td style="padding:10px;">';
    echo $additional_total;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $additional_attended;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $additional_percentage;
	echo '</td>';
	echo '<td style="padding:10px;">';
    echo $english_total;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $english_attended;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $english_percentage;
	echo '</td>';
	echo '<td style="padding:10px;">';
    echo $cplusplus_total;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $cplusplus_attended;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $cplusplus_percentage;
	echo '</td>';
	echo '<td style="padding:10px;">';
    echo $fam_total;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $fam_attended;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $fam_percentage;
	echo '</td>';
	echo '<td style="padding:10px;">';
	echo $op_total;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $op_attended;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $op_percentage;
	echo '</td>';
	echo '<td colspan="3">';
    echo $total_percentage;
	echo '</td>';
	echo '</tr>';	
	echo '</br>';
	echo '</table>';
	
    }	
	}
	}
	else
	if($semester == 4){
		$query = mysql_query("SELECT * 
			FROM
			users 
			INNER JOIN fourth_attendance 
			ON users.username = fourth_attendance.username
			WHERE fourth_attendance.username='$reg_no'");
	$count = mysql_num_rows($query);
	
	$query1 = mysql_query("SELECT * FROM `users` WHERE username ='$reg_no'") or die("couldnot search data");
	$count1 = mysql_num_rows($query1);
	
	
	if($count == 0 && $count1 == 0) {
		
		
	echo '<h1 style="color:red;">';
		echo "There was no search results!";
	echo '</h1>';
	}
	else {
	
	while($row = mysql_fetch_array($query1)) {
			$username = $row['username'];
			$first_name= $row['first_name'];
			$last_name = $row['last_name'];
			$semester = $row['semester'];
	
    }
	echo '<table style="background-color:#f39f41"; align="center">
	<th style="padding:10px;">Registration Number</th>
	      <th style="padding:10px;">First Name</th>
	      <th style="padding:10px;">Last Name</th>
	      <th style="padding:10px;">Semester</th>
		  ';
	echo '<tr>';
	echo '<td style="padding:10px;">';
	echo $username;
	echo '</td>';
	echo '<td style="padding:10px;">';
	echo $first_name;
	echo '</td>';
	echo '<td style="padding:10px;">';
	echo $last_name;
	echo '</td>';
	echo '<td style="padding:10px;">';
	echo $semester;
	echo '</td>';
	echo '</tr>';
		echo '</table>';
	echo '</br>';
	
	
	//$output = mysql_query("SELECT * FROM `members` WHERE firstname LIKE '%$searchq%'");
	
	
		
	    
		while($row = mysql_fetch_array($query)) {
			
			for($i=$i+1; $i<=$count;){
			echo "<h3>$months[$i]</h3>";
			break;
			}
			echo '<table align="center">';
			 $additional_total = $row['additional_total'];
			$additional_attended= $row['additional_attended'];
			$additional_percentage = $row['additional_percentage'];
			$english_total = $row['english_total'];
			$english_attended= $row['english_attended'];
			$english_percentage = $row['english_percentage'];
			$vp_total = $row['vp_total'];
			$vp_attended= $row['vp_attended'];
			$vp_percentage = $row['vp_percentage'];
			$unix_total = $row['unix_total'];
			$unix_attended= $row['unix_attended'];
			$unix_percentage = $row['unix_percentage'];
			$or_total = $row['or_total'];
			$or_attended= $row['or_attended'];
			$or_percentage = $row['or_percentage'];
			$total_percentage = $row['total_percentage'];
    echo' 
	<th colspan="3" style="text-align:center";>Additional Language </th>
	<th colspan="3" style="text-align:center";>English</th>
	<th colspan="3" style="text-align:center";>Visual Programing</th>
	<th colspan="3" style="text-align:center";>Unix Shell programming</th>
	<th colspan="3" style="text-align:center";>Operation Research </th>
	<th colspan="3"  rowspan="2" style="text-align:center";>Total Percentage</th>
	';
	echo '<tr>';
	echo '<td>';
	echo "Total";
	echo '</td>';
	echo '<td>';
	echo "Attended";
	echo '</td>';
	echo '<td>';
	echo "Percentage %";
	echo '</td>';
	echo '<td>';
	echo "Total";
	echo '</td>';
	echo '<td>';
	echo "Attended";
	echo '</td>';
	echo '<td>';
	echo "Percentage %";
	echo '</td>';
	echo '<td>';
	echo "Total";
	echo '</td>';
	echo '<td>';
	echo "Attended";
	echo '</td>';
	echo '<td>';
	echo "Percentage %";
	echo '</td>';
	echo '<td>';
	echo "Total";
	echo '</td>';
	echo '<td>';
	echo "Attended";
	echo '</td>';
	echo '<td>';
	echo "Percentage %";
	echo '</td>';
	echo '<td>';
	echo "Total";
	echo '</td>';
	echo '<td>';
	echo "Attended";
	echo '</td>';
	echo '<td>';
	echo "Percentage %";
	echo '</td>';
	
	echo '</tr>';
	echo '<tr>';
	echo  '<td style="padding:10px;">';
    echo $additional_total;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $additional_attended;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $additional_percentage;
	echo '</td>';
	
	echo '<td style="padding:10px;">';
    echo $english_total;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $english_attended;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $english_percentage;
	echo '</td>';
	echo '<td style="padding:10px;">';
    echo $vp_total;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $vp_attended;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $vp_percentage;
	echo '</td>';
	echo '<td style="padding:10px;">';
    echo $unix_total;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $unix_attended;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $unix_percentage;
	echo '</td>';
		
	echo '<td style="padding:10px;">';
	echo $or_total;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $or_attended;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $or_percentage;
	echo '</td>';
	
	echo '<td colspan="3">';
    echo $total_percentage;
	echo '</td>';
	echo '</tr>';	
	echo '</br>';
	echo '</table>';
	
    }	
	}
	}
	else
	if($semester == 5){
		$query = mysql_query("SELECT * 
			FROM
			users 
			INNER JOIN five_attendance 
			ON users.username = five_attendance.username
			WHERE five_attendance.username='$reg_no'");
	$count = mysql_num_rows($query);
	
	$query1 = mysql_query("SELECT * FROM `users` WHERE username ='$reg_no'") or die("couldnot search data");
	$count1 = mysql_num_rows($query1);
	
	
	if($count == 0 && $count1 == 0) {
		
		
	echo '<h1 style="color:red;">';
		echo "There was no search results!";
	echo '</h1>';
	}
	else {
	
	while($row = mysql_fetch_array($query1)) {
			$username = $row['username'];
			$first_name= $row['first_name'];
			$last_name = $row['last_name'];
			$semester = $row['semester'];
	
    }
	echo '<table style="background-color:#f39f41"; align="center">
	<th style="padding:10px;">Registration Number</th>
	      <th style="padding:10px;">First Name</th>
	      <th style="padding:10px;">Last Name</th>
	      <th style="padding:10px;">Semester</th>
		  ';
	echo '<tr>';
	echo '<td style="padding:10px;">';
	echo $username;
	echo '</td>';
	echo '<td style="padding:10px;">';
	echo $first_name;
	echo '</td>';
	echo '<td style="padding:10px;">';
	echo $last_name;
	echo '</td>';
	echo '<td style="padding:10px;">';
	echo $semester;
	echo '</td>';
	echo '</tr>';
		echo '</table>';
	echo '</br>';
	
	
	//$output = mysql_query("SELECT * FROM `members` WHERE firstname LIKE '%$searchq%'");
	
	
		
	    
		while($row = mysql_fetch_array($query)) {
			
			for($i=$i+1; $i<=$count;){
			echo "<h3>$months[$i]</h3>";
			break;
			}
			echo '<table align="center">';
			$java_total = $row['java_total'];
			$java_attended= $row['java_attended'];
			$java_percentage = $row['java_percentage'];
			$sspd_total = $row['sspd_total'];
			$sspd_attended= $row['sspd_attended'];
			$sspd_percentage = $row['sspd_percentage'];
			$se_total = $row['se_total'];
			$se_attended= $row['se_attended'];
			$se_percentage = $row['se_percentage'];
			$ca_total = $row['ca_total'];
			$ca_attended= $row['ca_attended'];
			$ca_percentage = $row['ca_percentage'];
			$bi_total = $row['bi_total'];
			$bi_attended= $row['bi_attended'];
			$bi_percentage = $row['bi_percentage'];
			$total_percentage = $row['total_percentage'];
    echo' 
	<th colspan="3" style="text-align:center";>Java Programming </th>
	<th colspan="3" style="text-align:center";>Soft Skills and Personality Development</th>
	<th colspan="3" style="text-align:center";>System Engineering</th>
	<th colspan="3" style="text-align:center";>Compuer Architecture</th>
	<th colspan="3" style="text-align:center";>Banking and Insurance</th>
	<th colspan="3"  rowspan="2" style="text-align:center";>Total Percentage</th>
	';
	echo '<tr>';
	echo '<td>';
	echo "Total";
	echo '</td>';
	echo '<td>';
	echo "Attended";
	echo '</td>';
	echo '<td>';
	echo "Percentage %";
	echo '</td>';
	echo '<td>';
	echo "Total";
	echo '</td>';
	echo '<td>';
	echo "Attended";
	echo '</td>';
	echo '<td>';
	echo "Percentage %";
	echo '</td>';
	echo '<td>';
	echo "Total";
	echo '</td>';
	echo '<td>';
	echo "Attended";
	echo '</td>';
	echo '<td>';
	echo "Percentage %";
	echo '</td>';
	echo '<td>';
	echo "Total";
	echo '</td>';
	echo '<td>';
	echo "Attended";
	echo '</td>';
	echo '<td>';
	echo "Percentage %";
	echo '</td>';
	echo '<td>';
	echo "Total";
	echo '</td>';
	echo '<td>';
	echo "Attended";
	echo '</td>';
	echo '<td>';
	echo "Percentage %";
	echo '</td>';
	
	echo '</tr>';
	echo '<tr>';
	echo  '<td style="padding:10px;">';
    echo $java_total;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $java_attended;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $java_percentage;
	echo '</td>';
	
	echo '<td style="padding:10px;">';
    echo $sspd_total;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $sspd_attended;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $sspd_percentage;
	echo '</td>';
	echo '<td style="padding:10px;">';
    echo $se_total;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $se_attended;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $se_percentage;
	echo '</td>';
	echo '<td style="padding:10px;">';
    echo $ca_total;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $ca_attended;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $ca_percentage;
	echo '</td>';	
	echo '<td style="padding:10px;">';
	echo $bi_total;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $bi_attended;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $bi_percentage;
	echo '</td>';
	
	echo '<td colspan="3">';
    echo $total_percentage;
	echo '</td>';
	echo '</tr>';	
	echo '</br>';
	echo '</table>';
	
    }	
	}
	}
	else
	if($semester == 6){
		$query = mysql_query("SELECT * 
			FROM
			users 
			INNER JOIN six_attendance 
			ON users.username = six_attendance.username
			WHERE six_attendance.username='$reg_no'");
	$count = mysql_num_rows($query);
	
	$query1 = mysql_query("SELECT * FROM `users` WHERE username ='$reg_no'") or die("couldnot search data");
	$count1 = mysql_num_rows($query1);
	
	
	if($count == 0 && $count1 == 0) {
		
		
	echo '<h1 style="color:red;">';
		echo "There was no search results!";
	echo '</h1>';
	}
	else {
	
	while($row = mysql_fetch_array($query1)) {
			$username = $row['username'];
			$first_name= $row['first_name'];
			$last_name = $row['last_name'];
			$semester = $row['semester'];
	
    }
	echo '<table style="background-color:#f39f41"; align="center">
	<th style="padding:10px;">Registration Number</th>
	      <th style="padding:10px;">First Name</th>
	      <th style="padding:10px;">Last Name</th>
	      <th style="padding:10px;">Semester</th>
		  ';
	echo '<tr>';
	echo '<td style="padding:10px;">';
	echo $username;
	echo '</td>';
	echo '<td style="padding:10px;">';
	echo $first_name;
	echo '</td>';
	echo '<td style="padding:10px;">';
	echo $last_name;
	echo '</td>';
	echo '<td style="padding:10px;">';
	echo $semester;
	echo '</td>';
	echo '</tr>';
		echo '</table>';
	echo '</br>';
	
	
	//$output = mysql_query("SELECT * FROM `members` WHERE firstname LIKE '%$searchq%'");
	
	
		
	    
		while($row = mysql_fetch_array($query)) {
			
			for($i=$i+1; $i<=$count;){
	    	echo "<h3>$months[$i]</h3>";
			break;
			}
			echo '<table align="center">';
			$ada_total = $row['ada_total'];
			$ada_attended= $row['ada_attended'];
			$ada_percentage = $row['ada_percentage'];
			$wp_total = $row['wp_total'];
			$wp_attended= $row['wp_attended'];
			$wp_percentage = $row['wp_percentage'];
			$sp_total = $row['sp_total'];
			$sp_attended= $row['sp_attended'];
			$sp_percentage = $row['sp_percentage'];
			$cg_total = $row['cg_total'];
			$cg_attended= $row['cg_attended'];
			$cg_percentage = $row['cg_percentage'];
			$total_percentage = $row['total_percentage'];
    echo' 
	<th colspan="3" style="text-align:center";>Algorithm Analys and Development</th>
	<th colspan="3" style="text-align:center";>Web Programming</th>
	<th colspan="3" style="text-align:center";>System Programming</th>
	<th colspan="3" style="text-align:center";>Compuer Graphics</th>
	<th colspan="3"  rowspan="2" style="text-align:center";>Total Percentage</th>
	';
	echo '<tr>';
	echo '<td>';
	echo "Total";
	echo '</td>';
	echo '<td>';
	echo "Attended";
	echo '</td>';
	echo '<td>';
	echo "Percentage %";
	echo '</td>';
	echo '<td>';
	echo "Total";
	echo '</td>';
	echo '<td>';
	echo "Attended";
	echo '</td>';
	echo '<td>';
	echo "Percentage %";
	echo '</td>';
	echo '<td>';
	echo "Total";
	echo '</td>';
	echo '<td>';
	echo "Attended";
	echo '</td>';
	echo '<td>';
	echo "Percentage %";
	echo '</td>';
	echo '<td>';
	echo "Total";
	echo '</td>';
	echo '<td>';
	echo "Attended";
	echo '</td>';
	echo '<td>';
	echo "Percentage %";
	echo '</td>';
	
	echo '</tr>';
	echo '<tr>';
	echo  '<td style="padding:10px;">';
    echo $ada_total;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $ada_attended;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $ada_percentage;
	echo '</td>';
	
	echo '<td style="padding:10px;">';
    echo $wp_total;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $wp_attended;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $wp_percentage;
	echo '</td>';
	echo '<td style="padding:10px;">';
    echo $sp_total;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $sp_attended;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $sp_percentage;
	echo '</td>';
	echo '<td style="padding:10px;">';
    echo $cg_total;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $cg_attended;
	echo '</td>';
	echo  '<td style="padding:10px;">';
    echo $cg_percentage;
	echo '</td>';
	echo '<td colspan="3">';
    echo $total_percentage;
	echo '</td>';
	echo '</tr>';	
	echo '</br>';
	echo '</table>';
	}	
	}
	}
	}
	
	?>
<br/>
<!--<div id="container">-->
<div id="search">
<form action="" method="POST" align="center">
Registration no:<input type="text" name="reg_no" id="reg_no" placeholder="Enter the registration number"/>
Select the semester:
<select name="semester">
	<option>1</option>
	<option>2</option>
	<option>3</option>
	<option>4</option>
	<option>5</option>
	<option>6</option>
</select>
<input type="submit" name="submit" value="Search"/>
</form>
</div>
<!--</div> -->
</br>
</br>
</br>

<?php include 'includes/overall/footer.php';?>