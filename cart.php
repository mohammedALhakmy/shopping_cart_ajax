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
            <li><a href="#">Home</a></li>
            <li><a href="#">Product</a></li>
            <li style="width: 300px;left: 10px ;top: 10px"><input type="text" class="form-control" id="search"/></li>
            <li  style="left: 20px ;top: 10px"><button type="submit" class="btn btn-primary" id="search_btn">Search</button></li>
        </ul>
     </div>
</div>
<p><br/></p>
<p><br/></p>
<p><br/></p>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" id="cart_msg">
<!--        Cart Message    -->
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading">Cart CheckOut</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-2"><b><b> Action</b></div>
                        <div class="col-md-2"><b>Product Image</b></div>
                        <div class="col-md-2"><b>Product Name</b></div>
                        <div class="col-md-2"><b> Quantity</b></div>
                        <div class="col-md-2"><b> Product Price</b></div>
                        <div class="col-md-2"><b>Price in $</b></div>
                    </div>
                    <div id="check_out"></div>
<!--                    <div class="row">
                         <div class="col-md-2">
                             <div class="btn-group">
                                <a href="#" class="btn btn-danger" style="margin-right: 5px"><span class="glyphicon glyphicon-trash"></span></a>
                                 <a href="#" class="btn btn-primary"><span class="glyphicon glyphicon-ok-sign"></span></a>
<                             </div>
                        </div>
                         <div class="col-md-2"><img src="img/contact-img.png" width="50px" alt=""/></div>
                         <div class="col-md-2">Product Name</div>
                         <div class="col-md-2"><input type="text" class="form-control" value="1" readonly/></div>
                         <div class="col-md-2"><input type="text" class="form-control" value="50" readonly/> </div>
                         <div class="col-md-2"><input type="text" class="form-control" value="5000" readonly/></div>
                     </div>-->
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
     </div>
</div>
 </body>
</html>