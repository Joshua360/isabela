
<footer id="footer" class="footer-1">
<div class="main-footer widgets-dark typo-light">
<div class="container">
<div class="row">
  
<div class="col-xs-12 col-sm-6 col-md-3">
<div class="widget subscribe no-box">
<h5 class="widget-title"><a href="index.php">APEX DIGITAL</a><span></span></h5>
<p>Apex Digital is a Graphics design, digital Marketing and web development company.</p>
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-3">
<div class="widget no-box">
<h5 class="widget-title">Important Links<span></span></h5>
<ul class="thumbnail-widget">
   <li>
         <div class="thumb-content"><a href="#.">About Us</a></div>	
   </li>
   <li>
         <div class="thumb-content"><a href="services.php">What We Do</a></div>	
   </li>
   <li>
         <div class="thumb-content"><a href="#.">Our Portfolio</a></div>	
   </li>

   <li>
         <div class="thumb-content"><a href="ourgallery.php">Our Portfolio</a></div>	
   </li>
</ul>
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-3">
<div class="widget no-box">
<h5 class="widget-title">Get started<span></span></h5>
<p>Wanna Get Started On Your Project?</p>
<a class="btn" href="request-a-quote.php">REQUEST A QUOTE</a>
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-3">

<div class="widget no-box">
<h5 class="widget-title">Contact Us<span></span></h5>

<p><a href="mailto:apexgdd@gmail.com" title="glorythemes">apexgdd@gmail.com</a></p>
<p><a href="mailto:info@apexdigital.co.ke" title="glorythemes">info@teamapexdigital.com</a></p>

<ul class="social-footer2">
   <!-- social icon li -->
   <?php include 'footer-social-icons.php';?>
</ul>
</div>
</div>

</div>
</div>
</div>
  
<div class="footer-copyright">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<p>Copyright Apex Digital © <?php $year = date("Y");
echo $year;?> All rights reserved.</p>
</div>
</div>
</div>
</div>
</footer>


</div>

<?php include 'inc/client-slider-scripts.php'; ?>

<!-- jQuery Files -->
<script src="js/bootstrap.min.js"></script>

<!--to view items on reach-->
<script src="js/jquery.appear.js"></script>

<!--Swiper slider-->
<script src="js/swiper.jquery.min.js"></script>

<!--Owl slider-->
<script src="js/owl.carousel.min.js"></script>

<!--number counters-->
<script src="js/jquery-countTo.js"></script>

<!--equalize the same heights of block-->
<script src="js/jquery.matchHeight-min.js"></script>

<!--for parallax bgs-->
<script src="js/parallaxie.js"></script>

<!--for CountDown Timer-->
<script src="js/dscountdown.min.js"></script>

<!--Open popup fancybox on images-->
<script src="js/jquery.fancybox.min.js"></script>

<!--Portfolio galleries-->
<script src="js/jquery.cubeportfolio.min.js"></script>

<!--Progressbar s in circle forms-->
<script src="js/circle-progress.min.js"></script>

<!--scrollbar on blocks-->
<script src="js/simplebar.js"></script>

<!--Video Pops support for youtube, viemo etc-->
<script src="js/viedobox_video.js"></script>

<!--youtube background video-->
<script src="js/jquery.mb.YTPlayer.min.js"></script>

<!-- Type It -->
<script src="https://cdn.jsdelivr.net/jquery.typeit/4.4.0/typeit.min.js"></script>

<!-- WOW Transitions -->
<script src="js/wow.min.js"></script>

    
<!--Revolution SLider-->
<!-- <script src="js/revolution/jquery.themepunch.tools.min.js"></script>
<script src="js/revolution/jquery.themepunch.revolution.min.js"></script> -->
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<!-- <script src="js/revolution/extensions/revolution.extension.actions.min.js"></script>
<script src="js/revolution/extensions/revolution.extension.carousel.min.js"></script>
<script src="js/revolution/extensions/revolution.extension.kenburn.min.js"></script>
<script src="js/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="js/revolution/extensions/revolution.extension.migration.min.js"></script>
<script src="js/revolution/extensions/revolution.extension.navigation.min.js"></script>
<script src="js/revolution/extensions/revolution.extension.parallax.min.js"></script>
<script src="js/revolution/extensions/revolution.extension.slideanims.min.js"></script>
<script src="js/revolution/extensions/revolution.extension.video.min.js"></script> -->
   

<!--Synx scripts-->
<script src="js/functions.js"></script>
    
<!--Google map API-->
<!-- <script src="http://maps.google.com/maps/api/js?key=AIzaSyAOBKD6V47-g_3opmidcmFapb3kSNAR70U"></script>
<script src="js/map.js"></script>
 -->



<!--Main js-->
<script src="js/main.js"></script>
<!-- <script src="js/owl.carousel.js"></script> -->


<!-- Place this script at the end of the body tag -->

<script>
  window.addEventListener("DOMContentLoaded", function() {

    // get the form elements defined in your form HTML above
    
    var form = document.getElementById("my-form");
    var button = document.getElementById("my-form-button");
    var status = document.getElementById("my-form-status");

    // Success and Error functions for after the form is submitted
    
    function success() {
      form.reset();
      button.style = "display: none ";
      status.innerHTML = "Message submitted succesfully!";
    }

    function error() {
      status.innerHTML = "Oops! There was a problem.";
    }

    // handle the form submission event

    form.addEventListener("submit", function(ev) {
      ev.preventDefault();
      var data = new FormData(form);
      ajax(form.method, form.action, data, success, error);
    });
  });
  
  // helper function for sending an AJAX request

  function ajax(method, url, data, success, error) {
    var xhr = new XMLHttpRequest();
    xhr.open(method, url);
    xhr.setRequestHeader("Accept", "application/json");
    xhr.onreadystatechange = function() {
      if (xhr.readyState !== XMLHttpRequest.DONE) return;
      if (xhr.status === 200) {
        success(xhr.response, xhr.responseType);
      } else {
        error(xhr.status, xhr.response, xhr.responseType);
      }
    };
    xhr.send(data);
  }
</script>
</body>
</html>