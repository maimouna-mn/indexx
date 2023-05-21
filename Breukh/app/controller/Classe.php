<?php
namespace App\controller;

use App\model\Classe_m;

class Classe{

    public function __construct()
    {
        
    }
    public function index()
    {
        $classe_m=new Classe_m();
        $classe=$classe_m->ListClasse();
        require "../app/public/classeH.php";
        return ;
    }
   
}