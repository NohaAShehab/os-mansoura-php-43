<?php

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<div class='container fs-5' >  ";

echo '<h1> Abstract classes  </h1>';

abstract class Base {
    function __construct() {
        echo " <br> <b> This is abstract class constructor ";
    }
// This is abstract function #abstract function cannot contain body
    abstract function printdata();
}


class Derived extends base {
    function __construct() {
        echo "<br> <b> Derived class constructor";
        Base::__construct();
    }
    function printdata() {
        echo "<br> <b> Derived class printdata function";
    }
}

$b1 = new Derived;
var_dump($b1);

