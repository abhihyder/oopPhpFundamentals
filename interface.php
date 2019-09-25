<?php
    interface school {
        //Interface cannot contain property
        
       //declared method
        public function mySchool(); // Interface method cannot contain body as like class method.
    }

    interface college {
      
        public function myCollege(); 
    }

    interface university {
       //declared method
        public function myUniversity(); // Interface method cannot contain body as like class method.
    }

    class teacher implements school, college, university { //implemented to interfaces.syntex : class className implements interface1, interface2,interface3.....


        //declared method
        public function __construct(){
            $this->mySchool();
            $this->myCollege();
            $this->myUniversity();
        }

        public function mySchool(){ //override interface method.
            echo "I'm a school Teacher. </br>";

        }

        public function myCollege(){ //override interface method.
            echo "I'm a college Teacher. </br>";

        }

        public function myUniversity(){ //override interface method.
            echo "I'm an university Teacher. </br>";

        }
    }

    // i can create more class
    
    class student implements school, college, university { //implemented to interfaces.syntex : class className implements interface1, interface2,interface3.....


        //declared method
        public function __construct(){
            $this->mySchool();
            $this->myCollege();
            $this->myUniversity();
        }

        public function mySchool(){ //override interface method.
            echo "I'm a school student. </br>";

        }

        public function myCollege(){ //override interface method.
            echo "I'm a college student. </br>";

        }

        public function myUniversity(){ //override interface method.
            echo "I'm an university student. </br>";

        }
    }

    $teacher= new teacher;
    $student= new student;
    // can't create object of interface
?>