<?php
    /*
     * @version 2024/11/27
     * @author Alex Asensio Sanchez                          
     */
     
    session_start();
    
    if(!isset($_SESSION["usuarioDAW204LoginLogoffTema5"])){
        header('location:login.php');
        exit;
    }
    
    if(isset($_REQUEST['detalle'])){
       header('location:detalle.php');
       exit;
    }
    
    if(isset($_REQUEST['logoff'])){
       unset($_SESSION["usuarioDAW204LoginLogoffTema5"]);
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
            <?php  
                //Extraemos el usuario de la sesion y lo introducimos en una variable
                $oUsuarioEnCurso=$_SESSION["usuarioDAW204LoginLogoffTema5"];
                switch ($_COOKIE['Idioma']){
                    case 'es':
                        if($oUsuarioEnCurso->T01_NumConexiones>0){                   
                        ?>
                            <p>Bienvenido <?php echo($oUsuarioEnCurso->T01_DescUsuario) ?>, esta es la  <?php echo $oUsuarioEnCurso->T01_NumConexiones+1 ?> vez que te conectas;
                            usted se conectó por ultima vez el: <?php echo date_format(new DateTime($oUsuarioEnCurso->T01_FechaHoraUltimaConexion), "d/m/Y H:i:s") ?></p>
                        <?php
                        }
                        else{
                        ?>
                            <p>Bienvenido <?php echo($oUsuarioEnCurso->T01_DescUsuario) ?>, es la primera vez que te conectas</p>
                        <?php
                        }
                    break;
                    
                    case 'en':
                        if($oUsuarioEnCurso->T01_NumConexiones>0){                   
                        ?>
                            <p>Welcome <?php echo($oUsuarioEnCurso->T01_DescUsuario) ?>, this is the  <?php echo $oUsuarioEnCurso->T01_NumConexiones+1 ?> time you connect;
                            your last connection was the: <?php echo date_format(new DateTime($oUsuarioEnCurso->T01_FechaHoraUltimaConexion), "d/m/Y H:i:s") ?></p>
                        <?php
                        }
                        else{
                        ?>
                            <p>Bienvenido <?php echo($oUsuarioEnCurso->T01_DescUsuario) ?>, es la primera vez que te conectas</p>
                        <?php
                        }
                    break;
                }
                
            ?>
        </main>
        <footer>
            <p><a href="../index.html">Alex Asensio Sanchez</a></p>
            <p><a href="../204DWESProyectoDWES/indexProyectoDWES.php">DWES</a></p>
            <p><a target="blank" href="https://github.com/AlexAnacardo/204DWESLoginLogoffTema5">Repositorio del proyecto</a></p>
            <p><a target="blank" href="https://www.amazon.es">Pagina imitada</a></p>
        </footer>
     </body>
 </html>
