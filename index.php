<?php
spl_autoload_register(function ($class){
    include_once "system/libs/".$class.".php";
});

include "app/config/config.php";

$url = isset($_GET['url']) ? $_GET['url'] : NULL;
if($url != NULL) {
    $url = rtrim($url, '/');
    $url = explode("/", $url );
}
else {
    unset($url);
}

if(isset($url[0]))
{
    include 'app/controllers/'.$url[0].'.php';
    $ctlr = new $url[0]();
    if(isset($url[2])){
        $ctlr->$url[1]($url[2]);
    }
    else{
        if(isset($url[1])){
            $ctlr->$url[1]();
        }
        else {
        }
    }
}
else {
    include 'app/controllers/Index.php';
    $ctlr = new Index();
    $ctlr->home();
}
