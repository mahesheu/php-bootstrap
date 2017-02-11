<?php
 
    require_once(realpath(dirname(__FILE__) . "/resources/config.php"));
    require_once(LIBRARY_PATH . "/templateFunctions.php");
    $pageTitle = 'override title here';
    $testVariable  = "Hey, i am a test variable";
     
   
    $variables = array(
        'testVariable' => $testVariable,
        'title'=>$title,
    );
    renderLayoutWithContentFile("home.php", $variables); 
?>
