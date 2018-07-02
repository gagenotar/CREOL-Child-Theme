<?php
/**
 * Template Name: Basic-test
 * Template Post Type: degree, page
 */
?>
<?php get_header(); the_post(); ?>

<?php
$uploads =  wp_upload_dir();
$path = $uploads['baseurl'];
?>

<div class="container mb-5 mt-3 mt-lg-5">
    <article class="<?php echo $post->post_status; ?> post-list-item">
        <?php the_content(); ?>
    </article>
</div>

<?php generate_parallax($path.'/2018/05/wallhaven-574683.jpg') ?>


<?php get_footer(); ?>