<?php 

get_header();
?>
<?php
$author_id = $post->post_author; // Get author ID
$author_name = get_the_author_meta('display_name', $author_id);
$author_avatar = get_avatar($author_id, 34);

$args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'posts_per_page' => 5, // retrieve all posts
);

$posts = new WP_Query( $args );

$categories = get_the_category($post->ID);
$url = get_field('blog_image', $post->ID);

$banner = get_field('image', $post->ID); // Get the banner image
?>
<main class="bg-gray-50">

    <!-- Main Content -->
    <main class="container mx-auto px-4 sm:px-6 lg:px-8 pb-8 pt-20">
        <div class="max-w-4xl mx-auto">
            <!-- Breadcrumbs -->
            <nav class="text-sm text-gray-500 mb-6">
                <ol class="flex items-center space-x-1">
                    <li><a href="<?php echo esc_url(home_url()); ?>" class="hover:text-primary">Trang chủ</a></li>
                    <li><span class="mx-1">/</span></li>
                    <li><span class="hover:text-primary"><?php the_title(); ?></span></li>
                </ol>
            </nav>
            
            <!-- Blog Post -->
            <article>
                <!-- Post Header -->
                <header class="mb-8">
                    <h1 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4"><?php the_title(); ?></h1>
                    
                    <div class="flex flex-wrap items-center text-gray-600 mb-6">
                        <div class="flex items-center mr-6 mb-2">
                            <?php echo $author_avatar; ?>
                            <span class='pl-2'>By <span class="text-black font-medium capitalize"><?php echo $author_name; ?></span></span>
                        </div>
                        
                        <div class="flex items-center mr-6 mb-2">
                            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <time datetime="<?php echo get_the_date('d/m/Y'); ?>"><?php echo get_the_date('d/m/Y'); ?></time>
                        </div>
                    </div>
                    
                    <div class="flex flex-wrap gap-2 mb-6">
                        <?php 
                        if($categories) {
                            $colors = ['#fb923c', '#a3e635', '#22d3ee', '#60a5fa', '#f472b6', '#fdba74'];
                            $index = 0;
                            foreach($categories as $category) {
                                $random_color = $colors[$index];
                                $index++;
                                echo '<p class="bg-gray-100 text-white text-gray-800 px-3 py-1 rounded-full text-sm font-medium" style="background-color: '. esc_attr($random_color) .';">'. esc_html($category->name) .'</p>';
                            }
                        }
                        ?>
                    </div>
                </header>
                
                <!-- Featured Image -->
                <div class="mb-8 rounded-lg overflow-hidden">
                    <img src="<?php echo $banner; ?>" alt="Web Development" class="w-full h-auto">
                </div>
                
                <!-- Post Content -->
                <div class="blog-content text-gray-800 leading-relaxed">
                    <?php echo apply_filters('the_content', $post->post_content); ?>
                </div>
            </article>
            
            <!-- Social Sharing -->
             <?php 
             $socials = get_field('socials');
             ?>
            <div class="border-t border-b border-gray-200 py-6 my-8">
                <div class="flex flex-wrap items-center justify-between">
                    <div class="mb-4 md:mb-0">
                        <h3 class="text-sm font-medium text-gray-500 mb-2">Share this article</h3>
                        <div class="flex space-x-4">
                            <?php 
                            if(!empty($socials)):
                                foreach($socials as $social):
                            ?>
                            <a href="<?php echo $social['link']; ?>" class="text-gray-400 hover:text-blue-500">
                                <span class="sr-only"><?php $social['name']; ?></span>
                                <?php echo $social['icon']; ?>
                            </a>
                            <?php 
                                endforeach;
                            endif;
                            ?>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <!-- Related Posts -->
            <?php
                if($posts->have_posts()):
            ?>
            <div class="my-12">
                <h2 class="text-2xl font-bold mb-6">Bài viết liên quan</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <?php 
                    if ($posts->have_posts()): 
                        while ($posts->have_posts()): $posts->the_post();
                            // Skip the current post
                            if (get_the_ID() == get_queried_object_id()) {
                                continue;
                            }
                            $image = get_field('image'); // Removed the hardcoded post ID (114)
                            $categories = get_the_category(get_the_ID());
                            $category = !empty($categories) ? $categories[0]->name : '';
                    ?>
                            <!-- Related Post -->
                            <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                                <a href="<?php echo get_permalink(); ?>">
                                    <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-full h-48 object-cover">
                                </a>
                                <div class="p-4">
                                    <a href="<?php echo get_permalink(); ?>" class="text-sm font-medium text-blue-600 hover:text-blue-800">
                                        <?php echo esc_html($category); ?>
                                    </a>
                                    <a href="<?php echo get_permalink(); ?>" class="block mt-2 text-xl font-semibold text-gray-900 hover:text-primary">
                                        <?php the_title(); ?>
                                    </a>
                                    <p class="mt-3 text-gray-500 text-sm">
                                        <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                                    </p>
                                </div>
                            </div>
                    <?php 
                        endwhile;
                        wp_reset_postdata();
                    else:
                    ?>
                        <p class="text-gray-500">No related posts found.</p>
                    <?php 
                    endif;
                    ?>
                    
                </div>
            </div>
            <?php endif; ?>
            
            
            <!-- Newsletter Signup -->
            <div class="bg-blue-50 rounded-lg p-8 my-12">
                <div class="text-center mb-6">
                    <h2 class="text-2xl font-bold text-gray-900 mb-2">Subscribe to our Newsletter</h2>
                    <p class="text-gray-600">Get the latest web development articles, tutorials, and resources straight to your inbox.</p>
                </div>
                <form class="max-w-md mx-auto">
                    <div class="flex flex-col sm:flex-row gap-3">
                        <input type="email" placeholder="Your email address" class="flex-grow px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">
                        <button type="submit" class="px-6 py-2 bg-primary text-white font-medium rounded-md hover:bg-primary-dark transition">Subscribe</button>
                    </div>
                    <p class="text-xs text-gray-500 mt-3 text-center">We respect your privacy. Unsubscribe at any time.</p>
                </form>
            </div>
        </div>
    </main>

</main>

<?php get_footer(); ?>

