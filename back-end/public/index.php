
<?php

require_once __DIR__ . '/../vendor/autoload.php';

$home = new App\Controller\HomeController();
$cadastro = new App\Controller\CadastroController();

$route = [
    '/cadastro' => 'CadastroController@cadastrar',
    '/home' => 'HomeController@index'
];

$rota_atual = $_SERVER['REQUEST_URI'];

foreach($route as $rota => $classe_controller){
    if ($rota == $rota_atual){
        $classe_metodo = explode('@', $classe_controller);
        $classe = 'App\\Controller\\' . $classe_controller[0];
        $instancia = new $classe;
        $instancia->$classe_controller[1];
    }

}


