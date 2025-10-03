<?php

function get_template_part_with_data($template, $vars = [])
{
  $template_file = locate_template($template . '.php');
  if ($template_file) {
    extract($vars); // makes array keys available as variables
    include $template_file;
  }
}

function my_search_redirect()
{
  $blog_page_id  = get_option('page_for_posts');
  $blog_page_url = get_permalink($blog_page_id);

  if (is_page($blog_page_id) && isset($_GET['s'])) {
    wp_redirect(add_query_arg('s', urlencode(get_query_var('s')), $blog_page_url));
    exit;
  }
}
add_action('template_redirect', 'my_search_redirect');
