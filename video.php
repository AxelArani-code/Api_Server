<?php

$url="http://192.168.1.4:80/movies/cover/";
$url_v="http://192.168.1.7:80/movies/video/";
$movies=array(
    array('titulo'=>"The Mandalorian",'estrella'=>'5.0','descripsion'=>'Ambientada tras la caída del Imperio y antes de la aparición de la Primera Orden, la serie sigue los pasos de un pistolero solitario en las aventuras que protagoniza en los confines de la galaxia, donde no alcanza la autoridad de la Nueva República.','fecha'=>"2016",'duracion'=>"124 min",'genero'=>"4K UHD, Acción y Aventura, Drama, Sci-Fi & Fantasy",
    'portada'=>"https://cinecalidad.cat/wp-content/webp-express/webp-images/uploads/2019/11/MANDALORIAN-4K.jpg.webp",
 'video'=>$url_v.'Fight%20Club.mp4'),
 
 array('titulo'=>"Rocky 3",'estrella'=>'5.0','descripsion'=>'Rocky, campeón del mundo de los pesos pesados, se deja provocar a una pelea por el aspirante Clubber Lang. Su viejo enemigo, Apollo Creed, está dispuesto a entrenarlo para enfrentar a Clubber.','fecha'=>"2016",'duracion'=>"124 min",'genero'=>"4K UHD, Acción y Aventura, Drama, Sci-Fi & Fantasy",
 'portada'=>"https://cinecalidad.cat/wp-content/webp-express/webp-images/uploads/2019/11/MANDALORIAN-4K.jpg.webp",
'video'=>$url_v.'roky.mp4'),


array('titulo'=>"El caballero de la noche",'estrella'=>'5.0','descripsion'=>'Batman tiene que mantener el equilibrio entre el heroísmo y el vigilantismo para pelear contra un vil criminal conocido como el Guasón, que pretende sumir Ciudad Gótica en la anarquía.','fecha'=>"2016",'duracion'=>"124 min",'genero'=>"4K UHD, Acción y Aventura, Drama, Sci-Fi & Fantasy",
'portada'=>"https://cinecalidad.cat/wp-content/webp-express/webp-images/uploads/2019/11/MANDALORIAN-4K.jpg.webp",
'video'=>$url_v.'batman.mp4'),
    
array('titulo'=>"Bastardos sin gloria",'estrella'=>'5.0','descripsion'=>' Es el primer año de la ocupación alemana de Francia. El oficial aliado, teniente Aldo Raine, ensambla un equipo de soldados judíos para cometer actos violentos en contra de los nazis, incluyendo la toma de cabelleras. Él y sus hombres unen fuerzas con Bridget von Hammersmark, una actriz alemana ','fecha'=>"2016",'duracion'=>"124 min",'genero'=>"4K UHD, Acción y Aventura, Drama, Sci-Fi & Fantasy",
'portada'=>"https://cinecalidad.cat/wp-content/webp-express/webp-images/uploads/2019/11/MANDALORIAN-4K.jpg.webp",
'video'=>$url_v.'brat%20pitt.mp4'),


array('titulo'=>"Vikingos",'estrella'=>'5.0','descripsion'=>' El vikingo Ragnar Lothbrok es un joven agricultor y hombre de familia que se siente frustrado por las políticas de Earl Haraldson, el conde del lugar que envía a sus invasores vikingos al este de los países bálticos y Rusia, cuyos','fecha'=>"2016",'duracion'=>"124 min",'genero'=>"4K UHD, Acción y Aventura, Drama, Sci-Fi & Fantasy",
'portada'=>"https://cinecalidad.cat/wp-content/webp-express/webp-images/uploads/2019/11/MANDALORIAN-4K.jpg.webp",
'video'=>$url_v.'vikingo.mp4'),

array('titulo'=>"Creed 3",'estrella'=>'5.0','descripsion'=>' Adonis Creed, aún dominando el mundo del boxeo, prospera en su carrera y en su vida familiar, pero un amigo de la infancia y antiguo prodigio del boxeo reaparece tras salir de la cárcel y está ansioso por demostrar que merece otra oportunidad.','fecha'=>"2016",'duracion'=>"124 min",'genero'=>"4K UHD, Acción y Aventura, Drama, Sci-Fi & Fantasy",
'portada'=>"https://cinecalidad.cat/wp-content/webp-express/webp-images/uploads/2019/11/MANDALORIAN-4K.jpg.webp",
'video'=>$url_v.'newRocki.mp4'),

);

header('Content-Type: application/json');
echo json_encode($movies,JSON_UNESCAPED_UNICODE);