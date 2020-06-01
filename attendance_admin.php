<?php include 'core/init.php';?>
<?php include 'includes/overall/header.php';?>
</br>
</br>
</br>

<nav>
            <ul>
                <li><a href="admin.php">Add admin</a></li>
                <li><a href="result_admin.php">Add Results</a></li>
                <li><a href="attendance_admin.php">Add Attendances</a></li>
                <li><a href="adminnotifications.php">Update NewsFeed</a></li>
				<li><a href="reports.php">Reports</a></li>

				<li><?php echo '<a href="https://mail.google.com/mail/?view=cm&fs=1&to= ' . $user_data['email'] . '&su=SUBJECT&body=BODY">'; ?>Send email</a></li>
            
		
              
         </ul>
        </nav>
		<br>
		<br>
</br>
</br>
<h1 align="center" style="font-family:verdana;"> Department of Compuer Applications</h1>
<h1 align="center" style="font-family:verdana;">Students Attendance</h1>
<h1 align="center" style="font-family:verdana;">Admin Panel</h1>
<style>
th{
	padding:10px;
}
</style>
<?php
if(isset($_POST['submit1'])){

   $username		        = $_POST["username"];
	$additional_total		        = $_POST["additional_total"];
	$additional_attended			= $_POST["additional_attended"];
	$additional_percentage			= $_POST["additional_percentage"];
	
	$english_total	        = $_POST["english_total"];
	$english_attended			= $_POST["english_attended"];
	$english_percentage			= $_POST["english_percentage"];
	
	$c_total	        = $_POST["c_total"];
	$c_attended		= $_POST["c_attended"];
	$c_percentage			= $_POST["c_percentage"];
	
	$de_total	        = $_POST["de_total"];
	$de_attended			= $_POST["de_attended"];
	$de_percentage			= $_POST["de_percentage"];
	
	$dm_total	        = $_POST["dm_total"];
	$dm_attended			= $_POST["dm_attended"];
	$dm_percentage			= $_POST["dm_percentage"];

	
	$cf_total	        = $_POST["cf_total"];
	$cf_attended			= $_POST["cf_attended"];
	$cf_percentage		= $_POST["cf_percentage"];
	$total_percentage			= $_POST["total_percentage"];

	
	
	
	mysql_query("INSERT INTO `aigsonlinedb`.`first_attendance`(username,additional_total,additional_attended,additional_percentage,english_total,english_attended,english_percentage,c_total,c_attended,c_percentage,de_total,de_attended,de_percentage,dm_total,dm_attended,dm_percentage,cf_total,cf_attended,cf_percentage,total_percentage) VALUES ('$username','$additional_total','$additional_attended','$additional_percentage','$english_total','$english_attended','$english_percentage','$c_total','$c_attended','$c_percentage','$de_total','$de_attended','$de_percentage','$dm_total','$dm_attended','$dm_percentage','$cf_total','$cf_attended','$cf_percentage','$total_percentage')") or die("ddnt work");
}else if(isset($_POST['submit2'])){

   $username		        = $_POST["username"];
	$additional_total		        = $_POST["additional_total"];
	$additional_attended			= $_POST["additional_attended"];
	$additional_percentage			= $_POST["additional_percentage"];
	
	$english_total	        = $_POST["english_total"];
	$english_attended			= $_POST["english_attended"];
	$english_percentage			= $_POST["english_percentage"];
	
	$ds_total	        = $_POST["ds_total"];
	$ds_attended		= $_POST["ds_attended"];
	$ds_percentage			= $_POST["ds_percentage"];
	
	$dbms_total	        = $_POST["dbms_total"];
	$dbms_attended			= $_POST["dbms_attended"];
	$dbms_percentage			= $_POST["dbms_percentage"];
	
	$nsm_total	        = $_POST["nsm_total"];
	$nsm_attended			= $_POST["nsm_attended"];
	$nsm_percentage			= $_POST["nsm_percentage"];

	
	
	$total_percentage			= $_POST["total_percentage"];

	
	
	
	mysql_query("INSERT INTO `aigsonlinedb`.`second_attendance`(username,additional_total,additional_attended,additional_percentage,english_total,english_attended,english_percentage,ds_total,ds_attended,ds_percentage,dbms_total,dbms_attended,dbms_percentage,nsm_total,nsm_attended,nsm_percentage,total_percentage) VALUES ('$username','$additional_total','$additional_attended','$additional_percentage','$english_total','$english_attended','$english_percentage','$ds_total','$ds_attended','$ds_percentage','$dbms_total','$dbms_attended','$dbms_percentage','$nsm_total','$nsm_attended','$nsm_percentage','$total_percentage')") or die("ddnt work");
}else if(isset($_POST['submit3'])){

   $username		        = $_POST["username"];
	$additional_total		        = $_POST["additional_total"];
	$additional_attended			= $_POST["additional_attended"];
	$additional_percentage			= $_POST["additional_percentage"];
	
	$english_total	        = $_POST["english_total"];
	$english_attended			= $_POST["english_attended"];
	$english_percentage			= $_POST["english_percentage"];
	
	$cplusplus_total	        = $_POST["cplusplus_total"];
	$cplusplus_attended		= $_POST["cplusplus_attended"];
	$cplusplus_percentage			= $_POST["cplusplus_percentage"];
	
	$fam_total	        = $_POST["fam_total"];
	$fam_attended			= $_POST["fam_attended"];
	$fam_percentage			= $_POST["fam_percentage"];
	
	$op_total	        = $_POST["op_total"];
	$op_attended			= $_POST["op_attended"];
	$op_percentage			= $_POST["op_percentage"];

	
	
	$total_percentage			= $_POST["total_percentage"];

	
	
	
	mysql_query("INSERT INTO `aigsonlinedb`.`third_attendance`(username,additional_total,additional_attended,additional_percentage,english_total,english_attended,english_percentage,cplusplus_total,cplusplus_attended,cplusplus_percentage,fam_total,fam_attended,fam_percentage,op_total,op_attended,op_percentage,total_percentage) VALUES ('$username','$additional_total','$additional_attended','$additional_percentage','$english_total','$english_attended','$english_percentage','$cplusplus_total','$cplusplus_attended','$cplusplus_percentage','$fam_total','$fam_attended','$fam_percentage','$op_total','$op_attended','$op_percentage','$total_percentage')") or die("ddnt work");
}
else if(isset($_POST['submit4'])){

   $username		        = $_POST["username"];
	$additional_total		        = $_POST["additional_total"];
	$additional_attended			= $_POST["additional_attended"];
	$additional_percentage			= $_POST["additional_percentage"];
	
	$english_total	        = $_POST["english_total"];
	$english_attended			= $_POST["english_attended"];
	$english_percentage			= $_POST["english_percentage"];
	
	$vp_total	        = $_POST["vp_total"];
	$vp_attended		= $_POST["vp_attended"];
	$vp_percentage			= $_POST["vp_percentage"];
	
	$unix_total	        = $_POST["unix_total"];
	$unix_attended			= $_POST["unix_attended"];
	$unix_percentage			= $_POST["unix_percentage"];
	
	$or_total	        = $_POST["or_total"];
	$or_attended			= $_POST["or_attended"];
	$or_percentage			= $_POST["or_percentage"];

	
	
	$total_percentage			= $_POST["total_percentage"];

	
	
	
	mysql_query("INSERT INTO `aigsonlinedb`.`fourth_attendance`(username,additional_total,additional_attended,additional_percentage,english_total,english_attended,english_percentage,vp_total,vp_attended,vp_percentage,unix_total,unix_attended,unix_percentage,or_total,or_attended,or_percentage,total_percentage) VALUES ('$username','$additional_total','$additional_attended','$additional_percentage','$english_total','$english_attended','$english_percentage','$vp_total','$vp_attended','$vp_percentage','$unix_total','$unix_attended','$unix_percentage','$or_total','$or_attended','$or_percentage','$total_percentage')") or die("ddnt work");
}
else if(isset($_POST['submit5'])){

   $username		        = $_POST["username"];
	$java_total		        = $_POST["java_total"];
	$java_attended			= $_POST["java_attended"];
	$java_percentage			= $_POST["java_percentage"];
	
	$sspd_total	        = $_POST["sspd_total"];
	$sspd_attended			= $_POST["sspd_attended"];
	$sspd_percentage			= $_POST["sspd_percentage"];
	
	$se_total	        = $_POST["se_total"];
	$se_attended		= $_POST["se_attended"];
	$se_percentage			= $_POST["se_percentage"];
	
	$ca_total	        = $_POST["ca_total"];
	$ca_attended			= $_POST["ca_attended"];
	$ca_percentage			= $_POST["ca_percentage"];
	
	$bi_total	        = $_POST["bi_total"];
	$bi_attended			= $_POST["bi_attended"];
	$bi_percentage			= $_POST["bi_percentage"];

	
	
	$total_percentage			= $_POST["total_percentage"];

	
	
	
	mysql_query("INSERT INTO `aigsonlinedb`.`five_attendance`(username,java_total,java_attended,java_percentage,sspd_total,sspd_attended,sspd_percentage,se_total,se_attended,se_percentage,ca_total,ca_attended,ca_percentage,bi_total,bi_attended,bi_percentage,total_percentage) VALUES ('$username','$java_total','$java_attended','$java_percentage','$sspd_total','$sspd_attended','$sspd_percentage','$se_total','$se_attended','$se_percentage','$ca_total','$ca_attended','$ca_percentage','$bi_total','$bi_attended','$bi_percentage','$total_percentage')") or die("ddnt work");
}else if(isset($_POST['submit6'])){

   $username		        = $_POST["username"];
	$ada_total		        = $_POST["ada_total"];
	$ada_attended			= $_POST["ada_attended"];
	$ada_percentage			= $_POST["ada_percentage"];
	
	$wp_total	        = $_POST["wp_total"];
	$wp_attended			= $_POST["wp_attended"];
	$wp_percentage			= $_POST["wp_percentage"];
	
	$sp_total	        = $_POST["sp_total"];
	$sp_attended		= $_POST["sp_attended"];
	$sp_percentage			= $_POST["sp_percentage"];
	
	$cg_total	        = $_POST["cg_total"];
	$cg_attended			= $_POST["cg_attended"];
	$cg_percentage			= $_POST["cg_percentage"];
	

	
	
	$total_percentage			= $_POST["total_percentage"];

	
	
	
	mysql_query("INSERT INTO `aigsonlinedb`.`six_attendance`(username,ada_total,ada_attended,ada_percentage,wp_total,wp_attended,wp_percentage,sp_total,sp_attended,sp_percentage,cg_total,cg_attended,cg_percentage,total_percentage) VALUES ('$username','$ada_total','$ada_attended','$ada_percentage','$wp_total','$wp_attended','$wp_percentage','$sp_total','$sp_attended','$sp_percentage','$cg_total','$cg_attended','$cg_percentage','$total_percentage')") or die("ddnt work");
}
?>

<form action="" method="POST">
Select the semester: 
<select name="semester">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
</select>
<input type="submit" value="Extract" name="submit">
</form>
</br>
<?php
if(isset($_POST['submit']))
{
	$semester = $_POST['semester'];
	//echo $semester;
	if($semester == 1){
		echo '<form action="" method="POST">';

		
		

echo '<table style="table-layout: fixed; width: 100%;">';
echo'
	<th>Username</th>
	<th colspan="3" style="text-align:center";>Additional Language </th>
	<th colspan="3" style="text-align:center";>English</th>
	<th colspan="3" style="text-align:center";>C Language</th>';
	echo '<th colspan="3" style="text-align:center";>Digital Electronics</th>';
	echo '<tr>';
	echo '<td>';
	echo "Registration No.";
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
	echo  '<td >';
    echo '<input type="text" size="3" name="username" />';
	echo '</td>';
	echo  '<td >';
    echo '<input type="text" size="3" name="additional_total" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="additional_attended" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="additional_percentage" />';
	echo '</td>';
	echo  '<td >';
    echo '<input type="text" size="3" name="english_total" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="english_attended" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="english_percentage" />';
	echo '</td>';
	echo  '<td >';
    echo '<input type="text" size="3" name="c_total" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="c_attended" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="c_percentage" />';
	echo '</td>';
	echo  '<td >';
    echo '<input type="text" size="3" name="de_total" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="de_attended" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="de_percentage" />';
	echo '</td>';
	echo '</tr>';
	
	echo '<tr>';
	echo '
    <th colspan="3" style="text-align:center";>Discrete Mathematics</th>
	<th colspan="3" style="text-align:center";>Compuer Fundamental</th>
	<th colspan="3"  rowspan="2" style="text-align:center";>Total Percentage</th>';
	echo '</tr>';
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
	echo '</tr>';
	echo '<tr>';
	
	
	
	
	
	echo  '<td >';
    echo '<input type="text" size="3" name="dm_total" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="dm_attended" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="dm_percentage" />';
	echo '</td>';
	echo  '<td >';
    echo '<input type="text" size="3" name="cf_total" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="cf_attended" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="cf_percentage" />';
	echo '</td>';
	echo  '<td colspan="3">';
    echo '<input type="text" size="3" name="total_percentage" />';
	echo '</td>';
	echo '</table>';
	echo '<input type="submit" value="Submit" name="submit1"/>';
	echo '</form>';	
	}
	else
		if($semester == 2){
echo '<form action="" method="POST">';

		
		
echo '<table style="table-layout: fixed; width: 100%;">';
echo'
	<th>Username</th>
	<th colspan="3" style="text-align:center";>Additional Language </th>
	<th colspan="3" style="text-align:center";>English</th>
	<th colspan="3" style="text-align:center";>Data structure</th>';
	echo '<tr>';
	echo '<td>';
	echo "Registration No.";
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
	echo  '<td >';
    echo '<input type="text" size="3" name="username" />';
	echo '</td>';
	echo  '<td >';
    echo '<input type="text" size="3" name="additional_total" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="additional_attended" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="additional_percentage" />';
	echo '</td>';
	echo  '<td >';
    echo '<input type="text" size="3" name="english_total" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="english_attended" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="english_percentage" />';
	echo '</td>';
	echo  '<td >';
    echo '<input type="text" size="3" name="ds_total" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="ds_attended" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="ds_percentage" />';
	echo '</td>';
	echo '</tr>';
	
	echo '<tr>';
	echo '<th colspan="3" style="text-align:center";>Database Management System</th>
    <th colspan="3" style="text-align:center";>NSM</th>
	
	<th colspan="3"  rowspan="2" style="text-align:center";>Total Percentage</th>';
	echo '</tr>';
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
	
	echo '</tr>';
	echo '<tr>';
	
	
	
	
	echo  '<td >';
    echo '<input type="text" size="3" name="dbms_total" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="dbms_attended" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="dbms_percentage" />';
	echo '</td>';
	echo  '<td >';
    echo '<input type="text" size="3" name="nsm_total" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="nsm_attended" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="nsm_percentage" />';
	echo '</td>';
	
	echo  '<td colspan="3">';
    echo '<input type="text" size="25" name="total_percentage" />';
	echo '</td>';
	echo '</table>';
	echo '<input type="submit" value="Submit" name="submit2"/>';
	echo '</form>';	
	}
	else
		if($semester == 3){
echo '<form action="" method="POST">';

		
		
echo '<table style="table-layout: fixed; width: 100%;">';
echo'
	<th>Username</th>
	<th colspan="3" style="text-align:center";>Additional Language </th>
	<th colspan="3" style="text-align:center";>English</th>
	<th colspan="3" style="text-align:center";>C++</th>';
	echo '<tr>';
	echo '<td>';
	echo "Registration No.";
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
	echo  '<td >';
    echo '<input type="text" size="3" name="username" />';
	echo '</td>';
	echo  '<td >';
    echo '<input type="text" size="3" name="additional_total" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="additional_attended" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="additional_percentage" />';
	echo '</td>';
	echo  '<td >';
    echo '<input type="text" size="3" name="english_total" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="english_attended" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="english_percentage" />';
	echo '</td>';
	echo  '<td >';
    echo '<input type="text" size="3" name="cplusplus_total" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="cplusplus_attended" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="cplusplus_percentage" />';
	echo '</td>';
	echo '</tr>';
	
	echo '<tr>';
	echo '<th colspan="3" style="text-align:center";>FAM</th>
    <th colspan="3" style="text-align:center";>OP</th>
	
	<th colspan="3"  rowspan="2" style="text-align:center";>Total Percentage</th>';
	echo '</tr>';
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
	
	echo '</tr>';
	echo '<tr>';
	
	
	
	
	echo  '<td >';
    echo '<input type="text" size="3" name="fam_total" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="fam_attended" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="fam_percentage" />';
	echo '</td>';
	echo  '<td >';
    echo '<input type="text" size="3" name="op_total" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="op_attended" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="op_percentage" />';
	echo '</td>';
	
	echo  '<td colspan="3">';
    echo '<input type="text" size="25" name="total_percentage" />';
	echo '</td>';
	echo '</table>';
	echo '<input type="submit" value="Submit" name="submit3"/>';
	echo '</form>';	
	}
	else
		if($semester == 4){
echo '<form action="" method="POST">';

		
		

echo '<table style="table-layout: fixed; width: 100%;">';
echo'
	<th>Username</th>
	<th colspan="3" style="text-align:center";>Additional Language </th>
	<th colspan="3" style="text-align:center";>English</th>
	<th colspan="3" style="text-align:center";>Visul Programming</th>';
	echo '<tr>';
	echo '<td>';
	echo "Registration No.";
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
	echo  '<td >';
    echo '<input type="text" size="3" name="username" />';
	echo '</td>';
	echo  '<td >';
    echo '<input type="text" size="3" name="additional_total" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="additional_attended" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="additional_percentage" />';
	echo '</td>';
	echo  '<td >';
    echo '<input type="text" size="3" name="english_total" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="english_attended" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="english_percentage" />';
	echo '</td>';
	echo  '<td >';
    echo '<input type="text" size="3" name="vp_total" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="vp_attended" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="vp_percentage" />';
	echo '</td>';
	echo '</tr>';
	
	echo '<tr>';
	echo '<th colspan="3" style="text-align:center";>Unix</th>
    <th colspan="3" style="text-align:center";>OR</th>
	
	<th colspan="3"  rowspan="2" style="text-align:center";>Total Percentage</th>';
	echo '</tr>';
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
	
	echo '</tr>';
	echo '<tr>';
	
	
	
	
	echo  '<td >';
    echo '<input type="text" size="3" name="unix_total" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="unix_attended" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="unix_percentage" />';
	echo '</td>';
	echo  '<td >';
    echo '<input type="text" size="3" name="or_total" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="or_attended" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="or_percentage" />';
	echo '</td>';
	
	echo  '<td colspan="3">';
    echo '<input type="text" size="25" name="total_percentage" />';
	echo '</td>';
	echo '</table>';
	echo '<input type="submit" value="Submit" name="submit4"/>';
	echo '</form>';	
	}
	
		else
		if($semester == 5){
echo '<form action="" method="POST">';

		
		
echo '<table style="table-layout: fixed; width: 100%;">';
echo'
	<th>Username</th>
	<th colspan="3" style="text-align:center";>JAVA </th>
	<th colspan="3" style="text-align:center";>SSPD</th>
	<th colspan="3" style="text-align:center";>SE</th>';
	echo '<tr>';
	echo '<td>';
	echo "Registration No.";
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
	echo  '<td >';
    echo '<input type="text" size="3" name="username" />';
	echo '</td>';
	echo  '<td >';
    echo '<input type="text" size="3" name="java_total" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="java_attended" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="java_percentage" />';
	echo '</td>';
	echo  '<td >';
    echo '<input type="text" size="3" name="sspd_total" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="sspd_attended" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="sspd_percentage" />';
	echo '</td>';
	echo  '<td >';
    echo '<input type="text" size="3" name="se_total" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="se_attended" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="se_percentage" />';
	echo '</td>';
	echo '</tr>';
	
	echo '<tr>';
	echo '<th colspan="3" style="text-align:center";>CA</th>
    <th colspan="3" style="text-align:center";>BI</th>
	
	<th colspan="3"  rowspan="2" style="text-align:center";>Total Percentage</th>';
	echo '</tr>';
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
	
	echo '</tr>';
	echo '<tr>';
	
	
	
	
	echo  '<td >';
    echo '<input type="text" size="3" name="ca_total" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="ca_attended" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="ca_percentage" />';
	echo '</td>';
	echo  '<td >';
    echo '<input type="text" size="3" name="bi_total" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="bi_attended" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="bi_percentage" />';
	echo '</td>';
	
	echo  '<td colspan="3">';
    echo '<input type="text" size="25" name="total_percentage" />';
	echo '</td>';
	echo '</table>';
	echo '<input type="submit" value="Submit" name="submit5"/>';
	echo '</form>';	
	}
		else
		if($semester == 6){
echo '<form action="" method="POST">';

		
		

 echo '<table style="table-layout: fixed; width: 100%;">';
echo'
	<th>Username</th>
	<th colspan="3" style="text-align:center";>ADA </th>
	<th colspan="3" style="text-align:center";>WP</th>
	<th colspan="3" style="text-align:center";>SP</th>';
	echo '<tr>';
	echo '<td>';
	echo "Registration No.";
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
	echo  '<td >';
    echo '<input type="text" size="3" name="username" />';
	echo '</td>';
	echo  '<td >';
    echo '<input type="text" size="3" name="ada_total" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="ada_attended" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="ada_percentage" />';
	echo '</td>';
	echo  '<td >';
    echo '<input type="text" size="3" name="wp_total" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="wp_attended" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="wp_percentage" />';
	echo '</td>';
	echo  '<td >';
    echo '<input type="text" size="3" name="sp_total" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="sp_attended" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="sp_percentage" />';
	echo '</td>';
	echo '</tr>';
	
	echo '<tr>';
	echo '<th colspan="3" style="text-align:center";>Computer Graphics</th>
 
	
	<th colspan="3"  rowspan="2" style="text-align:center";>Total Percentage</th>';
	echo '</tr>';
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
	
	
	echo '</tr>';
	echo '<tr>';
	
	
	
	
	echo  '<td >';
    echo '<input type="text" size="3" name="cg_total" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="cg_attended" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="3" name="cg_percentage" />';
	echo '</td>';
	
	
	echo  '<td colspan="3">';
    echo '<input type="text" size="25" name="total_percentage" />';
	echo '</td>';
	echo '</table>';
	echo '<input type="submit" value="Submit" name="submit6"/>';
	echo '</form>';	
	}
}

?>
<?php include 'includes/overall/footer.php';?>


