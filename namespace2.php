<?php
    namespace webdesign; // that means all same namespace classes are there


    include "namespace/html.php";
    include "namespace/css.php";
    include "namespace/jquery.php";


    $html=   new markup; // no need to include namespace
    $css=    new style;  // no need to include namespace
    $jquery= new \jQuery; // that means this class's doesn't have namespace
    
    $html->htmlMarkup();
    $css->stylesheet();
    $jquery->jqueryPlugin();