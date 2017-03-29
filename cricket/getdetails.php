<?php 
	define('DB_HOST', 'localhost'); 
	define('DB_NAME', 'cricketdb');
	define('DB_USER','root');
	define('DB_PASSWORD','');
	$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) ;
	if (isset($_POST['submit1'])){
		$name = mysqli_real_escape_string($con,$_POST['name1']);
		$span = mysqli_real_escape_string($con,$_POST['span1']);
		$matches = mysqli_real_escape_string($con,$_POST['matches1']);
		$q1="select * from batting where Player='$name' and Span='$span' and Mat='$matches' ";
		$q2="select * from bowling where Player='$name' and Span='$span' and Mat='$matches' ";
		$r1=mysqli_query($con,$q1);
		$r12=mysqli_query($con,$q1);
		$r2=mysqli_query($con,$q2);
		$r22=mysqli_query($con,$q2);
	}

?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Details</title>
	<style type="text/css">
	.form-style-5{
		min-width: 500px;
		max-width: 900px;
		padding: 10px 20px;
		background: #f4f7f8;
		margin: 10px auto;
		padding: 20px;
		background: #f4f7f8;
		border-radius: 8px;
		/*font-family: Georgia, "Times New Roman", Times, serif;*/
	}
	.form-style-5 fieldset{
		border: none;
	}
	.form-style-5 legend {
		font-size: 1.4em;
		margin-bottom: 10px;
	}

	.form-style-5 label {
		display: block;
		font-size: 0.8em;
		text-align: center;
		text-shadow: 0 1px 0 rgba(255,255,255,0.2);
		margin-bottom: 8px;
	}
	.form-style-5 input[type="text"],
	.form-style-5 input[type="date"],
	.form-style-5 input[type="datetime"],
	.form-style-5 input[type="email"],
	.form-style-5 input[type="number"],
	.form-style-5 input[type="search"],
	.form-style-5 input[type="time"],
	.form-style-5 input[type="url"],
	.form-style-5 textarea,
	.form-style-5 select {
		font-family: Georgia, "Times New Roman", Times, serif;
		background: rgba(255,255,255,.1);
		border: none;
		height:29px;
		max-width: 130px;
		border-radius: 1px;
		font-size: 14px;
		margin: 0;
		outline: 0;
		padding: 2px;
		width: 100%;
		box-sizing: border-box; 
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box; 
		background-color: #e8eeef;
		color:#8a97a0;
		-webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
		box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
		/*margin-bottom: 30px;*/
		
	}
	.form-style-5 input[type="text"]:focus,
	.form-style-5 input[type="date"]:focus,
	.form-style-5 input[type="datetime"]:focus,
	.form-style-5 input[type="email"]:focus,
	.form-style-5 input[type="number"]:focus,
	.form-style-5 input[type="search"]:focus,
	.form-style-5 input[type="time"]:focus,
	.form-style-5 input[type="url"]:focus,
	.form-style-5 textarea:focus,
	.form-style-5 select:focus{
		background: #8eb9ff;
		color: BLACK;
	}
	.form-style-5 select{
		-webkit-appearance: menulist-button;
		height:35px;
	}
	.form-style-5 .number {
		background: #1abc9c;
		color: #fff;
		height: 29px;
		
		display: inline-block;
		font-size: 0.8em;
		margin-right: 4px;
		line-height: 30px;
		text-align: center;
		text-shadow: 0 1px 0 rgba(255,255,255,0.2);
		border-radius: 15px 15px 15px 0px;
	}

	.form-style-5 input[type="submit"],
	.form-style-5 input[type="button"]
	{
		position: relative;
		display: block;
		padding: 19px 39px 18px 39px;
		color: #FFF;
		margin: 0 auto;
		background: #1abc9c;
		font-size: 18px;
		text-align: center;
		font-style: normal;
		width: 100%;
		border: 1px solid #16a085;
		border-width: 1px 1px 3px;
		margin-bottom: 10px;
	}
	.form-style-5 input[type="submit"]:hover,
	.form-style-5 input[type="button"]:hover
	{
		background: #109177;
	}
	.form-style-5 tr
	{
		height:29px; 
		vertical-align:middle;
	}

	</style>
</head>
<body style="background-color: #675b5b;">
<div class="form-style-5">
<fieldset>
<legend>Batting Details</legend>
<?php

		$i = 0;
		if(empty($rows=mysqli_fetch_array($r1,MYSQLI_ASSOC))) echo "<h4>No Details Found</h4>";
		else
		{
		echo '<table cellpadding="0" cellspacing="0" border="1" align="center" width="100%">';
			while($row = $r12->fetch_assoc())
			{
			    if ($i == 0) {
			      $i++;
			      echo '<tr align="center">';
			      foreach ($row as $key => $value) {
			        echo "<th><b>" . $key . "</th></b>";
			      }
			      echo "</tr>";
			    }
			    echo '<tr align="center" style="font-size: 14px; color: #333333; padding:4px 0px; border-bottom:1px solid #b2b2b2;">';
			    foreach ($row as $value) {
			      echo "<td>" . $value . "</td>";
			    }
			    echo "</tr>";
			}
		echo "</table>";
		}	
?>
<br><br><legend>Bowling Details</legend>
<?php
		

		$i = 0;
		if(empty($rows2=mysqli_fetch_array($r2,MYSQLI_ASSOC))) echo '<h4>No Details Found</h4>';
		else{echo '<table cellpadding="0" cellspacing="0" border="1" align="center" width="100%">';
			while($row2 = $r22->fetch_assoc())
			{
			    if ($i == 0) {
			      $i++;
			      echo '<tr align="center">';
			      foreach ($row2 as $key => $value) {
			        echo "<th><b>" . $key . "</th></b>";
			      }
			      echo "</tr>";
			    }
			    echo '<tr align="center" style="font-size: 14px; color: #333333; padding:4px 0px; border-bottom:1px solid #b2b2b2;">';
			    foreach ($row2 as $value) {
			      echo "<td>" . $value . "</td>";
			    }
			    echo "</tr>";
			}
			echo "</table>";
		}	
?>
</fieldset>

</div>
</body>
</html>

