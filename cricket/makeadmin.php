<?php 
    define('DB_HOST', 'localhost'); 
    define('DB_NAME', 'sys');
    define('DB_USER','root');
    define('DB_PASSWORD',''); 
    $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) ;
if (isset($_POST['makeadmin'])){
    $user=$_SESSION['login_user'];
    $query="SELECT * FROM users where user_id='$user'";
    $result=mysqli_query($con,$query);
    $rows=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if($rows['wants_admin']==1)
            {echo "<script language='javascript' type='text/javascript'>";   
             echo "alert('Your have already applied for admin status!');";
             echo "</script>"; 
            }
    else
    {
        $q2="UPDATE users SET wants_admin=1 where user_id='$user'";
        $result2=mysqli_query($con,$q2);
        echo "<script language='javascript' type='text/javascript'>";   
        echo "window.location.href ='userpage.php'";
        echo "alert('Your have applied for admin status. Please wait while we verify the request.');";
        echo "</script>";
    }
    mysqli_close($con);
}
?>