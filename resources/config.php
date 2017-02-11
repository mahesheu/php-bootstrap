<?php
 
 
$config = array(
    "db" => array(      
            "dbname" => "database1",
            "username" => "root",
            "password" => "root",
            "host" => "localhost"
             
    ),
    "urls" => array(
        "baseUrl" => "http://nintriva.com"
    ),
    "paths" => array(
        "resources" => "/path/to/resources",
        "images" => array(
            "content" => $_SERVER["DOCUMENT_ROOT"] . "/images/content",
            "layout" => $_SERVER["DOCUMENT_ROOT"] . "/images/layout"
        )
    )
);
$params = array('element1'=>'value1');
 

defined("APP_NAME")or define("APP_NAME", 'My Web Application');
defined("LIBRARY_PATH")or define("LIBRARY_PATH", realpath(dirname(__FILE__) . '/library'));
defined("TEMPLATES_PATH") or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));
 
/*
    Error reporting.
*/
ini_set("error_reporting", "true");
error_reporting(E_ALL|E_STRCT);
 
?>
