<?php
get_header();
include(TEMPLATEPATH . '/template-parts/header-default.php');
?>

<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
?>



        <div class="container-fluid single_blog">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="titulo-h3 fade-in text-center"><?php the_title(); ?></h2>
                        <p class="fecha-publicacion fade-in text-center mb-5"><?php echo get_the_date('F j, Y'); ?></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <?php the_content(); ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mt-4 mb-4">
                        <!-- Compartir en redes sociales -->
                        <?php
                        $url_actual   = urlencode(get_permalink());
                        $titulo_post  = urlencode(get_the_title());
                        ?>
                        <div class="compartir-redes">
                            <span>Share:</span>
                            <!-- Facebook -->
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url_actual; ?>"
                                target="_blank" rel="noopener noreferrer" aria-label="Compartir en Facebook">
                                <i class="fa-brands fa-facebook"></i>
                            </a>

                            <!-- LinkedIn -->
                            <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $url_actual; ?>"
                                target="_blank" rel="noopener noreferrer" aria-label="Compartir en LinkedIn">
                                <i class="fa-brands fa-linkedin"></i>
                            </a>

                        </div>

                    </div>
                </div>

            </div>
        </div>


<?php
    endwhile;
endif;
?>

<style>
    .wp-block-accordion-heading__toggle-title {
        font-size: 1.2rem;
    }

    @media only screen and (max-width: 600px) {
        .single_blog {
            margin-top: 50px;
        }

        .single_blog h2 {
            margin-bottom: 20px;
        }
    }

    @media only screen and (max-width: 820px) and (orientation: landscape) {
        .single_blog {
            margin-top: 50px;
        }

        .single_blog h2 {
            margin-bottom: 20px;
        }
    }

    @media only screen and (min-width: 992px) {
        .single_blog {
            margin-top: 170px;
        }

        .single_blog h2 {
            margin-bottom: 30px;
        }
    }
</style>



<?php
include(TEMPLATEPATH . '/template-parts/footer-default.php');
get_footer();
?>