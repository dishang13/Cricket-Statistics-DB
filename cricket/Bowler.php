<?php 
	define('DB_HOST', 'localhost'); 
	define('DB_NAME', 'cricketdb');
	define('DB_USER','root');
	define('DB_PASSWORD','');
	$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) ;
	$r1=mysqli_query($con,"select max(Mat) as a from bowling");
	$mat = $r1->fetch_assoc();
	$r2=mysqli_query($con,"select max(Inns) as a from bowling");
	$ing = $r2->fetch_assoc();
	$r3=mysqli_query($con,"select max(Wkts) as a from bowling");
	$wk = $r3->fetch_assoc();
	$r4=mysqli_query($con,"select max(4_For) as a from bowling");
	$_4for = $r4->fetch_assoc();
	$r5=mysqli_query($con,"select max(5_For) as a from bowling");
	$_5for = $r5->fetch_assoc();
	$r6=mysqli_query($con,"select max(Ave) as a from bowling");
	$avg = $r6->fetch_assoc();
	$r7=mysqli_query($con,"select max(Balls) as a from bowling");
	$balls = $r7->fetch_assoc();
	$r8=mysqli_query($con,"select max(Runs) as a from bowling");
	$runs = $r8->fetch_assoc();
	$r9=mysqli_query($con,"select max(Econ) as a from bowling");
	$eco = $r9->fetch_assoc();
	$r10=mysqli_query($con,"select max(SR) as a from bowling");
	$sr = $r10->fetch_assoc();
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Bowling</title>
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
<form role="form"  method="POST" action="getbowler.php">
<fieldset>
<legend>Bowler</legend>
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
<td style="border-bottom:1px solid #b2b2b2;"><b>Wickets:&nbsp;</b></td>
<td style="font-size: 14px; color: #333333; padding:4px 0px; border-bottom:1px solid #b2b2b2;">
 From: 
<input type="number" name="Wicketsmin1" value="0" placeholder="0" width="10"> to: 
<input type="number" name="Wicketsmax1" value=<?php echo '"'.$wk['a'].'"' ?> >
</td>
</tr>


<tr>
<td style="border-bottom:1px solid #b2b2b2;"><b>4 For:&nbsp;</b></td>
<td style="font-size: 14px; color: #333333; padding:4px 0px; border-bottom:1px solid #b2b2b2;">
 From: 
<input type="number" name="4Formin1" value="0" placeholder="0" width="10"> to: 
<input type="number" name="4Formax1" value=<?php echo '"'.$_4for['a'].'"' ?> >
</td>
</tr>

<tr>
<td style="border-bottom:1px solid #b2b2b2;"><b>5 For:&nbsp;</b></td>
<td style="font-size: 14px; color: #333333; padding:4px 0px; border-bottom:1px solid #b2b2b2;">
 From: 
<input type="number" name="5Formin1" value="0" placeholder="0" width="10"> to: 
<input type="number" name="5Formax1" value=<?php echo '"'.$_5for['a'].'"' ?> >
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
<td style="border-bottom:1px solid #b2b2b2;"><b>Balls:&nbsp;</b></td>
<td style="font-size: 14px; color: #333333; padding:4px 0px; border-bottom:1px solid #b2b2b2;">
 From: 
<input type="number" name="Ballsmin1" value="0" placeholder="0" width="10"> to: 
<input type="number" name="Ballsmax1" value=<?php echo '"'.$balls['a'].'"' ?> >
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
<td style="border-bottom:1px solid #b2b2b2;"><b>Economy:&nbsp;</b></td>
<td style="font-size: 14px; color: #333333; padding:4px 0px; border-bottom:1px solid #b2b2b2;">
 From: 
<input type="number" name="Economymin1" value="0" placeholder="0" width="10"> to: 
<input type="number" name="Economymax1" value=<?php echo '"'.$eco['a'].'"' ?> >
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
