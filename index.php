<?php
https://stackoverflow.com/questions/4114095/how-do-i-revert-a-git-repository-to-a-previous-commit
/**
 * Example Application
 *
 * @package Example-application
 */
require 'libs/Smarty.class.php';
$smarty = new Smarty;
$url= $_SERVER['REQUEST_URI'];
$action = trim($url,'/');
if ($action ==  "/" || $action == "" ) {
     $smarty->display('index.tpl') ;  
}

if ($action== "contact") {
    $smarty->display('contact.tpl');
}