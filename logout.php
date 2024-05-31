<?php
session_start();
unset($_SESSION['uid']);
unset($_SESSION['uname']);
unset($_SESSION['uemail']);
header('location:index.php');
exit();