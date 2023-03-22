
<?php

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<div class='container fs-5' >  ";

echo "<h1> Dealing with files</h1>";

try{
    # 1- open file
//    $filehandler= fopen("students.txt", 'r');
//    var_dump($filehandler);
//
//    # 2-get filesize
//    $file_size = filesize("students.txt");
//    echo $file_size;
////    $filecontent = fread($filehandler, $file_size);  #string
//    $filecontent = fread($filehandler, 10);  #string
//
//    var_dump($filecontent);
//
//    fclose($filehandler);

    ### Read file line by line
//    $filehandler=fopen("students.txt","r");
//    $filesize=filesize("students.txt");
//    while (!feof($filehandler)){
//        echo fgets($filehandler). "<br>";
//    }
//    fclose( $filehandler);

    ############## Get CSV
//    $filehandler=fopen("students.txt","r");
//    $filesize=filesize("students.txt");
//    while (!feof($filehandler)){
//        var_dump( fgetcsv($filehandler,1000, ":"));
//    }
//    fclose( $filehandler);

    #### read file
//    $data = readfile("students.txt");
//    var_dump($data);
    ## file function
//    $filedata = file("students.txt");
//    var_dump($filedata);
    ################################### moving across the file
    $filehandler=fopen("students.txt","r");
    $filesize=filesize("students.txt");
    while (!feof($filehandler)){
        echo fgets($filehandler). "  ".ftell($filehandler)."<br>";
    }
    ### read content into a string
//    rewind($filehandler);
    fseek($filehandler, 10);
    $data = fread($filehandler, filesize("students.txt"));
    var_dump($data);

    var_dump(filetype('students.txt'));
    var_dump(filetype('test'));
    var_dump(file_exists('students.txt'));
//    unlink('students.txt');
//    unlink("test");

    $students_path ='/var/www/html/phpmansoura/day02/dealingwithfiles/students.txt';
    var_dump(basename($students_path));













}catch (Exception $e){
    var_dump($e);
}








echo "</div>";