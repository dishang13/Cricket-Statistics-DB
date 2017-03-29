<?php 
session_start();
    define('DB_HOST', 'localhost'); 
    define('DB_NAME', 'cricketdb');
    define('DB_USER','root');
    define('DB_PASSWORD',''); 
    $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) ;
    // Selecting Database
    // Starting and Storing Session
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
            // echo "window.location.href ='userpage.php'";
            echo "alert('Your have applied for admin status. Please wait while we verify the request.');";
            echo "</script>";
        }
    }
    if (isset($_POST['givefb'])){
        $fb= mysqli_real_escape_string($con,$_POST['feedback']);
        $user=$_SESSION['login_user'];
        $date=date("Y-m-d");
        $que="INSERT INTO feedback(UserID,Feedback,Date) VALUES ('$user','$fb','$date')";
        $res=mysqli_query($con,$que);
        if($res){echo "<script language='javascript' type='text/javascript'>";   
                 echo "alert('Feedback added.');";
                 echo "window.location.href ='userpage.php'";
                 echo "</script>"; 
        }
        else{
            echo "<script language='javascript' type='text/javascript'>";   
            echo "alert('Feedback could not be added!');";
            echo "window.location.href ='userpage.php'";   
            echo "</script>"; 
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title><?php echo $_SESSION['login_name'];?></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- Custom Fonts from Google -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
    <nav id="siteNav" class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    </button> -->
                <a class="navbar-brand" >
                    <span class="glyphicon glyphicon-fire"></span> 
                    <?php echo $_SESSION['login_user']; ?>
                </a>
                <a href="logout.php"><button type="button" class="navbar-toggle" >Log Out</button></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar">
                <div class="navbar-form navbar-right" >
                    <a href="logout.php"><button type="submit" name="logout" id='logout' class="btn btn-success" >Log Out</button></a> 
                </div>
            </div>
        </div>  
    </nav>
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <div class="col-md-4">
                    <a href="#stats" class="btn btn-primary btn-md"><h2 class="section-heading" style="padding-top: 15px">View Stats</h2></a>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <a data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-md"><h2 class="section-heading" style="padding-top: 15px">Give Feedback</h2></a>
                </div>
            </div>
        </div>
        <form role="form"  method="POST" action="">
                    <div id="myModal" class="modal" role="dialog" style="padding-right:0px;">
                      <div class="modal-dialog" >
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                          </button>
                          <h5 class="modal-title" id="myModalLabel" style="font-size:260%;color:white;">Feedback</h5>
                        </div>
                        <div class="form-group">
                          <textarea type = "textarea" class="form-control" name ="feedback" placeholder = "Enter Feedback here..." style="width:600px; height: 150px" required /></textarea>
                        <p></p>
                        <button type="submit" class="btn btn-success" name="givefb" value=" Send">Give Feedback</button>         
                      </div><!-- modal dialog ends -->
                   </div>
        </form>   
    </header>
    <section id = "stats" class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img class="img-responsive img-circle center-block" src="images/kp.jpg" alt="">
                </div>
                <div class="col-sm-6">
                    <h2 class="section-header">Batsman</h2>
                    <p class="lead text-muted">Know the figures of your favourite batsman and compare them with others.</p>
                    <a href="Batsman.php" class="btn btn-primary btn-lg">Find</a>
                </div>                
                
            </div>
        </div>
    </section>
    
    <section class="content content-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h2 class="section-header">Bowling</h2>
                    <p class="lead text-light">Find which bowler is at the top of his game and know his figures.</p>
                    <a href="Bowler.php" class="btn btn-default btn-lg">Find</a>
                </div>    
                <div class="col-sm-6">
                    <img class="img-responsive img-circle center-block" src="images/starc.jpg" alt="">
                </div>            
                
            </div>
        </div>
    </section>    

    <section class="content content-3">
    <form method="POST" action="">
        <div class="container">
            <h2 class="section-header"><span class="glyphicon glyphicon-pushpin text-primary"></span><br> Update</h2>
            <p class="lead text-muted">Administrators are Priviliged with the option to update Statistcs. Not an Admin yet? Apply for admin status and wait till you get authorised.</p> 
                    <button name="makeadmin" class="btn btn-primary btn-lg">Update</button>
            </div>
        </div>
    </form>
    </section> 


    <!-- jQuery -->
    <script src="js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    
    <!-- Custom Javascript -->
    <script src="js/custom.js"></script>

</body>
</html>