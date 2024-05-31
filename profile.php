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
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="#" class="navbar-brand">Store</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="customer_order.php">Product</a></li>
            <li style="width: 300px;left: 10px ;top: 10px"><input type="text" class="form-control" id="search"/></li>
            <li  style="left: 20px ;top: 10px"><button type="submit" class="btn btn-primary" id="search_btn">Search</button></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#" id="cart_container" class="dropdown-toggle" data-toggle="dropdown" ><span class="glyphicon glyphicon-shopping-cart"></span> Cart <span class="badge">0</span></a>
                <div class="dropdown-menu" style="width: 400px">
                    <div class="panel panel-success">
                        <div class="panel panel-heading">
                            <div class="row">
                                <div class="col-md-3">S1.No</div>
                                <div class="col-md-3">Product Image</div>
                                <div class="col-md-3">Product Name</div>
                                <div class="col-md-3">Price in $ .</div>
                            </div>
                        </div>
                        <div class="panel panel-body">

                            <div id="cart_products"></div>
                        </div>
                        <div class="panel panel-footer"></div>
                    </div>
                </div>
            </li>
            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['uemail']?></a>
                <ul class="dropdown-menu" style="width: 170px; font-size: 16px;x">
                    <li><a href="cart.php" style="text-decoration: none;color: #0000ff"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
                    <li class="divider"></li>
                    <li><a href="" style="text-decoration: none;color: #0000ff"><span class=""></span>Change Password</a></li>
                    <li class="divider"></li>
                     <li><a href="logout.php" style="text-decoration: none;color: #0000ff"><span class=""></span>Log Out</a></li>
                </ul>
            </li>
         </ul>
    </div>
</div>
<p><br/></p>
<p><br/></p>
<p><br/></p>
<p><br/></p>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-2">
            <div id="get_category"></div>
            <div id="get_Brands"></div>
        </div>
        <div class="col-md-8 col-sm-6">
            <div class="row">
                <div class="col-md-12" id="products_msg"></div>
            </div>
            <div class="panel panel-info">
                <div class="panel-heading">Products</div>
                <div class="panel-body">
                    <div id="get_products"></div>
                </div>
                <div class="panel-footer">Copy;2022</div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <center>
                <ul class="pagination" id="pageno">
                    <li><a href="#">1</a></li>
                </ul>
            </center>
        </div>
    </div>
</div>

</body>
</html>
