<?php
$data = [
  (object) [
    'id' => 1,
    'name' => 'Successfully Projects',
    'number' => 60,
    'suffix' => '+',
    'icon' => get_template_directory_uri() . '/assets/imgs/svgs/cloud-icon-white.svg'
  ],
  (object) [
    'id' => 2,
    'name' => 'happy Clients',
    'number' => 65,
    'suffix' => 'K',
    'icon' => get_template_directory_uri() . '/assets/imgs/svgs/cloud-icon-white.svg'
  ],
  (object) [
    'id' => 3,
    'name' => 'Successfully Projects',
    'number' => 80,
    'suffix' => '+',
    'icon' => get_template_directory_uri() . '/assets/imgs/svgs/cloud-icon-white.svg'
  ],
  (object) [
    'id' => 4,
    'name' => 'happy Clients',
    'number' => 155,
    'suffix' => 'K',
    'icon' => get_template_directory_uri() . '/assets/imgs/svgs/cloud-icon-white.svg'
  ],
]
?>

<section class="bg-gray-900 relative" id="statistics">
  <!-- Network Background -->
  <div class="absolute inset-0 opacity-30">
    <canvas id="networkCanvasStars" class="w-full h-full"></canvas>
  </div>
  <div class="relative py-20 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto px-4 md:px-8 lg:px-16">
      <!-- CTA Banner -->
      <div class="network-bg rounded-3xl p-12 lg:p-16 text-center relative overflow-hidden shadow-2xl fade-in-up">
        <!-- Network Dots -->
        <div class="network-dots">
          <div class="network-dot" style="top: 10%; left: 15%; animation-delay: 0s;"></div>
          <div class="network-dot" style="top: 20%; left: 85%; animation-delay: 0.5s;"></div>
          <div class="network-dot" style="top: 70%; left: 10%; animation-delay: 1s;"></div>
          <div class="network-dot" style="top: 80%; left: 90%; animation-delay: 1.5s;"></div>
          <div class="network-dot" style="top: 40%; left: 50%; animation-delay: 2s;"></div>
        </div>

        <div class="relative z-10 flex flex-col lg:flex-row items-center justify-between">
          <h2 class="text-4xl lg:text-5xl font-bold text-white mb-8">
            Synoraの開発支援で、できること!
          </h2>
          <button class="cta-button bg-secondary hover:bg-cyan-600 text-white font-semibold px-10 py-4 rounded-lg text-lg">
            Get A Quote
          </button>
        </div>
      </div>

      <!-- Stats Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8 mt-16 lg:mt-24 mb-16">
        <?php
        foreach ($data as $stat) {
          echo '<div class="stat-card bg-white rounded-3xl p-8 text-center shadow-xl fade-in-up">
            <div class="icon-circle w-24 h-24 mx-auto mb-6 bg-primary rounded-full flex items-center justify-center">
              <img class="w-12 h-12 text-white" src="' . $stat->icon . '" alt="Icon">
            </div>
            <div class="text-5xl font-bold text-gray-900 mb-2">
              <span class="counter" data-target="' . $stat->number . '">' . $stat->number . '</span>' . $stat->suffix . '
            </div>
            <div class="text-gray-600 font-medium">' . $stat->name . '</div>
          </div>';
        }
        ?>
      </div>
    </div>
  </div>
</section>

<script>
  // Network Canvas Animation
  const canvasStars = document.getElementById('networkCanvasStars');
  const ctxStars = canvasStars.getContext('2d');

  canvasStars.width = window.innerWidth;
  canvasStars.height = window.innerHeight;

  const particlesStars = [];
  const particleCountStar = 50;

  class ParticleStars {
    constructor() {
      this.x = Math.random() * canvasStars.width;
      this.y = Math.random() * canvasStars.height;
      this.vx = (Math.random() - 0.5) * 0.5;
      this.vy = (Math.random() - 0.5) * 0.5;
      this.radius = 2;
    }

    update() {
      this.x += this.vx;
      this.y += this.vy;

      if (this.x < 0 || this.x > canvasStars.width) this.vx *= -1;
      if (this.y < 0 || this.y > canvasStars.height) this.vy *= -1;
    }

    draw() {
      ctxStars.beginPath();
      ctxStars.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
      ctxStars.fillStyle = 'rgba(6, 182, 212, 0.6)';
      ctxStars.fill();
    }
  }

  for (let i = 0; i < particleCountStar; i++) {
    particlesStars.push(new ParticleStars());
  }

  function connectParticlesStars() {
    for (let i = 0; i < particlesStars.length; i++) {
      for (let j = i + 1; j < particlesStars.length; j++) {
        const dx = particlesStars[i].x - particlesStars[j].x;
        const dy = particlesStars[i].y - particlesStars[j].y;
        const distance = Math.sqrt(dx * dx + dy * dy);

        if (distance < 150) {
          ctxStars.beginPath();
          ctxStars.strokeStyle = `rgba(6, 182, 212, ${1 - distance / 150})`;
          ctxStars.lineWidth = 1;
          ctxStars.moveTo(particlesStars[i].x, particlesStars[i].y);
          ctxStars.lineTo(particlesStars[j].x, particlesStars[j].y);
          ctxStars.stroke();
        }
      }
    }
  }

  function animateStars() {
    ctxStars.clearRect(0, 0, canvasStars.width, canvasStars.height);

    particlesStars.forEach(particle => {
      particle.update();
      particle.draw();
    });

    connectParticlesStars();
    requestAnimationFrame(animateStars);
  }

  animateStars();

  window.addEventListener('resize', () => {
    canvasStars.width = window.innerWidth;
    canvasStars.height = window.innerHeight;
  });

  // Counter Animation
  function animateCounter(element) {
    const target = parseFloat(element.getAttribute('data-target'));
    const duration = 2000;
    const increment = target / (duration / 16);
    let current = 0;
    const isDecimal = target % 1 !== 0;

    const timer = setInterval(() => {
      current += increment;
      if (current >= target) {
        element.textContent = isDecimal ? target.toFixed(1) : Math.ceil(target);
        clearInterval(timer);
      } else {
        element.textContent = isDecimal ? current.toFixed(1) : Math.ceil(current);
      }
    }, 16);
  }

  // Intersection Observer for animations
  const observerOptionsStars = {
    threshold: 0.2,
    rootMargin: '0px 0px -100px 0px'
  };

  const observerStars = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');

        // Trigger counter animation
        const counter = entry.target.querySelector('.counter');
        if (counter && !counter.classList.contains('animated')) {
          counter.classList.add('animated');
          animateCounter(counter);
        }
      }
    });
  }, observerOptionsStars);

  document.querySelectorAll('#statistics .fade-in-up').forEach(el => {
    console.log(el);
    if (el instanceof HTMLElement) {
      observerStars.observe(el);
    }
  });
</script>