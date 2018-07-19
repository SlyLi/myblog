<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/17 0017
 * Time: 上午 9:43
 */

include "boot.php";


$render["articles"] = getArticles();

view($render);
//
//
//
//include "header.php";
//include "footer.php";