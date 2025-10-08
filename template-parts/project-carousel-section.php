<style>
  #project-carousel .carousel-container {
    scroll-behavior: smooth;
    scrollbar-width: none;
    -ms-overflow-style: none;
  }

  #project-carousel .carousel-container::-webkit-scrollbar {
    display: none;
  }

  #project-carousel .project-card {
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  }

  #project-carousel .project-card:hover #project-carousel .project-card>div {
    transform: scale(1.05);
  }

  #project-carousel .project-card:hover .project-image {
    animation: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    transform: scale(1.05);
  }

  #project-carousel .project-image {
    position: relative;
    transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
  }

  #project-carousel .arrow-btn {
    transition: all 0.3s ease;
  }

  #project-carousel .arrow-btn:hover {
    background-color: #4F46E5;
    border-color: #4F46E5;
    transform: scale(1.1);
  }

  #project-carousel .arrow-btn:hover svg {
    color: white;
  }

  #project-carousel .view-details-btn {
    transition: all 0.3s ease;
  }

  #project-carousel .view-details-btn:hover {
    transform: scale(1.1) rotate(45deg);
    background-color: #4F46E5;
  }

  #project-carousel .fade-in {
    animation: fadeIn 0.6s ease-out forwards;
    opacity: 0;
  }

  #project-carousel .stagger-1 {
    animation-delay: 0.1s;
  }

  #project-carousel .stagger-2 {
    animation-delay: 0.2s;
  }

  #project-carousel .stagger-3 {
    animation-delay: 0.3s;
  }
</style>

<?php
$the_query = new WP_Query([
  'post_type' => 'post',
  'orderby' => 'date',
  'order' => 'DESC',
  'post_status' => 'publish',
]);

// echo '<pre class="text-black">';
// print_r($projects);
// echo '</pre>';
?>

<section class="py-5 lg:py-16 px-4 md:px-8 lg:px-16" id="project-carousel">
  <div class="max-w-7xl mx-auto">

    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-2 lg:mb-24 gap-6">
      <div class="fade-in stagger-1 w-full flex flex-col items-center justify-center">
        <!-- Section Label -->
        <div class="flex items-center gap-2 mb-4">
          <svg class="w-5 h-5 text-secondary" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 3.5L13 6.5L10 9.5L7 6.5L10 3.5Z" />
            <path d="M3.5 10L6.5 7L9.5 10L6.5 13L3.5 10Z" />
            <path d="M10.5 10L13.5 7L16.5 10L13.5 13L10.5 10Z" />
          </svg>
          <h3 class="text-2xl sm:text-3xl text-secondary font-semibold">ニュース</h3>
          <svg class="w-5 h-5 text-secondary" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 3.5L13 6.5L10 9.5L7 6.5L10 3.5Z" />
            <path d="M3.5 10L6.5 7L9.5 10L6.5 13L3.5 10Z" />
            <path d="M10.5 10L13.5 7L16.5 10L13.5 13L10.5 10Z" />
          </svg>
        </div>

        <!-- Main Heading -->
        <h2 class="text-3xl md:text-5xl text-center font-bold text-gray-900 leading-tight">
          最新のお知らせ・更新情報
        </h2>
      </div>
    </div>

    <!-- Carousel Container -->
    <div class="relative fade-in stagger-3">
      <button
        id="prevBtnProject"
        class="nav-button absolute left-2 top-1/2 -translate-y-1/2 -translate-x-4 md:-translate-x-12 z-10 w-12 h-12 md:w-14 md:h-14 rounded-full border-2 border-primary bg-white flex items-center justify-center text-indigo-600 hover:bg-indigo-600 hover:text-white shadow-lg"
        aria-label="Previous logos">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
      </button>

      <button
        id="nextBtnProject"
        class="nav-button absolute right-2 top-1/2 -translate-y-1/2 translate-x-4 md:translate-x-12 z-10 w-12 h-12 md:w-14 md:h-14 rounded-full border-2 border-primary bg-white flex items-center justify-center text-indigo-600 hover:bg-indigo-600 hover:text-white shadow-lg"
        aria-label="Next logos">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
      </button>

      <div id="carouselProjects" class="carousel-container flex gap-6 overflow-x-auto pb-4">
        <?php
        if ($the_query->have_posts()):
          while ($the_query->have_posts()) {
            $the_query->the_post();
            $image = get_field('image', get_the_ID());
            $author_id = $post->post_author; // Get author ID
            $author_name = get_the_author_meta('display_name', $author_id);
        ?>
            <div class="project-card group flex-shrink-0 w-full md:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] min-w-[300px]">
              <a href="<?php the_permalink(); ?>" class="relative block h-[450px] rounded-3xl overflow-hidden shadow-lg bg-gray-900">
                <!-- Project Image -->
                <img
                  src="<?php echo $image; ?>"
                  alt="<?php the_title(); ?>"
                  class="project-image w-full h-full object-cover">

                <!-- Gradient Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>

                <!-- Info Card -->
                <div class="absolute bottom-0 left-6 right-6 bg-white group-hover:bg-primary rounded-t-2xl p-6 shadow-xl">
                  <span class="text-cyan-500 group-hover:text-white transition-all duration-200 font-semibold text-sm mb-2 block capitalize"><?php echo $author_name; ?></span>
                  <h3 class="text-xl font-bold text-gray-900 group-hover:text-white leading-tight transition-all duration-200">
                    <?php the_title(); ?>
                  </h3>
                  <button class="view-details-btn absolute -top-6 right-5 w-12 h-12 rounded-full bg-cyan-500 flex items-center justify-center text-white shadow-lg" aria-label="View project details">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                  </button>
                </div>
              </a>
            </div>
        <?php
          }
        endif;
        ?>
      </div>
    </div>

  </div>
</section>

<script>
  // Carousel functionality
  const carouselProjects = document.getElementById('carouselProjects');
  const prevBtnProject = document.getElementById('prevBtnProject');
  const nextBtnProject = document.getElementById('nextBtnProject');

  // Calculate scroll amount based on card width + gap
  function getScrollAmount() {
    const card = carouselProjects.querySelector('.project-card');
    const cardWidth = card.offsetWidth;
    const gap = 24; // 6 * 4px (gap-6)
    return cardWidth + gap;
  }

  // Previous button
  prevBtnProject.addEventListener('click', () => {
    carouselProjects.scrollBy({
      left: -getScrollAmount(),
      behavior: 'smooth'
    });
  });

  // Next button
  nextBtnProject.addEventListener('click', () => {
    carouselProjects.scrollBy({
      left: getScrollAmount(),
      behavior: 'smooth'
    });
  });

  // Touch/swipe support
  let startX = 0;
  let scrollLeft = 0;
  let isDown = false;

  carouselProjects.addEventListener('mousedown', (e) => {
    isDown = true;
    carouselProjects.style.cursor = 'grabbing';
    startX = e.pageX - carouselProjects.offsetLeft;
    scrollLeft = carouselProjects.scrollLeft;
  });

  carouselProjects.addEventListener('mouseleave', () => {
    isDown = false;
    carouselProjects.style.cursor = 'grab';
  });

  carouselProjects.addEventListener('mouseup', () => {
    isDown = false;
    carouselProjects.style.cursor = 'grab';
  });

  carouselProjects.addEventListener('mousemove', (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - carouselProjects.offsetLeft;
    const walk = (x - startX) * 2;
    carouselProjects.scrollLeft = scrollLeft - walk;
  });

  // Auto-play carouselProjects (optional)
  let autoPlayIntervalProject;

  function startAutoPlayProjects() {
    autoPlayIntervalProject = setInterval(() => {
      const maxScroll = carouselProjects.scrollWidth - carouselProjects.clientWidth;
      if (carouselProjects.scrollLeft >= maxScroll) {
        carouselProjects.scrollTo({
          left: 0,
          behavior: 'smooth'
        });
      } else {
        carouselProjects.scrollBy({
          left: getScrollAmount(),
          behavior: 'smooth'
        });
      }
    }, 5000);
  }

  function stopAutoPlayProjects() {
    clearInterval(autoPlayIntervalProject);
  }

  // Start auto-play
  // startAutoPlayProjects();

  // Pause on hover
  // carouselProjects.addEventListener('mouseenter', stopAutoPlayProjects);
  // carouselProjects.addEventListener('mouseleave', startAutoPlayProjects);

  // Update button states based on scroll position
  function updateButtonStates() {
    const maxScroll = carouselProjects.scrollWidth - carouselProjects.clientWidth;
    prevBtnProject.style.opacity = carouselProjects.scrollLeft <= 0 ? '0.5' : '1';
    nextBtnProject.style.opacity = carouselProjects.scrollLeft >= maxScroll ? '0.5' : '1';
  }

  carouselProjects.addEventListener('scroll', updateButtonStates);
  updateButtonStates();
</script>