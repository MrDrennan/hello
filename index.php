<?php

// This is our controller

// Turn on Error reporting
ini_set("display_errors", 1);
error_reporting(E_ALL);

// auto generated file by fat free. Includes all the dependencies
require_once('vendor/autoload.php');

// Create instance of the base class
$f3 = Base::instance();

// Define a default route
$f3->route('GET /', function() {
    $view = new Template();
   echo $view->render('views/home.html');
});

//Run fatfree
$f3->run();