<?php
$banner = get_field('banner');
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
    background-image: url("<?php echo $banner['image1']; ?>");
  }
    
.slider-two {
  animation: slider-two 12s linear infinite;
}
  .slider-two-image {
    background-image: url("<?php echo $banner['image2']; ?>");
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
		right: 22%;
		top: 36%;
		z-index: 10;
		color: #fff;
    font-size: 40px;
    font-weight: 400;
    line-height: 56.1px;
    letter-spacing: -0.1em;
    text-align: justify; /* 'justified' should be 'justify' */
    text-underline-position: from-font;
    text-decoration-skip-ink: none;
		transform: rotate(-5deg);
	}

  @media (max-width: 760px) {
    .slogan-banner {
      right: 0;
    font-size: 25px;
    top: 35%;
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
	
	.slide-text__01,
    .slide-text__02,
    .slide-text__03 {
		left: 0;
        right: 0;
        transform: translate(-50%, -50%)
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
	}


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

<div class="w-full mt-20 lg:mt-0 lg:h-500px slide-content__h">
  <!-- Font + Animation + On-scroll script -->
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@500;700;900&display=swap');

    .font-tech {
      font-family: 'obitron', sans-serif;
    }

    @keyframes slideInFromLeft {
      0% {
        opacity: 0;
        transform: translateX(-100%);
      }
      100% {
        opacity: 1;
        transform: translateX(0);
      }
    }

    @keyframes slideInFromRight {
      0% {
        opacity: 0;
        transform: translateX(100%);
      }
      100% {
        opacity: 1;
        transform: translateX(0);
      }
    }

    .animate-left {
      animation: slideInFromLeft 1s ease-out forwards;
    }

    .animate-right {
      animation: slideInFromRight 1s ease-out forwards;
    }

    .hidden-opacity {
      opacity: 0;
    }
  </style>

  <!-- Scroll trigger script -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const observerOptions = {
        threshold: 0.5,
      };

      const elementsToAnimate = document.querySelectorAll(".scroll-animate");

      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.remove("hidden-opacity");
            if (entry.target.classList.contains("from-left")) {
              entry.target.classList.add("animate-left");
            } else if (entry.target.classList.contains("from-right")) {
              entry.target.classList.add("animate-right");
            }
          }
        });
      }, observerOptions);

      elementsToAnimate.forEach((el) => observer.observe(el));
    });
  </script>

  <div class="flex gap-5 max-lg:flex-col relative w-full h-full">
    <!-- make people happy -->
    <div class="absolute inset-0 flex items-center justify-start pl-10 lg:pl-20 z-10 w-full h-full mix-blend-exclusion text-left" id="banner_slider">

      <!-- desktop version -->
      <div class="hidden lg:flex flex-col gap-6 text-white z-20 text-left translate-y-[-80px]">
        <div class="text-8xl uppercase font-bold mix-blend-difference text-nowrap scroll-animate from-left hidden-opacity">LẮP GHÉP</div>
        <div class="text-8xl uppercase font-bold mix-blend-difference text-nowrap scroll-animate from-right hidden-opacity">& ĐIỀU KHIỂN</div>
        <div class="text-8xl uppercase font-bold mix-blend-difference text-nowrap scroll-animate from-left hidden-opacity">ROBOT ARDUINO</div>
      </div>

      <!-- responsive (mobile) -->
      <div class="block lg:hidden absolute top-0 bottom-0 left-5 flex flex-col justify-center gap-2 z-20 text-white text-left text-5xl uppercase font-bold mix-blend-difference text-nowrap font-tech">
        <div>HỌC CHẾ TẠO</div>
        <div>& ĐIỀU KHIỂN</div>
        <div>ROBOT VỚI</div>
        <div>ARDUINO</div>
      </div>
    </div>

    <!-- slide one -->
    <div class="slider-one banner-clip-path">
      <div class="slider-one-image"></div>
    </div>

    <!-- slide two -->
    <div class="slider-two banner-clip-path">
      <div class="slider-two-image">
        <div class="slider-text"></div>
      </div>
    </div>
  </div>
</div>