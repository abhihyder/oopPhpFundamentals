


<form action="" method="POST">
    <table>
        <tr>
            <td>Input 1 :</td>
            <td><input type="number" name="frstnmbr"></td>
        </tr>

        <tr>
            <td>Input 2 :</td>
            <td><input type="number" name="scndnmbr"></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="calculate" value="Calculate"></td>
            
        </tr>
    </table>
</form>




<?php

    class myclass{  //myclass is a class
        function add($a, $b){  // add is a method and $a $b used to receive value from object
            echo "Summetion = ".($a+$b)."<br>";
        }
        function sub($c, $d){  
            echo "Subtraction = ".($c-$d)."<br>";
        }
        function mul($e, $f){   
            echo "Multiplication = ".($e*$f)."<br>";
        }
        function div($g, $h){
            echo "Divition = ".($g/$h);
        }
    }
   

    //Receive form data

    if(isset($_POST['calculate'])){
        $frstnmbr=$_POST['frstnmbr'];  //assign to a var
        $scndnmbr=$_POST['scndnmbr'];

        if(empty($frstnmbr) or empty($scndnmbr)){
            echo '<span style="color:red"> Field must not be empty</span>';
        }else{
            echo "First input ".$frstnmbr. " and second input ".$scndnmbr."<br>";

            $obj= new myclass;   //$obj is a object

            $obj->add($frstnmbr, $scndnmbr);  //assign the method value argument
            $obj->sub($frstnmbr, $scndnmbr);
            $obj->mul($frstnmbr, $scndnmbr);
            $obj->div($frstnmbr, $scndnmbr);


        }
    }

?>
