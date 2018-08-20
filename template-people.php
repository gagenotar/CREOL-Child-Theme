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

<?php var_dump($_GET); ?>

<?php echo do_shortcode('[jsoncontentimporter url="https://api.creol.ucf.edu/SqlToJson.aspx?WWWDirectory&GrpID=1" basenode="response"]');
    echo '<a href="/People/PeopleDetail?PeopleID={PeopleID}" style="font-variant:small-caps; font-weight:bold; font-size:125%">
<img src="https://www.creol.ucf.edu/People/images/100x150Portrait/{PeopleID}.jpg" style="float:left; margin-right:10px; font-size: 150%" />{FullName}</a><br>
{Location}<br>
{Phone}<br>
<a href="mailto:{Email}">{Email}</a>';
    echo do_shortcode('[/jsoncontentimporter]');
    ?>

<?php get_footer(); ?>
