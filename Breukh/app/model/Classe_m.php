<?php
namespace App\model;
use App\config\Database;

class Classe_m {

    const SQL_INSERT = "INSERT INTO `classe`(`id`, `nomclasse`) VALUES (?,?)";
    const SQL_SELECT = "SELECT * FROM `classe`";
	const SQL_DELETE = "DELETE FROM `classe` WHERE `id` = ?";
	const SQL_FIND = "SELECT * FROM `classe` WHERE `id` = ?";
    // const SQL_UPDATE = "UPDATE `eleves` SET `libelle`= ?,`pu`= ?,`qtestock`= ?,`montant`= ?,`categorie`= ? WHERE `id`= ?";

    private $db;

    public function __construct() {
        $connect=new Database();
         $this->db=$connect->getConnexion() ;
    }

    public function ajouterClasse($id, $prenom, $nom, $status, $matricule,$datenaiss) {
        $req = $this->db->prepare(self::SQL_INSERT);
        $req->execute(array($id, $prenom, $nom, $statut, $matricule,$datenaiss));
    }

    public function listClasse() {
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

        