<?php
require "validator.php";
require "Database.php";
$config = require("config.php");
$validators = new Validator();
$db = new Database($config);
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $errors = [];
    if(!Validator::string($_POST["title"], min: 1, max: 255)) {
        $errors["title"] = "da title is empty blud";
    }

    if(!Validator::number($_POST["category-id"], min:1 , max: 3)) {
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
    die();
}
}

require "views/posts/create.view.php";


