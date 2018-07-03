<?php
/**
 * Template Name: Basic Child
 * Template Post Type: degree, page
 */
?>
<?php get_header(); the_post(); ?>

<?php
$uploads =  wp_upload_dir();
$path = $uploads['baseurl'];
?>

<script type="application/javascript">
    function changeStyle(uri) {
        var x = document.getElementsByClassName("parallax");
        var headuri = "url(\"";
        var tailuri = "\") no-repeat fixed center";
        //console.log(totaluri);
        x[0].style.background = headuri.concat(uri, tailuri);
    }
</script>

<div class="container mb-5 mt-3 mt-lg-5">
    <article class="<?php echo $post->post_status; ?> post-list-item">
        <?php the_content(); ?>
    </article>
</div>

<?php get_footer(); ?>