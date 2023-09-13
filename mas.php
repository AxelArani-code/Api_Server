<?php

$url="http://192.168.1.7:80/movies/cover/";

$movies=array(
    //
    array('titulo'=>"The Mandalorian",'estrella'=>'5.0','descripsion'=>'Ambientada tras la caída del Imperio y antes de la aparición de la Primera Orden, la serie sigue los pasos de un pistolero solitario en las aventuras que protagoniza en los confines de la galaxia, donde no alcanza la autoridad de la Nueva República.','fecha'=>"2016",'duracion'=>"124 min",'genero'=>"4K UHD, Acción y Aventura, Drama, Sci-Fi & Fantasy",
    'portada'=>"https://static.wikia.nocookie.net/esstarwars/images/2/29/MandoS2PosterES.jpg/revision/latest?cb=20201001205530"),
    
    array('titulo'=>"Gotham Knights",'estrella'=>'4.5','descripsion'=>'A raíz del asesinato de Bruce Wayne, su rebelde hijo adoptivo forja una alianza improbable con los hijos de los enemigos de Batman cuando todos son incriminados por matar al Caped Crusader.','fecha'=>"2018",'duracion'=>"156 min",'genero'=>"Ciencia ficción. Fantástico. Acción",
    'portada'=>"https://m.media-amazon.com/images/M/MV5BYWM3OWQwZWUtOWE2My00Y2RmLTliZWItZWE3MzkzMDFlMWJjXkEyXkFqcGdeQXVyMTUzMTg2ODkz._V1_.jpg"),

    array('titulo'=>"Shazam! Fury of the Gods",'estrella'=>'4.2','descripsion'=>'Billy Batson y sus hermanos adoptivos, que se transforman en superhéroes al decir “¡Shazam!”, se ven obligados a volver a la acción y luchar contra las Hijas de Atlas, a quienes deben evitar que use un arma que podría destruir el mundo.','fecha'=>"2013",'duracion'=>"91 min",'genero'=>"4K UHD, Acción, Comedia, Fantasía",
    'portada'=>"https://m.media-amazon.com/images/M/MV5BNzJlM2NmZTItOGQyYS00MmE2LTkwZGUtNDFkNmJmZjRjZjcxXkEyXkFqcGdeQXVyMTA3MDk2NDg2._V1_.jpg"),
   
    array('titulo'=>"Jeepers Creepers: Reborn",'estrella'=>'4.1','descripsion'=>'Obligada a viajar con su novio a un festival de terror, Laine comienza a experimentar visiones inquietantes asociadas con la leyenda urbana de The Creeper. A medida que llega el festival y el entretenimiento empapado de sangre se convierte en un frenesí, ella se convierte en el centro mientras se convoca a algo sobrenatural.','fecha'=>"2014",'duracion'=>"132 min",'genero'=>"Misterio, Suspenso, Terror",
    'portada'=>"https://pics.filmaffinity.com/Jeepers_Creepers_El_renacer-143255948-large.jpg"),
   
    array('titulo'=>"Avatar: The Way of Water",'estrella'=>'3.2','descripsion'=>'La historia de la familia Sully (Jake, Neytiri y sus hijos), los problemas que les persiguen, lo que hacen para mantenerse a salvo, las batallas que libran para seguir vivos y las tragedias que soportan.','fecha'=>"2010",'duracion'=>"115 min",'genero'=>"4K UHD, Acción, Aventura, Ciencia ficción",
    'portada'=>"https://m.media-amazon.com/images/M/MV5BYjhiNjBlODctY2ZiOC00YjVlLWFlNzAtNTVhNzM1YjI1NzMxXkEyXkFqcGdeQXVyMjQxNTE1MDA@._V1_FMjpg_UX1000_.jpg"),
   
    array('titulo'=>" The Last of Us",'estrella'=>'3.0','descripsion'=>'Joel, uno de los pocos sobrevivientes, es contratado para sacar de contrabando a Ellie, una niña de 14 años, fuera de una opresiva zona de cuarentena. Lo que pareciera ser un pequeño trabajo, se convierte en un viaje brutal y desgarrador','fecha'=>"2013",'duracion'=>"179 min",'genero'=>"4K UHD, Acción y Aventura, Drama, Sci-Fi & Fantasy",
    'portada'=>"https://pics.filmaffinity.com/the_last_of_us-722385305-mmed.jpg"),
  
    array('titulo'=>"Emancipation",'estrella'=>'4.6','descripsion'=>'Inspirada en la conmovedora historia real de un hombre dispuesto a cualquier cosa por su familia, y por la libertad. Cuando Peter, un hombre esclavizado, arriesga su vida por escapar y regresar con su familia, se embarca en una peligrosa travesía de amor y resiliencia.','fecha'=>"2003",'duracion'=>"121 min",'genero'=>"4K UHD, Acción, Drama, Historia, Suspenso",
    'portada'=>"https://pics.filmaffinity.com/emancipation-196226665-large.jpg"),
   
    array('titulo'=>"M3GAN",'estrella'=>'5.0','descripsion'=>'Cuando Gemma se convierte en la cuidadora de su sobrina huérfana de 8 años, Cady, Gemma no está segura ni preparada para ser madre. Bajo una intensa presión en el trabajo, Gemma decide emparejar su prototipo M3GAN con Cady en un intento de resolver ambos problemas, una decisión que tendrá consecuencias inimaginables.','fecha'=>"1997",'duracion'=>"137 min",'genero'=>"4K UHD, Ciencia ficción, Comedia, Terror",
    'portada'=>"https://pics.filmaffinity.com/M3GAN-570441440-mmed.jpg"),

);




header('Content-Type: application/json');
echo json_encode($movies,JSON_UNESCAPED_UNICODE);