<?php
    /*
     * @version 2024/11/25
     * @author Alex Asensio Sanchez                          
     */
     
    session_start();
    
    if(isset($_REQUEST['detalle'])){
       header('location:detalle.php');
       exit;
    }
    
    if(isset($_REQUEST['logoff'])){
       unset($_SESSION["usuarioDAW204LoginLogoffTema5"]);
       header('location:login.php');
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
        <link rel="stylesheet" href="webroot/css/programa.css">       
        <title>Alex Asensio Sanchez</title>
     </head>
     <body>
         <header>
            <h1>Programa</h1>
            <form method='post'>
               <input type="submit" name='detalle' id='detalle' value='Detalle'>
               <input type="submit" name='logoff' id='logoff' value='Cerrar sesion'>
            </form>
         </header>  
        <main>
             
        </main>
        <footer>
            <p><a href="../index.html">Alex Asensio Sanchez</a></p>
            <p><a href="../204DWESProyectoDWES/indexProyectoDWES.php">DWES</a></p>
            <p><a target="blank" href="https://github.com/AlexAnacardo/204DWESLoginLogoffTema5">Repositorio del proyecto</a></p>
            <p><a target="blank" href="https://www.amazon.es">Pagina imitada</a></p>
        </footer>
     </body>
 </html>
