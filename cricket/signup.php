<?php 
	// define('DB_HOST', 'localhost'); 
	// define('DB_NAME', 'cricketdb');
	// define('DB_USER','root');
	// define('DB_PASSWORD',''); 
	$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) ;
	if(!$con) die("Failed to connect to MySQL: " . mysqli_connect_error());
	function NewUser() 
		{ $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) ;
		  $name = mysqli_real_escape_string($con,$_POST['name']); //prevents sql injection.
		  $user_id = mysqli_real_escape_string($con,$_POST['user_id']);
		  $type = isset($_POST['type']);
		  $email = mysqli_real_escape_string($con,$_POST['email_id']);
		  $password = mysqli_real_escape_string($con,$_POST['pw']);
		  $query = "INSERT INTO users (name,user_id,email_id,password, is_admin, wants_admin) 
		  			VALUES ('$name', '$user_id','$email', '$password', 0,'$type')"; //use single quotes for $name...... and no semicolon
		  $data = mysqli_query ($con,$query);
		  if($data)
		    {echo "<script language='javascript' type='text/javascript'>";   
          	 echo "alert('Your registration is complete.');";
          	 echo "</script>"; 
          	}
		  else die('Error: ' . mysqli_error($con));
		  mysqli_close($con);
		}

	function SignUp()
		{ 
		$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) ;
		if(!empty($_POST['user_id'])) 
		  {
		   $query = mysqli_query($con,"SELECT * FROM users WHERE user_id = '$_POST[user_id]' ");		 
		   if(!($row = mysqli_fetch_array($query)))
			  { 
			  	NewUser();
			  } 
		   else {
          echo "<script language='javascript' type='text/javascript'>";   
          echo "alert('Your are already registered');";
          echo "</script>";
		   }
		  }
		}
	if(isset($_POST['submit2'])) 
		{
		 SignUp();
		}
?>