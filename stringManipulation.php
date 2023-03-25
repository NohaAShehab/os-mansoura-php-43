<?php

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<div class='container fs-5' >  ";

echo "<h1> String </h1>";

### trim

//$message = '         Good morning       ';
////var_dump(trim($message));
//
////var_dump(trim($message,' G'));
////var_dump(rtrim($message));
//
//### print string
//$str="You came
//to me
//in that hour
//of need";
//
////var_dump(nl2br($str));
//echo nl2br($str);


//$n =  43951789;
//$u = -43951789;
//$c = 65; // ASCII 65 is 'A'
//
//##
//printf("%%b = '%b'\n", $n); // binary representation
//
//
//printf("%%u = '%u'\n", $u); // unsigned integer representation of a negative integer
//printf("%%c = '%c'\n", $c); // print the ascii character, same as chr() function


#######################################

//$num = 5;
//$location = 'tree';
//$format = 'There are %b monkeys in the %s';
//echo sprintf($format, ++$num, $location);


//echo "There are {++$num}, {$location}";
###################################
//$string= "welcome to iti";
//echo strtoupper($string)."</br>";
//echo strtolower($string)."</br>";
//echo ucfirst($string)."</br>";
//echo ucwords($string)."</br>";

//
//$str = "What's your na'me '?";
////echo $str;
//
//echo addslashes($str);  # string ---> clean to be added the database
## insert into students values ('What's your name?');

//$newstring= "What\'s your na\'me \'?";
//echo stripcslashes($newstring);

############# Joining string
//$InputArray = array('OS','Application','Track');
//$mystring = implode("_", $InputArray);
//echo  $mystring;


//$InputArray = array('OS','Application','Track');
//$mystring = join("_", $InputArray);
//echo  $mystring;

#####################
//$str="I love coffee so much";
//$arrstr=explode("e",$str);
//var_dump($arrstr);
//
//
######################
//$string = "My name is Noha, I works at ITI";
//$tok = strtok($string, " ");
//var_dump($tok);
//
//$newstring= "This is random string";
//$newtoken = strtok($newstring, ' ');
//var_dump($newtoken);
//
//while ($tok !== false) {
//    echo "Word=$tok<br/>";
//    $tok = strtok(" \n\t");
//}

##############################

//$phptxt="PHP is simple";
////echo substr($phptxt,1);
////var_dump( substr($phptxt,1, 3));
//echo substr($phptxt,-2);


//
//$var1 = "Hello iti";
//$var2 = "hello";
//
//var_dump(strcmp($var1, $var2));
//
//if (strcmp($var1, $var2) !== 0) {
//    echo '$var1 is not equal to $var2 in
//a case sensitive string comparison';
//}
//


//$var1 = "Hello";
//$var2 = "hellooiuoi";
//
//var_dump(strcasecmp($var1, $var2));
//
//if (strcasecmp($var1, $var2) !== 0) {
//    echo '$var1 is not equal to $var2 in
//a case sensitive string comparison';
//}
#############################3

//$str="Welcome to php";
//var_dump(strlen($str));


//$email = 'name@example.com';
//$domain = strstr($email,'@');
//echo $domain."<br>";

//$string = 'Hello World!';
//$testt= md5($string);
//echo($testt)."<br>";

### data types  ---> storing  ---> Hashing the values ?
#### data mutable ?  ----> immutable

//echo(ord("Ahmed"))."<br>";
//echo str_repeat("iti ", 5)."<br>";
//
//echo str_shuffle("test");
############################
//$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
//$onlyconsonants = str_replace($vowels, "_", "Hello World of PHP");
//echo $onlyconsonants."<br>";
//


//$input = array('A: XXX##', 'B: XXX##', 'C: XXX##');
//$input=substr_replace($input, 'YYY', 3, 3);
//var_dump($input);


//$names = ['Nabila  ', 'Enas  ', 'Noor  ', 'Mariam##'];

//$names = ['Nab___', 'Ena___', 'Noo___', 'Mar___'];


//$newnames = substr_replace($names, '___', 3);
//var_dump($newnames);


//$newnames = substr_replace($names, '___', 3, 3);
//var_dump($newnames);
#########################################33
//$email='nshehab@iti.gov.eg@rgerg.com';
//$pattern="/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
//
//
//var_dump(preg_match_all($pattern, $email));
//
//if (preg_match($pattern, $email)){
//    echo '<h1> Wellformed Email</h1>';
//}


//$str = "The rain in SPAIN falls mainly on the plains.";
//#pattern inside // , i for ignoring case
//$pattern = "/ain/i";
//
//# return with the first occurrence of the pattern
//var_dump(preg_match_all($pattern, $str, $matches));
//### check if all the string matches the pattern
//var_dump(preg_match_all($pattern, $str, $matches));
//var_dump($matches);
////if(preg_match_all($pattern, $str, $matches)) {
////    print_r($matches);
////}
///
///

$email="nohashehab.iti@gmail.com@test";
var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
}else{
    echo "<br>".'Checked by php functions and well formed';
}

































































































