<?php

$url="http://192.168.1.5:80/movies/cover/";

$movies=array(
    array(
        'titulo' => "The Notebook",
        'estrella' => '★★★★★',
        'descripsion' => 'Una historia de amor que abarca décadas, basada en la novela de Nicholas Sparks.',
        'fecha' => "2004",
        'duracion' => "123 min",
        'genero' => "Romance, Drama",
        'portada' => "https://c8.alamy.com/compes/2k4tmpa/el-cuaderno-2004-el-poster-de-video-del-bloc-de-notas-ryan-gosling-y-rachel-mcadams-2k4tmpa.jpg"
    ),
    array(
        'titulo' => "Pride & Prejudice",
        'estrella' => '★★★★★',
        'descripsion' => 'La historia de amor entre Elizabeth Bennet y el Sr. Darcy en la Inglaterra del siglo XIX.',
        'fecha' => "2005",
        'duracion' => "129 min",
        'genero' => "Romance, Drama",
        'portada' => "https://i.pinimg.com/originals/ea/d8/f7/ead8f7aa6317bacdaeaa5ae2ac919978.jpg"
    ),
    array(
        'titulo' => "La La Land",
        'estrella' => '★★★★☆',
        'descripsion' => 'Un músico y una actriz se enamoran mientras luchan por sus sueños en Los Ángeles.',
        'fecha' => "2016",
        'duracion' => "128 min",
        'genero' => "Romance, Musical",
        'portada' => "https://www.lahiguera.net/musicalia/artistas/varios/disco/8135/la_la_land_original_motion_picture_soundtrack-portada.jpg"
    ),
    array(
        'titulo' => "Before Sunrise",
        'estrella' => '★★★★★',
        'descripsion' => 'Dos desconocidos se conocen en un tren y pasan una noche mágica en Viena.',
        'fecha' => "1995",
        'duracion' => "101 min",
        'genero' => "Romance, Drama",
        'portada' => "https://pics.filmaffinity.com/Antes_de_amanecer-227513298-large.jpg"
    ),
    array(
        'titulo' => "The Fault in Our Stars",
        'estrella' => '★★★★☆',
        'descripsion' => 'Dos adolescentes con cáncer se enamoran y enfrentan los desafíos de la vida y la muerte.',
        'fecha' => "2014",
        'duracion' => "126 min",
        'genero' => "Romance, Drama",
        'portada' => "https://www.lahiguera.net/musicalia/artistas/varios/disco/6118/the_fault_in_our_stars___music_from_the_motion_picture-portada.jpg"
    ),
    array(
        'titulo' => "Crazy, Stupid, Love",
        'estrella' => '★★★★☆',
        'descripsion' => 'Un hombre de mediana edad busca recuperar su vida amorosa con la ayuda de un joven mujeriego.',
        'fecha' => "2011",
        'duracion' => "118 min",
        'genero' => "Comedia, Drama, Romance",
        'portada' => "https://es.web.img2.acsta.net/pictures/18/05/10/01/56/4883668.jpg"
    ),
    array(
        'titulo' => "The Proposal",
        'estrella' => '★★★★☆',
        'descripsion' => 'Una jefa de editorial finge un compromiso con su asistente para evitar la deportación.',
        'fecha' => "2009",
        'duracion' => "108 min",
        'genero' => "Comedia, Drama, Romance",
        'portada' => "https://pics.filmaffinity.com/La_proposiciaon-245567215-large.jpg"
    ),
    array(
        'titulo' => "Silver Linings Playbook",
        'estrella' => '★★★★☆',
        'descripsion' => 'Dos personas con problemas mentales encuentran consuelo y conexión el uno en el otro.',
        'fecha' => "2012",
        'duracion' => "122 min",
        'genero' => "Comedia, Drama, Romance",
        'portada' => "https://es.web.img2.acsta.net/pictures/15/11/06/11/39/323127.jpg"
    ),
    array(
        'titulo' => "Eternal Sunshine of the Spotless Mind",
        'estrella' => '★★★★★',
        'descripsion' => 'Una pareja decide borrar los recuerdos de su relación fallida en una innovadora clínica.',
        'fecha' => "2004",
        'duracion' => "108 min",
        'genero' => "Drama, Ciencia ficción, Romance",
        'portada' => "https://pics.filmaffinity.com/aOlvaidate_de_mai-314689716-large.jpg"
    ),
    array(
        'titulo' => "To All the Boys I've Loved Before",
        'estrella' => '★★★★☆',
        'descripsion' => 'Las cartas secretas de una adolescente son enviadas a sus enamoramientos pasados.',
        'fecha' => "2018",
        'duracion' => "99 min",
        'genero' => "Comedia, Drama, Romance",
        'portada' => "https://www.ecured.cu/images/thumb/6/6a/To_all_the_boys_i_ve_loved_before-421153788-large.jpg/260px-To_all_the_boys_i_ve_loved_before-421153788-large.jpg"
    )
);



header('Content-Type: application/json');
echo json_encode($movies,JSON_UNESCAPED_UNICODE);