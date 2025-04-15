<?php 
/**
 * Template Name: Projects Page
 * Description: A custom projects page template for the robotics course website.
 * */
get_header();
?>

<main class="container mx-auto px-4 py-8 pt-20 xl:pt-28">
    <?php 
    $title = get_field('title');
    $subtitle = get_field('subtitle');
    $projects = get_field('projects');
    ?>
    <!-- Header Section -->
    <header class="bg-brand-orange py-12 px-4">
        <div class="container mx-auto max-w-6xl">
            <h1 class="text-4xl md:text-5xl font-bold text-white text-center mb-4"><?php echo $title; ?></h1>
            <p class="text-center text-gray-600 text-lg max-w-3xl mx-auto">
                <?php echo $subtitle; ?>
            </p>
        </div>
    </header>

    <!-- Projects Grid Section -->
    <section class="py-12 px-4">
        <div class="container mx-auto max-w-6xl">
            <div class="flex flex-col gap-5 py-8 px-4 bg-white">
                <?php if ($projects): ?>
                    <?php foreach ($projects as $project): ?>
                        <div class="block">
                            <div class="flex flex-col md:flex-row items-center gap-8 pr-6">
                                <div class="w-full md:w-1/3 overflow-hidden rounded-lg">
                                    <img src="<?php echo esc_url($project['image']); ?>" alt="<?php echo esc_attr($project['title']); ?>" class="w-full h-64 object-cover rounded-lg hover:scale-105 ease-in-out hover:shadow-xl transition duration-300">
                                </div>
                                <div class="w-full md:w-2/3">
                                    <h2 class="text-2xl font-bold mb-4"><?php echo esc_html($project['title']); ?></h2>
                                    <p class="text-gray-700 mb-6">
                                        <?php echo esc_html($project['subtitle']); ?>
                                    </p>
                                    <div class="flex justify-end">
                                        <a href="<?php echo esc_url($project['url']); ?>" class="bg-blue-button text-white font-medium py-3 px-8 rounded-md text-center bg-blue-600 hover:opacity-80 transition-opacity">
                                            Xem chi tiết
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- More Projects Button -->
    <section class="py-12 px-4 text-center">
        <div class="container mx-auto max-w-6xl">
            <a href="#" class="inline-block bg-orange-300 text-white font-medium py-3 px-8 rounded-md hover:bg-orange-400 transition-colors">
                Xem thêm dự án
            </a>
        </div>
    </section>

</main>

<?php
get_footer();
?>