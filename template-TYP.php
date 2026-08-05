<?php
/*
 * Template Name: Than you 2
 */
?>
<?php
get_header();
include(TEMPLATEPATH . '/template-parts/header-default.php');
?>



<!-- <div class="container-fluid typ-title-img p-0">
  <div class="">
    <div class="row">
      <div class="col-md-6 imagen1 mt-3 p-0">
        <img src="<?php echo bloginfo('template_url') . '/' ?>assets/img/img-typ.png" alt="" class="img-fluid">
      </div>
      <div class="col-md-6 txt">
        <h2>Thank you</h2>
        <h3>An advisor will contact you shortly<br> 
            to provide you with more<br> 
            information about our products.</h3>
      </div>

    </div>
  </div>
</div> -->



<div class="container-fluid home_form mt-5 c-content-div-center">
    <div class="row">
        <div class="col-md-5 img bg-12 img order-2 order-sm-1"></div>
        <div class="col-md-5 offset-md-1 txt order-1 order-sm-2" >
          
            <h2 class="titulo-h2 mt-5">Thank you</h2>
            <p class="mb-5"><strong>An advisor will contact you shortly to provide you with more information about our products.</strong> </p>
            
        </div>
    </div>
</div>




<?php
include(TEMPLATEPATH . '/template-parts/footer-default.php');
get_footer();
?>