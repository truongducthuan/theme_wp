<?php 
/* Template Name: Course Blog */
get_header();
?>

<style>
    .course-content h3 {
            font-size: 1.25rem;
            font-weight: 600;
            margin-top: 1.25rem;
            margin-bottom: 0.5rem;
        }
        
        .course-content p {
            margin-bottom: 1rem;
            line-height: 1.7;
        }
        
        .course-content ul {
            margin-left: 1.5rem;
            margin-bottom: 1rem;
            list-style-type: disc;
        }
        
        /* Accordion styles */
        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }
        
        .accordion-content.active {
            max-height: 1000px;
        }
        
        /* Progress bar animation */
        @keyframes progress {
            0% { width: 0; }
            100% { width: var(--progress-width); }
        }
        
        .progress-bar {
            animation: progress 1.5s ease-out forwards;
        }

        iframe {
            width: 500px;
            height: 260px;
            border: none;
        }
</style>

<?php 
$author_id = $post->post_author; // Get author ID
$author_name = get_the_author_meta('display_name', $author_id);
$author_avatar = get_avatar($author_id, 64); // Get author avatar
$categories = get_the_category();

$args = array(
  'post_type' => 'course',
  'post_status' => 'publish',
  'posts_per_page' => 5, // retrieve all posts
);

$posts = new WP_Query( $args );

$status = get_field('status_course');
$banner = get_field('banner');

$card = get_field('card');

// echo '<h1 class="pt-1000">hello</h1>';
echo '<prev>';
// print_r($posts->posts);
echo '</prev>';
?>

<main>
     <!-- Course Hero Section -->
    <section class="bg-gradient-to-r from-indigo-600 to-indigo-800 text-white py-12 md:py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-center">
                <div class="md:w-1/2 md:pr-12">
                    <div class="flex items-center mb-4">
                        <span class="bg-yellow-400 text-yellow-800 text-xs font-semibold px-2.5 py-0.5 rounded uppercase"><?php echo $status; ?></span>
                        <span class="ml-2 bg-white text-indigo-600 text-xs font-semibold px-2.5 py-0.5 rounded">Cập nhập từ <?php echo get_the_date('Y'); ?></span>
                    </div>
                    
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4"><?php the_title(); ?></h1>
                    
                    <p class="text-lg md:text-xl mb-6"><?php echo $banner ? $banner['slogan'] : '' ?></p>
                    
                    <div class="flex flex-wrap items-center text-sm md:text-base mb-6">
                        <div class="flex items-center mr-6 mb-2">
                            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                            <span><?php echo $banner ? $banner['number_students'] : '' ?> Học viên</span>
                        </div>
                        
                        <div class="flex items-center mb-2">
                            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Tổng thời gian trong <?php echo $banner ? $banner['total_time'] : '' ?></span>
                        </div>
                    </div>
                    
                    <div class="flex items-center mb-6">
                        <div class="w-10">
                            <?php echo $author_avatar; ?>
                        </div>
                        <div class="ml-3">
                            <p class="font-medium">Tạo bởi</p>
                            <p class="text-indigo-200"><?php echo $author_name; ?></p>
                        </div>
                    </div>
                    
                    <div class="flex items-center text-sm mb-6">
                        <div class="flex items-center mr-4">
                            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span>Cập nhập: <?php echo get_the_date('d/m/Y'); ?></span>
                        </div>
                    </div>
                </div>
                
                <!-- Course Card -->
                <div class="md:w-1/2 mt-8 md:mt-0">
                    <div class="bg-white rounded-lg shadow-xl overflow-hidden max-w-md mx-auto">
                        <div class="">
                            <div class="h-[260px] w-[600px] overflow-hidden">
                                <?php echo '<img src="'.$card['image'].'" alt="image course" class="object-cover w-full" />' ?>
                            </div>
                            <!-- <div class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center"> -->
                                <!-- <button class="bg-white rounded-full p-4 shadow-lg hover:bg-gray-100 transition">
                                    <svg class="w-8 h-8 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                                    </svg>
                                </button> -->
                            <!-- </div> -->
                        </div>
                        
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-6">
                                <div class="text-3xl font-bold text-gray-900"><?php echo $card['discount'] ?></div>
                                <div class="text-lg text-gray-500 line-through"><?php echo $card['origin_price'] ?></div>
                            </div>
                            
                            <div class="mb-6">
                                <div class="flex items-end justify-end text-sm mb-1">
                                    <!-- <span class="font-medium">55% off</span> -->
                                    <span class="text-red-600 text-end font-medium">đăng ký trong 2 ngày với giá này!</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-red-600 h-2 rounded-full progress-bar" style="--progress-width: 15%"></div>
                                </div>
                            </div>
                            
                            <a href="<?php echo esc_url('form'); ?>" class="block btn text-center w-full bg-primary hover:bg-primary-dark text-white py-3 rounded-md font-medium transition mb-4">Đăng ký ngay</a>
                            
                            <a href="<?php echo esc_url('form'); ?>" class="block text-center w-full border border-gray-300 text-gray-700 hover:bg-gray-50 py-3 rounded-md font-medium transition mb-6">Học thử miễn phí</a>
                            
                            <!-- <div class="text-center text-sm text-gray-500 mb-4">30-Day Money-Back Guarantee</div> -->
                            
                            <div class="border-t border-gray-200 pt-4">
                                <h3 class="font-medium text-gray-900 mb-2">Khoá học bao gồm:</h3>
                                <ul class="space-y-2 text-sm text-gray-500">
                                    <?php 
                                    if(!empty($card['includes'])) {
                                        foreach($card['includes'] as $include) {
                                            echo $include['content'];
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="flex flex-col lg:flex-row">
            <!-- Left Column (Course Content) -->
            <div class="lg:w-2/3 lg:pr-12">
                <!-- What You'll Learn -->
                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Những gì bạn đặt được sau khoá học</h2>
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <?php 
                            $received = get_field('received');
                            if(!empty($received)) {
                                foreach($received as $item) {
                                    echo $item['content'];
                                }
                            }
                            ?>
                        
                        </div>
                    </div>
                </section>
                
                <!-- Course Description -->
                <section class="mb-12">
                    <?php echo apply_filters('the_content', $post->post_content); ?>
                </section>
                
                <!-- Course Curriculum -->
                <?php 
                $curriculum = get_field('curriculum');
                ?>
                <section class="mb-12">
                    <?php 
                    if(!empty($curriculum)):
                    ?>
                    <h2 class="text-2xl font-bold text-gray-900 mb-6"><?php echo $curriculum['title']; ?></h2>
                    
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                        <?php 
                        foreach($curriculum['content'] as $section):
                        ?>
                        <!-- Section Header -->
                        <div class="p-4 bg-gray-50 border-b border-gray-200 curriculum_header">
                            <div class="flex justify-between items-center">
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900"><?php echo $section['text']; ?></h3>
                                    <p class="text-sm text-gray-500"><?php echo $section['time']; ?></p>
                                </div>
                                <button class="accordion-toggle text-primary hover:text-primary-dark" data-section="section1">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- Section Content -->
                        <div class="accordion-content curriculum_content">
                            <?php
                            foreach($section['content'] as $content):
                            ?>
                            <div class="p-4 border-b border-gray-200">
                                <div class="flex items-start">
                                    <div>
                                        <div class="flex items-center justify-between gap-2">
                                            <h4 class="font-medium text-gray-900"><?php echo $content['title']; ?></h4>
                                            <span class="text-sm text-gray-500"><?php echo $content['time']; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </section>
                
                <!-- Requirements -->
                <?php 
                $requirements = get_field('requirement');
                ?>
                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6"><?php echo $requirements['title']; ?></h2>
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <ul class="space-y-3 text-gray-700">
                            <?php 
                            if(!empty($requirements['content'])) {
                                foreach($requirements['content'] as $requirement) {
                                    echo '
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-gray-500 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>'.$requirement['content'].'</span>
                                    </li>
                                    ';
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </section>
                
                <!-- Instructor -->
                <?php 
                $intructor = get_field('instructor');
                ?>
                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6"><?php echo $intructor['title']; ?></h2>
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <div class="flex flex-col sm:flex-row">
                            <div class="sm:w-1/4 mb-4 sm:mb-0">
                                <img src="<?php echo $intructor['image']; ?>" alt="<?php echo $intructor['name']; ?>" class="w-32 h-32 rounded-full mx-auto sm:mx-0">
                            </div>
                            <div class="sm:w-3/4 sm:pl-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-2"><?php echo $intructor['name']; ?></h3>
                                <p class="text-gray-500 mb-4"><?php echo $intructor['role']; ?></p>
                                
                                <p class="text-gray-700 mb-4"><?php echo $intructor['description']; ?></p>
                                                                
                                <div class="flex space-x-4">
                                    <?php
                                    if(!empty($intructor['socials'])) {
                                        foreach($intructor['socials'] as $social) {
                                            echo '
                                            <a href="'.$social['link'].'" class="text-primary hover:text-primary-dark">
                                                '.$social['icon'].'
                                            </a>
                                            ';
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- FAQ Section -->
                <?php 
                $qas = get_field('q&a');
                ?>
                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6"><?php echo $qas['title']; ?></h2>
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <div class="space-y-4">
                            <?php 
                            if(!empty($qas['content'])) {
                                foreach($qas['content'] as $qa) {
                                    echo '
                                    <div class="border-b border-gray-200 pb-4">
                                        <button class="flex justify-between items-center accordion-toggle w-full text-left font-medium text-gray-900 qa-toggle">
                                            <span>'.$qa['q'].'</span>
                                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                            </svg>
                                        </button>
                                        <div class="mt-2 text-gray-700 accordion-content qa-content">
                                            <p>'.$qa['a'].'</p>
                                        </div>
                                    </div>
                                    ';
                                }
                            }
                            ?>
                        </div>
                    </div>
                </section>
            </div>
            
            <!-- Right Column (Sidebar) -->
            <div class="lg:w-1/3 mt-12 lg:mt-0">
                <!-- Sticky Sidebar -->
                <div class="lg:sticky lg:top-24">
                    <!-- Related Courses -->
                    <div class="bg-white rounded-lg shadow-sm p-6 mb-8">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Các khoá học tương tự</h3>
                        
                        <div class="space-y-4">
                            <?php 
                            if(!empty($posts->posts)) {
                                foreach($posts->posts as $post) {
                                    $cards = get_field('card',$post->ID);
                                    ?>
                                    <a href="<?php echo esc_url($post->guid); ?>" class="flex">
                                        <img src="<?php echo ($cards['image'] ? $cards['image'] : '') ?>" alt="React Course" class="w-20 h-16 object-cover rounded mr-3">
                                        <div>
                                            <h4 class="font-medium text-gray-900 mb-1"><?php echo $post->post_title; ?></h4>
                                            <div class="flex items-center text-sm">
                                                <span class="text-gray-500"><?php echo $cards['discount']; ?></span>
                                            </div>
                                        </div>
                                    </a>
                                    <?php
                                }
                            }
                            ?>
                        </div>

                    </div>
                    
                    <!-- Course Tags -->
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Course Tags</h3>
                        
                        <div class="flex flex-wrap gap-2">
                            <?php 
                            if(!empty($categories)) {
                                foreach($categories as $category) {
                                    echo '<a href="'.get_category_link($category->term_id).'" class="bg-gray-100 hover:bg-gray-200 text-gray-800 px-3 py-1 rounded-full text-sm">'.$category->name.'</a>';
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <!-- Call to Action -->
    <section class="bg-gradient-to-r from-indigo-600 to-indigo-800 text-white py-12">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-4">Ready to Master JavaScript?</h2>
            <p class="text-lg mb-8 max-w-2xl mx-auto">Join over 18,000 students who have transformed their careers with this comprehensive JavaScript course.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="<?php echo esc_url('/form'); ?>" class="bg-white text-indigo-600 hover:bg-gray-100 px-6 py-3 rounded-md font-medium text-lg transition">Enroll Now</a>
                <a href="<?php echo esc_url('/form'); ?>" class="border border-white text-white hover:bg-white hover:bg-opacity-10 px-6 py-3 rounded-md font-medium text-lg transition">Try Free Preview</a>
            </div>
        </div>
    </section>
</main>

<script>
    // handle toggle curriculum
    document.querySelectorAll('.curriculum_header').forEach(header => {
    header.addEventListener('click', () => {
        const content = header.nextElementSibling; // Get the next sibling element
        if (content && content.classList.contains('curriculum_content')) {
            content.classList.toggle('active'); // Toggle the 'active' class
        }
    });
    });

    // handle toggle FAQ
    document.querySelectorAll('.qa-toggle').forEach(toggle => {
        toggle.addEventListener('click', () => {
            const content = toggle.nextElementSibling; // Get the next sibling element
            if (content && content.classList.contains('qa-content')) {
                content.classList.toggle('active'); // Toggle the 'active' class
            }
        });
    });
</script>

<?php get_footer(); ?>