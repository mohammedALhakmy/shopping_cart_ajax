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
            <li><a href="#" class="glyphicon glyphicon-home">Home</a></li>
            <li><a href="#" class="glyphicon-modal-window">Product</a></li>
        </ul>
    </div>
</div>
<p><br/></p>
 <p><br/></p>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" id="signin_smg">
            <!--                            Alert From SignUp Form -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading">Customer Sign Form</div>
                <div class="panel-body">

                    <form action="" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="f_name">First Name</label>
                            <input type="text" class="form-control" name="f_name" id="f_name"/>
                        </div>
                        <div class="col-md-6">
                            <label for="l_name">Last Name</label>
                            <input type="text" id="l_name" name="l_name" class="form-control"/>
                        </div>

                </div>
                    <br/>
                <div class="row">
                    <div class="col-md-12">
                        <label for="email"  >Email</label>
                        <input type="text" id="email" name="email" autocomplete="off" class="form-control"/>
                    </div>
                </div>
                    <br/>
                <div class="row">
                    <div class="col-md-12">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control"/>
                    </div>
                </div>
                    <br/>
                <div class="row">
                    <div class="col-md-12">
                        <label for="repassword">Re-enter Password</label>
                        <input type="password" id="repassword" name="repassword" class="form-control"/>
                    </div>
                </div>
                    <br/>
                <div class="row">
                    <div class="col-md-12">
                        <label for="mobile">Mobile</label>
                        <input type="text" id="mobile" name="mobile" class="form-control"/>
                    </div>
                </div>
                    <br/>
                <div class="row">
                    <div class="col-md-12">
                        <label for="address1">Address Line 1</label>
                        <input type="text" id="address1" name="address1" class="form-control"/>
                    </div>
                </div>
                    <br/>
                <div class="row">
                    <div class="col-md-12">
                        <label for="address2">Address Line 2</label>
                        <input type="text" id="address2" name="address2" class="form-control"/>
                    </div>
                </div>
                    <br/>
                 <div class="row">
                    <div class="col-md-12">
                         <input type="button" id="signuo_button" value="Sign Up" name="signuo_button" class="btn btn-primary btn-lg btn-block"/>
                    </div>
                </div>
                    <br/>
                <div class="panel-footer"></div>
            </div>
                </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
</div>
</body>
</html>