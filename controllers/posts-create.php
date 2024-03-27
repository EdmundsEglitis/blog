<?php
require "Database.php";
$config = require("config.php");

$db = new Database($config);
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $errors = [];
    if(trim($_POST["title"]) == "") {
        $errors["title"] = "da title is empty blud";
    }

    if(strlen($_POST["title"]) > 255) {
        $errors["title"] = "da title is too long you twat";
    }

    if($_POST["category-id"] > 3 || $_POST["category-id"] < 1) {
        $errors["category-id"] = "da catagory id is invalid you bucket head";
    }

    if(empty($errors)){

    $query = "INSERT INTO posts (title, category_id)
              VALUES (:title, :category_id);";
    $params = [
        ":title" => $_POST["title"],
        ":category_id" => $_POST["category-id"]

    ];
    $db->execute($query, $params); 
    header("Location: /");
    die();
}
}


require "views/posts-create.view.php";


