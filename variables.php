<style>
    body{
        font-size: larger;
    }

</style>

<?php

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);


//$var1 = 0;
//var_dump($var1);
//$var2 = (float)$var1;
//var_dump($var2);

## cast to string
//$num = 10;
//$num = (string)$num;
//var_dump($num);

## cast string to int

//$year = '2023';
//$year = (int)$year;
//var_dump($year);


//$year = 'Egypt2023';
//$year = (int)$year;
//var_dump($year);
//


//$year = '2023Egypt';
//$year = (int)$year;
//var_dump($year);


//$fname ='Noha';
//$lname ='Shehab';
//$fullname = $fname.$lname;
//print($fullname);
//$fullname = $fname+$lname; # not allowed


//$num1 ='10';
//$num2= 'Test';
//$res = $num2+ $num1;

####################
//
//$fname= 'Habiba';
//$lname='Hamid';
//print($fname.$lname);
#######################

//$a = 10;
//
//$b= $a;
//
//var_dump($a, $b);
//$a = 'iti';
//
//var_dump($a, $b);

### reference operator

//$a = 10;
//
//$b= &$a;  # alias for the variable
//
//var_dump($a, $b);
//$a = 'iti';
//
//var_dump($a, $b);



######### instance of operator

class OpenSourceMansoura{

}

$os = new OpenSourceMansoura();

//var_dump($os instanceof OpenSourceMansoura);


//$a = 10/0;
//var_dump($a);

//
//$a = @(10/0);
//var_dump($a);


### execution operator
//
//$out = `ls -l`;
//var_dump($out);
//
//



######## set type
//$num="10";
//settype($num,"int");
//echo gettype($num);

################# functions

//var_dump(is_numeric("iti"));
//var_dump(is_numeric("100"));
//var_dump(is_numeric(344.32));
############# isset , issempty
//$name;
//var_dump($name);
//var_dump(isset($name));
//var_dump(empty($name));

####################
//var_dump($name);
//var_dump(isset($name));
//var_dump(empty($name));

###########3 falsy values
//
//$name = '';
//var_dump(isset($name));  # set with falsy value
//var_dump(empty($name)); # still empty

//if ($name){
//    echo 'found';
//}else{
//    echo 'not found';
//}
//
//

############ unset

//$name = 'Ahmed';
//var_dump($name);
//unset($name);
//
//var_dump($name);







































































