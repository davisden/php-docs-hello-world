<?php
    echo "Starting"
    $serverName = "tcp:itecazure.database.windows.net,1433"; // update me
    $connectionOptions = array(
        "Database" => "demoitec24", // update me
        "Uid" => "itecadmin", // update me
        "PWD" => "Azure2024" // update me
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    $tsql= "SELECT  ProductId, ProductName, Price, ProductDescription
         FROM dbo.product";
    $getResults= sqlsrv_query($conn, $tsql);
    echo ("Reading data from table" . PHP_EOL);
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
     echo ($row['CategoryName'] . " " . $row['ProductName'] . PHP_EOL);
    }
    sqlsrv_free_stmt($getResults);
?>
