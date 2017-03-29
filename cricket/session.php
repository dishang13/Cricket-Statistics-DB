<?php
	session_start();
	define('DB_HOST', 'localhost'); 
	define('DB_NAME', 'cricketdb');
	define('DB_USER','root');
	define('DB_PASSWORD',''); 
	$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) ;
	// Selecting Database
	// Starting and Storing Session
	$user_check=$_SESSION['login_user'];
	$query="SELECT * FROM users WHERE user_id='$user_check'";
	// SQL Query To Fetch Complete Information Of User
	$ses_sql=mysqli_query( $con,$query);
	$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
	$count = mysqli_num_rows($ses_sql);
	if($count==1){
		$login_session =$row['name'];
		mysqli_close($con);
	}
	else if($count==0){
	mysql_close($con); // Closing Connection
	header('Location: index.php'); // Redirecting To Home Page
	}
?>