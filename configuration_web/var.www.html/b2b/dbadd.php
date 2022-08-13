<?php
//echo ("Merci d'avoir entre des valeures.".$_POST["npro"])
echo("<br><br>");
echo ("Merci d'avoir entre des valeures.") ;
echo("<br><br>");


$npro=$_POST["npro"];
$name=$_POST["name"];
$price=$_POST["price"];
$quantity=$_POST["quantity"];


/*
    $npro=intval($npro);
    $price=intval($price);
    $quantity=intval($quantity);
*/

if(strlen($name) < 21 and ctype_digit($npro) and ctype_digit($price) and ctype_digit($quantity)){

    try {

        $dbh = new PDO('mysql:host=127.0.0.1;dbname=b2bDatabase', "user2", "user2");
        $dbh->query("INSERT INTO  PRODUCT(NPRO,NAME,PRICE,QUANTITY)  VALUES ('$npro','$name','$price','$quantity');");
    
        $dbh = null;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }

}

else{
    echo("<br><br>");
    echo ("Malheureusement les donnees envoyees ne sont pas correctes") ;
    echo("<br><br>");
}

?>