<?php

    class demoConstructor{

        public $name;

        function  __construct($a){
            $this->name= $a;

        }

        function myname(){
            echo "My name is {$this->name}";

        }
    }

    $object= new demoConstructor("Ahmed");
    $object->myname();

?>