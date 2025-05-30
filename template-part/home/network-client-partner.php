    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;600;700&display=swap');
        body {
            font-family: 'Noto Sans JP', sans-serif;
        }
        .network-circle {
            width: 400px;
            height: 400px;
            position: relative;
            /* gap: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column; */
        }
        .network-quadrant {
            position: absolute;
            width: 50%;
            height: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }
        
        .quadrant-1 {
            top: 0;
            left: 0;
            border-top-left-radius: 200px;
            padding-left: 3.5rem;
            padding-right: 1rem;
            border-right: 1px solid #fff;
            border-bottom: 1px solid #fff;
            background: linear-gradient(135deg, #bfdbfe 0%, #93c5fd 100%);
        }
        .quadrant-1:hover {
            transform: translate(-10%, -10%);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
        .quadrant-2 {
            top: 0;
            right: 0;
            border-top-right-radius: 200px;
            padding-right: 3.5rem;
            padding-left: 1rem;
            border-left: 1px solid #fff;
            border-bottom: 1px solid #fff;
            background: linear-gradient(225deg, #bfdbfe 0%, #93c5fd 100%);
        }
        .quadrant-2:hover {
            transform: translate(10%, -10%);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
        .quadrant-3 {
            bottom: 0;
            left: 0;
            padding-left: 3.5rem;
            padding-right: 1rem;
            border-top: 1px solid #fff;
            border-right: 1px solid #fff;
            border-bottom-left-radius: 200px;
            background: linear-gradient(45deg, #bfdbfe 0%, #93c5fd 100%);
        }
        .quadrant-3:hover {
            transform: translate(-10%, 10%);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
        .quadrant-4 {
            bottom: 0;
            right: 0;
            padding-right: 3.5rem;
            padding-left: 1rem;
            border-top: 1px solid #fff;
            border-left: 1px solid #fff;
            border-bottom-right-radius: 200px;
            background: linear-gradient(315deg, #bfdbfe 0%, #93c5fd 100%);
        }
        .quadrant-4:hover {
            transform: translate(10%, 10%);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
        .client-logo {
            transition: all 0.3s ease;
        }
        .client-logo:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
    </style>
    <!-- ActiveLabo Network Section -->
    <?php 
    $networks = get_field('netword_section');
    if (!empty($networks)):
    ?>
    <section class="py-16 lg:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Title -->
            <div class="text-center mb-16 fade-in">
                <h1 class="text-3xl lg:text-4xl font-bold text-blue-600 mb-8">
                    <?php echo esc_html($networks['title']); ?>
                </h1>
                
                <!-- Network Circle -->
                <div class="flex justify-center mb-8">
                    <div class="network-circle relative">
                        <?php 
                        $index = 0;
                        if (!empty($networks['items']) && is_array($networks['items'])):
                            foreach ($networks['items'] as $item):
                                $index++;
                        ?>
                        <div class="network-quadrant quadrant-<?php echo $index; ?> cursor-pointer">
                            <img src="<?php echo esc_url($item['logo']); ?>" alt="Client Logo" class="w-full object-cover" />
                        </div>
                        <?php 
                            endforeach;
                        endif;
                        ?>
                        
                        <!-- Center Circle -->
                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-20 h-20 bg-white rounded-full border-4 border-blue-200 flex items-center justify-center">
                            <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    
    <!-- Client Trust Section -->
    <?php 
    $clients = get_field('trust_clients');
    if (!empty($clients)):
    ?>
    <section class="py-16 lg:py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Title -->
            <div class="text-center mb-16 slide-in">
                <h2 class="text-2xl lg:text-3xl font-bold text-blue-600 mb-8">
                    <?php echo esc_html($clients['title']); ?>
                </h2>
                
                <!-- Client Logos Grid -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 lg:gap-8">
                    <?php 
                    if (!empty($clients['logos']) && is_array($clients['logos'])):
                        foreach ($clients['logos'] as $logo):
                    ?>
                    <div class="client-logo bg-white border-2 border-gray-200 rounded-lg p-6 lg:p-8 flex items-center justify-center cursor-pointer">
                        <img src="<?php echo esc_url($logo['image']); ?>" alt="logo" class="w-full h-auto max-h-16 lg:max-h-20 object-contain" />
                    </div>
                    <?php 
                        endforeach;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Carousel Section -->
    <?php 
    $carousels = get_field('carousel_content');
    if (!empty($carousels)):
    ?>
    <section class="py-16 lg:py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative">
                <!-- Navigation Arrows -->
                <button 
                    class="absolute left-0 top-1/2 transform -translate-y-1/2 -translate-x-4 z-10 bg-white rounded-full p-3 shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-110"
                    id="prevBtnParnter"
                >
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                
                <button 
                    class="absolute right-0 top-1/2 transform -translate-y-1/2 translate-x-4 z-10 bg-white rounded-full p-3 shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-110"
                    id="nextBtnParntner"
                >
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
                
                <!-- Carousel Content -->
                <div class="overflow-hidden rounded-2xl">
                    <div class="carousel-container flex" id="carouselParntner">
                        <?php 
                        if(is_array($carousels) && count($carousels) > 0):
                            $colors = ['blue', 'green', 'yellow', 'red', 'purple', 'pink'];
                            $index = 0;
                            foreach ($carousels as $slide):
                        ?>
                        <div class="w-full flex-shrink-0">
                            <div class="bg-<?php echo $colors[$index]; ?>-200 rounded-2xl p-12 lg:p-16 text-center min-h-[300px] flex items-center justify-center">
                                <div>
                                    <h3 class="text-2xl lg:text-3xl font-bold text-blue-800 mb-4">
                                        <?php echo esc_html($slide['title']); ?>
                                    </h3>
                                    <p class="text-blue-700 text-lg">
                                        <?php echo esc_html($slide['description']); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php 
                                $index = ($index + 1) % count($colors);
                            endforeach;
                        endif;
                        ?>
                    </div>
                </div>
                
                <!-- Carousel Dots -->
                <div class="flex justify-center mt-8 space-x-2">
                    <?php 
                    for ($i = 0; $i < count($carousels); $i++):
                        echo '<button class="carousel-dot carousel-dot-partner w-3 h-3 rounded-full bg-gray-300" data-index="' . $i . '"></button>';
                    endfor;
                    ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    
