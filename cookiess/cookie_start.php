<?php

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<div class='container fs-5' >  ";

echo "<h1> setting cookie</h1>";
//setcookie(
//    string $name,
//    string $value = "",
//    int $expires_or_options = 0,
//    string $path = "",
//    string $domain = "",
//    bool $secure = false,
//    bool $httponly = false
//): bool
setcookie("course", 'PHP', time()+3600, '/', '',0);



//phpmansoura/day03/cookiess/c

setcookie("intake", '43', time()+3600, '/phpmansoura/day03/cookiess', '',0);



