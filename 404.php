<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <title><?php echo get_the_title(); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/tailwindcss/output.css'; ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/animation.css'; ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/common.css'; ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/index.css'; ?>">

</head>

<style>
  /* Custom animations for 404 page - prefixed with blog-404- */
  @keyframes blog-404-float {

    0%,
    100% {
      transform: translateY(0px);
    }

    50% {
      transform: translateY(-20px);
    }
  }

  .blog-404-float {
    animation: blog-404-float 3s ease-in-out infinite;
  }

  @keyframes blog-404-pulse-glow {

    0%,
    100% {
      box-shadow: 0 0 20px rgba(99, 102, 241, 0.3);
    }

    50% {
      box-shadow: 0 0 40px rgba(99, 102, 241, 0.6);
    }
  }

  .blog-404-pulse-glow {
    animation: blog-404-pulse-glow 2s ease-in-out infinite;
  }

  @keyframes blog-404-fade-in-up {
    from {
      opacity: 0;
      transform: translateY(30px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .blog-404-fade-in-up {
    animation: blog-404-fade-in-up 0.8s ease-out forwards;
  }

  /* Gradient background animation */
  @keyframes blog-404-gradient-shift {

    0%,
    100% {
      background-position: 0% 50%;
    }

    50% {
      background-position: 100% 50%;
    }
  }

  .blog-404-gradient-bg {
    background: linear-gradient(-45deg, #1e1b4b, #312e81, #4338ca, #3b82f6);
    background-size: 400% 400%;
    animation: blog-404-gradient-shift 15s ease infinite;
  }
</style>
</head>

<?php
$args = [
  'post_type' => 'post',
  'posts_per_page' => 3,
  'orderby'        => 'date',
  'order'          => 'DESC',
  'post_status'    => 'publish',
];

$blogs = new WP_Query($args);
?>

<section class="blog-404-gradient-bg min-h-screen flex items-center justify-center px-4 pt-32 pb-20">

  <!-- Main Container -->
  <div class="max-w-6xl w-full">

    <!-- 404 Content -->
    <div class="text-center mb-12">

      <!-- Large 404 Number -->
      <div class="blog-404-float mb-8">
        <h1 class="text-[180px] sm:text-[220px] md:text-[280px] font-bold text-white leading-none opacity-20 select-none">
          404
        </h1>
      </div>

      <!-- Error Message -->
      <div class="blog-404-fade-in-up -mt-32 sm:-mt-40 md:-mt-48 relative z-10">
        <div class="inline-flex items-center gap-3 mb-6">
          <svg class="w-8 h-8 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white">
            Blog Post Not Found
          </h2>
          <svg class="w-8 h-8 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </div>

        <p class="text-lg sm:text-xl text-gray-300 max-w-2xl mx-auto mb-8 leading-relaxed">
          Oops! The article you're looking for seems to have wandered off into the digital void.
          Don't worry though—we have plenty of other great content for you to explore.
        </p>
      </div>
    </div>

    <!-- Search Bar -->
    <div class="blog-404-fade-in-up max-w-2xl mx-auto mb-12" style="animation-delay: 0.2s;">
      <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-2 blog-404-pulse-glow">
        <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" class="flex gap-2">
          <div class="flex-1 relative">
            <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
            <input
              type="search"
              name="s"
              value="<?php echo get_search_query(); ?>"
              placeholder="Search for articles..."
              class="w-full pl-12 pr-4 py-4 bg-white/90 rounded-xl text-gray-800 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-cyan-400 transition-all duration-300" />
          </div>
          <button
            type="submit"
            class="px-8 py-4 bg-gradient-to-r from-indigo-600 to-secondary text-white font-semibold rounded-xl hover:from-indigo-700 hover:to-blue-700 transition-all duration-300 hover:scale-105 active:scale-95">
            Search
          </button>
        </form>
      </div>
    </div>

    <!-- Action Buttons -->
    <div class="blog-404-fade-in-up flex flex-wrap justify-center gap-4 mb-16" style="animation-delay: 0.3s;">
      <a
        href="<?php echo home_url('/blogs'); ?>"
        class="group px-8 py-4 bg-cyan-500 text-white font-semibold rounded-xl hover:bg-cyan-600 transition-all duration-300 hover:scale-105 active:scale-95 flex items-center gap-2">
        <svg class="w-5 h-5 transition-transform group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
        </svg>
        Back to Blog
      </a>

      <a
        href="<?php echo home_url(); ?>"
        class="px-8 py-4 bg-white/10 backdrop-blur-sm text-white font-semibold rounded-xl hover:bg-white/20 transition-all duration-300 hover:scale-105 active:scale-95 flex items-center gap-2">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
        </svg>
        Go Home
      </a>
    </div>

    <!-- Popular Articles -->
    <div class="blog-404-fade-in-up" style="animation-delay: 0.4s;">
      <h3 class="text-2xl font-bold text-white text-center mb-8">
        Popular Articles You Might Like
      </h3>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <?php
        if ($blogs->have_posts()) {
          while ($blogs->have_posts()) {
            $blogs->the_post();

            $image       = get_field('image', get_the_ID());
            $author_id   = get_the_author_meta('ID');
            $author_name = get_the_author_meta('display_name', $author_id);

            $data = [
              'post'        => get_post(),
              'image'       => $image,
              'author_name' => $author_name,
            ];

            get_template_part('template-parts/blogs/blog-card', null, $data);
          }
          wp_reset_postdata();
        }
        ?>
      </div>
    </div>

  </div>

  <script>
    // Add staggered animation delays to article cards
    document.addEventListener('DOMContentLoaded', () => {
      const cards = document.querySelectorAll('.grid > a');
      cards.forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        card.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';

        setTimeout(() => {
          card.style.opacity = '1';
          card.style.transform = 'translateY(0)';
        }, 600 + (index * 150));
      });
    });
  </script>