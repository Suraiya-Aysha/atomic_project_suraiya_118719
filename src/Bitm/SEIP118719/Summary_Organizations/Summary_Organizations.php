<?php

namespace App\Bitm\SEIP118719\Summary_Organizations;
use \App\Bitm\SEIP118719\Utility\Utility;

class Summary_Organizations {
    public $serial_no="";
    public $id="";
    public $company_name="";
    public $summary_organizations="";
    //public $created;
    //public $modified;
   // public $created_by;
    //public $modified_by;
    //public $deleted_at;
    
    public function __construct($data=false){
        $this->company_name=$data['company_name'];
        $this->summary_organizations=$data['summary_organizations'];
    }
    public function index(){
        $summary_orga_objs = array();
        $conn=  mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk=  mysql_select_db("db_atomic_project_suraiya") or die("Cannot select database.");
        $query="SELECT * FROM `tbl_summary_organizations`";
        $result=  mysql_query($query);
        while ($row = mysql_fetch_object($result)) {
            $summary_orga_objs[]=$row;
        }
        return $summary_orga_objs;
    }
        public function create(){
        echo "I am create form";
    }
    public function store(){
        $conn=  mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk=  mysql_select_db("db_atomic_project_suraiya") or die("Cannot select database.");
        $query="INSERT INTO `db_atomic_project_suraiya`.`tbl_summary_organizations` (`company_name`, `summary_organizations`) VALUES ('".$this->company_name."', '".$this->summary_organizations."')";
        $result=  mysql_query($query);
        if($result){
        $_message="All data added successfully.";
        }
            else{
               $_message="There is problem loading page, please try again later..."; 
            }
        Utility::redirect('../../SEIP118719/Summary_Organizations/index.php');
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
