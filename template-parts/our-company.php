<!-- Hero Section -->
<span
            class="scroll-to"
            data-label="Scroll to: #history"
            data-bullet="false"
            data-link="#history"
            data-title="history"
            ><a name="history"></a
          ></span>

<?php 
$hero = get_field('hero_section');
?>
    <section class="pt-24 bg-gradient-to-r from-blue-400 to-blue-600">
        <div class="max-w-7xl mx-auto px-6 py-16">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="text-white">
                    <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6">
                        <?php echo $hero['title']; ?>
                    </h1>
                    <p class="text-lg mb-8 text-blue-50">
                        <?php echo $hero['description']; ?>
                    </p>
                </div>
                <div class="rounded-lg overflow-hidden shadow-xl">
                    <img src="<?php echo $hero['banner']; ?>" alt="Office Environment" class="w-full">
                </div>
            </div>
        </div>
    </section>

    <!-- Navigation Tabs -->
<?php 
$navigates = get_field('navigation_tabs');
?>
    <div class="bg-white">
        <div class="max-w-7xl mx-auto px-6 py-8">
            <div class="flex flex-wrap justify-center gap-4">
                <?php 
                if(empty($navigates)) return;
                foreach ($navigates as $navigate) { ?>
                    <a href="<?php echo $navigate['slug']; ?>" class="px-8 py-2 border border-blue-500 text-blue-500 rounded-full hover:bg-blue-500 hover:text-white transition-colors"><?php echo $navigate['title']; ?></a>
                <?php } ?>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <span
            class="scroll-to"
            data-label="Scroll to: #about"
            data-bullet="false"
            data-link="#about"
            data-title="about"
            ><a name="about"></a
          ></span>

<?php 
$about = get_field('about_section');
?>
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-2"><?php echo $about['title']; ?></h2>
                <p class="text-red-500 font-medium"><?php echo $about['slogan']; ?></p>
            </div>

            <div class="grid md:grid-cols-2 gap-12 items-center p-5 bg-[#1f2937] rounded-lg">
                <div class="rounded-lg overflow-hidden shadow-xl bg-gray-900">
                    <img src="<?php echo $about['image']; ?>" alt="About Us" class="w-full opacity-75">
                </div>
                <div>
                    <p class="text-lg text-gray-700 text-white leading-relaxed">
                        <?php echo $about['description']; ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

        <!-- Philosophy Section -->
        <span
            class="scroll-to"
            data-label="Scroll to: #philosophy"
            data-bullet="false"
            data-link="#philosophy"
            data-title="philosophy"
            ><a name="philosophy"></a
          ></span>

<?php 
$philosophy = get_field('philoshopy_section');
?>
    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-2"><?php echo $philosophy['title']; ?></h2>
                <p class="text-red-500 font-medium"><?php echo $philosophy['slogan']; ?></p>
            </div>

            <div class="grid md:grid-cols-2 gap-8 items-center">
                <!-- Philosophy Points -->
                <div class="space-y-8">
                    <?php 
                    if(empty($philosophy)) return;
                    $index = 1;
                    foreach ( $philosophy['points'] as $points) {
                        echo '<div class="flex gap-4">';
                        echo '<div class="flex-shrink-0 w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">';
                        echo $index++;
                        echo '</div>';
                        echo '<p class="text-gray-700">';
                        echo $points['text'];
                        echo '</p>';
                        echo '</div>';
                    }
                    ?>
                </div>

                <!-- Philosophy Image -->
                <div class="rounded-lg overflow-hidden shadow-lg">
                    <img 
                        src="<?php echo $philosophy['image']; ?>" 
                        alt="Philosophy Concept" 
                        class="w-full h-auto"
                    >
                </div>
            </div>
        </div>
    </section>

            <!-- Company Overview Section -->
            <span
            class="scroll-to"
            data-label="Scroll to: #record"
            data-bullet="false"
            data-link="#record"
            data-title="record"
            ><a name="record"></a
          ></span>

<?php 
$overview = get_field('overview_company');
?>
    <section class="py-16 px-4">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h1 class="text-3xl font-bold mb-2"><?php echo $overview['title']; ?></h1>
                <p class="text-red-500 font-medium"><?php echo $overview['slogan']; ?></p>
            </div>

            <div class="border rounded-lg overflow-hidden">
                <!-- Company Name -->
                <?php if(empty($overview['company'])) return; ?>
                <?php foreach ($overview['company'] as $info) { ?>
                    <div class="grid grid-cols-1 md:grid-cols-3">
                        <div class="bg-green-50 p-4 md:p-6 font-medium">
                            <?php echo $info['label']; ?>
                        </div>
                        <div class="col-span-2 p-4 md:p-6 border-b">
                            <?php echo $info['value']; ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <!-- Office/Access Section -->
    <span
            class="scroll-to"
            data-label="Scroll to: #office"
            data-bullet="false"
            data-link="#office"
            data-title="office"
            ><a name="office"></a
          ></span>

<?php 
$office = get_field('office_section');
?>
    <section class="bg-gradient-to-r from-blue-400 to-blue-600 py-16">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-2"><?php echo $office['title']; ?></h2>
                <p class="text-red-500 font-medium"><?php echo $office['slogan']; ?></p>
            </div>

            <div class="grid md:grid-cols-2 gap-8 items-center">
                <!-- Map -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <?php echo $office['map']; ?>
                </div>

                <!-- Office Info -->
                <div class="text-white">
                    <?php echo $office['info']; ?>
                </div>
            </div>
        </div>
    </section>
