<?php
/**
 * Template Name: WP Radio
 */

get_header();

?>

<!--start home area-->
<?php get_template_part('template-parts/frontpage/hero-area'); ?>
<!--end home area-->

<!--start features area-->
<?php get_template_part('template-parts/frontpage/features'); ?>
<!--end features area-->

<!--start pricing-->
<?php get_template_part('template-parts/frontpage/pricing'); ?>
<!--end pricing-->

<!--start video area-->
<?php get_template_part('template-parts/frontpage/video-demo'); ?>
<!--end video area-->

<!--start documentation area-->
<?php get_template_part('template-parts/frontpage/docs'); ?>
<!--end documentation area-->

<!--start newsletter area-->
<?php get_template_part('template-parts/frontpage/news-letter'); ?>
<!--end newsletter area-->

<!--start testimonial area-->
<?php get_template_part('template-parts/frontpage/testimonials'); ?>
<!--end testimonial area-->


<!--start testimonial area-->
<?php get_template_part('template-parts/frontpage/contact'); ?>
<!--end testimonial area-->

<?php
get_footer();
?>
