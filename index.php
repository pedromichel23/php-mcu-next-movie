<?php
require 'Controllers/getMovieData.php';
const URL = "https://www.whenisthenextmcufilm.com/api";

$result = getMovieData(URL);
$untilMessage = getMovieDaysUntil($result['days_until']);
//var_dump($result);


require 'Views/index.view.php';
