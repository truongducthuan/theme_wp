<?php
/* Template Name: List News Page */
get_header();

$the_query = new WP_Query(array(
  'post_status' => 'publish',
));
?>

<section class="mt-[60px] py-28 max-w-[1200px] mx-auto bg-secondary flex flex-col px-5 md:px-16 items-center justify-center rounded-lg">
    <h1 class="capitalize text-primary text-2xl md:text-3xl font-bold">News</h1> 
    <p class="font-semibold text-sm md:text-base mb-8">Tin tức</p>
    <div class="flex items-center justify-center gap-4 bg-white px-8 py-1 rounded-xl">
      <a href="<?php echo esc_url(home_url()); ?>"><i class="fa-solid fa-house-chimney text-primary hover:text-secondary transition"></i></a>
      <div class="border-r-[1px] border-solid border-primary h-4"></div>
      <span class="text-secondary text-sm text-[#797979] font-semibold"><?php the_title(); ?></span>
    </div>
  <div class="w-full md:w-3/4 my-16">
  <?php
    if ( $the_query->have_posts() ) :
  $array_color = array('ccfff5', 'eeff9b', 'ead0ff');
  $index = 0;
      while ($the_query->have_posts() ) : $the_query->the_post();
  if($index >= 3) {
    $index = 0;
  }
      $categories = get_the_category();
      $url = get_field('blog_image', $post->ID);
      $type = get_field('type', $post->ID);
      $className = 'bg-[#' . $array_color[$index] . '] px-1.5 rounded-xl text-sm';
  ?>
            <a href="<?php echo esc_url(get_permalink($post->ID)); ?>" class="flex justify-start items-center gap-3 md:gap-5 p-5 mx-auto bg-white first:rounded-t-xl border-b border-[#7cb7ff] border-dashed hover:opacity-75 transition">
            <?php echo '<img src="' . $url . '" alt="" class="w-10 h-8 rounded"/>' ?>
              <?php echo '<div class="post-thumbnail">' . get_the_post_thumbnail(get_the_ID(), 'medium') . '</div>'; ?>
              <div class="text-[10px] md:text-sm"><?php echo get_the_date('d/m/y'); ?></div>
              <?php if(!empty($categories)): ?>
                <div class="<?php echo $className; ?>"><?php echo $categories[0]->name ?></div>
              <?php endif; ?>
              <div class="font-medium text-sm md:text-base"><?php the_title(); ?></div>
            </a>
            <?php
        wp_reset_postdata();
    $index++;
      endwhile;
    endif; 
    ?>
    </div>

    <div class="mb-16 w-full md:w-3/4">
      <?php include(locate_template('template-parts/banner-btn.php')); ?>
    </div>
</section>

<?php get_footer(); ?>

<script>

$(document).ready(function() {

$('#scroll-class').click((e) => {
  e.preventDefault();
  window.location.href = getHomepageLink();
  // $('html, body').animate({ scrollTop: 2120 }, 'slow');
  //     $('#navbar').addClass('hidden')
})

$('#scroll-schedule').click((e) => {
  e.preventDefault();
  window.location.href = getHomepageLink()
})

$('#scroll-faq').click((e) => {
  e.preventDefault();
  window.location.href = getHomepageLink()
})

$('#scroll-access').click((e) => {
  e.preventDefault();
  window.location.href = getHomepageLink()
})
})

function getHomepageLink() {
    // Get the current location
    const protocol = window.location.protocol;
    const hostname = window.location.hostname;
    const port = window.location.port ? `:${window.location.port}` : ''; 

    // Construct the homepage URL
    const homepageLink = `${protocol}//${hostname}${port}/`;

    return homepageLink;
}

</script>
