<?php
 include 'dbConication.php';
$f_name=$_POST['f_name'];
$l_name=$_POST['l_name'];
$email=$_POST['email'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];
$mobile=$_POST['mobile'];
$address1=$_POST['address1'];
$address2=$_POST['address2'];
$name = "/^[A-Z][a-zA-Z ]+$/";
$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
$number="/^[0-9]+$/";
//echo $f_name.$l_name;

if(empty($f_name) || empty($l_name) ||  empty($email) || empty($password) || empty($repassword) || empty($mobile) || empty($address1) || empty($address2)  ){

    echo "
    <div class='alert alert-warning'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b><strong>Please Fill All Fields..!</strong></b>
    </div>
    ";
exit();
}
else{
    if(!preg_match($name,$f_name)){

        echo " <div class='alert alert-danger'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b><strong>This ".$f_name." is  not Valid</strong></b>
                  </div> ";
          die();
    }
    if(!preg_match($name,$l_name)){

        echo " <div class='alert alert-danger'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b><strong>This  $l_name is  not Valid </strong></b>
                  </div> ";
         die();
    }
    if(!preg_match($emailValidation,$email)){
        echo " <div class='alert alert-danger'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b><strong>This $email Address is  not Valid  </strong></b>
                  </div> ";
          die();
    }
    if(strlen($password) < 9) {

        echo " <div class='alert alert-danger'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b><strong>This $password Password is Weak ..!</strong></b>
                  </div> ";
        die();
    }
    if(strlen($repassword) <9 ){
        echo " <div class='alert alert-danger'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b><strong>This $password Password is Weak ..!</strong></b>
                  </div> ";
        die();
    }
    if($password !== $repassword){

        echo " <div class='alert alert-danger'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b><strong>This is Password $password The Password Is Not Seam? $repassword</strong></b>
                  </div> ";
        die();
    }
    if(!preg_match($number,$mobile)){
         echo " <div class='alert alert-danger'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b><strong>Mobile Number $mobile  is Not Valid try Valid</strong></b>
                  </div> ";
        die();
    }
    if(strlen($mobile) < 9 || strlen($mobile) > 9 ){
        echo " <div class='alert alert-danger'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b><strong>Mobile number $mobile is Should be 9 digit && Not More 10</strong></b>
                  </div> ";
        die();
    }
    // exiting email address in our database

    $sql="SELECT user_id FROM uset_info where email='$email' LIMIT 1";
    $check_query=mysqli_query($conn,$sql);
    if(mysqli_num_rows($check_query) > 0){
         echo " <div class='alert alert-danger'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b><strong>Try Address is  already $email  Available Try Another Email Address</strong></b>
              </div> ";
        die();
    }
    else{
        $password=md5($password);
        $sql2="INSERT INTO `uset_info`(`frist_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`)
                VALUES
                ('$f_name','$l_name','$email','$password','$mobile','$address1','$address2')";
        $mys_query_run_user=mysqli_query($conn,$sql2);
        if($mys_query_run_user){
            echo "
            <div class='alert alert-info'>
                  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b><strong>You are Registered Successfully ..!</strong></b>
             </div>    ";
        }
    }
}