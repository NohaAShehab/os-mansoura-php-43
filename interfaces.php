<?php


echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<div class='container fs-5' >  ";

echo '<h1> Interfaces  </h1>';


//class ParentClass{
//    protected function test(){
//        echo 'test';
//    }
//}
//
//class ChildClass extends ParentClass{
//
//    public function test(){
//        echo "testttttttttttttttt";
//    }
//}
//
//$c = new ChildClass();
//$c->test();



Interface Transportation {
    protected function setModel($model);
     function setYear($car);
}


//abstract  class Car implements  Transportation{
//
//
//}

class Car implements  Transportation{
    public function setYear($car)
    {
        // TODO: Implement setYear() method.
    }
    function setModel($model)
    {
        // TODO: Implement setModel() method.
    }
}






