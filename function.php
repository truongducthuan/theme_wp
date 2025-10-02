<?php

function get_template_part_with_data($template, $vars = [])
{
  $template_file = locate_template($template . '.php');
  if ($template_file) {
    extract($vars); // makes array keys available as variables
    include $template_file;
  }
}
