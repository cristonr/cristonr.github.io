<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> 
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <meta name="description" content="web developer, desarrollo web, php, html, css, javascript">
    <meta name="author" content="Cristian Reven">
    <title>Cristian Reven</title>
</head>


<body>
    <div class="container">
    <div class="main">
        <div class="main-container">

            <div class="menu">
                <div class="hex1"><a href="index2.php? id=hex1#index2"><h5>Sobre mí</h5></a></div>
                <div class="hex2"><a href="index2.php? id=hex2#index2"><h5>Skills</h5></a></div>
                <div class="hex3"><a href="index.php"><img src="./img/crist6M.jpg" alt="foto de portada"></a></div>
                <div class="hex4"><a href="index2.php? id=hex4#index2"><h5>Trabajos</h5></a></div>
                <div class="hex5"><a href="contacto.php"><h5>Contacto</h5></a></div>
            </div>

     <?php 

     
 if (isset($_GET['id'])) {
     
               
     switch ($_GET['id']) {
         case 'hex1':
             $titulo='Sobre mí';
             $imagen='cristPilca.jpeg';
             $descripcion='<p>Vivo en San Carlos de Bariloche, Patagonia Argentina. En mis tiempos libres me gusta realizar actividades como trekking, salidas en bicicleta o ir a algún lago o río a disfrutar de la naturaleza. También tengo un gran interés por los idiomas. En este momento estudio alemán, inglés y esloveno.</p><p>A lo largo de mi carrera laboral, trabajé en muchas y diferentes áreas. Me desempeñé como mozo en un hotel del centro de esquí en el cerro Catedral, trabajé en carpintería con mi padre, me recibí de perito constructor y edifiqué casas por la zona. Más tarde, me dediqué a realizar mantenimiento y reformas en un establecimiento ganadero, lo que me permitió viajar y conocer un poco más del país. Finalmente y hasta la actualidad, me desempeño en el Instituto Nacional de Tecnología Agropecuaria (INTA) realizando mantenimiento general. </p><p>Hoy estoy dando mis primeros pasos en el desarrollo Web, que es algo que desde hace tiempo viene captando mi interés, y a lo cual quiero dedicarme. En particular disfruto mucho de la dinámica de sus procesos y el aprendizaje continuo, que permite enfrentar los diferentes retos que se presentan en su cotidianidad.</p>';
             
             break;
         case 'hex2':
             $titulo='Mis Skills';
            $imagen='skills.jpg';
            $descripcion='<p>Desde hace un año me estoy formando como desarrollador web, realizando cursos en diversas plataformas e institutos. Adquirí habilidades en diferentes lenguajes tanto para el desarrollo Front-end y como para el Back-end. Disfruto mucho del proceso de aprendizaje y continuamente estoy en la búsqueda de nuevas aptitudes para mejorar mi formación. Tengo particular interés en enfocar mi carrera al desarrollo de páginas web, ya que en este área cada proyecto presenta nuevos desafíos y diversas formas de resolverlos.</p><ul class="lista"><li><img src="./img/i-html.png"> HTML </li><li><img src="./img/i-css.png"> CSS</li><li><img src="./img/i-js.png"> JS</li><li><img src="./img/i-php.png"> PHP</li><li><img src="./img/i-mysql.png"> MySQL</li></ul>';
            
            break;
         case 'hex3':
            $titulo='Home';
            $imagen='lago.jpg';
            $descripcion='Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente';
            
             break;                
             case 'hex4':
            $titulo='Mis Trabajos';
            $imagen='compu.jpg';
            $descripcion=' <ul class="lista2"><li><div class="cards">
            <div>
            <div class="card1"><a href="./trabajos/paginaCris/index.html" target="blank"><img src="./img/paginaCris.png" alt="imagen de pagina ejemplo 1"></a></div>
            <div><p>Esta es una página personal Front-end, desarrollada responsive con html y css. Tiene una barra de navegación vertical que permite navegar fácilmente por las diferentes secciones de la misma.</p></div>
        </div>
        </li>
        <li>
        <div class="cards">
            <div>
            <div class="card2"><a href="./trabajos/banda/index.html" target="blank"><img src="./img/banda.png" alt="imagen de pagina ejemplo 1"></a></div>
            <div><p>Esta es una página de ejemplo de una Banda de Rock Eslovena. La misma esta hecha con HTML Y CSS, sin Back-end. Se muestra información de la banda, sus discos y se pueden escuchar algunos de sus temas </p></div>
            </div>
        </div>
        </div></ul>';
                
            break;                
        case 'hex5':
            $titulo='contacto';
            $imagen='perro.jpg';
            $descripcion='Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente';
   
            break;                
     }
     ?>
     <?php }?>
            <div class="info">
                <h1><?php echo $titulo;?></h1>
                <img class='imagen' src="img/<?php echo $imagen;?>">
                <p><?php echo $descripcion;?></p>
                
               </div>
        </div>
       
       
     <?php include('footer.php');?>
   
   </div>
    <script src="https://kit.fontawesome.com/7aa36192fa.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
    </div>
    </body>

</html>