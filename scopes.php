<style>
    body{
        font-size: larger;
    }

</style>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo 'Hello world';

//
//function test(){
//    $course = 'PHP';
//    echo "<h1>{$course} </h1>" ;  # local var
//}
//
//test();
//
//echo "<h1>{$course} </h1>" ;
//
//
################# Global variable

//$course = 'PHP';
//
//function printCourse(){
//    echo $course;
//}
//
//printCourse();
//
//echo $course;

##########
//$course = 'PHP';
//
//function printCourse(){
//    global $course;
//    echo "<h1> from inside the function {$course} </h1>";
//}
//
//printCourse();
//
//echo $course;



### static scope

//function sayHello(){
//    static $count = 0;
//    echo "<h1> Hello World </h1>";
//    $count ++;
//    echo " count = {$count} <br>";
//}
//
//sayHello();
//sayHello();
//sayHello();

### parameter scope

//
//function sumnum($num1, $num2){
//    #### like local scope can be accessed only in the function
//
//    $res = $num1 + $num2;
//    var_dump($res);
//}
//
//
//sumnum(3,4);


#################3 constant

//const x = 10;
//
//
//function printConstant(){
//    echo x;
//}
//printConstant();
//
//echo x;

//function testfunction(){
//
//    const name = 'Ahmed';
//    echo name;
//
//}
//
//testfunction();

//const name = 'Ahmed';
//
//function name(){
//    echo 'Hello world';
//}
//
//name();
//echo '<br>';
//echo name;


############### super global variables

function testSuperGlobal(){

    var_dump($_REQUEST);
}

testSuperGlobal();

############ Echo vs print
$name = 'Ahmed';
$track = 'OS';

echo $name, $track;

print($name);






























































