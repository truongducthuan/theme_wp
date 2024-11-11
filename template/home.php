<?php 
/* Template Name: Home */
get_header();

$the_query = new WP_Query(array(
  'post_status' => 'publish',
  'posts_per_page' => 5,
));

$sliceImgs = get_field('home_slice');
  // echo '<pre>';
  // print_r($sliceImgs);
  // echo '</pre>';

?>

<!-- Start banner -->
<section class="mt-[70px] md:mt-[80px] flex flex-col md:flex-row items-center justify-center gap-12 pb-10 md:pb-20 relative">
      <!-- Start Slice -->
      <div class="w-full md:w-[50%] h-[400px] md:h-[500px] pr-5">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
              <?php if(!empty($sliceImgs)): 
                foreach($sliceImgs as $img):
                  $url = $img['image']['url'];
              ?>
            <div class="swiper-slide">
              <img src="<?php echo $url; ?>" class="rounded-br-[50px]" >
            </div>
              <?php 
              endforeach;
              endif; 
              ?>
          </div>
        </div>
      </div>
      <!-- End slice -->
      <div class="w-full md:w-[50%] px-5">
        <h1 class="text-primary text-2xl md:text-4xl font-bold">An exhilarating experience through the magic of art.</h1>
        <p class="mt-5 text-sm md:text-base font-semibold">This is an art classroom located in the 〇〇 district that nurtures children's creativity and free expression. Through colorful art activities, children expand their imagination and develop their individuality. In our fun-filled classes, we enrich their self-expression and creativity through painting and sculpture, supporting their emotionally rich growth.</p>
        <a href="/templates/form.html" class="block text-center"><button class="bg-primary text-sm md:text-base text-white py-2 md:py-3 px-6 md:px-8 uppercase rounded-3xl mt-8 hover:scale-105 hover:animate-pulse cursor-pointer transition-all duration-300">First, please come to the trial lesson.</button></a>
      </div>
      <div class="curtain"></div>
    </section>
    <!-- End banner -->

    <!--Start News -->
    <section class="flex flex-col justify-center items-center px-5 md:px-0 py-20 bg-secondary relative">
      <h2 class="capitalize text-primary text-2xl md:text-3xl font-bold">News</h2>
      <span class="font-semibold mb-8 text-sm md:text-base">news</span>
      <div class="w-full">
    <?php
      if ( $the_query->have_posts() ) :
        while ($the_query->have_posts() ) : $the_query->the_post();
        $categories = get_the_category();
        $url = get_field('blog_image', $post->ID);
        $type = get_field('type', $post->ID);
        $className = "bg-[#" . (strtolower($categories[0]->name) == 'holiday' ? 'ccfff5' : (strtolower($categories[0]->name) == 'event' ? 'eeff9b' : 'ead0ff')) . "]";
        $className .= ' px-1.5 rounded-xl text-sm';
    ?>
              <a href="<?php echo esc_url(get_permalink($post->ID)); ?>" class="flex justify-start items-center gap-5 p-5 md:max-w-[70%] mx-auto bg-white first:rounded-t-xl border-b border-[#7cb7ff] border-dashed hover:opacity-75 transition">
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
        endwhile;
      endif; 
      ?>
      </div>
      <a href="#"><button class="rounded-3xl text-white bg-[#797979] px-3 md:px-8 py-2 md:py-3 uppercase mt-14 hover:scale-105 hover:bg-primary cursor-pointer transition-all duration-300">Click here for the list of announcements.</button></a>
      <div class="curtain_gray"></div>
    </section>
    <!-- End News -->

    <!-- Start Class -->
    <section class="flex flex-col justify-center items-center px-5 md:px-0 py-20 relative">
      <h2 class="capitalize text-primary text-2xl md:text-3xl font-bold">Concept</h2>
      <span class="font-semibold text-sm md:text-base mb-8">lớp học</span>
      <div class="w-full md:w-2/3 flex flex-col md:flex-row items-start justify-center gap-8">
        <div class="w-full md:w-1/2 order-2">
          <div class="font-semibold text-lg uppercase">An art class full of fun that nurtures ideas and sensibilities.</div>
          <div class="w-full h-[4px] bg-primary text-sm md:text-base mt-4 mb-8"></div>
          <p>This is an art classroom that values children's free expression and creativity. Through colorful colors and fun lessons, we nurture children's ideas and sensibilities, fostering their individual talents. Our classroom encourages children to think freely and allows them to experience joy and growth through art.</p>
        </div>
        <div class="w-full md:w-1/2 order-1">
          <image class="w-full h-[300px] rounded-xl" src="https://images.unsplash.com/photo-1533158326339-7f3cf2404354?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w2MzQ2fDB8MXxzZWFyY2h8MzF8fHBhaW50fGVufDB8fHx8MTY4NzU3MDUwN3ww&ixlib=rb-4.0.3&q=80&w=1080" alt="concept" />
        </div>
      </div>
      <h2 class="mt-16 flex items-center justify-center gap-4 md:gap-8 mb-8">
        <span class="border-[1px] border-primary w-6 md:w-10 text-center"></span>
        <p class="capitalize text-xl md:text-3xl font-bold">Information Class</p>
        <span class="border-[1px] border-primary w-6 md:w-10 text-center"></span>
      </h2>
      <div id="content_class" class="flex flex-col md:flex-row items-start justify-center gap-8 w-full md:w-2/3"></div>
      <div class="curtain"></div>
    </section>
    <!-- End Class -->

    <!-- Start Schedule -->
    <section class="bg-secondary flex flex-col justify-center items-center p-5 md:p-28 relative">
      <h2 class="capitalize text-primary text-2xl md:text-3xl font-bold">Schedule</h2>
      <p class="font-semibold mb-8 text-sm md:text-base">schedule</p>
      <div class="bg-[#ffffff99] rounded-xl p-8 md:p-12">
        <div class="border rounded-md bg-white px-10 md:px-28 py-10 font-semibold leading-8 text-xl">
          <div>Preschool class: Every Tuesday from 14:00 to 15:00</div>
          <div>Elementary school class Every Thursday 16:30-17:30</div>
        </div>
        <h3 class="mt-16 flex items-center justify-center gap-4 md:gap-8 mb-8">
          <span class="border-[1px] border-primary w-10 text-center"></span>
          <p class="capitalize text-xl md:text-2xl font-bold text-center">Upcoming events and exhibitions</p>
          <span class="border-[1px] border-primary w-10 text-center"></span>
        </h3>
        <div class="flex flex-col md:flex-row items-center justify-center gap-8 w-full">
          <div class="w-full md:w-1/2 text-center">
            <h4 class="w-auto font-bold text-lg rounded-md w-full py-0.5 mb-4 text-center bg-thirdary text-white">November</h4>
            <ul class="text-start text-sm md:text-base">
              <li>1 day fire Festival</li>
              <li>26th Exhibition</li>
            </ul>
          </div>
          <div class="w-full md:w-1/2 text-center">
            <h4 class="w-auto font-bold text-lg rounded-md w-full py-0.5 mb-4 text-center bg-thirdary text-white">December</h4>
            <ul class="text-start text-sm md:text-base">
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
    <section class="flex flex-col justify-center items-center py-28 px-5 md:px-0 relative">
      <h2 class="capitalize text-primary text-2xl md:text-3xl font-bold">FAQ</h2>
      <p class="font-semibold mb-8 text-sm md:text-base">FAQ</p>
      <div class="mx-auto w-full md:w-2/3">
        <ul class="leading-10 w-full text-start text-sm md:text-base">
          <ol class="flex items-center gap-3 justify-start mb-2">
            <span class="px-[8px] py-[1px] rounded-full text-white text-center text-lg md:text-xl bg-[#7cb7ff] font-black">Q</span>
            <p>Question 1 goes here. Question 1 goes here.</p>
          </ol>
          <ol class="flex items-center gap-3 justify-start mb-6">
            <span class="px-[8px] py-[1px] rounded-full text-white text-center text-lg md:text-xl bg-thirdary font-black">A</span>
            <p>Answer 1 goes here. Answer 1 goes here. Answer 1 goes here. Answer 1 goes here.</p>
          </ol>
          <ol class="flex items-center gap-3 justify-start mb-2">
            <span class="px-[8px] py-[1px] rounded-full text-white text-center text-lg md:text-xl bg-[#7cb7ff] font-black">Q</span>
            <p>Question 1 goes here. Question 1 goes here.</p>
          </ol>
          <ol class="flex items-center gap-3 justify-start">
            <span class="px-[8px] py-[1px] rounded-full text-white text-center text-lg md:text-xl bg-thirdary font-black">A</span>
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
    <section class="flex flex-col justify-center items-center p-28 relative bg-secondary px-5 md:px-0">
      <h2 class="capitalize text-primary text-2xl md:text-3xl font-bold">Access</h2>
      <p class="font-semibold mb-8 text-sm md:text-base">access</p>
      <div id="map"></div>
      <p class="font-semibold mt-5 text-left text-sm md:text-base">Application form is here</p>
      <p class="font-semibold text-sm text-left md:text-base mt-4">It is about a 5-minute walk from the nearest station. There is a bicycle parking space in front of the classroom.</p>
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
