<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=ra7alat_agency", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    
    echo "Connection failed: " . $e->getMessage();
}
?>
