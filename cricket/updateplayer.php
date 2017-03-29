<?php
	define('DB_HOST', 'localhost'); 
	define('DB_NAME', 'cricketdb');
	define('DB_USER','root');
	define('DB_PASSWORD','');
	$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) ;
	if (isset($_POST['submit'])){
		$name2 = mysqli_real_escape_string($con,$_POST['name2']);
		$span2 = mysqli_real_escape_string($con,$_POST['span2']);
		$matches2 = mysqli_real_escape_string($con,$_POST['Matchesmin2']);
		
		$name = mysqli_real_escape_string($con,$_POST['name']);
		$span = mysqli_real_escape_string($con,$_POST['span']);
		$matmin1 = mysqli_real_escape_string($con,$_POST['Matchesmin1']);
		$bingmin1 = mysqli_real_escape_string($con,$_POST['bInningsmin1']);
		$hsmin1 = mysqli_real_escape_string($con,$_POST['HSmin1']);
		$brunsmin1 = mysqli_real_escape_string($con,$_POST['bRunsmin1']);
		$bfmin1 = mysqli_real_escape_string($con,$_POST['BFmin1']);
		$bavgmin1 = mysqli_real_escape_string($con,$_POST['bAveragemin1']);
		$fiftymin1 = mysqli_real_escape_string($con,$_POST['Fiftiesmin1']);
		$hundredmin1 = mysqli_real_escape_string($con,$_POST['Centuriesmin1']);
		$duckmin1 = mysqli_real_escape_string($con,$_POST['Ducksmin1']);
		$nomin1 = mysqli_real_escape_string($con,$_POST['NOmin1']);
		$bsrmin1 = mysqli_real_escape_string($con,$_POST['bSRmin1']);
		
		$Bingmin1 = mysqli_real_escape_string($con,$_POST['BInningsmin1']);
		$wkmin1 = mysqli_real_escape_string($con,$_POST['Wicketsmin1']);
		$_4formin1 = mysqli_real_escape_string($con,$_POST['4Formin1']);
		$_5formin1 = mysqli_real_escape_string($con,$_POST['5Formin1']);
		$Bavgmin1 = mysqli_real_escape_string($con,$_POST['BAveragemin1']);
		$ballsmin1 = mysqli_real_escape_string($con,$_POST['Ballsmin1']);
		$Brunsmin1 = mysqli_real_escape_string($con,$_POST['BRunsmin1']);
		$ecomin1 = mysqli_real_escape_string($con,$_POST['Economymin1']);
		$Bsrmin1 = mysqli_real_escape_string($con,$_POST['BSRmin1']);

		$q1="UPDATE batting SET Player='$name',Span='$span',Mat='$matmin1',Inns='$bingmin1',BF='$bfmin1',Runs='$brunsmin1',HS='$hsmin1',Ave='$bavgmin1',NO='$nomin1',SR='$bsrmin1',100s='$hundredmin1' , 50s='$fiftymin1' , 0s='$duckmin1' where Player='$name2' and Span='$span2' and Mat='$matches2' ";
		
		$q2="UPDATE bowling SET Player='$name',Span='$span',Mat='$matmin1' , Inns= '$Bingmin1', Balls='$ballsmin1' ,Runs='$Brunsmin1' , Wkts='$wkmin1' ,Ave='$Bavgmin1'  ,Econ='$ecomin1' ,SR= '$Bsrmin1' ,4_For= '$_4formin1' ,5_For='$_5formin1' where Player='$name2' and Span='$span2' and Mat='$matches2' ";
		$r1=mysqli_query($con,$q1);
		unset($_POST['submit']);
		if($r1)
            {
			$r2=mysqli_query($con,$q2);
    		if($r2)
                {
				echo "<script language='javascript' type='text/javascript'>";   

          		echo "alert('Player Updated');";
          		echo "</script>";
                }
            else
                {	
 				echo "<script language='javascript' type='text/javascript'>";   

          		echo "alert('Player not Updated');";
          		echo "</script>";
                }
    		}
        else
	        {
 				echo "<script language='javascript' type='text/javascript'>";   

          		echo "alert('Player not szUpdated');";
          		echo "</script>";
	        }
	}

?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Add Player</title>
	<style type="text/css">
	.form-style-5{
		min-width: 500px;
		max-width: 600px;
		padding: 10px 20px;
		background: #f4f7f8;
		margin: 10px auto;
		padding: 20px;
		background: #f4f7f8;
		border-radius: 8px;
		font-family: Georgia, "Times New Roman", Times, serif;
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
		max-width: 300px;
		border-radius: 1px;
		font-size: 18px;
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
<section class="content content-2">
<form  target="_blank" role="form"  method="POST" action="getdetails.php">
	<fieldset>
		<legend>Give Players Current Details</legend>

		<table cellpadding="0" cellspacing="0" border="0" width="100%">

			<tr>
			<td style="border-bottom:1px solid #b2b2b2;"><b>Name:&nbsp;</b></td>
			<td style="font-size: 14px; color: #333333; padding:4px 0px; border-bottom:1px solid #b2b2b2;">
			<input type="text" name="name1" required> 
			</td>
			</tr>

			<tr>
			<td style="border-bottom:1px solid #b2b2b2;"><b>Span:&nbsp;</b></td>
			<td style="font-size: 14px; color: #333333; padding:4px 0px; border-bottom:1px solid #b2b2b2;">
			<input type="text" name="span1" required> 
			</td>
			</tr>

			<tr>
			<td style="border-bottom:1px solid #b2b2b2;"><b>Matches:&nbsp;</b></td>
			<td style="font-size: 14px; color: #333333; padding:4px 0px; border-bottom:1px solid #b2b2b2;">
			<input type="number" name="matches1" value="0"  width="10" required> 
			</td>
			</tr>
		</table>
	</fieldset>
	<input type="submit" name="submit1" value="Find Player " />
</form>
</section>
</div>
<div class="form-style-5">
<section class="content content-2">
<form role="form"  method="POST" action="">
	<fieldset>
		<legend>Give Players New Details</legend>

		<table cellpadding="0" cellspacing="0" border="0" width="100%">

			<tr>
			<td style="border-bottom:1px solid #b2b2b2;"><b>Name:&nbsp;</b></td>
			<td style="font-size: 14px; color: #333333; padding:4px 0px; border-bottom:1px solid #b2b2b2;">
			<input type="text" name="name" placeholder="New (or old) Name" required> 
			<input type="text" name="name2" placeholder="Old Name" required> 
			</td>
			</tr>

			<tr>
			<td style="border-bottom:1px solid #b2b2b2;"><b>Span:&nbsp;</b></td>
			<td style="font-size: 14px; color: #333333; padding:4px 0px; border-bottom:1px solid #b2b2b2;">
			<input type="text" name="span" placeholder="New (or old) Span" required> 
			<input type="text" name="span2" placeholder="Old Span" required> 
			</td>
			</tr>

			<tr>
			<td style="border-bottom:1px solid #b2b2b2;"><b>Matches:&nbsp;</b></td>
			<td style="font-size: 14px; color: #333333; padding:4px 0px; border-bottom:1px solid #b2b2b2;">
			<input type="number" name="Matchesmin1"   placeholder="New Value" width="10"> 
			<input type="number" name="Matchesmin2"   placeholder="Old Value" width="10"> 
			</td>
			</tr>

			<tr>
			<td style="border-bottom:1px solid #b2b2b2;"><b>Batting Innings:&nbsp;</b></td>
			<td style="font-size: 14px; color: #333333; padding:4px 0px; border-bottom:1px solid #b2b2b2;">
			<input type="number" name="bInningsmin1" value="1"  width="10">
			</td>
			</tr>

			<tr>
			<td style="border-bottom:1px solid #b2b2b2;"><b>High Score:&nbsp;</b></td>
			<td style="font-size: 14px; color: #333333; padding:4px 0px; border-bottom:1px solid #b2b2b2;">
			<input type="number" name="HSmin1" value="0"  width="10"> 
			</td>
			</tr>

			<tr>
			<td style="border-bottom:1px solid #b2b2b2;"><b>Runs Made:&nbsp;</b></td>
			<td style="font-size: 14px; color: #333333; padding:4px 0px; border-bottom:1px solid #b2b2b2;">
			<input type="number" name="bRunsmin1" value="0"  width="10">
			</td>
			</tr>

			<tr>
			<td style="border-bottom:1px solid #b2b2b2;"><b>Balls Faced:&nbsp;</b></td>
			<td style="font-size: 14px; color: #333333; padding:4px 0px; border-bottom:1px solid #b2b2b2;">
			<input type="number" name="BFmin1" value="0"  width="10"> 
			</td>
			</tr>

			<tr>
			<td style="border-bottom:1px solid #b2b2b2;"><b>Average (Batting):&nbsp;</b></td>
			<td style="font-size: 14px; color: #333333; padding:4px 0px; border-bottom:1px solid #b2b2b2;">
			<input type="number" name="bAveragemin1" value="0"  width="10">
			</td>
			</tr>

			<tr>
			<td style="border-bottom:1px solid #b2b2b2;"><b>Fifties:&nbsp;</b></td>
			<td style="font-size: 14px; color: #333333; padding:4px 0px; border-bottom:1px solid #b2b2b2;">
			<input type="number" name="Fiftiesmin1" value="0"  width="10">
			</td>
			</tr>

			<tr>
			<td style="border-bottom:1px solid #b2b2b2;"><b>Centuries:&nbsp;</b></td>
			<td style="font-size: 14px; color: #333333; padding:4px 0px; border-bottom:1px solid #b2b2b2;">
			<input type="number" name="Centuriesmin1" value="0"  width="10"> 
			</td>
			</tr>

			<tr>
			<td style="border-bottom:1px solid #b2b2b2;"><b>Ducks:&nbsp;</b></td>
			<td style="font-size: 14px; color: #333333; padding:4px 0px; border-bottom:1px solid #b2b2b2;">
			<input type="number" name="Ducksmin1" value="0"  width="10">
			</td>
			</tr>

			<tr>
			<td style="border-bottom:1px solid #b2b2b2;"><b>Not Outs:&nbsp;</b></td>
			<td style="font-size: 14px; color: #333333; padding:4px 0px; border-bottom:1px solid #b2b2b2;">
			<input type="number" name="NOmin1" value="0"  width="10"> 
			</td>
			</tr>

			<tr>
			<td style="border-bottom:1px solid #b2b2b2;"><b>Strike Rate (Batting):&nbsp;</b></td>
			<td style="font-size: 14px; color: #333333; padding:4px 0px; border-bottom:1px solid #b2b2b2;">
			<input type="number" name="bSRmin1" value="0"  width="10">
			</td>
			</tr>

			<tr>
			<td style="border-bottom:1px solid #b2b2b2;"><b>Bowling Innings:&nbsp;</b></td>
			<td style="font-size: 14px; color: #333333; padding:4px 0px; border-bottom:1px solid #b2b2b2;">
			<input type="number" name="BInningsmin1" value="0"  width="10"> 
			</td>
			</tr>

			<tr>
			<td style="border-bottom:1px solid #b2b2b2;"><b>Wickets:&nbsp;</b></td>
			<td style="font-size: 14px; color: #333333; padding:4px 0px; border-bottom:1px solid #b2b2b2;">
			<input type="number" name="Wicketsmin1" value="0"  width="10"> 
			</td>
			</tr>


			<tr>
			<td style="border-bottom:1px solid #b2b2b2;"><b>4 For:&nbsp;</b></td>
			<td style="font-size: 14px; color: #333333; padding:4px 0px; border-bottom:1px solid #b2b2b2;">
			<input type="number" name="4Formin1" value="0"  width="10">
			</td>
			</tr>

			<tr>
			<td style="border-bottom:1px solid #b2b2b2;"><b>5 For:&nbsp;</b></td>
			<td style="font-size: 14px; color: #333333; padding:4px 0px; border-bottom:1px solid #b2b2b2;">
			<input type="number" name="5Formin1" value="0"  width="10"> 
			</td>
			</tr>

			<tr>
			<td style="border-bottom:1px solid #b2b2b2;"><b>Average (Bowling):&nbsp;</b></td>
			<td style="font-size: 14px; color: #333333; padding:4px 0px; border-bottom:1px solid #b2b2b2;">
			<input type="number" name="BAveragemin1" value="0"  width="10"> 
			</td>
			</tr>

			<tr>
			<td style="border-bottom:1px solid #b2b2b2;"><b>Balls Bowled:&nbsp;</b></td>
			<td style="font-size: 14px; color: #333333; padding:4px 0px; border-bottom:1px solid #b2b2b2;">
			<input type="number" name="Ballsmin1" value="0"  width="10"> 
			</td>
			</tr>

			<tr>
			<td style="border-bottom:1px solid #b2b2b2;"><b>Runs Conceded:&nbsp;</b></td>
			<td style="font-size: 14px; color: #333333; padding:4px 0px; border-bottom:1px solid #b2b2b2;">
			<input type="number" name="BRunsmin1" value="0"  width="10"> 
			</td>
			</tr>

			<tr>
			<td style="border-bottom:1px solid #b2b2b2;"><b>Economy:&nbsp;</b></td>
			<td style="font-size: 14px; color: #333333; padding:4px 0px; border-bottom:1px solid #b2b2b2;">
			<input type="number" name="Economymin1" value="0"  width="10">
			</td>
			</tr>

			<tr>
			<td style="border-bottom:1px solid #b2b2b2;"><b>Strike Rate (Bowling):&nbsp;</b></td>
			<td style="font-size: 14px; color: #333333; padding:4px 0px; border-bottom:1px solid #b2b2b2;">
			<input type="number" name="BSRmin1" value="0"  width="10">
			</td>
			</tr>

		</table>
	</fieldset>
	<input type="submit" name="submit" value="Update Player Details" />
</form>
</section>    
</div>
</body>
</html>
