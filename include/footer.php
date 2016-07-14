<!--footer-copyright -->
  <section id="footer-lastup">
        <div class="container">
                  <div class="row">
                            <div class="col-md-9 col-sm-12    footer-bottom">
                                   <p>Copyright 2016 Orbit Australia Group Pty Ltd Clearning Company.</p>
                            </div>
                            <div class="col-md-3 col-sm-12 footer-bottom">
                                    <p class="pull-right">design : <b>Inbox IT Solutions</b></p>
                            </div>
                  </div>
        </div>
  </section>
<!--footer-copyright -->

 </body>
 </html>
 <!-- javascript link -->
 <script src="assets/js/jquery.js"></script>
 <script src="assets/btsp-source/dist/js/bootstrap.min.js"></script>
 <script src="assets/js/custom.js"></script>
 <script src="assets/js/jquery.bxslider.min.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>

    <script>
          $(document).ready(function(){
                  $('.banner').bxSlider({
                    easing: 'swing',
                    speed: 5000,
                    auto:true
                  });
                });
    </script>
 <script type="text/javascript">
   $('document').ready(function(){
              function setImageHeight(){
                var bannerWidth = $('.banner').width();
                var imageHeight = 470 * bannerWidth/1903;
                $('.banner ul li').css('height', imageHeight.toString());
      }
      setImageHeight();
             $(window).resize(function(){
          setImageHeight();
        });

});
 </script>