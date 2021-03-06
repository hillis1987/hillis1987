<?php get_header(); ?>

<div class="container mt-5">

  <div class="row">

    <div class="col-sm-8 ml-sm-auto mr-sm-auto">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article <?php post_class(); ?>>
          <h1 class="display-4 mb-5 text-center"><?php the_title(); ?></h1>


          <?php  the_post_thumbnail('nx_single', array('class' => 'img-fluid mx-auto d-block mb-4','alt' => get_the_title())); ?>

          <?php the_content();?>



        </article>




      <?php endwhile; else : ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.','nx' ); ?></p>
      <?php endif; ?>



    </div>



  </div>



</div>

<?php get_footer(); ?>
