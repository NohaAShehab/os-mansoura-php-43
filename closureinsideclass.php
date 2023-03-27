<?php
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<div class='container fs-5' >  ";

echo '<h1> Classes  </h1>';



class Employee
{
    private $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    # higher order function
    function display(){
        echo "<h1> Object content {$this->name} </h1>";
        return function(){
            echo $this->name."<br>";
        };
    }

    function display2(){
        echo "<h1> Object content {$this->name} </h1>";
        $style='bold';
        return function($num) use($style){
            echo $this->name."<br>";
            echo $style;
        };
    }
}

$emp = new Employee("noha");
$res=$emp->display2();
var_dump($res);
$res(10);


