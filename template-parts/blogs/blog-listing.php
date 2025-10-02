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

 <!-- Main Container -->
 <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-12">

   <!-- Top Bar with Results Count and Filter -->
   <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">
     <p class="text-gray-600 text-sm">Showing 1 - 8 of 40 Result</p>
     <select class="px-4 py-2 border border-gray-300 rounded-lg bg-white text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all duration-300">
       <option>Some option</option>
       <option>Most Recent</option>
       <option>Most Popular</option>
       <option>Oldest First</option>
     </select>
   </div>

   <!-- Two Column Layout -->
   <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

     <!-- Main Content Area (Blog Posts) -->
     <div class="lg:col-span-2">

       <!-- Blog Posts Grid -->
       <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">

         <!-- Blog Card 1 -->
         <article class="bg-white rounded-2xl overflow-hidden shadow-md blog-listing-card-hover blog-listing-fade-in" style="animation-delay: 0.1s;">
           <!-- Card Header with Badges -->
           <div class="p-4 pb-0 flex gap-2 flex-wrap">
             <span class="inline-flex items-center gap-1 px-3 py-1 bg-cyan-400 text-white text-xs font-semibold rounded-full">
               <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                 <path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" />
               </svg>
               By Admin
             </span>
             <span class="inline-flex items-center gap-1 px-3 py-1 bg-cyan-400 text-white text-xs font-semibold rounded-full">
               <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                 <path d="M2 5a2 2 0 012-2h12a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm3.293 1.293a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 01-1.414-1.414L7.586 10 5.293 7.707a1 1 0 010-1.414zM11 12a1 1 0 100 2h3a1 1 0 100-2h-3z" />
               </svg>
               (83) Comments
             </span>
           </div>

           <!-- Card Title -->
           <div class="p-4">
             <h3 class="text-lg font-bold text-gray-900 leading-tight hover:text-blue-600 transition-colors duration-300 cursor-pointer">
               How to Optimize Your IT Infrastructure for Maximum Efficiency
             </h3>
           </div>

           <!-- Card Image with Date Badge -->
           <div class="relative overflow-hidden group cursor-pointer">
             <img
               src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Screenshot%202025-10-02%20at%2011.53.04-rypTZ8mi9BE05K4s3vcU2ZcO9vnTTi.png"
               alt="IT Infrastructure optimization"
               class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110" />
             <div class="absolute inset-0 bg-black opacity-0 blog-listing-image-overlay"></div>
             <div class="absolute bottom-4 right-4 blog-listing-date-badge text-white px-3 py-2 rounded-lg text-center">
               <div class="text-2xl font-bold leading-none">12</div>
               <div class="text-xs uppercase">Jun</div>
               <div class="text-xs">2025</div>
             </div>
           </div>
         </article>

         <!-- Blog Card 2 -->
         <article class="bg-white rounded-2xl overflow-hidden shadow-md blog-listing-card-hover blog-listing-fade-in" style="animation-delay: 0.2s;">
           <div class="p-4 pb-0 flex gap-2 flex-wrap">
             <span class="inline-flex items-center gap-1 px-3 py-1 bg-cyan-400 text-white text-xs font-semibold rounded-full">
               <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                 <path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" />
               </svg>
               By Admin
             </span>
             <span class="inline-flex items-center gap-1 px-3 py-1 bg-cyan-400 text-white text-xs font-semibold rounded-full">
               <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                 <path d="M2 5a2 2 0 012-2h12a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm3.293 1.293a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 01-1.414-1.414L7.586 10 5.293 7.707a1 1 0 010-1.414zM11 12a1 1 0 100 2h3a1 1 0 100-2h-3z" />
               </svg>
               (83) Comments
             </span>
           </div>
           <div class="p-4">
             <h3 class="text-lg font-bold text-gray-900 leading-tight hover:text-blue-600 transition-colors duration-300 cursor-pointer">
               How IT Infrastructure Can Improve Efficiency and Productivity
             </h3>
           </div>
           <div class="relative overflow-hidden group cursor-pointer">
             <img
               src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Screenshot%202025-10-02%20at%2011.53.04-rypTZ8mi9BE05K4s3vcU2ZcO9vnTTi.png"
               alt="IT Infrastructure productivity"
               class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110" />
             <div class="absolute inset-0 bg-black opacity-0 blog-listing-image-overlay"></div>
             <div class="absolute bottom-4 right-4 blog-listing-date-badge text-white px-3 py-2 rounded-lg text-center">
               <div class="text-2xl font-bold leading-none">12</div>
               <div class="text-xs uppercase">Jun</div>
               <div class="text-xs">2025</div>
             </div>
           </div>
         </article>

         <!-- Blog Card 3 -->
         <article class="bg-white rounded-2xl overflow-hidden shadow-md blog-listing-card-hover blog-listing-fade-in" style="animation-delay: 0.3s;">
           <div class="p-4 pb-0 flex gap-2 flex-wrap">
             <span class="inline-flex items-center gap-1 px-3 py-1 bg-cyan-400 text-white text-xs font-semibold rounded-full">
               <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                 <path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" />
               </svg>
               By Admin
             </span>
             <span class="inline-flex items-center gap-1 px-3 py-1 bg-cyan-400 text-white text-xs font-semibold rounded-full">
               <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                 <path d="M2 5a2 2 0 012-2h12a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm3.293 1.293a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 01-1.414-1.414L7.586 10 5.293 7.707a1 1 0 010-1.414zM11 12a1 1 0 100 2h3a1 1 0 100-2h-3z" />
               </svg>
               (83) Comments
             </span>
           </div>
           <div class="p-4">
             <h3 class="text-lg font-bold text-gray-900 leading-tight hover:text-blue-600 transition-colors duration-300 cursor-pointer">
               How to Ensure Seamless IT Integration Across Departments
             </h3>
           </div>
           <div class="relative overflow-hidden group cursor-pointer">
             <img
               src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Screenshot%202025-10-02%20at%2011.53.04-rypTZ8mi9BE05K4s3vcU2ZcO9vnTTi.png"
               alt="IT Integration"
               class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110" />
             <div class="absolute inset-0 bg-black opacity-0 blog-listing-image-overlay"></div>
             <div class="absolute bottom-4 right-4 blog-listing-date-badge text-white px-3 py-2 rounded-lg text-center">
               <div class="text-2xl font-bold leading-none">12</div>
               <div class="text-xs uppercase">Jun</div>
               <div class="text-xs">2025</div>
             </div>
           </div>
         </article>

         <!-- Blog Card 4 -->
         <article class="bg-white rounded-2xl overflow-hidden shadow-md blog-listing-card-hover blog-listing-fade-in" style="animation-delay: 0.4s;">
           <div class="p-4 pb-0 flex gap-2 flex-wrap">
             <span class="inline-flex items-center gap-1 px-3 py-1 bg-cyan-400 text-white text-xs font-semibold rounded-full">
               <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                 <path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" />
               </svg>
               By Admin
             </span>
             <span class="inline-flex items-center gap-1 px-3 py-1 bg-cyan-400 text-white text-xs font-semibold rounded-full">
               <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                 <path d="M2 5a2 2 0 012-2h12a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm3.293 1.293a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 01-1.414-1.414L7.586 10 5.293 7.707a1 1 0 010-1.414zM11 12a1 1 0 100 2h3a1 1 0 100-2h-3z" />
               </svg>
               (83) Comments
             </span>
           </div>
           <div class="p-4">
             <h3 class="text-lg font-bold text-gray-900 leading-tight hover:text-blue-600 transition-colors duration-300 cursor-pointer">
               How Cloud Computing is Transforming Business Operations
             </h3>
           </div>
           <div class="relative overflow-hidden group cursor-pointer">
             <img
               src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Screenshot%202025-10-02%20at%2011.53.04-rypTZ8mi9BE05K4s3vcU2ZcO9vnTTi.png"
               alt="Cloud Computing"
               class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110" />
             <div class="absolute inset-0 bg-black opacity-0 blog-listing-image-overlay"></div>
             <div class="absolute bottom-4 right-4 blog-listing-date-badge text-white px-3 py-2 rounded-lg text-center">
               <div class="text-2xl font-bold leading-none">12</div>
               <div class="text-xs uppercase">Jun</div>
               <div class="text-xs">2025</div>
             </div>
           </div>
         </article>

       </div>

       <!-- Pagination -->
       <div class="flex justify-center items-center gap-2 mt-8">
         <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 bg-white text-gray-600 hover:bg-blue-600 hover:text-white hover:border-blue-600 transition-all duration-300">
           <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
           </svg>
         </button>

         <button class="w-10 h-10 flex items-center justify-center rounded-lg bg-blue-600 text-white font-semibold transition-all duration-300">
           1
         </button>

         <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 bg-white text-gray-600 hover:bg-blue-600 hover:text-white hover:border-blue-600 transition-all duration-300 font-semibold">
           2
         </button>

         <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 bg-white text-gray-600 hover:bg-blue-600 hover:text-white hover:border-blue-600 transition-all duration-300 font-semibold">
           3
         </button>

         <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 bg-white text-gray-600 hover:bg-blue-600 hover:text-white hover:border-blue-600 transition-all duration-300 font-semibold">
           4
         </button>

         <span class="text-gray-400 px-2">...</span>

         <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 bg-white text-gray-600 hover:bg-blue-600 hover:text-white hover:border-blue-600 transition-all duration-300">
           <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
           </svg>
         </button>
       </div>

     </div>

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