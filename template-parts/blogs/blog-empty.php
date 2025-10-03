<div class="bg-white rounded-3xl shadow-lg p-8 md:p-12 text-center blog-empty-fade-in">

  <!-- Animated Search Icon Illustration  -->
  <div class="relative w-48 h-48 mx-auto mb-8">
    <!-- Background circles  -->
    <div class="absolute inset-0 bg-gradient-to-br from-purple-100 to-blue-100 rounded-full blog-empty-pulse"></div>
    <div class="absolute inset-4 bg-gradient-to-br from-purple-50 to-blue-50 rounded-full blog-empty-pulse" style="animation-delay: 0.5s;"></div>

    <!-- Search Icon  -->
    <div class="absolute inset-0 flex items-center justify-center blog-empty-float">
      <svg class="w-24 h-24 text-indigo-600 blog-empty-search-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
      </svg>
    </div>

    <!-- Decorative dots  -->
    <div class="absolute top-4 right-4 w-3 h-3 bg-cyan-400 rounded-full blog-empty-pulse"></div>
    <div class="absolute bottom-8 left-8 w-2 h-2 bg-purple-400 rounded-full blog-empty-pulse" style="animation-delay: 1s;"></div>
    <div class="absolute top-12 left-4 w-2 h-2 bg-blue-400 rounded-full blog-empty-pulse" style="animation-delay: 1.5s;"></div>
  </div>

  <!-- Heading  -->
  <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
    No Results Found
  </h2>

  <!-- Description  -->
  <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto leading-relaxed">
    We couldn't find any blog posts matching your search. Try adjusting your search terms or explore our popular categories below.
  </p>

  <!-- Search Suggestions  -->
  <div class="bg-gradient-to-br from-purple-50 to-blue-50 rounded-2xl p-6 mb-8">
    <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center justify-center gap-2">
      <svg class="w-5 h-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
      </svg>
      <!-- Search Tips -->
    </h3>
    <ul class="text-left text-gray-700 space-y-2 max-w-md mx-auto">
      <li class="flex items-start gap-2">
        <svg class="w-5 h-5 text-cyan-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
        </svg>
        <span>Try using different keywords</span>
      </li>
      <li class="flex items-start gap-2">
        <svg class="w-5 h-5 text-cyan-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
        </svg>
        <span>Check your spelling</span>
      </li>
      <li class="flex items-start gap-2">
        <svg class="w-5 h-5 text-cyan-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
        </svg>
        <span>Use more general terms</span>
      </li>
    </ul>
  </div>

  <!-- Action Buttons  -->
  <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
    <a href="<?php echo home_url('/blogs'); ?>" class="px-8 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold rounded-xl hover:from-indigo-700 hover:to-purple-700 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 flex items-center gap-2">
      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
      </svg>
      Back to All Posts
    </a>
  </div>

</div>