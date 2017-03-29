<?php 
	define('DB_HOST', 'localhost'); 
	define('DB_NAME', 'cricketdb');
	define('DB_USER','root');
	define('DB_PASSWORD','');
	$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) ;
	$r1=mysqli_query($con,"select max(Mat) as a from batting");
	$mat = $r1->fetch_assoc();
	$r2=mysqli_query($con,"select max(Inns) as a from batting");
	$ing = $r2->fetch_assoc();
	$r3=mysqli_query($con,"select max(HS) as a from batting");
	$hs = $r3->fetch_assoc();
	$r4=mysqli_query($con,"select max(Runs) as a from batting");
	$runs = $r4->fetch_assoc();
	$r5=mysqli_query($con,"select max(BF) as a from batting");
	$bf = $r5->fetch_assoc();
	$r6=mysqli_query($con,"select max(Ave) as a from batting");
	$avg = $r6->fetch_assoc();
	$r7=mysqli_query($con,"select max(50s) as a from batting");
	$fifty = $r7->fetch_assoc();
	$r8=mysqli_query($con,"select max(100s) as a from batting");
	$hundreds = $r8->fetch_assoc();
	$r9=mysqli_query($con,"select max(0s) as a from batting");
	$ducks = $r9->fetch_assoc();
	$r10=mysqli_query($con,"select max(NO) as a from batting");
	$no = $r10->fetch_assoc();
	$r11=mysqli_query($con,"select max(SR) as a from batting");
	$sr = $r11->fetch_assoc();
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Batting</title>
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

<section class="content content-2">
<form role="form"  method="POST" action="getbatsmen.php">
<fieldset>
<legend>Batsmen</legend>
<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tr>
<td style="border-bottom:1px solid #b2b2b2;"><b>Matches:&nbsp;</b></td>
<td style="font-size: 14px; color: #333333; padding:4px 0px; border-bottom:1px solid #b2b2b2;">
 From: 
<input type="number" name="Matchesmin1" value="0" placeholder="0" width="10"> to: 
<input type="number" name="Matchesmax1" value=<?php echo '"'.$mat['a'].'"' ?> >
</td>
</tr>

<tr>
<td style="border-bottom:1px solid #b2b2b2;"><b>Innings:&nbsp;</b></td>
<td style="font-size: 14px; color: #333333; padding:4px 0px; border-bottom:1px solid #b2b2b2;">
 From: 
<input type="number" name="Inningsmin1" value="0" placeholder="0" width="10"> to: 
<input type="number" name="Inningsmax1" value=<?php echo '"'.$ing['a'].'"' ?> >
</td>
</tr>

<tr>
<td style="border-bottom:1px solid #b2b2b2;"><b>High Score:&nbsp;</b></td>
<td style="font-size: 14px; color: #333333; padding:4px 0px; border-bottom:1px solid #b2b2b2;">
 From: 
<input type="number" name="HSmin1" value="0" placeholder="0" width="10"> to: 
<input type="number" name="HSmax1" value=<?php echo '"'.$hs['a'].'"' ?> >
</td>
</tr>

<tr>
<td style="border-bottom:1px solid #b2b2b2;"><b>Runs:&nbsp;</b></td>
<td style="font-size: 14px; color: #333333; padding:4px 0px; border-bottom:1px solid #b2b2b2;">
 From: 
<input type="number" name="Runsmin1" value="0" placeholder="0" width="10"> to: 
<input type="number" name="Runsmax1" value=<?php echo '"'.$runs['a'].'"' ?> >
</td>
</tr>

<tr>
<td style="border-bottom:1px solid #b2b2b2;"><b>Balls Faced:&nbsp;</b></td>
<td style="font-size: 14px; color: #333333; padding:4px 0px; border-bottom:1px solid #b2b2b2;">
 From: 
<input type="number" name="BFmin1" value="0" placeholder="0" width="10"> to: 
<input type="number" name="BFmax1" value=<?php echo '"'.$bf['a'].'"' ?> >
</td>
</tr>

<tr>
<td style="border-bottom:1px solid #b2b2b2;"><b>Average:&nbsp;</b></td>
<td style="font-size: 14px; color: #333333; padding:4px 0px; border-bottom:1px solid #b2b2b2;">
 From: 
<input type="number" name="Averagemin1" value="0" placeholder="0" width="10"> to: 
<input type="number" name="Averagemax1" value=<?php echo '"'.$avg['a'].'"' ?> >
</td>
</tr>

<tr>
<td style="border-bottom:1px solid #b2b2b2;"><b>Fifties:&nbsp;</b></td>
<td style="font-size: 14px; color: #333333; padding:4px 0px; border-bottom:1px solid #b2b2b2;">
 From: 
<input type="number" name="Fiftiesmin1" value="0" placeholder="0" width="10"> to: 
<input type="number" name="Fiftiesmax1" value=<?php echo '"'.$fifty['a'].'"' ?> >
</td>
</tr>

<tr>
<td style="border-bottom:1px solid #b2b2b2;"><b>Centuries:&nbsp;</b></td>
<td style="font-size: 14px; color: #333333; padding:4px 0px; border-bottom:1px solid #b2b2b2;">
 From: 
<input type="number" name="Centuriesmin1" value="0" placeholder="0" width="10"> to: 
<input type="number" name="Centuriesmax1" value=<?php echo '"'.$hundreds['a'].'"' ?> >
</td>
</tr>

<tr>
<td style="border-bottom:1px solid #b2b2b2;"><b>Ducks:&nbsp;</b></td>
<td style="font-size: 14px; color: #333333; padding:4px 0px; border-bottom:1px solid #b2b2b2;">
 From: 
<input type="number" name="Ducksmin1" value="0" placeholder="0" width="10"> to: 
<input type="number" name="Ducksmax1" value=<?php echo '"'.$ducks['a'].'"' ?> >
</td>
</tr>

<tr>
<td style="border-bottom:1px solid #b2b2b2;"><b>Not Outs:&nbsp;</b></td>
<td style="font-size: 14px; color: #333333; padding:4px 0px; border-bottom:1px solid #b2b2b2;">
 From: 
<input type="number" name="NOmin1" value="0" placeholder="0" width="10"> to: 
<input type="number" name="NOmax1" value=<?php echo '"'.$no['a'].'"' ?> >
</td>
</tr>

<tr>
<td style="border-bottom:1px solid #b2b2b2;"><b>Strike Rate:&nbsp;</b></td>
<td style="font-size: 14px; color: #333333; padding:4px 0px; border-bottom:1px solid #b2b2b2;">
From: 
<input type="number" name="SRmin1" value="0" placeholder="0" width="10"> to: 
<input type="number" name="SRmax1" value=<?php echo '"'.$sr['a'].'"' ?> >
</td>
</tr>

</table>
</fieldset>
<input type="submit" value="View Stats" />
</form>
</section>    

</body>
</html>