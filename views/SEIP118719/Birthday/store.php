<?php
include_once("../../../vendor/autoload.php"); //using relative path

//include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'AtomicProject'.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php'); //using absolute path

use \App\Bitm\SEIP118719\Birthday\Birthday;


$birth_obj = new Birthday($_POST);
$birth_obj->store();

