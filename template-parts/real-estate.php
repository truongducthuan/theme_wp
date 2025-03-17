<?php
$banner = get_field('banner_section');
?>
    <section class="pt-16 md:pt-24 bg-gradient-to-r from-blue-400 to-blue-600">
        <div class="max-w-7xl mx-auto px-6 py-16">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="text-white">
                    <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6">
                        <?php echo $banner['title']; ?>
                    </h1>
                    <p class="text-lg mb-8 text-blue-50">
                        <?php echo $banner['sub_title']; ?>
                    </p>
                </div>
                <div class="rounded-lg overflow-hidden shadow-xl">
                    <img src="<?php echo $banner['image']; ?>" alt="Office Environment" class="w-full">
                </div>
            </div>
        </div>
    </section>


<?php
$supports = get_field('support_section');
?>
    <section class="max-w-6xl mx-auto px-4 py-16 flex flex-col items-center">
        <h1 class="text-2xl md:text-3xl font-bold text-center mb-4"><?php echo $supports['title']; ?></h1>
        <div>
            <img src="<?php echo $supports['image']; ?>" alt="Office Environment" />
        </div>
    </section>

    <!-- Support Services Section -->
<?php
$services = get_field('service_section');
?>
    <section class="bg-[#00ffc3] py-16">
        <div class="max-w-6xl mx-auto px-4">
            <!-- Header -->
           <h1 class="text-2xl md:text-3xl font-bold text-center mb-4"><?php echo $services['title']; ?></h1>
           <p class="text-center text-gray-700 mb-12 max-w-3xl mx-auto">
               <?php echo $services['sub_title']; ?>
           </p>
           <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
               <?php 
               if(empty($services['content'])) return;
               $num = 1;
               foreach($services['content'] as $service) {
                $num++;
                   echo '
                       <div class="flex flex-col items-center">
                           <div class="mb-6 h-64 flex items-center justify-center ' . ($num % 2 == 0 ? 'order-1' : 'order-1 md:order-2') . '">
                               <img src="' . $service['image'] . '" alt="家の周りを見る" class="h-full object-contain">
                           </div>
                           <p class="text-center text-lg max-w-xs ' . ($num % 2 == 0 ? 'order-2' : 'order-2 md:order-1') . '">
                               ' . $service['title'] . '
                           </p>
                       </div>
                   ';
               }
               ?>
           </div>
        </div>
    </section>
    
    <!-- Bottom Section -->
<?php 
$contacts = get_field('form_contact');
?>
    <section class="max-w-6xl mx-auto px-4 py-16 bg-white">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <!-- Left: House Illustrations -->
            <div class="flex justify-center">
                <img src="<?php echo $contacts['image']; ?>" alt="様々な物件" class="max-w-full h-auto">
            </div>
            
            <!-- Right: Text and Button -->
            <div class="flex flex-col items-center">
                <p class="text-lg md:text-xl text-center md:text-left mb-8 max-w-lg">
                    <?php echo $contacts['title']; ?>
                </p>
                <a href="#contact" class="bg-blue-700 hover:bg-blue-800 text-white font-medium py-3 px-8 rounded-full inline-flex items-center transition-colors duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    Contact Us
                </a>
            </div>
        </div>
    </section>