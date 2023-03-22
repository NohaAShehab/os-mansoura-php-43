<?php

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<div class='container fs-5' >  ";

echo "<h1> Arrays in PHP </h1>";
//
//$arr=[3,5,"Application",True,"PHP"];
//var_dump($arr);
//$arr1= array("Noha","Engineering","ITI");
//var_dump($arr1);
//
//echo $arr1[1];
//
//$arr1[1]='Test';
//var_dump($arr1);

############# range
//$nums = range(0,10, 1);
//var_dump($nums);

//$nums = range('a','z', 2);  # array
//
//var_dump($nums);

//var_dump(count($nums));
//$arr_len = count($nums);
//for($i=0; $i< $arr_len ; $i++){
//    echo " {$i}=>{$nums[$i]} <br>";
//}

//foreach ($nums as $num){
//    echo " {$num} <br>";
//}

//foreach ($nums as $index=>$num){
//    echo "{$index}:{$num} <br>";
//}
################# Associative arrays
$info=["Name"=>"Noha","Email"=>"nshehab@iti.gov.eg","Track"=>"Application",
5=>"PHP"

];
//foreach ($info as $i){
//    echo "{$i} <br>";
//}
//foreach ($info as $key=>$value){
//    echo "{$key}=> {$value} <br>";
//}


//$info["city"]='Mansoura';
//foreach ($info as $key=>$value){
//    echo "{$key}=> {$value} <br>";
//}

#####################3

//$arr = range(1,10);
//$arr[100]=35;
//var_dump($arr);

############33 compact

//$name= 'Ahmed';
//$track = 'PHP';
//
////$std_info = compact('name', 'track'); # create array from exisiting variables
//var_dump($std_info);
//
//$std_info2 = compact('track','name'); # create array from exisiting variables
//var_dump($std_info2);
//
//var_dump($std_info==$std_info2);
//var_dump($std_info===$std_info2);

























################# Array operators
$name= 'Ahmed';
$track = 'PHP';

//$std_info = compact('name', 'track'); # create array from exisiting variables
//$std_info[9] = 'iti';
//var_dump($std_info);
//$arr = range(1,10);
//var_dump($arr);
//$newarr = $std_info + $arr;
//var_dump($newarr);
//
//
### multi-dim arrays
//$students=array(
//    1=>array("Ali","IOT"),
//    2=>array("Mostafa","Cloud"),
//    3=>["Noha","Application"]
//);
//
//var_dump($students);
//echo $students[3][1];

######################  How php sort the arrays
//$names = array( 'noha', "Fatma", "Dina", "Andrew", 'ziad',"Shimaa","suliman" ,
//    false,
//    100, true, 1000, -1 );
//sort($names);
//var_dump($names);


##########
//$names = array( 'noha', "Fatma", "Dina", "Andrew", 'ziad',"Shimaa","suliman" );
//sort($names, SORT_NUMERIC);
//var_dump($names);

##################

//$prices = array( "meat"=>100, "sugar"=>10, "tea"=>8 );
////asort($prices);
//ksort($prices);
//var_dump($prices);

//$info=["Name"=>"Noha","Email"=>"nshehab@iti.gov.eg","Track"=>"Application"];
//ksort($info);
//var_dump($info);

#################### usersort
//function cmp($a, $b)
//{
//    if ($a == $b) {
//        return 0;
//    }
//    return ($a < $b) ? -1 : 1;
//}
//$a = array(3, 2, 5, 6, 1);
//usort($a, "cmp");
//var_dump($a);

############### array operations
//$names = array( 'noha', "Fatma", "Dina", "Andrew", 'ziad',"Shimaa","suliman" );
//
//shuffle($names);
//var_dump($names);
//
//array_push($names, 'test');
//print_r($names);


//$prices = array( "meat"=>100, "sugar"=>10, "tea"=>8 );
//
//array_push($prices, 'users');
//var_dump($prices);
//
//
//
//$res = array_pop($prices);
//var_dump($res);


//$colors = array(
//    'one' => 'red',
//    'two' => 'blue',
//    'three' => 'yellow');
//var_dump(array_flip($colors));
//$found = in_array('one', $colors);
//var_dump($found);

####################
//$fruits = ['banana', 'apple',"Kiwi","Orange"];
//$found = in_array('banana', $fruits); // true
//var_dump(current($fruits)); // banana
//var_dump(next($fruits)); //apple
//var_dump(next($fruits)); // kiwi
//var_dump(current($fruits)); // kiwi
//var_dump(reset($fruits)); //banana
//var_dump(end($fruits)); //Orange
//var_dump(prev($fruits)); //Kiwi
#########################33
//function print_fruits($value){
//    echo "<h1> {$value}</h1>" ;
//}
//$fruits = ['banana', 'apple',"Kiwi","Orange"];
//array_walk($fruits,"print_fruits");




//$a=array(5=>"banana",22=>"Kiwi");
//var_dump(array_merge($a));

//$array1 = array("color" => "red", 2, 4);
//var_dump($array1);
//$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
//var_dump($array2);
//$result = array_merge($array1, $array2);
//var_dump($result);

##################
//$input_array = array('a', 'b', 'c', 'd', 'e');
//$output_array = array_chunk($input_array, 2);
//var_dump($output_array);

#################33

//$instructors = ["Eng. Shery", "Noha", "Andrew"];
//$courses = ['Admin', 'PHP', 'Node'];

//$result=array_map(
//
//    function($instructor, $course) {
//    return "$instructor teaches $course <br>";},
//
//    $instructors, $courses);
//var_dump($result);



//$combinedArray = array_combine($courses, $instructors);
//var_dump($combinedArray);

//
//$my_array = [1,90,2,null,3,'',55,[],5,6,7,8,""];
//$non_empties = array_filter($my_array);
//var_dump($non_empties);


$array1 = array('blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'
=> 8);
var_dump(array_intersect_key($array1, $array2));


######################33
//$arr = array('a' => 123, 'b' => 213, 'c' => 321);
////$allowed = array('b', 'c');
//
////$allowed = array('b'=>null, 'c'=>null);
//$allowed = ['b', 'c'];
//var_dump(array_flip($allowed));

//var_dump(array_intersect_key($arr, $allowed));
//
//var_dump(array_flip($allowed));
//
//var_dump(array_intersect_key($arr, array_flip($allowed)));
//

$info=["username"=>"Noha","email"=>"nshehab@iti.gov.eg","track"=>"Application"];
////extract($info);
//
//var_dump($username, $email, $track);




































































































