<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
}

/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function placid_posted_on()
{
    $time_string = '<i class="fa fa-calendar" aria-hidden="true"></i> <time class="entry-date published updated" datetime="%1$s">%2$s</time>';
    if (get_the_time('U') < get_the_modified_time('U')) {
        $time_string = $time_string . '&nbsp&nbsp( <i class="fa fa-refresh" aria-hidden="true"></i> <time class="updated" datetime="%3$s">%4$s</time> )';
    }

    $time_string = sprintf(
        $time_string,
        esc_attr(get_the_date('c')),
        esc_html(get_the_date()),
        esc_attr(get_the_modified_date('c')),
        esc_html(get_the_modified_date())
    );

    $posted_on = sprintf(
        esc_html_x('%s', 'post date', 'placid'),
        $time_string
    );

    echo '<span class="poston">' . $posted_on . '</span>'; // WPCS: XSS OK.

}

/**
 * Inject code to head
 */

function meta_headcustomtags()
{
    $headcustomtag = <<<EOM

<script data-ad-client="ca-pub-1802321652165297" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

EOM;
    echo $headcustomtag;
}
add_action('wp_head', 'meta_headcustomtags', 99);

/**
 * Inject rss image
 */

function rss_post_thumbnail($content)
{
    global $post;
    if (has_post_thumbnail($post->ID)) {
        $content = '<p>' . get_the_post_thumbnail($post->ID) . '</p>' . $content;
    }
    return $content;
}
add_filter('the_excerpt_rss', 'rss_post_thumbnail');
add_filter('the_content_feed', 'rss_post_thumbnail');