<form class="searchBox" id="verborgenzoekveld">
    <input  name="naamfilter" placeholder="Naam bevat...">
    <input  class=searchBoxBtn type="submit" value="Filter">
</form>

<?php

try {
    $conn = new PDO("mysql:host=localhost;dbname=webshopdb", "root", ""); 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset ($_GET['naamfilter'])) {
        $naamfilter = $_GET['naamfilter'];
    } else {
            $naamfilter = "";
    }

    $statement = $conn->query("SELECT * FROM producten WHERE naam LIKE '%$naamfilter%'"); 
    while ($row = $statement->fetch()) {
        echo "<LI>" . $row['naam'] . " : " . $row['prijs'];
        
        echo "<a href='dbproductverwijderen.php?id=" . $row['id'] . "'><button>Verwijder</button></a>";
        echo "<a href='productupdate.php?id=" . $row['id'] . "'><button>Wijzigen</button></a>";
        echo "<a href='bestellingtoevoegen.php?id=" . $row['id'] . "'><button id='orderBtn'>Bestel</button></a></LI>";
        echo "</LI>";
    }
}

catch(PDOException $e) {
    echo "Connection failed ".$e->getMessage();
}

$conn = NULL;

?>
