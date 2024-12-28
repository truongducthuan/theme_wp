<?php
$slides = get_field('slider');
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
#slide_phone .swiper-wrapper{
  transition-timing-function: linear !important;
}
#slide_phone .slide-item-even {
  transform: translateY(100px) !important;
}
</style>

<div class="swiper mySwiper2">
  <div class="swiper-wrapper">
  <?php 
            if(is_array($get_slices)): 
              $counter = 0; // Initialize a counter
              foreach($get_slices as $slice):
                $counter++; // Increment the counter
                $img = $slice['photo'];
                $bg = $slice['background'];

                $parts = explode('/n', $slice['description']);
                $desc1 = $parts[0] ?? '';
                $desc2 = $parts[1] ?? '';
                $even = $counter % 2 == 0;
           
                ?>
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
                <?php 
              endforeach;
            endif; 
            ?>
  </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
var swiper2 = new Swiper(".mySwiper2", {
  spaceBetween: 30,
  slidesPerView: 4,
  //centeredSlides: true,
  loop: true,
  autoplay: {
    delay: 0,
    disableOnInteraction: false,
  },
  speed:2000,
});


// $('.swiper-slide').hover(function(){
//   swiper2.autoplay.stop();
// }, function(){
//   swiper2.autoplay.start();
// });

</script>