<?php
mysql_connect("127.0.0.1", "root", "PASSWORD") or die("Connection Failed");

mysql_select_db("dati_produzione")or die("Connection Failed");


$linea = $_POST['linea'];
$descrizione = $_POST['descrizione'];
$idprodotto = $_POST['idprodotto'];
$nome = $_POST['nome'];

$query = "INSERT INTO dati_produzione.output_catena (Linea, ID_prodotto, Nome,Descrizione,numProdotti)
VALUES ($linea,$idprodotto,'$nome','$descrizione',0)";

if(mysql_query($query))
{
echo "updated";}

else{
echo "fail";}
?>
