<?php

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<div class='container fs-5' >  ";

echo '<h1> Classes  </h1>';


//class Student{
//
//}
//
//# object
//$std = new Student();
//var_dump($std);
//
//$std->name='Test';
//
//var_dump($std);

##########################

//class Employee{
//    public $name;
//    protected $email='test@iti.com';
//    private $salary;
//}
//
//
//$emp = new Employee();
//var_dump($emp);
//### assign value
//$emp->name = 'Noha';
//var_dump($emp);
////$emp->email = 'noha@gmail.com';
//
//class Manager extends  Employee{
//    function print_emp_info(){
//        echo "{$this->name}, {$this->email}";
//    }
//}
//
//
//$m = new Manager();
//$m->name='test';
//$m->print_emp_info();

###################### construct ###########
//class Employee{
//    public $name;
//    protected $email='test@iti.com';
//    private $salary;
//
//    function __construct(string $name, string $email, int $salary){
////        var_dump($this);
//        $this->name = $name;
//        $this->email= $email;
//        $this->salary=$salary;
//        echo "Object is being created";
//    }
//
//    function __destruct()
//    {
//        // TODO: Implement __destruct() method.
//        echo "<h1 style='color: red'> Object is being destructed </h1>";
//    }
//}
//
//
//$emp = new Employee("Noha", 'noha@gmail.com', 1000);
//var_dump($emp);
//unset($emp);
//$emp2 = new Employee("efd", "Sf", 234);
//var_dump($emp2);
//$emp3 = new Employee("efd", "Sf", 234);
//var_dump($emp3);


################# Dynamic setters and getters

//class Employee{
//    function __set($name, $value){
//        if(is_string($value)){
//            $this->name=$value.'dyanmic';
//        }
//
//
//    }
//
//}
//
//$emp = new Employee();
//var_dump($emp);
//$emp->name='test';
//$emp->salary = 10;
//var_dump($emp);


//class Test{
//    private static  $obj = null;
//
//    private function __construct(){
//
//     }
//
//     static function  makeobject(){
//        if(! self::$obj){
//            self::$obj= new Test();
//
//        }
//         return self::$obj;
//     }
//}
//
//echo "test";
//
//$testobj = Test::makeobject();
//
//$testobj->name= 'test';
//var_dump($testobj);
//
//$testobj2= Test::makeobject();
//var_dump($testobj2);



//class MM{}
//$m = new MM();
//$n= new MM();
//var_dump($m);
//var_dump($n);





















class Employee{
    private  $email;

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email."iti";
    }

    function __set($name, $value){
        echo "<h1 style='color: red'> Dymamic setter is not allowed  </h1>";
    }


//    function __get($name)
//    {
//        // TODO: Implement __get() method.
//        echo "<h1 style='color: red'> This property {$name} not found in the object  </h1>";
//    }
}
//
//$emp = new Employee();
//var_dump($emp);
//$emp->setEmail("test");
//var_dump($emp);
//
//var_dump($emp->test);

//$emp->country = 'Egypt';
//var_dump($emp);

############################################333


###########3 static members
class Math{
    const pi = 3.14159;
    static $mul=1;
    static function testSelf(){
        echo self::pi;
}
}
echo Math::pi;

$m = new Math();
$m->testSelf();

//Math::$mul= 10;
//
//echo Math::$mul;

















