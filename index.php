<?php
require 'Controllers/getMovieData.php';
require 'Models/Movie.php';
const URL = "https://www.whenisthenextmcufilm.com/api";
$movie = Movie::fetch_and_create_movie(URL);
$untilMessage = $movie->getMovieDaysUntil();

require 'Views/index.view.php';
