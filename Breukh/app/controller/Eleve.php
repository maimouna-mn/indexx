<?php
namespace App\controller;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


use App\model\Eleve_m;


class Eleve{

    public function __construct()
    {
        
    }
    public function index()
    {
        $eleve_m=new Eleve_m();
        $eleve=$eleve_m->ListEleve();
        require "../app/public/eleveH.php";
        return ;
    }
}