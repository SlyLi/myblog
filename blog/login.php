<?php

include "boot.php";

$_SESSION["author"]=null;

view($render);


$_SESSION["loginError"] = null;
