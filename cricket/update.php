<?php 
include ('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Update Statistics</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- Custom Fonts from Google -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body  style="background-color: #675b5b;">
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
                    <a href="addplayer.php" class="btn btn-primary btn-lg"><h2 class="section-heading">Add Player</h2></a>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <a href="updateplayer.php" class="btn btn-primary btn-lg"><h2 class="section-heading">Update Player Stats</h2></a>
                </div>
            </div>
        </div>
    </header>




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