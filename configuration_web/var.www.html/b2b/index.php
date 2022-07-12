<!doctype html>
<html>
        <head>
                <meta charset="UTF-8">
                <title>Page b2b</title>
        </head>
        <body>
                <h1>liste dans la db</h1>

<?php
try {
    echo "<table><thead><tr><th>Product number</th><th>Name of product</th><th>Price</th><th>Quantity</th></thead><tbody>";
    $dbh = new PDO('mysql:host=127.0.0.1;dbname=b2bDatabase', "user", "user");
    foreach($dbh->query('SELECT * from PRODUCT') as $row) {
        echo("<tr><td>".$row["NPRO"]."</td><td>".$row["NAME"]."</td><td>".$row["PRICE"]."</td><td>".$row["QUANTITY"]."</td></tr>" );
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>
        </body>
</html>
