<?php

include "boot.php";

authAccess();

if (isset($_GET["id"])) {

    //构造文件名
    $id = $_GET["id"];
    $fileName = "articles" . "/" . $id . ".dat";

    //如果文件存在就删除
    if (file_exists($fileName)) {
        unlink($fileName);
    }
}

//跳转到admin.php
header('location:list.php');
