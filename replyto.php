<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include 'header.php';
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>:Welcome to the home page</title>
</head>
<body>
<?php
include 'nav.php';
?>
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-10 text-left"> 
        <div class="row">
            <div class="col-sm-12">
            <?php
            include 'content-function.php';
            if (isset($_SESSION['username'])) {
                $scid = $_GET['scid'];
                $cid = $_GET['cid'];
                $tid = $_GET['tid'];
                replytopost($cid, $scid, $tid);
            } else {
                echo '<p>You must be logged in to post a reply</p>
                        <p><a href="login.php">Login</a> or <a href="register.php">Register</a></p>';
            }
                //disptopic($_GET['cid'], $_GET['scid'], $_GET['tid']);
            ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
            <?php
                //include 'content-function.php';
            disptopic($_GET['cid'], $_GET['scid'], $_GET['tid']);
            ?>
                    <?php include 'ads.php'?>
            </div>
        </div>

    </div>
    <?php include 'adsside.php'?>
    
  </div>
  <div class="row">
            <div class="col-sm-12 adplace">
                <div class="well">
                    <p>ADS</p>
                </div>
                <div class="well">
                    <p>ADS</p>
                </div>  
            </div>
        </div> 
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>
    
</body>
</html>