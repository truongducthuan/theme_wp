<?php get_header(); ?>

<div class="max-w-6xl mx-auto px-4 py-12 md:py-20">
  <h1 class="text-3xl font-bold text-gray-800 mb-10">Danh sách bài viết theo danh mục</h1>

  <?php
  $categories = get_categories([
    'orderby' => 'Javascript',
    'order'   => 'ASC'
  ]);

  foreach ( $categories as $category ) :
    $category_link = get_category_link( $category->term_id );
    $posts = get_posts([
      'category' => $category->term_id,
      'posts_per_page' => 5,
      'post_status' => 'publish'
    ]);

    if ( $posts ) :
  ?>
    <div class="mb-10">
      <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-semibold text-blue-700">
          <a href="<?php echo esc_url( $category_link ); ?>">
            <?php echo esc_html( $category->name ); ?>
          </a>
        </h2>
        <a href="<?php echo esc_url( $category_link ); ?>" class="text-sm text-blue-500 hover:underline">
          Xem tất cả
        </a>
      </div>

      <div class="grid md:grid-cols-2 gap-6">
        <?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
          <a href="<?php the_permalink(); ?>" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
            <h3 class="text-lg font-medium text-gray-800 mb-2"><?php the_title(); ?></h3>
            <p class="text-gray-600 text-sm"><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
          </a>
        <?php endforeach; wp_reset_postdata(); ?>
      </div>
    </div>
  <?php
    endif;
  endforeach;
  ?>
</div>

<?php get_footer(); ?>

