<?php
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<div class='container fs-5' >  ";

echo '<h1> Sessions </h1>';

## to start session

session_start();
# 1- generate session_id
# 2- create file related to this session in sessions path on the server
## session file name :   sess_9qe4hbcbmuhqt60iaqqro6e4i8

#### set cookie with name PHPSESSIONID --->  and this its its value 9qe4hbcbmuhqt60iaqqro6e4i8

### set session values
var_dump($_SESSION);

$_SESSION["name"]= 'Noha';
$_SESSION["track"] = 'Application Development';
$_SESSION["year"]= 2023;

