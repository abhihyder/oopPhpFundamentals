
<?php
    /*

    Example 1:


    class teacher{ 

        public function mySchool(){ 
            echo "I'm a school Teacher. </br>";
            return $this;  //for method chaining, have to return this method

        }

        public function myCollege(){ 
            echo "I'm a college Teacher. </br>";
            return $this;


        }

        public function myUniversity(){
            echo "I'm an university Teacher. </br>";
            return $this;


        }
    }

    $object= new teacher;
    $object->mySchool()->myCollege()->myUniversity();


   
    
    OUTPUT:

        I'm a school Teacher.
        I'm a college Teacher.
        I'm an university Teacher.
        
    */




    //Example 2:

    class math{
        public $a=1;
        public $b=0;
        public $result;

        public function value($x, $y){ //for method chaining, have to return this method
            $this->a=$x;
            $this->b=$y;
            return $this;
            
        }

        public function calculate(){
           $this->result= $this->a* $this->b;  
           return $this->result;
        }
    }

    $obj= new math;
   echo $obj->value(6,9)->calculate();




?>