<?php

//https://www.php.net/manual/en/language.oop5.constants.php

    class constent{

        // Constent declaration
        const NAME= "Tofayel Hyder Abhi";

        public function myName(){
            echo "My name is ".constent::NAME; //syntex: className::constName.
        }

        
    }

    $object1= new constent;
    $object1->myName();

?>