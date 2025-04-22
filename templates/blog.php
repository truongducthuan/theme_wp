<?php 
/*Template Name: Blog Page
 * Description: A custom blog page template for the robotics course website.
 */
get_header();

$args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'posts_per_page' => 5, // retrieve all posts
);

$posts = new WP_Query( $args );

$categories = get_categories();
?>

<main class="bg-orange-50">
    <div class="container mx-auto px-4 py-12 max-w-6xl py-8 pt-24 xl:pt-28 ">
        <!-- Header Section -->
        <header class="text-center mb-12">
            <h1 class="text-5xl md:text-6xl font-bold text-brand-orange mb-6">Blog</h1>
            <p class="text-lg md:text-xl text-gray-800 max-w-3xl mx-auto">
                Cảm nhận của học sinh về các dự án robot mà các em đã tham gia
            </p>
        </header>

        <!-- Filter Buttons -->
        <ul class="flex flex-wrap justify-center gap-4 mb-12">
            <?php if (!empty($categories)) : ?>
                        <?php 
                            $index = 0;
                            $colors = ['#fb923c', '#a3e635', '#22d3ee', '#60a5fa', '#f472b6', '#fdba74'];
                            foreach ($categories as $category) : 
                                $random_color = $colors[$index];
                                $index++;
                        ?>
                        <li><a href="<?php echo get_term_link($category, 'category') ?>" style="background-color: <?php echo $random_color; ?>" class="block px-8 py-3 rounded-full text-white font-medium hover:opacity-80 hover:shadow-lg transition"><?php echo $category->name ?></a></li>
                        <?php endforeach; ?>
                    <?php endif; ?>
            <?php 
            // $navs = get_field('nav');
            // if(!empty($navs)) {
            //     foreach($navs as $nav) {
            //         echo '<button 
            //         style="background-color: '.$nav['bg_color'].'" 
            //         class="px-8 py-3 rounded-full text-white font-medium hover:opacity-80 hover:shadow-lg transition">'.$nav['text'].'</button>';
            //     }
            // }
            ?>
        </ul>

        <!-- Blog Posts Grid -->
    <section class="py-12 px-4">
        <div class="container mx-auto max-w-6xl">
            <div class="flex flex-col gap-5 py-8 px-4 bg-white">
                <?php if (!empty($posts->posts)): ?>
                    <?php while ($posts->have_posts()): $posts->the_post(); 
                        $image = get_field('image', get_the_ID());
                    ?>
                        <div class="block">
                            <div class="flex flex-col md:flex-row items-center gap-8 pr-6">
                                <div class="w-full md:w-1/3 overflow-hidden rounded-lg">
                                    <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-full h-64 object-cover rounded-lg hover:scale-105 ease-in-out hover:shadow-xl transition duration-300">
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
    </section>
    </div>

    <!-- Newsletter Section -->
    <section class="py-16 mt-16">
        <div class="container mx-auto px-4 max-w-xl text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Đăng ký nhận tin</h2>
            <p class="text-gray-600 mb-8">
                Nhận thông tin mới nhất về các dự án robot và hoạt động của học sinh
            </p>
            <form class="flex flex-col sm:flex-row gap-4">
                <input 
                    type="email" 
                    placeholder="Email của bạn" 
                    class="flex-grow px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-brand-orange"
                >
                <button 
                    type="submit" 
                    class="px-6 py-3 bg-brand-orange text-white font-medium rounded-lg hover:bg-opacity-80 transition"
                >
                    Đăng ký
                </button>
            </form>
        </div>
    </section>
</main>

<?php get_footer(); ?>