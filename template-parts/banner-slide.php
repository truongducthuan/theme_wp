<?php
$banner_slides = get_field('banner_background');
?>

<style>
.slider-one,
.slider-two {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  animation: slider-one 12s linear infinite;
}
  .slider-one-image,
  .slider-two-image {
    width: 100%;
    height: 100%;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    animation: zoom-out 6s linear  infinite;
  }
  .slider-one-image {
    background-image: url("<?php echo $banner_slides[0]['background']; ?>");
  }
    
.slider-two {
  animation: slider-two 12s linear infinite;
}
  .slider-two-image {
    background-image: url("<?php echo $banner_slides[1]['background']; ?>");
  }
    .slider-text {
      animation-delay: 3s;
    }
  

.banner-clip-path {
  clip-path: polygon(50% 0, 100% 0%, 50% 100%, 0% 100%);
  /* clip-path: polygon(55% 0, 100% 0%, 45% 100%, 0% 100%); */
}

#banner_slider_text--01::after {
  position: absolute;
  content: "DRIVING";
  left: 0;
  color: #fff;
  font-size: 6rem;
}

/* @keyframes text-up {
  10% {
    transform: translateY(0px);
  }

  100% {
    transform: translateY(0px);
  }
} */

@keyframes zoom-out {
  0% {
    opacity: 0; /* Start hidden */
    width: 100%;
  }
  20% {
    opacity: 1;
    width: 100%;
  }
  80% {
    opacity: 1;
    width: 105%;
  }
  100% {
    opacity: 0; /* Fade out smoothly */
    width: 105%;
  }
}

@keyframes slider-one {
  0% {
    visibility: visible;
  }
  50% {
    visibility: visible;
  }
  100% {
    visibility: hidden;
  }
}

@keyframes slider-two {
  0% {
    visibility: hidden;
  }

  50% {
    visibility: hidden;
  }

  100% {
    visibility: visible;
  }
}


</style>      

<div class="w-full h-500px md:h-[700px] lg:h-[800px] xl:h-[900px] 2xl:h-[1100px]">

          <div class="flex gap-5 max-md:flex-col relative w-full h-full">
            <!-- Text & -->
            <div class="flex absolute left-0 top-0 flex-col mt-[140px] mb-[80px] w-[45%] max-md:ml-0 max-md:w-full">
              <img
                loading="lazy"
                src="<?php echo get_template_directory_uri() ?>/assets/svg/banner-left.svg"
                class="object-contain self-stretch my-auto mr-0 w-full aspect-[1.03] max-md:mt-10 max-md:max-w-full"
              />
            </div>
   
            <div class="flex flex-col absolute z-10 top-0 right-0 bottom-0 w-3/5 max-md:ml-0 max-md:w-full mix-blend-exclusion" id="banner_slider">
                        <div
                        id="banner_slider_text--01"
                          class="absolute text-white z-20 xl:mt-[37%] 2xl:mt-[30%] xl:-left-[34%] 2xl:-left-[16%] text-8xl mt-82 uppercase font-bold mix-blend-difference text-nowrap"
                        >
                          Driving Age
                        </div>
                        <div
                          class="absolute text-white z-20 xl:mt-[55%] 2xl:mt-[44%] xl:-left-[20%] 2xl:-left-[10%] text-8xl mt-82 uppercase font-bold mix-blend-difference text-nowrap"
                        >
                        with Technology
                        </div>
              <div class="slider-one banner-clip-path">
                <div class="slider-one-image">
                </div>
              </div>
              <div class="slider-two banner-clip-path">
                <div class="slider-two-image">
                  <div class="slider-text">
                  </div>
                </div>
              </div>
            </div>
            <div class="absolute inset-0 max-w-[1200px] z-10 mx-auto w-full">
              <div class="absolute flex flex-col justify-center items-center text-sm -ml-[30px] left-0 top-[30%]">
                <div class="text-center text-white rotate-90">Our Mission</div>
              </div>
                 
                </div>  
                <div
                  class="flex flex-col ml-5 w-[16.5%] max-md:ml-0 max-md:w-full absolute z-20 -right-[4%] top-[37%] self-stretch my-auto text-xs text-white max-md:mt-10"
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
</div>



