<?php 
use larava\core\Router;
use larava\controllers\CategoryController;

$router=new Router;

// $router->get("/",function(){
//     echo "";
// });


$router->get("/category",[CategoryController::class,"index"]);
$router->post("/category",[CategoryController::class,"addCate"]);
$router->get("/delcate",[CategoryController::class,"delCate"]);

$router->get("/editcate",[CategoryController::class,"editCate"]);
$router->post("/editcate",[CategoryController::class,"updateCate"]);



$router->run();

?>