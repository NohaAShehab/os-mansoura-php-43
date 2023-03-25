<?php

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<div class='container fs-5' >  ";

echo "Upload files";

var_dump($_POST);

var_dump($_FILES);

$file_name = $_FILES['file']['name'];
$file_size =$_FILES['file']['size'];
$file_tmp =$_FILES['file']['tmp_name'];
$file_type=$_FILES['file']['type'];

## validation on the file? ----> extension ? size ? moving to known place

$extension = explode('.',basename($file_name));
var_dump(end($extension));

$allowed_extenstions=["png", 'jpg', 'jpeg'];
var_dump(sys_get_temp_dir());

if(in_array(end($extension), $allowed_extenstions)){
    echo "Valid image ";
    $res=move_uploaded_file($file_tmp,"images/{$file_name}");
    var_dump($res);

    $imagespath = "images/{$file_name}";



}



?>

<img src="<?php echo $imagespath; ?>" width="100" height="100">


<?php
//    unlink($imagespath);
//?>



