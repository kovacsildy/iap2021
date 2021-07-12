 <div class="container-works">
 <div class="slider">
	<div class ="slide">
		<img src="<?= get_stylesheet_directory_uri() . "/images/Img 03.svg" ?>" />
		<h6>Mocha</h6>
	</div>
	<div class="slide">
		<img src="<?= get_stylesheet_directory_uri() . "/images/Img 01.svg" ?>" />
		<h6>Mixkit Inspo</h6>
	</div>
	<div class="slide">
		<img src="<?= get_stylesheet_directory_uri() . "/images/Img 02.svg" ?>" />
		<h6>Abalone</h6>
	</div>
	<div class="slide">
		<img src="<?= get_stylesheet_directory_uri() . "/images/Img 04.svg" ?>" />
		<h6>Dreamy</h6>
	</div>
  </div>
    <script>
 	(function($) {
   $('.slider').slick({
      slidesToShow: 2,
      slidesToScroll: 2
   });
	})(jQuery);
 </script>
</div>
