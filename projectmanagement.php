<?php
    require 'conexiondb/conexion.php';
    require 'controller/generalfunction.php';
    session_start();
    timeLogOut();
    security(0);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Titulo -->
        <title>Gestion de proyectos - MatsuSoftware</title>
        <?php require "views/head.php"; ?>
        <link href="css/projectmanagement.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <!--HEADER-->
        <?php require "views/header.php"; ?>   
        <!--CONTENT-->
        <div class="content">
            <div id="content" class="content-inside">
                <div id="cabecera">
                    <a class="nohover" href="admindash.php"><img id="volver"src="images/volver.png" alt="volver"></a>
                        <img id="icon2" src="images/stats.png" alt="">
                        <h1>GESTIÓN DE PROYECTOS</h1>
                </div>
                <div id="cuadricula">
                    <div id="tabla">
                        <h1>Lista de proyectos:</h1>
                        <table>
                            <tr>
                                <th id="id">#</th>
                                <th id="title">Titulo</th>
                                <th></th>
                            </tr>

                            <tr>
                                <td>1</th>
                                <td>lorem ipsum</td>
                                <td><img class="delete" src="images/eliminar.png" alt="Eliminar"></td>
                            </tr>

                            <tr>
                                <td>2</th>
                                <td>lorem ipsum</td>
                                <td><img class="delete" src="images/eliminar.png" alt="Eliminar"></td>
                            </tr>

                            <tr>
                                <td>3</th>
                                <td>lorem ipsum</td>
                                <td><img class="delete" src="images/eliminar.png" alt="Eliminar"></td>
                            </tr>

                            <tr>
                                <td>4</th>
                                <td>lorem ipsum</td>
                                <td><img class="delete" src="images/eliminar.png" alt="Eliminar"></td>
                            </tr>

                            <tr>
                                <td>5</th>
                                <td>lorem ipsum</td>
                                <td><img class="delete" src="images/eliminar.png" alt="Eliminar"></td>
                            </tr>

                            <tr>
                                <td>6</th>
                                <td>lorem ipsum</td>
                                <td><img class="delete" src="images/eliminar.png" alt="Eliminar"></td>
                            </tr>

                            <tr>
                                <td>7</th>
                                <td>lorem ipsum</td>
                                <td><img class="delete" src="images/eliminar.png" alt="Eliminar"></td>
                            </tr>

                            <tr>
                                <td>8</th>
                                <td>lorem ipsum</td>
                                <td><img class="delete" src="images/eliminar.png" alt="Eliminar"></td>
                            </tr>
                        </table>
                    </div> 
                    
                    <div id="lineavertical"></div>

                    <div id="form">
                        <h1>Añadir proyecto:</h1>
                        <form id="newslettermanagement" action="">
                            <label>Título*:</label>
                            <input type="text" name="tittle" placeholder=" Título" required/>
                            <label>Link del videojuego*:</label>
                            <input type="text" name="link" placeholder=" Link" required/>
                            <label>Descripción*:</label>
                            <textarea type="msg" name="msg" placeholder=" Introduce una descripcion" required></textarea>
                            <button class="button" type="submit">Añadir</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>  
        <!-- FOOTER -->
        <?php require "views/footer.php"; ?>
    </body>
</html>