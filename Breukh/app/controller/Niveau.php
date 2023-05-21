<?php
namespace App\controller;

use App\model\Niveau_m;

class Niveau{

    public function __construct()
    {
        
    }
    public function index()
    {
        $niveau_m=new Niveau_m();
        $niveau=$niveau_m->ListNiveau();
        require "../app/public/niveauH.php";
        return ;
    }
   
}

