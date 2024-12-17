<?php

require_once('./model/db.php');

function getAllCategories() {
    global $connexion;
    $sql = "SELECT * FROM categorie";
    return pg_query($connexion, $sql);
}


function deleteCategorie($id) { // Renommée
    global $connexion;
    $sql = "DELETE FROM categorie WHERE id = $id";
    return pg_query($connexion, $sql);
}

function addCategorie($libelle) { // Renommée
    global $connexion;
    $sql = "INSERT INTO categorie (libelle) VALUES ('$libelle')";
    return pg_query($connexion, $sql);
}

function updateCategorie($id,$libelle){
    global $connexion;
    $sql ="UPDATE categorie SET libelle='$libelle' where id=$id";
   return pg_query($connexion,$sql);
}

function getCategorieById($id){
    global $connexion;
    $sql ="SELECT * FROM categorie where id = $id";
    return pg_query($connexion,$sql);
}



?>


