<?php 
$args = array(
  'post_type' => 'project',
  'post_status' => 'publish',
  'posts_per_page' => 5, // retrieve all posts
);

$projects = new WP_Query( $args );
?>

<style>
#slide_project .swiper {
  width: 100%;
  height: 100%;
}

#slide_project .swiper-slide {
  text-align: center;
  font-size: 18px;
  background: transparent;

  /* Center slide text vertically */
  display: -webkit-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  -webkit-justify-content: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  -webkit-align-items: center;
  align-items: start;
/* 
  height: 80%;
  transform: translateY(50px) !important; */
}

#slide_project .swiper-slide img {
  display: block;
  width: 100%;
  height: auto;
  object-fit: cover;
}
#slide_project .swiper-wrapper{
  transition-timing-function: linear !important;
}

</style>

<div class="py-16 bg-white" id="slide_project">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                DỰ ÁN CỦA HỌC SINH
            </h2>
        </div>

        <div class="w-full h-[350px] overflow-hidden relative my-12">
        <div class="swiper mySwiper3">
            <div class="swiper-wrapper">
                <?php 
                if ($projects->have_posts()): 
                    foreach ($projects->posts as $post): 
                        setup_postdata($post);
                        ?>
                        <div class="swiper-slide bg-gray-100 rounded-lg overflow-hidden shadow-xl relative">
                            <div class="p-4">
                                <?php if (!empty($cards['image'])): ?>
                                    <a href="<?php echo esc_url(get_permalink()); ?>" class="block w-full h-[180px] overflow-hidden flex items-start">
                                    <?php the_post_thumbnail('thumbnail', ['class' => 'w-20 h-16 object-cover rounded mr-3']); ?>
                                    <!-- <img src="<?php // echo esc_url($cards['image']); ?>" alt="<?php // echo esc_attr(get_the_title()); ?>" class="w-full h-64 object-cover object-center rounded-lg hover:scale-105 ease-in-out transition duration-300"> -->
                                    </a>
                                <?php endif; ?>

                                <h3 class="text-2xl font-bold mt-4 text-center"><?php echo wp_trim_words(get_the_title(), 8, '...'); ?></h3>

                                <p class="text-gray-700 text-center mt-2">
                                    <?php echo wp_trim_words(get_the_excerpt(), 8, '...'); ?>
                                </p>
                            </div>
                        </div>
                        <?php

                    endforeach; 
                    wp_reset_postdata();
                endif; 
                ?>

            </div>
        </div>
        </div>

    </div>
</div>
<script>
var swiper3 = new Swiper(".mySwiper3", {
  spaceBetween: 10,
  slidesPerView: 2,
  // centeredSlides: true,
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 10,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
  },
  loop: true,
  autoplay: {
    delay: -10,
    // disableOnInteraction: false,
  },
  speed:8000,
});


$('.swiper-slide').hover(function(){
  swiper3.autoplay.stop();
}, function(){
  swiper3.autoplay.start();
});

</script>