<?php

    echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    echo "<div class='container fs-5' >  ";

    echo "<h1> Data received </h1>";

    ## prepare the data
    $email  = $_POST['email'];
    $password = $_POST["password"];

    ## validate data
    $errors = [];
    $formvalues = [];
    if(!isset($email) or empty($email)){
//        echo "Email required";
        $errors["email"]='Email required';
    }else{
        $formvalues["email"]= $email;
    }
    if(!isset($password) or empty($password)){
        $errors["password"]='password required';
    }
    var_dump($errors); ## array ?
    $formerrors=json_encode($errors);

    if($errors){
        var_dump($formerrors);
        $redirect_url = "Location:users.php?errors={$formerrors}";
        if ($formvalues){
            $oldvalues = json_encode($formvalues);
          $redirect_url .="&old={$oldvalues}" ;
        }

        header($redirect_url);

    }








    if(!$errors) {

        $date = date_create();
        $id = date_timestamp_get($date);
        $user_info = "{$id}:{$email}:{$password}";
//    var_dump($user_info);


        ## save the data to file
        try {
            $filehandler = fopen("users.txt", 'a');
            fwrite($filehandler, $user_info . PHP_EOL);
            fclose($filehandler);

            ############################read file content ###############################
            if (is_readable('users.txt')) {
                $users = file("users.txt");
//            var_dump($users);
                echo "<table class='table'>
                <tr> <th> ID</th> <th> Email </th> <th> Password</th>   <th> Delete</th></tr>";
                foreach ($users as $user) {
                    $userdata = trim($user, "\n");
                    $userdata = explode(":", $userdata);
//                var_dump($userdata);

                    echo "<tr>";
                    foreach ($userdata as $d) {

                        echo "<td> {$d} </td>";
                    }
                    $delete_url="/day02/validation/deleteuser.php?id={$userdata[0]}";
                    echo "<td> <a href='"."{$delete_url}". "' class='btn btn-danger'> Delete</a> </td>";
                    
                    echo "</tr>";
                }
            }

        } catch (Exception $e) {
            var_dump($e);
        }
    }


