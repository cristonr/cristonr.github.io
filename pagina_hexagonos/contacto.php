<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/index.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
    
    <title>Cristian Reven</title>
</head>


<body>
    
    <div class="main">
        <div class="main-container">

            <div class="menu">
                <div class="hex1"><a href="index2.php? id=hex1#index2"><h5>Sobre mi</h5></a></div>
                <div class="hex2"><a href="index2.php? id=hex2#index2"><h5>Skills</h5></a></div>
                <div class="hex3"><a href="index.php"><img src="./img/crist6M.jpg" alt=""></a></div>
                <div class="hex4"><a href="index2.php? id=hex4#index2"><h5>Trabajos</h5></a></div>
                <div class="hex5"><a href="contacto.php"><h5>Contacto</h5></a></div>
            </div>
            <?php
                function codigo_captcha( ) {
            	$pattern = "0123456789abcdefghijklmnopqrstuvwxyz!#$%&?";
            	$codigo ='';
            	for ($i=0; $i < 5; $i++) { 
            	$codigo .= $pattern[rand(0, 41)];
            }
            	return $codigo;
            }

            $_SESSION['captcha'] = codigo_captcha();
            ?>
     
            <div class="info">
            <h3>Deje su consulta!</h3>
             <br>
             <div class='form-contacto'>
             <form action="cargar_form.php" method='POST'>
             <label for="">Ingrese su nombre: </label>
             <input type="text" name='nombre' required>
             <label for="">Ingrese su correo electrónico: </label>
             <input type="email" name='correo' required>
             <label for="">Escriba su consulta: </label>
             <textarea name="consulta" cols="30" rows="5"></textarea>
             <img class='img' src="captcha.php">
             <input type="text" id="cpt-inp" name="codigo_captcha" maxlength="5">
             <input id="enviar" type="submit" value="Enviar consulta">
             <?php
	            if(isset($_GET['ok'])){
	            echo '<h4>Consulta enviada con éxito!!</h4>';
	            }
	            if(isset($_GET['error'])){
	            	echo '<h4>Captcha incorrecto, ingrese los datos nuevamente!!</h4>';
	            	}
	            ?>
             </form>
             </div>
                         
            </div>
            
        </div>
        <?php include('footer.php');?>
       
     
   
   </div>
    
    <script src="https://kit.fontawesome.com/7aa36192fa.js" crossorigin="anonymous"></script>
     
</body>

</html>