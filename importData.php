<?php
// Load the database configuration file
include_once 'dbconfig.php';

if(isset($_POST['importSubmit'])){

$csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');

// validate whether selected file is a csv file
if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)){

// 1f the file is uploaded
iF(is_uploaded_file($_FILES['file']['tmp_name'])){

    // Open uploaded CSV file with read-only mode
    $csvfile = fopen($_FILES['file']['tmp_name'], 'r');

    // skip the first line
    fgetcsv($csvfile);
    var_dump($csvfile );
    // Parse data from csv file line by line
    while(($line = fgetcsv($csvfile)) !== FALSE){
        // Get row data
        $name = $line[0];
        $email = $line[1];
        $phone = $line[2];
        $status = $line[3];

        // check whether member already exists in the database with the same email
        $prevQuery = "SELECT id FROM members WHERE email = '".$line[1]."' ";
        $prevResult = $db->query($prevQuery);

        if($prevResult->num_rows > 0){
              $db->query("UPDATE members SET title='".$name."', phone='".$phone."',status='".$status."',modified=now() WHERE email='".$email."' ");
            }else{
                $db->query("INSERT INTO `members`(`title`, `email`, `phone`, `created`, `modified`, `status`) VALUES('".$name."','".$email."','".$phone."',now(),now(),'".$status."')");
        }
    }
    fclose($csvfile);

    $qstring='?status=succ';
}else{

    $qstring='?status=err';
}
}else{
    $qstring='?status=invalid_file';
}
}

header("Location: index.php".$qstring);