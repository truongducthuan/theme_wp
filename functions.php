<?php

function inject_screen_resize_listener() {
    ?>
    <script>
    (function () {
        function updateScreenSizeCookie() {
            const screenSize = `${screen.width}x${screen.height}`;
            document.cookie = `screen_size=${screenSize}; path=/; max-age=86400`;
        }

        updateScreenSizeCookie();

        window.addEventListener('resize', () => {
            updateScreenSizeCookie();
        });
    })();
    </script>
    <?php
}
add_action('wp_footer', 'inject_screen_resize_listener');

function get_screen_size() {
    print_r('get_screen_size', isset($_COOKIE['screen_size'])); // Debugging line to check function call

    if (isset($_COOKIE['screen_size'])) {
        $screen_size = sanitize_text_field($_COOKIE['screen_size']);
        if (preg_match('/^(\d{2,5})x(\d{2,5})$/', $screen_size, $matches)) {
            return [
                'width' => (int) $matches[1],
                'height' => (int) $matches[2],
            ];
        }
    }
    return [
        'width' => null,
        'height' => null,
    ];
}

