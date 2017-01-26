<?php

function imagepassshort($arg) {
$content = str_replace('"img/', '"' . get_bloginfo('template_directory') . '/img/', $arg);
return $content;
}
add_action('the_content', 'imagepassshort');


function my_bbp_search_form(){
    ?>
    <div class="bbp-search-form">
 
        <?php bbp_get_template_part( 'form', 'search' ); ?>
 
    </div>
    <?php
}
add_action( 'bbp_template_before_single_forum', 'my_bbp_search_form' );



















?>