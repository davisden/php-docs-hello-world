<?php // test.php
require_once 'login.php';
echo "Start query";
 
   $tsql= "SELECT  ProductId, ProductName, Price, ProductDescription
         FROM dbo.Products";
    $getResults= sqlsrv_query($conn, $tsql);
    echo ("Reading data from table" . PHP_EOL);
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
     echo ($row['ProductName'] . " " . $row['ProductName'] . PHP_EOL);
    }
    sqlsrv_free_stmt($getResults);
echo "End query";
?>
