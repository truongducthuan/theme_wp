 <style>
   @keyframes fadeInUp {
     from {
       opacity: 0;
       transform: translateY(30px);
     }

     to {
       opacity: 1;
       transform: translateY(0);
     }
   }

   .fade-in-up {
     animation: fadeInUp 0.6s ease-out forwards;
   }

   .service-card {
     opacity: 0;
     transition: all 0.3s ease;
   }

   .service-card.visible {
     animation: fadeInUp 0.6s ease-out forwards;
   }

   .service-card:hover {
     transform: translateY(-10px);
   }

   .service-icon {
     transition: all 0.3s ease;
   }

   .service-card:hover .service-icon {
     animation: float 2s ease-in-out infinite;
   }

   /* .curved-accent {
     position: absolute;
     top: 0;
     right: 0;
     width: 100%;
     height: 100%;
     z-index: -1;
     transition: all .4s;
     overflow: hidden;
     border-radius: 0 100px 0 0;
   } */

   .curved-accent::before {
     content: '';
     position: absolute;
     top: -60px;
     right: -60px;
     width: 150px;
     height: 150px;
     background: linear-gradient(135deg, #06b6d4 0%, #22d3ee 100%);
     border-radius: 50%;
   }

   .curved-accent::after {
     content: '';
     position: absolute;
     top: -60px;
     right: -60px;
     width: 150px;
     height: 150px;
     background: pink;
     border-radius: 50%;
   }

   .diamond-icon {
     display: inline-block;
     width: 20px;
     height: 20px;
     background: #4f46e5;
     transform: rotate(45deg);
     margin: 0 8px;
   }

   .diamond-icon::before {
     content: '';
     position: absolute;
     width: 12px;
     height: 12px;
     background: #06b6d4;
     top: 50%;
     left: 50%;
     transform: translate(-50%, -50%);
   }
 </style>

 <?php
  $services = [
    (object) [
      'id' => 1,
      'name' => '増え続ける技術的複雑性',
      'description' => '',
      'icon' => get_template_directory_uri() . '/assets/imgs/svgs/cloud-icon-white.svg',
      'iconHover' => get_template_directory_uri() . '/assets/imgs/svgs/cloud-icon-blue.svg'
    ],
    (object) [
      'id' => 2,
      'name' => '求められる高度なドメイン知識',
      'description' => '',
      'icon' => get_template_directory_uri() . '/assets/imgs/svgs/cloud-icon-white.svg',
      'iconHover' => get_template_directory_uri() . '/assets/imgs/svgs/cloud-icon-blue.svg'
    ],
    (object) [
      'id' => 1,
      'name' => '恒常的なリソースの制約',
      'description' => '',
      'icon' => get_template_directory_uri() . '/assets/imgs/svgs/cloud-icon-white.svg',
      'iconHover' => get_template_directory_uri() . '/assets/imgs/svgs/cloud-icon-blue.svg'
    ],
    (object) [
      'id' => 2,
      'name' => '内製チーム強化の必要性',
      'description' => '',
      'icon' => get_template_directory_uri() . '/assets/imgs/svgs/cloud-icon-white.svg',
      'iconHover' => get_template_directory_uri() . '/assets/imgs/svgs/cloud-icon-blue.svg'
    ],
  ];
  ?>

 <section class="bg-gradient-to-br from-purple-50 to-blue-50">
   <div class="max-w-7xl mx-auto px-4 md:px-8 lg:px-16 py-16 lg:py-24">
     <!-- Section Header -->
     <div class="text-center mb-16 fade-in-up ">
       <div class="flex items-center justify-center mb-4">
         <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
           <path d="M12 2L4 6v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V6l-8-4z" />
         </svg>
         <span class="text-2xl md:text-5xl text-blue-600 font-semibold mx-3">こんなお悩みありませんか？</span>
         <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
           <path d="M12 2L4 6v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V6l-8-4z" />
         </svg>
       </div>
       <h2 class="text-md lg:text-lg font-bold text-gray-900 leading-tight">
         高い理想と、現場の開発リソースとのギャップに悩んでいませんか？
       </h2>
     </div>

     <!-- Services Grid -->
     <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
       <?php
        foreach ($services as $service) {
        ?>
         <div class="service-card rounded-2xl relative group">
           <!-- <div class="curved-accent"></div> -->
           <div class="flex justify-between items-center min-h-[300px] lg:min-h-[330px] shadow-lg group-hover:shadow-2xl group-hover:bg-primary transition-all duration-300 rounded-2xl flex-col py-8 px-6">
             <div class="service-icon bg-blue-700 group-hover:bg-white rounded-2xl w-20 h-20 flex items-center justify-center mb-6 relative z-10">
               <img src="<?php echo $service->icon; ?>" alt="Service Icon" class="flip-vertical-right group-hover:hidden">
               <img src="<?php echo $service->iconHover; ?>" alt="Service Icon Hover" class="flip-vertical-right hidden group-hover:block">
             </div>

             <h3 class="text-xl font-bold text-gray-900 text-center group-hover:text-white mb-4 transition-all"><?php echo $service->name; ?></h3>
             <p class="text-gray-600 group-hover:text-white leading-relaxed mb-6 transition-all">
               <?php echo $service->description; ?>
             </p>

             <button class="bg-primary group-hover:bg-white text-white group-hover:text-primary text-center font-semibold px-8 py-3 rounded-lg transition-all duration-300 hover:shadow-lg">
               Read More
             </button>
           </div>
         </div>
       <?php
        }
        ?>

     </div>
   </div>
 </section>

 <script>
   const observerServices = new IntersectionObserver((entries) => {
     entries.forEach((entry, index) => {
       if (entry.isIntersecting) {
         setTimeout(() => {
           entry.target.classList.add('visible');
         }, index * 100);
       }
     });
   }, observerOptions);

   // Observe all service cards
   document.querySelectorAll('.service-card').forEach(card => {
     observerServices.observe(card);
   });
 </script>