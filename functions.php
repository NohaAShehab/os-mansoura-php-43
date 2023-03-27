<?php
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<div class='container fs-5' >  ";

echo '<h1> Function playground </h1>';

//getSum(55,55);
//function getSum($x,$y){
//    $z=$x+$y;
//    echo 'Sum of x and y is'.$z."<br>";
//}
//getsum(5,10);

//function getSum(int $x,int $y){
//    $z=$x+$y;
//    echo 'Sum of x and y is'.$z."<br>";
//    return $z;
//}
//
////getsum('20', 'test');
//
//$res = getSum(3,4);
//var_dump($res);

##########33 function with variable of arguments
//function variadic_func($nonVariadic, ...$args ){
//
//    echo "function is called";
//    var_dump($args);
//    echo
//    json_encode ($args);
//}
//
//variadic_func("test",3435,true, "iti");

############# clousers


//(function($name){
//    echo "Hello {$name}";
//})('test');
//
//echo "Test";

//$clouser = function($name,$track='os'){
//    echo "Hello {$name}";
//};
//
//var_dump($clouser);
//
//var_dump(is_callable($clouser));

########## closure and use keyword


//$mingrade= 60;
//
//
//$res = function ($stdname) {
//    global $mingrade;
//  echo "{$stdname} {$mingrade}";
//  $mingrade=100;
//};
//
//$res("noha");
//var_dump($mingrade);


//$mingrade= 60;
//
//
//$res = function ($stdname) use($mingrade) {
//    echo "{$stdname} {$mingrade}";
//    $mingrade = 100;
//};
//
//$res("noha");
//var_dump($mingrade);

##########################











































