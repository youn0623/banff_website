<?php get_header(); ?>
<?php wp_nav_menu(); ?>
<?php get_template_part('part', 'hero'); ?>
<h1 class="text-center">This Is My Homepage</h1>
<img class="water-pic" src="<?php echo get_theme_file_uri('assets/water.jpg')?>">
<h2 class="text-center">Picture Carousel</h2>
<div class="container">
  <div id="myCarousel" class="carousel slide mx-auto" data-ride="carousel" style="max-width: 600px;">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="<?php echo get_theme_file_uri('assets/wood.jpg')?>" alt="First slide" height="600">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo get_theme_file_uri('assets/stick.jpg')?>" alt="Second slide" height="600">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo get_theme_file_uri('assets/water.jpg')?>" alt="Third slide" height="600">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo get_theme_file_uri('assets/dock.jpg')?>" alt="Fourth slide" height="600">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo get_theme_file_uri('assets/shack.jpg')?>" alt="Fifth slide" height="600">
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<h2 class="text-center">Testimonials</h2>
<?php the_content(); ?>
<?php get_footer(); ?>