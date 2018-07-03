<?php
/**
 * Template Name: Full Width Child
 * Template Post Type: page, degree
 */
?>
<?php get_header(); the_post(); ?>

    <script type="application/javascript">
        function changeStyle(uri) {
            var x = document.getElementsByClassName("parallax");
            var headuri = "url(\"";
            var tailuri = "\") no-repeat fixed center";
            //console.log(totaluri);
            x[0].style.background = headuri.concat(uri, tailuri);
        }
    </script>


    <article class="<?php echo $post->post_status; ?> post-list-item">
        <?php the_content(); ?>
    </article>

<?php get_footer(); ?>