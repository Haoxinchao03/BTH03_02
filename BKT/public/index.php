<?php
require_once('../app/config/config.php');
$controll = isset($_GET['controller'])?$_GET['controller']:'home';
$action = isset($_GET['action'])?$_GET['action']:'index';
$controller = ucfirst($controll);
$controllers = $controller . "Controller";
$controllerPath = '/app/controllers/' . $controllers . '.php';

require_once (APP_ROOT . $controllerPath);
$objController = new $controllers();
$objController->$action();




// if($controller == 'home'){
//     require_once APP_ROOT.'/app/controller/HomeController.php';
//     $homeController = new HomeController();
//     $homeController->index();
// }
// echo '<pre>';
// print_r($patients);
// echo '</pre>';

// cai tren laf routing: nhu mot nguoi chi duong
?>