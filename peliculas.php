<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Canal DHE</title>
<link href="jquery-mobile/jquery.mobile.theme-1.3.0.min.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="jquery-mobile/jquery.mobile.structure-1.3.0.min.css" rel="stylesheet" type="text/css">
<script src="jquery-mobile/jquery-1.11.1.min.js"></script>
<script src="jquery-mobile/jquery.mobile-1.3.0.min.js"></script>
<script src="js/slider.js"></script>
</head>

<?php include_once("config.php"); 
	
	$conex = mysql_connect ("$servidor","$usuario","$password");
		if (!$conex)
			{
				die('NO puede conetarse: ' . mysql_error());
			}
		else {
			echo ("estoy conectado");
mysql_set_charset('utf8',$conex);
			mysql_select_db ("$database");
		}
	?> 
<?php $results_1 = mysql_query("SELECT * FROM peliculas WHERE publicada = 'S_APP'");?>

<body>
<!--PELICULAS-->
<div data-role="page" id="peliculas" style="background-image: url('img/fondo.png'); background-attachment: fixed; background-repeat: repeat;" data-theme="a">
  <div data-role="header" data-position="fixed">
   <a href="#genero" data-role="button" data-transition="flip">Género</a>
    <h1>Trailers</h1>
    <a href="#buscar" data-role="button" data-icon="search" data-iconpos="notext" data-transition="flip">Button</a>
  </div>
  <div data-role="content">
  
  	<div class="ui-grid-b">
  	
	<div class="ui-block-a"><?php	while($mostrador = mysql_fetch_array($results_1))
			{?>
	<div><img src="http://www.canaldhe.com/templates/canaldhe/detallePelicula/<?php echo $mostrador['imagen_detalle']?>" class="ui-li-icon"></div>
	<p class="centerl"><a href="#pelicula1"><?php echo $mostrador['nom_pelicula']?></a></p><?php } ?></div>
	
	
		
  	
  </div>
  <div data-role="footer" data-position="fixed">
    <div data-role="navbar">
      <ul>
        <li><a href="#peliculas" data-transition="flip" data-theme="a"  class="ui-btn-active ui-state-persist"><div><img src="img/movie.png" class="ui-li-icon"></div>Trailers</a></li>
        <li><a href="#calendario" data-transition="flip"><div><img src="img/calendario.png" class="ui-li-icon"></div>Calendario</a></li>
        <li><a href="#top" data-transition="flip"><div><img src="img/estrella.png" class="ui-li-icon"></div>Top 8</a></li>
        <li><a href="#noticias" data-transition="flip"><div><img src="img/new.png" class="ui-li-icon"></div>Noticias</a></li>
        <li><a href="#social" data-transition="flip"><div><img src="img/social.png" class="ui-li-icon"></div>Social</a></li>
      </ul>
    </div>
  </div>
</div>
<!--BUSCADOR-->
<div data-role="page" id="buscar" style="background-image: url('img/fondo.png'); background-attachment: fixed; background-repeat: repeat;" data-theme="a">
  <div data-role="header" data-position="fixed">
   <a data-direction="reverse" href="#peliculas" data-role="button" data-icon="back" data-iconpos="notext" data-transition="flip">Button</a>
    <h1>Buscar</h1>
    <a data-direction="reverse" href="#home" data-role="button" data-icon="home" data-iconpos="notext" data-transition="flip">Button</a>
  </div>
  <div data-role="content">
  	<ul data-role="listview" data-filter="true" class="ui-listview">
  	  <li><a href="#pelicula1">Todo para un bebé</a></li>
	  <li><a href="#">La venganza del jinete</a></li>
      <li><a href="#">Suegra al ataque</a></li>
      <li><a href="#">Del crepúsculo al amanecer - ep 4</a></li>
      <li><a href="#">Tenemos que hablar de kevin</a></li>
      <li><a href="#">Los hombres del soul</a></li>
      <li><a href="#">Samuri x: el fin de la leyenda</a></li>
			</ul>
  	
  </div>
  <div data-role="footer" data-position="fixed">
    <div data-role="navbar">
      <ul>
        <li><a href="peliculas.php" data-transition="flip"><div><img src="img/movie.png" class="ui-li-icon"></div>Trailers</a></li>
        <li><a href="index.html#calendario" data-transition="flip"><div><img src="img/calendario.png" class="ui-li-icon"></div>Calendario</a></li>
        <li><a href="index.html#top" data-transition="flip"><div><img src="img/estrella.png" class="ui-li-icon"></div>Top 8</a></li>
        <li><a href="index.html#noticias" data-transition="flip"><div><img src="img/new.png" class="ui-li-icon"></div>Noticias</a></li>
        <li><a href="index.html#social" data-transition="flip"><div><img src="img/social.png" class="ui-li-icon"></div>Social</a></li>
      </ul>
    
    </div>
  </div>
</div>

<!--Género-->
<div data-role="page" id="genero" style="background-image: url('img/fondo.png'); background-attachment: fixed; background-repeat: repeat;" data-theme="b">
  <div data-role="header" data-position="fixed">
   <a data-direction="reverse" data-role="button" href="#peliculas" data-icon="back" data-iconpos="notext" data-transition="flip">Button</a>
    <h1>Buscar</h1>
     <a data-direction="reverse" href="#home" data-role="button" data-icon="home" data-iconpos="notext" data-transition="flip">Button</a>
  </div>
  <div data-role="content">
  	<ul data-role="listview" class="ui-listview">
      <li><a href="#">Acción</a></li>
      <li><a href="#">Drama</a></li>
      <li><a href="#">Familiar</a></li>
	  <li><a href="#">Suspenso</a></li>
      <li><a href="#">Terror</a></li>
			</ul>
  	
  </div>
  <div data-role="footer" data-position="fixed">
    <div data-role="navbar">
      <ul>
        <li><a href="#peliculas" data-transition="flip"><div><img src="img/movie.png" class="ui-li-icon"></div>Trailers</a></li>
        <li><a href="#calendario" data-transition="flip"><div><img src="img/calendario.png" class="ui-li-icon"></div>Calendario</a></li>
        <li><a href="#top" data-transition="flip"><div><img src="img/estrella.png" class="ui-li-icon"></div>Top 8</a></li>
        <li><a href="#noticias" data-transition="flip"><div><img src="img/new.png" class="ui-li-icon"></div>Noticias</a></li>
        <li><a href="#social" data-transition="flip"><div><img src="img/social.png" class="ui-li-icon"></div>Social</a></li>
      </ul>
    
    </div>
  </div>
</div>


</body>
</html>