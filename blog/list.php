<?php

include "boot.php";


//$render["edit"] = true;
authAccess();

$render["articles"] = getArticles();

view($render);