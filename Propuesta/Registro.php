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

                <form action = "rgtRegistro.php" method = "post" name="RegistroJugadores">
                   <div class="row">
                      <div class="col-sm-12">
                         <input class="contactus" placeholder="Nombre" type="text" name="txtNombreJ">
                      </div>
                      <div class="col-sm-12">
                         <input class="contactus" placeholder="Edad" type="text" name="txtEdadJ">
                      </div>
                      <div class="col-sm-12">
                         <input class="contactus" placeholder="Estatura (m)" type="text" name="txtEstaturaJ">
                      </div>
                      <div class="col-sm-12">
                        <input class="contactus" placeholder="Peso (Kg)" type="text" name="txtPesoJ">
                     </div>
                      <div class="col-sm-12">
                         <button class="send">Enviar</button>
                      </div>
                   </div>
                </form>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- end Registro jugadores -->


 <!-- Registro Manager -->
<div id="contact" class="contact">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h3>Registro Manager</h3>
            </div>
         </div>
      </div>
      <div class="row">

         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 offset-md-3">
            <div class="contact">

               <form action = "rgtRegistroM.php" method = "post" name="RegistroManagerM">
                  <div class="row">
                     <div class="col-sm-12">
                        <input class="contactus" placeholder="Nombre" type="text" name="txtNombreM">
                     </div>
                     <div class="col-sm-12">
                        <input class="contactus" placeholder="Edad" type="text" name="txtEdadM">
                     </div>
                     <div class="col-sm-12">
                        <input class="contactus" placeholder="Estudiaos" type="text" name="txtEstudiosM">
                     </div>
                    <div class="col-sm-12">
                       <input class="contactus" placeholder="Años de Experiencia" type="text" name="txtExperienciaM">
                    </div>
                     <div class="col-sm-12">
                        <button class="send">Enviar</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- end Registro manager -->
















<!-- Fin del contenido -->

<?php 
include_once('Footer.php')
?>