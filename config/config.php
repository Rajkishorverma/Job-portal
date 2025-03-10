<?php
    

    try{
    $host = getenv("mysql.railway.internal");
    $dbname = getenv("railway");
    $user =  getenv("root");
    $pass = getenv("SoZqIcQPaFNoqilbYlqBIRXNGvRbSyiQ");

    $conn = new PDO("mysql:host=$host;dbname=$dbname",$user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e) {
        echo $e->getMessage();
    }

        

    //if ($conn == true){
    //    echo "Connected to database";
    //}
    //else{
    //    echo "Failed to connect to database";
    //    }





?>
