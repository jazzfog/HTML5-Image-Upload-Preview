<?php

$dir = __DIR__.'/files/';
$safeName = date('Y-m-d_H-i-s').'.jpg';

// Uncomment to see all the passed variables
//print_r($_POST);

// Uncomment to move your uploaded file to any writable dir
//move_uploaded_file($_FILES['uplFile']['tmp_name'], $dir.$safeName);