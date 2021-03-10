<?php

$url = explode("/", $_GET['path']);
print_r($url);

if (empty($url[0])){
    die("Not Found");
} else {
    $controller_name = $url[0];
    $class_name = $controller_name . "Controller";

    if(empty($url[1])){
        $action = "list";
    } else {
        if(is_numeric($url[1])){
            $id = $url[1];
            $action = $url[2] ?? "";
            
        } else {
            $action = $url[1];
        }
    }
}



require "../config.php";
require "../system/lib/db.php";
// require "new_model/model.php";
require "../app/controller/" . $controller_name . ".php";


$dsn = "mysql:dbname=" . $db_name . ";host=localhost";

$db = new DB($dsn, $db_user, $db_pass);

$controller = new $class_name($db);

if(isset($id)){
    $controller->$action($id);
} else {
    $controller->$action();
}


// $product_model = new ProductModel($db);

// $category_model = new CategoryModel($db);

// $product_model->create_table();


// $action = $_GET['action'] ?? "";
// $id = (int) ($_GET['id'] ?? $_POST['id'] ?? 0);
// $name = $_POST['name'] ?? "";


?>    


<?php


// if($action == "add"){
//     $categories = $category_model->get_all();
//     require "../new_file/products_form.php";

// }elseif ($action == "edit" && $id) {
//     $categories = $category_model->get_all();
//     $data = $product_model->get($id);
//     require "../new_file/products_form.php";

// }elseif($action == "delete" && $id){
//     $product_model->delete($id);
//     header("Location: /");

// }elseif($name && !$id){
//     $product_model->add($_POST);
//     header("Location: /");

// }elseif($name && $id){
//     $product_model->edit($_POST);
//     header("Location: /");

// }else{
//     $data = $product_model->get_all();
//     require "../new_file/products_table.php";
// }
  

?>

