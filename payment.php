<?php
session_start();
if(!isset($_SESSION['uid'])){
    header('location:index.php');
    die();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href=""/>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <style>
        table tr td {
            padding: 10px;
        }
    </style>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="#" class="navbar-brand">Store</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-modal-window"></span> Product</a></li>
        </ul>
    </div>
</div>
<p><br/></p>
<p><br/></p>
<p><br/></p>
<div class="container-fluid">

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                <div class="panel-body">
                    <h1>Thank You </h1>
                 <p>Hello <?php echo $_SESSION['uname'];echo ', Your Payment Process is successfully Completed you and Your Email is';echo $_SESSION['uemail']?> And Your Transaction id is xxxx-xx-xx
                     <br/>
                 you can continue your Shopping <br/>
                 </p>
                    <a href="index.php" class="btn btn-success btn-lg">Continue Shopping</a>
                </div>
                <div class="panel-footer"></div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
</body>
</html>
