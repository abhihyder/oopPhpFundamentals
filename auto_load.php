<?php

    /*
    ### Normal prosidure to include file

    include "folder/include.php";
    include "folder/include2.php";



    $php     = new php;
    $laravel = new laravel;

    $php->learnPhp();
    $laravel->learnLaravel();
   
    */



    //---------------------------------------------------------
    // Some Standerd prosidure to include file


  
    /*

    function __autoload($class_name){  //
        include 'folder/' . $class_name . '.php';
    }

    */

    // Recommended
    spl_autoload_register(function ($class_name) {
        include 'folder/'.$class_name . '.php';
    });
    
    // NOTE: in that case className and fileName should be same. Example: file name is "demo.php", so class name "class demo{}"

    // create object 
    $php     = new php; //class name will assign to $class_name.
    $laravel = new laravel;

    $php->learnPhp();
    $laravel->learnLaravel();

?>