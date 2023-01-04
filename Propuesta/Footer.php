




   <!--  footer -->
   <footr>
      <div class="footer">
         <div class="container">
            <div class="row">
               <div class="col-lg-2 col-md-6 col-sm-12 width">
                  <div class="address">
                     <h3>Dirección</h3>
                     <i><img src="icon/3.png"></i>
                  </div>
               </div>
               <div class="col-lg-2 col-md-6 col-sm-12 width">
                  <div class="address">
                     <h3>Menú</h3>
                     <i><img src="icon/2.png"></i>
                  </div>
               </div>
               <div class="col-lg-2 col-md-6 col-sm-12 width">
                  <div class="address">
                     <h3>Enlaces</h3>
                     <i><img src="icon/1.png"></i>
                  </div>
               </div>
               <div class="col-lg-2 col-md-6 col-sm-12 width">
                  <div class="address">
                     <h3>Redes </h3>
                     <ul class="contant_icon">
                        <li><img src="icon/fb.png" alt="icon" /></li>
                        <li><img src="icon/tw.png" alt="icon" /></li>
                        <li><img src="icon/lin(2).png" alt="icon" /></li>
                        <li><img src="icon/instagram.png" alt="icon" /></li>
                     </ul>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 width">
                  <div class="address">
                     <h3>Novedades </h3>
                     <input class="form-control" placeholder="Ingresa tu correo" type="type" name="Enter your email">
                     <button class="submit-btn">Subscribete</button>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright">
            <p>Web rediseñada por Tito Matos</p>
         </div>
      </div>
   </footr>
   <!-- end footer -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   <script src="js/custom.js"></script>
   <script>
      $(document).ready(function () {
         $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
         });

         $(".zoom").hover(function () {

            $(this).addClass('transition');
         }, function () {

            $(this).removeClass('transition');
         });
      });

   </script>
</body>

</html>