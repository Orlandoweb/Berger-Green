<?php
use Roots\Sage\Assets;
/**
 * Template Name: Home
 */
?>
<?php
// check if the flexible content field has rows of data
if( have_rows('content_rows', get_option('page_on_front')) ):

    // loop through the rows of data
    while ( have_rows('content_rows', get_option('page_on_front')) ) : the_row();
        get_template_part('templates/flexible-content/' . get_row_layout());
    endwhile;

endif;
?>