<?php
// liste des événements
 $json = array();
 // requête qui récupère les événements
 $requete = "SELECT * FROM  ORDER BY id";
 
 // connexion à la base de données
 include "../conexao/conn.php";

 // exécution de la requête
 $resultat = $conn->query($requete) or die(print_r($conn->errorInfo()));
 
 // envoi du résultat au success
 echo json_encode($resultat->fetchAll(PDO::FETCH_ASSOC));
 
?>