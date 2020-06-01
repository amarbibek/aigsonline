
<?php include 'core/init.php';
 protect_page();
 ?>
<?php include 'includes/overall/headerchat.php';?>
<br/>
<br/>
<h1 align="center" style="font-family:verdana;"> Department of Compuer Applications</h1>
<h1 align="center" style="font-family:verdana;">Chat Room</h1>
	
<div id="chatform">
<form method="post" action="chatsystem.php"> 
		<textarea name="msg" placeholder="Enter a message"></textarea>
		<input type="submit" name="submit" value="Send"/>
		
		</form>
		</div>
<div id="innercontainer">
		<div id="chat_box">
		<div id="chat"></div>
		</div>
		
	    <?php 
		if(isset($_POST['submit'])){ 
		
		$name = $user_data['first_name'];
		$msg = $_POST['msg'];
		
		$query = "INSERT INTO chat (name,msg) values ('$name','$msg')";
		
		$run = $con->query($query);
		
		if($run){
			echo "<embed loop='false' src='chat.wav' hidden='true' autoplay='true'/>";
		}
		
		
		}
		?>

</div>
<?php include 'includes/overall/footer.php';?>