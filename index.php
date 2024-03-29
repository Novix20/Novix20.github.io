<?php
session_start();
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
  
</head>

<body>
    <header>
        <h1 id="sanlorenzo">
            <img src="san-lorenzo-logo-escudo.png" width="100px" alt="San Lorenzo Logo">
            Club Atlético San Lorenzo de Almagro   asdsa    </h1>
            <div class="cartel"> <a href="inicio.html">Iniciar sesion</a>  / <a href="registro.html">Registrarse</a> </div>
    </header>
<article id="encabezado"> <p><a href="#es">¿Qué Es? </a> </p> 
    <p><a href="#IniciosDeportes">Inicios y deportes</a> </p> 
    <p><a href="#Campeonatos">Campeonatos</a> </p>
     <p><a href="#matadores">los matadores</a> </p>
      <p><a href="#torneosint">desempeño en torneos internacionales </a> </p></article>
    <article>
        <h1 id="es">¿Qué Es?</h1>
        <p class="parrafo">San Lorenzo es un club fundado en 1908 que actualmente disputa la primera división del
            fútbol argentino, es conocido por ser uno de los clubes más grandes en Argentina. Cuenta en sus vitrinas:</p>x
        <ul>
            <li>Una Copa CONMEBOL Libertadores 2014</li>x
            <li>15 campeonatos de primera división</li>
            <li>Una Copa CONMEBOL Sudamericana 2002</li>
            <li>Una Copa CONMEBOL Mercosur (actualmente conocida como Sudamericana)</li>
        </ul>
    </article>

    <div>
        <img class="libertadores" src="HD-wallpaper-el-pipi-y-la-copa-libertadores-romagnoli-san-lorenzo.jpg" width="500px"
            alt="Leandro Romagnoli levantando la Libertadores 2014">
            <h2>Pipi romagnoli, uno de los grandes ídolos del club, levantando la primera y única, hasta al momento, libertadores del club</h2>
        </div>

    <article>
        <h1 id="IniciosDeportes">Inicios y deportes</h1>
        <p>Fue fundado por un grupo de jóvenes con la colaboración del sacerdote salesiano Lorenzo Massa, centrándose
            principalmente en el fútbol, y con el tiempo se expandió a otros deportes como:</p>
        <ul>
            <li>Baloncesto (que en esa temporada se salvó del descenso a la segunda división)</li>
            <li>Handball</li>
            <li>Futsal</li>
            <li>Hockey</li>
            <li>etc.</li>
        </ul>
        <p>En cuanto al fútbol, comenzó en la tercera división y logró su ascenso a la élite del fútbol argentino el 1 de
            enero de 1915.</p>
    </article>

    <img src="https://volveavenidalaplata.com.ar/wp-content/uploads/2017/01/05-Ascenso-en-1915.jpg"
        alt="Plantel de San Lorenzo cuando ascendió a la primera división por primera vez">
    <h2>Plantel de San Lorenzo cuando ascendió a la primera división por primera vez</h2>

    <article>
        <h1 id="Campeonatos">Campeonatos</h1>
        <p>El club, una vez acomodado en la primera división, consiguió varios campeonatos en el amateurismo, siendo
            bicampeón en 1923-1924 y campeón en 1927. Luego, una vez comenzado el fútbol profesional, siguió conquistando
            títulos como el de 1933, 1936, 1946, etc.</p>
    </article>

    <img src="https://live.staticflickr.com/5598/31252474956_25f466fa6c_b.jpg" 
        alt="El 'Pipi' Romagnoli, uno de los mayores ídolos del club, celebrando el Torneo Inicial 2013" width="500px">
    <h2>El "Pipi" Romagnoli, uno de los mayores ídolos del club, celebrando el Torneo Inicial 2013</h2>

    <article>
        <h1 id="matadores">Los matadores</h1>
        <p>San Lorenzo tuvo un campeonato del recuerdo, que se encargó de ganar a nivel nacional y realizó una de las
            mejores campañas de todos los tiempos en el campeonato. Aquel equipo se llamó "Los Matadores", justamente
            porque en la cancha eran imbatibles, en sentido figurado.</p>
        <p>En el torneo metropolitano terminaron invictos, habiendo ganado 16 partidos y empatado 8. Lamentablemente, en
            la Copa Libertadores no clasificaron debido a que en aquella época tenía un formato distinto.</p>
    </article>

    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/89/Los_Matadores_%281968%29.jpg/400px-Los_Matadores_%281968%29.jpg"
        alt="Plantel de Los Matadores 1968">
    <h1>Plantel de Los Matadores 1968</h1>

    <article>
        <h1 id="torneosint">Desempeño en torneos internacionales</h1>
        <p>San Lorenzo cuenta en sus vitrinas con 3 títulos internacionales, incluyendo una Copa CONMEBOL Mercosur (torneo
            que luego se transformó en la "Sudamericana") y la prestigiosa Copa Libertadores. Aquel trofeo fue uno que se
            le resistió durante mucho tiempo, décadas, lo cual resulta irónico considerando que en la primera edición
            llegaron a las semifinales, perdiendo contra Peñarol, equipo que luego se llevaría el certamen.</p>
        <p>Una campaña recordada, aparte de la ya mencionada, es la de 2009, donde el club cayó en cuartos de final luego
            de haber eliminado a River en octavos de final, para luego perder contra Liga de Quito, equipo que después se
            consagraría campeón. El director técnico del club ecuatoriano en ese entonces era el Patón Bauza, quien
            posteriormente logró que San Lorenzo ganara su primera y única Copa Libertadores. En aquel partido contra Liga
            de Quito, en la vuelta, sufrimos una derrota debido a un error grosero del arquero, Orión, del cual todavía se
            discuten las polémicas sobre aquel rendimiento lamentable.</p>
    
                    </article>


    <img src="https://cdn.conmebol.com/wp-content/uploads/2014/08/copa_1.jpg" 
        alt="San Lorenzo celebrando la obtención de su primera y única Copa CONMEBOL Libertadores en la edición 2014">
    <h2>San Lorenzo celebrando la obtención de su primera y única Copa CONMEBOL Libertadores en la edición 2014</h2>
	
    
    <!-- Comentarios-->
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" id="formenvio">
    Comentario: <textarea rows="2" cols="50" class="comentario" name="comentario" form="formenvio" placeholder="Por favor, ingrese un comentario..."></textarea>
    <input type="submit">

</form>

<?php

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  // Crear mensaje sobre el comentario
	  $comentario = $_POST['comentario'];
      //si no se ingresa el comentario
	  if (empty($comentario)) {
	    echo "<div class=\"info-msg-error\"><p><strong>Error!</strong>Por favor, ingrese un comentario válido";
	  } else {
        // si se ingresa
	    echo "<div class=\"info-msg\"><p><strong>Exito!</strong>Gracias por dejar tu comentario!";
	    //$nuevocomentario = "INSERT INTO `Comentarios`(`mensaje`, 'usuario') VALUES ('$comentario', '$_SESSION["username"]');";
	    $resultEnvio = mysqli_query($conexionDatos, $nuevocomentario);
	  }
	  echo "</p></div>";
	}
?>
	<h3>Comentarios anteriores:</h3>
	<?php
		$queryComentarios = "SELECT * FROM Comentarios";
		$resultDatos = mysqli_query($conexionDatos, $queryComentarios);
		$numComentario = 0;

		while($cmnt = mysqli_fetch_array($resultDatos)){
			$numComentario = $numComentario + 1;
			echo "<div class=\"txtComentario\"><p><strong>Comentario #$numComentario</strong></p><p>$cmnt[0]</p></div>";
		}
		mysqli_close($conexionDatos);
	?>ysqli_close($conexionDatos);
	
</body>

</html>
