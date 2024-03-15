<?php

$url_array = parse_url($_SERVER["REQUEST_URI"]);

$url = $url_array["path"];
