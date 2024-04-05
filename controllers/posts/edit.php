<?php
require "Database.php";
require "Validator.php";
$config = require("config.php");
$validators = new Validator();
$db = new Database($config);
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $errors = [];
    if(!Validator::string($_POST["title"], min: 1, max: 255)) {
        $errors["title"] = "da title is empty blud";
    }
/*
    if(!Validator::number($_POST["category-id"], min:1 , max: 3)) {
        $errors["category-id"]s = "da catagory id is invalid you bucket head";
    }*/
    if(empty($errors)){

    $query = "UPDATE posts 
              SET title = :title, category_id = :category_id
              WHERE id = :id";
    $params = [
        ":title" => $_POST["title"],
        ":category_id" => $_POST["category-id"],
        ":id" => $_POST["id"]

    ];
    $db->execute($query, $params); 
    header("location: /");
    die();
}
}


$query = "SELECT * FROM posts WHERE id = :id ";

$params = [":id" => $_GET["id"] ];

$post = $db->execute($query, $params)->fetch();

require "views/posts/edit.view.php";