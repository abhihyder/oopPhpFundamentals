<?php
    /*
    ### This is the example of normal class

      class  student{
        public $name;
        public $class;

        public function details(){
            echo $this->name. " is a student of class " .$this->class;
        }
    }

    $object= new student; //object created
    $object->name= "Pranto";   //value assigned to property
    $object->class= "Ten";
    $object->details();


    OUTPUT:

    Pranto is a student of class Ten

    */


    // abstract class
    abstract class  student{
        public $name;
        public $class;

        public function details(){ //non-abstract method
            echo $this->name. " is a student of class " .$this->class; //if we want to print abstract class method, have to create a subclass .
        }

        abstract public function details2();//abstract method. it can contain body.

    }

    class boys extends student{

        public function studentDetails(){
            echo parent::details()."<br>"; //accessed to parent method.
            echo "And he is a good student. <br>";

        }

        public function details2(){
            echo "Also a good boy."; //override the abstract method.
        }
    }

    
    // we can't create  object of abstract class
    $object= new boys;
    $object->name= "Zamil";
    $object->class= "10";
    $object->studentDetails(); //
    $object->details2(); //

    /*
    OUTPUT:

    Zamil is a student of class 10
    And he is a good student.
    Also a good boy.

    */

?>