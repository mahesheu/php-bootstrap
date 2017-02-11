<?php
 
/*
    The important thing to realize is that the config file should be included in every
    page of your project, or at least any page you want access to these settings.
    This allows you to confidently use these settings throughout a project because
    if something changes such as your database credentials, or a path to a specific resource,
    you'll only need to update it here.
*/
 
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
