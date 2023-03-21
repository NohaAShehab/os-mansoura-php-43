<style>
    body{
        font-size: larger;
    }

</style>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//$day = "Friday";
//
//switch ($day){
//    case 'Friday':
//        echo 'This day may be off';
//        break;
//    case 'Sunday':
//        echo 'Wish you a fruitful week';
//        break;
//    default:
//        echo 'The end is near';
//}
###############################3

for($i=0; $i<5; $i++){
    echo "<br> {$i} ";
}

echo $i;

for($i=0; $i<5; $i++){
    echo "<br> {$i} ";
}



$_POST["name"]='Omar';
$_POST['Track'] = 'Opensource';
var_dump($_POST);

//foreach ($_POST as $value){
//    echo "<h1> {$value}</h1>";
//}
//
//


foreach ($_POST as $k=>$value){
    echo "<h1> {$k}=>{$value}</h1>";
}

function test(int $num){
    echo $num;
}

test("Ahmed");
test(19);




//
//$x= 1000;
//do{
//    $name = 'Omar';
//    print("welcome to do while looping");
//}while($x<10);
//

//echo $name;





















