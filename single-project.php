<?php 
/*Template Name: Single Project
 * Description: A custom single project page template for the robotics course website.
 */

get_header();
?>

<style>        
        .project-content h3 {
            font-size: 1.25rem;
            font-weight: 600;
            margin-top: 1.25rem;
            margin-bottom: 0.5rem;
        }
        
        .project-content p {
            margin-bottom: 1rem;
            line-height: 1.7;
        }
        
        .project-content ul {
            margin-left: 1.5rem;
            margin-bottom: 1rem;
            list-style-type: disc;
        }
        
        /* Image gallery hover effect */
        .gallery-item {
            overflow: hidden;
        }
        
        .gallery-item img {
            transition: transform 0.5s ease;
        }
        
        .gallery-item:hover img {
            transform: scale(1.05);
        }
        
        /* Progress bar animation */
        @keyframes progress {
            0% { width: 0; }
            100% { width: var(--progress-width); }
        }
        
        .progress-bar {
            animation: progress 1.5s ease-out forwards;
        }
    </style>

<?php 
$info = get_field('information');
$args = array(
  'post_type' => 'project',
  'post_status' => 'publish',
  'posts_per_page' => 5, // retrieve all posts
);

$posts = new WP_Query( $args );
echo '<prev>';
// print_r($posts->posts);
echo '</prev>';
?>

<main class="bg-gray-50">
    <!-- Project Hero Section -->
    <section class="relative">
        <!-- Hero Image -->
        <div class="w-full h-[40vh] md:h-[60vh] overflow-hidden">
            <?php echo get_the_post_thumbnail(get_the_ID(), 'full'); ?>
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
        </div>
        
        <!-- Project Title Overlay -->
        <div class="absolute bottom-0 left-0 right-0 p-6 md:p-12 text-white">
            <div class="container mx-auto">
                <div class="max-w-4xl">
                    <div class="flex items-center mb-4">
                        <?php 
                        $status = get_field('status');
                        ?>
                        <!-- <span class="bg-secondary text-white text-xs font-semibold px-2.5 py-0.5 rounded uppercase">E-COMMERCE</span> -->
                        <span class="ml-2 bg-white text-gray-800 text-xs font-semibold px-2.5 py-0.5 rounded uppercase"><?php echo $status ? $status : 'COMPLETED'; ?></span>
                    </div>
                    
                    <h1 class="text-3xl md:text-5xl font-bold mb-4"><?php the_title(); ?></h1>
                    
                    <div class="flex flex-wrap items-center text-sm md:text-base mb-2">
                        <div class="flex items-center mr-6 mb-2">
                            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span>Thời gian: <?php echo $info['duration']; ?></span>
                        </div>
                        
                        <div class="flex items-center mr-6 mb-2">
                            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <span>Team: <?php echo $info['teams']; ?> thành viên</span>
                        </div>
                        
                        <div class="flex items-center mb-2">
                            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span>Đề tài: <?php echo $info['topic']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="flex flex-col lg:flex-row">
            <!-- Left Column (Project Content) -->
            <div class="lg:w-2/3 lg:pr-12">
                <!-- Project Overview -->
                <section class="mb-12">
                    <?php echo apply_filters('the_content', $post->post_content); ?>
                </section>
                
                <!-- Project Gallery -->
                 <?php 
                 $gallerys = get_field('gallery');
                 ?>
                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6"><?php echo $gallerys['title']; ?></h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Gallery Item 1 -->
                         <?php 
                         if(is_array($gallerys['images'])):
                            foreach($gallerys['images'] as $gallery):
                         ?>
                        <div class="gallery-item bg-white rounded-lg shadow-sm overflow-hidden">
                            <img src="<?php echo $gallery['image']; ?>" alt="Homepage Design" class="w-full h-64 object-cover">
                            <!-- <div class="p-4">
                                <h3 class="font-medium text-gray-900 mb-1">Homepage Redesign</h3>
                                <p class="text-gray-600 text-sm">The new homepage features a cleaner layout with improved category navigation and personalized product recommendations.</p>
                            </div> -->
                        </div>
                        <?php 
                            endforeach;
                        endif;
                        ?>
                </section>
                
                <!-- Design Process -->
                <?php 
                $processes = get_field('process');
                ?>
                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6"><?php echo $processes['title']; ?></h2>
                    
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <div class="space-y-8">
                            <?php 
                            if(is_array($processes['content'])):
                                $index = 0;
                                for($index; $index < count($processes['content']); $index++):
                                    $item = $processes['content'][$index];
                            ?>
                            <div class="flex flex-col md:flex-row">
                                <div class="md:w-1/4 mb-4 md:mb-0">
                                    <div class="flex items-center md:flex-col md:items-start">
                                        <div class="bg-primary text-white rounded-full w-10 h-10 flex items-center justify-center font-bold text-lg mr-4 md:mr-0 md:mb-2"><?php echo $index + 1; ?></div>
                                        <h3 class="font-semibold text-gray-900"><?php echo $item['title']; ?></h3>
                                    </div>
                                </div>
                                <div class="md:w-3/4 md:pl-6">
                                    <?php echo $item['description']; ?>
                                </div>
                            </div>
                            <?php 
                                endfor;
                            endif;
                            ?>
                        </div>
                    </div>
                </section>
                
                <!-- Technologies Used -->
                <?php 
                $technology = get_field('technology');
                ?>
                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6"><?php echo $technology['title']; ?></h2>
                    
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            <?php 
                            if(is_array($technology['tool'])):
                                foreach($technology['tool'] as $tool):
                            ?>
                            <!-- Technology 1 -->
                            <div class="flex flex-col items-center p-4 bg-gray-50 rounded-lg">
                                <img src="<?php echo $tool['image']; ?>" alt="<?php echo $tool['name']; ?>" class="w-full h-64 object-cover" />
                                <span class="text-gray-900 font-medium text-center"><?php echo $tool['name']; ?></span>
                            </div>
                            <?php 
                                endforeach;
                            endif;
                            ?>
                        </div>
                    </div>
                </section>
                
                <!-- Project Team -->
                <?php 
                $teams = get_field('teams');
                ?>
                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6"><?php echo $teams['title']; ?></h2>
                    
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                            <?php 
                            if(is_array($teams['content'])):
                                foreach($teams['content'] as $team):
                            ?>
                            <!-- Team Member 1 -->
                            <div class="flex flex-col items-center text-center">
                                <img src="<?php echo $team['image']; ?>" alt="<?php echo $team['name']; ?>" class="w-24 h-24 rounded-full mb-4">
                                <h3 class="font-semibold text-gray-900"><?php echo $team['name']; ?></h3>
                                <p class="text-gray-600 text-sm"><?php echo $team['role']; ?></p>
                                <div class="flex space-x-2 mt-2">
                                    <?php 
                                    if(is_array($team['contact'])):
                                        foreach($team['contact'] as $item):
                                    ?>
                                    <a href="<?php echo $item['link']; ?>" class="text-gray-400 hover:text-primary">
                                        <?php echo $item['icon']; ?>
                                    </a>
                                    <?php
                                        endforeach;
                                    endif;
                                    ?>
                                </div>
                            </div>
                            <?php 
                                endforeach;
                            endif;
                            ?>
                        </div>
                    </div>
                </section>
            </div>
            
            <!-- Right Column (Sidebar) -->
            <div class="lg:w-1/3 mt-12 lg:mt-0">
                <!-- Sticky Sidebar -->
                <div class="lg:sticky lg:top-24">
                    <!-- Project Details -->
                    <div class="bg-white rounded-lg shadow-sm p-6 mb-8">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Chi tiết dự án</h3>
                        
                        <div class="space-y-3">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-700">Chủ đề</span>
                                <span class="font-medium text-gray-900"><?php echo $info['topic']; ?></span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-700">Team</span>
                                <span class="font-medium text-gray-900"><?php echo $info['teams']; ?> thành viên</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-700">Thời gian</span>
                                <span class="font-medium text-gray-900"><?php echo $info['duration']; ?></span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-700">Thể loại</span>
                                <span class="font-medium text-gray-900"><?php echo $info['type']; ?></span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-700">Giải thưởng</span>
                                <span class="font-medium text-gray-900"><?php echo $info['prize']; ?></span>
                            </div>
                        </div>
                        
                        <div class="mt-6 pt-6 border-t border-gray-200">
                            <a href="<?php echo esc_url('/form'); ?>" class="block w-full btn bg-primary hover:bg-primary-dark text-white text-center py-3 rounded-md font-medium transition mb-3">Đăng ký</a>
                            <a href="<?php echo esc_url('/form'); ?>" class="block w-full btn border border-gray-300 text-gray-700 hover:bg-gray-50 text-center py-3 rounded-md font-medium transition">Liên hệ</a>
                        </div>
                    </div>
                    
                    <!-- Related Projects -->
                    <?php if (!empty($posts->posts)): ?>
                    <div class="bg-white rounded-lg shadow-sm p-6 mb-8">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Dự án liên quan</h3>

                        <div class="space-y-4">
                            <?php 
                            while ($posts->have_posts()): $posts->the_post();
                                // Skip current post
                                if (get_the_ID() == get_queried_object_id()) {
                                    continue;
                                }
                            ?>
                                <a href="<?php echo get_permalink(); ?>" class="flex">
                                    <?php if (has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail('thumbnail', ['class' => 'w-20 h-16 object-cover rounded mr-3']); ?>
                                    <?php else: ?>
                                        <img src="/placeholder.svg?height=80&width=120" alt="Related Project" class="w-20 h-16 object-cover rounded mr-3">
                                    <?php endif; ?>
                                    
                                    <div>
                                        <h4 class="font-medium text-gray-900 mb-1"><?php the_title(); ?></h4>
                                        <p class="text-gray-600 text-sm"><?php echo wp_trim_words(get_the_excerpt(), 5, '...'); ?></p>
                                    </div>
                                </a>
                            <?php 
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>
    
    <!-- Call to Action -->
    <section class="bg-gradient-to-r from-indigo-600 to-indigo-800 text-white py-12">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-4">Sẵn sàng trải nghiệm chưa nào?</h2>
            <p class="text-lg mb-8 max-w-2xl mx-auto">Cùng hợp tác, sáng tạo để mang lại giải pháp cho cộng đồng</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="<?php echo esc_url('/form'); ?>" class="bg-white btn text-indigo-600 hover:bg-gray-100 px-6 py-3 rounded-md font-medium text-lg transition">Bắt đầu dự án</a>
                <a href="<?php echo esc_url('/form'); ?>" class="border btn border-white text-white hover:bg-white hover:bg-opacity-10 px-6 py-3 rounded-md font-medium text-lg transition">Cần giúp đỡ</a>
            </div>
        </div>
    </section>
 
</main>

<?php 
get_footer();
?>