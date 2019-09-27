<?php
    trait php{
        public function oopPhp(){
            echo "I'm learning OOp php. <br>";
        }
    }

    trait laravel{
        public function laravelFremwork(){
            echo "I will lear laravel. <br>";
        }
    }

    class first{
        use php; //now can access to php trait, not laravel
    }

    class second{
        use php; //now can access to php trait, not laravel
    }

    class third{
        use laravel; //now can access to laravel trait, not php
    }

    class forth{
        use php, laravel; //now can access to laravel and php trait 
    }




    //------------------------------------------------------------
    trait merge{ // merge trait
        use php, laravel;
    }

    class fifth{
        use merge; //now can access to laravel and php trait 
    }


    //------------------------------------------------------------
    class sixth{
        use php; //now can access to laravel and php trait 

        public function oopPhp(){ //override the method of php trait
            echo "Hello world! <br>";
            // OUTPUT: Hello world!
        }
    }




    $cls1=new first;
    $cls2=new second;
    $cls3=new third;
    $cls4=new forth;
    $cls5=new fifth;
    $cls6=new sixth;

    $cls1->oopPhp(); //accessed to php trait
    $cls2->oopPhp(); //accessed to php trait
    $cls3->laravelFremwork(); //accessed to laravel trait
   
    echo "<hr></hr>";
    
    $cls4->laravelFremwork(); //accessed to laravel trait
    $cls4->oopPhp(); //accessed to laravel trait
  
    echo "<hr></hr>";
    $cls5->laravelFremwork(); //accessed to laravel trait
    $cls5->oopPhp(); //accessed to laravel trait
   
    echo "<hr></hr>";
    $cls6->oopPhp(); //accessed to laravel trait

    /*
    OUTPUT:
    
    I'm learning OOp php.
    I'm learning OOp php.
    I will lear laravel.

    I will lear laravel.
    I'm learning OOp php.

    I will lear laravel.
    I'm learning OOp php.

    Hello world!
    
    
    */


?>
