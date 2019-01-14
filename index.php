<html>
    <head>
        <link rel="stylesheet" href="shop.css">
    </head>
    <body>
        <header>
            <h1>Groentewinkel</h1>
        </header>
        <div class="container">
        <h1>Welkom bij mijn shop</h1>

        <ul>
            <li><a href="producttoevoegen.html">Product toevoegen</a></li>
            <li>Menu item</li>
            <li>Menu item</li>


        </ul>
        <h2>Artikellijst</h2>
        <ul>
            <?php
                include 'toonproducten.php';
            ?>
        </ul>
        </div>
    </body>
</html>