<?php


echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<div class='container fs-5' >  ";

echo '<h1> Connection to databases PDO </h1>';




$dsn = 'mysql:dbname=osmans43;host=127.0.0.1;port=3306;'; #port number
$user = 'osmansoura43';
$password = 'Iti123456789_';
try {
    $db = new PDO($dsn, $user, $password);
    var_dump($db);

    ### OOP --> Prepared

//    $query = 'Select * from `osmans43`.`students`;';
//
//    $stmt = $db->prepare($query);
//
//    $res = $stmt->execute();
//
//    var_dump($res);
//
////    var_dump($stmt->fetchAll());
//    var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
////    var_dump($stmt->fetchAll(PDO::FETCH_OBJ));
//
//    var_dump($stmt->fetchObject());
//
//    echo $stmt->errorInfo();
//
//    ## free result set
//    $stmt->closeCursor();

    ################### insert
//    $name= 'Ali';
//    $email='ali@gmail.com';
//
//    $insert_query =  "insert into `osmans43`.`students` (name,email) values (?,?)";
//
//    # 1- prepare statement
//    $inst_stmt = $db->prepare($insert_query);
//    $res=$inst_stmt->execute([$name, $email]);
//    $res=$inst_stmt->execute(['tesssrt', "testtt3"]);
//
//    var_dump($res);
//    var_dump( $inst_stmt->errorInfo());

    ### pdo prepared statement with ? and : placeholders

//
//    $query="Insert INTO `osmans43`.`students` (`name`, `email`)
//                Values(:student_name,:student_email)";
//
//        $name = 'kjd';
//        $email = 'testtt';
//    $stmt = $db->prepare($query);
//    $stmt->bindParam(":student_name", $name, PDO::PARAM_STR);
//    $stmt->bindParam(":student_email", $email, PDO::PARAM_STR);
//
//    $res= $stmt->execute();
//    var_dump($res);
//    var_dump($stmt->rowCount());
//    var_dump($db->lastInsertId());



    ############################# Delete
//
//    $query="Delete from `osmans43`.`students` where id=:student_id ";
//
//    $student_id =  22;
//
//    $delete_stmt = $db->prepare($query);
//
//    $delete_stmt->bindParam(':student_id', $student_id, PDO::PARAM_INT);
//    $res=$delete_stmt->execute();
//    var_dump($res);
//    var_dump($delete_stmt->rowCount());
//
    ################ Transaction ###########################

    $query= "UPDATE students
            SET name =:student_name WHERE id=:student_id ";
    $statement = $db->prepare($query);

    $db->beginTransaction();

    $statement->execute(['student_name'=>"updated", 'student_id'=>18]);
    $statement->execute(['student_name'=>"updated2", 'student_id'=>19]);

    $db->commit();







































}catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}