<?php
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<div class='container fs-5' >  ";

echo '<h1> Classes  </h1>';


$myclousre=function(){

    echo "<h2 style='color: purple'> {$this->name}  </h2><br>";
};


//$myclousre();


class Person{

    public  $name;
    function __construct($name){
        $this->name = $name;
    }
}

$p = new Person("Noha");

var_dump($p);
$objclouser=$myclousre->bindTo($p);


var_dump($p);

var_dump($objclouser);

$objclouser();


//class Employee{
//    public $name;
//    function  __construct($name){
//        $this->name=$name;
//    }
//}
//
//$emp = new Employee("fekfj");
//
//$empclosre=  $myclousre->bindTo($emp);
//
//$empclosre();

##################################3

//$myclousre=function(){
//    echo "{$this->name} <br>";
//    echo $this->property."<br>";
//};
//class MyClass{
//    public $name = 'noha';
//    private $property;
//    function __construct($propertyValue){
//        $this->property=$propertyValue;
//    }
//}
//
//$m = new MyClass("wjkrhkrhj");
////$clousreobject=$myclousre->bindTo($m, MyClass::class);
////$clousreobject();
//
//
//$myclousre->call($m);
#####################################33


class NewClass
{
    private $prop;

    function __construct($propertyValue)
    {
        $this->prop = $propertyValue;
        $obj = new NewClass("Hello World");
    }
}













