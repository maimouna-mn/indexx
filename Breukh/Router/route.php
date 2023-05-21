<?php

require ("../vendor/autoload.php");



// $niveau= new \App\controller\Niveau();
// $niveau->index();

// $eleve= new \App\controller\Eleve();
// $eleve->eleve();

// $classe= new \App\controller\Classe();
// $classe->classe();

// $annee= new \App\controller\Annees();
// $annee->annee();



class Route
{
    private $methods = [
        'GET' => 'index',
        'POST' => 'Ajout',
    ];

    private $controllers = [
        'Niveau' => '\App\Controller\Niveau',
        'Eleve' => '\App\Controller\Eleve',
        'Classe' => '\App\Controller\Classe',
        'Annees' => '\App\Controller\Annees'
    ];

    public function __construct()
    {
    }

    public function existe($controller)
    {
        return array_key_exists($controller, $this->controllers);
    }

    public function router()
    {
        if (isset($_SERVER['REQUEST_URI'])) {

            $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            $requestMethod = strtoupper($_SERVER['REQUEST_METHOD']);
            $tabUri = explode('/', $uri);

            if ($this->existe($tabUri[2])) {
                $controllerName = $this->controllers[$tabUri[2]];
                $methodName = $this->methods[$requestMethod] ?? null;
                $param = $tabUri[4] ?? null;
                $controller = new $controllerName();


                if ($methodName && method_exists($controller, $methodName)) {
                    $controller->$methodName($param);
                } else {
                    // Méthode non trouvée, afficher une erreur 404
                    http_response_code(404);
                    echo "Erreur 404 - Méthode non trouvée";
                }
            } 
            else {
                $niveau = new \App\Controller\Niveau();
                $niveau->index();
            }
        }
    }
}
$route = new Route();
$route->router();


//"http://localhost/Breukh/Niveau/index/"






























// namespace App\Route;
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// use App\Controller\Accueil;

// class Route
// {
//     private $methods = array(
//         'GET' => 'index',
//         'POST' => 'Ajout',
//     );

//     private $Controller  = array(
//         'Niveau' => '\App\Controller\Niveau'
//     );
//     function __construct(){
//     }

//     /**
//      * fonction permettant de tester si le controller existe et la fonction aussi
//      * @param $controller
//      * @param $method
//      * @return bool
//      */
//     public function existe($controller){
//         return array_key_exists($controller,$this->Controller) ;

//     }

//     /**
//      * @return void
//      */
//     public function router(){

//         if(isset($_SERVER['REQUEST_URI'])){
//             $uri = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
//            // var_dump($uri);die;
//             $requestmethod = strtoupper($_SERVER['REQUEST_METHOD']);
//             $taburi = explode('/',$uri);
//             if($this->existe($taburi[2])){
//                 $contr = new $this->Controller[$taburi[2]]();
//                 $param = (isset($taburi[4])) ? $taburi[4] : null;
//                 $contr->{$taburi[3]}($param);
//             }else {
//                 // $niveau = new Accueil();
//                 // $accueil->index();
//                 $niveau= new Niveau();
//                  $niveau->index();
//             }
//         }

//     }


// }