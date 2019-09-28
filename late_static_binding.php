<?php

    class Cat {
        public static function run() {
            echo 'Cat runs';
        }
        public static function tester() {
            static::run(); //if we use "self" as scope regulation oerator, it will not be override
        }
    }
    class Leopard extends Cat {
        public static function run() {
            echo 'Leopard runs faster than cat'; // override the paren method "run".
        }
    }
    Leopard::tester(); // by static property and method we can access to property and method without object


?>