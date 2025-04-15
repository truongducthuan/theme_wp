<?php 
/*Template Name: Course Page
    * Description: A custom course page template for the robotics course website.
*/
get_header();
?>

<?php 
$image = get_field('image');
$title = get_field('title');
$description = get_field('description');
$courses = get_field('courses');
?>
<main class="bg-white">
    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8 pt-16 md:pt-16 lg:pt-20 xl:pt-28">
        <!-- Page Title -->
        <h1 class="text-4xl md:text-5xl font-bold text-center text-navy my-8">KHÓA HỌC</h1>
        
        <!-- Hero Image -->
        <div class="flex justify-center my-8">
            <div class="bg-gray-100 rounded-lg p-4 w-full max-w-2xl">
                <img src="<?php echo $image; ?>" alt="Children learning robotics" class="w-full h-auto">
            </div>
        </div>
        
        <!-- Courses Section -->
        <section class="my-12">
            <h2 class="text-3xl font-bold text-navy text-center mb-6"><?php echo $title; ?></h2>
            
            <p class="text-lg text-gray-800 mb-10 max-w-4xl mx-auto text-center">
                <?php echo $description; ?>
            </p>
            
            <div class="space-y-6 mt-6 md:mt-12">
                <!-- Basic Course -->
                <?php 
                if($courses) {
                    foreach($courses as $course) {
                        echo '
                        <a href="'. $course['url'] .'" class="block border border-gray-200 rounded-lg p-6 hover:shadow-md transition">
                            <h3 class="text-2xl font-bold text-navy mb-3">'.$course['title'].'</h3>
                            <p class="text-gray-700">
                                '.$course['description'].'
                            </p>
                        </a>
                        ';
                    }
                }
                ?>
            </div>
        </section>
    </div>
</main>

<?php 
get_footer();
?>