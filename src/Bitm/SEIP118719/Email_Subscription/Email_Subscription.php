<?php

namespace App\Bitm\SEIP118719\Email_Subscription;
use \App\Bitm\SEIP118719\Utility\Utility;

class Email_Subscription {
    //public $serial_no="";
    //public $id="";
    public $first_name="";
    public $last_name="";
    public $email_subscription;
    //public $created;
   // public $modified;
    //public $created_by;
    //public $modified_by;
    //public $deleted_at;
     
    public function __construct($data = false){
        $this->first_name=$data['first_name'];
        $this->last_name=$data['last_name'];
        $this->email_subscription=$data['email_subscription'];
    }
    public function index(){
        $email_subscription_objs = array();
        $conn=  mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk=  mysql_select_db("db_atomic_project_suraiya") or die("Cannot select database.");
        $query="SELECT * FROM `tbl_email_subscriptions`";
        $result=  mysql_query($query);
        while ($row = mysql_fetch_object($result)) {
            $email_subscription_objs[]=$row;
        }
        return $email_subscription_objs;
    }
        public function create(){
        echo "I am create form";
    }
    public function store(){
        $conn=  mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk=  mysql_select_db("db_atomic_project_suraiya") or die("Cannot select database.");
        $query="INSERT INTO `db_atomic_project_suraiya`.`tbl_email_subscriptions` (`first_name`, `last_name`, `email_subscription`) VALUES ('".$this->first_name."', '".$this->last_name."', '".$this->email_subscription."')";
        $result=  mysql_query($query);
        if($result){
        $_message="All data added successfully.";
        }
            else{
               $_message="There is problem loading page, please try again later..."; 
            }
        Utility::redirect('../../SEIP118719/Email_Subscription/index.php');
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
