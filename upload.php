<?php
/**
 * Created by PhpStorm.
 * User: Pax
 * Date: 15/10/24
 * Time: 21:25
 */
    $mysql_server_name = "localhost";
    $mysql_username = 'root';
    $mysql_password = '7b91f1fee2';
    $link = mysql_connect($mysql_server_name,$mysql_username,$mysql_password);
    mysql_select_db('Vote',$link);
    $sql = "select * from class ";
    $result = mysql_query($sql);

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$avatar = $_POST['avatar'];
$declaration = $_POST['declaration'];
echo($gender);
?>