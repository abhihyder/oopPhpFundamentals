<?php
    /*
    check class and method existence

    Syntex for class:

    if(class_exists("className")){
        $object= new className;
     
    }

    Syntex for method:

    if(method_exists($object, "methodName")){
        $object= new methodName;
    
    }

    */


    class  student{

        public $name="Faran";
        public $class=10;

        public function details(){
            echo $this->name. " is a student of class " .$this->class."<br>";
        }




    }
    // check existence

    if(class_exists("student")){  //class existence check

        $object= new student; //object created
        if(method_exists($object, "details")){
            $object->details();
        }else{
            echo "Sorry, details method not exists! ";
        }
       

    }else{
        echo "Sorry, Student class not exists!";
    }
    
?>