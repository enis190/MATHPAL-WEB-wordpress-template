<?php
/*
 * Template Name: Blog
 */
?>
<?php
get_header();
include(TEMPLATEPATH . '/template-parts/header-default.php');
?>





<div class="container-fluid header-title">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <h1 class="fade-in">MathPal Learning Hub</h1>
                <h2 class="titulo-h2 fade-in">Practical math guidance for students and parents</h2>
                <p class="fade-in-top">
                    Explore expert articles, study tips, and exam preparation resources designed to help students build strong math skills, stay confident, and succeed at every stage of learning.
                </p>
            </div>
        </div>
    </div>
</div>








<div class="container-fluid notas_de_blog">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="titulo-h3 fade-in">Latest articles and math resources</h2>
      </div>
    </div>

    <div class="row">
      <?php
      $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 4, // cantidad de entradas a mostrar
        'orderby'        => 'date',
        'order'          => 'DESC'
      );

      $blog_query = new WP_Query($args);

      if ($blog_query->have_posts()) :
        while ($blog_query->have_posts()) : $blog_query->the_post();
      ?>
          <div class="col-md-4">
            <article>

              <?php if (has_post_thumbnail()) : ?>
                <figure>
                  <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('medium', ['loading' => 'lazy']); ?>
                  </a>
                </figure>
              <?php endif; ?>

              <h3>
                <a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                </a>
              </h3>

              <p>
                <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
              </p>

            </article>
          </div>
      <?php
        endwhile;
        wp_reset_postdata();
      endif;
      ?>
    </div>

  </div>
</div>








<?php
include(TEMPLATEPATH . '/template-parts/footer-default.php');
get_footer();
?>