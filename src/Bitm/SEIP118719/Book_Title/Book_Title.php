<?php

namespace App\Bitm\SEIP118719\Book_Title;

use \App\Bitm\SEIP118719\Utility\Utility;

class Book_Title {
    //public $serial_no="";
    //public $id="";
    public $book_title="";
    public $author="";
    //public $created = "";
    ///public $modified = "";
    // public $created_by = "";
    // public $modified_by = "";
    // public $deleted_at = ""; //soft delete
    
    public function __construct($data = false){
        $this->author=$data['author'];
        $this->book_title=$data['book_title'];
    }
    public function index(){
        $book_objs = array();
        $conn=  mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk=  mysql_select_db("db_atomic_project_suraiya") or die("Cannot select database.");
        $query="SELECT * FROM `tbl_books`";
        $result=  mysql_query($query);
        while ($row = mysql_fetch_object($result)) {
            $book_objs[]=$row;
        }
        return $book_objs;
    }
        public function create(){
        echo "I am create form";
    }
    public function store(){
        $conn=  mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk=  mysql_select_db("db_atomic_project_suraiya") or die("Cannot select database.");
        $query="INSERT INTO `db_atomic_project_suraiya`.`tbl_books` (`book_title`, `author`) VALUES ('".$this->book_title."', '".$this->author."')";
        $result=  mysql_query($query);
        if($result){
        $_message="All data added successfully.";
        }
            else{
               $_message="There is problem loading page, please try again later..."; 
            }
        Utility::redirect('../../SEIP118719/Book_Title/index.php');
    }
    
        public function edit(){
        echo "I am ediging form";
    }
        public function update(){
        echo "I am updating data";
    }
        public function delete(){
        echo "I am deleting data";
    }
    
}
