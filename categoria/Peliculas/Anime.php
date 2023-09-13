<?php

$url="http://192.168.1.5:80/movies/cover/";

$movies=array(
    array(
        'titulo' => "Spirited Away",
        'estrella' => '★★★★★',
        'descripsion' => 'Una niña se adentra en un mundo mágico y debe trabajar en un baño de los dioses para rescatar a sus padres.',
        'fecha' => "2001",
        'duracion' => "125 min",
        'genero' => "Anime, Aventura, Fantasía",
        'portada' => "url_de_la_portada_spirited_away.jpg"
    ),
    array(
        'titulo' => "Your Name",
        'estrella' => '★★★★★',
        'descripsion' => 'Dos adolescentes intercambian cuerpos a través del tiempo y tratan de encontrar una conexión.',
        'fecha' => "2016",
        'duracion' => "107 min",
        'genero' => "Anime, Drama, Fantasía",
        'portada' => "url_de_la_portada_your_name.jpg"
    ),
    array(
        'titulo' => "Akira",
        'estrella' => '★★★★☆',
        'descripsion' => 'En un Neo-Tokio post-apocalíptico, un joven se involucra en experimentos psíquicos peligrosos.',
        'fecha' => "1988",
        'duracion' => "124 min",
        'genero' => "Anime, Acción, Ciencia ficción",
        'portada' => "url_de_la_portada_akira.jpg"
    ),
    array(
        'titulo' => "Princess Mononoke",
        'estrella' => '★★★★★',
        'descripsion' => 'Un príncipe se enfrenta a una guerra entre humanos y espíritus del bosque para salvar a su amada.',
        'fecha' => "1997",
        'duracion' => "134 min",
        'genero' => "Anime, Aventura, Fantasía",
        'portada' => "url_de_la_portada_princess_mononoke.jpg"
    ),
    array(
        'titulo' => "Grave of the Fireflies",
        'estrella' => '★★★★★',
        'descripsion' => 'Dos hermanos luchan por sobrevivir en Japón durante los últimos días de la Segunda Guerra Mundial.',
        'fecha' => "1988",
        'duracion' => "89 min",
        'genero' => "Anime, Drama, Guerra",
        'portada' => "url_de_la_portada_grave_of_the_fireflies.jpg"
    ),
    array(
        'titulo' => "My Neighbor Totoro",
        'estrella' => '★★★★★',
        'descripsion' => 'Dos hermanas encuentran amistad con criaturas mágicas en el bosque cerca de su casa.',
        'fecha' => "1988",
        'duracion' => "86 min",
        'genero' => "Anime, Aventura, Fantasía",
        'portada' => "url_de_la_portada_my_neighbor_totoro.jpg"
    ),
    array(
        'titulo' => "Attack on Titan: Crimson Bow and Arrow",
        'estrella' => '★★★★☆',
        'descripsion' => 'Una película que resume los primeros 13 episodios del anime "Attack on Titan".',
        'fecha' => "2014",
        'duracion' => "119 min",
        'genero' => "Anime, Acción, Fantasía",
        'portada' => "url_de_la_portada_attack_on_titan.jpg"
    ),
    array(
        'titulo' => "A Silent Voice",
        'estrella' => '★★★★★',
        'descripsion' => 'Un chico intenta redimirse por acosar a una chica sorda en la escuela secundaria.',
        'fecha' => "2016",
        'duracion' => "130 min",
        'genero' => "Anime, Drama, Romance",
        'portada' => "url_de_la_portada_a_silent_voice.jpg"
    ),
    array(
        'titulo' => "Weathering with You",
        'estrella' => '★★★★☆',
        'descripsion' => 'Un joven con la habilidad de controlar el clima se encuentra con una chica que puede detener la lluvia.',
        'fecha' => "2019",
        'duracion' => "112 min",
        'genero' => "Anime, Drama, Fantasía",
        'portada' => "url_de_la_portada_weathering_with_you.jpg"
    ),
    array(
        'titulo' => "Demon Slayer: Mugen Train",
        'estrella' => '★★★★☆',
        'descripsion' => 'Los cazadores de demonios enfrentan a un demonio en un tren misterioso.',
        'fecha' => "2020",
        'duracion' => "117 min",
        'genero' => "Anime, Acción, Fantasía",
        'portada' => "url_de_la_portada_demon_slayer_mugen_train.jpg"
    )

);



header('Content-Type: application/json');
echo json_encode($movies,JSON_UNESCAPED_UNICODE);