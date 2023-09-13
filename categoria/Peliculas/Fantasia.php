<?php

$url="http://192.168.1.5:80/movies/cover/";

$movies=array(
    array(
        'titulo' => "The Lord of the Rings: The Fellowship of the Ring",
        'estrella' => '★★★★★',
        'descripsion' => 'Un joven hobbit se une a una misión para destruir un anillo mágico y salvar a su mundo de la oscuridad.',
        'fecha' => "2001",
        'duracion' => "178 min",
        'genero' => "Fantasía, Aventura",
        'portada' => "https://upload.wikimedia.org/wikipedia/en/thumb/8/8a/The_Lord_of_the_Rings%2C_TFOTR_%282001%29.jpg/220px-The_Lord_of_the_Rings%2C_TFOTR_%282001%29.jpg"
    ),
    array(
        'titulo' => "Harry Potter and the Sorcerer's Stone",
        'estrella' => '★★★★★',
        'descripsion' => 'Un niño descubre que es un mago y asiste a una escuela de magia, donde enfrenta amenazas oscuras.',
        'fecha' => "2001",
        'duracion' => "152 min",
        'genero' => "Fantasía, Aventura",
        'portada' => "https://static.wikia.nocookie.net/dei8941/images/7/7c/Harry_Potter_and_the_Philosopher%27s_Stone_-_P%C3%B3ster_%28Ingl%C3%A9s%2C_alternativo%29.jpg/revision/latest?cb=20211115215545&path-prefix=es"
    ),
    array(
        'titulo' => "Pan's Labyrinth",
        'estrella' => '★★★★★',
        'descripsion' => 'En la España posguerra, una niña descubre un laberinto mágico y enfrenta pruebas para escapar su realidad.',
        'fecha' => "2006",
        'duracion' => "118 min",
        'genero' => "Fantasía, Drama, Guerra",
        'portada' => "https://m.media-amazon.com/images/M/MV5BNTkzOTk0ZDctOTM4MC00NDg5LWEyYjctODE3ZTlkM2Y4NzQ1XkEyXkFqcGdeQXVyNjI0MTA1MTM@._V1_.jpg"
    ),
    array(
        'titulo' => "Alice in Wonderland",
        'estrella' => '★★★★☆',
        'descripsion' => 'Una joven se adentra en un mundo mágico y extraño lleno de criaturas y desafíos.',
        'fecha' => "2010",
        'duracion' => "108 min",
        'genero' => "Fantasía, Aventura",
        'portada' => "https://i.pinimg.com/1200x/68/cb/5e/68cb5e0b492af0b81642e5143809080f.jpg"
    ),
    array(
        'titulo' => "The Chronicles of Narnia: The Lion, the Witch and the Wardrobe",
        'estrella' => '★★★★☆',
        'descripsion' => 'Cuatro hermanos descubren un mundo mágico a través de un armario y luchan por liberarlo de la oscuridad.',
        'fecha' => "2005",
        'duracion' => "143 min",
        'genero' => "Fantasía, Aventura",
        'portada' => "https://static.wikia.nocookie.net/disney/images/4/41/Narnia1.jpg/revision/latest?cb=20110309194857&path-prefix=es"
    ),
    array(
        'titulo' => "The Dark Crystal",
        'estrella' => '★★★★☆',
        'descripsion' => 'Un Gelfling busca un cristal mágico para detener la opresión de los Skeksis en su mundo fantástico.',
        'fecha' => "1982",
        'duracion' => "93 min",
        'genero' => "Fantasía, Aventura",
        'portada' => "https://c8.alamy.com/compes/pmadeb/the-dark-crystal-1982-universal-pictures-file-reference-32509-106tha-pmadeb.jpg"
    ),
    array(
        'titulo' => "Fantastic Beasts and Where to Find Them",
        'estrella' => '★★★★☆',
        'descripsion' => 'Un magizoólogo busca criaturas mágicas en la década de 1920 en el mundo de Harry Potter.',
        'fecha' => "2016",
        'duracion' => "133 min",
        'genero' => "Fantasía, Aventura",
        'portada' => "https://pisces.bbystatic.com/image2/BestBuy_US/images/products/5669/5669901_so.jpg"
    ),
    array(
        'titulo' => "The NeverEnding Story",
        'estrella' => '★★★★☆',
        'descripsion' => 'Un niño lee un libro mágico y es transportado a un mundo de fantasía donde debe salvarlo de la destrucción.',
        'fecha' => "1984",
        'duracion' => "102 min",
        'genero' => "Fantasía, Aventura",
        'portada' => "https://target.scene7.com/is/image/Target/GUEST_68889edf-0b4f-405d-9c6f-56412f0f50ed?wid=488&hei=488&fmt=pjpeg"
    ),
    array(
        'titulo' => "Willow",
        'estrella' => '★★★★☆',
        'descripsion' => 'Un granjero enano protege a un bebé destinado a derrocar a una reina malvada en un mundo de magia y aventuras.',
        'fecha' => "1988",
        'duracion' => "126 min",
        'genero' => "Fantasía, Aventura",
        'portada' => "https://www.mubis.es/media/articles/4266/42634/caratula-completa-y-reservas-de-willow-en-blu-ray-original.jpg"
    ),
    array(
        'titulo' => "Stardust",
        'estrella' => '★★★★☆',
        'descripsion' => 'Un joven busca una estrella fugaz en un mundo mágico para impresionar a su amada, pero encuentra mucho más.',
        'fecha' => "2007",
        'duracion' => "127 min",
        'genero' => "Fantasía, Aventura, Romance",
        'portada' => "https://www.rocalibros.com/archivos/imagenes/mayores/1639.jpg"
    )
);



header('Content-Type: application/json');
echo json_encode($movies,JSON_UNESCAPED_UNICODE);