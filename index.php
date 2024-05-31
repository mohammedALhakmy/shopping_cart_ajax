<?php
session_start();
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
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" ><span class="glyphicon glyphicon-shopping-cart"></span> Cart <span class="badge">0</span></a>
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
                            <div class="panel panel-body"></div>
                            <div class="panel panel-footer"></div>
                        </div>
                    </div>
                </li>
                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> SignIn</a>
                    <ul class="dropdown-menu" style="width: 300px">
                        <div >
                            <div class="panel panel-primary">
                                <div class="panel-heading">Login</div>
                                <div class="panel-heading">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" autocomplete="off" id="email" required="required"/>
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" required="required"/>
                                    <p><br/></p>
                                    <a href="#" style="color: #ffffff;list-style: none">Forgotten Password</a>
                                    <input type="submit"  class="btn btn-info col-sm-6" style="float: right" id="login" value="Login"/>
                                </div>
                                <div class="panel-footer" id="e_msg"></div>
                            </div>
                        </div>
                    </ul>
                </li>
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> SignUp</a></li>
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
    </div>

    </body>
</html>
