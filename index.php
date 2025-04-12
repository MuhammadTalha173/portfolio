<?php
session_start();
require_once "head.php";
require_once "header.php";
require_once "navbar.php";
if(isset($_REQUEST["page"])){
    $page=$_REQUEST["page"];
        require_once $page;
    }
    else{
        require_once "body.php";
    }

require_once "footer.php";





?>

