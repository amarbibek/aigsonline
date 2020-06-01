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
<h1 align="center" style="font-family:verdana;">Internals Results</h1>
 
<?php
//$tests = array("First Enternal", "Second Enternal", "Third English");
$i=-1;


if (isset($_POST['submit']) ){
	$username     =$_POST['username'];
	$semester     =$_POST['semester'];
	$internals    =$_POST['internals'];
	
   if($semester == 1)
   {
	$query = mysql_query("SELECT * FROM `first_result` WHERE username ='$username' && semester='$semester' && internals='$internals'") or die("couldnot search data");
	$count = mysql_num_rows($query);
	if($count == 0) {
	echo '<h1 style="color:red;">'; 
		echo "There was no search results!";
	echo '</h1>';
	}
	else {
		
	echo '<table style="background-color:#f39f41"; align="center">
	<th style="padding:10px;">Registration Number</th>
	      <th style="padding:10px;">Semester</th>
	      <th style="padding:10px;">Internals</th>';
	echo '<tr>';
	echo '<td style="padding:10px;">';
	echo $username;
	echo '</td>';
	echo '<td style="padding:10px;">';
	echo $semester;
	echo '</td>';
	echo '<td style="padding:10px;">';
	echo $internals;
	echo '</td>';
	echo '</tr>';
	echo '</table>';
	echo '</br>';
		
	while($row = mysql_fetch_array($query)) {
		for($i=$i+1; $i<=$count;){
			echo "<h3> Internal-> $internals</h3>";
			break;
			}
		
			
	$username = $row['username'];
	$semester = $row['semester'];
	$internals = $row['internals'];
			
	
	$additional_max = $row['additional_max'];
	$additional_min = $row['additional_min'];
	$additional_obtained = $row['additional_obtained'];

	$english_max = $row['english_max'];
	$english_min = $row['english_min'];
	$english_obtained = $row['english_obtained'];
	
	$c_max = $row['c_max'];
	$c_min = $row['c_min'];
	$c_obtained = $row['c_obtained'];
	
	$de_max = $row['de_max'];
	$de_min	= $row['de_min'];
	$de_obtained = $row['de_obtained'];
	
	$dm_max = $row['dm_max'];
	$dm_min	= $row['dm_min'];
	$dm_obtained = $row['dm_obtained'];

	
	$cf_max = $row['cf_max'];
	$cf_min	= $row['cf_min'];
	$cf_obtained = $row['cf_obtained'];
	
	echo '<table align="center" style="table-layout: fixed; width: 100%;">';
    echo' 
	<th colspan="3" style="text-align:center";>Additional Language </th>
	<th colspan="3" style="text-align:center";>English</th>
	<th colspan="3" style="text-align:center";>C Language</th>
	<th colspan="3" style="text-align:center";>Digital Electronics</th>
    <th colspan="3" style="text-align:center";>Discrete Mathematics</th>
	<th colspan="3" style="text-align:center";>Computer Fundamental</th>';
	echo '<tr>';
	echo '<td>';
	echo "max";
	echo '</td>';
	echo '<td>';
	echo "min";
	echo '</td>';
	echo '<td>';
	echo "obtained";
	echo '</td>';
	echo '<td>';
	echo "max";
	echo '</td>';
	echo '<td>';
	echo "min";
	echo '</td>';
	echo '<td>';
	echo "obtained";
	echo '</td>';
	echo '<td>';
	echo "max";
	echo '</td>';
	echo '<td>';
	echo "min";
	echo '</td>';
	echo '<td>';
	echo "obtained";
	echo '</td>';
	echo '<td>';
	echo "max";
	echo '</td>';
	echo '<td>';
	echo "min";
	echo '</td>';
	echo '<td>';
	echo "obtained";
	echo '</td>';
	echo '<td>';
	echo "max";
	echo '</td>';
	echo '<td>';
	echo "min";
	echo '</td>';
	echo '<td>';
	echo "obtained";
	echo '</td>';
	echo '<td>';
	echo "max";
	echo '</td>';
	echo '<td>';
	echo "min";
	echo '</td>';
	echo '<td>';
	echo "obtained";
	echo '</td>';
	echo '</tr>';
	echo '<tr>';
	echo  '<td >';
    echo $additional_max;
	echo '</td>';
	echo  '<td>';
    echo $additional_min;
	echo '</td>';
	echo  '<td>';
    echo $additional_obtained;
	echo '</td>';
	echo '<td>';
    echo $english_max;
	echo '</td>';
	echo  '<td>';
    echo $english_min;
	echo '</td>';
	echo  '<td>';
    echo $english_obtained;
	echo '</td>';
	echo '<td>';
    echo $c_max;
	echo '</td>';
	echo  '<td>';
    echo $c_min;
	echo '</td>';
	echo  '<td>';
    echo $c_obtained;
	echo '</td>';
	echo '<td>';
    echo $de_max;
	echo '</td>';
	echo  '<td>';
    echo $de_min;
	echo '</td>';
	echo  '<td>';
    echo $de_obtained;
	echo '</td>';
	echo '<td>';
	echo $dm_max;
	echo '</td>';
	echo  '<td>';
    echo $dm_min;
	echo '</td>';
	echo  '<td>';
    echo $dm_obtained;
	echo '</td>';
	echo '<td>';
	echo $cf_max;
	echo '</td>';
	echo  '<td>';
    echo $cf_min;
	echo '</td>';
	echo  '<td>';
    echo $cf_obtained;
	echo '</td>';
	echo '</tr>';	
	echo '</br>';
	echo '</table>';
	
    }
}
}else if($semester == 2)
   {
	$query = mysql_query("SELECT * FROM `second_result` WHERE username ='$username' && semester='$semester' && internals='$internals'") or die("couldnot search data");
	$count = mysql_num_rows($query);
	if($count == 0) {
	echo '<h1 style="color:red;">'; 
		echo "There was no search results!";
	echo '</h1>';
	}
	else {
		
			echo '<table style="background-color:#f39f41"; align="center">
	<th style="padding:10px;">Registration Number</th>
	      <th style="padding:10px;">Semester</th>
	      <th style="padding:10px;">Internals</th>';
	echo '<tr>';
	echo '<td style="padding:10px;">';
	echo $username;
	echo '</td>';
	echo '<td style="padding:10px;">';
	echo $semester;
	echo '</td>';
	echo '<td style="padding:10px;">';
	echo $internals;
	echo '</td>';
	echo '</tr>';
	echo '</table>';
	echo '</br>';
		
	while($row = mysql_fetch_array($query)) {
		for($i=$i+1; $i<=$count;){
			echo "<h3> Internal-> $internals</h3>";
			break;
			}
		
			
	$username = $row['username'];
	$semester = $row['semester'];
	$internals = $row['internals'];
			
	
	$additional_max = $row['additional_max'];
	$additional_min = $row['additional_min'];
	$additional_obtained = $row['additional_obtained'];

	$english_max = $row['english_max'];
	$english_min = $row['english_min'];
	$english_obtained = $row['english_obtained'];
	
	$ds_max = $row['ds_max'];
	$ds_min = $row['ds_min'];
	$ds_obtained = $row['ds_obtained'];
	
	$dbms_max = $row['dbms_max'];
	$dbms_min	= $row['dbms_min'];
	$dbms_obtained = $row['dbms_obtained'];
	
	$nsm_max = $row['nsm_max'];
	$nsm_min	= $row['nsm_min'];
	$nsm_obtained = $row['nsm_obtained'];

	

	
	echo '<table align="center" style="table-layout: fixed; width: 100%;">';
    echo' 
	<th colspan="3" style="text-align:center";>Additional Language </th>
	<th colspan="3" style="text-align:center";>English</th>
	<th colspan="3" style="text-align:center";>Data Structures</th>
	<th colspan="3" style="text-align:center";>DBMS</th>
    <th colspan="3" style="text-align:center";>NSM</th>';
	echo '<tr>';
	echo '<td>';
	echo "max";
	echo '</td>';
	echo '<td>';
	echo "min";
	echo '</td>';
	echo '<td>';
	echo "obtained";
	echo '</td>';
	echo '<td>';
	echo "max";
	echo '</td>';
	echo '<td>';
	echo "min";
	echo '</td>';
	echo '<td>';
	echo "obtained";
	echo '</td>';
	echo '<td>';
	echo "max";
	echo '</td>';
	echo '<td>';
	echo "min";
	echo '</td>';
	echo '<td>';
	echo "obtained";
	echo '</td>';
	echo '<td>';
	echo "max";
	echo '</td>';
	echo '<td>';
	echo "min";
	echo '</td>';
	echo '<td>';
	echo "obtained";
	echo '</td>';
	echo '<td>';
	echo "max";
	echo '</td>';
	echo '<td>';
	echo "min";
	echo '</td>';
	echo '<td>';
	echo "obtained";
	echo '</td>';
	
	echo '</tr>';
	echo '<tr>';
	echo  '<td >';
    echo $additional_max;
	echo '</td>';
	echo  '<td>';
    echo $additional_min;
	echo '</td>';
	echo  '<td>';
    echo $additional_obtained;
	echo '</td>';
	echo '<td>';
    echo $english_max;
	echo '</td>';
	echo  '<td>';
    echo $english_min;
	echo '</td>';
	echo  '<td>';
    echo $english_obtained;
	echo '</td>';
	echo '<td>';
    echo $ds_max;
	echo '</td>';
	echo  '<td>';
    echo $ds_min;
	echo '</td>';
	echo  '<td>';
    echo $ds_obtained;
	echo '</td>';
	echo '<td>';
    echo $dbms_max;
	echo '</td>';
	echo  '<td>';
    echo $dbms_min;
	echo '</td>';
	echo  '<td>';
    echo $dbms_obtained;
	echo '</td>';
	echo '<td>';
	echo $nsm_max;
	echo '</td>';
	echo  '<td>';
    echo $nsm_min;
	echo '</td>';
	echo  '<td>';
    echo $nsm_obtained;
	echo '</td>';
	
	echo '</tr>';	
	echo '</br>';
	echo '</table>';
	}
    }
    }
	else if($semester == 3)
   {
	$query = mysql_query("SELECT * FROM `third_result` WHERE username ='$username' && semester='$semester' && internals='$internals'") or die("couldnot search data");
	$count = mysql_num_rows($query);
	if($count == 0) {
	echo '<h1 style="color:red;">';
		echo "There was no search results!";
	echo '</h1>';
	}
	else {
		
			echo '<table style="background-color:#f39f41"; align="center">
	<th style="padding:10px;">Registration Number</th>
	      <th style="padding:10px;">Semester</th>
	      <th style="padding:10px;">Internals</th>';
	echo '<tr>';
	echo '<td style="padding:10px;">';
	echo $username;
	echo '</td>';
	echo '<td style="padding:10px;">';
	echo $semester;
	echo '</td>';
	echo '<td style="padding:10px;">';
	echo $internals;
	echo '</td>';
	echo '</tr>';
	echo '</table>';
	echo '</br>';
		
	while($row = mysql_fetch_array($query)) {
		for($i=$i+1; $i<=$count;){
			echo "<h3> Internal-> $internals</h3>";
			break;
			}
		
			
	$username = $row['username'];
	$semester = $row['semester'];
	$internals = $row['internals'];
			
	
	$additional_max = $row['additional_max'];
	$additional_min = $row['additional_min'];
	$additional_obtained = $row['additional_obtained'];

	$english_max = $row['english_max'];
	$english_min = $row['english_min'];
	$english_obtained = $row['english_obtained'];
	
	$cplusplus_max = $row['cplusplus_max'];
	$cplusplus_min = $row['cplusplus_min'];
	$cplusplus_obtained = $row['cplusplus_obtained'];
	
	$fam_max = $row['fam_max'];
	$fam_min	= $row['fam_min'];
	$fam_obtained = $row['fam_obtained'];
	
	$op_max = $row['op_max'];
	$op_min	= $row['op_min'];
	$op_obtained = $row['op_obtained'];

	

	
	echo '<table align="center" style="table-layout: fixed; width: 100%;">';
    echo' 
	<th colspan="3" style="text-align:center";>Additional Language </th>
	<th colspan="3" style="text-align:center";>English</th>
	<th colspan="3" style="text-align:center";>C++</th>
	<th colspan="3" style="text-align:center";>FAM</th>
    <th colspan="3" style="text-align:center";>Operating System</th>';
	echo '<tr>';
	echo '<td>';
	echo "max";
	echo '</td>';
	echo '<td>';
	echo "min";
	echo '</td>';
	echo '<td>';
	echo "obtained";
	echo '</td>';
	echo '<td>';
	echo "max";
	echo '</td>';
	echo '<td>';
	echo "min";
	echo '</td>';
	echo '<td>';
	echo "obtained";
	echo '</td>';
	echo '<td>';
	echo "max";
	echo '</td>';
	echo '<td>';
	echo "min";
	echo '</td>';
	echo '<td>';
	echo "obtained";
	echo '</td>';
	echo '<td>';
	echo "max";
	echo '</td>';
	echo '<td>';
	echo "min";
	echo '</td>';
	echo '<td>';
	echo "obtained";
	echo '</td>';
	echo '<td>';
	echo "max";
	echo '</td>';
	echo '<td>';
	echo "min";
	echo '</td>';
	echo '<td>';
	echo "obtained";
	echo '</td>';
	
	echo '</tr>';
	echo '<tr>';
	echo  '<td >';
    echo $additional_max;
	echo '</td>';
	echo  '<td>';
    echo $additional_min;
	echo '</td>';
	echo  '<td>';
    echo $additional_obtained;
	echo '</td>';
	echo '<td>';
    echo $english_max;
	echo '</td>';
	echo  '<td>';
    echo $english_min;
	echo '</td>';
	echo  '<td>';
    echo $english_obtained;
	echo '</td>';
	echo '<td>';
    echo $cplusplus_max;
	echo '</td>';
	echo  '<td>';
    echo $cplusplus_min;
	echo '</td>';
	echo  '<td>';
    echo $cplusplus_obtained;
	echo '</td>';
	echo '<td>';
    echo $fam_max;
	echo '</td>';
	echo  '<td>';
    echo $fam_min;
	echo '</td>';
	echo  '<td>';
    echo $fam_obtained;
	echo '</td>';
	echo '<td>';
	echo $op_max;
	echo '</td>';
	echo  '<td>';
    echo $op_min;
	echo '</td>';
	echo  '<td>';
    echo $op_obtained;
	echo '</td>';
	
	echo '</tr>';	
	echo '</br>';
	echo '</table>';
	
    }
}
}
else if($semester == 4)
   {
	$query = mysql_query("SELECT * FROM `fourth_result` WHERE username ='$username' && semester='$semester' && internals='$internals'") or die("couldnot search data");
	$count = mysql_num_rows($query);
	if($count == 0) {
	echo '<h1 style="color:red;">'; 
		echo "There was no search results!";
	echo '</h1>';
	}
	else {
		
			echo '<table style="background-color:#f39f41"; align="center">
	<th style="padding:10px;">Registration Number</th>
	      <th style="padding:10px;">Semester</th>
	      <th style="padding:10px;">Internals</th>';
	echo '<tr>';
	echo '<td style="padding:10px;">';
	echo $username;
	echo '</td>';
	echo '<td style="padding:10px;">';
	echo $semester;
	echo '</td>';
	echo '<td style="padding:10px;">';
	echo $internals;
	echo '</td>';
	echo '</tr>';
	echo '</table>';
	echo '</br>';
		
	while($row = mysql_fetch_array($query)) {
		for($i=$i+1; $i<=$count;){
			echo "<h3> Internal-> $internals</h3>";
			break;
			}
		
			
	$username = $row['username'];
	$semester = $row['semester'];
	$internals = $row['internals'];
			
	
	$additional_max = $row['additional_max'];
	$additional_min = $row['additional_min'];
	$additional_obtained = $row['additional_obtained'];

	$english_max = $row['english_max'];
	$english_min = $row['english_min'];
	$english_obtained = $row['english_obtained'];
	
	$vp_max = $row['vp_max'];
	$vp_min = $row['vp_min'];
	$vp_obtained = $row['vp_obtained'];
	
	$unix_max = $row['unix_max'];
	$unix_min	= $row['unix_min'];
	$unix_obtained = $row['unix_obtained'];
	
	$or_max = $row['or_max'];
	$or_min	= $row['or_min'];
	$or_obtained = $row['or_obtained'];

	

	
	echo '<table align="center" style="table-layout: fixed; width: 100%;">';
    echo' 
	<th colspan="3" style="text-align:center";>Additional Language </th>
	<th colspan="3" style="text-align:center";>English</th>
	<th colspan="3" style="text-align:center";>Visual Programming</th>
	<th colspan="3" style="text-align:center";>Unix</th>
    <th colspan="3" style="text-align:center";>OR</th>';
	echo '<tr>';
	echo '<td>';
	echo "max";
	echo '</td>';
	echo '<td>';
	echo "min";
	echo '</td>';
	echo '<td>';
	echo "obtained";
	echo '</td>';
	echo '<td>';
	echo "max";
	echo '</td>';
	echo '<td>';
	echo "min";
	echo '</td>';
	echo '<td>';
	echo "obtained";
	echo '</td>';
	echo '<td>';
	echo "max";
	echo '</td>';
	echo '<td>';
	echo "min";
	echo '</td>';
	echo '<td>';
	echo "obtained";
	echo '</td>';
	echo '<td>';
	echo "max";
	echo '</td>';
	echo '<td>';
	echo "min";
	echo '</td>';
	echo '<td>';
	echo "obtained";
	echo '</td>';
	echo '<td>';
	echo "max";
	echo '</td>';
	echo '<td>';
	echo "min";
	echo '</td>';
	echo '<td>';
	echo "obtained";
	echo '</td>';
	
	echo '</tr>';
	echo '<tr>';
	echo  '<td >';
    echo $additional_max;
	echo '</td>';
	echo  '<td>';
    echo $additional_min;
	echo '</td>';
	echo  '<td>';
    echo $additional_obtained;
	echo '</td>';
	echo '<td>';
    echo $english_max;
	echo '</td>';
	echo  '<td>';
    echo $english_min;
	echo '</td>';
	echo  '<td>';
    echo $english_obtained;
	echo '</td>';
	echo '<td>';
    echo $vp_max;
	echo '</td>';
	echo  '<td>';
    echo $vp_min;
	echo '</td>';
	echo  '<td>';
    echo $vp_obtained;
	echo '</td>';
	echo '<td>';
    echo $unix_max;
	echo '</td>';
	echo  '<td>';
    echo $unix_min;
	echo '</td>';
	echo  '<td>';
    echo $unix_obtained;
	echo '</td>';
	echo '<td>';
	echo $or_max;
	echo '</td>';
	echo  '<td>';
    echo $or_min;
	echo '</td>';
	echo  '<td>';
    echo $or_obtained;
	echo '</td>';
	
	echo '</tr>';	
	echo '</br>';
	echo '</table>';
	
    }
}
}
else if($semester == 5)
   {
	$query = mysql_query("SELECT * FROM `five_result` WHERE username ='$username' && semester='$semester' && internals='$internals'") or die("couldnot search data");
	$count = mysql_num_rows($query);
	if($count == 0) {
	echo '<h1 style="color:red;">';
		echo "There was no search results!";
	echo '</h1>';
	}
	else {
		
			echo '<table style="background-color:#f39f41"; align="center">
	<th style="padding:10px;">Registration Number</th>
	      <th style="padding:10px;">Semester</th>
	      <th style="padding:10px;">Internals</th>';
	echo '<tr>';
	echo '<td style="padding:10px;">';
	echo $username;
	echo '</td>';
	echo '<td style="padding:10px;">';
	echo $semester;
	echo '</td>';
	echo '<td style="padding:10px;">';
	echo $internals;
	echo '</td>';
	echo '</tr>';
	echo '</table>';
	echo '</br>';
		
	while($row = mysql_fetch_array($query)) {
		for($i=$i+1; $i<=$count;){
			echo "<h3> Internal-> $internals</h3>";
			break;
			}
		
			
	$username = $row['username'];
	$semester = $row['semester'];
	$internals = $row['internals'];
			
	
	$java_max = $row['java_max'];
	$java_min = $row['java_min'];
	$java_obtained = $row['java_obtained'];

	$sspd_max = $row['sspd_max'];
	$sspd_min = $row['sspd_min'];
	$sspd_obtained = $row['sspd_obtained'];
	
	$se_max = $row['se_max'];
	$se_min = $row['se_min'];
	$se_obtained = $row['se_obtained'];
	
	$ca_max = $row['ca_max'];
	$ca_min	= $row['ca_min'];
	$ca_obtained = $row['ca_obtained'];
	
	$bi_max = $row['bi_max'];
	$bi_min	= $row['bi_min'];
	$bi_obtained = $row['bi_obtained'];

	

	
	echo '<table align="center" style="table-layout: fixed; width: 100%;">';
    echo' 
	<th colspan="3" style="text-align:center";>Java</th>
	<th colspan="3" style="text-align:center";>SSPD</th>
	<th colspan="3" style="text-align:center";>SE</th>
	<th colspan="3" style="text-align:center";>CA</th>
    <th colspan="3" style="text-align:center";>BI</th>';
	echo '<tr>';
	echo '<td>';
	echo "max";
	echo '</td>';
	echo '<td>';
	echo "min";
	echo '</td>';
	echo '<td>';
	echo "obtained";
	echo '</td>';
	echo '<td>';
	echo "max";
	echo '</td>';
	echo '<td>';
	echo "min";
	echo '</td>';
	echo '<td>';
	echo "obtained";
	echo '</td>';
	echo '<td>';
	echo "max";
	echo '</td>';
	echo '<td>';
	echo "min";
	echo '</td>';
	echo '<td>';
	echo "obtained";
	echo '</td>';
	echo '<td>';
	echo "max";
	echo '</td>';
	echo '<td>';
	echo "min";
	echo '</td>';
	echo '<td>';
	echo "obtained";
	echo '</td>';
	echo '<td>';
	echo "max";
	echo '</td>';
	echo '<td>';
	echo "min";
	echo '</td>';
	echo '<td>';
	echo "obtained";
	echo '</td>';
	
	echo '</tr>';
	echo '<tr>';
	echo  '<td >';
    echo $java_max;
	echo '</td>';
	echo  '<td>';
    echo $java_min;
	echo '</td>';
	echo  '<td>';
    echo $java_obtained;
	echo '</td>';
	echo '<td>';
    echo $sspd_max;
	echo '</td>';
	echo  '<td>';
    echo $sspd_min;
	echo '</td>';
	echo  '<td>';
    echo $sspd_obtained;
	echo '</td>';
	echo '<td>';
    echo $se_max;
	echo '</td>';
	echo  '<td>';
    echo $se_min;
	echo '</td>';
	echo  '<td>';
    echo $se_obtained;
	echo '</td>';
	echo '<td>';
    echo $ca_max;
	echo '</td>';
	echo  '<td>';
    echo $ca_min;
	echo '</td>';
	echo  '<td>';
    echo $ca_obtained;
	echo '</td>';
	echo '<td>';
	echo $bi_max;
	echo '</td>';
	echo  '<td>';
    echo $bi_min;
	echo '</td>';
	echo  '<td>';
    echo $bi_obtained;
	echo '</td>';
	
	echo '</tr>';	
	echo '</br>';
	echo '</table>';
	
    }
}
}
else if($semester == 6)
   {
	$query = mysql_query("SELECT * FROM `six_result` WHERE username ='$username' && semester='$semester' && internals='$internals'") or die("couldnot search data");
	$count = mysql_num_rows($query);
	if($count == 0) {
	echo '<h1 style="color:red;">';
		echo "There was no search results!";
	echo '</h1>';
	}
	else {
		
			echo '<table style="background-color:#f39f41"; align="center">
	<th style="padding:10px;">Registration Number</th>
	      <th style="padding:10px;">Semester</th>
	      <th style="padding:10px;">Internals</th>';
	echo '<tr>';
	echo '<td style="padding:10px;">';
	echo $username;
	echo '</td>';
	echo '<td style="padding:10px;">';
	echo $semester;
	echo '</td>';
	echo '<td style="padding:10px;">';
	echo $internals;
	echo '</td>';
	echo '</tr>';
	echo '</table>';
	echo '</br>';
		
	while($row = mysql_fetch_array($query)) {
		for($i=$i+1; $i<=$count;){
			echo "<h3> Internal-> $internals</h3>";
			break;
			}
		
			
	$username = $row['username'];
	$semester = $row['semester'];
	$internals = $row['internals'];
			
	
	$ada_max = $row['ada_max'];
	$ada_min = $row['ada_min'];
	$ada_obtained = $row['ada_obtained'];

	$wp_max = $row['wp_max'];
	$wp_min = $row['wp_min'];
	$wp_obtained = $row['wp_obtained'];
	
	$cg_max = $row['cg_max'];
	$cg_min = $row['cg_min'];
	$cg_obtained = $row['cg_obtained'];
	
	$sp_max = $row['sp_max'];
	$sp_min	= $row['sp_min'];
	$sp_obtained = $row['sp_obtained'];
	

	
	echo '<table align="center" style="table-layout: fixed; width: 100%;">';
    echo' 
	<th colspan="3" style="text-align:center";>ADA</th>
	<th colspan="3" style="text-align:center";>WP</th>
	<th colspan="3" style="text-align:center";>SP</th>
	<th colspan="3" style="text-align:center";>CG</th>';
	echo '<tr>';
	echo '<td>';
	echo "max";
	echo '</td>';
	echo '<td>';
	echo "min";
	echo '</td>';
	echo '<td>';
	echo "obtained";
	echo '</td>';
	echo '<td>';
	echo "max";
	echo '</td>';
	echo '<td>';
	echo "min";
	echo '</td>';
	echo '<td>';
	echo "obtained";
	echo '</td>';
	echo '<td>';
	echo "max";
	echo '</td>';
	echo '<td>';
	echo "min";
	echo '</td>';
	echo '<td>';
	echo "obtained";
	echo '</td>';
	echo '<td>';
	echo "max";
	echo '</td>';
	echo '<td>';
	echo "min";
	echo '</td>';
	echo '<td>';
	echo "obtained";
	echo '</td>';
	
	echo '</tr>';
	echo '<tr>';
	echo  '<td >';
    echo $ada_max;
	echo '</td>';
	echo  '<td>';
    echo $ada_min;
	echo '</td>';
	echo  '<td>';
    echo $ada_obtained;
	echo '</td>';
	echo '<td>';
    echo $wp_max;
	echo '</td>';
	echo  '<td>';
    echo $wp_min;
	echo '</td>';
	echo  '<td>';
    echo $wp_obtained;
	echo '</td>';
	echo '<td>';
    echo $sp_max;
	echo '</td>';
	echo  '<td>';
    echo $sp_min;
	echo '</td>';
	echo  '<td>';
    echo $sp_obtained;
	echo '</td>';
	echo '<td>';
    echo $cg_max;
	echo '</td>';
	echo  '<td>';
    echo $cg_min;
	echo '</td>';
	echo  '<td>';
    echo $cg_obtained;
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
<div id="search">
<form action="" method="POST" align="center">
Registration no:<input type="text" name="username" id="username" placeholder="registration number"/>
Select the semester:
<select name="semester">
	
	<option>1</option>
	<option>2</option>
	<option>3</option>
	<option>4</option>
	<option>5</option>
	<option>6</option>
</select>
Select the internal test:
<select name="internals">
	
	<option>1</option>
	<option>2</option>
	<option>3</option>
	</select>
<input type="submit" name="submit" value="Search"/>
</form>
</div>
</br>
</br>
</br>

<?php include 'includes/overall/footer.php';?>