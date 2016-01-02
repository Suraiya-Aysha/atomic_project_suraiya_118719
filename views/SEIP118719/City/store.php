<?php
include_once("../../../vendor/autoload.php"); //using relative path

//include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'AtomicProject'.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php'); //using absolute path

use App\Bitm\SEIP118719\Book_Title\Book_Title;
use \App\Bitm\SEIP118719\Utility\Utility;
use \App\Bitm\SEIP118719\Birthday\Birthday;


$birthday = new Birthday($_POST['name']);
$birthday = new Birthday($_POST['date']);
$message =  $birthday->store($birthday);

echo $message;
//Utility::redirect();

