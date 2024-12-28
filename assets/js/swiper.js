
// LIST PHONES
var swiper = new Swiper(".mySwiper", {
  slidesPerView: 4,
  spaceBetween: 30,
  centeredSlides: true,
  // slidesPerView: "auto",
  freeMode: true,
  autoplay: {
    delay: 0,
    disableOnInteraction: false,
  },
  speed:2000,
});

// OUR PROJECT
var swiper = new Swiper(".mySwiperPhone", {
  slidesPerView: 1,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
});

// BANNER
var swiperBanner = new Swiper(".mySwiper_banner", {
  spaceBetween: 30,
  effect: "fade",
   autoplay: {
     delay: 4000,
     disableOnInteraction: false,
  },
  grabCursor: true,
  centeredSlides: true,
  zoom: {
    maxRatio: 1.1,
    minRation: 1
  },
  loop: true,
//   on: {
//     activeIndexChange: function () {
//         // Reset zoom for all slides
//         swiper.slides.forEach((slide) => {
//             const zoomTarget = slide.querySelector('.swiper-zoom-target');
//             if (zoomTarget) {
//                 zoomTarget.style.transform = 'scale(1)';
//             }
//         });

//         // Zoom in on the active slide
//         const activeSlide = swiper.slides[swiper.activeIndex];
//         console.log({activeSlide});
//         const zoomTarget = activeSlide.querySelector('.swiper-zoom-target');

//         if (zoomTarget) {
//             //zoomTarget.style.transform = 'scale(1.1)'; // Adjust scale as needed
//         }
//     },
// },
});
// swiperBanner.on("slideChangeTransitionStart", swiperBanner.zoom.out);
// And when transition has finished scale it up.
// swiperBanner.on("slideChangeTransitionEnd", swiperBanner.zoom.in);