<?php
namespace App\controller;

use App\model\Annees_m;

class Annees{

    public function __construct()
    {
        
    }
    public function index()
    {
        $annee_m=new Annees_m();
        $annee=$annee_m->ListAnnee();
        require "../app/public/anneesH.php";
        return ;
    }
   
}
