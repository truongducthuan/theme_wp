<?php 
/* Template Name: Home */
get_header();

$the_query = new WP_Query(array(
  'post_status' => 'publish',
  'posts_per_page' => 5,
));

$sliceImgs = get_field('home_slice');
//   echo '<pre>';
//   print_r($the_query);
//   echo '</pre>';

?>

<!-- Start banner -->
<section class="mt-[60px] md:mt-[70px] flex flex-col md:flex-row items-center justify-center gap-12 pb-10 md:pb-20 relative">
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
        <h1 class="text-primary text-2xl md:text-4xl font-bold">Tìm Hiểu Khoa Học - Nắm Chặt Tương Lai</h1>
        <p class="mt-5 text-sm md:text-base font-semibold">Global Innovators Hub là môi trường học tập sáng tạo, nơi học sinh cấp 2 và cấp 3 được tự do khám phá khoa học kỹ thuật. Với sự hỗ trợ của đội ngũ kỹ thuật viên 7 ngày trong tuần, các em có thể đến bất cứ lúc nào để cùng nhau sáng tạo và nghiên cứu về robot. Tại đây, các em được tiếp cận với những kiến thức và công nghệ tiên tiến nhất, phát triển kỹ năng thực hành và nuôi dưỡng đam mê sáng tạo, sẵn sàng cho những thử thách của tương lai.</p>
		  <a href="/templates/form.html" class="block text-center"><button class="bg-primary text-sm md:text-base text-white py-2 md:py-3 px-6 md:px-8 uppercase rounded-3xl mt-8 hover:scale-105 hover:animate-pulse cursor-pointer transition-all duration-300">Liên hệ ngay với chúng tôi</button></a>
      </div>
      <div class="curtain"></div>
    </section>
    <!-- End banner -->

    <!--Start News -->
    <section class="flex flex-col justify-center items-center px-5 md:px-0 py-20 bg-secondary relative">
      <h2 class="capitalize text-primary text-2xl md:text-3xl font-bold">News</h2>
		<span class="font-semibold mb-8 text-sm md:text-base">Tin tức</span>
      <div class="w-full">
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
//         $className = "bg-[#" . (strtolower($categories[0]->name) == 'holiday' ? 'ccfff5' : (strtolower($categories[0]->name) == 'event' ? 'eeff9b' : 'ead0ff')) . "]";
       $className = 'bg-[#' . $array_color[$index] . '] px-1.5 rounded-xl text-sm';
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
		 	$index++;
        endwhile;
      endif; 
      ?>
      </div>
      <a href="<?php echo esc_url(home_url('/tin-tuc')); ?>"><button class="rounded-3xl text-white bg-[#797979] px-3 md:px-8 py-2 md:py-3 uppercase mt-14 hover:scale-105 hover:bg-primary cursor-pointer transition-all duration-300">Xem nhiều tin tức hơn</button></a>
      <div class="curtain_gray"></div>
    </section>
    <!-- End News -->

    <!-- Start Class -->
    <?php
      $the_class = new WP_Query(array(
        'post_status' => 'publish',
        'post_type' => 'classroom',
        'posts_per_page' => 2,
      ));
    ?>
    
    <section class="flex flex-col justify-center items-center px-5 md:px-0 py-20 relative">
      <h2 class="capitalize text-primary text-2xl md:text-3xl font-bold">Concept</h2>
		<span class="font-semibold text-sm md:text-base mb-8">Ý tưởng</span>
      <div class="w-full md:w-2/3 flex flex-col md:flex-row items-start justify-center gap-8">
        <div class="w-full md:w-1/2 order-2">
			<div class="font-semibold text-lg uppercase">Một không gian nơi các bạn tự do tìm hiểu và sáng tạo cùng khoa học - kỹ thuật.</div>
          <div class="w-full h-[4px] bg-primary text-sm md:text-base mt-4 mb-8"></div>
			<p>Chúng tôi mong muốn tạo dựng một môi trường học tập tự do và sáng tạo, nơi các bạn học sinh dù bận rộn với việc học vẫn có thể ghé thăm bất cứ lúc nào, từ sau giờ học đến các ngày cuối tuần. Tại đây, các bạn sẽ không phải chịu áp lực của việc học mà thay vào đó là không gian thoải mái để tự do sáng tạo, khám phá khoa học và thỏa mãn đam mê tìm hiểu công nghệ.</p>
        </div>
        <div class="w-full md:w-1/2 order-1">
          <image class="w-full h-[300px] rounded-xl" src="/wp-content/uploads/2024/11/210416-1.webp" alt="concept" />
        </div>
      </div>
      <h2 class="mt-16 flex items-center justify-center gap-4 md:gap-8 mb-8">
        <span class="border-[1px] border-primary w-6 md:w-10 text-center"></span>
        <p class="capitalize text-xl md:text-3xl font-bold">Information Class</p>
        <span class="border-[1px] border-primary w-6 md:w-10 text-center"></span>
      </h2>
      <div class="flex flex-col md:flex-row items-start justify-center gap-8 w-full md:w-2/3">
      <?php 
      if ( $the_class->have_posts() ) :
        $index = 0;
        while ($the_class->have_posts() ) : $the_class->the_post();
        $className = ($index % 2 == 0) ? 'bg-[#ffcfaf]' : 'bg-[#dceeb8]';
        $className .= ' font-bold text-lg rounded-md w-full py-0.5 mb-4 text-center';
      ?>
        <div class="bg-secondary rounded-xl p-8 md:p-10">
          <h2 class="<?php echo $className; ?>"><?php the_title(); ?></h2>
          <?php $slogan = get_field('slogan', $post->ID); ?>
          <?php if (!empty($slogan)): ?>
            <h2 class="font-semibold text-lg text-primary mb-2"><?php echo $slogan; ?></h2>
          <?php endif; ?>
          <?php $ages = get_field('ages', $post->ID); ?>
          <?php if (!empty($ages)): ?>
            <div class="font-bold mb-4"><?php echo "Tuổi từ " . $ages['from'] . " đến " . $ages['to']; ?></div>
          <?php endif; ?>
          <div class="text-sm md:text-base">
            <?php 
            $content = apply_filters('the_content', $post->post_content);
            $trimmed_content = substr($content, 0, 100);
            echo $trimmed_content;
            ?>
          </div>
          <a href="<?php the_permalink(); ?>" class="flex justify-center"><button class="bg-primary text-white px-8 text-center uppercase mt-6 py-1 md:py-2 rounded-3xl hover:scale-105 hover:animate-pulse cursor-pointer transition-all duration-300">Chi tiết về lớp </button></a>
        </div>
      <?php $index++; endwhile; endif; ?>
      </div>
      <div class="curtain"></div>
    </section>
    <!-- End Class -->

    <!-- Start Schedule -->
    <section class="bg-secondary flex flex-col justify-center items-center p-5 md:p-28 relative">
      <h2 class="capitalize text-primary text-2xl md:text-3xl font-bold">Schedule</h2>
      <p class="font-semibold mb-8 text-sm md:text-base">Lịch học</p>
      <div class="bg-[#ffffff99] rounded-xl p-8 md:p-12">
        <div class="border rounded-md bg-white px-10 md:px-28 py-10 font-semibold leading-8 text-xl">
			<div>Buổi học tập trung: 14h〜16h thứ 7</div>
			<div>Học tự do: 13h〜21h các ngày thứ 2 tới thứ 6</div>
        </div>
        <h3 class="mt-16 flex items-center justify-center gap-4 md:gap-8 mb-8">
          <span class="border-[1px] border-primary w-10 text-center"></span>
          <p class="capitalize text-xl md:text-2xl font-bold text-center">Sự kiện sắp diễn ra</p>
          <span class="border-[1px] border-primary w-10 text-center"></span>
        </h3>
        <div class="flex flex-col md:flex-row items-center justify-center gap-8 w-full">
          <div class="w-full md:w-1/2 text-center">
            <h4 class="w-auto font-bold text-lg rounded-md w-full py-0.5 mb-4 text-center bg-primary text-white">Tháng 11</h4>
            <ul class="text-start text-sm md:text-base">
              <li>AI là gì</li>
              <li>Ngày 26</li>
            </ul>
          </div>
          <div class="w-full md:w-1/2 text-center">
            <h4 class="w-auto font-bold text-lg rounded-md w-full py-0.5 mb-4 text-center bg-primary text-white">Tháng 12</h4>
            <ul class="text-start text-sm md:text-base">
              <li>Máy tính hoạt động thế nào</li>
              <li>Ngày 28</li>
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
      <p class="font-semibold mb-8 text-sm md:text-base">Hỏi đáp</p>
      <div class="mx-auto w-full md:w-2/3">
        <ul class="leading-10 w-full text-start text-sm md:text-base">
          <ol class="flex items-start gap-3 justify-start mb-2">
            <span class="px-[8px] py-[1px] rounded-full text-white text-center text-lg md:text-xl bg-[#7cb7ff] font-black">Q</span
				<p>Mô hình học ở đây là gì ?</p>
          </ol>
          <ol class="flex items-start gap-3 justify-start mb-6">
            <span class="px-[8px] py-[1px] rounded-full text-white text-center text-lg md:text-xl bg-thirdary font-black">A</span>
				<p>Chúng tôi tổ chức mô hình tự do sáng tạo, kết hợp những buổi hướng dẫn chi tiết với lịch cố định và những buổi học tự do theo các chủ đề được kỹ thuật viên chuẩn bị, các bạn trẻ có thể tự do sáng tạo theo ý muốn dưới sự chỉ dẫn tận tình của kỹ thuật viên.</p>
          </ol>
          <ol class="flex items-start gap-3 justify-start mb-2">
            <span class="px-[8px] py-[1px] rounded-full text-white text-center text-lg md:text-xl bg-[#7cb7ff] font-black">Q</span>
			  <p>Nội dung học là gì ?</p>
          </ol>
          <ol class="flex items-start gap-3 justify-start">
            <span class="px-[8px] py-[1px] rounded-full text-white text-center text-lg md:text-xl bg-thirdary font-black">A</span>
			  <p>Các bạn trẻ sẽ tìm hiểu về cách hoạt động của vi xử lý, cảm biết và các thiết bị điện, kết hợp với việc viết code để tạo ra những mô hình tự động hoá hoạt động theo ý mình.</p>
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
      <p class="font-semibold mb-8 text-sm md:text-base">Liên hệ</p>
      <div id="map"></div>
      <p class="font-semibold mt-5 text-left text-sm md:text-base">Liên hệ ngay với chúng tôi</p>
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

