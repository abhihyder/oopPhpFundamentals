<?php
// we can mention what type of data are receiving in method paremeter as like array, boolean, NULL etc also object.

        //example 1
    class hinting{

        function example(array $x){ //data type "array".
            foreach ($x as $i){
                echo $i[0];
                echo " : ";
                echo $i[1]*$i[2];
                echo "<br>";

            }


        }
    }


    $array= array(array("First",10,12),
                array("Second",8,9)
            );

    $object= new hinting;
    $object->example($array);


    //----------------------------------------------------------------
        //example 2

    class hinting2{

        function example2(){
            echo "I love to sleep!";
            
        }
    }

    class hinting3{

        public $data;

        function example3(hinting2 $y){
            $this->data= $y;
            echo $this->data->example2();

        }
    }



    $object2= new hinting2;

    $object3= new hinting3;
    $object3->example3($object2);

?>