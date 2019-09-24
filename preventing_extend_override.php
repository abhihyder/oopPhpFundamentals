<?php

    /*
    here we created a perent class and a subclass of perent class by extend keyword.
    but if we don't allow to extend the perent class, we have to add "final" keyword befor perent class.
    Example: final class className{}
    
    Also we can do same thing for method:
    Example: public final function methodName(){}

    after added "final" keyword if extend these a error will generet.
    
    
    
    
    
    */
    final class details {  //parentClass or superClass 
     
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
    $subobj= new profile("Tofayel Hyder Abhi", "https://www.facebook.com/tofayelhyder"); 
    
    echo "<br>";
    
    echo "My FB name is ".$subobj->name. " and user link is ".$subobj->address; 
    echo "<br>";
    
    $subobj->myDetails();  
    echo "<br>";

 
    
?>