<?php
include_once("../../../vendor/autoload.php"); //using relative path

//include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'AtomicProject'.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php'); //using absolute path

use App\Bitm\SEIP118719\Book_Title\Book_Title;
use \App\BITM\SEIP118719\Utility\Utility;
use \App\BITM\SEIP118719\Mobile\Model;


$book = new Book_Title($_POST['title']);
$message =  $book->store($book);

echo $message;
//Utility::redirect();

