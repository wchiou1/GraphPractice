<?php
if(isset($_POST['name']) && isset($_POST['email'])) {
    $data =';' . $_POST['name'] . '-' . $_POST['email'] . "\n";
   /* $ret = file_put_contents('/mayaData.txt', $data, FILE_APPEND | LOCK_EX); */
    $file = './user-log.txt';
    $current = file_get_contents($file);
    $current .= $data;
    $ret = file_put_contents($file, $current);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "$ret bytes written to file";
    }
}
else {
   die('no post data to process');
}
?>