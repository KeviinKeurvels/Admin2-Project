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
    $dbh = new PDO('mysql:host=127.0.0.1;dbname=b2bDatabase', "user", "user");
    foreach($dbh->query('SELECT * from PRODUCT') as $row) {
        echo($row["NAME"]);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>
        </body>
</html>
