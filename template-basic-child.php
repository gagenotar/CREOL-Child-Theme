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

    <div id="accordianId" role="tablist" aria-multiselectable="true">
        <div class="card">
            <div class="card-header" role="tab" id="coreFaculty">
                <h5 class="mb-0">
                    <a data-toggle="collapse" data-parent="#accordianId" href="#coreFacultyContent" aria-expanded="true"
                       aria-controls="section1ContentId">
                        Core Faculty
                    </a>
                </h5>
            </div>
            <div id="coreFacultyContent" class="collapse in" role="tabpanel" aria-labelledby="coreFaculty">
                <div class="card-block">
                    <?php do_shortcode('[ucf-creol-people-directory grp_id=1]') ?>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" role="tab" id="emeritus-faculty">
                <h5 class="mb-0">
                    <a data-toggle="collapse" data-parent="#accordianId" href="#emeritus-faculty-content" aria-expanded="true"
                       aria-controls="section2ContentId">
                        Emeritus Faculty
                    </a>
                </h5>
            </div>
            <div id="emeritus-faculty-content" class="collapse in" role="tabpanel" aria-labelledby="emeritus-faculty">
                <div class="card-block">
                    <?php do_shortcode('[ucf-creol-people-directory grp_id=293]') ?>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" role="tab" id="section2HeaderId">
                <h5 class="mb-0">
                    <a data-toggle="collapse" data-parent="#accordianId" href="#joint-faculty-content" aria-expanded="true"
                       aria-controls="section3ContentId">
                        Joint Faculty
                    </a>
                </h5>
            </div>
            <div id="joint-faculty-content" class="collapse in" role="tabpanel" aria-labelledby="emeritus-faculty">
                <div class="card-block">
                    <?php do_shortcode('[ucf-creol-people-directory grp_id=2]') ?>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" role="tab" id="section2HeaderId">
                <h5 class="mb-0">
                    <a data-toggle="collapse" data-parent="#accordianId" href="#visiting-faculty-content" aria-expanded="true"
                       aria-controls="section4ContentId">
                        Visiting & Adjunct Faculty
                    </a>
                </h5>
            </div>
            <div id="visiting-faculty-content" class="collapse in" role="tabpanel" aria-labelledby="emeritus-faculty">
                <div class="card-block">
                    <?php do_shortcode('[ucf-creol-people-directory grp_id=557]') ?>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" role="tab" id="section2HeaderId">
                <h5 class="mb-0">
                    <a data-toggle="collapse" data-parent="#accordianId" href="#courtesy-faculty-content" aria-expanded="true"
                       aria-controls="section5ContentId">
                        Courtesy Faculty
                    </a>
                </h5>
            </div>
            <div id="courtesy-faculty-content" class="collapse in" role="tabpanel" aria-labelledby="emeritus-faculty">
                <div class="card-block">
                    <?php do_shortcode('[ucf-creol-people-directory grp_id=292]') ?>
                </div>
            </div>
        </div>
    </div>

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