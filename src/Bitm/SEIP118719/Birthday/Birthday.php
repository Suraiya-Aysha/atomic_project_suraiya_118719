<?php

namespace App\Bitm\SEIP118719\Birthday;
use \App\Bitm\SEIP118719\Utility\Utility;
class Birthday {
    public $serial_no="";
    public $id="";
    public $user_name="";
    public $birth_date="";
    // public $created;
    //public $modified;
    //public $created_by;
    //public $modified_by;
    //public $deleted_at;
    
    public function __construct($data=false){
        $this->user_name=$data['user_name'];
        $this->birth_date=$data['birth_date'];
    }
    public function index(){
        $birth_objs = array();
        $conn=  mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk=  mysql_select_db("db_atomic_project_suraiya") or die("Cannot select database.");
        $query="SELECT * FROM `tbl_birthdays`";
        $result=  mysql_query($query);
        while ($row = mysql_fetch_object($result)) {
            $birth_objs[]=$row;
        }
        return $birth_objs;
    }
        public function create(){
        echo "I am create form";
    }
    public function store(){
        $conn= mysql_connect("localhost","root","") or die("Cannot connect with database.");
        $lnk=  mysql_select_db("db_atomic_project_suraiya") or die("Cannot select database.");
        $query="INSERT INTO `db_atomic_project_suraiya`.`tbl_birthdays` (`user_name`, `birth_date`) VALUES ('".$this->user_name."', '".$this->birth_date."')";
       
        $result =  mysql_query($query);
        if($result){
            $_message= "Birthday Date is added successfully.";
        }else{
            $_message= "There is an error while saving data. Please try again later.";
        }
       Utility::redirect('../../SEIP118719/Birthday/index.php');
    }
        public function edit(){
        echo "I am editing form";
    }
        public function update(){
        echo "I am updating data";
    }
        public function delete(){
        echo "I am deleting data";
    }
}
