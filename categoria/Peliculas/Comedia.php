<?php

$url="http://192.168.1.5:80/movies/cover/";

$movies=array(
    array(
        'titulo' => "Superbad",
        'estrella' => '★★★★☆',
        'descripsion' => 'Dos amigos se embarcan en una misión para conseguir alcohol y atraer a las chicas en su fiesta de graduación.',
        'fecha' => "2007",
        'duracion' => "113 min",
        'genero' => "Comedia",
        'portada' => "url_de_la_portada_superbad.jpg"
    ),
    array(
        'titulo' => "Anchorman: The Legend of Ron Burgundy",
        'estrella' => '★★★★☆',
        'descripsion' => 'Un reportero de noticias egocéntrico y su equipo se enfrentan a una reportera ambiciosa.',
        'fecha' => "2004",
        'duracion' => "94 min",
        'genero' => "Comedia",
        'portada' => "url_de_la_portada_anchorman.jpg"
    ),
    array(
        'titulo' => "The Hangover",
        'estrella' => '★★★★☆',
        'descripsion' => 'Un grupo de amigos despierta en Las Vegas con amnesia después de una desenfrenada despedida de soltero.',
        'fecha' => "2009",
        'duracion' => "100 min",
        'genero' => "Comedia",
        'portada' => "url_de_la_portada_the_hangover.jpg"
    ),
    array(
        'titulo' => "Bridesmaids",
        'estrella' => '★★★★☆',
        'descripsion' => 'Una dama de honor enloquece mientras intenta apoyar a la novia en su boda.',
        'fecha' => "2011",
        'duracion' => "125 min",
        'genero' => "Comedia",
        'portada' => "url_de_la_portada_bridesmaids.jpg"
    ),
    array(
        'titulo' => "The Grand Budapest Hotel",
        'estrella' => '★★★★★',
        'descripsion' => 'Un conserje excéntrico y su joven protegido se ven envueltos en el robo de una valiosa pintura renacentista.',
        'fecha' => "2014",
        'duracion' => "100 min",
        'genero' => "Comedia",
        'portada' => "url_de_la_portada_grand_budapest_hotel.jpg"
    ),
    array(
        'titulo' => "Ferris Bueller's Day Off",
        'estrella' => '★★★★★',
        'descripsion' => 'Un estudiante de secundaria decide faltar a clases y vivir un día de aventuras en la ciudad.',
        'fecha' => "1986",
        'duracion' => "103 min",
        'genero' => "Comedia",
        'portada' => "url_de_la_portada_ferris_bueller.jpg"
    ),
    array(
        'titulo' => "Dumb and Dumber",
        'estrella' => '★★★★☆',
        'descripsion' => 'Dos amigos con inteligencia limitada viajan en busca de una mujer que dejó su maleta llena de dinero.',
        'fecha' => "1994",
        'duracion' => "107 min",
        'genero' => "Comedia",
        'portada' => "url_de_la_portada_dumb_and_dumber.jpg"
    ),
    array(
        'titulo' => "The 40-Year-Old Virgin",
        'estrella' => '★★★★☆',
        'descripsion' => 'Un hombre de 40 años sin experiencia sexual intenta perder su virginidad con la ayuda de sus amigos.',
        'fecha' => "2005",
        'duracion' => "116 min",
        'genero' => "Comedia",
        'portada' => "url_de_la_portada_40_year_old_virgin.jpg"
    ),
    array(
        'titulo' => "Pitch Perfect",
        'estrella' => '★★★★☆',
        'descripsion' => 'Un grupo de chicas forma un coro a capella y compite en una competencia nacional.',
        'fecha' => "2012",
        'duracion' => "112 min",
        'genero' => "Comedia, Música",
        'portada' => "url_de_la_portada_pitch_perfect.jpg"
    ),
    array(
        'titulo' => "This Is the End",
        'estrella' => '★★★★☆',
        'descripsion' => 'Los actores interpretan versiones ficticias de sí mismos mientras luchan por sobrevivir a un apocalipsis.',
        'fecha' => "2013",
        'duracion' => "107 min",
        'genero' => "Comedia",
        'portada' => "url_de_la_portada_this_is_the_end.jpg"
    )

);



header('Content-Type: application/json');
echo json_encode($movies,JSON_UNESCAPED_UNICODE);