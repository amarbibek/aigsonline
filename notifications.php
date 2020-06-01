<?php
include 'core/init.php';
include 'includes/overall/header.php';?>
</br>
</br>
<h1 align="center" style="font-family:verdana;"> Department of Compuer Applications</h1>
<h1 align="center" style="font-family:verdana;">Notifications</h1>
</br>
</br>
 <?php 
	include 'db.php';
	$query = "SELECT * FROM notifications ORDER BY id DESC";
	$run = $con->query($query);
	while($row = $run->fetch_array()) :
	?>
			<div id="chat_data">
			<h1><span style="color:green;"><?php echo $row['text']; ?></span></h1>
		<h4>	<?php echo '<a href="' . $row['msg'] . '">'; ?><span  style="color:black;"> <?php echo $row['msg']; ?> </span> <?php echo '</a>';?> </h4>
            <span style="float:right; "><?php echo formatDate($row['date']); ?></span>
			</div>
			<hr/>
			
	<?php endwhile;?>
    <?php include 'includes/overall/footer.php';?>