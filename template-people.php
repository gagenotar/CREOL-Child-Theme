<?php
/**
 * Template Name: People Child
 * Template Post Type: degree, page
 */
?>
<?php get_header(); the_post(); ?>

<div class="container mb-5 mt-3 mt-lg-5">
    <article class="<?php echo $post->post_status; ?> post-list-item">
        <?php the_content(); ?>
    </article>

<?php //var_dump($_GET);?>

<?php echo do_shortcode(
    "[jci_wrap]"
);

    ?>

<?php get_footer(); ?>
