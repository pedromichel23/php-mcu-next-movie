<?php

//define('API_URL', 'https://www.whenisthenextmcufilm.com/api');

function getMovieData($URL)
{
    $ch = curl_init($URL);
    //inidicar que queremos el resultado de la peticion pero que no lo muestre en pantalla.
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    //ejectuar peticion y mostrar resultado.
    $result = curl_exec($ch);
    $data = json_decode($result, true);
    curl_close($ch);
    return $data;
}
