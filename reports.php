<?php
include 'core/init.php';
//logged_in_redirect();
protect_page();
admin_protect();

include 'includes/overall/header.php';
?>

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
		<h1 align="center" style="font-family:verdana;"> Department of Compuer Applications</h1>
        <h1 align="center" style="font-family:verdana;">Reports</h1>
	
		<h1> Results Reports</h1>

		<ol type="I">
                <li><a href="report1.php" style="text-decoration:none;">First Semester Results Report</a></li> <br/>
                <li><a href="report2.php" style="text-decoration:none;">Second Semester Results Report</a></li> <br/>
                <li><a href="report3.php" style="text-decoration:none;">Third Semester Results Report</a></li> <br/>
                <li><a href="report4.php" style="text-decoration:none;">Fourth Semester Results Report</a></li> <br/>
                <li><a href="report5.php" style="text-decoration:none;">Fifth Semester Results Report</a></li> <br/>
                <li><a href="report6.php" style="text-decoration:none;">Sixth Semester Results Report</a></li> <br/>
				</ol>
				
				<div id="atan">
				
				
				<h1> Attendance Reports</h1>

		<ol type="I">
                <li><a href="report1a.php" style="text-decoration:none;">First Semester Attendance Report</a></li> <br/>
                <li><a href="report2a.php" style="text-decoration:none;">Second Semester Attendance Report</a></li> <br/>
                <li><a href="report3a.php" style="text-decoration:none;">Third Semester Attendance Report</a></li> <br/>
                <li><a href="report4a.php" style="text-decoration:none;">Fourth Semester Attendance Report</a></li> <br/>
                <li><a href="report5a.php" style="text-decoration:none;">Fifth Semester Attendance Report</a></li> <br/>
                <li><a href="report6a.php" style="text-decoration:none;">Sixth Semester Attendance Report</a></li> <br/>
				</ol>
				
				</div>
				
<?php include 'includes/overall/footer.php';?>