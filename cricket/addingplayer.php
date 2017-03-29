<?php 
	define('DB_HOST', 'localhost'); 
	define('DB_NAME', 'cricketdb');
	define('DB_USER','root');
	define('DB_PASSWORD','');
	$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) ;
	if (isset($_POST['submit'])){
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

		$q1="INSERT INTO batting(Player,Span,Mat,Inns,BF,Runs,HS,Ave,NO,SR,100s,50s,0s) VALUES ('$name','$span','$matmin1','$bingmin1','$bfmin1','$brunsmin1','$hsmin1','$bavgmin1','$nomin1','$bsrmin1','$hundredmin1','$fiftymin1','$duckmin1')";
		$q2="INSERT INTO bowling(Player,Span,Mat,Inns,Balls,Runs,Wkts,Ave,Econ,SR,4_For,5_For) VALUES ('$name','$span','$matmin1','$Bingmin1','$ballsmin1','$Brunsmin1','$wkmin1','$Bavgmin1','$ecomin1','$Bsrmin1','$_4formin1','$_5formin1')";
		$r1=mysqli_query($con,$q1);
		if(isset($r1))
            {
			$r2=mysqli_query($con,$q2);
    		if(isset($r2))
                {
				echo "<script language='javascript' type='text/javascript'>";   

          		echo "alert('Player Added');";
          		echo "</script>";
                }
            else
                {	
                	$q3="DELETE FROM batting where Player='$name' AND Span=$span AND Mat= $matmin1";
                	$r3=mysqli_query($con,$q3);
 				echo "<script language='javascript' type='text/javascript'>";   

          		echo "alert('Player not added');";
          		echo "</script>";
                }
    		}
        else
	        {
 				echo "<script language='javascript' type='text/javascript'>";   

          		echo "alert('Player not added');";
          		echo "</script>";
	        }
	}
?>