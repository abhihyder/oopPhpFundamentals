<?php
    class person{   //"person" is a class

        public $name="Tofayel Hyder Abhi";
        public $age; // "$name and $age" are property. we can assign the value from object

        public function personName($a){    //"personName" is method
            echo "Person name is Abhi ".$a;
            
        }

        public function personAge(){   //"personAge" is method
            echo "Person age is ".$this->age;

        }

    }

        $object= new person;   //object created
        $object->age="25";  //assign the $age value by object

        echo $object->name;
        echo "<br>";
        echo $object->personName("Hyder");
        echo "<br>";
        echo $object->personName("Tofayel");
        echo "<br>";
        echo $object->age;