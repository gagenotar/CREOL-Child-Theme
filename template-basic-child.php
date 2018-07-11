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

<?php
//$post = array(
//    'post_content' => do_shortcode('[ucf-creol-people-directory grp_id=1]'),
//    'post_title' => 'tester',
//    'post_status' => 'publish',
//    'post_type' => 'page'
//);
//
//wp_insert_post($post)
//
//?>

<!--    <div id="accordianId" role="tablist" aria-multiselectable="true">-->
<!--        <div class="card">-->
<!--            <div class="card-header" role="tab" id="coreFaculty">-->
<!--                <h5 class="mb-0">-->
<!--                    <a data-toggle="collapse" data-parent="#accordianId" href="#coreFacultyContent" aria-expanded="true"-->
<!--                       aria-controls="section1ContentId">-->
<!--                        Core Faculty-->
<!--                    </a>-->
<!--                </h5>-->
<!--            </div>-->
<!--            <div id="coreFacultyContent" class="collapse in" role="tabpanel" aria-labelledby="coreFaculty">-->
<!--                <div class="card-block">-->
<!--                    --><?php //do_shortcode('[ucf-creol-people-directory grp_id=1]') ?>
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="card">-->
<!--            <div class="card-header" role="tab" id="emeritus-faculty">-->
<!--                <h5 class="mb-0">-->
<!--                    <a data-toggle="collapse" data-parent="#accordianId" href="#emeritus-faculty-content" aria-expanded="true"-->
<!--                       aria-controls="section2ContentId">-->
<!--                        Emeritus Faculty-->
<!--                    </a>-->
<!--                </h5>-->
<!--            </div>-->
<!--            <div id="emeritus-faculty-content" class="collapse in" role="tabpanel" aria-labelledby="emeritus-faculty">-->
<!--                <div class="card-block">-->
<!--                    --><?php //do_shortcode('[ucf-creol-people-directory grp_id=293]') ?>
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="card">-->
<!--            <div class="card-header" role="tab" id="section2HeaderId">-->
<!--                <h5 class="mb-0">-->
<!--                    <a data-toggle="collapse" data-parent="#accordianId" href="#joint-faculty-content" aria-expanded="true"-->
<!--                       aria-controls="section3ContentId">-->
<!--                        Joint Faculty-->
<!--                    </a>-->
<!--                </h5>-->
<!--            </div>-->
<!--            <div id="joint-faculty-content" class="collapse in" role="tabpanel" aria-labelledby="emeritus-faculty">-->
<!--                <div class="card-block">-->
<!--                    --><?php //do_shortcode('[ucf-creol-people-directory grp_id=2]') ?>
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="card">-->
<!--            <div class="card-header" role="tab" id="section2HeaderId">-->
<!--                <h5 class="mb-0">-->
<!--                    <a data-toggle="collapse" data-parent="#accordianId" href="#visiting-faculty-content" aria-expanded="true"-->
<!--                       aria-controls="section4ContentId">-->
<!--                        Visiting & Adjunct Faculty-->
<!--                    </a>-->
<!--                </h5>-->
<!--            </div>-->
<!--            <div id="visiting-faculty-content" class="collapse in" role="tabpanel" aria-labelledby="emeritus-faculty">-->
<!--                <div class="card-block">-->
<!--                    --><?php //do_shortcode('[ucf-creol-people-directory grp_id=557]') ?>
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="card">-->
<!--            <div class="card-header" role="tab" id="section2HeaderId">-->
<!--                <h5 class="mb-0">-->
<!--                    <a data-toggle="collapse" data-parent="#accordianId" href="#courtesy-faculty-content" aria-expanded="true"-->
<!--                       aria-controls="section5ContentId">-->
<!--                        Courtesy Faculty-->
<!--                    </a>-->
<!--                </h5>-->
<!--            </div>-->
<!--            <div id="courtesy-faculty-content" class="collapse in" role="tabpanel" aria-labelledby="emeritus-faculty">-->
<!--                <div class="card-block">-->
<!--                    --><?php //do_shortcode('[ucf-creol-people-directory grp_id=292]') ?>
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <h3>Recent Publications</h3>
    <ul>
        <li><strong>2018</strong>Ali K. Jahromi, Amy Van Newkirk, and Ayamn F. Abouraddy
            "Coherent Perfect Absorption in a Weakly Absorbing Fiber"
            IEEE Photonics Journal, vol. 10, no. 4, art. no. 6500810 (2018).</li>
        <li><strong>2018</strong>Ali Kazemi Jahromi
            "Analysis and Design of Non-Hermitian Optical Systems"
            A dissertation submitted in partial fulfillment of the requirements for the degree of Doctor of Philosophy
            in CREOL, The College of Optics and Photonics at the University of Central Florida Orlando</li>
        <li><strong>2018</strong>H.E. Kondakci & A.F. Abouraddy
            "Airy wave packets accelerating in space-time"
            Physical Review Letters, 120(16)</li>

    </ul>

    <h3>Research</h3>
<ul>
    <li>Science & Technology  Skip Navigation Links.
    <li>Fiber Optics
    <li>Fiber Fabrication Technology
    <li>Multimaterial Fibers
    <li>Nano-structured Fibers
    <li>Mid Infrared Fibers
    <li>Optoelectronics & Integrated Photonics
    <li>Photovoltaics
    <li>Periodic Structures & Photonic Crystals
    <li>Nanophotonics
    <li>Plasmonics
    <li>Nonlinear & Quantum Optics
    <li>Nonlinear Guided Waves & Fibers
    <li>Nonlinear Optical Materials
    <li>Nonlinear Optics & Spectroscopy
    <li>Nonlinear Optics in Periodic Structures
    <li>Quantum Optics
    <li>Imaging, Sensing & Display
    <li>Propagation in Random Media
</ul>

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