<?php
// Load the database configuration file
include_once 'dbconfig.php';

if(isset($_POST['importSubmit']))(
// Allowed mime types

$csvmimes = array('text/x-comma-separated-values'
,'text/csv', 'application/csv', 'application/excel)

'text/conma-separated-values', 'application/octet-strean', 'application/vnd.ms-excel', 'application/x-csv', 't
'application/vnd.msexcel', 'text/plain';

// validate whether selected file is a csv file
if(lempty($_FILES["file'][ 'name']) && in_array($_FILES['File']['type'], ScsvMimes))(

// 1f the file is uploaded
iF(is_uploaded_file(s_FILES['File']['tmp_name']))(

// Open uploaded CSV file with read-only mode
Scsvrile ~ fopen($_FILES['file'][ tmp_name'], 'r');

// skip the first line
fgetesv(scsvrile);

// Parse data from csv file line by line
while(($line = fgetcsv($csvFile)) == FALSE){
/1 Get row data
$name = $line[e];
email = $line[1];
Sphone = $line[2];
$status = $line[3];

// check whether member already exists in the database with the same email
Sprevquery = "SELECT id FROM members WHERE email = ''.$line[1]."'";
SprevResult = $db->query($prevQuery);

if($prevResult->num_rows > @){