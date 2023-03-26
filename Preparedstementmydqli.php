<?php


echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<div class='container fs-5' >  ";

echo '<h1> Prepared statements  </h1>';

define("DB_HOST", "localhost");
define("DB_USER", "osmansoura43");
define("DB_PASSWORD", "Iti123456789_");
define("DB_DATABASE", "osmans43");



    try {
        $conn2 = new mysqli(DB_HOST, DB_USER,
            DB_PASSWORD, DB_DATABASE,3308);


    if ($conn2->connect_errno) {
        trigger_error($conn2->connect_error);
        printf("Connect failed: %s\n", $conn2->connect_error);
        exit();
    }


    $name = 'Ahmed';
    $email = 'ahmed@gmail.com';
//    $insert_query = "insert into `osmans43`.`students`(`name`, `email`) values ('{$name}', '{$email}');";
//
////    $res=$conn2->query($insert_query);
//
//        echo $insert_query;
//        var_dump($insert_query);
//        if ($conn2->query($insert_query)) {
//
//            var_dump($conn2->affected_rows);
//
//        } else {
//            echo "Error: " . $insert_query . "<br>" . $conn2->error;
//        }

        ## prepared statement
        $stmt = "insert into `osmans43`.`students` (`name`,`email`) values(?, ?)";
        #1- prepare statment

        $prepared_stmt= $conn2->prepare($stmt);
        var_dump($prepared_stmt);
        if($prepared_stmt){
            # 2- bind parms
            $name="nohaaash";
            $email="noha@iti.com";
            $prepared_stmt->bind_param('ss',$name, $email);
            $name2= "test";
            $email2="test@ggg.om";
            $prepared_stmt->bind_param('ss',$name2,$email2);
            var_dump($prepared_stmt);
            ## execute ?
            $res=$prepared_stmt->execute();
            var_dump($res);
        }


//        if ($stmt = $conn2->prepare($sql)) {
//            $name="nohaaash";
//            $email="noha@iti.com";
//            $stmt->bind_param($stmt, "ss", $name,$email);
//            $result = $stmt->execute();
//// Fetch data here
//            $stmt->close();
//        }















    } catch (Exception $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }