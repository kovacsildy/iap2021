	<div class="container">
		<h3>Latest posts</h3>
		<h6 class="right">View all</h6>
		<img src="<?= get_stylesheet_directory_uri() . "/images/Arrow 1.svg" ?>" />
	</div>
<div class="container">
  <div class="card">
      <?php if ( has_post_thumbnail() ): ?>
        <a href="<?php the_permalink() ?>" class="blog-list-image">
            <?php the_post_thumbnail(); ?>
        </a>
    <?php endif; ?>
      <!-- <a href="http://localhost/wp1/2021/07/27/ux-traffic-light-colours-2/">
          <div class="card">
          <img src="<?= get_stylesheet_directory_uri() . "/images/card1.png" ?>" />
          <div> -->
            <h3>UX traffic light colours</h3>
            <h5>UI has to make a huge visual difference between warning, an alert and a success.</h5>
          </div>
       <!--  </div> -->
   <!--    </a> -->
      <a href="http://localhost/wp1/blog/using-ux-design-to-build-a-sustainable-future/">
        <div class="card">
          <img src="<?= get_stylesheet_directory_uri() . "/images/card2.png" ?>" />
          <div>
            <h3>Using UX Design to Build a Sustainable Future</h3>
            <h5>Transformation has to be driven by everybody, not just by climate groups.</h5>
          </div>
        </div>
      </a>
      <a href>
        <div class="card">
          <img src="<?= get_stylesheet_directory_uri() . "/images/card3.png" ?>" />
          <div>
            <h3>Creativity vs. UX</h3>
            <h5>Is it possible to create a delightful user experience without following best UX practices?</h5>
          </div>
        </div>
      </a>
</div>