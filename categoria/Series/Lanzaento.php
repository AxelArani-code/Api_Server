<?php

$url="http://192.168.1.5:80/movies/cover/";

$movies=array(
    array(
        'titulo' => "Breaking Bad",
        'estrella' => '★★★★★',
        'descripsion' => 'Un profesor de química se convierte en un narcotraficante para asegurar el futuro de su familia.',
        'fecha' => "2008",
        'duracion' => "45 min por episodio",
        'genero' => "Drama, Crimen",
        'portada' => "https://es.web.img3.acsta.net/pictures/18/04/04/22/52/3191575.jpg"
    ),
    array(
        'titulo' => "Narcos",
        'estrella' => '★★★★☆',
        'descripsion' => 'La historia del auge y caída del cartel de Medellín en Colombia.',
        'fecha' => "2015",
        'duracion' => "45 min por episodio",
        'genero' => "Drama, Crimen",
        'portada' => "https://es.web.img3.acsta.net/pictures/15/07/29/14/33/086520.jpg"
    ),
    array(
        'titulo' => "Ozark",
        'estrella' => '★★★★☆',
        'descripsion' => 'Una familia se involucra en el lavado de dinero y se enfrenta a peligrosas consecuencias.',
        'fecha' => "2017",
        'duracion' => "60 min por episodio",
        'genero' => "Drama, Crimen, Suspense",
        'portada' => "https://static.wikia.nocookie.net/doblaje/images/c/cb/Ozarkk.jpg/revision/latest?cb=20181116004819&path-prefix=es"
    ),
    array(
        'titulo' => "Mindhunter",
        'estrella' => '★★★★☆',
        'descripsion' => 'Dos agentes del FBI desarrollan perfiles de asesinos en serie a través de entrevistas y análisis psicológicos.',
        'fecha' => "2017",
        'duracion' => "60 min por episodio",
        'genero' => "Drama, Crimen, Thriller",
        'portada' => "https://es.web.img3.acsta.net/pictures/19/08/07/17/01/2286697.jpg"
    ),
    array(
        'titulo' => "The Crown",
        'estrella' => '★★★★★',
        'descripsion' => 'La vida de la reina Isabel II y los eventos históricos que moldearon el siglo XX.',
        'fecha' => "2016",
        'duracion' => "60 min por episodio",
        'genero' => "Drama, Historia",
        'portada' => "https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/media/image/2018/03/crown-portada.jpg"
    ),
    array(
        'titulo' => "Better Call Saul",
        'estrella' => '★★★★★',
        'descripsion' => 'El abogado Jimmy McGill se transforma en el astuto abogado Saul Goodman mientras enfrenta su propia evolución moral.',
        'fecha' => "2015",
        'duracion' => "45 min por episodio",
        'genero' => "Drama, Crimen",
        'portada' => "https://m.media-amazon.com/images/M/MV5BZDA4YmE0OTYtMmRmNS00Mzk2LTlhM2MtNjk4NzBjZGE1MmIyXkEyXkFqcGdeQXVyMTMzNDExODE5._V1_FMjpg_UX1000_.jpg"
    ),
    array(
        'titulo' => "When They See Us",
        'estrella' => '★★★★★',
        'descripsion' => 'La historia de los "Cinco de Central Park", cinco jóvenes injustamente condenados por una violación en Nueva York.',
        'fecha' => "2019",
        'duracion' => "75 min por episodio",
        'genero' => "Drama, Crimen",
        'portada' => "https://m.media-amazon.com/images/M/MV5BZmJjM2YzOWEtOTYxYi00YjhkLTliMzgtMTA2MTc0NDQ1MDM4XkEyXkFqcGdeQXVyODY5OTk4MA@@._V1_.jpg"
    ),
    array(
        'titulo' => "Unbelievable",
        'estrella' => '★★★★★',
        'descripsion' => 'La historia real de una joven que denuncia una violación y enfrenta escepticismo mientras dos detectives investigan.',
        'fecha' => "2019",
        'duracion' => "50 min por episodio",
        'genero' => "Drama, Crimen",
        'portada' => "https://m.media-amazon.com/images/M/MV5BN2Q3OWQ1Y2UtN2E3OS00ODA2LWE1Y2EtYmY5OWMzNWYzMDZmXkEyXkFqcGdeQXVyMzY0MTE3NzU@._V1_.jpg"
    ),
    array(
        'titulo' => "The Queen's Gambit",
        'estrella' => '★★★★★',
        'descripsion' => 'Una joven prodigio del ajedrez lucha contra adicciones y desafíos en su camino hacia el éxito.',
        'fecha' => "2020",
        'duracion' => "60 min por episodio",
        'genero' => "Drama",
        'portada' => "https://m.media-amazon.com/images/M/MV5BM2EwMmRhMmUtMzBmMS00ZDQ3LTg4OGEtNjlkODk3ZTMxMmJlXkEyXkFqcGdeQXVyMjM5ODk1NDU@._V1_.jpg"
    ),
    array(
        'titulo' => "Stranger Things",
        'estrella' => '★★★★★',
        'descripsion' => 'Un grupo de amigos se enfrenta a misterios sobrenaturales en su pequeña ciudad.',
        'fecha' => "2016",
        'duracion' => "50 min por episodio",
        'genero' => "Drama, Ciencia ficción, Misterio",
        'portada' => "https://es.web.img3.acsta.net/pictures/22/05/14/13/26/5638861.jpg"
    ),
);



header('Content-Type: application/json');
echo json_encode($movies,JSON_UNESCAPED_UNICODE);