<?php

$host="localhost"; 
$username="root"; 
$password=""; 
$database="importcsv";

// Parameters: filename.csv table_name
$argv = $_SERVER['argv'];

if($argv[1]) { 
   $file = $argv[1]; 
} else {
   echo "Please provide a file name\n"; 
   exit;
} 

if($argv[2]) { 
   $table = $argv[2];
} else {
   echo "Please provide a table name\n"; 
   $table = pathinfo($file); 
   $table = $table['filename'];
}

// Read in only first row of CSV file
$handle = fopen($file, "r");

$row = 1; 
$columns = [];

while (($data = fgetcsv($handle, 1000, ",")) !== FALSE AND $row==1) {
   $data = preg_replace('/\s+/','_',$data);
   $data = str_replace( "'", "", $data );
   $data = str_replace( ".", "", $data );
   $data = str_replace( ",", "", $data );
   $data = str_replace( ":", "", $data );
   $data = str_replace( "?", "", $data );
   $data = str_replace( "+", "", $data );
   $data = str_replace( "-", '_', $data );
   $data = str_replace( "&", '', $data );

   $columns = $data;

   $row++; 
}

var_dump($columns);
// exit;
//SQL string commands
$createSQL = "CREATE TABLE IF NOT EXISTS $table 
              (".implode(" TEXT(65535) NOT NULL, ", $columns). " 
               TEXT(65535) NOT NULL);";
echo $createSQL ;
$file = addslashes(realpath(dirname(__FILE__)).'\\'.$file);
$loadSQL = "LOAD DATA INFILE '$file' 
            INTO TABLE $table 
            FIELDS TERMINATED BY ',' 
            IGNORE 1 LINES";

// Open database connection 
try { 
   $dbh = new PDO("mysql:host=$host;dbname=$database",$username,$password); 
   $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   // Execute queries
   $S1TH = $dbh->query($createSQL); 
   $S2TH = $dbh->query($loadSQL);   
} 

catch(PDOException $e) { 
   echo $e->getMessage(); 
}

# Close database connection 
$dbh = null;

?>