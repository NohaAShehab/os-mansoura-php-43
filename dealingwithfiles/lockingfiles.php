<?php

//    $fp = fopen("students.txt", "r+");
//
//    if (flock($fp, LOCK_EX)) {  // acquire an exclusive lock
////        ftruncate($fp, 0);      // truncate file
//        $old_data = fread($fp,100);
//        var_dump($old_data);
//        fseek($fp, 10);
//        fwrite($fp, "New content klsjfkljsdfkl\n");
//        fflush($fp);            // flush output before releasing the lock
//        flock($fp, LOCK_UN);    // release the lock
//    } else {
//        echo "Couldn't get the lock!";
//    }
//
//    fclose($fp);

$fp = fopen("students.txt", "a");
fseek($fp, 10);
fwrite($fp, "\n---------------------------------");




fclose($fp);
