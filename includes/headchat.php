<head>
    <meta charset="UTF-8">
    <title>AIGSOnline</title>
	<link rel="stylesheet" href="css/screen.css">
	<link rel="stylesheet" href="style.css" media="all"/>
	<?php include 'db.php'; ?>
	
	
	<style>
		table {
			border-collapse: collapse;
			//background-color:#708ce5;
			background-color:white;
		}

		table, td, th {
			align:center;
			text-align: center;
			padding:5px;
			text-align: left;
			border: 1px solid black;
		}
		th {
			background-color:#242129;
			color: white;
		}
</style>
	<script>
		function ajax(){
		
		var req = new XMLHttpRequest();
		
		req.onreadystatechange = function(){
		
		if(req.readyState == 4 && req.status == 200){
		
		document.getElementById('chat').innerHTML = req.responseText;
		} 
		}
		req.open('GET','chat.php',true); 
		req.send();
		
		}
		setInterval(function(){ajax()},1000);
	</script>
	
	
	<script language="Javascript" type="text/javascript">

        function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
                    return true;
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }

    </script>
	
	<script language="javascript" type="text/javascript">
	$(document).ready(function(){
    $("#datepicker").datepicker({
        numberOfMonths: 1,
        onSelect: function(selected) {
          $("#datepicker1").datepicker("option","minDate", selected)
        }
    });
    $("#datepicker1").datepicker({ 
        numberOfMonths: 1,
        onSelect: function(selected) {
           $("#datepicker").datepicker("option","maxDate", selected)
        }
    });  
});
</script>

</head>