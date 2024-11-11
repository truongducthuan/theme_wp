<?php 
/* Template Name: Home */
get_header();

echo '<h1 class="mt-[200px]">####</h1>';
$the_query = new WP_Query(array(
  'post_status' => 'publish',
  'posts_per_page' => 5,
));

$sliceImgs = get_field('data_course', 'option');
 echo '<pre>';
  print_r($the_query->posts);
  echo '</pre>';

?>


<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/home.css">
<style>
  .curtain:after, .curtain_header:after {
    background-image: url('<?php echo get_template_directory_uri(); ?>/asset/svg/rhinestone.svg');
  }

  .curtain_gray:after {
    background-image: url('<?php echo get_template_directory_uri(); ?>/asset/svg/rhinestoneGray.svg');
  }
</style>

<!-- Start banner -->
<section class="mt-[120px] flex items-center justify-center gap-12 pb-20 relative">
      <!-- Start Slice -->
      <div class="w-[50%] h-[500px]">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <?php if(!empty($sliceImgs)): 
                foreach($sliceImgs as $img):
              ?>
              <img src="https://storage.googleapis.com/studio-design-asset-files/projects/RQqJGMe2ag/s-1800x2400_v-frms_webp_f3fc22d0-13e6-41d6-b025-332b8b8e19b2_middle.webp" class="rounded-br-[50px]" >
              <?php 
              endforeach;
              endif; 
              ?>
            </div>
          </div>
        </div>
      </div>
      <!-- End slice -->
      <div class="w-[50%]">
        <h1 class="text-primary text-4xl font-bold">An exhilarating experience through the magic of art.</h1>
        <p class="mt-5 font-semibold">This is an art classroom located in the 〇〇 district that nurtures children's creativity and free expression. Through colorful art activities, children expand their imagination and develop their individuality. In our fun-filled classes, we enrich their self-expression and creativity through painting and sculpture, supporting their emotionally rich growth.</p>
        <a href="/templates/form.html"><button class="bg-primary text-white py-3 px-8 uppercase rounded-3xl mt-8 hover:scale-105 hover:animate-pulse cursor-pointer transition-all duration-300">First, please come to the trial lesson.</button></a>
      </div>
      <div class="curtain"></div>
    </section>
    <!-- End banner -->

    <!--Start News -->
    <section class="flex flex-col justify-center items-center py-20 bg-secondary relative">
      <h2 class="capitalize text-primary text-3xl font-bold">News</h2>
      <span class="font-semibold mb-8">news</span>
      <div class="w-full">
    <?php
      if ( $the_query->have_posts() ) :
        while ($the_query->have_posts() ) : $the_query->the_post();
        $categories = get_the_category();
    ?>
              <a href="<?php echo esc_url(get_permalink($post->ID)); ?>" class="flex justify-start items-center gap-5 p-5 md:max-w-[70%] mx-auto bg-white first:rounded-t-xl border-b border-[#7cb7ff] border-dashed hover:opacity-75 transition">
                <img src=${item.image} alt=${item.description} class="w-10 h-8 rounded"/>
                <?php echo '<div class="post-thumbnail">' . get_the_post_thumbnail(get_the_ID(), 'medium') . '</div>'; ?>
                <div class="text-sm"><?php echo get_the_date('d/m/y'); ?></div>
                <?php if(!empty($categories)): ?>
                  <div class="${className}"><?php echo $categories[0]->name ?></div>
                <?php endif; ?>
                <div class="font-medium"><?php the_title(); ?></div>
              </a>
              <?php
          wp_reset_postdata();
        endwhile;
      endif; 
      ?>
      </div>
      <a href="#"><button class="rounded-3xl text-white bg-[#797979] px-8 py-3 uppercase mt-14 hover:scale-105 hover:bg-primary cursor-pointer transition-all duration-300">Click here for the list of announcements.</button></a>
      <div class="curtain_gray"></div>
    </section>
    <!-- End News -->

    <!-- Start Class -->
    <section class="flex flex-col justify-center items-center py-20 relative">
      <h2 class="capitalize text-primary text-3xl font-bold">Concept</h2>
      <span class="font-semibold mb-8">lớp học</span>
      <div class="w-2/3 flex items-start justify-center gap-8">
        <div class="w-1/2">
          <div class="font-semibold text-lg uppercase">An art class full of fun that nurtures ideas and sensibilities.</div>
          <div class="w-full h-[4px] bg-primary mt-4 mb-8"></div>
          <p>This is an art classroom that values children's free expression and creativity. Through colorful colors and fun lessons, we nurture children's ideas and sensibilities, fostering their individual talents. Our classroom encourages children to think freely and allows them to experience joy and growth through art.</p>
        </div>
        <div class="w-1/2">
          <image class="w-full h-[300px]" src="https://images.unsplash.com/photo-1533158326339-7f3cf2404354?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w2MzQ2fDB8MXxzZWFyY2h8MzF8fHBhaW50fGVufDB8fHx8MTY4NzU3MDUwN3ww&ixlib=rb-4.0.3&q=80&w=1080" alt="concept" />
        </div>
      </div>
      <h2 class="mt-16 flex items-center justify-center gap-8 mb-8">
        <span class="border-[1px] border-primary w-10 text-center"></span>
        <p class="capitalize text-3xl font-bold">Information Class</p>
        <span class="border-[1px] border-primary w-10 text-center"></span>
      </h2>
      <div id="content_class" class="flex items-start justify-center gap-8 w-2/3"></div>
      <div class="curtain"></div>
    </section>
    <!-- End Class -->

    <!-- Start Schedule -->
    <section class="bg-secondary flex flex-col justify-center items-center p-28 relative">
      <h2 class="capitalize text-primary text-3xl font-bold">Schedule</h2>
      <p class="font-semibold mb-8">schedule</p>
      <div class="bg-[#ffffff99] rounded-xl p-12">
        <div class="border rounded-md bg-white px-28 py-10 font-semibold leading-8 text-xl">
          <div>Preschool class: Every Tuesday from 14:00 to 15:00</div>
          <div>Elementary school class Every Thursday 16:30-17:30</div>
        </div>
        <h3 class="mt-16 flex items-center justify-center gap-8 mb-8">
          <span class="border-[1px] border-primary w-10 text-center"></span>
          <p class="capitalize text-2xl font-bold">Upcoming events and exhibitions</p>
          <span class="border-[1px] border-primary w-10 text-center"></span>
        </h3>
        <div class="flex items-center justify-center gap-8 w-full">
          <div class="w-1/2 text-center">
            <h4 class="w-auto font-bold text-lg rounded-md w-full py-0.5 mb-4 text-center bg-thirdary text-white">November</h4>
            <ul class="text-start">
              <li>1 day fire Festival</li>
              <li>26th Exhibition</li>
            </ul>
          </div>
          <div class="w-1/2 text-center">
            <h4 class="w-auto font-bold text-lg rounded-md w-full py-0.5 mb-4 text-center bg-thirdary text-white">December</h4>
            <ul class="text-start">
              <li>1 day fire Festival</li>
              <li>26th Exhibition</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="curtain_gray"></div>
    </section>
    <!-- End Schedule -->

    <!-- Start FAQ -->
    <section class="flex flex-col justify-center items-center py-28 relative">
      <h2 class="capitalize text-primary text-3xl font-bold">FAQ</h2>
      <p class="font-semibold mb-8">FAQ</p>
      <div class="mx-auto w-2/3">
        <ul class="leading-10 w-full text-start">
          <ol class="flex items-center gap-3 justify-start">
            <span class="px-[8px] py-[1px] rounded-full text-white text-center text-xl bg-[#7cb7ff] font-black">Q</span>
            <p>Question 1 goes here. Question 1 goes here.</p>
          </ol>
          <ol class="flex items-center gap-3 justify-start mb-6">
            <span class="px-[8px] py-[1px] rounded-full text-white text-center text-xl bg-thirdary font-black">A</span>
            <p>Answer 1 goes here. Answer 1 goes here. Answer 1 goes here. Answer 1 goes here.</p>
          </ol>
          <ol class="flex items-center gap-3 justify-start">
            <span class="px-[8px] py-[1px] rounded-full text-white text-center text-xl bg-[#7cb7ff] font-black">Q</span>
            <p>Question 1 goes here. Question 1 goes here.</p>
          </ol>
          <ol class="flex items-center gap-3 justify-start">
            <span class="px-[8px] py-[1px] rounded-full text-white text-center text-xl bg-thirdary font-black">A</span>
            <p>Answer 1 goes here. Answer 1 goes here. Answer 1 goes here. Answer 1 goes here.</p>
          </ol>
        </ul>
        <div class="">
          <?php include(locate_template('template-parts/banner-btn.php')); ?>
        </div>
      </div>
      <div class="curtain"></div>
    </section>
    <!-- End FAQ -->

    <!-- Start access -->
    <section class="flex flex-col justify-center items-center p-28 relative bg-secondary">
      <h2 class="capitalize text-primary text-3xl font-bold">Access</h2>
      <p class="font-semibold mb-8">access</p>
      <div>map</div>
      <p class="font-semibold">Application form is here</p>
      <p class="font-semibold">It is about a 5-minute walk from the nearest station. There is a bicycle parking space in front of the classroom.</p>
    </section>
    <!-- End access -->

<?php 
get_footer();
?>

<script defer src="<?php echo get_template_directory_uri() . '/js/home.js' ?>" ></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
  });
</script>
