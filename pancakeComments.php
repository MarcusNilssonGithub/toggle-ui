<?php 

require_once './resources/fragments/start.php';
use TastyRecipes\Controller\SessionManager;
//$recipe = $_POST["recipe"];

$controller = SessionManager::getController();
$result_array = $controller->getComments("pancakes");

echo \json_encode($result_array);