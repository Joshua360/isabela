<div class="container">
  <h2 class="client-slider">Our Clients and Partners</h2>
   <section class="customer-logos slider">
      <div class="slide"><img src="img/1.jpg"></div>
      <div class="slide"><img src="img/2.png"></div>
      <div class="slide"><img src="img/3.jpg"></div>
      <div class="slide"><img src="img/4.png"></div>
      <div class="slide"><img src="img/5.png"></div>
      <div class="slide"><img src="img/6.png"></div>
      <div class="slide"><img src="img/7.png"></div>
      <div class="slide"><img src="img/8.png"></div>
	  
	  <div class="slide"><img src="img/9.png"></div>
      <div class="slide"><img src="img/10.png"></div>
      <div class="slide"><img src="img/11.png"></div>
      <div class="slide"><img src="img/12.jpeg"></div>
      <div class="slide"><img src="img/13.jpg"></div>
      <div class="slide"><img src="img/14.png"></div>
      <div class="slide"><img src="img/16.jpg"></div>
      <div class="slide"><img src="img/17.jpg"></div>
   </section>
</div>
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
