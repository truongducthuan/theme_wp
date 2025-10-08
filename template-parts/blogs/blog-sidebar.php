<?php
get_header();

$keyword = get_search_query();
$blog_page_id  = get_option('page_for_posts');
$blog_page_url = get_permalink($blog_page_id);

$args = [
  'post_type' => 'post',
  'posts_per_page' => 5,
  'orderby'        => 'date',
  'order'          => 'DESC',
  'post_status'    => 'publish',
];

$blogs = new WP_Query($args);

$categories = get_the_category();

$all_categories = get_terms(array(
  'taxonomy'   => 'category',
  'hide_empty' => false,
));

// echo '<prev class="text-black">';
// print_r($keyword);
// echo '</prev>';
?>

<aside class="space-y-6">
  <!-- Search Widget -->
  <div class="bg-purple-50 rounded-2xl p-6 blog-listing-fade-in" style="animation-delay: 0.5s;">
    <h3 class="text-xl font-bold text-gray-900 mb-4">
      Search Here...
      <div class="w-12 h-1 bg-secondary mt-2"></div>
    </h3>
    <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" class="flex gap-2">
      <input
        type="search"
        name="s"
        value="<?php echo get_search_query(); ?>"
        placeholder="Search Here..."
        class="flex-1 px-4 py-3 rounded-lg border text-black border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all duration-300" />
      <button
        type="submit"
        class="px-6 py-3 bg-secondary text-white font-semibold rounded-lg hover:bg-blue-700 transition-all duration-300 shadow-md hover:shadow-lg">
        Search
      </button>
    </form>

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
              <a href="<?php the_permalink(); ?>" class="text-sm font-semibold text-gray-900 line-clamp-2 group-hover:text-secondary transition-colors duration-300">
                <?php the_title(); ?>
              </a>
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
          <a href="<?php echo get_category_link($category->term_id); ?>" class="flex items-center justify-between p-3 bg-cyan-400 text-white rounded-lg hover:bg-cyan-500 transition-all duration-300 group">
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
</aside>