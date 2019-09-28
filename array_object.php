<?php


    $x=array("Rahim","Karim", "Jodu","Modhu", "Kodu");

    $object= new ArrayObject($x); //ArrayObject() is built in

    $object->append("Tina"); // assign more array value

    $iterator= $object->getIterator(); // getIterator() is built in


    while($iterator->valid()){
        echo $iterator->current()."<br>";
        $iterator->next();
    }



?>