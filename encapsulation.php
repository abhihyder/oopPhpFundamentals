<?php


    //parent
    class FathersProperties{

        private function personalProperties(){ //can't access from out of class
            return '20 Katha of land is my personal properties. <br>';
        }

        protected function familyProperties(){ //can access from also child class
            return '20 Katha of land is allocate for my family. <br>';
        }
    }

    //child
    class NewFamily extends FathersProperties{

        public function myProperties(){
            return $this->familyProperties();
        }
    }


    class FathersProperties2{

        private function personalProperties2(){
            return '20 Katha of land is my personal properties. <br>';
        }

        protected function familyProperties2(){
            return '20 Katha of land is allocate for my family. <br>';
        }

        public function publicProperties2(){  // can access from every where.
            return 'This properties is allocated for publicly use. <br>';
        }
    }


    class FathersProperties3{
        private function personalProperties3(){
            return '20 Katha of land is my personal properties. <br>';
        }

        protected function familyProperties3(){
            return '20 Katha of land is allocate for my family. <br>';
        }

        public function publicProperties3(){
            return 'This properties is allocated for publicly use. <br>';
        }
    }


    $property=new NewFamily;
    echo $property->myProperties();

    $property3=new FathersProperties3;
    echo $property3->publicProperties3();