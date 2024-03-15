<?php
require "functions.php";



$url_array = parse_url($_SERVER["REQUEST_URI"]);

$url = $url_array["path"];


// Ja cilvēks iet uz /,
// tad gribam parādīt /controllers/index.php

$routes=[
  "/"=>"controllers/index.php",
  "/about"=>"controllers.about.php",
  "/story"=>"controllers/story.php"
];



if (array_key_exists($url,$routes)){
  require $routes[$url];
}

