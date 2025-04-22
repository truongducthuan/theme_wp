<?php 
/*Template Name: Course Page
    * Description: A custom course page template for the robotics course website.
*/
get_header();
?>

<?php 
$args = array(
  'post_type' => 'course',
  'post_status' => 'publish',
  'posts_per_page' => 10, // retrieve all posts
);

$posts = new WP_Query( $args );

$image = get_field('image');
$title = get_field('title');
$description = get_field('description');
$courses = get_field('courses');
?>
<main class="bg-white">
    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8 pt-16 md:pt-16 lg:pt-20 xl:pt-28">
        <!-- Page Title -->
        <h1 class="text-4xl md:text-5xl font-bold text-center text-navy my-8">KHÓA HỌC</h1>
        
        <!-- Hero Image -->
        <div class="flex justify-center my-8">
            <div class="bg-gray-100 rounded-lg p-4 w-full max-w-2xl">
                <img src="<?php echo $image; ?>" alt="Children learning robotics" class="w-full h-auto">
            </div>
        </div>
        
        <!-- Courses Section -->
        <section class="my-12">
            <h2 class="text-3xl font-bold text-navy text-center mb-6"><?php echo $title; ?></h2>
            
            <p class="text-lg text-gray-800 mb-10 max-w-4xl mx-auto text-center">
                <?php echo $description; ?>
            </p>
            
            <div class="py-12 px-4">
                <div class="container mx-auto max-w-6xl">
                    <div class="flex flex-col gap-5 py-8 px-4 bg-white">
                        <?php if (!empty($posts->posts)): ?>
                            <?php while ($posts->have_posts()): $posts->the_post(); 
                                $cards = get_field('card',$post->ID);
                            ?>
                                <div class="block">
                                    <div class="flex flex-col md:flex-row items-center gap-8 pr-6">
                                        <div class="w-full md:w-1/3 overflow-hidden rounded-lg">
                                            <img src="<?php echo ($cards['image'] ? $cards['image'] : '') ?>" alt="<?php the_title(); ?>" class="w-full h-64 object-cover rounded-lg hover:scale-105 ease-in-out hover:shadow-xl transition duration-300">
                                        </div>
                                        <div class="w-full md:w-2/3">
                                            <h2 class="text-2xl font-bold mb-4"><?php the_title(); ?></h2>
                                            <p class="text-gray-700 mb-6">
                                                <?php echo wp_trim_words(get_the_excerpt(), 40, '...'); ?>
                                            </p>
                                            <div class="flex justify-end">
                                                <a href="<?php echo get_permalink(); ?>" class="bg-blue-button text-white font-medium py-3 px-8 rounded-md text-center bg-blue-600 hover:opacity-80 transition-opacity">
                                                    Xem chi tiết
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; wp_reset_postdata();?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<?php 
get_footer();
?>