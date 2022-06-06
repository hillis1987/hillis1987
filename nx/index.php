
<?php get_header(); ?>

<div class="container my-5">

  <h1><?php bloginfo('description'); ?></h1>
  <hr>

</div>
<div class="container">

  <div class="row">

    <div class="col-sm-8">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article <?php post_class(); ?>>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p><?php the_time('j M Y');?> - <?php the_category(', '); ?></p>

          <?php  the_post_thumbnail('nx_single', array('class' => 'img-fluid mb-4','alt' => get_the_title())); ?>

          <?php the_excerpt();?>
        </article>




      <?php endwhile; else : ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.','nx' ); ?></p>
      <?php endif; ?>



    </div>

    <?php get_sidebar(); ?>

  </div>



</div>


<?php get_footer(); ?>
