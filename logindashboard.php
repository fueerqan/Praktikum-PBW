<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>Dashboard</title>

        <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="./assets/css/font-awesome.min.css" />
    </head>

    <body>

        <!-- Fixed navbar -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Project name</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                        if (isset($_SESSION['npm']) && $_SESSION['npm'] != "") {
                            ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['npm']; ?> <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"> <span class="fa fa-user"></span> Profile <span class="fa fa-male"></span> <span class="fa fa-female"></span></a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="logout.php"><span class="fa fa-power-off"></span> Logout <span class="fa fa-sign-out"></span></a></li>
                                </ul>
                            </li>
                            <?php
                        } else {
                            ?>
                            <li><a href="#contact">Login</a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <div class="container">

            <!-- Main component for a primary marketing message or call to action -->
            <div class="jumbotron">
                <h1>Navbar example</h1>
                <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
                <p>To see the difference between static and fixed top navbars, just scroll.</p>
                <p>
                    <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs &raquo;</a>
                </p>
            </div>

        </div> <!-- /container -->


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
    </body>
</html>
