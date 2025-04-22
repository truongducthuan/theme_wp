<?php 
/**
 * Template Name: About Page
 * Description: A custom about page template for the robotics course website.
 */

get_header();
?>

<section class="bg-white">
    <!-- Header Section -->
    <?php 
    $philosophy = get_field('philosophy');
    ?>
    <?php
    if($philosophy) {   
        echo '
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row pt-20">
                <div class="flex flex-col w-full md:w-1/2 container flex items-center">
                <div class="bg-blue-600 w-full py-8">
<h1 class="text-white text-center mr-5 text-5xl md:text-6xl font-extrabold">Về chúng tôi</h1>
                    </div>
                    <div class="container mx-auto px-4 py-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-blue-600 mb-6">Tầm nhìn và sứ mệnh</h2>
                        <div class="flex flex-col md:flex-row">
                            <div class="w-full">
                                <p class="text-gray-800 text-lg leading-relaxed">
                                    '.$philosophy['description'].'
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Image Section -->
                <div class="w-full md:w-1/2 h-64 md:h-auto">
                    <img src="'.$philosophy['image'].'" alt="Girl with robot" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
        ';
    }
    ?>

    <!-- Our Instructors Section -->
    <?php 
    $instructors = get_field('instructors');
    ?>
    <div class="container mx-auto px-4 py-12">
    <h2 class="text-3xl md:text-4xl font-bold text-blue-600 mb-10">Đội ngũ giảng viên</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php 
            if($instructors) {
                foreach($instructors as $instructor) {
                    echo '
                    <div class="bg-gray-100 rounded-lg overflow-hidden hover:scale-105 ease-in-out hover:shadow-xl transition duration-300">
                        <div class="p-4">
                            <img src="'.$instructor['image'].'" alt="'.$instructor['name'].'" class="w-full h-64 object-cover object-center rounded-lg">
                            <h3 class="text-2xl font-bold mt-4 text-center">'.$instructor['name'].'</h3>
                            <p class="text-brand-orange font-semibold text-center">'.$instructor['role'].'</p>
                            <p class="text-gray-700 text-center mt-2">
                                '.$instructor['description'].'
                            </p>
                        </div>
                    </div>
                    ';
                }
            }  
            ?>
        </div>
    </div>

    <!-- Our Facilities and History Section -->
    <?php 
    $facilities = get_field('facilities');
    $histories = get_field('history');
    ?>
    <div class="container mx-auto px-4 py-12">
        <div class="flex flex-col lg:flex-row gap-12">
            <!-- Facilities Section -->
            <?php 
            if($facilities) {
                echo '
                    <div class="w-full lg:w-4/6">
<h2 class="text-3xl md:text-4xl font-bold text-blue-600 mb-6">Giá trị cốt lõi</h2>
                        <div class="mb-6">
                            <img src="'.$facilities['image'].'" alt="Robotics classroom" class="w-full h-80 object-cover rounded-lg">
                        </div>
                        <p class="text-gray-800 text-lg">
                            '.$facilities['description'].'
                        </p>
                    </div>
                ';
            } 
            ?>
            
            
            <!-- History Timeline Section -->
            <div class="w-full lg:w-2/6">
<h2 class="text-3xl md:text-4xl font-bold text-blue-600 mb-6">Lịch sử phát triển</h2>
                
                <div class="relative">
                    <!-- Timeline Line -->
<div class="absolute left-6 top-0 bottom-0 w-1 bg-blue-600"></div>
                    
                    <!-- Timeline Items -->
                    <div class="ml-16 space-y-12">
                        <?php 
                        if($histories) {
                            foreach($histories as $history) {
                                echo '
                                    <div class="relative">
                                        <div class="absolute -left-16 mt-1.5">
<div class="w-6 h-6 bg-blue-600 rounded-full"></div>
                                        </div>
                                        <h3 class="text-2xl font-bold">'.$history['year'].'</h3>
                                        <p class="text-gray-700">'.$history['info'].'</p>
                                    </div>
                                ';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
get_footer();
?>