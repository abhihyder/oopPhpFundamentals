<?php


    //Creating a copy of an object with fully replicated

    class demo{

        public $name;
        public $age;

        function student($a){
            $this->name=$a;
        }

        function student2(){
           echo "Name is ". $this->name."<br>";
        }

        function details($b){
            $this->age=$b;
        }

        function details2(){
           echo "Age is ". $this->age."<br>";
        }
    }

    $obj= new demo;
    $obj->student("Badhon");
    $obj->details("24");
    $obj->student2();
    $obj->details2();

    $obj2= clone $obj; // by clone an object I can reuse the object as new. 
    $obj2->student("Abhi");
    $obj2->details("27");
    $obj2->student2();
    $obj2->details2();





    /*
    
    OUTPUT:

    Name is Badhon
    Age is 24
    Name is Abhi
    Age is 27

    */