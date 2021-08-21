<?php

require 'login.php';
if (!isset($_SESSION['oturum']))
{
    header("Location: index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="textstyle.css">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>MicroSec</h3>
            </div>

            <ul class="list-unstyled components">

                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Contact Us</a>
                        </li>
                        <li>
                            <a href="admin.php?id=team" id="team">Our Team</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Labs</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="admin.php?id=xss" id="xss">XSS</a>
                        </li>
                        <li>
                            <a href="admin.php?id=command" id="command">Command Line</a>
                        </li>
                        <li>
                            <a href="admin.php?id=java">Java Script</a>
                        </li>
                    </ul>
                </li>

            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="#" class="download">Download source</a>
                </li>
                <li>
                    <a href="#" class="article"></a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <!-- <span>Toggle Sidebar</span>-->
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item pl-5">
                                <a class="nav-link" href="#">Score</a>
                            </li>
                            <li class="nav-item pl-5">
                                <a class="nav-link" href="#"><?php echo $_SESSION['name']; ?></a>
                            </li>
                            <li class="nav-item pl-5">
                                <a class="nav-link" href="logout.php"><?php echo "LogOut" ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
<?php
  if ($_GET) {
    $param = $_GET['id'];
    if($param == 'team'){
        require 'team.php';
    }
    else if($param == 'xss' || $param == 'command' || $param == 'java'){
        ?>
            <div class="row">
                <div class="col-md-4">
                    <?php 
              //Low Level
                    $low = 'low'.$param;
                    echo $low;
                    card($low);
                   ?>
                </div>
                <div class="col-md-4">
                    <?php 
              //Strong Level
               $middle = 'middle'.$param;
              
               echo $middle;
               card($middle);
              ?>
                </div>
                <div class="col-md-4">
                    <?php 
              //Strong Level
               $strong = 'strong'.$param;
               card($strong);
              ?>
                </div>
            </div>
            <?php
} 

}
else{
    require 'default.php';
}
?>
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
    </script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
    </script>
    <script src="main1.js"></script>
    
</body>
</html>
<?php 
  function card($level)
  {
    
      echo "<div class='card' style='width: 18rem;'>";
      echo  "<img class='card-img-top' src='images/$level.png'>";
      echo "<div class='card-body'>";
      echo " <h5 class='card-title'> $level </h5>";
      echo "<form action='open.php?level=$level'  method='post' name='send'>";
      echo "<input  type='submit' value='go' name='go' class='btn btn-primary'/>";
      echo "</form>";
      echo "<form action='close.php'  method='post' name='send1'>";
      echo "<input  type='submit' value='Close' name='close' class='btn btn-primary'/>";
      echo "</form>";
      echo "</div>";
      echo "</div>";
}

?>

