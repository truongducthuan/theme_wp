<?php 
/*Template Name: Blog Single Page
 * Description: A custom blog single page template using Tailwind CSS.
 */
get_header();
?>
<?php
$author_id = $post->post_author; // Get author ID
$author_name = get_the_author_meta('display_name', $author_id);

$categories = get_the_category();
$url = get_field('blog_image', $post->ID);

$banner = get_field('image'); // Get the banner image
?>
<main class="bg-gray-50">

    <!-- Main Content -->
    <main class="container mx-auto px-4 sm:px-6 lg:px-8 pb-8 pt-20">
        <div class="max-w-4xl mx-auto">
            <!-- Breadcrumbs -->
            <nav class="text-sm text-gray-500 mb-6">
                <ol class="flex items-center space-x-1">
                    <li><a href="<?php echo esc_url(home_url()); ?>" class="hover:text-primary">Home</a></li>
                    <li><span class="mx-1">/</span></li>
                    <li><span class="hover:text-primary"><?php the_title(); ?></span></li>
                </ol>
            </nav>
            
            <!-- Blog Post -->
            <article>
                <!-- Post Header -->
                <header class="mb-8">
                    <h1 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4"><?php the_title(); ?></h1>
                    
                    <div class="flex flex-wrap items-center text-gray-600 mb-6">
                        <div class="flex items-center mr-6 mb-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/svgs/user-icon.svg" alt="Author" class="w-10 h-10 rounded-full mr-3">
                            <span>By <span class="text-black font-medium capitalize"><?php echo $author_name; ?></span></span>
                        </div>
                        
                        <div class="flex items-center mr-6 mb-2">
                            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <time datetime="<?php echo get_the_date('d/m/Y'); ?>"><?php echo get_the_date('d/m/Y'); ?></time>
                        </div>
                    </div>
                    
                    <div class="flex flex-wrap gap-2 mb-6">
                        <?php 
                        if($categories) {
                            $colors = ['#fb923c', '#a3e635', '#22d3ee', '#60a5fa', '#f472b6', '#fdba74'];
                            $index = 0;
                            foreach($categories as $category) {
                                $random_color = $colors[$index];
                                $index++;
                                echo '<p class="bg-gray-100 text-white text-gray-800 px-3 py-1 rounded-full text-sm font-medium" style="background-color: '. esc_attr($random_color) .';">'. esc_html($category->name) .'</p>';
                            }
                        }
                        ?>
                    </div>
                </header>
                
                <!-- Featured Image -->
                <div class="mb-8 rounded-lg overflow-hidden">
                    <img src="<?php echo $banner; ?>" alt="Web Development" class="w-full h-auto">
                </div>
                
                <!-- Post Content -->
                <div class="blog-content text-gray-800 leading-relaxed">
                    <?php echo apply_filters('the_content', $post->post_content); ?>
                </div>
            </article>
            
            <!-- Social Sharing -->
            <div class="border-t border-b border-gray-200 py-6 my-8">
                <div class="flex flex-wrap items-center justify-between">
                    <div class="mb-4 md:mb-0">
                        <h3 class="text-sm font-medium text-gray-500 mb-2">Share this article</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-400 hover:text-blue-500">
                                <span class="sr-only">Twitter</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                </svg>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-blue-600">
                                <span class="sr-only">Facebook</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-blue-500">
                                <span class="sr-only">LinkedIn</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                </svg>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-red-500">
                                <span class="sr-only">Pinterest</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0c-6.627 0-12 5.372-12 12 0 5.084 3.163 9.426 7.627 11.174-.105-.949-.2-2.405.042-3.441.218-.937 1.407-5.965 1.407-5.965s-.359-.719-.359-1.782c0-1.668.967-2.914 2.171-2.914 1.023 0 1.518.769 1.518 1.69 0 1.029-.655 2.568-.994 3.995-.283 1.194.599 2.169 1.777 2.169 2.133 0 3.772-2.249 3.772-5.495 0-2.873-2.064-4.882-5.012-4.882-3.414 0-5.418 2.561-5.418 5.207 0 1.031.397 2.138.893 2.738.098.119.112.224.083.345l-.333 1.36c-.053.22-.174.267-.402.161-1.499-.698-2.436-2.889-2.436-4.649 0-3.785 2.75-7.262 7.929-7.262 4.163 0 7.398 2.967 7.398 6.931 0 4.136-2.607 7.464-6.227 7.464-1.216 0-2.359-.631-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146 1.124.347 2.317.535 3.554.535 6.627 0 12-5.373 12-12 0-6.628-5.373-12-12-12z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <!-- Related Posts -->
            <div class="my-12">
                <h2 class="text-2xl font-bold mb-6">Related Articles</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Related Post 1 -->
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                        <a href="#">
                            <img src="/placeholder.svg?height=200&width=400" alt="Frontend Frameworks Comparison" class="w-full h-48 object-cover">
                        </a>
                        <div class="p-4">
                            <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-800">Web Development</a>
                            <a href="#" class="block mt-2 text-xl font-semibold text-gray-900 hover:text-primary">
                                Frontend Frameworks Comparison: React vs Vue vs Angular
                            </a>
                            <p class="mt-3 text-gray-500 text-sm">
                                A detailed comparison of the most popular frontend frameworks in 2023.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Related Post 2 -->
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                        <a href="#">
                            <img src="/placeholder.svg?height=200&width=400" alt="CSS Tips and Tricks" class="w-full h-48 object-cover">
                        </a>
                        <div class="p-4">
                            <a href="#" class="text-sm font-medium text-green-600 hover:text-green-800">CSS</a>
                            <a href="#" class="block mt-2 text-xl font-semibold text-gray-900 hover:text-primary">
                                10 Advanced CSS Techniques You Should Know
                            </a>
                            <p class="mt-3 text-gray-500 text-sm">
                                Level up your styling skills with these advanced CSS techniques and best practices.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Related Post 3 -->
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                        <a href="#">
                            <img src="/placeholder.svg?height=200&width=400" alt="JavaScript Performance" class="w-full h-48 object-cover">
                        </a>
                        <div class="p-4">
                            <a href="#" class="text-sm font-medium text-purple-600 hover:text-purple-800">JavaScript</a>
                            <a href="#" class="block mt-2 text-xl font-semibold text-gray-900 hover:text-primary">
                                JavaScript Performance Optimization Techniques
                            </a>
                            <p class="mt-3 text-gray-500 text-sm">
                                Learn how to write efficient JavaScript code and improve your application's performance.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Comments Section -->
            <div class="my-12">
                <h2 class="text-2xl font-bold mb-6">Comments (5)</h2>
                
                <!-- Comment Form -->
                <div class="bg-white rounded-lg shadow-sm p-6 mb-8">
                    <h3 class="text-lg font-medium mb-4">Leave a comment</h3>
                    <form>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                                <input type="text" id="name" name="name" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="comment" class="block text-sm font-medium text-gray-700 mb-1">Comment</label>
                            <textarea id="comment" name="comment" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary"></textarea>
                        </div>
                        <button type="submit" class="px-4 py-2 bg-primary text-white font-medium rounded-md hover:bg-primary-dark transition">Post Comment</button>
                    </form>
                </div>
                
                <!-- Comments List -->
                <div class="space-y-6">
                    <!-- Comment 1 -->
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <div class="flex items-start">
                            <img src="/placeholder.svg?height=40&width=40" alt="User Avatar" class="w-10 h-10 rounded-full mr-4">
                            <div class="flex-1">
                                <div class="flex items-center justify-between mb-2">
                                    <h4 class="font-medium">Michael Chen</h4>
                                    <span class="text-sm text-gray-500">2 days ago</span>
                                </div>
                                <p class="text-gray-800 mb-3">Great article! I've been trying to decide which framework to learn, and this really helped clarify the differences. I think I'll start with React since it seems to have the largest community.</p>
                                <button class="text-sm text-primary hover:text-primary-dark">Reply</button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Comment 2 -->
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <div class="flex items-start">
                            <img src="/placeholder.svg?height=40&width=40" alt="User Avatar" class="w-10 h-10 rounded-full mr-4">
                            <div class="flex-1">
                                <div class="flex items-center justify-between mb-2">
                                    <h4 class="font-medium">Jessica Williams</h4>
                                    <span class="text-sm text-gray-500">3 days ago</span>
                                </div>
                                <p class="text-gray-800 mb-3">I would add TypeScript to the list of essential skills for 2023. It's become almost standard in many companies, especially for larger projects.</p>
                                <button class="text-sm text-primary hover:text-primary-dark">Reply</button>
                            </div>
                        </div>
                        
                        <!-- Nested Reply -->
                        <div class="ml-12 mt-4 bg-gray-50 rounded-lg p-4">
                            <div class="flex items-start">
                                <img src="/placeholder.svg?height=40&width=40" alt="Author Avatar" class="w-8 h-8 rounded-full mr-3">
                                <div class="flex-1">
                                    <div class="flex items-center justify-between mb-2">
                                        <h4 class="font-medium">Sarah Johnson <span class="text-xs bg-blue-100 text-blue-800 px-2 py-0.5 rounded ml-2">Author</span></h4>
                                        <span class="text-sm text-gray-500">2 days ago</span>
                                    </div>
                                    <p class="text-gray-800">TypeScript is definitely a valuable skill. I'll consider adding a section about it in a future update. Thanks for the suggestion!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- More Comments -->
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <div class="flex items-start">
                            <img src="/placeholder.svg?height=40&width=40" alt="User Avatar" class="w-10 h-10 rounded-full mr-4">
                            <div class="flex-1">
                                <div class="flex items-center justify-between mb-2">
                                    <h4 class="font-medium">David Rodriguez</h4>
                                    <span class="text-sm text-gray-500">4 days ago</span>
                                </div>
                                <p class="text-gray-800 mb-3">What are your thoughts on Svelte? I've been hearing a lot about it lately and wondering if it's worth investing time to learn.</p>
                                <button class="text-sm text-primary hover:text-primary-dark">Reply</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Load More Comments -->
                <div class="text-center mt-8">
                    <button class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 transition">Load More Comments</button>
                </div>
            </div>
            
            <!-- Newsletter Signup -->
            <div class="bg-blue-50 rounded-lg p-8 my-12">
                <div class="text-center mb-6">
                    <h2 class="text-2xl font-bold text-gray-900 mb-2">Subscribe to our Newsletter</h2>
                    <p class="text-gray-600">Get the latest web development articles, tutorials, and resources straight to your inbox.</p>
                </div>
                <form class="max-w-md mx-auto">
                    <div class="flex flex-col sm:flex-row gap-3">
                        <input type="email" placeholder="Your email address" class="flex-grow px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">
                        <button type="submit" class="px-6 py-2 bg-primary text-white font-medium rounded-md hover:bg-primary-dark transition">Subscribe</button>
                    </div>
                    <p class="text-xs text-gray-500 mt-3 text-center">We respect your privacy. Unsubscribe at any time.</p>
                </form>
            </div>
        </div>
    </main>

</main>

<?php get_footer(); ?>

