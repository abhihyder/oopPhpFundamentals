<?php
    include "namespace/farmework.php";
    include "namespace/oop.php";
   
   
    //Syntex: new namespaceName\className
    $objWeb = new OOPHP\Webcoachbd(); //create object
    $objWeb->getTutorial();

    $objFrm = new Framework\Webcoachbd(); //create object
    $objFrm->getTutorial();

    $objTwlp = new Framework\TWLP(); //create object
    $objTwlp->getTutorial();

    $objCss = new CSS\Webcoachbd(); //create object
    $objCss->getTutorial();

    $objHtml = new HTML\Webcoachbd(); //create object
    $objHtml->getTutorial();
?>