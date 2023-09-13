<?php

$url="http://192.168.1.7:80/movies/cover/";


$movies=array(
  


    
    
    array('titulo'=>'Sangre y oro', 'estrella'=>'5.0','descripsion'=>'Al final de la Segunda Guerra Mundial, un soldado alemán busca a su hija mientras una tropa de las SS busca un tesoro judío. ','fecha'=>"2023",'duracion'=>"124 min",'genero'=>"Acción, Drama ",
    'portada'=>'https://image.tmdb.org/t/p/w500/6Tdu098zuhY4AGG5CHYJZRIu5yO.jpg ' ),

    array('titulo'=>'John Wick 4', 'estrella'=>'5.0','descripsion'=>'John Wick descubre un camino para derrotar a La Mesa. Pero antes de poder ganar su libertad, Wick deberá enfrentarse a un nuevo enemigo con poderosas alianzas en todo el mundo; y contra las fuerzas que convierten a viejos amigos en enemigo ','fecha'=>"2023",'duracion'=>"124 min",'genero'=>"Acción, Drama ",
    'portada'=>'https://wy.cinecalidad.vet/wp-content/uploads/2023/05/john-wick-4-4K.jpg' ),

    array('titulo'=>'Detectives en Guerra', 'estrella'=>'5.0','descripsion'=>'Cuando Hong Kong se ve sacudido por múltiples asesinatos espantosos, la policía forma un grupo de trabajo para investigar. Jun (Sean Lau), una vez un brillante detective que sufrió un colapso mental, comienza su propia investigación. Eventualmente, la policía descubre que las víctimas del asesinato son todos los sospechosos de casos sin resolver. ','fecha'=>"2023",'duracion'=>"124 min",'genero'=>"Acción, Drama ",
    
    'portada'=>'https://image.tmdb.org/t/p/w500/1PSwGKwkXkIT1tPiNTO0q0pei1y.jpg' ),

    array('titulo'=>'Medellín', 'estrella'=>'5.0','descripsion'=>'Para salvar a su hermano pequeño de un peligroso cartel de Medellín, Reda (Ramzy Bedia) tiene un plan tan sencillo como loco: reunir un equipo y llevar a cabo una redada en Colombia. Pero esta locura de plan se le va de las manos cuando decide secuestrar al hijo del líder del cartel para intercambiarlo por la vida de su hermano ','fecha'=>"2023",'duracion'=>"124 min",'genero'=>"Acción, Drama ",
    'portada'=>'https://wy.cinecalidad.vet/wp-content/uploads/2023/06/medellin-4k.jpg ' ),

    array('titulo'=>'Los Bastardos', 'estrella'=>'5.0','descripsion'=>'Una epopeya sobre una de las épocas más convulsas de la historia reciente del conurbano bonaerense. En este contexto surge un grupo de idealistas a los que llaman despectivamente: “Los bastardos”. ','fecha'=>"2023",'duracion'=>"124 min",'genero'=>"Acción, Drama ",'portada'=>'https://image.tmdb.org/t/p/w500/ffDHUOjHNfqSizXFA7oymCCckE8.jpg ' ),

    array('titulo'=>'Rápidos y furiosos X', 'estrella'=>'5.0','descripsion'=>'A través de varias misiones y contra lo imposible, Dom Toretto y su familia han sido más astutos y más rápidos que todos los enemigos se le han cruzado en su camino. Ahora se enfrentan a su enemigo más letal: una amenaza aterradora que surge de las sombras del pasado que está alimentado de una venganza sangrienta, y está decidido a destruir a su familia y destruir todo, y a cualquier persona, a los que Dom ama. ','fecha'=>"2023",'duracion'=>"124 min",'genero'=>"Acción, Drama ",
    'portada'=>'https://wy.cinecalidad.vet/wp-content/uploads/2023/06/FAST-X-4K.jpg ' ),

    array('titulo'=>'Misión de rescate 2', 'estrella'=>'5.0','descripsion'=>'Después de sobrevivir a todo lo que le sucede en la primera película, Rake regresa como mercenario australiano de operaciones encubiertas al que se encomienda otra misión suicida: rescatar a la maltrecha familia de un despiadado gángster georgiano de la prisión donde se encuentra recluida. ','fecha'=>"2023",'duracion'=>"124 min",'genero'=>"Acción, Drama ",
    'portada'=>'https://drive.google.com/file/d/11NtOUqMixfUumb1-Urzmb_eNeBTdfTU8/view?usp=sharing' ),

    array('titulo'=>'El Pacto', 'estrella'=>'5.0','descripsion'=>' En su último período de servicio en Afganistán, el sargento John Kinley se une al intérprete local Ahmed para inspeccionar la región. Cuando su unidad sufre una emboscada, Kinley y Ahmed son los únicos supervivientes. Con los combatientes enemigos persiguiéndoles, Ahmed arriesga su propia vida para llevar a Kinley herido a través de kilómetros de terreno agotador a un lugar seguro. De vuelta en suelo estadounidense, Kinley se entera de que Ahmed y su familia no recibieron el pasaje a Estados Unidos como se prometió. Decidido a proteger a su amigo y pagar su deuda, Kinley regresa a la zona de guerra para recuperar a Ahmed y su familia antes de que las milicias locales les capturen.','fecha'=>"2023",'duracion'=>"124 min",'genero'=>"Acción, Drama ",
    'portada'=>'https://wy.cinecalidad.vet/wp-content/uploads/2023/06/el-pacto-4K.png ' ),


    array('titulo'=>'Cráter', 'estrella'=>'5.0','descripsion'=>'	Caleb Channing fue criado en una colonia minera en la luna y está a punto de ser trasladado a un idílico planeta lejano después de la muerte de su padre. Antes de irse, para cumplir el último deseo de su papá, él y sus tres mejores amigos, Dylan, Borney y Marcus, y la recién llegada de la Tierra, Addison, roban un vehículo para una última aventura en donde explorarán el misterioso cráter. ','fecha'=>"2023",'duracion'=>"124 min",'genero'=>"Acción, Drama ",
    'portada'=>'https://wy.cinecalidad.vet/wp-content/uploads/2023/05/CRATER.jpg ' ),

    array('titulo'=>'La madre', 'estrella'=>'5.0','descripsion'=>'Una letal asesina sale de su escondite para proteger a su hija, a quien dio en adopción años atrás. Juntas se verán obligadas a huir de todos los peligros que las acechan. ','fecha'=>"2023",'duracion'=>"124 min",'genero'=>"Acción, Drama ",
    'portada'=>'https://wy.cinecalidad.vet/wp-content/webp-express/webp-images/uploads/2023/05/pNYtkngatCVyDvbSkaYV2ZOr0lS.jpg.webp' ),


);

header('Content-Type: application/json');
echo json_encode($movies,JSON_UNESCAPED_UNICODE);