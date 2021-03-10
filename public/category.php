<?php

require "config.php";
require "new_model/category.php";
require "lib/db.php";

$dsn = "mysql:dbname=" . $db_name . ";host=localhost";
$db = new DB($dsn, $db_user, $db_pass);

$category_model = new CategoryModel($db);




$action = $_GET['action'] ?? "";
$id = (int) ($_GET['id'] ?? $_POST['id'] ?? 0);
// $name = $_POST['name'] ?? "";
$data = $_POST;

?>    


<?php


if ($action == "edit" && $id) {
    $data = $category_model->get($id);
    // require "new_file/category_form.php";

}elseif($action == "delete" && $id){
    $category_model->delete($id);
    header("Location: /category.php");

}elseif(!empty($_POST) && !$id){
    if($category_model->add($_POST)){
        header("Location: /category.php");
    }else{
        $action = "add";
    }

}elseif(!empty($_POST) && $id){
    // $category_model->edit($_POST);
    // header("Location: /category.php");
    if($category_model->edit($_POST)){
        header("Location: /category.php");
    }else{
        $action = "edit";
    }

}else{
    $data = $category_model->get_all();
    // require "new_file/category_table.php";
}
  
if($action == "add" || $action == "edit"){
   require "../new_file/category_form.php";
}else{
    require "../new_file/category_table.php";
}


?>

