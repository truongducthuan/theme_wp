<?php get_header(); ?>
<style>
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    @keyframes slideUp {
        from { transform: translateY(10px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .prose p {
        margin-bottom: 1.5rem;
        line-height: 1.7;
    }
    .prose h2 {
        margin-top: 2rem;
        margin-bottom: 1rem;
    }

</style>

    <!-- Reading Progress Bar -->
    <div class="fixed top-0 left-0 w-full h-1 bg-gray-200 z-50">
        <div id="reading-progress" class="h-full bg-blue-600 transition-all duration-150" style="width: 0%"></div>
    </div>

    <main class="max-w-4xl mx-auto px-4 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Main Article -->
            <article class="lg:col-span-2">
              <?php 
              $categories = get_the_category();
              if(!empty($categories)):
              ?>
              <div class="flex items-center space-x-2 mb-4">
                <?php 
                foreach ($categories as $category) {
                  echo '<span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">' . esc_html($category->name) . '</span>';
                }
                ?>
              </div>
              <?php endif; ?>

                <!-- Article Content -->
              <?php echo apply_filters('the_content', $post->post_content); ?>
            </article>

            <!-- Sidebar -->
            <aside class="lg:col-span-1">
                <div class="sticky top-24 space-y-6">
                    <!-- Related Articles -->
                    <?php 
                    $posts = get_posts(array(
                        'post_type' => 'post',
                        'publication_status' => 'publish',
                        'post_status' => 'publish',
                        'posts_per_page' => 3,
                        'post__not_in' => array(get_the_ID()),
                        'orderby' => 'rand'
                    ));
                    echo '<prev';
                    // print_r($posts);
                    echo '</prev>';
                    if ($posts):
                    ?>
                    <div class="bg-white rounded-lg shadow-sm border p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Related Articles</h3>
                        <div class="space-y-4">
                            <?php foreach ($posts as $post): setup_postdata($post); 
                              $image = get_field('image', $post->ID);
                            ?>
                            <a href="<?php echo esc_url(get_the_permalink()); ?>" class="flex space-x-3 group cursor-pointer hover:bg-gray-50 p-2 rounded-lg transition-colors">
                                <img src="<?php echo esc_url($image); ?>"
                                     alt="<?php echo esc_attr(get_the_title($post->ID)); ?>"
                                     class="w-20 h-16 object-cover rounded flex-shrink-0">
                                <div class="flex-1 min-w-0">
                                    <span class="text-xs text-blue-600 font-medium"><?php echo esc_html(get_the_category()[0]->name); ?></span>
                                    <h4 class="text-sm font-medium text-gray-900 group-hover:text-blue-600 line-clamp-2 mb-1">
                                      <?php echo esc_html(get_the_title()); ?>
                                    </h4>
                                    <span class="text-xs text-gray-500"><?php echo esc_html(get_the_date()); ?></span>
                                </div>
                            </a>
                            <?php endforeach; wp_reset_postdata(); ?>
                        </div>
                    </div>
                    <?php endif; ?>

                    <!-- Trending Topics -->
                     <?php 
                      $tags = get_the_tags();
                      if ( $tags ):
                      ?>
                    <div class="bg-white rounded-lg shadow-sm border p-6 mt-5">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Trending Tags</h3>
                        <div class="space-y-2">
                            <?php 
                            foreach ( $tags as $tag ) {
                              echo '<span class="inline-block bg-gray-100 hover:bg-gray-200 text-gray-700 text-sm px-3 py-1 rounded-full cursor-pointer transition-colors mr-2 mb-2">' . esc_html( $tag->name ) . '</span>';
                            }
                            ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </aside>
        </div>
    </main>

    <!-- Scroll to Top Button -->
    <button id="scroll-top-btn" 
            class="fixed bottom-6 right-6 bg-blue-600 text-white rounded-full w-12 h-12 shadow-lg z-50 opacity-0 invisible transition-all duration-300 hover:bg-blue-700">
        <svg class="w-5 h-5 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
        </svg>
    </button>

<!-- Footer -->
<?php get_footer(); ?>