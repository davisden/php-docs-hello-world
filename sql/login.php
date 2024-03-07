<?php
    echo "Start";
    $conn = new PDO("sqlsrv:server = tcp:itecazure.database.windows.net,1433; Database = demoitec24", "itecadmin", "Azure2024");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connecting";
    echo "Fetching";
$query = 'select * from dbo.Products';  
  
// simple query  
$stmt = $conn->query( $query );  
while ( $row = $stmt->fetch( PDO::FETCH_ASSOC ) ){ 
   echo "<tr><td>".$row['ProductID']."</td><td>".$row['ProductName']."</td><td>".$row['Price']."</td><td>".$row['ProductDescription']."</td></tr>";
}  
?>
