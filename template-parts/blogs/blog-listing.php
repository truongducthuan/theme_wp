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


 <?php
  $the_query = $args['the_query'];
  $paged = $args['paged'];

  // echo '<prev class="text-black">';
  // print_r($the_query->posts);
  // echo '</prev>';
  ?>

 <!-- Main Container -->
 <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-12">

   <!-- Top Bar with Results Count and Filter -->
   <?php
    if ($the_query->have_posts()):
      // total posts
      $total_posts = $the_query->found_posts;

      // how many per page
      $per_page = $the_query->get('posts_per_page');

      // calculate first + last item numbers
      $first = (($paged - 1) * $per_page) + 1;
      $last  = min($paged * $per_page, $total_posts);
    ?>
     <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">
       <p class="text-gray-600 text-sm">Showing <?php echo $paged; ?> - <?php echo $last; ?> of <?php echo $total_posts; ?> Result</p>
     </div>
   <?php endif; ?>

   <!-- Two Column Layout -->
   <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

     <?php if ($the_query->have_posts()): ?>
       <!-- Main Content Area (Blog Posts) -->
       <div class="lg:col-span-2">

         <!-- Blog Posts Grid -->
         <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">

           <?php
            if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
                $image = get_field('image', get_the_ID());
                $author_id = $post->post_author; // Get author ID
                $author_name = get_the_author_meta('display_name', $author_id);
            ?>
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
                     <h3 class="text-lg font-bold text-gray-900 leading-tight hover:text-blue-600 transition-colors duration-300 cursor-pointer">
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
           <?php
              endwhile;
            endif;
            ?>
         </div>

         <?php $total_pages = $the_query->max_num_pages;

          if ($total_pages > 1) {

            $current_page = max(1, get_query_var('paged'));
            $big          = 999999;
          ?>
           <div class="pagination clearfix text-black" role="navigation">
             <nav class="page-nav px-5 lg:px-0">
               <?php
                echo paginate_links([
                  'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                  'format'    => '?paged=%#%',
                  'type'      => 'list',
                  'current'   => $current_page,
                  'total'     => $total_pages,
                  'prev_text' => '<button class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 bg-white text-gray-600 hover:bg-blue-600 hover:text-white hover:border-blue-600 transition-all duration-300">
           <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
           </svg>
         </button>',
                  'next_text' => '<button class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 bg-white text-gray-600 hover:bg-blue-600 hover:text-white hover:border-blue-600 transition-all duration-300">
           <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
           </svg>
         </button>',
                ]);
                ?>
             </nav>
           </div>
         <?php
          }
          wp_reset_postdata();
          ?>
       </div>
     <?php endif; ?>

     <!-- If not found blogs -->
     <?php if (!$the_query->have_posts()): ?>
       <div class="lg:col-span-2">
         <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">
           <p class="text-gray-600 text-sm">Showing 0 - 0 of 0 Result</p>
         </div>
         <div class="bg-white rounded-2xl overflow-hidden shadow-md blog-listing-card-hover blog-listing-fade-in" style="animation-delay: 0.1s;">

           <!-- Beautiful Empty State  -->
           <?php get_template_part('template-parts/blogs/blog-empty'); ?>

         </div>
       </div>
     <?php endif; ?>

     <!-- Sidebar -->
     <?php get_template_part('template-parts/blogs/blog-sidebar'); ?>

   </div>

 </div>

 <script>
   // Pagination functionality
   const paginationButtons = document.querySelectorAll('[class*="w-10 h-10"]');
   paginationButtons.forEach(button => {
     button.addEventListener('click', function() {
       // Remove active state from all buttons
       paginationButtons.forEach(btn => {
         btn.classList.remove('bg-blue-600', 'text-white');
         btn.classList.add('border', 'border-gray-300', 'bg-white', 'text-gray-600');
       });

       // Add active state to clicked button (if it's a number button)
       if (this.textContent.match(/^\d+$/)) {
         this.classList.remove('border', 'border-gray-300', 'bg-white', 'text-gray-600');
         this.classList.add('bg-blue-600', 'text-white');
       }
     });
   });

   const observerBlogListing = new IntersectionObserver((entries) => {
     entries.forEach(entry => {
       if (entry.isIntersecting) {
         entry.target.style.opacity = '1';
         entry.target.style.transform = 'translateY(0)';
       }
     });
   }, observerOption);

   // Observe all fade-in elements
   document.querySelectorAll('.blog-listing-fade-in').forEach(el => {
     observerBlogListing.observe(el);
   });
 </script>