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
    $conn2 = new mysqli(DB_HOST, DB_USER,
        DB_PASSWORD, DB_DATABASE,3308);


if ($conn2->connect_errno) {
    trigger_error($conn2->connect_error);
    printf("Connect failed: %s\n", $conn2->connect_error);
    exit();
}

//    var_dump($conn2);

    ### select data
//    $resoop= $conn2->query("select * from students");
//    var_dump($resoop);



//    while ($row = $resoop->fetch_assoc()) {
//        var_dump($row);
//        printf ("%s (%s)\n", $row["id"], $row["name"]);
//    }


//    while ($row = $resoop->fetch_object()) {
//        var_dump($row);
//        printf ("%s (%s)\n", $row->id, $row->name);
//    }


//    $rows = $resoop->fetch_all(MYSQLI_ASSOC);
//    var_dump($rows);
//
//    var_dump($resoop);
//    $resoop -> free_result();
//
//    var_dump($resoop);

    ############################## Insert

//        $sql = 'INSERT INTO `osmans43`.`students` (`name`,`email`)
//                            VALUES ("Thursday","Thursday@iti.com");';
//
//        $res=$conn2->query($sql);  # true / false exectuted successfully
//        var_dump($res);
//        var_dump($conn2);

    #################### update
//        $sql = "UPDATE `osmans43`.`students` set `name`='Mysqli' WHERE `id`=11;";
//
//    $res=$conn2->query($sql);  # true / false exectuted successfully
//    var_dump($res);
////    var_dump($conn2);
//    var_dump($conn2->affected_rows);

    ############3 delete
    $sql = "DELETE FROM `osmans43`.`students` WHERE `id`=12;";
    if ($conn2->query( $sql)) {

        var_dump($conn2->affected_rows);
        if ($conn2->affected_rows){
            echo "<h1> Record Deleted successfully"."</h1>";
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn2->error;
    }



















} catch (Exception $e) {
    echo 'Connection failed: ' . $e->getMessage();
}