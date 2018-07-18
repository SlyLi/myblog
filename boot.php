<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/17 0017
 * Time: 下午 3:45
 */

session_start();

function getArticles( )
{
    $files=scandir("articles");
    $files = array_diff($files, array('.', '..'));

    //如果是空目录则返回false
    if (empty($files)) {
        return false;
    }
    rsort($files);
    foreach ($files as $file)
    {
        $data=file_get_contents("articles/".$file);
        $out = preg_replace_callback('#s:(\d+):"(.*?)";#s',function($match){return 's:'.strlen($match[2]).':"'.$match[2].'";';},$data);
        $articles[]=unserialize($out);

    }
    return $articles;
}

function view($render)
{
    include "template". '/' . basename($_SERVER['PHP_SELF']);

}

$render = array();
