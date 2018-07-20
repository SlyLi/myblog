<?php

include "boot.php";


authAccess();




if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $fileName = "articles" . "/" . $id . ".dat";
    if (file_exists($fileName)) {
        $data = file_get_contents($fileName);
        $out = preg_replace_callback('#s:(\d+):"(.*?)";#s',function($match){return 's:'.strlen($match[2]).':"'.$match[2].'";';},$data);
        $render["article"] = unserialize($out);

       // unlink($fileName);
    }
}

view($render);