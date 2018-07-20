<?php

include "boot.php";


$data = $_POST;


if (empty($data["id"])) {
    $data["id"] = uniqid();
}

$data["created"]= date("Y-m-d G:i:s");
//序列化数据
$fileContent = serialize($data);

//构建数据文件名
$fileName = articles . "/" . $data["id"] . ".dat";


 if (file_exists($fileName)) {
        unlink($fileName);
    }
//写入文件
file_put_contents($fileName, $fileContent);

//跳转到admin.php
header("location:article.php?id=".$data["id"]);

