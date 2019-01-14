<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=webshopdb", "root", ""); 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $conn->query("SELECT * FROM producten"); 
    while ($row = $statement->fetch()) {
        echo "<LI>" . $row['naam'] . " : " . $row['prijs'] . "<a href='dbproductverwijderen.php?id=" . $row['id'] . "'><button>Verwijder</button></a></LI>";
    }
}

catch(PDOException $e) {
    echo "Connection failed ".$e->getMessage();
}

$conn = NULL;

?>
