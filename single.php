<!--Singe.php looks only for single POSTS-->
<?php
    #Load header
    get_header();

    while(have_posts()) {
        the_post(); 
        ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        <?php
    }

    #Load footer
    get_footer();
?>