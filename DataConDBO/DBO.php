<?php

function getData($sql){
    require __DIR__."/database.php";
    try {
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        $conn = null;
        return $result;
    
    } catch(PDOException $e) {
        $conn = null;
        echo $sql . "<br>" . $e->getMessage();
    }
}


function getDataSecure($sql, $input){
    require __DIR__."/database.php";
    try {
        $stmt = $conn->prepare($sql);
        $stmt->execute($input);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        $conn = null;
        return $result;
    
    } catch(PDOException $e) {
        $conn = null;
        echo $sql . "<br>" . $e->getMessage();
    }
}

function execute($sql){
    require __DIR__ ."/database.php";
    try {
        $stmt = $conn->prepare($sql);
        $result = $stmt->execute();

        // $result = $conn->lastInsertId();
        $conn = null;
        return $result;
    
    } catch(PDOException $e) {
        $conn = null;
        echo $sql . "<br>" . $e->getMessage();
    }
}
?>