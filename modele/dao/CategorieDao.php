<?php
require_once 'ConnexionManager.php';

// Classe de gestion des accès aux catégories
class CategorieDao {
    private $id;
    private $bdd;
    private $libelle;


    public function __construct() {
        $this->bdd =(new ConnexionManager)->getInstance();
    }

    public function getList() {
        $reponse = $this->bdd->query('SELECT * FROM Categorie');
        $data = $reponse->fetchAll(PDO::FETCH_CLASS, 'Categorie');
       // $reponse->closeCursor();
        return $data;
    }

    public function getById($id) {
        $data = $this->bdd->query('SELECT * FROM Categorie WHERE id = '.$id);
        return $data->fetch(PDO::FETCH_OBJ);
       // $reponse->closeCursor();
        return $data;
    }

    public function getByCategoryId($id)
    {
        $data = $this->bdd->query('SELECT * FROM Article WHERE categorie = '.$id);
        return $data->fetchAll(PDO::FETCH_CLASS,'Article');
    }
}