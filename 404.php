<?php
/**
* The template for displaying 404 pages (Not Found)
*/

get_header();
?>

<div id="primary" class="content-area">
   <main id="main" class="site-main">

       <header class="page-header">
           <h1 class="page-title"><?php _e( 'Oops! Page not found', 'cms2-project' ); ?></h1>

       </header>

       <div class="page-content">
           <img src="<?php echo get_template_directory_uri(); ?>/assets/404.jpg" alt="Not Found Image" class="fourohfour">
           <p><?php _e( 'Sorry, but the page you are looking for does not exist.', 'cms2-project' ); ?></p>
           <p><?php _e( 'You can return to the <a href="' . home_url() . '">homepage</a> or try searching using the form below:', 'cms2-project' ); ?></p>

       </div>

   </main>
</div>

<?php
get_footer();
?>

