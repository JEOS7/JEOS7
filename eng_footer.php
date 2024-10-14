<?php $siteroot = '/' ?>


<?php
echo 'This is a simple php popup window.';
?>>



 <?php
echo '<script type="text/javascript">
</script>'; 
?> 














<section>
  <div class="bg-trama-lema">
    <div class="container">
      <div class="row mb0">
        <div class="text-center">
          <h4 class="md bold white pa5 athelas f1"><i class="fa fa-clock-o" aria-hidden="true"></i>
  Opening times:  Offices: 08:00 to 17:00 and Warehouse: 08:00 to 16:30.
			  <h4 class="md bold white pa5 athelas f1">
              For any questions, suggestions, requests or complaints regarding our services, please contact us at: buzon@lema.com.mx
   </h4>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- FOOTER -->
<footer class="bg-black-10">
  <div class="container">
    <div class="row pa5">
      <div class="col-md-6">
        <div itemscope itemtype="http://schema.org/LocalBusiness">
          <p class="pull-right hidden"><a href="#"><i class="fa fa-caret-up"></i> Arriba</a></p>
     <p class="b">&copy; ©2017 NEGOCIACIONES INTERNACIONALES LEMA, S.A. DE C.V. All rigths reserved &middot; </p>
      <p> <a href="<?php echo $siteroot; ?>includes/aviso_de_privacidad.php">Aviso de privacidad</a></p>
       </div>
     </div>
     <div class="col-md-6">
       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10793.915965228363!2d-99.21358991034077!3d19.66275551017516!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x818255a4119075e5!2sNegociaciones+Internaci%C3%B3nales+Lema+S.A.+de+C.V.!5e0!3m2!1sen!2smx!4v1510759418460" width="400" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
     </div>
  </div>
</footer>

   <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="<?php echo $siteroot; ?>js/jquery.js"></script>
      <!-- <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>-->
      <script src="<?php echo $siteroot; ?>js/bootstrap.min.js"></script>
      <script src="<?php echo $siteroot; ?>js/tether.js"></script>
      <script src="<?php echo $siteroot; ?>js/app.js"></script>
      <script src="<?php echo $siteroot; ?>js/devrama.js" ></script>
      <script src="<?php echo $siteroot; ?>js/jquery.cloud9carousel.js"></script>
      <script src="https://use.fontawesome.com/9bcf54a48b.js"></script>
      <script type="text/javascript">
        $(document).ready(function(){
                $('.example-animation').DrSlider(); //Yes! that's it!
              });
            </script>

            <script src="js/jquery.reflection.js" ></script>

            <script>
              $(document).ready(function() {
                $('#IDcicle').carousel({
                  interval: 10000
                })
              });
            </script>

            <script>
              $(function() {
                var showcase = $("#showcase"), title = $('#item-title')

                showcase.Cloud9Carousel( {
                  yOrigin: 42,
                  yRadius: 48,
                  autoPlay: 1,
                  bringToFront: true,
                  onRendered: rendered,
                  onLoaded: function() {
                    showcase.css( 'visibility', 'visible' )
                    showcase.css( 'display', 'none' )
                    showcase.fadeIn( 2000 )
                  }
                } )

                function rendered( carousel ) {
                  title.text( carousel.nearestItem().element.alt )

        // Fade in based on proximity of the item
        var c = Math.cos((carousel.floatIndex() % 1) * 2 * Math.PI)
        title.css('opacity', 0.5 + (0.5 * c))
      }
      
    })
  </script>


</body>
</html>
