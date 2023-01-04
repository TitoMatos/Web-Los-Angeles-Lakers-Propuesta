<?php
include_once('Header.php');
?>

<!-- Inicio del contenido -->








<!-- Registro Jugadores -->
<div id="contact" class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h3>Registro jugadores</h3>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 offset-md-3">
                <div class="contact">





                    <?php
                    if ($_POST) {

                        //Recibimsos los datos´

                        $Nombre = $_POST['txtNombreJ'];
                        $Edad = $_POST['txtEdadJ'];
                        $Estatura = $_POST['txtEstaturaJ'];
                        $Peso = $_POST['txtPesoJ'];

                        //Validamos los dato

                        if (empty($Nombre)) {
                            echo '<h5>Debe introducir el nombre del jugador.</h5>';
                        }

                        if (empty($Edad)) {
                            echo '<h5>Debe introducir la edad del jugador.</h5>';
                        }

                        if (empty($Estatura)) {
                            echo '<h5>Debe introducir la estaruta del jugador.</h5>';
                        }

                        if (empty($Peso)) {
                            echo '<h5>Debe estruducir el peso del jugador.</h5>';
                        }

                        if ((!empty($Nombre)) && (!empty($Edad)) && (!empty($Estatura)) && (!empty($Peso))) {

                            //Nos conectamos al servidor

                            $Servidor = "localhost";
                            $Usuario = "root";
                            $Clave = "";
                            $DB = "DB_NBA_20186175";

                            $cont = mysqli_connect($Servidor, $Usuario, $Clave, $DB)  or die('Error con la base de datos');

                            // Preparamos la sentencia SQL para guardar

                            $guardar = "
                                 insert into jugador (nombre, edad, estatura, peso)
                                 value ('$Nombre', '$Edad', '$Estatura', '$Peso')
                                ";

                            if (mysqli_query($cont, $guardar)) {

                                echo '<h5>Registro de jugador exitoso</h5>';
                                echo '<a href="Registro.php">Agregar otro registro</a>';
                            } else {

                                echo '<h5>Ha fallado el registro del jugador</h5>';
                            }
                        }
                    }
                    ?>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- end Registro jugadores -->




<!-- Fin del contenido -->

<?php
include_once('Footer.php')
?>