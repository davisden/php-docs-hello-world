<?php // test.php
require_once 'login.php';
echo "Start query";

$query = 'select * from dbo.Products';  
  
// simple query  
$stmt = $conn->query( $query );  
while ( $row = $stmt->fetch( PDO::FETCH_ASSOC ) ){  
   print_r( $row['ProductName'] ."\n" );  
}  
echo "End query";
?>
