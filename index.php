<?php 
/**
 * Template Name: Home Page
 * Description: A custom home page template for the robotics course website.
 */
get_header();

?>

    <!-- Hero Section -->
    <div class="relative overflow-hidden bg-primary">
        <div class="mx-auto">
            <div class="relative z-10 pb-8 sm:pb-16 md:pb-20 lg:pb-28 xl:pb-32">
                <div class="w-full mx-auto">
                    <?php include('template-parts/home-banner.php'); ?>
                </div>
                <!-- Decorative elements -->
                <div class="absolute top-4 right-4 text-white opacity-20 flex flex-col gap-2">
                    <div class="flex space-x-2">
                        <div class="w-2 h-2 rounded-full bg-white"></div>
                        <div class="w-2 h-2 rounded-full bg-white"></div>
                        <div class="w-2 h-2 rounded-full bg-white"></div>
                        <div class="w-2 h-2 rounded-full bg-white"></div>
                    </div>`
                    <div class="flex space-x-2">
                        <div class="w-2 h-2 rounded-full bg-white"></div>
                        <div class="w-2 h-2 rounded-full bg-white"></div>
                        <div class="w-2 h-2 rounded-full bg-white"></div>
                        <div class="w-2 h-2 rounded-full bg-white"></div>
                    </div>
                </div>
                <div class="absolute bottom-4 left-4 text-white opacity-20 flex flex-col gap-2">
                    <div class="flex space-x-2">
                        <div class="w-2 h-2 rounded-full bg-white"></div>
                        <div class="w-2 h-2 rounded-full bg-white"></div>
                        <div class="w-2 h-2 rounded-full bg-white"></div>
                        <div class="w-2 h-2 rounded-full bg-white"></div>
                    </div>
                    <div class="flex space-x-2">
                        <div class="w-2 h-2 rounded-full bg-white"></div>
                        <div class="w-2 h-2 rounded-full bg-white"></div>
                        <div class="w-2 h-2 rounded-full bg-white"></div>
                        <div class="w-2 h-2 rounded-full bg-white"></div>
                    </div>
                </div>
                
                <div class="absolute top-10 right-10 hidden md:block">
                    <div class="w-20 h-20 rounded-full flex items-center justify-center">
                        <svg width="500" height="500" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                        <!-- Background (optional) -->
                        <rect width="500" height="500" fill="none"/>

                        <!-- Saturn planet -->
                        <circle cx="100" cy="100" r="40" fill="#F5C518" stroke="#DAA520" stroke-width="3"/>

                        <!-- Rings of Saturn -->
                        <ellipse cx="100" cy="100" rx="70" ry="20" fill="none" stroke="#C2B280" stroke-width="3"/>

                        <!-- Ring inner shading (to give depth) -->
                        <!-- <ellipse cx="100" cy="100" rx="70" ry="20" fill="none" stroke="#A79864" stroke-width="2" stroke-dasharray="4 4"/> -->

                        <!-- Optional shadow (behind the planet for depth) -->
                        <ellipse cx="105" cy="105" rx="40" ry="12" fill="rgba(0, 0, 0, 0.1)" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Special Courses Section -->
    <?php 
    include('template-parts/home-course.php');
    ?>

    <!-- Student Projects Section -->
    <?php 
    include('template-parts/home-project.php');
    ?>

<?php get_footer(); ?>