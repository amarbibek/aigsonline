<?php
include 'core/init.php';
include 'includes/overall/header.php';?>
</br>
</br>
<h1 align="center" style="font-family:verdana;"> Department of Compuer Applications</h1>
<h1 align="center" style="font-family:verdana;">Your Query</h1>
<?php
if(isset($_POST)){
if (empty($_POST) === false) {
	
	
	$name		= $_POST['name'];
	$email		= $_POST['email'];
	$text	= $_POST['text'];

	mysql_query("INSERT INTO query (name, email, message) VALUES ('$name', '$email', '$text')");
	}
}
else{
	echo "something wrong!";
}

?>



			<form action="" method="post">
			<ul>
				
		
						<li>Name:<br>
						<input type="text" name="name" onkeypress="return onlyAlphabets(event,this);"  required placeholder="Your name here...">
						</li>
						
						<li>Email:<br>
						<input type="text" name="email" required placeholder="example@xyz.com">
						</li>
						<li>Query:<br>
						<textarea rows="10" cols="28" name="text" placeholder="Ask something!" required></textarea>
						</li>
						<input type="submit" value="submit"/>
				
						
			<ul>
			</form>
<?php include 'includes/overall/footer.php';?>