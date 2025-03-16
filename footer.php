<footer class="bg-[#1a1f36] text-white py-16">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Logo and Social Media -->
                <div class="space-y-6">
                    <div class="flex flex-col items-start">
                        <img src="<?php echo get_field('logo'); ?>" alt="Logo" class="w-24 h-24 mb-2">
                    </div>
                    <div class="flex space-x-4">
                        <a href="#" class="hover:text-blue-400 transition-colors">
                            <i class="fab fa-facebook-f text-2xl"></i>
                        </a>
                        <a href="#" class="hover:text-blue-400 transition-colors">
                            <i class="fab fa-twitter text-2xl"></i>
                        </a>
                        <a href="#" class="hover:text-blue-400 transition-colors">
                            <i class="fab fa-instagram text-2xl"></i>
                        </a>
                    </div>
                </div>

                <?php 
                $footer_links = get_field('footer_links');
                foreach ($footer_links as $link) {
                    echo '<div>';
                    echo '<h3 class="text-xl font-bold mb-6">' . $link['title'] . '</h3>';
                    echo '<ul class="space-y-4">';
                    foreach ($link['links'] as $sublink) {
                        echo '<li>';
                        echo '<a href="' . $sublink['url'] . '" class="hover:text-blue-400 transition-colors">' . $sublink['name'] . '</a>';
                        echo '</li>';
                    }
                    echo '</ul>';
                    echo '</div>';
                }
                ?>
            </div>

            <!-- Copyright -->
            <div class="mt-16 pt-8 border-t border-gray-700">
                <p class="text-center text-sm text-gray-400">
                    ©2023 Asia Sora. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    <script>
        // scroll top
        $('#scroll_top').click(function (e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, 'slow');
        })
    </script>
</body>
</html>
