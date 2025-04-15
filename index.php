<?php 
/**
 * Template Name: Home Page
 * Description: A custom home page template for the robotics course website.
 */
get_header();
?>
    <?php
    $banner = get_field('banner');
    ?>
    <!-- Hero Section -->
    <div class="relative bg-robot-blue overflow-hidden">
        <div class="max-w-7xl mx-auto pt-20 xl:pt-28">
            <div class="relative z-10 pb-8 bg-robot-blue sm:pb-16 md:pb-20 lg:pb-28 xl:pb-32">
                <div class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <div class="flex flex-col md:flex-row items-center">
                            <div class="w-full md:w-1/2 mb-8 md:mb-0">
                                <?php if ($banner) : 
                                    echo $banner['title'];
                                endif;    
                                ?>
                                <div class="mt-8 sm:mt-12">
                                    <div class="rounded-md mr-0 md:mr-36">
                                        <a href="<?php echo esc_url('/form') ?>" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-full text-black bg-yellow-500 hover:bg-yellow-400 md:py-4 md:text-lg md:px-10">
                                            ĐĂNG KÝ HỌC NGAY
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full md:w-1/2">
                                <img class="h-auto w-full object-cover" src="<?php echo $banner['image']; ?>" alt="Children learning robotics">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Decorative elements -->
                <div class="absolute top-4 right-4 text-white opacity-20 flex flex-col gap-2">
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
    $courses = get_field('course_special');
    ?>
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    CÁC KHÓA HỌC ĐẶC BIỆT
                </h2>
            </div>

            <div class="mt-12 grid gap-8 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
                <?php
                if($courses) {
                    foreach($courses as $course) {
                        echo '<a href="'. $course['url'] .'" class="rounded-lg shadow-lg overflow-hidden hover:scale-105 ease-in-out hover:shadow-xl transition duration-300" style="background-color: rgba('
                            . $course['bg_color']['red'] . ', '
                            . $course['bg_color']['green'] . ', '
                            . $course['bg_color']['blue'] . ', '
                            . $course['bg_color']['alpha'] . ');"
                        >
                                <div class="px-6 py-8 text-center">
                                    <div class="mx-auto h-20 w-20 flex items-center justify-center">
                                        '. $course['icon'] .'
                                    </div>
                                    <h3 class="mt-4 text-3xl font-bold text-white">'. $course['title'] .'</h3>
                                    <p class="mt-1 text-xl text-white">'. $course['subtitle'] .'</p>
                                </div>
                            </a>';
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Student Projects Section -->
    <?php 
    $students = get_field('student_section');
    ?>
    <div class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    DỰ ÁN CỦA HỌC SINH
                </h2>
            </div>

            <div class="mt-12 grid gap-8 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
                <?php 
                if($students) {
                    foreach($students as $student) {
                        echo '<a href="'.esc_url($student['url']).'" class="bg-white rounded-lg shadow-md overflow-hidden hover:scale-105 ease-in-out hover:shadow-xl transition duration-300">
                                <div class="h-48 w-full overflow-hidden">
                                    <img class="w-full h-full object-cover" src="' . $student['image'] . '" alt="' . $student['title'] . '">
                                </div>
                                <div class="p-6">
                                    <h3 class="text-lg font-medium text-gray-900">' . $student['title'] . '</h3>
                                </div>
                            </a>';
                    }
                }
                ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>