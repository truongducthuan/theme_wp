<style>
  #contact {
    /* background: url(<?php echo get_template_directory_uri() . '/assets/imgs/home/bg-form.jpg'; ?>); */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }

  .input-field {
    transition: all 0.3s ease;
  }

  .input-field:focus {
    outline: none;
    background-color: white;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
  }

  .contact-card {
    transition: all 0.3s ease;
  }

  .contact-card:hover {
    transform: translateX(10px);
  }

  .submit-btn {
    transition: all 0.3s ease;
  }

  .submit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(37, 99, 235, 0.3);
  }

  .submit-btn:active {
    transform: translateY(0);
  }

  .fade-in {
    animation: fadeIn 0.6s ease-out forwards;
    opacity: 0;
  }

  .wpcf7-list-item {
    margin-left: 0;
  }

  .wpcf7-list-item input[type="checkbox"] {
    margin-right: 10px;
  }

  .wpcf7-list-item input[type="checkbox"] {
    appearance: none;
    width: 18px;
    height: 18px;
    border: 2px solid var(--third-color);
    border-radius: 4px;
    display: inline-block;
    position: relative;
    cursor: pointer;
    transition: all 0.2s ease;
  }

  .wpcf7-list-item input[type="checkbox"]:checked {
    /* background-color: #2563eb; */
    /* secondary */
    border-color: #2563eb;
  }

  .wpcf7-list-item input[type="checkbox"]:checked::after {
    content: "✔";
    color: white;
    font-size: 14px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -55%);
  }

  @keyframes fadeIn {
    to {
      opacity: 1;
    }
  }

  .slide-in-left {
    animation: slideInLeft 0.8s ease-out forwards;
    opacity: 0;
  }

  @keyframes slideInLeft {
    from {
      opacity: 0;
      transform: translateX(-50px);
    }

    to {
      opacity: 1;
      transform: translateX(0);
    }
  }

  .slide-in-right {
    animation: slideInRight 0.8s ease-out forwards;
    opacity: 0;
  }

  @keyframes slideInRight {
    from {
      opacity: 0;
      transform: translateX(50px);
    }

    to {
      opacity: 1;
      transform: translateX(0);
    }
  }

  .icon-bounce {
    animation: iconBounce 2s ease-in-out infinite;
  }

  @keyframes iconBounce {

    0%,
    100% {
      transform: translateY(0);
    }

    50% {
      transform: translateY(-5px);
    }
  }

  .success-message {
    animation: slideDown 0.5s ease-out;
  }

  @keyframes slideDown {
    from {
      opacity: 0;
      transform: translateY(-20px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
</style>

<section id="contact" class="bg-white min-h-screen px-5">
  <div class="max-w-7xl mx-auto py-10 lg:py-24">
    <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-start">

      <!-- Appointment Form Section -->
      <div class="bg-white rounded-3xl shadow-xl p-4 md:p-12 slide-in-left">
        <!-- Header -->
        <div class="text-center mb-8">
          <div class="flex items-center justify-center gap-2 mb-4">
            <svg class="w-5 h-5 text-secondary" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 2L12 8L18 8L13 12L15 18L10 14L5 18L7 12L2 8L8 8L10 2Z" />
            </svg>
            <h3 class="text-secondary font-semibold text-lg">お問い合わせ</h3>
            <svg class="w-5 h-5 text-secondary" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 2L12 8L18 8L13 12L15 18L10 14L5 18L7 12L2 8L8 8L10 2Z" />
            </svg>
          </div>
          <h2 class="text-3xl md:text-4xl font-bold text-gray-900">CONTACT</h2>
        </div>

        <!-- Form -->
        <div id="appointmentForm" class="space-y-5">
          <?php echo do_shortcode('[contact-form-7 id="1ccf0ba" title="Contact form 1"]'); ?>
        </div>
      </div>

      <!-- Contact Information Section -->
      <div class="slide-in-right">
        <!-- Header -->
        <div class="mb-8">
          <div class="flex items-center justify-center gap-2 mb-4">
            <svg class="w-5 h-5 text-secondary" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 2L12 8L18 8L13 12L15 18L10 14L5 18L7 12L2 8L8 8L10 2Z" />
            </svg>
            <h3 class="text-secondary font-semibold text-lg">連絡先</h3>
            <svg class="w-5 h-5 text-secondary" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 2L12 8L18 8L13 12L15 18L10 14L5 18L7 12L2 8L8 8L10 2Z" />
            </svg>
          </div>
          <h2 class="text-3xl text-center md:text-4xl font-bold text-gray-900 mb-6">お問い合わせのお願い</h2>
          <p class="text-gray-600 leading-relaxed">
            Synoraでは、企業がデジタル時代において成長し続けられるよう、革新的なITソリューションとサービスを提供することに尽力しています。
          </p>
        </div>

        <!-- Contact Cards -->
        <div class="space-y-6">
          <!-- Phone -->
          <div class="contact-card flex items-start gap-4 fade-in" style="animation-delay: 0.2s">
            <div class="bg-secondary rounded-2xl p-4 flex-shrink-0 icon-bounce">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
            </div>
            <div>
              <p class="text-gray-600 text-sm mb-1">Call Us Any Time</p>
              <a href="tel:+00918880002222" class="text-2xl font-bold text-gray-900 hover:text-secondary transition-colors">
                +(009) 1888 000 2222
              </a>
            </div>
          </div>

          <!-- Email -->
          <div class="contact-card flex items-start gap-4 fade-in" style="animation-delay: 0.4s">
            <div class="bg-secondary rounded-2xl p-4 flex-shrink-0 icon-bounce" style="animation-delay: 0.5s">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
            </div>
            <div>
              <p class="text-gray-600 text-sm mb-1">Email Address</p>
              <a href="mailto:info@techin.com" class="text-2xl font-bold text-gray-900 hover:text-secondary transition-colors">
                info@techin.com
              </a>
            </div>
          </div>

          <!-- Address -->
          <div class="contact-card flex items-start gap-4 fade-in" style="animation-delay: 0.6s">
            <div class="bg-secondary rounded-2xl p-4 flex-shrink-0 icon-bounce" style="animation-delay: 1s">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
            </div>
            <div>
              <p class="text-gray-600 text-sm mb-1">Office Address</p>
              <p class="text-2xl font-bold text-gray-900">
                12th Street, New York, USA
              </p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>