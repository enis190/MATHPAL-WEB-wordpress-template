<?php
/*
 * Template Name: Blank
 */
?>
<?php
get_header();
include(TEMPLATEPATH . '/template-parts/header-default.php');
?>

<div class="container-fluid c-div-padding checkout">
    <div class="container c-div-padding">
        <div class="row">
            <div class="col-12">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        the_content(); 
                    endwhile;
                endif;
                ?>
                <!-- <h2>Thank you</h2>
                <h4>An advisor will contact you shortly to provide you with more information about our products.</h4> -->
            </div>
        </div>
    </div>
</div>

<?php
include(TEMPLATEPATH . '/template-parts/footer-default.php');
get_footer();
?>