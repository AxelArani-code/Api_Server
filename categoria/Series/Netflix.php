<?php

$url="http://192.168.1.5:80/movies/cover/";

$movies=array(
    array(
        'titulo' => "Stranger Things",
        'estrella' => '★★★★★',
        'descripsion' => 'Un grupo de amigos se enfrenta a misterios sobrenaturales en su pequeña ciudad.',
        'fecha' => "2016",
        'duracion' => "50 min por episodio",
        'genero' => "Ciencia ficción, Drama, Misterio",
        'portada' => "https://wwv.cinecalidad.com.mx/wp-content/uploads/2022/05/zFE44Qks8F1IFu7qkqxNjJoelvT.jpg"
    ),
    array(
        'titulo' => "The Crown",
        'estrella' => '★★★★★',
        'descripsion' => 'La historia de la reina Isabel II y su reinado.',
        'fecha' => "2016",
        'duracion' => "60 min por episodio",
        'genero' => "Drama, Historia",
        'portada' => "https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/media/image/2018/03/crown-portada.jpg"
    ),
    array(
        'titulo' => "Narcos",
        'estrella' => '★★★★☆',
        'descripsion' => 'La historia del auge y caída del cartel de Medellín en Colombia.',
        'fecha' => "2015",
        'duracion' => "45 min por episodio",
        'genero' => "Crimen, Drama, Suspense",
        'portada' => "https://es.web.img3.acsta.net/pictures/15/07/29/14/33/086520.jpg"
    ),
    array(
        'titulo' => "Black Mirror",
        'estrella' => '★★★★☆',
        'descripsion' => 'Episodios independientes que exploran el lado oscuro de la tecnología y la sociedad.',
        'fecha' => "2011",
        'duracion' => "60 min por episodio",
        'genero' => "Ciencia ficción, Drama, Thriller",
        'portada' => "https://www.elespectadorimaginario.com/wp-content/webpc-passthru.php?src=http://www.elespectadorimaginario.com/wp-content/uploads/Black-Mirror-temporada-4.jpg&nocache=1"
    ),
    array(
        'titulo' => "Money Heist (La Casa de Papel)",
        'estrella' => '★★★★☆',
        'descripsion' => 'Un grupo de criminales realiza un gran atraco en la Casa de la Moneda de España.',
        'fecha' => "2017",
        'duracion' => "45 min por episodio",
        'genero' => "Acción, Crimen, Drama",
        'portada' => "https://images.justwatch.com/poster/249335581/s718/la-casa-de-papel.jpg"
    ),
    array(
        'titulo' => "The Witcher",
        'estrella' => '★★★★☆',
        'descripsion' => 'Un cazador de monstruos lucha por encontrar su lugar en un mundo donde las criaturas son más malvadas que los humanos.',
        'fecha' => "2019",
        'duracion' => "60 min por episodio",
        'genero' => "Acción, Aventura, Drama",
        'portada' => "https://m.media-amazon.com/images/M/MV5BMDEwOWVlY2EtMWI0ZC00OWVmLWJmZGItYTk3YjYzN2Y0YmFkXkEyXkFqcGdeQXVyMTUzMTg2ODkz._V1_.jpg"
    ),
    array(
        'titulo' => "Ozark",
        'estrella' => '★★★★☆',
        'descripsion' => 'Una familia se muda a la región de los Ozarks para lavar dinero y salvar sus vidas en medio de peligrosas situaciones.',
        'fecha' => "2017",
        'duracion' => "60 min por episodio",
        'genero' => "Crimen, Drama, Suspense",
        'portada' => "https://resizing.flixster.com/3ko6zO6791p1QPOXHUI2eCwmHXQ=/ems.cHJkLWVtcy1hc3NldHMvdHZzZXJpZXMvMDIyOTBmN2QtMzM0Yi00ODUxLWE0MWYtMmViYWJiOGViZjRkLmpwZw=="
    ),
    array(
        'titulo' => "The Umbrella Academy",
        'estrella' => '★★★★☆',
        'descripsion' => 'Una familia disfuncional de superhéroes se reúne para resolver el misterio de la muerte de su padre adoptivo.',
        'fecha' => "2019",
        'duracion' => "60 min por episodio",
        'genero' => "Acción, Aventura, Comedia",
        'portada' => "https://flxt.tmsimg.com/assets/p16091714_b_v13_aj.jpg"
    ),
    array(
        'titulo' => "Breaking Bad",
        'estrella' => '★★★★★',
        'descripsion' => 'Un profesor de química comienza a fabricar y vender metanfetaminas después de ser diagnosticado con cáncer.',
        'fecha' => "2008",
        'duracion' => "45 min por episodio",
        'genero' => "Crimen, Drama, Thriller",
        'portada' => "https://es.web.img3.acsta.net/pictures/18/04/04/22/52/3191575.jpg"
    ),
    array(
        'titulo' => "Friends",
        'estrella' => '★★★★★',
        'descripsion' => 'Un grupo de amigos vive diversas situaciones cómicas y emocionales en Nueva York.',
        'fecha' => "1994",
        'duracion' => "22 min por episodio",
        'genero' => "Comedia, Romance",
        'portada' => "https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/media/image/2016/07/poster-friends.jpg?tf=1200x"
    )


);



header('Content-Type: application/json');
echo json_encode($movies,JSON_UNESCAPED_UNICODE);