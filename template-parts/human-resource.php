<section class="pt-28 pb-5 md:pb-16 px-4">
        <div class="max-w-5xl mx-auto">
            <!-- Main Heading -->
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    <?php echo get_field('main_header'); ?>
                </h2>
                <p class="text-blue-600 text-lg">
                   <?php echo get_field('sub_header'); ?>
                </p>
            </div>

            <!-- Service Details Heading -->
            <div class="text-center mb-32 md:mb-16">
                <h3 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">
                    <?php echo get_field('title'); ?>
                </h3>
                <p class="text-gray-600">
                    <?php echo get_field('subtitle'); ?>
                </p>
            </div>

            <?php 
            $services = get_field('services');
            ?>

            <?php 
            if(empty($services)) return;
            $num = 0;
            foreach ($services as $service) {
                $num++;
            ?>
                <div class="relative overflow-visible flex mb-32 md:mb-16 flex-col md:flex-row items-cente <?php echo $num % 2 != 0 ? 'justify-end' : 'justify-start' ?> mb-12 bg-white rounded-3xl border border-blue-200 shadow-sm">
                    <div class="absolute <?php echo $num % 2 == 0 ? 'right-1/2 md:right-0 translate-x-1/2 md:translate-x-1/4' : 'left-1/2 md:left-0 -translate-x-1/2 md:-translate-x-1/4' ?>  top-0 md:top-1/2 transform -translate-y-1/2 md:w-1/4 p-6 flex justify-center">
                        <div class="bg-blue-600 rounded-full p-6 w-48 h-48 flex items-center justify-center">
                            <img src="<?php echo $service['image']; ?>" alt="Education Service" class="w-32 h-32 object-contain">
                        </div>
                    </div>
                    <div class="md:w-5/6 pt-28 md:pt-6 <?php echo $num % 2 == 0 ? 'pr-6 md:pr-12 pb-6 pl-6' : 'pl-6 md:pl-12 pb-6 pr-6' ?>">
                        <p class="text-gray-700 leading-relaxed textOverflowDots">
                            <?php echo $service['content']; ?>
                        </p>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </section>