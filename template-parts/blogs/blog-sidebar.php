<?php
$blogs = new WP_Query([
  'post_type' => 'post',
  'posts_per_page' => 3,
  'orderby' => 'date',
  'order' => 'DESC',
  'post_status' => 'publish',
]);

$categories = get_the_category();

$all_categories = get_terms(array(
  'taxonomy'   => 'category',
  'hide_empty' => false,
));

// echo '<prev class="text-black">';
// print_r($categories);
// echo '</prev>';
?>

<aside class="space-y-6">
  <!-- Search Widget -->
  <div class="bg-purple-50 rounded-2xl p-6 blog-listing-fade-in" style="animation-delay: 0.5s;">
    <h3 class="text-xl font-bold text-gray-900 mb-4">
      Search Here...
      <div class="w-12 h-1 bg-blue-600 mt-2"></div>
    </h3>
    <div class="flex gap-2">
      <input
        type="text"
        placeholder="Search Here..."
        class="flex-1 px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all duration-300" />
      <button class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-all duration-300 shadow-md hover:shadow-lg">
        Search
      </button>
    </div>
  </div>

  <!-- Latest News Widget -->
  <div class="bg-purple-50 rounded-2xl p-6 blog-listing-fade-in" style="animation-delay: 0.6s;">
    <h3 class="text-xl font-bold text-gray-900 mb-4">
      Latest News
      <div class="w-12 h-1 bg-purple-600 mt-2"></div>
    </h3>
    <div class="space-y-4">
      <?php
      if ($blogs->have_posts()): while ($blogs->have_posts()): $blogs->the_post();
          $image = get_field('image', get_the_ID());
      ?>
          <div class="flex gap-3 group cursor-pointer">
            <img
              src="<?php echo $image; ?>"
              alt="Latest news thumbnail"
              class="w-16 h-16 rounded-lg object-cover flex-shrink-0 transition-transform duration-300 group-hover:scale-105" />
            <div class="flex-1">
              <div class="flex items-center gap-2 text-xs text-gray-500 mb-1">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                </svg>
                <?php echo get_the_date(); ?>
              </div>
              <h4 class="text-sm font-semibold text-gray-900 line-clamp-2 group-hover:text-blue-600 transition-colors duration-300">
                <?php the_title(); ?>
              </h4>
            </div>
          </div>
      <?php
        endwhile;
      endif;
      ?>
    </div>
  </div>

  <!-- Category Widget -->
  <div class="bg-purple-50 rounded-2xl p-6 blog-listing-fade-in" style="animation-delay: 0.7s;">
    <h3 class="text-xl font-bold text-gray-900 mb-4">
      Category
      <div class="w-12 h-1 bg-purple-600 mt-2"></div>
    </h3>
    <div class="space-y-3">
      <?php
      if ($all_categories): foreach ($all_categories as $category): ?>
          <a href="#" class="flex items-center justify-between p-3 bg-cyan-400 text-white rounded-lg hover:bg-cyan-500 transition-all duration-300 group">
            <span class="font-semibold"><?php echo $category->name; ?></span>
            <div class="flex items-center gap-2">
              <span class="w-6 h-6 flex items-center justify-center bg-white text-cyan-400 rounded text-xs font-bold"><?php echo $category->count; ?></span>
              <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </div>
          </a>
      <?php endforeach;
      endif;
      ?>
    </div>
  </div>

  <!-- Newsletter Widget -->
  <div class="bg-gradient-to-br from-indigo-900 to-purple-900 rounded-2xl p-6 text-white blog-listing-fade-in" style="animation-delay: 0.8s;">
    <h3 class="text-xl font-bold mb-3">Get Updates</h3>
    <p class="text-sm text-purple-200 mb-4 leading-relaxed">
      Subscribe email and get recent news and updates or offers.
    </p>
    <div class="flex gap-2">
      <input
        type="email"
        placeholder="Email address..."
        class="flex-1 px-4 py-3 rounded-lg bg-white/10 border border-white/20 text-white placeholder-purple-300 focus:outline-none focus:ring-2 focus:ring-purple-400 transition-all duration-300" />
      <button class="px-6 py-3 bg-white text-purple-900 font-semibold rounded-lg hover:bg-purple-100 transition-all duration-300 shadow-lg hover:shadow-xl">
        Search
      </button>
    </div>
  </div>

</aside>