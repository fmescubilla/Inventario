<?php require "./incluir/session_start.php"; ?>

<!DOCTYPE html>
<html lang="es">
<head>
   <?php include "./incluir/head.php"; ?>
</head>
<body>
   
   <?php

      //para ver quer vista vamos a cargar

      // va a preguntar si existe o si esta vacia
      if (!isset($_GET['vista']) || $_GET['vista'] =="") {
        $_GET['vista']="login"; //si existe le va asignar el nombre "login"
        }
         //si existe este archivo                     Y el valor es distinto a login   Y dstinto a 404
        if (is_file("./vistas/".$_GET['vista'].".php") && $_GET['vista'] != "login" && $_GET['vista'] != "404") {
            //lo que va hacer es mostrrar lo siguiente:

             include "./incluir/barradenavegacion.php"; //1ro: barra d nav

             include "./vistas/".$_GET['vista'].".php"; //si existe lo que pedimos en el if, lo vamos a cargar  aca. //2do: la vista

             include "./incluir/script.php"; //y por ultimo: el archivo que ya sabemos lo que tiene

        }else { //aca se va a mostrar la pag 404:

            //vamos a preg si la variable d tipo vista es igual a login
            if($_GET['vista'] =="login"){
                include"./vistas/login.php"; // si da bien muestra lo d include
            }else{
                include "./vistas/404.php"; //si da error muestra el 404
            }
            
        } 
        
       
    ?>


</body>
</html>