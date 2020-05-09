<div class="container">
        <div class="container" style="margin-top:20px;">
            <div class="intro-text center wow fadeInUp">
                <span class="heading-title bottom25">OUR CLIENTS AND PARTNERS</span>
                <h3 class="darkcolor heading_space">We partner with brands of all sizes.</h3>
            </div>  
        </div>
        
   <section class="customer-logos slider">
   <div class="slide"><img src="img/AAVF.png"></div>
      <div class="slide"><img src="img/17.jpg"></div>
      <div class="slide"><img src="img/3.jpg"></div>
      <div class="slide"><img src="img/10.png"></div>
	  <div class="slide"><img src="img/9.png"></div>
      <div class="slide"><img src="img/logo-delta.png"></div>
      <div class="slide"><img src="img/3.jpg"></div>
      <div class="slide"><img src="img/10.png"></div>

     
   </section>
</div>

<br><br>
<script>
	$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
</script>
