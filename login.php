<?php
    if(isset($_REQUEST['volver'])){
       header('location:indexLoginLogoffTema5.php');
       exit;
    }
?>

<html>
     <head>
        <meta charset="UTF-8">               
        <meta name="author" content="Alex Asensio Sanchez">
        <meta name="application-name" content="indice">
        <meta name="description" content="Indice tema 3">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" href="webroot/css/indexProyectoTema5.css">
        <title>Alex Asensio Sanchez</title>
     </head>
     <body>
         <header>
            <h1>Login</h1>             
         </header>                                      
        
        <form method='post'>
            <label for='login'>Volver</label>
            <input type="submit" name='volver' id='volver' value='Volver'>
        </form>

        <footer>
            <p><a href="../index.html">Alex Asensio Sanchez</a></p>
            <p><a href="../204DWESProyectoDWES/indexProyectoDWES.php">DWES</a></p>
            <p><a target="blank" href="https://github.com/AlexAnacardo/204DWESLoginLogoffTema5">Repositorio del proyecto</a></p>
            <p><a target="blank" href="https://www.amazon.es">Pagina imitada</a></p>
        </footer>
     </body>
 </html>
