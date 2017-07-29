<?php
/*------------ Way2sms code by www.Howi.In -----
 |  Find More Scripts @ www.Howi.in
 *--------------------------------------------*/
include('way2sms-api.php');
$uid = $_POST['user'];
$pass = $_POST['pass'];
$phone = $_POST['phone'];
$message = $_POST['message'];
sendWay2SMS($uid,$pass,$phone,$message);
/*------------ Way2sms code by www.Howi.In -----
 |  Find More Scripts @ www.Howi.in
 *--------------------------------------------*/
