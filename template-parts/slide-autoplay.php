<?php
// get achievements
$the_query = new WP_Query(array(
  'post_type' => 'achievement',
  'post_status' => 'publish',
  'posts_per_page' => -1
));
// echo '<pre>';
// print_r($the_query->posts);
// echo '</pre>';

?>

<style>
#slide_phone .swiper {
  width: 100%;
  height: 100%;
}

#slide_phone .swiper-slide {
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
  align-items: center;

  height: 80%;
  transform: translateY(50px) !important;
}

#slide_phone .swiper-slide img {
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

#slide_phone .swiper-wrapper {
  transition-timing-function: linear !important;
}

#slide_phone .slide-item-even {
  transform: translateY(100px) !important;
}

@media (max-width: 760px) {
  #slide_phone .swiper-slide {
    height: 70%;
  }

  #slide_phone .slide-item-even {
    transform: translateY(70px) !important;
  }
}
</style>
<?php

?>
<div class="swiper mySwiper2">
  <div class="swiper-wrapper">
    <?php 
            if($the_query->have_posts()): 
              
              $counter = 0; // Initialize a counter
              foreach($the_query->posts as $post):
                $post_id = $post->ID;

                $get_name_company = get_field('name_company', $post_id);
                $get_bg = get_field('background', $post_id);
                $get_photo_left = get_field('left', $post_id);
                
                $post_type = get_post_type($post_id);
                $taxonomies = get_object_taxonomies($post_type, 'names');
                $terms_list = [];
        
                foreach ($taxonomies as $taxonomy) {
                    $terms = get_the_terms($post_id, $taxonomy);
                    
                                 
                    if ($terms && !is_wp_error($terms)) {
                      $terms_list[$taxonomy] = $terms;
                    }
                    if (!empty($terms_list)) {
                      foreach ($terms_list as $taxonomy => $terms) {
                          $post->taxonomy = $terms;
                      }
                  }
                }
                $indexRandom = 0;
                if (!empty($post->taxonomy)) {
                  $indexRandom = array_rand($post->taxonomy);
                }
                $even = $counter % 2 == 0;
                $counter++;
           
                ?>
    <div class="swiper-slide <?php echo $even ? 'slide-item-even' : ""; ?>">>
      <a href="<?php echo esc_url(home_url('/achievements/')); ?>"
        class="w-full h-full flex flex-col bg-transparent relative">
        <div class="relative w-full h-full flex items-center justify-center">
          <div class="w-2/3 mb-[30px]"><img src="<?php echo $get_photo_left; ?>">
          </div>
          <div class="absolute top-0 right-0 left-0 bottom-0  z-index-negative">
            <img src="<?php echo $get_bg; ?>" class="achievement-border-radius">

            <?php if($post->taxonomy): ?>
            <div class="absolute text-sm md:text-base right-0 bottom-[10px] bg-[#D70C18] z-20 py-0.5 px-4 text-white">
              <?php echo $post->taxonomy[$indexRandom]->name; ?>
            </div>
            <?php endif; ?>
          </div>
        </div>
        <div class="text-white mt-2 md:mt-4 text-sm md:text-base leading-5 md:leading-9">
          <?php echo '<span class="font-bold">'.$post->post_title .'</span>' . '<br>' . '<span class="font-light">'. $get_name_company .'</span>'; ?>
        </div>
        <div
          class="absolute -top-[25px] lg:top-[-50px] left-[20px] text-5xl lg:text-[80px] font-bold text-white mix-blend-difference">
          0<?php echo $counter; ?></div>
      </a>
    </div>
    <?php 
              endforeach;
              wp_reset_postdata();
            endif; 
            ?>
  </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
var swiper2 = new Swiper(".mySwiper2", {
  spaceBetween: 10,
  slidesPerView: 2,
  //centeredSlides: true,
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
      slidesPerView: 4,
      spaceBetween: 40,
    },
  },
  loop: true,
  autoplay: {
    delay: -10,
    disableOnInteraction: false,
  },
  speed: 6000,
});


$('.swiper-slide').hover(function() {
  swiper2.autoplay.stop();
}, function() {
  swiper2.autoplay.start();
});
</script>