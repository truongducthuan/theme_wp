function my_enqueue_styles() {
    wp_enqueue_style( 'tailwind-css', 'https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css' );
}
add_action( 'wp_enqueue_scripts', 'my_enqueue_styles' );


function custom_loader_script() {
    <script>
        jQuery(window).on('load', function() {
            // Hide the loader when the page is fully loaded
            jQuery('#loader').fadeOut('slow');
        });

        // Show the loader when the page is loading
        jQuery(document).ready(function() {
            jQuery('#loader').show();
        });
    </script>
}
add_action('wp_footer', 'custom_loader_script');
