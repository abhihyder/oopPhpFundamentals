<?php

    class demoConstructor{

        public $name;
        public $id;

        function  __construct($user, $userId){
            $this->name= $user;  // value assigned to $name
            $this->id= $userId;
            echo "My username is {$this->name} and ID is {$this->id} ";
        }

        function __destruct(){
            unset($this->name);
            unset($this->id);
        }

    }

    $object= new demoConstructor("Ahmed", "20");  //perameter value will assign to $user and $userId, construct will load here
    

?>