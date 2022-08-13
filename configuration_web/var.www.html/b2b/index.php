<!doctype html>
<html>
<meta http-equiv="Content-Security-Policy" content="default-src 'self';">
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

<!-- A partir d'ici nouvel version de la page -->

<h2>insérez des nouvelles valeurs à enregistrer dans le système.</h2>
<br>

<form action="dbadd.php" method="post">
NPRO: <input type="text" name="npro" required></br>
NAME: <input type="text" name="name" required></br>
PRICE: <input type="text" name="price" required></br>
QUANTITY: <input type="text" name="quantity" required></br>
<input type="submit">
</form>

<br>
<br>
<br>


        </body>
</html>

