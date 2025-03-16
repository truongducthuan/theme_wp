function custom_loader_script() {
    <script>
        window.addEventListener('load', function() {
            // Hide the loader when the page is fully loaded
            document.getElementById('loader').style.display = 'none';
        });

        // Show the loader when the page is loading
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('loader').style.display = 'block';
        });
    </script>
}
add_action('wp_footer', 'custom_loader_script');