<?php
/**
 * Template Name: FAQ
 * Template Post Type: page, degree
 */
?>

<?php
/**
 *  Template Author: Raphael Miller
 */
?>
<?php get_header(); the_post(); ?>

<article class="<?php echo $post->post_status; ?> post-list-item">
    <?php the_content(); ?>
</article>

<div id="faq-list" role="tablist" aria-multiselectable="true">
    <div class="card">
        <div class="card-header" role="tab" id="question1">
            <h5 class="mb-0">
                <a data-toggle="collapse" data-parent="#faq-list" href="#question1" aria-expanded="true"
                   aria-controls="question1">
                    This is the first question
                </a>
            </h5>
        </div>
        <div id="question1" class="collapse in" role="tabpanel" aria-labelledby="question1">
            <div class="card-block">
                this is the first answer<br>
                this is the first answer<br>
                this is the first answer<br>
                this is the first answer<br>
                this is the first answer<br>
                this is the first answer<br>
                this is the first answer<br>
                this is the first answer<br>
                this is the first answer<br>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" role="tab" id="question2">
            <h5 class="mb-0">
                <a data-toggle="collapse" data-parent="#faq-list" href="#question2" aria-expanded="true"
                   aria-controls="question2">
                    This is the second question
                </a>
            </h5>
        </div>
        <div id="question2" class="collapse in" role="tabpanel" aria-labelledby="question2">
            <div class="card-block">
                this is the second answer
            </div>
        </div>
    </div>
</div>
<!--<div id="faq-accordian" role="tablist" aria-multiselectable="true">-->
<!--    --><?php
//    generate_accoridan_card(
//            "section1ContentId",
//            "section1HeaderId",
//            "The Field of Photonics",
//            (object) array(
//                (object) array(
//                    "contentID" => "contentID",
//                    "title" => "What is photonics and where can I be employed?",
//                    "content" => "Photonics is the science and technology of generating, controlling, and detecting photonics,
//                which are particles of light. <br> Photonics is an enabling technology that is used across a wide array
//                of industries.  From medicine to the military, and from consumer electronics to communications, photonics
//                makes many other technologies we use possible. <br> For an excellent website of recent developments in
//                photonics, check out www.opli.net .  This website has news articles from across the many industries that
//                are impacted by photonics technologies."
//                ),
//            )
//            );
//    ?>
<!--    --><?php //generate_accoridan_card(
//            "section2ContentId",
//            "section2HeaderId",
//            "Preparing to Enter the Major",
//            (object) array(
//                (object) array(
//                    "contentID" => "contentIDhighSchool",
//                    "title" => "I am in high school. What should I take to prepare for a degree in photonics?",
//                    "content" => "Photonics is the science and technology of generating, controlling, and detecting photonics,
//                which are particles of light. <br> Photonics is an enabling technology that is used across a wide array
//                of industries.  From medicine to the military, and from consumer electronics to communications, photonics
//                makes many other technologies we use possible. <br> For an excellent website of recent developments in
//                photonics, check out www.opli.net .  This website has news articles from across the many industries that
//                are impacted by photonics technologies."
//                ),
//                (object) array(
//                    "contentID" => "contentIDaccepted",
//                    "title" => "How do I get accepted into the Bachelor of Science in Photonic Science and Engineering?",
//                    "content" => "Photonics is the science and technology of generating, controlling, and detecting photonics,
//                which are particles of light. <br> Photonics is an enabling technology that is used across a wide array
//                of industries.  From medicine to the military, and from consumer electronics to communications, photonics
//                makes many other technologies we use possible. <br> For an excellent website of recent developments in
//                photonics, check out www.opli.net .  This website has news articles from across the many industries that
//                are impacted by photonics technologies."
//                ),
//                (object) array(
//                    "contentID" => "contentIDadvisor",
//                    "title" => "Can I meet with an advisor if I am a student in high school or a state college?",
//                    "content" => "Photonics is the science and technology of generating, controlling, and detecting photonics,
//                which are particles of light. <br> Photonics is an enabling technology that is used across a wide array
//                of industries.  From medicine to the military, and from consumer electronics to communications, photonics
//                makes many other technologies we use possible. <br> For an excellent website of recent developments in
//                photonics, check out www.opli.net .  This website has news articles from across the many industries that
//                are impacted by photonics technologies."
//                )
//            )
//    ); ?>
<!--    --><?php //generate_accoridan_card(
//            "section3ContentId",
//            "section3HeaderId",
//            "Being Successful in the Major",
//            (object) array(
//                (object) array(
//                    "contentID" => "contentIDStudy",
//                    "title" => "How much time should I study?",
//                    "content" => "Photonics is the science and technology of generating, controlling, and detecting photonics,
//                    which are particles of light. <br> Photonics is an enabling technology that is used across a wide array
//                    of industries.  From medicine to the military, and from consumer electronics to communications, photonics
//                    makes many other technologies we use possible. <br> For an excellent website of recent developments in
//                    photonics, check out www.opli.net .  This website has news articles from across the many industries that
//                    are impacted by photonics technologies."
//                ),
//                (object) array(
//                    "contentID" => "contentIDTutoring",
//                    "title" => "Where can I get tutoring help?",
//                    "content" => "Photonics is the science and technology of generating, controlling, and detecting photonics,
//                    which are particles of light. <br> Photonics is an enabling technology that is used across a wide array
//                    of industries.  From medicine to the military, and from consumer electronics to communications, photonics
//                    makes many other technologies we use possible. <br> For an excellent website of recent developments in
//                    photonics, check out www.opli.net .  This website has news articles from across the many industries that
//                    are impacted by photonics technologies."
//                ),
//                (object) array(
//                    "contentID" => "contentIDClasses",
//                    "title" => "Should I work and take classes at the same time?",
//                    "content" => "Photonics is the science and technology of generating, controlling, and detecting photonics,
//                    which are particles of light. <br> Photonics is an enabling technology that is used across a wide array
//                    of industries.  From medicine to the military, and from consumer electronics to communications, photonics
//                    makes many other technologies we use possible. <br> For an excellent website of recent developments in
//                    photonics, check out www.opli.net .  This website has news articles from across the many industries that
//                    are impacted by photonics technologies."
//                ),
//                (object) array(
//                    "contentID" => "contentIDSchedule",
//                    "title" => "Should I create a weekly schedule?",
//                    "content" => "Photonics is the science and technology of generating, controlling, and detecting photonics,
//                    which are particles of light. <br> Photonics is an enabling technology that is used across a wide array
//                    of industries.  From medicine to the military, and from consumer electronics to communications, photonics
//                    makes many other technologies we use possible. <br> For an excellent website of recent developments in
//                    photonics, check out www.opli.net .  This website has news articles from across the many industries that
//                    are impacted by photonics technologies."
//                )
//    )); ?>
<!--    --><?php //generate_accoridan_card(
//            "section4ContentId",
//            "section4HeaderId",
//            "Courses to Take",
//            "Content"
//    ); ?>
<!--    --><?php //generate_accoridan_card(
//            "section5ContentId",
//            "section5HeaderId",
//            "Important Steps",
//            "Content"
//    ); ?>
<!--    --><?php //generate_accoridan_card(
//            "section6ContentId",
//            "section6HeaderId",
//            "Opportunities for Students",
//            "Content"
//    ); ?>
<!--    --><?php //generate_accoridan_card(
//            "section7ContentId",
//            "section7HeaderId",
//            "Resources",
//            "Content"
//    ); ?>
<!--</div>-->
<!---->
<!--<div class="btn btn-secondary">-->
<!--    <a data-toggle="collapse" href="#contentId" aria-expanded="false" aria-controls="contentId" style="text-decoration: none; color: #ffffff">-->
<!--        Question 1-->
<!--    </a>-->
<!--</div>-->
<!--<div class="collapse" id="contentId">-->
<!--    content 1-->
<!--</div>-->
<!---->
<?php //secondary_question_collapse(
//    (object) array(
//                "contentID" => "contentID",
//                "title" => "What is photonics and where can I be employed?",
//                "content" => "Photonics is the science and technology of generating, controlling, and detecting photonics,
//                which are particles of light. <br> Photonics is an enabling technology that is used across a wide array
//                of industries.  From medicine to the military, and from consumer electronics to communications, photonics
//                makes many other technologies we use possible. <br> For an excellent website of recent developments in
//                photonics, check out www.opli.net .  This website has news articles from across the many industries that
//                are impacted by photonics technologies."
//        )); ?>


<?php get_footer(); ?>
