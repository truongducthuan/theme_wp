<?php
$post        = $args['post'] ?? null;
$image       = $args['image'] ?? '';
$author_name = $args['author_name'] ?? '';
?>

<style>
  /* Custom CSS with blog-listing- prefix to avoid conflicts */
  .blog-listing-card-hover {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .blog-listing-card-hover:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
  }

  .blog-listing-fade-in {
    animation: fadeIn 0.6s ease-out forwards;
    opacity: 0;
  }

  .blog-listing-date-badge {
    background: linear-gradient(135deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.5) 100%);
  }

  .blog-listing-image-overlay {
    transition: opacity 0.3s ease;
  }

  .blog-listing-card-hover:hover .blog-listing-image-overlay {
    opacity: 0.3;
  }
</style>

<article class="bg-white rounded-2xl overflow-hidden shadow-md blog-listing-card-hover blog-listing-fade-in" style="animation-delay: 0.1s;">
  <!-- Card Header with Badges -->
  <div class="p-4 pb-0 flex gap-2 flex-wrap">
    <span class="inline-flex items-center gap-1 px-3 py-1 bg-cyan-400 text-white text-xs font-semibold rounded-full">
      <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" />
      </svg>
      By <span class="capitalize"><?php echo $author_name; ?></span>
    </span>
  </div>

  <!-- Card Title -->
  <div class="p-4">
    <a href="<?php the_permalink(); ?>">
      <h3 class="text-lg font-bold text-gray-900 leading-tight hover:text-secondary transition-colors duration-300 cursor-pointer">
        <?php the_title(); ?>
      </h3>
    </a>

  </div>

  <!-- Card Image with Date Badge -->
  <div class="relative overflow-hidden group cursor-pointer">
    <a href="<?php the_permalink(); ?>">
      <img
        src="<?php echo $image; ?>"
        alt="IT Infrastructure optimization"
        class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110" />
    </a>

    <div class="absolute inset-0 bg-black opacity-0 blog-listing-image-overlay"></div>
    <div class="absolute bottom-4 right-4 blog-listing-date-badge text-white px-3 py-2 rounded-lg text-center">
      <div class="text-2xl font-bold leading-none"><?php echo get_the_date('d'); ?></div>
      <div class="text-xs uppercase"><?php echo get_the_date('M'); ?></div>
      <div class="text-xs"><?php echo get_the_date('Y'); ?></div>
    </div>
  </div>
</article>