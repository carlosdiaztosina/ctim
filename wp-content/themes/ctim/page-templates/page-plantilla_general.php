<?php
/* Template Name: Plantilla General 
Esta es la plantilla general
*/
global $post;
get_header();


?>
<section class="">
    <div class="row">
        <?php get_sidebar() ?>
        <div class="col-9">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
</section>

<?php get_footer(); ?> 