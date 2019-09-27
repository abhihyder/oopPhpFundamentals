<?php

    class iteration{

        public $a="Tofayel";
        private $b="Hyder";
        protected $c= "Abhi";

        function demo(){
            echo "<b>Inside class</b> <br>";
            foreach($this as $key){
                
                echo $key."<br>";
            }
        }


    }

    $object= new iteration;

    foreach($object as $key){

        echo $key."<br>";
    }

    $object->demo();