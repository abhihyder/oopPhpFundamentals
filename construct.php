<?php

    class demoConstructor{

        public $name;
        //if assigned any value in consturctor, this value is accessable from any method.
        function  __construct($a){
            $this->name= $a;  // value assigned to $name

            echo "My name is {$this->name}";
        }

    }

    $object= new demoConstructor("Ahmed");   //perameter value will assign to $a. construct will load here
    

?>