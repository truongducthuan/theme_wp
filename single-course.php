<?php 
/* Template Name: Course Blog */
get_header();
?>

<style>
    .course-content h3 {
            font-size: 1.25rem;
            font-weight: 600;
            margin-top: 1.25rem;
            margin-bottom: 0.5rem;
        }
        
        .course-content p {
            margin-bottom: 1rem;
            line-height: 1.7;
        }
        
        .course-content ul {
            margin-left: 1.5rem;
            margin-bottom: 1rem;
            list-style-type: disc;
        }
        
        /* Accordion styles */
        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }
        
        .accordion-content.active {
            max-height: 1000px;
        }
        
        /* Progress bar animation */
        @keyframes progress {
            0% { width: 0; }
            100% { width: var(--progress-width); }
        }
        
        .progress-bar {
            animation: progress 1.5s ease-out forwards;
        }
</style>

<main>
     <!-- Course Hero Section -->
    <section class="bg-gradient-to-r from-indigo-600 to-indigo-800 text-white py-12 md:py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-center">
                <div class="md:w-1/2 md:pr-12">
                    <div class="flex items-center mb-4">
                        <span class="bg-yellow-400 text-yellow-800 text-xs font-semibold px-2.5 py-0.5 rounded">BESTSELLER</span>
                        <span class="ml-2 bg-white text-indigo-600 text-xs font-semibold px-2.5 py-0.5 rounded">UPDATED FOR 2023</span>
                    </div>
                    
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4">Advanced JavaScript: From Fundamentals to Mastery</h1>
                    
                    <p class="text-lg md:text-xl mb-6">Master modern JavaScript with this comprehensive course covering ES6+, async programming, design patterns, and real-world applications.</p>
                    
                    <div class="flex flex-wrap items-center text-sm md:text-base mb-6">
                        <div class="flex items-center mr-6 mb-2">
                            <svg class="w-5 h-5 mr-1 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <span>4.8 (2,456 ratings)</span>
                        </div>
                        
                        <div class="flex items-center mr-6 mb-2">
                            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                            <span>18,245 students enrolled</span>
                        </div>
                        
                        <div class="flex items-center mb-2">
                            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>42 hours of content</span>
                        </div>
                    </div>
                    
                    <div class="flex items-center mb-6">
                        <img src="/placeholder.svg?height=50&width=50" alt="Instructor" class="w-12 h-12 rounded-full border-2 border-white">
                        <div class="ml-3">
                            <p class="font-medium">Created by</p>
                            <p class="text-indigo-200">David Mitchell, Senior JavaScript Developer</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center text-sm mb-6">
                        <div class="flex items-center mr-4">
                            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span>Last updated: June 2023</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
                            </svg>
                            <span>English, Spanish subtitles</span>
                        </div>
                    </div>
                </div>
                
                <!-- Course Card -->
                <div class="md:w-1/2 mt-8 md:mt-0">
                    <div class="bg-white rounded-lg shadow-xl overflow-hidden max-w-md mx-auto">
                        <div class="relative">
                            <img src="/placeholder.svg?height=300&width=600" alt="JavaScript Course" class="w-full h-48 object-cover">
                            <div class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center">
                                <button class="bg-white rounded-full p-4 shadow-lg hover:bg-gray-100 transition">
                                    <svg class="w-8 h-8 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-6">
                                <div class="text-3xl font-bold text-gray-900">$89.99</div>
                                <div class="text-lg text-gray-500 line-through">$199.99</div>
                            </div>
                            
                            <div class="mb-6">
                                <div class="flex items-center justify-between text-sm mb-1">
                                    <span class="font-medium">55% off</span>
                                    <span class="text-red-600 font-medium">2 days left at this price!</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-red-600 h-2 rounded-full progress-bar" style="--progress-width: 15%"></div>
                                </div>
                            </div>
                            
                            <button class="w-full bg-primary hover:bg-primary-dark text-white py-3 rounded-md font-medium transition mb-4">Enroll Now</button>
                            
                            <button class="w-full border border-gray-300 text-gray-700 hover:bg-gray-50 py-3 rounded-md font-medium transition mb-6">Try Free Preview</button>
                            
                            <div class="text-center text-sm text-gray-500 mb-4">30-Day Money-Back Guarantee</div>
                            
                            <div class="border-t border-gray-200 pt-4">
                                <h3 class="font-medium text-gray-900 mb-2">This course includes:</h3>
                                <ul class="space-y-2 text-sm">
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-gray-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                        </svg>
                                        <span>42 hours on-demand video</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-gray-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                        <span>85 articles & resources</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-gray-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        <span>25 coding exercises</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-gray-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                        </svg>
                                        <span>5 real-world projects</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-gray-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                        </svg>
                                        <span>Downloadable source code</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-gray-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>Certificate of completion</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-gray-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                        <span>Direct instructor support</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="flex flex-col lg:flex-row">
            <!-- Left Column (Course Content) -->
            <div class="lg:w-2/3 lg:pr-12">
                <!-- What You'll Learn -->
                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">What You'll Learn</h2>
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Master JavaScript fundamentals including ES6+ features</span>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Understand asynchronous programming with Promises and async/await</span>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Build real-world applications with modern JavaScript</span>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Implement common design patterns in JavaScript</span>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Write clean, maintainable, and efficient code</span>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Debug JavaScript applications effectively</span>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Optimize JavaScript for performance</span>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Test JavaScript applications with modern testing frameworks</span>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Course Description -->
                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Course Description</h2>
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <div class="course-content text-gray-700">
                            <p>Welcome to <strong>Advanced JavaScript: From Fundamentals to Mastery</strong>, the most comprehensive JavaScript course available online. Whether you're a beginner looking to dive deep into JavaScript or an experienced developer wanting to strengthen your skills, this course has something for everyone.</p>
                            
                            <p>JavaScript is the language of the web and one of the most in-demand programming skills in today's job market. This course will take you from the basics to advanced concepts, ensuring you have a solid understanding of both fundamentals and modern JavaScript features.</p>
                            
                            <h3>Why This Course?</h3>
                            <p>Unlike other courses that only scratch the surface, we dive deep into how JavaScript actually works under the hood. You'll not only learn syntax but understand the "why" behind JavaScript's behavior, making you a more effective developer who can solve complex problems.</p>
                            
                            <p>By the end of this course, you'll be able to:</p>
                            <ul>
                                <li>Write clean, efficient, and maintainable JavaScript code</li>
                                <li>Understand and use advanced ES6+ features confidently</li>
                                <li>Master asynchronous programming with Promises and async/await</li>
                                <li>Implement common design patterns to solve real-world problems</li>
                                <li>Debug and optimize JavaScript applications</li>
                                <li>Build complete, production-ready applications</li>
                            </ul>
                            
                            <h3>Course Structure</h3>
                            <p>The course is structured to provide a logical progression from fundamentals to advanced topics. Each section builds upon the previous one, with plenty of practical exercises and real-world projects to reinforce your learning.</p>
                            
                            <p>We believe in learning by doing, so you'll be coding along with the instructor throughout the course. All code examples are available for download, and you'll have lifetime access to all course materials.</p>
                        </div>
                        
                        <div class="mt-6 pt-6 border-t border-gray-200">
                            <button class="text-primary hover:text-primary-dark font-medium flex items-center">
                                <span>Show more</span>
                                <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </section>
                
                <!-- Course Curriculum -->
                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Course Curriculum</h2>
                    
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                        <!-- Section Header -->
                        <div class="p-4 bg-gray-50 border-b border-gray-200">
                            <div class="flex justify-between items-center">
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900">Course Overview</h3>
                                    <p class="text-sm text-gray-500">4 lectures • 25 min</p>
                                </div>
                                <button class="accordion-toggle text-primary hover:text-primary-dark" data-section="section1">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        
                        <!-- Section Content -->
                        <div id="section1" class="accordion-content active">
                            <div class="p-4 border-b border-gray-200">
                                <div class="flex items-start">
                                    <svg class="w-5 h-5 text-gray-400 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <div>
                                        <div class="flex items-center justify-between">
                                            <h4 class="font-medium text-gray-900">Introduction to the Course</h4>
                                            <span class="text-sm text-gray-500">5:30</span>
                                        </div>
                                        <p class="text-sm text-gray-500">Preview available</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="p-4 border-b border-gray-200">
                                <div class="flex items-start">
                                    <svg class="w-5 h-5 text-gray-400 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                    <div>
                                        <div class="flex items-center justify-between">
                                            <h4 class="font-medium text-gray-900">Course Resources & Setup Guide</h4>
                                            <span class="text-sm text-gray-500">10:15</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="p-4 border-b border-gray-200">
                                <div class="flex items-start">
                                    <svg class="w-5 h-5 text-gray-400 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                    <div>
                                        <div class="flex items-center justify-between">
                                            <h4 class="font-medium text-gray-900">How to Get the Most Out of This Course</h4>
                                            <span class="text-sm text-gray-500">7:45</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="p-4">
                                <div class="flex items-start">
                                    <svg class="w-5 h-5 text-gray-400 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <div>
                                        <div class="flex items-center justify-between">
                                            <h4 class="font-medium text-gray-900">Q&A: Common Questions Answered</h4>
                                            <span class="text-sm text-gray-500">3:20</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Section 2 -->
                        <div class="p-4 bg-gray-50 border-b border-gray-200">
                            <div class="flex justify-between items-center">
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900">JavaScript Fundamentals</h3>
                                    <p class="text-sm text-gray-500">12 lectures • 3h 45min</p>
                                </div>
                                <button class="accordion-toggle text-primary hover:text-primary-dark" data-section="section2">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        
                        <!-- Section 2 Content (Collapsed by default) -->
                        <div id="section2" class="accordion-content hidden">
                            <!-- Content would go here -->
                            <div class="p-4 text-center text-gray-500">
                                <p>12 more lectures (3h 45min)</p>
                            </div>
                        </div>
                        
                        <!-- Section 3 -->
                        <div class="p-4 bg-gray-50 border-b border-gray-200">
                            <div class="flex justify-between items-center">
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900">ES6+ Features Deep Dive</h3>
                                    <p class="text-sm text-gray-500">15 lectures • 4h 20min</p>
                                </div>
                                <button class="accordion-toggle text-primary hover:text-primary-dark" data-section="section3">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        
                        <!-- Section 3 Content (Collapsed by default) -->
                        <div id="section3" class="accordion-content hidden">
                            <!-- Content would go here -->
                            <div class="p-4 text-center text-gray-500">
                                <p>15 more lectures (4h 20min)</p>
                            </div>
                        </div>
                        
                        <!-- Section 4 -->
                        <div class="p-4 bg-gray-50 border-b border-gray-200">
                            <div class="flex justify-between items-center">
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900">Asynchronous JavaScript</h3>
                                    <p class="text-sm text-gray-500">10 lectures • 3h 15min</p>
                                </div>
                                <button class="accordion-toggle text-primary hover:text-primary-dark" data-section="section4">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        
                        <!-- Section 4 Content (Collapsed by default) -->
                        <div id="section4" class="accordion-content hidden">
                            <!-- Content would go here -->
                            <div class="p-4 text-center text-gray-500">
                                <p>10 more lectures (3h 15min)</p>
                            </div>
                        </div>
                        
                        <!-- More sections would follow the same pattern -->
                        <div class="p-4 bg-gray-50 border-b border-gray-200">
                            <div class="flex justify-between items-center">
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900">JavaScript Design Patterns</h3>
                                    <p class="text-sm text-gray-500">8 lectures • 2h 50min</p>
                                </div>
                                <button class="accordion-toggle text-primary hover:text-primary-dark" data-section="section5">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        
                        <div class="p-4 bg-gray-50 border-b border-gray-200">
                            <div class="flex justify-between items-center">
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900">Real-World Projects</h3>
                                    <p class="text-sm text-gray-500">5 projects • 12h 30min</p>
                                </div>
                                <button class="accordion-toggle text-primary hover:text-primary-dark" data-section="section6">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        
                        <div class="p-4 bg-gray-50">
                            <div class="flex justify-between items-center">
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900">Course Conclusion</h3>
                                    <p class="text-sm text-gray-500">3 lectures • 30min</p>
                                </div>
                                <button class="accordion-toggle text-primary hover:text-primary-dark" data-section="section7">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-6 text-center">
                        <button class="text-primary hover:text-primary-dark font-medium flex items-center justify-center mx-auto">
                            <span>Show all sections</span>
                            <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </div>
                </section>
                
                <!-- Requirements -->
                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Requirements</h2>
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-gray-500 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>Basic understanding of HTML and CSS</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-gray-500 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>A computer with internet access and a modern web browser</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-gray-500 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>A code editor (we recommend Visual Studio Code, which is free)</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-gray-500 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>No prior JavaScript knowledge is required, but it's helpful</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-gray-500 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>A willingness to learn and practice</span>
                            </li>
                        </ul>
                    </div>
                </section>
                
                <!-- Instructor -->
                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Your Instructor</h2>
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <div class="flex flex-col sm:flex-row">
                            <div class="sm:w-1/4 mb-4 sm:mb-0">
                                <img src="/placeholder.svg?height=200&width=200" alt="David Mitchell" class="w-32 h-32 rounded-full mx-auto sm:mx-0">
                            </div>
                            <div class="sm:w-3/4 sm:pl-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-2">David Mitchell</h3>
                                <p class="text-gray-500 mb-4">Senior JavaScript Developer & Educator</p>
                                
                                <div class="flex items-center mb-4">
                                    <div class="flex items-center mr-4">
                                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <span class="ml-1 text-gray-700">4.8 Instructor Rating</span>
                                    </div>
                                    <div class="flex items-center mr-4">
                                        <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                        </svg>
                                        <span class="ml-1 text-gray-700">12,345 Reviews</span>
                                    </div>
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                        </svg>
                                        <span class="ml-1 text-gray-700">45,678 Students</span>
                                    </div>
                                </div>
                                
                                <p class="text-gray-700 mb-4">David has been working with JavaScript for over 10 years and has taught more than 50,000 students online. He currently works as a senior developer at a leading tech company and is passionate about sharing his knowledge with others.</p>
                                
                                <p class="text-gray-700 mb-4">His teaching style focuses on practical, real-world applications of JavaScript concepts, ensuring students not only understand the theory but can apply it in their own projects.</p>
                                
                                <div class="flex space-x-4">
                                    <a href="#" class="text-primary hover:text-primary-dark">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                        </svg>
                                    </a>
                                    <a href="#" class="text-primary hover:text-primary-dark">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                    <a href="#" class="text-primary hover:text-primary-dark">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                        </svg>
                                    </a>
                                    <a href="#" class="text-primary hover:text-primary-dark">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Student Reviews -->
                <section class="mb-12">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-bold text-gray-900">Student Reviews</h2>
                        <a href="#" class="text-primary hover:text-primary-dark font-medium">See all reviews</a>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <div class="flex flex-col md:flex-row mb-8">
                            <div class="md:w-1/3 mb-6 md:mb-0 md:pr-8">
                                <div class="text-center">
                                    <div class="text-5xl font-bold text-gray-900 mb-2">4.8</div>
                                    <div class="flex justify-center mb-2">
                                        <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.  viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                    <p class="text-gray-500">Course Rating</p>
                                </div>
                                
                                <div class="mt-6">
                                    <div class="flex items-center mb-2">
                                        <div class="w-1/5 text-right pr-2">
                                            <div class="flex items-center justify-end">
                                                <span class="text-sm text-gray-700 mr-1">5</span>
                                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="w-3/5">
                                            <div class="bg-gray-200 rounded-full h-2">
                                                <div class="bg-yellow-400 h-2 rounded-full" style="width: 78%"></div>
                                            </div>
                                        </div>
                                        <div class="w-1/5 text-left pl-2 text-sm text-gray-700">78%</div>
                                    </div>
                                    
                                    <div class="flex items-center mb-2">
                                        <div class="w-1/5 text-right pr-2">
                                            <div class="flex items-center justify-end">
                                                <span class="text-sm text-gray-700 mr-1">4</span>
                                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="w-3/5">
                                            <div class="bg-gray-200 rounded-full h-2">
                                                <div class="bg-yellow-400 h-2 rounded-full" style="width: 16%"></div>
                                            </div>
                                        </div>
                                        <div class="w-1/5 text-left pl-2 text-sm text-gray-700">16%</div>
                                    </div>
                                    
                                    <div class="flex items-center mb-2">
                                        <div class="w-1/5 text-right pr-2">
                                            <div class="flex items-center justify-end">
                                                <span class="text-sm text-gray-700 mr-1">3</span>
                                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="w-3/5">
                                            <div class="bg-gray-200 rounded-full h-2">
                                                <div class="bg-yellow-400 h-2 rounded-full" style="width: 4%"></div>
                                            </div>
                                        </div>
                                        <div class="w-1/5 text-left pl-2 text-sm text-gray-700">4%</div>
                                    </div>
                                    
                                    <div class="flex items-center mb-2">
                                        <div class="w-1/5 text-right pr-2">
                                            <div class="flex items-center justify-end">
                                                <span class="text-sm text-gray-700 mr-1">2</span>
                                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="w-3/5">
                                            <div class="bg-gray-200 rounded-full h-2">
                                                <div class="bg-yellow-400 h-2 rounded-full" style="width: 1%"></div>
                                            </div>
                                        </div>
                                        <div class="w-1/5 text-left pl-2 text-sm text-gray-700">1%</div>
                                    </div>
                                    
                                    <div class="flex items-center">
                                        <div class="w-1/5 text-right pr-2">
                                            <div class="flex items-center justify-end">
                                                <span class="text-sm text-gray-700 mr-1">1</span>
                                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="w-3/5">
                                            <div class="bg-gray-200 rounded-full h-2">
                                                <div class="bg-yellow-400 h-2 rounded-full" style="width: 1%"></div>
                                            </div>
                                        </div>
                                        <div class="w-1/5 text-left pl-2 text-sm text-gray-700">1%</div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="md:w-2/3 md:border-l md:border-gray-200 md:pl-8">
                                <!-- Review 1 -->
                                <div class="mb-6 pb-6 border-b border-gray-200">
                                    <div class="flex items-center mb-2">
                                        <img src="/placeholder.svg?height=40&width=40" alt="Student" class="w-10 h-10 rounded-full mr-3">
                                        <div>
                                            <h4 class="font-medium text-gray-900">Michael Rodriguez</h4>
                                            <div class="flex items-center text-sm text-gray-500">
                                                <span>2 weeks ago</span>
                                                <span class="mx-2">•</span>
                                                <div class="flex">
                                                    <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                    </svg>
                                                    <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                    </svg>
                                                    <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                    </svg>
                                                    <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                    </svg>
                                                    <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-gray-700">This course exceeded my expectations! David explains complex JavaScript concepts in a way that's easy to understand. The real-world projects were especially helpful in cementing my knowledge. I've already started applying what I learned to my own projects.</p>
                                </div>
                                
                                <!-- Review 2 -->
                                <div class="mb-6 pb-6 border-b border-gray-200">
                                    <div class="flex items-center mb-2">
                                        <img src="/placeholder.svg?height=40&width=40" alt="Student" class="w-10 h-10 rounded-full mr-3">
                                        <div>
                                            <h4 class="font-medium text-gray-900">Sarah Thompson</h4>
                                            <div class="flex items-center text-sm text-gray-500">
                                                <span>1 month ago</span>
                                                <span class="mx-2">•</span>
                                                <div class="flex">
                                                    <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                    </svg>
                                                    <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                    </svg>
                                                    <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                    </svg>
                                                    <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                    </svg>
                                                    <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-gray-700">As someone with prior programming experience but new to JavaScript, I found this course to be the perfect balance of fundamentals and advanced topics. The section on asynchronous programming was particularly well-explained. My only suggestion would be to add more exercises for each concept.</p>
                                </div>
                                
                                <!-- Review 3 -->
                                <div>
                                    <div class="flex items-center mb-2">
                                        <img src="/placeholder.svg?height=40&width=40" alt="Student" class="w-10 h-10 rounded-full mr-3">
                                        <div>
                                            <h4 class="font-medium text-gray-900">Alex Johnson</h4>
                                            <div class="flex items-center text-sm text-gray-500">
                                                <span>2 months ago</span>
                                                <span class="mx-2">•</span>
                                                <div class="flex">
                                                    <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                    </svg>
                                                    <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                    </svg>
                                                    <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                    </svg>
                                                    <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                    </svg>
                                                    <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-gray-700">I've taken several JavaScript courses before, but this one truly stands out. The instructor doesn't just teach syntax but explains the underlying concepts and best practices. The section on design patterns was particularly valuable for my work. Highly recommended for anyone serious about JavaScript development!</p>
                                </div>
                                
                                <div class="mt-6 text-center">
                                    <button class="text-primary hover:text-primary-dark font-medium">Read more reviews</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- FAQ Section -->
                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Frequently Asked Questions</h2>
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <div class="space-y-4">
                            <div class="border-b border-gray-200 pb-4">
                                <button class="flex justify-between items-center w-full text-left font-medium text-gray-900">
                                    <span>Do I need prior programming experience for this course?</span>
                                    <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div class="mt-2 text-gray-700">
                                    <p>While no prior JavaScript knowledge is required, having some basic programming experience will help you progress more quickly. If you're completely new to programming, you might find some concepts challenging, but the course is designed to explain everything from the ground up.</p>
                                </div>
                            </div>
                            
                            <div class="border-b border-gray-200 pb-4">
                                <button class="flex justify-between items-center w-full text-left font-medium text-gray-900">
                                    <span>How long do I have access to the course?</span>
                                    <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div class="mt-2 text-gray-700">
                                    <p>You have lifetime access to the course content, including all future updates. Once you enroll, you can access the course materials anytime and from any device.</p>
                                </div>
                            </div>
                            
                            <div class="border-b border-gray-200 pb-4">
                                <button class="flex justify-between items-center w-full text-left font-medium text-gray-900">
                                    <span>Will this course help me get a job as a JavaScript developer?</span>
                                    <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div class="mt-2 text-gray-700">
                                    <p>This course covers the skills that employers look for in JavaScript developers. Many of our students have successfully landed jobs or advanced their careers after completing the course. However, success also depends on your dedication, practice, and how you apply what you learn to real-world projects.</p>
                                </div>
                            </div>
                            
                            <div class="border-b border-gray-200 pb-4">
                                <button class="flex justify-between items-center w-full text-left font-medium text-gray-900">
                                    <span>Are there any prerequisites for this course?</span>
                                    <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div class="mt-2 text-gray-700">
                                    <p>Basic knowledge of HTML and CSS is recommended, as we'll be building web applications. A computer with internet access and a modern web browser is required. We also recommend using Visual Studio Code as your code editor, which is free and available for all operating systems.</p>
                                </div>
                            </div>
                            
                            <div>
                                <button class="flex justify-between items-center w-full text-left font-medium text-gray-900">
                                    <span>Can I get a refund if I'm not satisfied?</span>
                                    <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div class="mt-2 text-gray-700">
                                    <p>Yes, we offer a 30-day money-back guarantee. If you're not completely satisfied with the course, you can request a full refund within 30 days of purchase, no questions asked.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            
            <!-- Right Column (Sidebar) -->
            <div class="lg:w-1/3 mt-12 lg:mt-0">
                <!-- Sticky Sidebar -->
                <div class="lg:sticky lg:top-24">
                    <!-- Related Courses -->
                    <div class="bg-white rounded-lg shadow-sm p-6 mb-8">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Related Courses</h3>
                        
                        <div class="space-y-4">
                            <!-- Course 1 -->
                            <div class="flex">
                                <img src="/placeholder.svg?height=80&width=120" alt="React Course" class="w-20 h-16 object-cover rounded mr-3">
                                <div>
                                    <h4 class="font-medium text-gray-900 mb-1">React.js: The Complete Guide</h4>
                                    <div class="flex items-center text-sm">
                                        <div class="flex text-yellow-400 mr-1">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <span class="text-gray-600">4.7</span>
                                        </div>
                                        <span class="text-gray-500">$79.99</span>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Course 2 -->
                            <div class="flex">
                                <img src="/placeholder.svg?height=80&width=120" alt="Node.js Course" class="w-20 h-16 object-cover rounded mr-3">
                                <div>
                                    <h4 class="font-medium text-gray-900 mb-1">Node.js: Backend Development</h4>
                                    <div class="flex items-center text-sm">
                                        <div class="flex text-yellow-400 mr-1">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <span class="text-gray-600">4.8</span>
                                        </div>
                                        <span class="text-gray-500">$89.99</span>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Course 3 -->
                            <div class="flex">
                                <img src="/placeholder.svg?height=80&width=120" alt="TypeScript Course" class="w-20 h-16 object-cover rounded mr-3">
                                <div>
                                    <h4 class="font-medium text-gray-900 mb-1">TypeScript Masterclass</h4>
                                    <div class="flex items-center text-sm">
                                        <div class="flex text-yellow-400 mr-1">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <span class="text-gray-600">4.9</span>
                                        </div>
                                        <span class="text-gray-500">$69.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-4 pt-4 border-t border-gray-200">
                            <a href="#" class="text-primary hover:text-primary-dark font-medium">View all courses</a>
                        </div>
                    </div>
                    
                    <!-- Course Stats -->
                    <div class="bg-white rounded-lg shadow-sm p-6 mb-8">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Course Stats</h3>
                        
                        <div class="space-y-3">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-700">Skill level</span>
                                <span class="font-medium text-gray-900">All Levels</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-700">Students</span>
                                <span class="font-medium text-gray-900">18,245</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-700">Languages</span>
                                <span class="font-medium text-gray-900">English, Spanish</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-700">Captions</span>
                                <span class="font-medium text-gray-900">Yes</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-700">Lectures</span>
                                <span class="font-medium text-gray-900">124</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-700">Video</span>
                                <span class="font-medium text-gray-900">42 hours</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Course Tags -->
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Course Tags</h3>
                        
                        <div class="flex flex-wrap gap-2">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-800 px-3 py-1 rounded-full text-sm">JavaScript</a>
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-800 px-3 py-1 rounded-full text-sm">ES6</a>
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-800 px-3 py-1 rounded-full text-sm">Web Development</a>
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-800 px-3 py-1 rounded-full text-sm">Frontend</a>
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-800 px-3 py-1 rounded-full text-sm">Programming</a>
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-800 px-3 py-1 rounded-full text-sm">Async</a>
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-800 px-3 py-1 rounded-full text-sm">Design Patterns</a>
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-800 px-3 py-1 rounded-full text-sm">Coding</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <!-- Call to Action -->
    <section class="bg-gradient-to-r from-indigo-600 to-indigo-800 text-white py-12">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-4">Ready to Master JavaScript?</h2>
            <p class="text-lg mb-8 max-w-2xl mx-auto">Join over 18,000 students who have transformed their careers with this comprehensive JavaScript course.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#" class="bg-white text-indigo-600 hover:bg-gray-100 px-6 py-3 rounded-md font-medium text-lg transition">Enroll Now</a>
                <a href="#" class="border border-white text-white hover:bg-white hover:bg-opacity-10 px-6 py-3 rounded-md font-medium text-lg transition">Try Free Preview</a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>