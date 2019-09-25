<?php
    /*
    Magic methods:

        __construct
        __destruct
        __get($property)
        __set($property, $value)
        __call($method, $arg-array)

    */


    class  student{

        public $name;
        public $class;

        public function details(){
            echo $this->name. " is a student of class " .$this->class."<br>";
        }

        public function __get($demo){ 
            echo "$demo is learning OOP php.<br>";

        }

        public function __set($demo2, $value){
            echo "I'm $value years old. <br>";

        }

        public function __call($method, $array){
            echo "This is $method and value are ". implode(', ', $array)." .<br>";

        }




    }

    $object= new student; //object created
    $object->name= "Pranto";   //value assigned to property
    $object->class= "Ten";
    $object->details();
    $object->Tofayel; // undefined proprty. it will assign to __get method
    $object->age=27; // assign a value to undefined property. value will assign                     to __set method.
    $object->undefinedMethod(2,5,7,8); //