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
?>
