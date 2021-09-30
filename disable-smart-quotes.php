<?PHP
/*
Plugin Name: Disable Smart Quotes
Description:  WordPress Plugin to Disable auto Smart (Curly) quote conversion
Version: 1.0
Author: Thomas Dreidemy
*/
if( version_compare ( $wp_version, '4.0' ) === -1 ) {
    // To Disable Smart Quotes for WordPress less than 4.0
    foreach( array(
        'bloginfo',
        'the_content',
        'the_excerpt',
        'the_title',
        'comment_text',
        'comment_author',
        'link_name',
        'link_description',
        'link_notes',
        'list_cats',
        'nav_menu_attr_title',
        'nav_menu_description',
        'single_post_title',
        'single_cat_title',
        'single_tag_title',
        'single_month_title',
        'term_description',
        'term_name',
        'widget_title',
        'wp_title'
    ) as $sQuote_disable_for )
    remove_filter( $sQuote_disable_for, 'wptexturize' );
}
else {
    // To Disable Smart Quotes for WordPress 4.0 or higher
    add_filter( 'run_wptexturize', '__return_false' );
}