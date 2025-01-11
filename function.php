<?php
function enqueue_tailwind() {
  wp_enqueue_style( 'tailwind-css', get_template_directory_uri() . '/tailwindcss/output.css', array() );
}

app_action('wp_enqueue_scripts', 'enqueue_tailwind');
