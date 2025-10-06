<style>
  /* Company Card Section Styles */
  .company-card-container {
    background: linear-gradient(135deg, #f5f3ff 0%, #ede9fe 100%);
  }

  .company-card-main {
    background: rgba(255, 255, 255, 0.7);
    backdrop-filter: blur(10px);
    border-radius: 24px;
    padding: 3rem 2rem;
    max-width: 900px;
    width: 100%;
    box-shadow: 0 8px 32px rgba(139, 92, 246, 0.1);
    animation: company-card-fadeIn 0.8s ease-out;
  }

  @media (min-width: 768px) {
    .company-card-main {
      padding: 4rem 3rem;
    }
  }

  .company-card-title {
    font-size: 2rem;
    font-weight: 700;
    color: #5b21b6;
    text-align: center;
    margin-bottom: 3rem;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1rem;
    animation: company-card-slideDown 0.6s ease-out;
  }

  .company-card-diamond {
    width: 12px;
    height: 12px;
    background: #3b82f6;
    transform: rotate(45deg);
    animation: company-card-pulse 2s ease-in-out infinite;
  }

  .company-card-content {
    display: grid;
    grid-template-columns: 1fr;
    gap: 3rem;
    align-items: center;
  }

  @media (min-width: 768px) {
    .company-card-content {
      grid-template-columns: 1fr 1fr;
      gap: 4rem;
    }
  }

  .company-card-info-list {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .company-card-info-item {
    font-size: 1.125rem;
    color: #1f2937;
    margin-bottom: 1.5rem;
    padding-left: 1.5rem;
    position: relative;
    opacity: 0;
    animation: company-card-fadeInUp 0.6s ease-out forwards;
  }

  .company-card-info-item:nth-child(1) {
    animation-delay: 0.2s;
  }

  .company-card-info-item:nth-child(2) {
    animation-delay: 0.4s;
  }

  .company-card-info-item:nth-child(3) {
    animation-delay: 0.6s;
  }

  .company-card-info-item::before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 8px;
    height: 8px;
    background: #3b82f6;
    border-radius: 50%;
  }

  /* Animations */
  @keyframes company-card-fadeIn {
    from {
      opacity: 0;
      transform: scale(0.95);
    }

    to {
      opacity: 1;
      transform: scale(1);
    }
  }

  @keyframes company-card-slideDown {
    from {
      opacity: 0;
      transform: translateY(-20px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @keyframes company-card-fadeInUp {
    from {
      opacity: 0;
      transform: translateY(20px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @keyframes company-card-fadeInRight {
    from {
      opacity: 0;
      transform: translateX(30px);
    }

    to {
      opacity: 1;
      transform: translateX(0);
    }
  }

  @keyframes company-card-pulse {

    0%,
    100% {
      opacity: 1;
      transform: rotate(45deg) scale(1);
    }

    50% {
      opacity: 0.6;
      transform: rotate(45deg) scale(1.2);
    }
  }

  /* Logo SVG Styles */
  .company-card-logo-svg {
    width: 100%;
    height: auto;
  }
</style>

<div class="company-card-container py-8 lg:py-16">
  <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center gap-5 px-4 md:px-8 lg:px-16">
    <div class="company-card-main">
      <!-- Title with decorative diamonds -->
      <h2 class="company-card-title">
        <span class="company-card-diamond"></span>
        会社情報
        <span class="company-card-diamond"></span>
      </h2>

      <!-- Content Grid -->
      <div class="company-card-content">
        <!-- Left: Information List -->
        <div>
          <ul class="company-card-info-list">
            <li class="company-card-info-item">会社名</li>
            <li class="company-card-info-item">代表者</li>
            <li class="company-card-info-item">本社・支社所在地</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Right: Logo -->
    <div class="company-card-logo-container">
      <img alt="logo" src="<?php echo get_site_url() . '/wp-content/uploads/2025/10/ec6934876060cf2416c003f8d560362db19e2959.png' ?>" />
    </div>
  </div>
</div>