<?php

$url="http://192.168.1.7:80/movies/cover/";


$movies=array(
    array('titulo'=>'El hijo zurdo', 'estrella'=>'4.1','descripsion'=>'Lola, una madre de clase alta con dos hijos, ve como el menor, Lorenzo, se adentra en la oscuridad de un grupo radical. En el intento por recuperar a su hijo, Lola se relacionará con Maru, que vive una situación similar.','fecha'=>"2023",'duracion'=>"124 min",'genero'=>"Drama",'portada'=>'https://image.tmdb.org/t/p/w500/dCz8UlZEz8aVU1aglrcVrqU43wd.jpg','trailer'=>""),


    array('titulo'=>'Un año inolvidable; Invierno', 'estrella'=>'4.1','descripsion'=>'	La película sigue a Mabel (Maitê Padilha), una chica que quiere pasar sus últimos momentos antes de graduarse viajando con sus amigos de la infancia, pero el invierno llega temprano para interrumpir sus planes. La protagonista se enfurece cuando se ve obligada a viajar a un centro de esquí en Chile con sus padres. Sin embargo, allí se enfrenta a sus sentimientos más profundos, encuentra un nuevo amor y descubre su verdadera identidad.','fecha'=>"2023",'duracion'=>"124 min",'genero'=>"Drama, Romance",'portada'=>'https://image.tmdb.org/t/p/w500/rDaQeyPdIwhw7fqlIgMye50emMM.jpg','trailer'=>""),

    array('titulo'=>'Calle y Poche: Sin etiquetas','estrella'=>'4.1', 'descripsion'=>'En la cima de su exitosa carrera como creadores de contenido, Calle y Poché vuelven a Colombia a reencontrarse con sus familias, su grupo de amigos y con los desafíos que les plantea su relación amorosa y sus ambiciones individuales.','fecha'=>"2023",'duracion'=>"124 min",'genero'=>"Documental, Reality",'portada'=>'https://image.tmdb.org/t/p/w500/ivyt3ahhqHi3U0zNMCNWmJuOpaJ.jpg','trailer'=>""),

    array('titulo'=>'La negociadora', 'estrella'=>'4.1','descripsion'=>'Tras el asesinato de sus dos amigos escandinavos en Marruecos, una bloguera rusa decide hacer su propia justicia.','fecha'=>"2023",'duracion'=>"124 min",'genero'=>"Acción, Suspenso",'portada'=>'https://image.tmdb.org/t/p/w500/cNyW8niMiA74JHciyQZSzIN2bmz.jpg','trailer'=>""),

    array('titulo'=>'Barrabrava','estrella'=>'4.1', 'descripsion'=>'Luego de una feroz lucha interna, dos hermanos son expulsados de la barra del club de sus amores. Solos, sin dinero, ni la protección del poder político, desatarán una guerra que pondrá a prueba su hermandad.','fecha'=>"2023",'duracion'=>"124 min",'genero'=>"Crimen, Drama, Misterio",'portada'=>'https://image.tmdb.org/t/p/w500/4WxxzHCESirA8qzR3r8fSNcjHBn.jpg','trailer'=>""),

    array('titulo'=>'Hex: El salto letal','estrella'=>'4.1', 'descripsion'=>'Tras una misteriosa desaparición en un salto, un grupo de paracaidistas experimenta sucesos paranormales que les obligan a luchar por sus vidas.','fecha'=>"2023",'duracion'=>"124 min",'genero'=>"Acción, Suspenso, Terror",'portada'=>'https://image.tmdb.org/t/p/w500/kCBjrtjbwFKL5JUY5BHJglMJSoW.jpg','trailer'=>""),

    array('titulo'=>'El gran George Foreman','estrella'=>'4.1', 'descripsion'=>'Biopic sobre el boxeador George Foreman.','fecha'=>"2023",'duracion'=>"124 min",'genero'=>"Drama, Historia",'portada'=>'https://image.tmdb.org/t/p/w500/ue2W0lfk6DVCQCQc1d2k64xz1xh.jpg','trailer'=>""),

    array('titulo'=>'Chevalier: Pasión y Libertad','estrella'=>'4.1', 'descripsion'=>'Biopic de Chevalier de Saint-Georges, hijo de una esclava africana que alcanzó el éxito en la sociedad francesa del siglo XVIII como virtuoso violinista y compositor, además de como renombrado campeón de esgrima. Nacido Joseph Bologne, hijo ilegítimo de su madre, esclava, y un francés dueño de la plantación donde trabajaba su madre, Chevalier creció enfrentado al racismo y al clasismo de la época, pero llegó a codearse con la alta sociedad francesa de su tiempo, conociendo incluso a María Antonieta, reina consorte de Francia.','fecha'=>"2023",'duracion'=>"124 min",'genero'=>"Drama, Historia, Música",'portada'=>'https://image.tmdb.org/t/p/w500/mRvqJLGhhW43DNTgn5IJzIuqkqk.jpg','trailer'=>""),

    array('titulo'=>'El club de mamá','estrella'=>'4.1', 'descripsion'=>'Una escritora de cómics que trabaja en un club de burlesque recurre a la ayuda de su colega para averiguar qué hay detrás de las desapariciones de las jóvenes de su círculo.','fecha'=>"2023",'duracion'=>"124 min",'genero'=>"Drama, Misterio, Suspenso",'portada'=>'https://image.tmdb.org/t/p/w500/3xnwPH5V4PBeZIhFCtRlX4237PV.jpg','trailer'=>""),
);

header('Content-Type: application/json');
echo json_encode($movies,JSON_UNESCAPED_UNICODE);