<?php
include 'core/init.php';
//logged_in_redirect();
protect_page();
admin_protect();

include 'includes/overall/headernotifications.php';
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
		</br>
		
<h1 style="font-family:verdana;"> Department of Compuer Applications</h1>
<h1 style="font-family:verdana;">NewsFeed Update</h1>
	 
        <form method="POST" action="adminnotifications.php"> 
		<label style="font-family:verdana;">Title:</label>
		<br/>
		<textarea name="text" placeholder="Enter the title"></textarea>
		<br/>
		<label style="font-family:verdana;">Any Link?</label>
		<br/>
	   <textarea name="msg" placeholder="place the link"></textarea>

		<input type="submit" name="submit" value="Send"/>
		</form>
	
	<?php
		if(isset($_POST['submit'])){ 
		$text = $_POST['text'];
		$msg = $_POST['msg'];
		mysql_query("INSERT INTO `aigsonlinedb`.`notifications`(text,msg) VALUES ('$text','$msg')");
		}
     ?>	
	 
	 
