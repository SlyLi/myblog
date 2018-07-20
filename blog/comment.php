<?php


$commit=$_POST["comment"];

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $fileName = "articles" . "/" . $id . ".dat";
    if (file_exists($fileName)) {
        $data = file_get_contents($fileName);
        $out = preg_replace_callback('#s:(\d+):"(.*?)";#s',function($match){return 's:'.strlen($match[2]).':"'.$match[2].'";';},$data);
        $row = unserialize($out);
        $row["comment"][]=$commit;

        unlink($fileName);
        $fileContent = serialize($row);
        //写入文件
        file_put_contents($fileName, $fileContent);
    }
    header("location:article.php?id=".$id);
}
