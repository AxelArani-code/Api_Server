<?php

$url="http://192.168.1.7:80/movies/cover/";


$movies=array(
    array('titulo'=>'Luz Mala', 'estrella'=>'5.0','descripsion'=>' Una noche de invierno. Una casa aislada en un pequeño pueblo. Dos bandos enfrentados entre sí deben unir fuerzas para sobrevivir a un mal ligado a una de las leyendas más antiguas del campo.','fecha'=>"2023",'duracion'=>"124 min",'genero'=>"Terror",'portada'=>'https://image.tmdb.org/t/p/w500/t2VZV2RCgxUyLvPDxbcjhNdGhnW.jpg' ),

    array('titulo'=>'Muerte Infinita', 'estrella'=>'5.0','descripsion'=>'James y Em Foster disfrutan de unas vacaciones en la playa con todo incluido en la isla ficticia de La Tolqa, cuando un accidente fatal expone la subcultura perversa del turismo hedonista, la violencia imprudente y los horrores surrealistas del resort. ','fecha'=>"2023",'duracion'=>"124 min",'genero'=>"Terror",'portada'=>'https://wy.cinecalidad.vet/wp-content/uploads/2023/06/muerte-infinita-4K.jpg' ),

    array('titulo'=>'Hex: El salto letal', 'estrella'=>'5.0','descripsion'=>'Tras una misteriosa desaparición en un salto, un grupo de paracaidistas experimenta sucesos paranormales que les obligan a luchar por sus vidas. ','fecha'=>"2023",'duracion'=>"124 min",'genero'=>"Terror",'portada'=>'https://image.tmdb.org/t/p/w500/kCBjrtjbwFKL5JUY5BHJglMJSoW.jpg' ),


    array('titulo'=>'Pearl', 'estrella'=>'5.0','descripsion'=>' Atrapada en la granja aislada de su familia, Pearl debe atender a su padre enfermo bajo la amarga y dominante vigilancia de su devota madre, deseando una vida glamorosa como la que ha visto en las películas. Precuela de ‘X’ (2022) centrada en los orígenes del personaje de Pearl (Mia Goth).','fecha'=>"2023",'duracion'=>"124 min",'genero'=>"Terror",'portada'=>'https://wy.cinecalidad.vet/wp-content/uploads/2023/05/pearl-4K.jpg' ),

    array('titulo'=>'Monstrous', 'estrella'=>'5.0','descripsion'=>'La historia se centra en una mujer traumatizada que huye de su exmarido abusador con su hijo de 7 años. En su nuevo y remoto santuario, descubren que tienen que enfrentarse a un monstruo más grande y aterrador. ','fecha'=>"2023",'duracion'=>"124 min",'genero'=>"Terror",'portada'=>'https://image.tmdb.org/t/p/w500/ec3aX4DyjepEhPkpIUukaBxKpN3.jpg' ),
    
    array('titulo'=>'Jugar muerto; Play Dead', 'estrella'=>'5.0','descripsion'=>'La estudiante de criminología Chloe finge su propia muerte para irrumpir en una morgue y recuperar una prueba que vincula a su hermano menor con un crimen que salió mal. Una vez dentro, rápidamente se entera de que el temible forense usa la morgue como fachada para un negocio enfermizo y retorcido. ','fecha'=>"2023",'duracion'=>"124 min",'genero'=>"Terror",'portada'=>'https://image.tmdb.org/t/p/w500/ge53bTF46mWEod19IqM3sW7fA6B.jpg' ),

    array('titulo'=>'Linaje Oscuro', 'estrella'=>'5.0','descripsion'=>'Como cualquier otra adolescente, Tara está sobreviviendo a la escuela secundaria, pero su padre y su madre parecen extrañamente distantes. En medio de una ola cercana de espantosos asesinatos con hacha, Tara tiene avistamientos de entidades aterradoras, lo que la obliga a cuestionar su propia cordura y su impactante ascendencia. ','fecha'=>"2023",'duracion'=>"124 min",'genero'=>"Terror",'portada'=>'https://wy.cinecalidad.vet/wp-content/webp-express/webp-images/uploads/2023/05/si3ix0OUixyPAjRHWpjxuW1qFtp.jpg.webp' ),

    array('titulo'=>'Venus', 'estrella'=>'5.0','descripsion'=>'Lucía, una bailarina de discoteca dada a la fuga, se refugia en un siniestro edificio de la periferia de Madrid donde su hermana Rocío vive con su hija Alba. ','fecha'=>"2023",'duracion'=>"124 min",'genero'=>"Terror",'portada'=>'https://wy.cinecalidad.vet/wp-content/webp-express/webp-images/uploads/2023/05/venus-4k.jpg.webp' ),

    array('titulo'=>'La Piedad', 'estrella'=>'5.0','descripsion'=>'Mateo vive con su madre, Libertad, en un mundo color de rosa; un microcosmos que tiene precisamente dos habitantes, madre e hijo. Un día a Mateo le diagnostican cáncer… ','fecha'=>"2023",'duracion'=>"124 min",'genero'=>"Terror",'portada'=>'https://wy.cinecalidad.vet/wp-content/uploads/2023/05/u1Y5Q0pikN5CxW9KlFQssA3xijb.jpg' ),


    
    array('titulo'=>'El exorcista del Papa', 'estrella'=>'5.0','descripsion'=>' El Padre Gabriele Amorth, Exorcista Principal del Vaticano investiga la terrorífica posesión de un niño y termina descubriendo una conspiración que hace siglos fue encubierta de manera desesperada por el Vaticano.','fecha'=>"2023",'duracion'=>"124 min",'genero'=>"Terror",'portada'=>'https://wy.cinecalidad.vet/wp-content/uploads/2023/05/el-exorcista-del-papa-4k.jpg ' ),

 

);


header('Content-Type: application/json');
echo json_encode($movies,JSON_UNESCAPED_UNICODE);