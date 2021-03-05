<?php

require "../app/new_model/model.php";
require "../app/new_model/category.php";

class ProductController {

    private $db;
    private $model;

    public function __construct($db) {
        $this->db = $db;
        $this->model = new ProductModel($db);
    }
    public function list() {
        $data = $this->model->get_all();
        require "../app/new_file/products_table.php";
    }

    public function add() {
        $category_model = new CategoryModel($this->db); 
        $categories = $category_model->get_all();
        require "../app/new_file/products_form.php";
    }

    public function edit($id) {
        $data = $this->model->get($id);
        $category_model = new CategoryModel($this->db); 
        $categories = $category_model->get_all();
        require "../app/new_file/products_form.php";
    }

    public function delete($id) {
        $this->model->delete($id);
        header("Location: /");
    }
}