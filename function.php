function my_enqueue_styles() {
    wp_enqueue_style( 'tailwind-css', 'https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css' );
}
add_action( 'wp_enqueue_scripts', 'my_enqueue_styles' );
