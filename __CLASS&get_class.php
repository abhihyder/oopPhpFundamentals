<?php

    abstract class abstrcCls{
        function one(){
            echo "Base class -> ".__CLASS__."<br>";
            echo "Base function -> ".get_class($this)."<br>";
        }

    }

    class chldCls extends abstrcCls{
        function two(){
            echo "Child class ->  ".__CLASS__."<br>";
            echo "child function -> ".get_class($this)."<br>";
        }
    }


    $obj= new chldCls;
    $obj->one();
    echo "<hr>";
    $obj->two();