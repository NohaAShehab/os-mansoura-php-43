<?php

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<div class='container fs-5' >  ";

echo '<h1> Connection to databases mysqli </h1>';

define("DB_HOST", "localhost");
define("DB_USER", "osmansoura43");
define("DB_PASSWORD", "Iti123456789_");
define("DB_DATABASE", "osmans43");


try {
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD,
        DB_DATABASE, 3307);
//    var_dump($conn);
    ##checking errors
    if (mysqli_connect_errno()) {
        trigger_error(mysqli_connect_error());
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    #### create table
//    $query = "Create table `students`(`id` serial primary  key, `name` varchar(40), `email` varchar (100));";
//
//    $res=mysqli_query($conn, $query);  #True ?
//    var_dump($res);

    ## select

//    $respro = mysqli_query($conn,"select * from students");
//    var_dump($respro);
////
//    $rowCount= mysqli_num_rows($respro);
//    var_dump($rowCount);

//    ## fetch data
//    while ($row = mysqli_fetch_assoc($respro)) {  # associative array
//        var_dump($row);
//        printf ("%s (%s)\n", $row["id"], $row["name"]);
//    }

//    $rows = mysqli_fetch_all($respro, MYSQLI_ASSOC);
//    var_dump($rows);

//    $rows = mysqli_fetch_all($respro, 2);
//    var_dump($rows);

//        while ($row = mysqli_fetch_object($respro)) {  # associative array
//        var_dump($row);
//        printf ("%s (%s)\n", $row->id, $row->name);
//    }
//
//    mysqli_free_result($respro);





    ## insert
//    $sql = 'INSERT INTO `osmans43`.`students` (`name`,`email`)
//                            VALUES ("Thursday","Thursday@iti.com");';
//    if (mysqli_query($conn, $sql)) {
//        echo "New record created successfully"."<br>";
//        /*. */
//        var_dump($conn);
//        echo mysqli_insert_id($conn)."<br>";
//    } else {
//        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//    }

    ## update

//    $sql = "UPDATE `osmans43`.`students` set `name`='Mysqli' WHERE `id`=6;";
//    if (mysqli_query($conn, $sql)) {
//
//        var_dump(mysqli_affected_rows($conn));
//        if (mysqli_affected_rows($conn)){
//            echo "<h1> Record update successfully"."</h1>";
//        }
//        Var_dump($conn);
//} else {
//        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//    }


    ### delete
    $sql = "DELETE FROM `osmans43`.`students` WHERE `id`=6;";
    if (mysqli_query($conn, $sql)) {

        var_dump(mysqli_affected_rows($conn));
        if (mysqli_affected_rows($conn)){
            echo "<h1> Record Deleted successfully"."</h1>";
        }
        Var_dump($conn);
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }






























    mysqli_close($conn);


} catch (Exception $e) {
    echo 'Connection failed: ' . $e->getMessage(); }







