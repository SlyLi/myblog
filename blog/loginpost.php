<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/17 0017
 * Time: 下午 2:29
 */
include "boot.php";

$id= $_POST["id"];
$passwd=$_POST["passwd"];

      $connection = mysqli_connect("localhost","root","","myblog","3306");
        $sql="select * from user_info where user_name=\"".$id."\" and user_password=\"".$passwd."\" ;";
        //echo $id." pad ".$passwd." sql ".$sql."\n";
        $result = mysqli_query($connection,$sql);
        if(mysqli_num_rows($result)>0)
        {
            $_SESSION["loginError"] = null;
            $_SESSION["author"]=$id;
            header("location:list.php");
            die();

        }
        else
        {
            $_SESSION["loginError"] ="请检查用户名或密码是否正确！";
            header("location:login.php");
            die();
        }