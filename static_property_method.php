<?php

    // by static property and method we can access to property and method without object
    class statics{
        //Declaring class properties or methods as static makes them accessible without needing an instantiation of the class. A property declared as static cannot be accessed with an instantiated class object (though a static method can).
        
        public static $name="Hyder";  //static property

        public static function myName(){
        echo "My name is ".self::$name;  //syntex: self::propertyName
     }

        
    }

    statics::myName();

?>