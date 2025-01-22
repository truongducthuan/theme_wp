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
  animation: zoom-out 6s linear infinite;
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
  /* clip-path: polygon(50% 0, 100% 0%, 50% 100%, 0% 100%); */
  /* clip-path: polygon(63% 0, 100% 0, 41% 100%, 0 100%); */
  clip-path: polygon(50% 0, 100% 0, 50% 100%, 0 100%);
  /* clip-path: polygon(55% 0, 100% 0%, 45% 100%, 0% 100%); */
}

@media (max-width: 768px) {
  .banner-clip-path {
    clip-path: polygon(50% 0, 140% -10%, 60% 100%, -20% 100%)
  }
}

/* #banner_slider_text--01::after {
  position: absolute;
  content: "MAKE";
  left: 0;
  color: #fff;
  font-size: 6rem;
} */

.slogan-banner {
  position: absolute;
  right: 16%;
  top: 37%;
  z-index: 10;
  color: #fff;
  font-family: hanatotyoutyo;
  font-size: 40px;
  font-weight: 400;
  line-height: 56.1px;
  letter-spacing: -0.1em;
  text-align: justify;
  /* 'justified' should be 'justify' */
  text-underline-position: from-font;
  text-decoration-skip-ink: none;
  transform: rotate(-5deg);
}

@media (max-width: 760px) {
  .slogan-banner {
    right: 12%;
    top: 43%;
    width: 40%;
    font-size: 25px;
  }
}

/* @keyframes text-up {
  10% {
    transform: translateY(0px);
  }

  100% {
    transform: translateY(0px);
  }
} */

.slide-text__01 {
  left: -16%;
}

@media (max-width: 1600px) {
  .slide-text__01 {
    left: -32%;
  }
}

@media (max-width: 1300px) {
  .slide-text__01 {
    top: 32%;
    left: -47%;
  }
}


.slide-text__02 {
  left: -10%;
}

@media (max-width: 1600px) {
  .slide-text__02 {
    left: -18%;
  }
}

@media (max-width: 1300px) {
  .slide-text__02 {
    top: 48%;
    left: -30%;
  }
}

@media (max-width: 760px) {

  .slide-text__001,
  .slide-text__002,
  .slide-text__003,
  .slide-text__004 {
    left: 20px;
  }
}

.slide-content__h {
  height: 1100px;
}

@media (max-width: 1600px) {
  .slide-content__h {
    height: 940px;
  }
}

@media (max-width: 1300px) {
  .slide-content__h {
    height: 800px;
  }

  .slogan-banner {
    top: 30%;
    right: 14%;
  }
}

@media (max-width: 760px) {
  .slide-content__h {
    height: 400px;
  }

  .slogan-banner {
    top: 35%;
    right: 10%;
    width: 45%;
  }
}


@keyframes zoom-out {
  0% {
    opacity: 0;
    /* Start hidden */
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
    opacity: 0;
    /* Fade out smoothly */
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

<div class="w-full mt-20 lg:mt-0 lg:h-500px slide-content__h">

  <div class="flex gap-5 max-lg:flex-col relative w-full h-full">
    <!-- Text & -->
    <div class="flex absolute left-0 top-0 flex-col mt-[-70px] lg:mt-[90px] mb-[80px] max-lg:ml-0 w-[70%] lg:w-[55%]">
      <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/svg/banner-left.svg"
        class="object-contain self-stretch my-auto mr-0 w-full aspect-[1.03] max-lg:mt-10 max-lg:max-w-full" />
    </div>
    <!-- make people happy -->
    <div class="flex flex-col absolute z-10 top-0 right-0 bottom-0 w-3/5 max-lg:ml-0 max-lg:w-full mix-blend-exclusion"
      id="banner_slider">
      <div id="banner_slider_text--01"
        class="hidden lg:block absolute tracking-wide text-white z-20 slide-text__01 xl:mt-[41%] 2xl:mt-[30%] text-8xl mt-82 uppercase font-bold mix-blend-difference text-nowrap">
        Driving Age
      </div>
      <div
        class="hidden lg:block absolute tracking-wide text-white z-20 slide-text__02 xl:mt-[54%] 2xl:mt-[44%] text-8xl mt-82 uppercase font-bold mix-blend-difference text-nowrap">
        with Tech
      </div>

      <!-- responsive -->
      <div
        class="block lg:hidden absolute text-white z-20 top-[50px] md:top-[20%] md:left-[10%] slide-text__001 xl:mt-[37%] 2xl:mt-[30%] text-5xl mt-82 uppercase font-bold mix-blend-difference text-nowrap">
        MAKE
      </div>
      <div
        class="block lg:hidden absolute text-white z-20 top-[100px] md:top-[30%] md:left-[10%] slide-text__002 xl:mt-[37%] 2xl:mt-[30%] text-5xl mt-82 uppercase font-bold mix-blend-difference text-nowrap">
        PEOPLE
      </div>
      <div
        class="block lg:hidden absolute text-white z-20 top-[150px] md:top-[40%] md:left-[10%] slide-text__003 xl:mt-[55%] 2xl:mt-[44%] text-5xl mt-82 uppercase font-bold mix-blend-difference text-nowrap">
        HAPPY
      </div>
      <div
        class="block lg:hidden absolute text-white z-20 top-[200px] md:top-[50%] md:left-[10%] slide-text__004 xl:mt-[55%] 2xl:mt-[44%] text-5xl mt-82 uppercase font-bold mix-blend-difference text-nowrap">
        WITH TECH
      </div>
      <div class="slogan-banner">
        <img loading="lazy" src="<?php get_template_directory_uri() ?>/wp-content/uploads/home/未来はすぐそこに。.svg"
          class="object-contain self-stretch my-auto w-full" />


      </div>
      <!-- slide one -->
      <div class="slider-one banner-clip-path">
        <div class="slider-one-image">
        </div>
      </div>
      <!-- slide two -->
      <div class="slider-two banner-clip-path">
        <div class="slider-two-image">
          <div class="slider-text">
          </div>
        </div>
      </div>
    </div>
    <div class="absolute inset-0 max-w-[1200px] z-10 mx-auto w-full">
      <div
        class="absolute flex flex-col justify-center items-center text-[10px] lg:text-sm -ml-[30px] -right-[30px] lg:right-[95%] left-[90%] lg:left-0 top-[40px] md:top-[40%] lg:top-[40%]">
        <div class="text-center text-white rotate-90">Our Mission</div>
      </div>

    </div>
    <div
      class="flex flex-col ml-5 w-[16.5%] max-lg:ml-0 max-lg:w-full absolute z-20 right-[15px] md:right-[24%] lg:-right-[3%] top-[60%] lg:top-[40%] xl:top-[42%] self-stretch my-auto text-xs text-white max-lg:mt-10">
      <div class="self-stretch flex lg:block justify-end my-auto text-[10px] lg:text-xs text-white max-lg:mt-10">
        <div class="">
          <span class="ml-8">We strive to pioneer</span>
          <br />
          <span class="ml-6">a new age through technology</span>
          <br />
          <span class="ml-4">and pursue the creation</span>
          <br />
          <span>of new value.</span>
        </div>
      </div>
    </div>
  </div>

</div>
</div>