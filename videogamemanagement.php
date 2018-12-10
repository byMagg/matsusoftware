<?php
    require 'conexiondb/conexion.php';
    require 'controller/generalfunction.php';
    require 'controller/querysfunction.php';
    session_start();
    timeLogOut();
    security(0);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Titulo -->
        <title>Gestion de videojuego - MatsuSoftware</title>
        <?php require "views/head.php"; ?>
        <link href="css/videogamemanagement.css" type="text/css" rel="stylesheet">
        <script src="controller/jquery.js"></script>
        <script src="videogamemanagement/addgame.js"></script>
    </head>
    <body>
        <!--HEADER-->
        <?php require "views/header.php"; ?>   
        <!--CONTENT-->
        <div class="content">
            <div id="content" class="content-inside">
                <div id="cabecera">
                    <a class="nohover" href="admindash.php"><img id="volver"src="images/volver.png" alt="volver"></a>
                    <img id="icon2" src="images/games.png" alt="videojuego">
                    <h1>GESTIÓN DE VIDEOJUEGOS</h1>
                </div>
                <div id="cuadricula">
                    <div id="tabla">
                        <h1>Lista de videojuegos:</h1>
                        <table>
                            <tr>
                                <th id="id">#</th>
                                <th class="title">Título</th>
                                <th class="title">Precio</th>
                                <th></th>
                                <th></th>
                            </tr>

                            <?php
                                $resultado = getProduct($mysqli);
                                while($product = $resultado->fetch_assoc()){
                                    if($product['category'] == 'game'){
                                        echo "<tr>
                                            <td>".$product['idProduct']."</td>
                                            <td>".$product['title']."</td>
                                            <td>".$product['price']."</td>
                                            <td><a class='icono nohover' href=''><img src='images/lapiz.png' alt='Modificar'></a></td>
                                            <td><a class='icono nohover' href=''><img class='delete' src='images/eliminar.png' alt='Eliminar'></a></td>
                                            </tr>";
                                    }
                                }
                            ?> 
                        </table>
                    </div> 
                    
                    <div id="lineavertical"></div>

                    <div class="error general">
                        <span>Ha ocurrido un error, inténtalo de nuevo mas tarde.</span>
                    </div>
                    
                    <div class="success">
                        <span>Videojuego registrado correctamente.</span>
                    </div>

                    <div id="form">
                        <h1>Añadir videojuego:</h1>
                        <form id="videogamemanagement" action="">
                            <div class="halfleft">
                                <label>Título:</label>
                                <input type= "text" name="titulo" maxlength="45" title="El título debe de contener enter 0 y 45 carácteres." placeholder=" Introduce el título" required/>
                                <label>Precio:</label>
                                <input type= "text" name="price" placeholder=" Introduce el precio" pattern="[0-9.]{0,10}" required/>
                                <label>Descripción:</label>
                                <textarea type="msg" name="description" maxlength="500" title="El texto debe de contener enter 0 y 500 carácteres." placeholder=" Introduce la descripcion" required></textarea>
                                <label>Link de compra:</label>
                                <input type= "text" name="linkpurchase" maxlength="100" title="El link debe de contener enter 0 y 100 carácteres." placeholder=" Introduce el link" required/>
                            </div>
                            <div class="halfright">
                                <label>Link de la foto:</label>
                                <input type= "text" name="linkphoto" maxlength="100" title="El link debe de contener enter 0 y 100 carácteres." placeholder=" Introduce el link" required/>
                                <label>Link del trailer:</label>
                                <input type= "text" name="linktrailer" maxlength="100" title="El link debe de contener enter 0 y 100 carácteres." placeholder=" Introduce el link" required/>
                                <label>Requisitos del sistema:</label>
                                <textarea type="msg" name="requisito" maxlength="500" title="El texto debe de contener enter 0 y 500 carácteres." placeholder=" Introduce los requisitos" required></textarea>
                                <button class="button" type="submit">Añadir</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>  
        <!-- FOOTER -->
        <?php require "views/footer.php"; ?>
    </body>
    <?php $mysqli->close(); ?>
</html>