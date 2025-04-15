<?php 
/*Template Name: Blog Page
 * Description: A custom blog page template for the robotics course website.
 */
get_header();
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
        <div class="flex flex-wrap justify-center gap-4 mb-12">
            <?php 
            $navs = get_field('nav');
            if(!empty($navs)) {
                foreach($navs as $nav) {
                    echo '<button 
                    style="background-color: '.$nav['bg_color'].'" 
                    class="px-8 py-3 rounded-full text-white font-medium hover:opacity-80 hover:shadow-lg transition">'.$nav['text'].'</button>';
                }
            }
            ?>
        </div>

        <!-- Blog Posts Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php 
            $blogs = get_field('blogs');
            if($blogs) {
                foreach($blogs as $blog) { ?>
                    <div class="flex flex-col bg-white shadow-lg rounded-b-2xl">
                        <div class="rounded-t-2xl overflow-hidden mb-6">
                            <img src="<?php echo $blog['image']; ?>" alt="<?php echo $blog['description'] ?>" class="w-full h-80 object-cover hover:scale-105 ease-in-out hover:shadow-xl transition duration-300">
                        </div>
                        <div class="text-lg text-gray-800 leading-relaxed px-5 pb-5">
                            <?php echo $blog['description']; ?>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>

        <!-- Load More Button -->
        <div class="flex justify-center mt-12">
            <button class="px-8 py-3 rounded-full bg-brand-orange text-white font-medium hover:bg-opacity-80 transition">
                Xem thêm
            </button>
        </div>
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