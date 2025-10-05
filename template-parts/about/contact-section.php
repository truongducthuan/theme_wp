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
     background: #3b49df;
     transform: rotate(45deg);
     margin: 0 1rem;
     animation: rotatePulse 2s ease-in-out infinite;
   }

   .contact-card {
     background: #3b49df;
     border-radius: 1rem;
     padding: 2rem;
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
     background: white;
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
       <h1 class="text-4xl md:text-5xl font-bold text-blue-900 inline-flex items-center gap-4">
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
           <svg class="contact-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
           </svg>
         </div>
         <div class="contact-text">01234567899</div>
       </div>

       <!-- Email Card -->
       <div class="contact-card">
         <div class="contact-icon-wrapper">
           <svg class="contact-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
           </svg>
         </div>
         <div class="contact-text">Email</div>
       </div>

       <!-- Location Card -->
       <div class="contact-card">
         <div class="contact-icon-wrapper">
           <svg class="contact-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
           </svg>
         </div>
         <div class="contact-text">Hà Nội</div>
       </div>
     </div>
   </div>
 </section>