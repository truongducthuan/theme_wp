<?php 
/* Template Name: Class Page */
get_header();
?>

<style>
  .class--title:after {
    position: absolute;
    content: '';
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-size: 10px;
    width: 100%;
    background-image: url('<?php echo get_template_directory_uri(); ?>/asset/svg/dot.svg');
  }
</style>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
  <section class="mt-[60px] py-28 max-w-[1200px] bg-[#fdeadc] mx-auto bg-[#e1ebf4] flex flex-col px-5 md:px-16 items-center justify-center rounded-lg">
    <h1 class="capitalize text-primary text-2xl md:text-3xl font-bold">Classroom</h1>
    <p class="font-semibold text-sm md:text-base mb-8">Thông tin lớp học</p>
    <div class="flex items-center justify-center gap-4 bg-white px-8 py-1 rounded-xl">
      <a href="<?php echo esc_url(home_url()); ?>"><i class="fa-solid fa-house-chimney text-primary hover:text-secondary transition"></i></a>
      <div class="border-r-[1px] border-solid border-primary h-4"></div>
      <span class="text-secondary text-sm text-[#797979] font-semibold"><?php the_title(); ?></span>
    </div>

    <div class="w-full md:w-3/4 rounded-xl py-3 capitalize bg-[#f09d74] text-2xl md:text-3xl font-bold mt-16 text-center relative class--title"><?php the_title(); ?></div>

    <div class="p-5 md:p-12 rounded-xl mt-5 mb-2 md:mb-8 w-full md:w-3/4">
      <div class="flex flex-col md:flex-row justify-between items-center gap-10">
        <div class="w-full md:w-2/3 order-2 md:order-1">
          <?php $slogan = get_field('slogan', $post->ID); ?>
          <?php if (!empty($slogan)): ?>
            <h2 class="font-bold text-primary text-xl mb-5"><?php echo $slogan; ?></h2>
          <?php endif; ?>
          <div class="leading-8">
            <?php echo apply_filters('the_content', $post->post_content); ?>
          </div>
        </div>
        <?php echo '<div class="w-full md:w-1/3 order-1 md:order-2 border-radius--img">' . get_the_post_thumbnail(get_the_ID(), 'large') . '</div>'; ?>
      </div>
      <div class="bg-white mt-10 p-5 md:p-10 rounded-xl flex flex-col gap-5">
      <?php $info_class = get_field('infor_class', $post->ID); ?>
      <?php if (!empty($info_class)): 
        foreach($info_class as $info):  
      ?>  
      <div>
        <div class="text-primary text-lg font-semibold capitalize"><?php echo $info['title'] ?></div>
        <div class="text-sm md:text-base"><?php echo $info['description'] ?></div>
      </div>
          <?php 
        endforeach;
      endif; 
      ?>
    </div>
    <div class="mb-16 w-full">
      <?php include(locate_template('template-parts/banner-btn.php')); ?>
    </div>

    <!-- Start Relative class -->
    <?php 
      $relative_class = new WP_Query(array(
        'post_type' => 'classroom',
        'post_status' => 'publish',
        'post__not_in' => array($post->ID),
        'posts_per_page' => 1
      ));
    ?>
    <?php if($relative_class->have_posts()):
      while($relative_class->have_posts()): $relative_class->the_post();
    ?>
    <div class="p-5 md:p-10 gap-8 rounded-xl bg-white flex flex-col md:flex-row items-center justify-center gap-5">
      <div class="w-full md:w-1/2 text-center">
        <div class="text-primary text-xl mb-2">
          <i class="fa-regular fa-face-smile-beam"></i>
          <i class="fa-regular fa-face-grin-hearts"></i>
          <i class="fa-regular fa-face-laugh-squint"></i>
        </div>
        <div class="text-primary font-bold text-xl">Siblings are also welcome to join.</div>
        <div class="w-full h-[4px] bg-primary text-sm md:text-base mt-4 mb-6 md:mb-8"></div>
        <div class="text-sm md:text-base text-left">
        Share the fun and growth of art with your siblings. Develop your children's creativity through colorful colors and free thinking. By participating with your siblings, you will be able to stimulate each other's talents and ideas, and it will be a wonderful experience that will deepen the bond between siblings.
        </div>
      </div>
      <div class="border-[#86d988] border rounded-lg p-5 md:p-7 w-full md:w-1/2">
        <h2 class="font-semibold bg-[#86d988] rounded w-full text-center py-0.5 text-lg mb-5"><?php the_title(); ?></h2>
        <?php $slogan = get_field('slogan', $post->ID); ?>
          <?php if (!empty($slogan)): ?>
            <h2 class="text-primary font-semibold text-base md:text-lg"><?php echo $slogan; ?></h2>
        <?php endif; ?>

        <?php $ages = get_field('ages', $post->ID); ?>
        <?php if (!empty($ages)): ?>
          <div class="font-bold my-2"><?php echo "Tuổi từ " . $ages['from'] . " đến " . $ages['to']; ?></div>
        <?php endif; ?>

        <div class="text-sm md:text-base">
          <?php 
            $content = apply_filters('the_content', $post->post_content);
            $trimmed_content = substr($content, 0, 150);
            echo $trimmed_content;
          ?>
        </div>

        <div class="bg-primary mt-8 py-1.5 w-full rounded-full text-white text-center text-sm md:text-base hover:scale-105 hover:animate-pulse cursor-pointer transition-all duration-300">
          <a href="<?php the_permalink(); ?>">Click here for details about preschool classes</a>
        </div>
      </div>
    </div>
    <?php endwhile; endif; ?>
    <!-- End relative class -->
  </section>
  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>

<script>

$(document).ready(function() {

$('#scroll-class').click((e) => {
  e.preventDefault();
  window.location.href = getHomepageLink()
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
