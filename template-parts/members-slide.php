<style>
.swiper-scrollbar {
  background-color: #f9f9f9;
  --swiper-scrollbar-bottom: 0;
  --swiper-scrollbar-drag-bg-color: #dda3b6;
  --swiper-scrollbar-size: 8px;
}

/* MEDIA QUERIES */
/*  */
</style>

<?php 
  $members = get_field('members');
  ?>
<div class="member-slide">
    <section id="recipes" class="w-full">
      <div class="recipe-container">
        <div class="swiper mySwiper3">
          <div class="swiper-wrapper">
          <?php 
            if($members): 
              
              $counter = 0; // Initialize a counter
              foreach($members as $member):
                $counter++;
                ?>
                <div class="swiper-slide relative post h-[350px] lg:h-[500px] overflow-hidden cursor-pointer group mb-12 member_detail" data-set="<?php echo htmlspecialchars(json_encode($member), ENT_QUOTES, 'UTF-8'); ?>">
                  <div class="absolute top-0 z-10 left-[8rem] md:left-[12rem] lg:left-[11rem] xl:left-[12rem] text-6xl lg:text-8xl font-bold text-white mix-blend-difference">0<?php echo $counter;?></div>
                  <div class="w-full h-[95%] lg:h-[90%] translate-y-5 flex flex-col relative">
                    <div class="relative w-full h-full photo flex items-center justify-center">
                      <div class="absolute top-0 right-0 left-0 bottom-0  z-index-negative overflow-hidden duration-300">
                        <img src="<?php echo $member['photo']; ?>" class="human transition-all duration-500 group-hover:scale-105" >
                      </div>
                    </div>
                    <div class="absolute z-10 bottom-8 right-[32%] w-7/12 flex justify-between items-end text-white">
                      <div>
                        <p class="text-white"><?php echo $member['position']; ?></p>
                        <h3 class="text-xl lg:text-3xl font-bold text-white"><?php echo $member['name_1']; ?></h3>
                      </div>
                      <div class="text-sm"><?php echo $member['name_2']; ?></div>
                    </div>
                  </div>
                </div>
                <?php 
              endforeach;
              wp_reset_postdata();
            endif; 
            ?>
          </div>
          <div class="swiper-scrollbar cursor-grabbing"></div>
        </div>
      </div>
    </section>
</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>

// Swiper

var swiper = new Swiper(".mySwiper3", {
  grabCursor: true,
  speed: 400,
  // mousewheel: {
  //   invert: false,
  // },
  mousewheel: false, // Disabled mousewheel interaction
  scrollbar: {
    el: ".swiper-scrollbar",
    draggable: true,
  },
  slidesPerView: 2,
  spaceBetween: -72,
  // Responsive breakpoints
  breakpoints: {
    900: {
      slidesPerView: 2,
      spaceBetween: -120,
    },
    1200: {
      slidesPerView: 3,
      spaceBetween: -140,
    },
    1600: {
      slidesPerView: 4,
      spaceBetween: -140,
    },
  },
});
</script>