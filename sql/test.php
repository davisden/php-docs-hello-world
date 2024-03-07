<?php
    echo "Start";
    try {
    $conn = new PDO("sqlsrv:server = tcp:itecazure.database.windows.net,1433; Database = demoitec24", "itecadmin", "Azure2024");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connecting";
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
   $tsql= "SELECT  ProductId, ProductName, Price, ProductDescription
         FROM dbo.product";
    $getResults= sqlsrv_query($conn, $tsql);
    echo ("Reading data from table" . PHP_EOL);
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
     echo ($row['ProductName'] . " " . $row['ProductName'] . PHP_EOL);
    }
    sqlsrv_free_stmt($getResults);
?>
