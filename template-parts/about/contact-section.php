 <style>
   /* Contact Section Custom Styles */
   .contact-title {
     font-size: clamp(2rem, 5vw, 3rem);
     font-weight: 700;
     color: #3b49df;
     text-align: center;
     margin-bottom: 4rem;
     position: relative;
     display: inline-block;
   }

   .contact-diamond {
     display: inline-block;
     width: 12px;
     height: 12px;
     background: var(--secondary-color);
     transform: rotate(45deg);
     margin: 0 1rem;
     animation: rotatePulse 2s ease-in-out infinite;
   }

   .contact-card {
     background: var(--secondary-color);
     border-radius: 1rem;
     display: flex;
     align-items: center;
     gap: 1.5rem;
     transition: all 0.3s ease;
     opacity: 0;
     animation: fadeInUp 0.6s ease forwards;
   }

   .contact-card:nth-child(1) {
     animation-delay: 0.1s;
   }

   .contact-card:nth-child(2) {
     animation-delay: 0.3s;
   }

   .contact-card:nth-child(3) {
     animation-delay: 0.5s;
   }

   .contact-card:hover {
     transform: translateY(-8px);
     box-shadow: 0 20px 40px rgba(59, 73, 223, 0.3);
   }

   .contact-icon-wrapper {
     border-radius: 1rem;
     padding: 1.5rem;
     display: flex;
     align-items: center;
     justify-content: center;
     min-width: 80px;
     min-height: 80px;
     transition: all 0.3s ease;
   }

   .contact-card:hover .contact-icon-wrapper {
     transform: rotate(5deg) scale(1.1);
   }

   .contact-icon {
     width: 48px;
     height: 48px;
     color: #3b49df;
   }

   .contact-text {
     color: white;
     font-size: 1.5rem;
     font-weight: 600;
     letter-spacing: 0.5px;
   }

   @media (max-width: 768px) {
     .contact-card {
       flex-direction: column;
       text-align: center;
       gap: 0;
     }

     .contact-text {
       font-size: 1.25rem;
     }

     .contact-diamond {
       width: 10px;
       height: 10px;
       margin: 0 0.5rem;
     }
   }
 </style>

 <section class="bg-gradient-to-br from-gray-50 to-gray-100 py-12 px-4">
   <div class="max-w-7xl mx-auto">
     <!-- Title Section -->
     <div class="text-center">
       <h1 class="text-4xl md:text-5xl font-bold text-third inline-flex items-center gap-4">
         <span class="ci-title-decoration">◇</span>
         <span>お問合せ</span>
         <span class="ci-title-decoration">◇</span>
       </h1>
     </div>

     <!-- Contact Cards Grid -->
     <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8 lg:mt-16 max-w-6xl mx-auto">
       <!-- Phone Card -->
       <div class="contact-card">
         <div class="contact-icon-wrapper">
           <img alt="icon" src="<?php echo get_template_directory_uri() . '/assets/imgs/svgs/phone-white.svg'; ?>" />
         </div>
         <div class="contact-text">01234567899</div>
       </div>

       <!-- Email Card -->
       <div class="contact-card">
         <div class="contact-icon-wrapper">
           <img alt="icon" src="<?php echo get_template_directory_uri() . '/assets/imgs/svgs/mail-white.svg'; ?>" />
         </div>
         <div class="contact-text">Email</div>
       </div>

       <!-- Location Card -->
       <div class="contact-card">
         <div class="contact-icon-wrapper">
           <img alt="icon" src="<?php echo get_template_directory_uri() . '/assets/imgs/svgs/map-white.svg'; ?>" />
         </div>
         <div class="contact-text">Hà Nội</div>
       </div>
     </div>
   </div>
 </section>