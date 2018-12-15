<?php

$host = 'mysql_db';
$user = 'Site_user';
$pass = 'site_user_pass';
$dbname = 'site';
 
$conn = mysqli_connect($host, $user, $pass, $dbname);
if (!$conn) {
    exit('Connection failed: '.mysqli_connect_error().PHP_EOL);
}
 
echo 'Successful database connection!'.PHP_EOL;

echo "Data from mysql";
echo "\n";
echo "-----------------------------------";
echo "\n";
$sql = 'SELECT * FROM site';
         $result = mysqli_query($conn, $sql);

         if (mysqli_num_rows($result)) {
            while($row = mysqli_fetch_assoc($result)) {
               
               echo "Site Name: " . $row["site_name"]. "\n";
            }
         } else {
            echo "0 results";
         }
         mysqli_close($conn);

?>