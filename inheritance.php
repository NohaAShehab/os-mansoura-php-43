<?php

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<div class='container fs-5' >  ";

echo '<h1> Inheritance  </h1>';



//class Person{
//    public $name;
//    protected $age;
//    public function callingPerson(){
//        echo "I am a person";}
//}
//class Student extends Person{
//    public $level;
//
//    /**
//     * @param mixed $age
//     */
//    public function setAge($age)
//    {
//        $this->age = $age;
//    }
//
//    public function callingStudent(){
//
//        echo "I am a person {$this->age}";}
//}
//
//
////$p = new Person();
////var_dump($p);
//
//$s = new Student();
//$s->setAge(10);
//var_dump($s);
//$s->callingStudent();


#### inheritence with constructor


//class Person{
//    public $name;
//    protected $age;
//    function __construct($name, $age)
//    {
//        $this->name = $name;
//        $this->age= $age;
//    }
//
//    public function callingPerson(){
//        echo "I am a person";}
//}
//class Student extends Person{
//    public $level;
//
//    /**
//     * @param mixed $age
//     */
//    public function setAge($age)
//    {
//        $this->age = $age;
//    }
//
//    public function callingStudent(){
//
//        echo "I am a person {$this->age}";}
//}
//
//
////$p = new Person("noha", 30);
////var_dump($p);
//
//$s = new Student("noha", 30);
//var_dump($s);


//$s->setAge(10);
//var_dump($s);
////$s->callingStudent();
//
//
//############### constructor in the child class
//
//class Person{
//    public $name;
//    protected $age;
//    function __construct($name, $age)
//    {
//        $this->name = $name;
//        $this->age= $age;
//    }
//
//    public function callingPerson(){
//        echo "I am a person";}
//}
//class Student extends Person{
//    public $level;
//
//
//    public function __construct($name, $age)
//    {
//        parent::__construct($name, $age);
//    }
//
//    /**
//     * @param mixed $age
//     */
//    public function setAge($age)
//    {
//        $this->age = $age;
//    }
//
//    public function callingStudent(){
//
//        echo "I am a person {$this->age}";}
//}
//
//
////$p = new Person("noha", 30);
////var_dump($p);
//
//$s = new Student("noha", 30);
//var_dump($s);



################## Final keywords
class Machine{
    public $brand;
    function sayHello(){
        echo "hello I am a machine";
    }
}
class Transportation extends Machine{
    public $type;
    final function canMove(){
        echo "<br> I can move";
    }

    function saywelcome($meassage=""){
        echo "welcome {$meassage}";
    }
//    function  saywelcome($message){
//        echo "welcome {$message}";
//    }
}


// class Car extends Transportation {
//    public $model;
//    function sayHello()
//    {
//        parent::sayHello();
//        echo "<br> Called from the Car class";
//    }
//
//     function canMove(){
//         echo "<br> I can move";
//     }
//}
//
//
//
//$c = new Car();
//$c->sayHello();
//
//$c->canMove();

$c->saywelcome("fksejdhkl");














