
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
<h1 align="center" style="font-family:verdana;">Internals Results</h1>
<h1 align="center" style="font-family:verdana;">Admin Panel</h1>

<style>
table {
    border-collapse: collapse;
	//background-color:#708ce5;
	background-color:white;
	margin-left:200px;
	margin-top:20px;
}

table, td, tr {
	
	align:center;
	text-align: center;
	padding: 5px;
  
	
    border: 1px solid black;
}
tr {
    background-color:#242129;
    color: white;
	height: 30px;
	widtr:300px;
}


</style>


	<?php
if(isset($_POST['submit1'])){
	$additional_Max		       		= $_POST["additional_Max"];
	$additional_Min 				= $_POST["additional_Min"];
	$additional_Obtained			= $_POST["additional_Obtained"];
	
	$english_Max	       		    = $_POST["english_Max"];
	$english_Min					= $_POST["english_Min"];
	$english_Obtained				= $_POST["english_Obtained"];
	
	$c_Max	        				= $_POST["c_Max"];
	$c_Min							= $_POST["c_Min"];
	$c_Obtained						= $_POST["c_Obtained"];
	
	$de_Max	        				= $_POST["de_Max"];
	$de_Min							= $_POST["de_Min"];
	$de_Obtained					= $_POST["de_Obtained"];
	
	$dm_Max	        				= $_POST["dm_Max"];
	$dm_Min							= $_POST["dm_Min"];
	$dm_Obtained					= $_POST["dm_Obtained"];

	
	$cf_Max	       				    = $_POST["cf_Max"];
	$cf_Min							= $_POST["cf_Min"];
	$cf_Obtained					= $_POST["cf_Obtained"];
	
	$username = $_SESSION['username'];
	$semester = $_SESSION['semester'];
	$internals = $_SESSION['internals'];
	

	mysql_query("INSERT INTO `aigsonlinedb`.`first_result`(username,semester,internals,additional_Max,additional_Min,additional_Obtained,english_Max,english_Min,english_Obtained,c_Max,c_Min,c_Obtained,de_Max,de_Min,de_Obtained,dm_Max,dm_Min,dm_Obtained,cf_Max,cf_Min,cf_Obtained) VALUES ('$username','$semester','$internals','$additional_Max','$additional_Min','$additional_Obtained','$english_Max','$english_Min','$english_Obtained','$c_Max','$c_Min','$c_Obtained','$de_Max','$de_Min','$de_Obtained','$dm_Max','$dm_Min','$dm_Obtained','$cf_Max','$cf_Min','$cf_Obtained')") or die("ddnt work");
	}
	?>
	
	
	
	<?php

   if(isset($_POST['submit2'])){
	
    $additional_Max		       		= $_POST["additional_Max"];
	$additional_Min 				= $_POST["additional_Min"];
	$additional_Obtained			= $_POST["additional_Obtained"];
	
	$english_Max	       		    = $_POST["english_Max"];
	$english_Min					= $_POST["english_Min"];
	$english_Obtained				= $_POST["english_Obtained"];
	
	$ds_Max	        				= $_POST["ds_Max"];
	$ds_Min							= $_POST["ds_Min"];
	$ds_Obtained					= $_POST["ds_Obtained"];
	
	$dbms_Max	        			= $_POST["dbms_Max"];
	$dbms_Min						= $_POST["dbms_Min"];
	$dbms_Obtained					= $_POST["dbms_Obtained"];
	
	$nsm_Max	        			= $_POST["nsm_Max"];
	$nsm_Min						= $_POST["nsm_Min"];
	$nsm_Obtained					= $_POST["nsm_Obtained"];

	
	
	$username = $_SESSION['username'];
	$semester = $_SESSION['semester'];
	$internals = $_SESSION['internals'];


	mysql_query("INSERT INTO `aigsonlinedb`.`second_result`(username,semester,internals,additional_Max,additional_Min,additional_Obtained,english_Max,english_Min,english_Obtained,ds_Max,ds_Min,ds_Obtained,dbms_Max,dbms_Min,dbms_Obtained,nsm_Max,nsm_Min,nsm_Obtained) VALUES ('$username','$semester','$internals','$additional_Max','$additional_Min','$additional_Obtained','$english_Max','$english_Min','$english_Obtained','$ds_Max','$ds_Min','$ds_Obtained','$dbms_Max','$dbms_Min','$dbms_Obtained','$nsm_Max','$nsm_Min','$nsm_Obtained')") or die("ddnt work");
	
   }
?>

<?php

   if(isset($_POST['submit3'])){
	
    $additional_Max		       		= $_POST["additional_Max"];
	$additional_Min 				= $_POST["additional_Min"];
	$additional_Obtained			= $_POST["additional_Obtained"];
	
	$english_Max	       		    = $_POST["english_Max"];
	$english_Min					= $_POST["english_Min"];
	$english_Obtained				= $_POST["english_Obtained"];
	
	$cplusplus_Max	        				= $_POST["cplusplus_Max"];
	$cplusplus_Min							= $_POST["cplusplus_Min"];
	$cplusplus_Obtained					= $_POST["cplusplus_Obtained"];
	
	$fam_Max	        			= $_POST["fam_Max"];
	$fam_Min						= $_POST["fam_Min"];
	$fam_Obtained					= $_POST["fam_Obtained"];
	
	$op_Max	        			= $_POST["op_Max"];
	$op_Min						= $_POST["op_Min"];
	$op_Obtained					= $_POST["op_Obtained"];

	
	
	$username = $_SESSION['username'];
	$semester = $_SESSION['semester'];
	$internals = $_SESSION['internals'];


	mysql_query("INSERT INTO `aigsonlinedb`.`third_result`(username,semester,internals,additional_Max,additional_Min,additional_Obtained,english_Max,english_Min,english_Obtained,cplusplus_Max,cplusplus_Min,cplusplus_Obtained,fam_Max,fam_Min,fam_Obtained,op_Max,op_Min,op_Obtained) VALUES ('$username','$semester','$internals','$additional_Max','$additional_Min','$additional_Obtained','$english_Max','$english_Min','$english_Obtained','$cplusplus_Max','$cplusplus_Min','$cplusplus_Obtained','$fam_Max','$fam_Min','$fam_Obtained','$op_Max','$op_Min','$op_Obtained')") or die("ddnt work");
	
   }
?>

<?php

   if(isset($_POST['submit4'])){
	
    $additional_Max		       		= $_POST["additional_Max"];
	$additional_Min 				= $_POST["additional_Min"];
	$additional_Obtained			= $_POST["additional_Obtained"];
	
	$english_Max	       		    = $_POST["english_Max"];
	$english_Min					= $_POST["english_Min"];
	$english_Obtained				= $_POST["english_Obtained"];
	
	$vp_Max	        				= $_POST["vp_Max"];
	$vp_Min							= $_POST["vp_Min"];
	$vp_Obtained					= $_POST["vp_Obtained"];
	
	$unix_Max	        			= $_POST["unix_Max"];
	$unix_Min						= $_POST["unix_Min"];
	$unix_Obtained					= $_POST["unix_Obtained"];
	
	$or_Max	        			= $_POST["or_Max"];
	$or_Min						= $_POST["or_Min"];
	$or_Obtained				= $_POST["or_Obtained"];

	
	
	$username = $_SESSION['username'];
	$semester = $_SESSION['semester'];
	$internals = $_SESSION['internals'];


	mysql_query("INSERT INTO `aigsonlinedb`.`fourth_result`(username,semester,internals,additional_Max,additional_Min,additional_Obtained,english_Max,english_Min,english_Obtained,vp_Max,vp_Min,vp_Obtained,unix_Max,unix_Min,unix_Obtained,or_Max,or_Min,or_Obtained) VALUES ('$username','$semester','$internals','$additional_Max','$additional_Min','$additional_Obtained','$english_Max','$english_Min','$english_Obtained','$vp_Max','$vp_Min','$vp_Obtained','$unix_Max','$unix_Min','$unix_Obtained','$or_Max','$or_Min','$or_Obtained')") or die("ddnt work");
	
   }
?>

<?php

   if(isset($_POST['submit5'])){
	
    $java_Max		       		= $_POST["java_Max"];
	$java_Min 				= $_POST["java_Min"];
	$java_Obtained			= $_POST["java_Obtained"];
	
	$sspd_Max	       		    = $_POST["sspd_Max"];
	$sspd_Min					= $_POST["sspd_Min"];
	$sspd_Obtained				= $_POST["sspd_Obtained"];
	
	$se_Max	        				= $_POST["se_Max"];
	$se_Min							= $_POST["se_Min"];
	$se_Obtained					= $_POST["se_Obtained"];
	
	$ca_Max	        			= $_POST["ca_Max"];
	$ca_Min						= $_POST["ca_Min"];
	$ca_Obtained					= $_POST["ca_Obtained"];
	
	$bi_Max	        			= $_POST["bi_Max"];
	$bi_Min						= $_POST["bi_Min"];
	$bi_Obtained				= $_POST["bi_Obtained"];

	
	
	$username = $_SESSION['username'];
	$semester = $_SESSION['semester'];
	$internals = $_SESSION['internals'];


	mysql_query("INSERT INTO `aigsonlinedb`.`five_result`(username,semester,internals,java_Max,java_Min,java_Obtained,sspd_Max,sspd_Min,sspd_Obtained,se_Max,se_Min,se_Obtained,ca_Max,ca_Min,ca_Obtained,bi_Max,bi_Min,bi_Obtained) VALUES ('$username','$semester','$internals','$java_Max','$java_Min','$java_Obtained','$sspd_Max','$sspd_Min','$sspd_Obtained','$se_Max','$se_Min','$se_Obtained','$ca_Max','$ca_Min','$ca_Obtained','$bi_Max','$bi_Min','$bi_Obtained')") or die("ddnt work");
	
   }
?>

<?php

   if(isset($_POST['submit6'])){
	
    $ada_Max		       		= $_POST["ada_Max"];
	$ada_Min 				= $_POST["ada_Min"];
	$ada_Obtained			= $_POST["ada_Obtained"];
	
	$wp_Max	       		    = $_POST["wp_Max"];
	$wp_Min					= $_POST["wp_Min"];
	$wp_Obtained				= $_POST["wp_Obtained"];
	
	$sp_Max	        				= $_POST["sp_Max"];
	$sp_Min							= $_POST["sp_Min"];
	$sp_Obtained					= $_POST["sp_Obtained"];
	
	$cg_Max	        			= $_POST["cg_Max"];
	$cg_Min						= $_POST["cg_Min"];
	$cg_Obtained					= $_POST["cg_Obtained"];
	
	$username = $_SESSION['username'];
	$semester = $_SESSION['semester'];
	$internals = $_SESSION['internals'];


	mysql_query("INSERT INTO `aigsonlinedb`.`six_result`(username,semester,internals,ada_Max,ada_Min,ada_Obtained,wp_Max,wp_Min,wp_Obtained,sp_Max,sp_Min,sp_Obtained,cg_Max,cg_Min,cg_Obtained) VALUES ('$username','$semester','$internals','$ada_Max','$ada_Min','$ada_Obtained','$wp_Max','$wp_Min','$wp_Obtained','$sp_Max','$sp_Min','$sp_Obtained','$cg_Max','$cg_Min','$cg_Obtained')") or die("ddnt work");
	
   }
?>


<form action="" method="POST">
Enter the Registration number:
<input type="text" name="username">
Select the enternal:
<select name="internals">
<option>1</option>
<option>2</option>
<option>3</option>
</select>
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

<?php
if(isset($_POST['submit'])){

	
	$_SESSION['username']		= $_POST["username"];
	$_SESSION['semester']		= $_POST["semester"];
	$_SESSION['internals']		= $_POST["internals"];
	
	
	 //echo $_SESSION['username'];
	 //echo $_POST["semester"];
	//mysql_query("INSERT INTO `aigsonlinedb`.`first_result`(username,semester,internals) VALUES ('$username','$semester','$internals'") or die("ddnt work");

	
if($_POST['semester']==1){
echo '<form action="" method="POST">';
echo '<table>';
echo'
<tr>
<td>Subject</td>

    ';
    echo '<td>';
	echo "Max";
	echo '</td>';
	echo '<td>';
	echo "Min";
	echo '</td>';
	echo '<td>';
	echo "Obtained";
	echo '</td></tr>';
	echo'
	<tr>
	<td>Additional Language </td>';
	echo  '<td >';
    echo '<input type="text" size="10" name="additional_Max" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="additional_Min" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="additional_Obtained" />';
	echo '</td>
	</tr>';
	echo '<tr  style="text-align:center";><td>English</td>';
	echo  '<td >';
    echo '<input type="text" size="10" name="english_Max" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="english_Min" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="english_Obtained" />';
	echo '</td>
	</tr>';
	echo'
	<tr  style="text-align:center";><td>C Language</td>';
	
	echo  '<td >';
    echo '<input type="text" size="10" name="c_Max" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="c_Min" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="c_Obtained" />';
	echo '</td>
	</tr>';
	echo'
	<tr style="text-align:center";><td>Digital Electronics</td>';
	echo  '<td >';
    echo '<input type="text" size="10" name="de_Max" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="de_Min" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="de_Obtained" />';
	echo '</td>
	</tr>';
	echo'
    <tr style="text-align:center";><td>Discrete Matrematics</td>';
	echo  '<td >';
    echo '<input type="text" size="10" name="dm_Max" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="dm_Min" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="dm_Obtained" />';
	echo '</td>
	</tr>';
	echo'
	<tr style="text-align:center";><td>Compuer Fundamental</td>';
	
	echo  '<td >';
    echo '<input type="text" size="10" name="cf_Max" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="cf_Min" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="cf_Obtained" />';
	echo '</td>
	</tr>';
	
	echo '</table>';
	echo '<input type="submit" value="Submit" name="submit1"/>';
	echo '</form>';	
	}
	else
	if($_POST['semester'] == 2){
		echo '<form action="" method="POST">';
echo '<table>';
echo'
<tr>
<td>Subject</td>

    ';
    echo '<td>';
	echo "Max";
	echo '</td>';
	echo '<td>';
	echo "Min";
	echo '</td>';
	echo '<td>';
	echo "Obtained";
	echo '</td></tr>';
	echo'
	<tr>
	<td>Additional Language </td>';
	echo  '<td >';
    echo '<input type="text" size="10" name="additional_Max" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="additional_Min" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="additional_Obtained" />';
	echo '</td>
	</tr>';
	echo '<tr  style="text-align:center";><td>English</td>';
	echo  '<td >';
    echo '<input type="text" size="10" name="english_Max" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="english_Min" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="english_Obtained" />';
	echo '</td>
	</tr>';
	echo'
	<tr  style="text-align:center";><td>Data Structures</td>';
	
	echo  '<td >';
    echo '<input type="text" size="10" name="ds_Max" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="ds_Min" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="ds_Obtained" />';
	echo '</td>
	</tr>';
	echo'
	<tr style="text-align:center";><td>Database Management system</td>';
	echo  '<td >';
    echo '<input type="text" size="10" name="dbms_Max" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="dbms_Min" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="dbms_Obtained" />';
	echo '</td>
	</tr>';
	echo'
    <tr style="text-align:center";><td>NSM</td>';
	echo  '<td >';
    echo '<input type="text" size="10" name="nsm_Max" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="nsm_Min" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="nsm_Obtained" />';
	echo '</td>
	</tr>';
	
	
	echo '</table>';
	echo '<input type="submit" value="Submit" name="submit2"/>';
	echo '</form>';	
	}
	else
	if($_POST['semester']==3){
		echo '<form action="" method="POST">';
echo '<table>';
echo'
<tr>
<td>Subject</td>

    ';
    echo '<td>';
	echo "Max";
	echo '</td>';
	echo '<td>';
	echo "Min";
	echo '</td>';
	echo '<td>';
	echo "Obtained";
	echo '</td></tr>';
	echo'
	<tr>
	<td>Additional Language </td>';
	echo  '<td >';
    echo '<input type="text" size="10" name="additional_Max" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="additional_Min" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="additional_Obtained" />';
	echo '</td>
	</tr>';
	echo '<tr  style="text-align:center";><td>English</td>';
	echo  '<td >';
    echo '<input type="text" size="10" name="english_Max" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="english_Min" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="english_Obtained" />';
	echo '</td>
	</tr>';
	echo'
	<tr  style="text-align:center";><td>C++</td>';
	
	echo  '<td >';
    echo '<input type="text" size="10" name="cplusplus_Max" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="cplusplus_Min" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="cplusplus_Obtained" />';
	echo '</td>
	</tr>';
	echo'
	<tr style="text-align:center";><td>FAM</td>';
	echo  '<td >';
    echo '<input type="text" size="10" name="fam_Max" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="fam_Min" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="fam_Obtained" />';
	echo '</td>
	</tr>';
	echo'
    <tr style="text-align:center";><td>Operating System</td>';
	echo  '<td >';
    echo '<input type="text" size="10" name="op_Max" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="op_Min" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="op_Obtained" />';
	echo '</td>
	</tr>';
	
	
	echo '</table>';
	echo '<input type="submit" value="Submit" name="submit3"/>';
	echo '</form>';	
	}else
		if($_POST['semester']==4){
		echo '<form action="" method="POST">';
echo '<table>';
echo'
<tr>
<td>Subject</td>

    ';
    echo '<td>';
	echo "Max";
	echo '</td>';
	echo '<td>';
	echo "Min";
	echo '</td>';
	echo '<td>';
	echo "Obtained";
	echo '</td></tr>';
	echo'
	<tr>
	<td>Additional Language </td>';
	echo  '<td >';
    echo '<input type="text" size="10" name="additional_Max" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="additional_Min" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="additional_Obtained" />';
	echo '</td>
	</tr>';
	echo '<tr  style="text-align:center";><td>English</td>';
	echo  '<td >';
    echo '<input type="text" size="10" name="english_Max" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="english_Min" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="english_Obtained" />';
	echo '</td>
	</tr>';
	echo'
	<tr  style="text-align:center";><td>Visual Programming</td>';
	
	echo  '<td >';
    echo '<input type="text" size="10" name="vp_Max" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="vp_Min" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="vp_Obtained" />';
	echo '</td>
	</tr>';
	echo'
	<tr style="text-align:center";><td>Unix</td>';
	echo  '<td >';
    echo '<input type="text" size="10" name="unix_Max" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="unix_Min" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="unix_Obtained" />';
	echo '</td>
	</tr>';
	echo'
    <tr style="text-align:center";><td>Operational Research</td>';
	echo  '<td >';
    echo '<input type="text" size="10" name="or_Max" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="or_Min" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="or_Obtained" />';
	echo '</td>
	</tr>';
	
	
	echo '</table>';
	echo '<input type="submit" value="Submit" name="submit4"/>';
	echo '</form>';	
	}else
		if($_POST['semester']==5){
		echo '<form action="" method="POST">';
echo '<table>';
echo'
<tr>
<td>Subject</td>

    ';
    echo '<td>';
	echo "Max";
	echo '</td>';
	echo '<td>';
	echo "Min";
	echo '</td>';
	echo '<td>';
	echo "Obtained";
	echo '</td></tr>';
	echo'
	<tr>
	<td>Java </td>';
	echo  '<td >';
    echo '<input type="text" size="10" name="java_Max" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="java_Min" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="java_Obtained" />';
	echo '</td>
	</tr>';
	echo '<tr  style="text-align:center";><td>SSPD</td>';
	echo  '<td >';
    echo '<input type="text" size="10" name="sspd_Max" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="sspd_Min" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="sspd_Obtained" />';
	echo '</td>
	</tr>';
	echo'
	<tr  style="text-align:center";><td>Software Engineering</td>';
	
	echo  '<td >';
    echo '<input type="text" size="10" name="se_Max" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="se_Min" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="se_Obtained" />';
	echo '</td>
	</tr>';
	echo'
	<tr style="text-align:center";><td>Computer Architecture</td>';
	echo  '<td >';
    echo '<input type="text" size="10" name="ca_Max" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="ca_Min" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="ca_Obtained" />';
	echo '</td>
	</tr>';
	echo'
    <tr style="text-align:center";><td>Banking & Insurance</td>';
	echo  '<td >';
    echo '<input type="text" size="10" name="bi_Max" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="bi_Min" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="bi_Obtained" />';
	echo '</td>
	</tr>';
	
	
	echo '</table>';
	echo '<input type="submit" value="Submit" name="submit5"/>';
	echo '</form>';	
	}else
		if($_POST['semester']==6){
		echo '<form action="" method="POST">';
echo '<table>';
echo'
<tr>
<td>Subject</td>

    ';
    echo '<td>';
	echo "Max";
	echo '</td>';
	echo '<td>';
	echo "Min";
	echo '</td>';
	echo '<td>';
	echo "Obtained";
	echo '</td></tr>';
	echo'
	<tr>
	<td>ADA</td>';
	echo  '<td >';
    echo '<input type="text" size="10" name="ada_Max" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="ada_Min" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="ada_Obtained" />';
	echo '</td>
	</tr>';
	echo '<tr  style="text-align:center";><td>Web Programming</td>';
	echo  '<td >';
    echo '<input type="text" size="10" name="wp_Max" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="wp_Min" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="wp_Obtained" />';
	echo '</td>
	</tr>';
	echo'
	<tr  style="text-align:center";><td>System Programming</td>';
	
	echo  '<td >';
    echo '<input type="text" size="10" name="sp_Max" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="sp_Min" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="sp_Obtained" />';
	echo '</td>
	</tr>';
	echo'
	<tr style="text-align:center";><td>Computer Graphics</td>';
	echo  '<td >';
    echo '<input type="text" size="10" name="cg_Max" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="cg_Min" />';
	echo '</td>';
	echo  '<td>';
    echo '<input type="text" size="10" name="cg_Obtained" />';
	echo '</td>
	</tr>';
	
	
	
	echo '</table>';
	echo '<input type="submit" value="Submit" name="submit6"/>';
	echo '</form>';	
	}
}

?>
<?php include 'includes/overall/footer.php';?>


