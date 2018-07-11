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

    <div class="card bg-primary">
        <h5 class="card-title mx-3 my-3">Faculty</h5>
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
                    <?php do_shortcode('[ucf-creol-people-directory grp_id=1 show_fields=True]') ?>
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
                    <?php do_shortcode('[ucf-creol-people-directory grp_id=293 show_fields=True]') ?>
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
                    <?php do_shortcode('[ucf-creol-people-directory grp_id=2 show_fields=True]') ?>
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
                    <?php do_shortcode('[ucf-creol-people-directory grp_id=557 show_fields=True]') ?>
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
                    <?php do_shortcode('[ucf-creol-people-directory grp_id=292 show_fields=True]') ?>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="card bg-primary">
        <h5 class="card-title mx-3 my-3">Scientists</h5>
        <div id="accordianId" role="tablist" aria-multiselectable="true">
            <div class="card">
                <div class="card-header" role="tab" id="coreFaculty">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordianId" href="#research-scientists" aria-expanded="true"
                           aria-controls="section1ContentId">
                            Research Scientists
                        </a>
                    </h5>
                </div>
                <div id="research-scientists" class="collapse in" role="tabpanel" aria-labelledby="coreFaculty">
                    <div class="card-block">
                        <?php do_shortcode('[ucf-creol-people-directory grp_id=3 show_fields=True]') ?>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" role="tab" id="emeritus-faculty">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordianId" href="#visiting-scientists" aria-expanded="true"
                           aria-controls="section2ContentId">
                            Visiting Scientists
                        </a>
                    </h5>
                </div>
                <div id="visiting-scientists" class="collapse in" role="tabpanel" aria-labelledby="emeritus-faculty">
                    <div class="card-block">
                        <?php do_shortcode('[ucf-creol-people-directory grp_id=559 show_fields=True]') ?>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" role="tab" id="section2HeaderId">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordianId" href="#research-staff" aria-expanded="true"
                           aria-controls="section3ContentId">
                            Research Staff
                        </a>
                    </h5>
                </div>
                <div id="research-staff" class="collapse in" role="tabpanel" aria-labelledby="emeritus-faculty">
                    <div class="card-block">
                        <?php do_shortcode('[ucf-creol-people-directory grp_id=558 show_fields=True]') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card bg-primary">
        <h5 class="card-title mx-3 my-3">Students</h5>
        <div id="accordianId" role="tablist" aria-multiselectable="true">
            <div class="card">
                <div class="card-header" role="tab" id="coreFaculty">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordianId" href="#graduate-students" aria-expanded="true"
                           aria-controls="section1ContentId">
                            Graduate Students
                        </a>
                    </h5>
                </div>
                <div id="graduate-students" class="collapse in" role="tabpanel" aria-labelledby="coreFaculty">
                    <div class="card-block">
                        <?php do_shortcode('[ucf-creol-people-directory grp_id=5 show_fields=True]') ?>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" role="tab" id="emeritus-faculty">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordianId" href="#visiting-students" aria-expanded="true"
                           aria-controls="section2ContentId">
                            Visiting Students
                        </a>
                    </h5>
                </div>
                <div id="visiting-students" class="collapse in" role="tabpanel" aria-labelledby="emeritus-faculty">
                    <div class="card-block">
                        <?php do_shortcode('[ucf-creol-people-directory grp_id=520 show_fields=True]') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card bg-primary">
        <h5 class="card-title mx-3 my-3">Staff</h5>
        <div id="accordianId" role="tablist" aria-multiselectable="true">
            <div class="card">
                <div class="card-header" role="tab" id="coreFaculty">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordianId" href="#admin-staff" aria-expanded="true"
                           aria-controls="section1ContentId">
                            Administrative Staff
                        </a>
                    </h5>
                </div>
                <div id="admin-staff" class="collapse in" role="tabpanel" aria-labelledby="coreFaculty">
                    <div class="card-block">
                        <?php do_shortcode('[ucf-creol-people-directory grp_id=4 show_fields=True]') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
