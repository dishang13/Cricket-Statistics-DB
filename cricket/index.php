<?php
session_start();
include('signin.php'); // Includes Login Script
include('signup.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Cricket</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom Fonts from Google -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body >

    <!-- Navigation -->
    <nav id="siteNav" class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Logo and responsive toggle -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    Sign In
                </button>
                <a class="navbar-brand" href="#">
                	<span class="glyphicon glyphicon-fire"></span> 
                	CRICKET
                </a>
            </div>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
                <form method="POST" class="navbar-form navbar-right"  role="form" action=""> 
		            <div class="form-group">
		              <input type="text" placeholder="UserName" name="id" required class="form-control">
		            </div>
		            <div class="form-group">
		              <input type="password" placeholder="Password" name="pass" required class="form-control">
		            </div>
            		<button type="submit" name="submit" id='submit' class="btn btn-success" >Sign in</button> 
            		<button type="button" name="sign_up" class="btn btn-success" data-toggle="modal" data-target="#myModal">Sign Up</button>
         		</form>  

         		
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
    <form role="form"  method="POST" action="">
		            <div id="myModal" class="modal" role="dialog" style="padding-right:0px;">
		              <div class="modal-dialog" >
		                <div class="modal-header">
		                  <button type="button" class="close" data-dismiss="modal">
		                    <span aria-hidden="true">&times;</span>
		                    <span class="sr-only">Close</span>
		                  </button>
		                  <h5 class="modal-title" id="myModalLabel" style="font-size:260%;color:white;">Sign Up</h5>
		                </div>
		                <div class="form-group">
		                  <label for= "name" style="color:white">Name</label><br>
		                  <input type = "text" class="form-control" id ="name" name="name" placeholder = "Enter Name" style="width:300px" required />
		                </div>
		                <div class = "form-group">
		                  <label for = "roll" style="color:white">User Name</label><br>
		                  <input type = "text" class="form-control" id = "user_id" name="user_id" placeholder = "Enter User Name" style="width:300px" required />
		                </div>
		                <div class="form-group">
		                  <label for = "pass" style="color:white">Password</label><br>
		                  <input type="password" id ="pw" placeholder="Password" name="pw" class="form-control" style="width:300px" required />
		                </div>
		                <div class = "form-group">
		                  <label for = "email" style="color:white">Email ID</label><br>
		                  <input type = "email" class="form-control" id = "email_id" name="email_id" placeholder = "Enter Email ID" style="width:300px" required />
		                </div>
		                <p></p>
		                <div class = "form-group" style="color:white">
		                  <input type="checkbox" id = "type" name="type" value="type" /> Administrator<br>
		                </div>
		                <p></p>
		                <button type="submit" class="btn btn-success" name="submit2" id="submit" value=" Send">Sign up</button>         
		              </div><!--modal dialog ends -->
		           </div>
    </form>  
	<!-- Header -->
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Dramatically Engage</h1>
                <p>Find out more about your cricketers.</p>
                <a href="#Engage" class="btn btn-primary btn-lg">Engage Now</a>
            </div>
        </div>
    </header>

	<!-- Intro Section -->
    <section class="intro">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                	<span class="glyphicon glyphicon-apple" style="font-size: 60px"></span>
                    <h2 class="section-heading">Completely Cricket oriented website for Stats</h2>
                    <p class="text-light">Cricket Statistics at your finger tips. Upgrade to Admin account for Updation of Statistics.</p>
                </div>
            </div>
        </div>
    </section>

	<!-- Content 1 -->
    <section id="Engage" class="content">
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

   
	<!-- Content 3 -->
<!--     <section class="content content-3">
        <div class="container">
			<h2 class="section-header"><span class="glyphicon glyphicon-pushpin text-primary"></span><br> Update</h2>
			<p class="lead text-muted">Administrators are Priviliged with the option to update Statistcs. Not an Admin yet? Apply for admin status and wait till you get authorised.</p> 
                    <a href="update.php" class="btn btn-primary btn-lg">Update</a>               
            </div>
        </div>
    </section> -->
    
	<!-- Footer -->
    <footer class="page-footer">
    
        <!-- Copyright etc -->
        <div class="small-print">
        	<div class="container">
        		<p>Copyright &copy; Cricket 2016</p>
        	</div>
        </div>
        
    </footer>

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
