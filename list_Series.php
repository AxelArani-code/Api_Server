<?php

// Primer JSON array
$url1 = "http://192.168.1.7:80/movies/terror.php";
$json1 = file_get_contents($url1);
$movies1 = json_decode($json1, true);

// Segundo JSON array
$url2 = "http://192.168.1.7:80/movies/series.php";
$json2 = file_get_contents($url2);
$movies2 = json_decode($json2, true);

// Combinar los arrays
$combinedMovies = array_merge($movies1, $movies2);

// Crear un objeto y convertirlo a JSON
$moviesObject = new stdClass();
$moviesObject ->SeriesList = [
    "teror" => $movies1,
    "series" => $movies2 // Agregar el array de películas combinado
];
//$moviesObject->SeriesList = $combinedMovies;

$jsonOutput = json_encode($moviesObject, JSON_UNESCAPED_UNICODE);

// Mostrar el JSON resultante
header('Content-Type: application/json');
echo $jsonOutput;

?>
