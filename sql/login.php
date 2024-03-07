<?php
    echo "<h1>Start</h1>";
    $conn = new PDO("sqlsrv:server = tcp:itecazure.database.windows.net,1433; Database = demoitec24", "itecadmin", "Azure2024");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<h2>Connected!!!</h2>";
    echo "<h1>Fetching Data </h2>";
$query = 'select * from dbo.Products';  
  
// simple query  
$stmt = $conn->query( $query );  
while ( $row = $stmt->fetch( PDO::FETCH_ASSOC ) ){ 
   echo "<br />".$row['ProductID']." , ".$row['ProductName']." , ".$row['Price']." , ".$row['ProductDescription'];
}  
?>
<h1> ALL DONE! </h1>
