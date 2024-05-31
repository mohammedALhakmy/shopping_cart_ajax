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
                <h1>Customer Order details</h1>
                <hr/>
                <div class="row">
                    <div class="col-md-6">
                        <img src="img/contact-img.png" width="170px" style="float: right" height="170px" class="img-thumbnail" alt=""/>
                    </div>
                    <div class="col-md-6">
                        <table>
                            <tr> <td><a href="payment.php" class="btn btn-primary">dd</a> Product Name</td><td><b> Sony Camera</b></td></tr>
                            <tr> <td>Product Price</td><td><b>$ 500</b></td></tr>
                            <tr> <td>Quantity</td><td><b>5</b></td></tr>
                            <tr> <td>Payment</td><td><b>Completed</b></td></tr>
                            <tr> <td>Transaction ID</td><td><b> vwvwvw5wvwv14wvw</b></td></tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="panel-footer"></div>
        </div>
    </div>
    <div class="col-md-2"></div>
    </div>
</div>
</body>
</html>
