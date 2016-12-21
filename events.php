<?php
// liste des événements
 $json = array();
 // requête qui récupère les événements
 $requete = "SELECT * FROM  ORDER BY id";
 
 // connexion à la base de données
 try {
 $conn = new PDO('mysql:host=localhost;dbname=mydb', 'root', '1234');
 } catch(Exception $e) {
 exit('Impossible de se connecter à la base de données.');
 }

 // exécution de la requête
 $resultat = $conn->query($requete) or die(print_r($conn->errorInfo()));
 
 // envoi du résultat au success
 echo json_encode($resultat->fetchAll(PDO::FETCH_ASSOC));
 
?>