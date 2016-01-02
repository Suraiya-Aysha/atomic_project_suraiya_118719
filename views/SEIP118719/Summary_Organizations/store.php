<?php
include_once("../../../vendor/autoload.php"); //using relative path

//include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'AtomicProject'.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php'); //using absolute path

use \App\Bitm\SEIP118719\Summary_Organizations\Summary_Organizations;

$summary_orga_obj = new Summary_Organizations($_POST);
$summary_orga_obj->store();
