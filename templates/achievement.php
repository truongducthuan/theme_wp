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

$get_name_company = get_field('name_company', $post_id);
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

$post->name_company = $get_name_company ?? '';
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

// echo '<pre>';
// print_r($query->posts);
// echo '</pre>';
?>

<section>
  <div class="relative">
    <div class="flex absolute left-0 top-0 flex-col mt-[100px] mb-[80px] w-[50%] max-md:ml-0 max-md:w-full">
    <img
      loading="lazy"
      src="<?php echo get_template_directory_uri() ?>/assets/svg/banner-left.svg"
      class="object-contain self-stretch my-auto mr-0 w-full aspect-[1.03] max-md:mt-10 max-md:max-w-full"
    />
  </div>

  <div class="max-w-[1200px] mx-auto pt-32 md:pt-60 px-5 md:px-0 z-10 relative">
    <div
      class="flex gap-3 items-center self-start text-base text-white mb-10"
    >
      <div
        class="flex shrink-0 self-stretch my-auto w-2.5 h-2.5 bg-red-600 rounded-full"
      ></div>
      <div class="self-stretch my-auto">実績</div>
    </div>
    <div class="flex justify-between gap-4">
      <div class="flex flex-col items-start justify-start self-start gap-8 text-white py-1 rounded-xl">
        <div class="font-bold text-4xl md:text-8xl text-white uppercase">OUR PROJECT <br /> Achievements</div>
      </div>
    </div>
    <div class="text-white mt-10">
    エイジラボは、さまざまな業界や業種のお客様と協力し、使いやすさ、効率性、そして<br />
    未来を見据えたソリューションを提供しております。<br />
    大切なのは作った数ではなく、使われるアプリを目指して開発することです。
    </div>
    <div class="flex justify-end items-end gap-4 mt-16 md:mt-20 mb-10 w-full text-white"><span>Top -</span><p>実績</p></div>

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
            // if ( ! empty( $terms ) ) :
            //   $all_term = term_exists('すべて', $taxonomy);
            //   if (!$all_term) {
            //       $all_term = wp_insert_term('すべて', $taxonomy, array('slug' => 'all'));
            //   }

            //   $all = get_term($all_term['term_id']);

            //   array_unshift($terms, $all);
            // endif;
        endif;
    endforeach;
endif;
?>
<ul class="max-w-[1200px] mx-auto pb-5 md:pb-0 pt-5 md:pt-10 px-5 md:px-0 overflow-x-auto relative z-10 flex items-center gap-3" id="menu_list"></ul>
<script>
  var taxonomies = <?php echo json_encode($terms); ?>;
  taxonomies?.unshift({name: 'すべて'});

  function showMenu (active='すべて') {
    document.getElementById('menu_list').innerHTML = '';
    var html = '';
    taxonomies?.map(menu => {
      html += `
      <li onclick="handleClick('${menu.name}'); handleActive('${menu.name}');" class="menu_achievement text-nowrap text-center select-none py-1 px-4 cursor-pointer border border-white rounded-3xl ${active == menu.name ? 'bg-white' : ''} hover:bg-white group">
        <span class="${active == menu.name ? 'text-black' : 'text-white'} group-hover:text-black">${menu.name}</span>
      </li>`
    })
    document.getElementById('menu_list').innerHTML += html;
  }
  showMenu('すべて');

  function handleActive(active) {
    showMenu(active);
  }
</script>

  <ul class="grid grid-cols-1 md:grid-cols-3 gap-10 max-w-[1200px] px-5 md:px-0 mx-auto pt-10 pb-20 md:pb-44 z-10 relative" id="list_achievement">
  </ul>
</section>

<?php 
get_footer();
?>

<script src="<?php echo get_template_directory_uri() . '/assets/js/achievement.js'; ?>"></script>
<script>
  var listAchievement = <?php echo json_encode($query->posts); ?>;
</script>