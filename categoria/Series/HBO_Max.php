<?php

$url="http://192.168.1.5:80/movies/cover/";

$movies=array(
    
    array(
        'titulo' => "Game of Thrones",
        'estrella' => '★★★★★',
        'descripsion' => 'Intrigas, guerras y traiciones en la lucha por el Trono de Hierro en los Siete Reinos.',
        'fecha' => "2011",
        'duracion' => "60 min por episodio",
        'genero' => "Fantasía, Drama, Aventura",
        'portada' => "https://m.media-amazon.com/images/M/MV5BN2IzYzBiOTQtNGZmMi00NDI5LTgxMzMtN2EzZjA1NjhlOGMxXkEyXkFqcGdeQXVyNjAwNDUxODI@._V1_FMjpg_UX1000_.jpg"
    ),
    array(
        'titulo' => "Westworld",
        'estrella' => '★★★★☆',
        'descripsion' => 'Un parque temático futurista donde los anfitriones robot interactúan con los visitantes humanos.',
        'fecha' => "2016",
        'duracion' => "60 min por episodio",
        'genero' => "Ciencia ficción, Drama, Misterio",
        'portada' => "https://www.ecartelera.com/carteles-series/200/268/014_p.jpg"
    ),
    array(
        'titulo' => "Succession",
        'estrella' => '★★★★★',
        'descripsion' => 'La lucha por el control de un imperio de medios de comunicación entre los miembros de la familia Roy.',
        'fecha' => "2018",
        'duracion' => "60 min por episodio",
        'genero' => "Drama",
        'portada' => "https://es.web.img2.acsta.net/pictures/18/05/18/11/43/4369994.jpg"
    ),
    array(
        'titulo' => "Euphoria",
        'estrella' => '★★★★☆',
        'descripsion' => 'La vida de un grupo de adolescentes mientras navegan por los desafíos de la adolescencia moderna.',
        'fecha' => "2019",
        'duracion' => "60 min por episodio",
        'genero' => "Drama",
        'portada' => "https://pics.filmaffinity.com/euphoria-465825702-mmed.jpg"
    ),
    array(
        'titulo' => "The Mandalorian",
        'estrella' => '★★★★★',
        'descripsion' => 'Las aventuras de un cazarrecompensas en las fronteras de la galaxia de Star Wars.',
        'fecha' => "2019",
        'duracion' => "40 min por episodio",
        'genero' => "Ciencia ficción, Acción, Aventura",
        'portada' => "https://static.wikia.nocookie.net/esstarwars/images/2/29/MandoS2PosterES.jpg/revision/latest?cb=20201001205530"
    ),
    array(
        'titulo' => "Lovecraft Country",
        'estrella' => '★★★★☆',
        'descripsion' => 'Un hombre busca a su padre desaparecido en los años 50 y se enfrenta a horrores cósmicos y raciales.',
        'fecha' => "2020",
        'duracion' => "60 min por episodio",
        'genero' => "Drama, Fantasía, Terror",
        'portada' => "https://pics.filmaffinity.com/Territorio_Lovecraft_Serie_de_TV-218947247-large.jpg"
    ),
    array(
        'titulo' => "Barry",
        'estrella' => '★★★★☆',
        'descripsion' => 'Un asesino a sueldo decide seguir su pasión por la actuación en Los Ángeles.',
        'fecha' => "2018",
        'duracion' => "30 min por episodio",
        'genero' => "Comedia, Crimen, Drama",
        'portada' => "https://pics.filmaffinity.com/Barry_Serie_de_TV-945196834-large.jpg"
    ),
    array(
        'titulo' => "The Flight Attendant",
        'estrella' => '★★★★☆',
        'descripsion' => 'Una azafata se despierta en una habitación de hotel con un cadáver y lucha por descubrir la verdad.',
        'fecha' => "2020",
        'duracion' => "45 min por episodio",
        'genero' => "Comedia, Drama, Misterio",
        'portada' => "https://pics.filmaffinity.com/The_Flight_Attendant_Serie_de_TV-572453530-large.jpg"
    ),
    array(
        'titulo' => "His Dark Materials",
        'estrella' => '★★★★☆',
        'descripsion' => 'Una joven se embarca en una aventura épica en un mundo donde los humanos tienen compañeros animales.',
        'fecha' => "2019",
        'duracion' => "60 min por episodio",
        'genero' => "Aventura, Drama, Fantasía",
        'portada' => "https://m.media-amazon.com/images/M/MV5BM2FlYzgyZDYtYzI0ZS00YThiLTg4N2EtNmViMDdmMTcyNWU0XkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_.jpg"
    ),
    array(
        'titulo' => "The White Lotus",
        'estrella' => '★★★★★',
        'descripsion' => 'Los conflictos y secretos de un grupo de huéspedes en un lujoso resort en Hawái.',
        'fecha' => "2021",
        'duracion' => "60 min por episodio",
        'genero' => "Comedia, Drama, Misterio",
        'portada' => "https://pics.filmaffinity.com/the_white_lotus-477876468-large.jpg"
    ),
);



header('Content-Type: application/json');
echo json_encode($movies,JSON_UNESCAPED_UNICODE);