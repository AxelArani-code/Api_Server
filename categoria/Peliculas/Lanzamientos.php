<?php

$url="http://192.168.1.5:80/movies/cover/";

$movies=array(
    array(
        'titulo' => "Infiltrados en el KKKlan",
        'estrella' => '★★★★☆',
        'descripsion' => 'Un detective negro se infiltra en el Ku Klux Klan en los años 70.',
        'fecha' => "2018",
        'duracion' => "135 min",
        'genero' => "Crimen, Drama",
        'portada' => "https://pics.filmaffinity.com/Infiltrado_en_el_KKKlan-928120403-large.jpg"
    ),
    array(
        'titulo' => "Tenet",
        'estrella' => '★★★★★',
        'descripsion' => 'Un agente lucha por prevenir la Tercera Guerra Mundial a través de la manipulación del tiempo.',
        'fecha' => "2020",
        'duracion' => "150 min",
        'genero' => "Acción, Ciencia ficción",
        'portada' => "https://pics.filmaffinity.com/Tenet-432994986-large.jpg"
    ),
    array(
        'titulo' => "Dune",
        'estrella' => '★★★★☆',
        'descripsion' => 'La lucha por el control del planeta desértico Arrakis y su valiosa especia.',
        'fecha' => "2021",
        'duracion' => "155 min",
        'genero' => "Aventura, Ciencia ficción",
        'portada' => "https://pics.filmaffinity.com/Dune-209834814-large.jpg"
    ),
    array(
        'titulo' => "No Time to Die",
        'estrella' => '★★★★☆',
        'descripsion' => 'James Bond se retira, pero es llamado de vuelta para enfrentar a un nuevo enemigo.',
        'fecha' => "2021",
        'duracion' => "163 min",
        'genero' => "Acción, Aventura",
        'portada' => "https://pics.filmaffinity.com/Sin_tiempo_para_morir-525355918-large.jpg"
    ),
    array(
        'titulo' => "Spider-Man: No Way Home",
        'estrella' => '★★★★★',
        'descripsion' => 'Spider-Man busca la ayuda de hechiceros para lidiar con problemas multiversales.',
        'fecha' => "2021",
        'duracion' => "148 min",
        'genero' => "Acción, Aventura",
        'portada' => "https://hips.hearstapps.com/hmg-prod/images/spider-man-no-way-home-poster-fotogramas-1638214021.jpg"
    ),
    array(
        'titulo' => "The French Dispatch",
        'estrella' => '★★★★☆',
        'descripsion' => 'Una mirada a historias publicadas en la última edición de una revista estadounidense en una ciudad francesa ficticia.',
        'fecha' => "2021",
        'duracion' => "107 min",
        'genero' => "Comedia, Drama",
        'portada' => "https://lacriaturacreativa.com/wp-content/uploads/2020/02/poster-french-dispatch-.jpg"
    ),
    array(
        'titulo' => "The Green Knight",
        'estrella' => '★★★★☆',
        'descripsion' => 'Un caballero se embarca en una búsqueda para enfrentar al misterioso Green Knight.',
        'fecha' => "2021",
        'duracion' => "130 min",
        'genero' => "Aventura, Fantasía",
        'portada' => "https://pics.filmaffinity.com/El_caballero_verde-662504089-large.jpg"
    ),
    array(
        'titulo' => "A Quiet Place Part II",
        'estrella' => '★★★★☆',
        'descripsion' => 'Una familia lucha por sobrevivir en un mundo donde criaturas letales cazan por el sonido.',
        'fecha' => "2021",
        'duracion' => "97 min",
        'genero' => "Drama, Terror",
        'portada' => "https://pics.filmaffinity.com/Un_lugar_tranquilo_2-979721999-mmed.jpg"
    ),
    array(
        'titulo' => "The Suicide Squad",
        'estrella' => '★★★★☆',
        'descripsion' => 'Un grupo de supervillanos es enviado en una misión suicida para reducir sus sentencias en prisión.',
        'fecha' => "2021",
        'duracion' => "132 min",
        'genero' => "Acción, Aventura",
        'portada' => "https://pics.filmaffinity.com/El_Escuadraon_Suicida-629689677-large.jpg"
    ),
    array(
        'titulo' => "Jungle Cruise",
        'estrella' => '★★★★☆',
        'descripsion' => 'Un capitán de bote y su pasajera se embarcan en una peligrosa búsqueda en la jungla.',
        'fecha' => "2021",
        'duracion' => "127 min",
        'genero' => "Acción, Aventura, Comedia",
        'portada' => "https://pics.filmaffinity.com/Jungle_Cruise-756798392-large.jpg"
    )

);



header('Content-Type: application/json');
echo json_encode($movies,JSON_UNESCAPED_UNICODE);