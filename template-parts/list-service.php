
<?php 
$services = get_field('services');
?>
    <section class="pt-32 pb-16 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-2"><?php echo $services['title']; ?></h2>
                <p class="text-red-500 font-medium"><?php echo $services['sub_title']; ?></p>
            </div>

            <div class="grid md:grid-cols-2 gap-8 items-center">
                <!-- services Points -->
                <div class="space-y-8">
                    <?php 
                    if(empty($services)) return;
                    $index = 1;
                    foreach ( $services['list'] as $points) {
                        echo '<div class="flex gap-4">';
                        echo '<div class="flex-shrink-0 w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">';
                        echo $index++;
                        echo '</div>';
                        echo '<p class="text-gray-700">';
                        echo $points['item'];
                        echo '</p>';
                        echo '</div>';
                    }
                    ?>
                </div>

                <!-- services Image -->
                <div class="rounded-lg overflow-hidden shadow-lg">
                    <img 
                        src="<?php echo $services['image']; ?>" 
                        alt="services Concept" 
                        class="w-full h-auto"
                    >
                </div>
            </div>
        </div>
    </section>