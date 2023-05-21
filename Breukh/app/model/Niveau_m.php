<?php
namespace App\model;
use App\config\Database;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class Niveau_m {

    const SQL_INSERT = "INSERT INTO `niveau`(`id`, `nomniveau`) VALUES (?,?)";
    const SQL_SELECT = "SELECT * FROM `niveau`";
	const SQL_DELETE = "DELETE FROM `niveau` WHERE `id` = ?";
	const SQL_FIND = "SELECT * FROM `niveau` WHERE `id` = ?";
    // const SQL_UPDATE = "UPDATE `eleves` SET `libelle`= ?,`pu`= ?,`qtestock`= ?,`montant`= ?,`categorie`= ? WHERE `id`= ?";

    private $db;

    public function __construct() {
        $connect=new Database();
         $this->db=$connect->getConnexion() ;
    }

    public function ajouterNiveau($id, $nomniveau) {
        $req = $this->db->prepare(self::SQL_INSERT);
        $req->execute(array($id, $niveau, $nomniveau, $statut));
    }

    public function listNiveau() {
        $req = $this->db->prepare(self::SQL_SELECT);
        $req->execute();
        return $req->fetchAll(\PDO::FETCH_OBJ);
    }
    
    // public function supprimer($id) {
    // 	$req = $this->db->prepare(self::SQL_DELETE);
    // 	$req->execute(array($id));
    // }
    
    // public function trouver($id) {
    // 	$req = $this->db->prepare(self::SQL_FIND);
    //     $req->execute(array($id));
    //     return $req->fetch(PDO::FETCH_OBJ);
    // }
    
    // public function update($libelle, $pu, $qtestock, $montant, $categorie, $id) {
    // 	$req = $this->db->prepare(self::SQL_UPDATE);
    // 	$req->execute(array($libelle, $pu, $qtestock, $montant, $categorie, $id));
    // }

    
}

        