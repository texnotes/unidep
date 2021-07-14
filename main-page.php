<?php /*
Template Name: Шаблон головної сторінки
Template Post Type:  page
*/

 get_header() ?>
<div class="grid-container">


<nav aria-label="You are here:" role="navigation">
  <ul class="breadcrumbs">
    
     <li>
      <span class="show-for-sr">Current: </span>Головна 
    </li>
  </ul>
</nav>


  <div id="primary" class="content-area">
    <main id="main" class="site-main">

    <?php
    while ( have_posts() ) :
      the_post();

      get_template_part( 'template-parts/content', 'main' );


      // If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;

    endwhile; // End of the loop.
    ?>
    </main><!-- #main -->
  </div><!-- #primary -->


<?php

get_footer();?>


