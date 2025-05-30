<!-- Main Content Section -->
<?php 
$screen = get_screen_size();
$SCREEN_MOBILE = 768; // Define mobile screen size threshold
$chunkSize = 3; // Number of items per chunk for carousel
if ($screen['width'] < $SCREEN_MOBILE) {
    $chunkSize = 1; // Adjust chunk size for mobile
}

$content = get_field('main_content');
if(!empty($content)):
?>
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <!-- Left Column - Content -->
                <div class="slide-in-left">
                    <h2 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-6 leading-tight">
                        <?php echo esc_html($content['title']); ?>
                    </h2>
                    <div class="space-y-4 text-gray-700 leading-loose">
                        <?php echo wp_kses_post($content['description']); ?>
                    </div>
                    
                    <div class="mt-8">
                        <button class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                            もっと詳しく
                        </button>
                    </div>
                </div>
                
                <!-- Right Column - Image -->
                <div class="slide-in-right">
                    <div class="relative">
                        <img 
                            src="<?php echo esc_url($content['image']); ?>" 
                            alt="Digital Technology Innovation" 
                            class="w-full h-auto rounded-lg shadow-2xl"
                        >
                        <!-- Overlay elements -->
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm rounded-lg p-3 shadow-lg">
                            <div class="flex items-center space-x-2">
                                <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                                <span class="text-sm font-medium text-gray-700">600+ エンジニア</span>
                            </div>
                        </div>
                        
                        <div class="absolute bottom-4 left-4 bg-white/90 backdrop-blur-sm rounded-lg p-3 shadow-lg">
                            <div class="flex items-center space-x-2">
                                <div class="w-3 h-3 bg-blue-500 rounded-full animate-pulse"></div>
                                <span class="text-sm font-medium text-gray-700">革新的ソリューション</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

    <!-- Solutions Section -->
<?php 
$solutions = get_field('solution_section');
if(!empty($solutions)):
?>
<style>
    .bg-solution {
        background-image: url('<?php echo esc_url($solutions['image']); ?>');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
</style>
    <section class="py-12 lg:py-20 bg-solution bg-gradient-to-br from-blue-50 to-indigo-100 relative overflow-hidden">
        <!-- Background decorative elements -->
        <div class="absolute top-0 left-0 w-64 h-64 bg-blue-200 rounded-full opacity-20 -translate-x-32 -translate-y-32"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-purple-200 rounded-full opacity-20 translate-x-48 translate-y-48"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Main Container -->
            <div class="bg-white rounded-3xl shadow-2xl p-8 lg:p-12 fade-in">
                <!-- Section Title -->
                <div class="text-center mb-12">
                    <h2 class="text-2xl lg:text-3xl font-bold text-blue-600 mb-4">
                        <?php echo esc_html($solutions['title']); ?>
                    </h2>
                </div>
                
                <!-- Carousel Container -->
                <div class="relative">
                    <!-- Navigation Arrows -->
                    <button 
                        class="absolute left-0 top-1/2 transform -translate-y-1/2 -translate-x-4 z-10 bg-white rounded-full p-3 shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-110"
                        id="prevBtn"
                    >
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </button>
                    
                    <button 
                        class="absolute right-0 top-1/2 transform -translate-y-1/2 translate-x-4 z-10 bg-white rounded-full p-3 shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-110"
                        id="nextBtn"
                    >
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                    
                    <!-- Carousel Content -->
                    <div class="overflow-hidden">
                        <div class="carousel-container flex" id="carouselContainer">
                            <?php if (!empty($solutions['items']) && is_array($solutions['items'])): 
                                $result = [];
                                $copy = $solutions['items'];
                                $length = count($copy);
                                $dots = ceil($length / $chunkSize); // Calculate number of dots based on items
                                if ($length > $chunkSize) {
                                    $result = array_chunk($copy, $chunkSize);
                                } else {
                                    $result[] = $copy;
                                }

                                foreach ($result as $child): 
                            ?>
                            <div class="w-full flex-shrink-0 px-4">
                                <div class="grid md:grid-cols-3 gap-6">
                                    <?php foreach ($child as $item): ?>
                                    <div class="bg-blue-50 rounded-2xl p-6 border-2 border-blue-200 text-center">
                                        <div class="w-24 h-24 mx-auto mb-4 bg-blue-100 rounded-full flex items-center justify-center">
                                            <?php echo ($item['icon']); ?>
                                        </div>
                                        <h3 class="text-lg font-bold text-gray-900 mb-2"><?php echo esc_html($item['title']); ?></h3>
                                        <p class="text-gray-600 text-sm"><?php echo esc_html($item['description']); ?></p>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <?php endforeach; endif; ?>
                        </div>
                    </div>
                    
                    <!-- Carousel Dots -->
                    <div class="flex justify-center mt-8 space-x-2">
                        <?php for ($i = 0; $i < $dots; $i++) {
                            echo '<button class="carousel-dot carousel-dot-solution w-3 h-3 rounded-full bg-gray-300" data-index="' . $i . '"></button>';
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>