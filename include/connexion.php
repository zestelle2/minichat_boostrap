<?php
// connexion à la base de données
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=miniChat;charset=utf8', 'root', '');
    
}

catch(Exception $e)

{
        die('Erreur : '.$e->getMessage());
        // my sql envoie les erreurs sql (cool ça)
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
