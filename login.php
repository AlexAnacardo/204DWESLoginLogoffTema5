<?php
    /*
     * @version 2024/11/25
     * @author Alex Asensio Sanchez                          
     */

    if(isset($_REQUEST['volver'])){
       header('location:indexLoginLogoffTema5.php');
       exit;
    }
    
    if(isset($_REQUEST['login'])){
        require_once('config/confDBPDO.php');               
            try {
            $miDB = new PDO(CONEXION, USUARIO, CONTRASEÑA);

            $sql = $miDB->prepare("select T01_Password from T01_Usuario where T01_CodUsuario= ? ");
            $sql->execute([$_REQUEST['nombre']]);
            $usuario = $sql->fetchObject();
            if (isset($usuario->T01_Password) && hash('sha256', $_REQUEST['nombre'] . $_REQUEST['passwd']) == $usuario->T01_Password) {
                $sql2 = $miDB->prepare("update T01_Usuario set T01_NumConexiones=T01_NumConexiones+1, T01_FechaHoraUltimaConexion=now() where T01_CodUsuario= ? ");
                $sql2->execute([$_REQUEST['nombre']]);
                
                header('location:programa.php');
            }
            else{
                header('location:login.php');
            }
        } catch (PDOException $ex) {
            echo($ex->getMessage());
        } finally {
            unset($miDB);
        }
    
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
        <link rel="stylesheet" href="webroot/css/login.css">
        <title>Alex Asensio Sanchez</title>
     </head>
     <body>
        <header>
           <h1>Login</h1>           
           <form method='post'>
              <input type="submit" name='volver' id='volver' value='Volver'>
           </form>
        </header>                                      
        <main>
            <form method="post" novalidate>                
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre">
                <label for="passwd">Contraseña</label>
                <input type="password" name="passwd" id="passwd">
                <input type="submit" id="login" name="login" value="Login">
            </form>
            <?php
                
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
