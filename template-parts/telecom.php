<!-- Banner Section -->
<section class="bg-sky-500 pt-32 pb-16">
    <?php 
    $banner = get_field('banner_section');
    ?>
    <div class="max-w-7xl mx-auto px-4">
        <!-- Banner Header -->
        <div class="text-center mb-12">
            <h1 class="text-2xl md:text-4xl font-bold text-white mb-6 leading-tight">
                <?php echo $banner['header']; ?>
            </h1>
            <p class="text-green-200 text-lg md:text-xl mb-2">
                <?php echo $banner['sub_header']; ?>
            </p>
            <p class="text-green-200 text-lg md:text-xl">
            </p>
        </div>

        <!-- Banner Content -->
        <div class="grid md:grid-cols-2 gap-8 items-center">
            <!-- Text Content -->
            <div class="text-white text-base md:text-lg leading-relaxed">
                <p>
                    <?php echo $banner['content']; ?>
                </p>
            </div>

            <!-- Image -->
            <div class="rounded-lg overflow-hidden shadow-lg">
                <img 
                    src="<?php echo $banner['image']; ?>" 
                    alt="Asia Sora Mobile Team" 
                    class="w-full h-auto"
                >
            </div>
        </div>
    </div>
</section>

<section class="max-w-6xl mx-auto px-4 py-16">
        <!-- Section 1: Features -->
        <?php 
            $features = get_field('features_section');
        ?>
        <h1 class="text-2xl md:text-3xl font-bold text-center mb-16"><?php echo $features['header']; ?></h1>
        
        <div class="grid md:grid-cols-2 gap-8 items-center mb-24">
            <!-- Left: Illustration -->
            <div class="order-2 md:order-1">
                <img src="<?php echo $features['image']; ?>" alt="People communicating" class="w-full max-w-md mx-auto">
            </div>
            
            <!-- Right: Content -->
            <div class="order-1 md:order-2">
                <div class="flex items-center mb-4">
                    <div class="text-blue-500 mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h2 class="text-blue-500 text-lg md:text-xl">
                        <?php echo $features['content']['title']; ?>
                    </h2>
                </div>
                
                <p class="text-gray-700 leading-relaxed">
                    <?php echo $features['content']['description']; ?>
                </p>
            </div>
        </div>
        
        <!-- Section 2: Plans (with green background) -->
        <div class="bg-green-300 rounded-xl p-8 mb-24">
            <div class="grid md:grid-cols-2 gap-8 items-center">
            <?php 
                $plans = get_field('plan_section');
            ?>
                <!-- Left: Content -->
                <div>
                    <?php echo $plans['title']; ?>
                    
                    <p class="text-gray-700 leading-relaxed">
                        <?php echo $plans['description']; ?>
                    </p>
                </div>
                
                <!-- Right: Illustration -->
                <div class="flex justify-center">
                    <img src="<?php echo $plans['illustration'] ?>" alt="Pricing plans" class="w-full max-w-md">
                </div>
            </div>
        </div>
        
        <!-- Section 3: Application Process -->
        <div class="grid md:grid-cols-2 gap-8 items-center">
            <?php 
            $application_process = get_field('application_process');
            ?>
            <!-- Left: Illustration -->
            <div>
                <img src="<?php echo $application_process['illustration']; ?>" alt="Application process" class="w-full max-w-md mx-auto">
            </div>
            
            <!-- Right: Content -->
            <div>
                <?php echo $application_process['title']; ?>
                
                <p class="text-gray-700 leading-relaxed">
                    <?php echo $application_process['description']; ?>  
                </p>
            </div>
        </div>
    </section>


    <section class="max-w-6xl mx-auto px-4 pt-6 md:pt-16 pb-16">
    <style>
        .service-card:hover img {
            transform: scale(1.05);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .service-card img {
            transition: all 0.3s ease-in-out;
        }
        
        .service-card:hover {
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .service-card {
            transition: all 0.3s ease-in-out;
            background: linear-gradient(to bottom, #ffffff, #f9fafb);
        }
    </style>
        <?php 
        $internets = get_field('service_internet');
        ?>
        <!-- Header -->
        <h1 class="text-2xl md:text-3xl font-bold text-center mb-4"><?php echo $internets['header']; ?></h1>
        <p class="text-center text-secondary mb-12 max-w-3xl mx-auto">
            <?php echo $internets['sub_header']; ?>
        </p>
        
        <!-- Services Grid -->
        <div class="grid md:grid-cols-3 gap-8">
            <?php 
            if(empty($internets['services'])) return;

            foreach($internets['services'] as $service) {
                echo '<a href="'. $service['link'] .'" class="service-card rounded-xl overflow-hidden shadow-md hover:shadow-xl p-6 bg-white">
                        <div class="flex justify-center mb-6 overflow-hidden rounded-lg">
                            <img src="' . $service['image'] . '" alt="' . $service['title'] . '" class="h-48 object-cover rounded-lg">
                        </div>
                        <h2 class="text-xl font-bold text-center mb-4">' . $service['title'] . '</h2>
                        <p class="text-gray-700 leading-relaxed">' . $service['description'] . '</p>
                    </a>';
            }
            ?>
        </div>
    </section>