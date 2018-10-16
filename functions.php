<?php
/**
 * Child theme functions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 */
/**
 * Load the parent style.css file
 *
 * Junk added by Deon
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
function child_enqueue_parent_theme_style() {
    // Dynamically get version number of the parent stylesheet (lets browsers re-cache your stylesheet when you update your theme)
    $theme   = wp_get_theme( 'Colleges-Theme' ); // !!! CHANGE TO YOUR PARENT THEME NAME !!!
    $version = $theme->get( 'Version' );
    // Load the stylesheet
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/static/css/style.min.css', array(), $version );
    wp_enqueue_style('child-style', get_stylesheet_directory_uri().'/style.css');

}
add_action( 'wp_enqueue_scripts', 'child_enqueue_parent_theme_style' );

function generate_accoridan_card($contentId, $headerID, $title, $content){
    echo "    <div class=\"card\" id=\"Field-Of-Photonics-Card\">
        <div class=\"btn btn-primary\" role=\"tab\" id=\"sectionFieldOfPhotonics\">
            <h5 class=\"mb-0\" >
                <a data-toggle=\"collapse\" data-parent=\"#faq-accordian\" href=\"#$contentId\"
                   aria-expanded=\"true\"
                   aria-controls=\"$contentId\"
                   style=\"text-decoration: none; color: #0a0a0a;\">
                    $title
                </a>
            </h5>
        </div>
        <div id=\"$contentId\" class=\"collapse in\" role=\"tabpanel\" aria-labelledby=\"$headerID\">
            <div class=\"card-block\">";
                foreach ($content as $contents){
                    secondary_question_collapse($contents);
                }

            echo"</div>
        </div>
    </div>";
}

function secondary_question_collapse($markers){
    echo "<div class=\"btn btn-block btn-secondary\">
    <a data-toggle=\"collapse\" href=\"#$markers->contentID\" aria-expanded=\"false\" aria-controls=\"$markers->contentID\" style=\"text-decoration: none; color: #ffffff\">
        $markers->title
    </a>
</div>
<div class=\"collapse\" id=\"$markers->contentID\">
    $markers->content
</div>";
}

function generate_parallax($img_url){
    echo '<style>
    .parallax { 

    height: 500px; 

    background: url("../../uploads/2018/04/sebastian-sanabria-vaporwave.jpg") no-repeat fixed center;
    background-size: cover;
    }
          </style>
          
          <div class="parallax">Hello</div>';

}

function get_json_info($url_string){
    echo "
        <div class='container'>
        <label><h5>Search Publications</h5></label>
            <input class=\"form-control\" type=\"text\" placeholder=\"Author\">
            <select class=\"form-control\">
                <option>Books</option>
                <option>Book Chapters</option>
                <option>Journal Papers</option>
                <option>Conference Proceedings</option>
                <option>Other Unreferenced Publications</option>
                <option>Patents</option>
                <option>Pending Patents</option>
                <option>Disclosures</option>
                <option>Theses or Dissertations</option>
                <option>Presentations</option>
                <option>Invited Presentations</option>
                <option>Plenary Presentations</option>
                <option>Tutorials</option>
                <option>Posters</option>
                <option>Workshops</option>
                <option>Seminars</option>
                <option>News Coverage</option>
            </select>
        </div>";
}

add_filter( 'query_vars', 'addnew_query_vars', 10, 1 );
function addnew_query_vars($vars)
{
    $vars[] = 'c'; // c is the name of variable you want to add
    return $vars;
}

function json_contnet_importer_wrapper_func( $atts) {
    $arg_concat = '';

    end($_GET);
    $last_element = key($_GET);

    foreach ($_GET as $item => $value){
        if($value == ''){
            $arg_concat .= $item . '&';
        }else if($item != $last_element){
            $arg_concat .= $item . '=' . $value . '&';
        } else{
            $arg_concat .= $item . '=' . $value;
        }
    }

    //var_dump($_GET);
    //var_dump($arg_concat);

    $content = get_the_content();

    var_dump($content);
    $short =  "[jsoncontentimporter url=\"https://api.creol.ucf.edu/SqlToJson.aspx?$arg_concat\" basenode=\"response\"]" . $content . "[/jsoncontentimporter]";
    //var_dump($short);
    echo do_shortcode($short);
}

add_shortcode( 'jci_wrap', 'json_contnet_importer_wrapper_func' );