<head>
    <title>AIGSOnline</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/screen.css">
	
	
	<style>
table {

    border-collapse: collapse;
	background-color:white;
  
}

table, td, th {
	align:center;
	text-align: center;
    border: 1px solid black;
   
}
th {
    background-color:#242129;
    color: white;
}
</style>
	
	
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