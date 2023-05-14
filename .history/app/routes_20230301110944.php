<?php 
use larava\core\Router;
use larava\controllers\AboutController;
use larava\controllers\ContactController;
use larava\controllers\CategoryController;
use larava\controllers\RegisterController;
use larava\controllers\LoginController;
use larava\controllers\IndexController;
use larava\controllers\ProductController;
use larava\controllers\AdminController;
use larava\controllers\TaikhoanController;
use larava\controllers\SanphamController;
use larava\controllers\CartController;
use larava\controllers\HomeController;
use larava\controllers\ThiController;
$router=new Router;

// $router->get("/",function(){
//     echo "";
// });
$router->get("/admin",[AdminController::class,"index"]);
$router->get("/home",[HomeController::class,"index"]);
$router->get("/index",[IndexController::class,"index"]);
$router->get("/product",[ProductController::class,"index"]);
$router->get("/about",[AboutController::class,"index"]);
$router->get("/contact",[ContactController::class,"form"]);

$router->get("/category",[CategoryController::class,"index"]);
$router->post("/category",[CategoryController::class,"addCate"]);
$router->get("/delcate",[CategoryController::class,"delCate"]);

$router->get("/editcate",[CategoryController::class,"editCate"]);
$router->post("/editcate",[CategoryController::class,"updateCate"]);

$router->get("/register",[RegisterController::class,"index"]);
$router->post("/register",[RegisterController::class,"register"]);

$router->get("/login",[LoginController::class,"index"]);
$router->post("/login",[LoginController::class,"login"]);

$router->get("/taikhoan",[TaikhoanController::class,"index"]);
$router->post("/taikhoan",[TaikhoanController::class,"adduser"]);
$router->get("/deluser",[TaikhoanController::class,"deluser"]);
$router->get("/edituser",[TaikhoanController::class,"editUser"]);
$router->post("/edituser",[TaikhoanController::class,"updateUser"]);

$router->get("/sanpham",[SanphamController::class,"index"]);
$router->post("/sanpham",[SanphamController::class,"addSp"]);
$router->get("/delSp",[SanphamController::class,"delsp"]);

$router->get("/thi",[ThiController::class,"index"]);
$router->post("/thi",[ThiController::class,"addSP"]);
$router->get("/delSP",[ThiController::class,"delsp"]);
$router->get("/edittt",[ThiController::class,"editTT"]);
$router->post("/edittt",[ThiController::class,"updateTT"]);

$router->get("/editsanpham",[SanphamController::class,"editSp"]);
$router->post("/editsanpham",[SanphamController::class,"updateSp"]);

$router->get("/cart",[CartController::class,"index"]);

$router->run();

?>