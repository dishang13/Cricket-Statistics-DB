<?php 
	define('DB_HOST', 'localhost'); 
	define('DB_NAME', 'cricketdb');
	define('DB_USER','root');
	define('DB_PASSWORD','');	
	if(isset($_SESSION['login_user']))
	{
		if($_SESSION['type']==0)
     		{ header("location: userpage.php"); }
     	else {header("location: adminpage.php");}
	}

	if(isset($_POST['submit'])) 
		{
		 SignIn();
		}
	function SignIn() 
		{ $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) ;
		  if(!$con) die("Failed to connect to Server: " . mysqli_connect_error());
		  $user_id = mysqli_real_escape_string($con,$_POST['id']);
		  $password = mysqli_real_escape_string($con,$_POST['pass']);
		  $query = "select * from users where (user_id= '$user_id' and password='$password')";//use single quotes for $name...... and no semicolon
		  $data = mysqli_query ($con,$query);
		  $row=mysqli_fetch_array($data,MYSQLI_ASSOC);
		  $count = mysqli_num_rows($data);
		  if ($count==1)
		   {$_SESSION['login_user']=$row['user_id']; 
		   	$_SESSION['login_name']=$row['name'];
			$_SESSION['type']=$row['is_admin'];
			 	if($_SESSION['type']==0)
		     	{header("location: userpage.php");}
		     	else {header("location: adminpage.php");} 
		   }
	      else {
				echo "<script language='javascript' type='text/javascript'>";   
				echo "alert('Your login details are incorrect.');";
				echo "</script>";
	      }
		  mysqli_close($con);
		}
?>