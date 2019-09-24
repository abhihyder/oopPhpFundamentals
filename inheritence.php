<?php

    class details {  //parentClass or superClass 
     
        public $name;
        public $address;
    
        public function __construct($myName, $district) {
            $this->name= $myName;
            $this->address= $district;
     
      
        }
        public function myDetails() {
            echo "My name is ". $this->name. " and address is ".$this->address;
        }
    }

    /*
    ### to declared a inheritence, create  a new class then extend with perent class by "extends" keyword. it called subclass or childclass
    
    ### syntex:
    class className extends perentClassName{}
    
    ### subclass can access to perent class's properties and methods.
    */
    
    class profile extends details {  //childClass or subClass
       
        public $age;
      
        public function moreDetails(){
            echo "I am ".$this->age." years old.";
        }
         
    }


    //object
    $obj= new details("Tofayel", "Matlab (North), Chandpur");
    $obj->myDetails();
    
    //object    
    $subobj= new profile("Tofayel Hyder Abhi", "https://www.facebook.com/tofayelhyder"); // perameter value will assign to properties of perent class.
    
    echo "<br>";
    
    echo "My FB name is ".$subobj->name. " and user link is ".$subobj->address; // here I accessed to perent class's property by subclass.
    echo "<br>";
    
    $subobj->myDetails();  // here I accessed to perent class's method by subclass.
    echo "<br>";

    $subobj->age=27; // value assign to subclass's property.
    $subobj->moreDetails();

    /*

    OUTPUT:

    My name is Tofayel and address is Matlab (North), Chandpur

    My FB name is Tofayel Hyder Abhi and user link is https://www.facebook.com/tofayelhyder

    My name is Tofayel Hyder Abhi and address is https://www.facebook.com/tofayelhyder

    I am 27 years old.


    */
?>