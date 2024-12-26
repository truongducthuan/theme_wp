<style>
  /* BAnner swiper */
#banner_slider .swiper {
  width: 100%;
  height: 100%;
}

#banner_slider .swiper-slide {
  background-position: center;
  background-size: cover;
}

#banner_slider .swiper-slide img {
  display: block;
  width: 100%;
}
#banner_slider .banner_photo img{
  clip-path: polygon(50% 0, 100% 0%, 50% 100%, 0% 100%);
  /* clip-path: polygon(60% 3%, 100% 0%, 40% 100%, 0% 100%); */
}
#banner_slider .swiper-zoom-target {
  /* transition: scaleUp 4s ease; */
  animation-duration: 4s;
}
/* #banner_slider .swiper-slide-active {
  transition: zoom-out 4s ease;
} */

.banner-slider__item {
  position: relative;
  width: 100%;
  height: 100%;
  overflow: hidden;
  /* clip-path: polygon(50% 0, 100% 0%, 50% 100%, 0% 100%); */
}

.banner-clip-path {
  clip-path: polygon(50% 0, 100% 0%, 50% 100%, 0% 100%);
}

.banner-text__slice--right {
  clip-path: polygon(50% 0, 100% 0%, 100% 100%, 0% 100%);

}

.banner-text__01 {
  font-size: clamp(20rem, calc(22rem - (1600px - 100vw) * .15), 22rem);
  margin-right: calc(var(--pc-base-padding) * -2);
  overflow: hidden;
  position: absolute;
  right: 0;
  left: 0;
  top: 0;
  /* padding-top: calc(91.8rem - 14rem); */
  font-size: 7rem;
  white-space: nowrap;
  letter-spacing: 0;
  line-height: 1;
  text-transform: uppercase;
}
.banner-text__01::after {
  mask-position: calc(50% + 2rem + 12rem) 5.2rem;
  mask-size: 82rem;
  content: "DRIVING AGE";
  position: absolute;
  right: 0;
  left: 0;
  top: 0;
  /* padding-top: calc(91.8rem - 14rem); */
  color: #fff;
  -webkit-mask-image: url('https://www.hba.co.jp/recruit/assets/img/index/main-mask.svg');
  -webkit-mask-repeat: no-repeat;
  -webkit-mask-position: 0 0;
  -webkit-mask-size: 100%;
  mask-image: url('https://www.hba.co.jp/recruit/assets/img/index/main-mask.svg');
  mask-repeat: no-repeat;
  mask-position: 0 0;
  mask-size: 100%;
  mix-blend-mode: overlay;
  z-index: 10;
}
.banner-text__01::before {
  mask-position: calc(50% + 2rem) 0;
  mask-size: 82rem;
  content: "DRIVING AGE";
  position: absolute;
  right: 0;
  left: 0;
  top: 0;
  /* padding-top: calc(91.8rem - 14rem); */
  color: #fff;
  -webkit-mask-image: url('https://www.hba.co.jp/recruit/assets/img/index/main-mask.svg');
  -webkit-mask-repeat: no-repeat;
  -webkit-mask-position: 0 0;
  -webkit-mask-size: 100%;
  mask-image: url('https://www.hba.co.jp/recruit/assets/img/index/main-mask.svg');
  mask-repeat: no-repeat;
  mask-position: 0 0;
  mask-size: 100%;
  mix-blend-mode: overlay;
  z-index: 10;
}
.image-container {
  background-image: url("https://www.hba.co.jp/recruit/uploads/2024/09/mv01.jpg");
  background-size: cover;
  position: relative;
  height: 300px;
}

.text {
  background-color: white;
  color: black;
  font-size: 10vw; 
  font-weight: bold;
  margin: 0 auto;
  padding: 10px;
  width: 50%;
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  mix-blend-mode: screen;
}

@keyframes scaleUp {
  0% {
    transform: scale(1) !important;
  }
  100% {
    transform: scale(1.1) !important;
  }
}
@keyframes zoom-out {
  100% {
    width: 105%;
  }
}

</style>      

<div class="w-full max-md:max-w-full">

          <div class="flex gap-5 max-md:flex-col relative h-[700px] w-full">
            <!-- Text & -->
            <?php include(locate_template('template-parts/banner-left.php')); ?>
            <div class="image-container">

  <div class="text">PARIS</div>
</div>

            <div class="flex flex-col absolute top-0 right-0 bottom-0 w-3/5 max-md:ml-0 max-md:w-full" id="banner_slider">
            
            <div class="swiper mySwiper_banner">
            <div class="swiper-wrapper">
              <?php 
              $banner_slides = get_field('banner_background');
              if(!empty($banner_slides)){
                for ($i = 0; $i < count($banner_slides); $i++) {
                  $slide = $banner_slides[$i]; 
                  $unique_class = 'banner-slider__item-' . $i;
                  ?>
                  <div class="swiper-slide">
                    <div class="swiper-zoom-container banner-clip-path">
                      <!-- <div class="swiper-zoom-target w-full h-full"> -->
                        <div class="relative w-full banner_photo banner-slider__item overflow-hidden <?php echo $unique_class; ?> swiper-zoom-target">
                          <div class="text flex">PARIS PARIS PARIS</div>
                        </div>
                      <!-- </div> -->
                    </div>
                  </div>
                  <?php
                }
              }
              ?>
            </div>
          </div>

          <style>
          <?php 
          if(!empty($banner_slides)){
            for ($i = 0; $i < count($banner_slides); $i++) {
              $slide = $banner_slides[$i]; 
              $unique_class = 'banner-slider__item-' . $i;
              ?>
              .<?php echo $unique_class; ?>::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                width: 100%;  
                height: 100%;
                background-size: cover;
                background-position: center;
                transform-origin: center;
                background-image: url('<?php echo $slide['background']; ?>');
                z-index: 1;
                /* transform: scale(1); */
                /* animation: scaleUp 4s infinite; */
                /* transition: all 5s ease; */
                /* animation: zoom-out 3s linear infinite; */
              }
              <?php
            }
          }
          ?>
          </style>
            
                <!-- <script> 
                  var slideIndex = 0;
                  showSlides();

                  function showSlides() {
                    var i = 0;
                    var times = 4 * (i + 1);
                    var slides = document.getElementsByClassName("banner-slide__el");
                    for (; i < slides.length; i++) {
                      slides[i].style.zIndex = -2;
                      slides[i].classList.remove('banner-slide');
                    }
                    console.log('run  ', i, slideIndex)
        
                    slides[slideIndex].style.zIndex = -1;
                    slides[slideIndex].classList.add('banner-slide');

                    slideIndex++
                    if (slideIndex >= slides.length) {
                      slideIndex = 0;
                    }
                    setTimeout(showSlides, 10000); // Change image every 5 seconds
                    return
                  }
    
                </script> -->
         
            </div>

            <div class="absolute inset-0 max-w-[1200px] z-10 mx-auto w-full">
              <div class="absolute flex flex-col justify-center items-center text-sm -ml-[30px] left-0 top-[40%]">
                <div class="text-center text-white rotate-90">Our Mission</div>
              </div>
                  <div class="relative mt-60 ml-[200px] max-md:mt-10 max-md:max-w-full">
                    <div class="flex gap-5 max-md:flex-col">
                      <div
                        class="flex flex-col w-[83%] max-md:ml-0 max-md:w-full"
                      >
                        <div
                          class="banner-text__01"
                        >
                          Driving Age
                        </div>
                      </div>
                      
                    </div>
                  </div>
                  <div
                  class="hidden relative text-8xl font-black text-white uppercase max-md:mt-10 max-md:max-w-full max-md:text-4xl"
                  >
                    with Technology
                  </div>
                </div>  
                <div
                  class="flex flex-col ml-5 w-[17%] max-md:ml-0 max-md:w-full absolute z-20 -right-[4%] top-[37%] self-stretch my-auto text-xs text-white max-md:mt-10"
                >
                  <div
                    class="self-stretch my-auto text-xs text-white max-md:mt-10"
                  >
                    <div class="">
                      <span class="ml-8">Bringing Happiness</span>
                      <br />
                      <span class="ml-6">Enterprises by</span>
                      <br />
                      <span class="ml-4">Harnessing the Potential</span>
                      <br />
                      <span>Of Technology</span>
                    </div>
                  </div>
                </div>
            </div>

        </div> 
