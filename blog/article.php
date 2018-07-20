<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/17 0017
 * Time: 下午 5:21
 */
include "boot.php";


if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $fileName = "articles" . "/" . $id . ".dat";
    if (file_exists($fileName)) {
        $data = file_get_contents($fileName);
        $out = preg_replace_callback('#s:(\d+):"(.*?)";#s',function($match){return 's:'.strlen($match[2]).':"'.$match[2].'";';},$data);
        $render["article"] = unserialize($out);
    }
}
view($render);