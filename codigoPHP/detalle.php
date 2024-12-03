<?php
    /*
     * @version 2024/11/26
     * @author Alex Asensio Sanchez                          
     */
     
    session_start();

    if(!isset($_SESSION["usuarioDAW204LoginLogoffTema5"])){
        header('location:login.php');
        exit;
    }
    
    if(isset($_REQUEST['volver'])){
       header('location:programa.php');
       exit;
    }
?>
<html id="detalle">
     <head>
        <meta charset="UTF-8">               
        <meta name="author" content="Alex Asensio Sanchez">
        <meta name="application-name" content="indice">
        <meta name="description" content="Indice tema 3">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" href="../webroot/css/loginLogoffTema5.css">       
        <title>Alex Asensio Sanchez</title>
     </head>
     <body>
         <header>
            <h1>Detalle</h1>
            <form method='post'>
               <input type="submit" name='volver' id='volver' value='Volver'>               
            </form>
         </header>  
        <main>
            <?php
                //Funcion que muestra el nombre y el contenido de una variable superglobal en una tabla
                function mostrarSuperglobales($nombre, $global){        
                    if (!empty($global)) {                            
                        echo('<p>Variable $_' . $nombre . '</p>');
                            echo '<table>';
                            foreach ($global as $key => $value) {
                                echo "<tr><td>$key</td><td>$value</td></tr>";
                            }
                            echo '</table>';
                        }                                                
                    else{
                        echo('<p>La variable $_'.$nombre.' esta vacia</p>');
                    }
                }                 
                //Si la variable $_SESSION no esta definida, no se intentara mostrar su contenido
                echo('<p>Variable $_SESSION</p>');
                echo '<table>';
                foreach($_SESSION as $clave => $valor){
                    echo("<tr><td>".$clave."</td>");
                    echo("<td>");
                    var_dump($_SESSION[$clave]);
                    echo("</td></tr>");
                }
                echo '</table>';                
                mostrarSuperglobales('COOKIE', $_COOKIE);
                mostrarSuperglobales('SERVER', $_SERVER); 
            ?>             
        </main>
        <footer>
            <p><a href="../../index.html">Alex Asensio Sanchez</a></p>
            <p><a href="../../204DWESProyectoDWES/indexProyectoDWES.php">DWES</a></p>
            <p><a target="blank" href="https://github.com/AlexAnacardo/204DWESLoginLogoffTema5">Repositorio del proyecto</a></p>
            <p><a target="blank" href="https://www.amazon.es">Pagina imitada</a></p>
        </footer>
     </body>
 </html>
