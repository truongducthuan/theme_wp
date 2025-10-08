<style>
  /* Company Info Dark Section Styles */
  .ci-dark-bg {
    background: url(<?php echo get_template_directory_uri() . '/assets/imgs/about/3907dab201f1956ce90fb0026c6b2c8b2b9f7063.jpg'; ?>);
    position: relative;
    overflow: hidden;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }

  .ci-dark-network-canvas {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
  }

  .ci-dark-content {
    position: relative;
    z-index: 2;
  }

  .ci-dark-panel {
    /* background: linear-gradient(135deg, rgba(88, 28, 135, 0.4) 0%, rgba(67, 56, 202, 0.3) 100%); */
    background: var(--primary-color);
    /* backdrop-filter: blur(10px); */
    box-shadow: 0 8px 32px rgba(139, 92, 246, 0.2);
  }

  .ci-dark-item {
    border-bottom: 1px solid rgba(255, 255, 255, 0.5);
    transition: all 0.3s ease;
  }

  .ci-dark-item:last-child {
    border-bottom: none;
  }

  .ci-dark-item:hover {
    background: rgba(139, 92, 246, 0.1);
    padding-left: 1.5rem;
  }

  .ci-dark-diamond {
    display: inline-block;
    width: 12px;
    height: 12px;
    background: #3b82f6;
    transform: rotate(45deg);
    animation: ci-dark-pulse 2s ease-in-out infinite;
  }

  @keyframes ci-dark-pulse {

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

  @keyframes ci-dark-fadeInUp {
    from {
      opacity: 0;
      transform: translateY(30px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .ci-dark-panel {
    animation: ci-dark-fadeInUp 0.8s ease-out;
  }

  .ci-dark-item {
    opacity: 0;
    animation: ci-dark-fadeInUp 0.6s ease-out forwards;
  }

  .ci-dark-item:nth-child(1) {
    animation-delay: 0.2s;
  }

  .ci-dark-item:nth-child(2) {
    animation-delay: 0.3s;
  }

  .ci-dark-item:nth-child(3) {
    animation-delay: 0.4s;
  }

  .ci-dark-item:nth-child(4) {
    animation-delay: 0.5s;
  }

  .ci-dark-item:nth-child(5) {
    animation-delay: 0.6s;
  }

  .ci-dark-item:nth-child(6) {
    animation-delay: 0.7s;
  }

  /* Network Animation Styles */
  .ci-dark-node {
    fill: #60a5fa;
    filter: drop-shadow(0 0 8px #60a5fa);
    animation: ci-dark-glow 3s ease-in-out infinite;
  }

  .ci-dark-line {
    stroke: #3b82f6;
    stroke-width: 1;
    opacity: 0.3;
    animation: ci-dark-line-pulse 4s ease-in-out infinite;
  }

  @keyframes ci-dark-glow {

    0%,
    100% {
      opacity: 0.6;
      filter: drop-shadow(0 0 8px #60a5fa);
    }

    50% {
      opacity: 1;
      filter: drop-shadow(0 0 16px #60a5fa);
    }
  }

  @keyframes ci-dark-line-pulse {

    0%,
    100% {
      opacity: 0.2;
    }

    50% {
      opacity: 0.5;
    }
  }
</style>

<section class="ci-dark-bg">
  <!-- Network Background Canvas -->
  <canvas id="networkCanvasInfo" class="ci-dark-network-canvas"></canvas>

  <!-- Content -->
  <div class="ci-dark-content max-w-7xl mx-auto flex flex-col items-center justify-center px-4 py-12 md:py-20">
    <!-- Title -->
    <div class="text-center mb-12 md:mb-16">
      <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-third flex items-center justify-center gap-4">
        <span class="ci-dark-diamond"></span>
        <span>会社情報</span>
        <span class="ci-dark-diamond"></span>
      </h1>
    </div>

    <div class="flex flex-col lg:flex-row items-center gap-12 ">
      <!-- Information Panel -->
      <div class="ci-dark-panel rounded-2xl p-8 md:p-12 w-full max-w-3xl">
        <div class="space-y-0">
          <div class="ci-dark-item py-5 md:py-6">
            <p class="text-white text-base md:text-lg">
              <span class="font-semibold">会社名：</span>Cong ty co phan Synora
            </p>
          </div>

          <div class="ci-dark-item py-5 md:py-6">
            <p class="text-white text-base md:text-lg">
              <span class="font-semibold">設立日：</span>2025年10月11日
            </p>
          </div>

          <div class="ci-dark-item py-5 md:py-6">
            <p class="text-white text-base md:text-lg">
              <span class="font-semibold">本社：</span>ハノイ
            </p>
          </div>

          <div class="ci-dark-item py-5 md:py-6">
            <p class="text-white text-base md:text-lg">
              <span class="font-semibold">支社：</span>Thanh Hoa
            </p>
          </div>

          <div class="ci-dark-item py-5 md:py-6">
            <p class="text-white text-base md:text-lg">
              <span class="font-semibold">代表者：</span>Ngo Van Dung
            </p>
          </div>

          <div class="ci-dark-item py-5 md:py-6">
            <p class="text-white text-base md:text-lg">
              <span class="font-semibold">会社名：</span>Cong ty co phan Synora
            </p>
          </div>
        </div>
      </div>

      <!-- Right Logo -->
      <div>
        <img alt="logo" src="<?php echo get_template_directory_uri() . '/assets/imgs/logo.png' ?>" />
      </div>
    </div>
  </div>
</section>

<script>
  // Network Background Animation
  const canvas = document.getElementById('networkCanvasInfo');
  const ctx = canvas.getContext('2d');

  // Set canvas size
  function resizeCanvas() {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
  }
  resizeCanvas();
  window.addEventListener('resize', resizeCanvas);

  // Network nodes
  const nodes = [];
  const nodeCount = 50;
  const connectionDistance = 150;

  // Create nodes
  for (let i = 0; i < nodeCount; i++) {
    nodes.push({
      x: Math.random() * canvas.width,
      y: Math.random() * canvas.height,
      vx: (Math.random() - 0.5) * 0.5,
      vy: (Math.random() - 0.5) * 0.5,
      radius: Math.random() * 2 + 1
    });
  }

  // Animation loop
  function animate() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    // Update and draw nodes
    nodes.forEach((node, i) => {
      // Update position
      node.x += node.vx;
      node.y += node.vy;

      // Bounce off edges
      if (node.x < 0 || node.x > canvas.width) node.vx *= -1;
      if (node.y < 0 || node.y > canvas.height) node.vy *= -1;

      // Draw connections
      nodes.forEach((otherNode, j) => {
        if (i !== j) {
          const dx = node.x - otherNode.x;
          const dy = node.y - otherNode.y;
          const distance = Math.sqrt(dx * dx + dy * dy);

          if (distance < connectionDistance) {
            const opacity = (1 - distance / connectionDistance) * 0.3;
            ctx.strokeStyle = `rgba(59, 130, 246, ${opacity})`;
            ctx.lineWidth = 1;
            ctx.beginPath();
            ctx.moveTo(node.x, node.y);
            ctx.lineTo(otherNode.x, otherNode.y);
            ctx.stroke();
          }
        }
      });

      // Draw node
      ctx.beginPath();
      ctx.arc(node.x, node.y, node.radius, 0, Math.PI * 2);
      ctx.fillStyle = '#60a5fa';
      ctx.shadowBlur = 10;
      ctx.shadowColor = '#60a5fa';
      ctx.fill();
      ctx.shadowBlur = 0;
    });

    requestAnimationFrame(animate);
  }

  animate();
</script>