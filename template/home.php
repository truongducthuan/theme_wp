<?php 
/* Template Name: Home */
get_header();
?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/home.css">
<style>
  .curtain:after, .curtain_header:after {
    background-image: url('<?php echo get_template_directory_uri(); ?>/asset/svg/rhinestone.svg');
  }
</style>

<!-- Start banner -->
<section class="mt-[120px] flex items-center justify-center gap-12 pb-20 relative">
      <!-- Start Slice -->
      <div class="w-[50%] h-[500px]">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="https://storage.googleapis.com/studio-design-asset-files/projects/RQqJGMe2ag/s-1800x2400_v-frms_webp_f3fc22d0-13e6-41d6-b025-332b8b8e19b2_middle.webp" class="rounded-br-[50px]" >
            </div>
            <div class="swiper-slide">
              <img src="https://storage.googleapis.com/studio-design-asset-files/projects/RQqJGMe2ag/s-2400x1597_v-frms_webp_77660f56-df79-4e80-a14e-58c70191fa3d_middle.webp" class="rounded-br-[50px]" >
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
    <section class="flex flex-col justify-center items-center py-20 bg-secondary">
      <h2 class="capitalize text-primary text-3xl font-bold">News</h2>
      <span class="font-semibold mb-6">news</span>
      <div id="content_news" class="w-full">
      </div>
      <a href="#"><button class="rounded-3xl text-white bg-[#797979] px-8 py-3 uppercase mt-14 hover:scale-105 hover:bg-primary cursor-pointer transition-all duration-300">Click here for the list of announcements.</button></a>
    </section>
    <!-- End News -->

    <!-- Start Class -->
    <section>
      <h2>Concept</h2>
        <div>
        <div>
          <div>An art class full of fun that nurtures ideas and sensibilities.</div>
          <p>This is an art classroom that values children's free expression and creativity. Through colorful colors and fun lessons, we nurture children's ideas and sensibilities, fostering their individual talents. Our classroom encourages children to think freely and allows them to experience joy and growth through art.</p>
        </div>
        <div>
          <image src="" alt="concept" />
        </div>
      </div>
      <h2>Information Class</h2>
      <div id="content_class"></div>
    </section>
    <!-- End Class -->

    <!-- Start Schedule -->
    <section>
    <h2>Schedule</h2>
    <p>schedule</p>
    <div>
      <div>Preschool class: Every Tuesday from 14:00 to 15:00</div>
      <div>Elementary school class Every Thursday 16:30-17:30</div>
    </div>
    <h3>Upcoming events and exhibitions</h3>
    <div>
      <div>
        <h4>November</h4>
        <ul>
          <li>1 day fire Festival</li>
          <li>26th Exhibition</li>
        </ul>
      </div>
      <div></div>
        <h4>December</h4>
        <ul>
          <li>1 day fire Festival</li>
          <li>26th Exhibition</li>
        </ul>
      </div>
    </div>
    </section>
    <!-- End Schedule -->

    <!-- Start FAQ -->
    <section>
      <h2>FAQ</h2>
      <p>FAQ</p>
      <ul>
        <ol>
          <span>Q</span>
          <p>Question 1 goes here. Question 1 goes here.</p>
        </ol>
        <ol>
          <span>A</span>
          <p>Answer 1 goes here. Answer 1 goes here. Answer 1 goes here. Answer 1 goes here.</p>
        </ol>
        <ol></ol>
          <span>Q</span>
          <p>Question 1 goes here. Question 1 goes here.</p>
        </ol>
        <ol>
          <span>A</span>
          <p>Answer 1 goes here. Answer 1 goes here. Answer 1 goes here. Answer 1 goes here.</p>
        </ol>
      </ul>

      <div>
        <div><image src="" alt="" /></div>
        <div>
          <h4>Please come to a trial lesson first.</h4>
          <p>Would you like to experience the joy of art? Colorful colors and free thinking will help develop children's creativity. We will support your child's growth together.</p>
          <a href="/templates/form.html">Application form is here</a>
        </div>
      </div>
    </section>
    <!-- End FAQ -->

    <!-- Start access -->
    <section>
      <h2>Access</h2>
      <p>access</p>
      <div>map</div>
      <p>Application form is here</p>
      <p>It is about a 5-minute walk from the nearest station. There is a bicycle parking space in front of the classroom.</p>
    </section>
    <!-- End access -->

  <footer>
    <div>privacy policy</div>
    <div></div>
    <div>©Kids Art Class</div>
  </footer>
</main>

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
</body>
</html>