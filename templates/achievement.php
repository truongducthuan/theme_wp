<?php 
/*
Template Name: Achievement
*/
get_header();

$list_post = array();
$args = array(
  'post_type' => 'achievement',
  'post_status' => 'publish',
);

$query = new WP_Query($args);
?>

<?php
foreach ($query->posts as $post) {
  
$post_id = $post->ID;

$get_bg = get_field('background', $post_id);
$get_photo_left = get_field('left', $post_id);
$get_photo_right = get_field('right', $post_id);
$get_title_service = get_field('title', $post_id);
$get_desc_service = get_field('description', $post_id);
$get_table = get_field('table', $post_id);
$get_content = get_field('content', $post_id);
$get_detail_imag = get_field('image_detail', $post_id);

$post_type = get_post_type($post_id);
$taxonomies = get_object_taxonomies($post_type, 'names');

print_r($get_photo_left);
$post->bg = $get_bg ?? '';
$post->photo_left = $get_photo_left ?? '';
$post->photo_right = $get_photo_right ?? '';
$post->title_service = $get_title_service ?? '';
$post->desc_service = $get_desc_service ?? '';
$post->table = $get_table ?? '';
$post->content = $get_content ?? '';
$post->detail_imag = $get_detail_imag ?? '';

$terms_list = [];

foreach ($taxonomies as $taxonomy) {
    $terms = get_the_terms($post_id, $taxonomy);
    
    if ($terms && !is_wp_error($terms)) {
        $terms_list[$taxonomy] = $terms;
    }
}
if (!empty($terms_list)) {
    foreach ($terms_list as $taxonomy => $terms) {
        $post->taxonomy = $terms;
    }
}
}

echo '<pre>';
print_r($query->posts);
echo '</pre>';
?>

<section>
  <div class="relative">
    <div class="flex absolute hidden left-0 top-0 flex-col mt-[100px] mb-[80px] w-[50%] max-md:ml-0 max-md:w-full">
    <img
      loading="lazy"
      src="<?php echo get_template_directory_uri() ?>/assets/svg/banner-left.svg"
      class="object-contain self-stretch my-auto mr-0 w-full aspect-[1.03] max-md:mt-10 max-md:max-w-full"
    />
  </div>

  <div class="max-w-[1200px] mx-auto pt-60 z-10 relative">
    <div
      class="flex gap-3 items-center self-start text-base text-white mb-10"
    >
      <div
        class="flex shrink-0 self-stretch my-auto w-2.5 h-2.5 bg-red-600 rounded-full"
      ></div>
      <div class="self-stretch my-auto">お知らせ</div>
    </div>
    <div class="flex justify-between gap-4">
      <div class="flex flex-col items-start justify-start self-start gap-8 text-white py-1 rounded-xl">
        <div class="font-bold text-6xl text-white uppercase">OUR PROJECT <br /> Achievements</div>
      </div>
    </div>
    <div class="text-white mt-10">
    エイジラボは、さまざまな業界や業種のお客様と協力し、使いやすさ、効率性、そして<br />
    未来を見据えたソリューションを提供しております。<br />
    大切なのは作った数ではなく、使われるアプリを目指して開発することです。
    </div>
    <div class="flex justify-end items-end gap-4 mt-20 mb-10 w-full text-white"><span>Top -</span><p>実績</p></div>

  </div>

  <?php
$taxonomies = get_taxonomies(array('object_type' => array('achievement')));
if ( ! empty( $taxonomies ) ) :
    foreach ( $taxonomies as $taxonomy ) :
        if ( 'category' !== $taxonomy ) :
            $terms = get_terms( array(
                'taxonomy' => $taxonomy,
                'hide_empty' => false,
            ) );
            if ( ! empty( $terms ) ) :
              $all_term = term_exists('すべて', $taxonomy);
              if (!$all_term) {
                  $all_term = wp_insert_term('すべて', $taxonomy, array('slug' => 'all'));
              }

              $all = get_term($all_term['term_id']);

              array_unshift($terms, $all);

                echo '<ul class="max-w-[1200px] mx-auto pt-10 z-10 relative flex items-center gap-3">';
                foreach ( $terms as $term ) :
                    echo '<li data-set="'.$term->name.'" class="menu_achievement py-1 px-4 border border-white rounded-3xl hover:bg-white group"><span class="text-white group-hover:text-black">' . $term->name . '</span></li>';
                endforeach;
                echo '</ul>';
            endif;
        endif;
    endforeach;
endif;
?>
<script>
  var menus = document.querySelectorAll('.menu_achievement');
  menus.forEach((menu) => {
    menu.addEventListener('click', function(e) {
      e.preventDefault();
      var set = e.target.getAttribute('data-set');
      console.log(e.target, set);
      <?php echo '$taxonomy = "'; ?>' + set + '<?php echo '";'; ?>
    });
  });
</script>

  <ul class="flex gap-5 justify-center items-center">
            <?php
   
            foreach ($posts as $post) : ?>
              <li class="py-2 border-b border-gray-200">
                <a href="<?php echo get_permalink($post->ID); ?>" class="block w-full h-full">
                <div class="swiper-slide <?php echo $even ? 'slide-item-even' : ""; ?>">
                  <div class="w-full h-full flex flex-col bg-transparent relative">
                    <div class="relative w-full h-full flex items-center justify-center">
                      <div class="w-2/3"><img src="<?php echo $img; ?>" class="rounded-tl-[50px]"></div>
                      <div class="absolute top-0 right-0 left-0 bottom-0  z-index-negative">
                        <img src="<?php echo $bg; ?>" class="" >

                        <?php if($slice['tag']): ?>
                        <div class="absolute right-0 bottom-[20px] bg-[#D70C18] py-0.5 px-4 text-white"><?php echo $slice['tag'];?></div>
                        <?php endif; ?>
                      </div>
                    </div>
                    <div class="text-white mt-4 leading-9"><?php echo '<span class="font-bold">'. $desc1 .'</span>' . '<br>' . '<span class="font-light">'. $desc2 .'</span>'; ?></div>
                    <div class="absolute top-[-60px] left-[20px] text-8xl font-bold text-white mix-blend-difference"><?php echo $slice['number']; ?></div>
                  </div>
                </div>
                </a>
                  <?php echo $post->post_title; ?>
                </a>
              </li>
            <?php endforeach; wp_reset_postdata(); ?>
  </ul>

  <div>
    <?php include(locate_template('template-parts/recruit-contact.php')); ?>
  </div>
</section>

<?php 
get_footer();
?>

<script src="<?php echo get_template_directory_uri() . '/assets/js/achievement.js'; ?>"></script>
<script>
  var listAchievement = <?php echo json_encode($query->posts); ?>;
</script>