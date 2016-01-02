<?php

namespace src\Bitm\SEIP118719\City;

class City {
    public $id;
    public $city;
    public $created;
    public $modified;
    public $created_by;
    public $modified_by;
    public $deleted_at;
    
      public function __construct($id=false){
        
    }
    public function index(){
        echo "I am listing data";
    }
        public function create(){
        echo "I am create form";
    }
        public function store(){
        echo "I am storing data";
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
