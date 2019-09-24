<?php

    /*
    3 types of properties are there, that called access modifier 
    
    Access modifiers :
        public
        private
        protected
    
    public: we can access to this property also outside the class and also from sub class.

    private: we can access to this property olny inside the class not from sub class or outside the class.

    protected: we can access to this property from inside the class and sub class not from outside the class

    
    */
    class details {  //parentClass or superClass 
     
        public $name="Tofayel";
        private $name2="Hyder";
        protected $name3="Abhi";
        

        public function myDetails() {
            echo "My name is ". $this->name." which is public. </br>";
            echo "My name is ". $this->name2." which is private.</br>";
            echo "My name is ". $this->name3." which is protected.</br>";
            echo "<hr></hr>";
        }
    }

 
    
    class profile extends details {  //childClass or subClass
       
        public function moreDetails(){
            echo "This is ". $this->name." which is public. </br>";
            echo "This is ". $this->name3." which is protected.</br>";
            echo "<hr></hr>";
        }
         
    }


    //object
    $obj= new details;
    
    //object    
    $subobj= new profile; 
    
   $obj->myDetails();
   $subobj->moreDetails();

   //access to public property
   echo $obj->name."</br>";
   echo $subobj->name."</br>";


   /*
   OUTPUT:

    My name is Tofayel which is public.
    My name is Hyder which is private.
    My name is Abhi which is protected.

    This is Tofayel which is public.
    This is Abhi which is protected.
    
    Tofayel
    Tofayel
   */
    
?>