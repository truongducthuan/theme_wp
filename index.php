<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TechSolutions - IT Solutions & Services</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');

    * {
      font-family: 'Inter', sans-serif;
    }

    body {
      overflow-x: hidden;
    }

    /* Particle Animation Background */
    .particle-bg {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
      z-index: 0;
    }

    .particle {
      position: absolute;
      width: 3px;
      height: 3px;
      background: rgba(14, 165, 233, 0.5);
      border-radius: 50%;
      animation: float 20s infinite;
    }

    @keyframes float {

      0%,
      100% {
        transform: translate(0, 0);
        opacity: 0;
      }

      10% {
        opacity: 1;
      }

      90% {
        opacity: 1;
      }

      100% {
        transform: translate(100px, -100px);
        opacity: 0;
      }
    }

    /* Network Lines Animation */
    .network-line {
      position: absolute;
      height: 1px;
      background: linear-gradient(90deg, transparent, rgba(14, 165, 233, 0.3), transparent);
      animation: lineMove 15s infinite;
    }

    @keyframes lineMove {
      0% {
        transform: translateX(-100%);
        opacity: 0;
      }

      50% {
        opacity: 1;
      }

      100% {
        transform: translateX(100%);
        opacity: 0;
      }
    }

    /* Smooth Scroll */
    html {
      scroll-behavior: smooth;
    }

    /* Gradient Text */
    .gradient-text {
      background: linear-gradient(135deg, #0ea5e9 0%, #06b6d4 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    /* Card Hover Effects */
    .card-hover {
      transition: all 0.3s ease;
    }

    .card-hover:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 40px rgba(14, 165, 233, 0.2);
    }

    /* Button Glow Effect */
    .btn-glow {
      position: relative;
      overflow: hidden;
    }

    .btn-glow::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      width: 0;
      height: 0;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.2);
      transform: translate(-50%, -50%);
      transition: width 0.6s, height 0.6s;
    }

    .btn-glow:hover::before {
      width: 300px;
      height: 300px;
    }

    /* Fade In Animation */
    .fade-in {
      opacity: 0;
      transform: translateY(30px);
      animation: fadeInUp 0.8s ease forwards;
    }

    @keyframes fadeInUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Stagger Animation Delays */
    .fade-in:nth-child(1) {
      animation-delay: 0.1s;
    }

    .fade-in:nth-child(2) {
      animation-delay: 0.2s;
    }

    .fade-in:nth-child(3) {
      animation-delay: 0.3s;
    }

    .fade-in:nth-child(4) {
      animation-delay: 0.4s;
    }

    /* Stats Counter Animation */
    .stat-number {
      font-variant-numeric: tabular-nums;
    }

    /* Pulse Animation for Icons */
    .pulse-icon {
      animation: pulse 2s ease-in-out infinite;
    }

    @keyframes pulse {

      0%,
      100% {
        transform: scale(1);
      }

      50% {
        transform: scale(1.05);
      }
    }
  </style>
</head>

<body class="bg-slate-950 text-white">

  <!-- Navigation -->
  <nav class="fixed top-0 w-full bg-slate-950/80 backdrop-blur-md z-50 border-b border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16">
        <div class="flex items-center">
          <span class="text-2xl font-bold gradient-text">TechSolutions</span>
        </div>
        <div class="hidden md:flex items-center gap-8">
          <a href="#home" class="text-slate-300 hover:text-cyan-400 transition-colors">Home</a>
          <a href="#about" class="text-slate-300 hover:text-cyan-400 transition-colors">About</a>
          <a href="#services" class="text-slate-300 hover:text-cyan-400 transition-colors">Services</a>
          <a href="#contact" class="text-slate-300 hover:text-cyan-400 transition-colors">Contact</a>
          <button class="bg-gradient-to-r from-cyan-500 to-blue-500 px-6 py-2 rounded-lg font-medium hover:shadow-lg hover:shadow-cyan-500/50 transition-all">
            Get Started
          </button>
        </div>
        <button class="md:hidden text-white">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden pt-16">
    <!-- Animated Background -->
    <div class="particle-bg">
      <div class="particle" style="left: 10%; top: 20%; animation-delay: 0s;"></div>
      <div class="particle" style="left: 20%; top: 80%; animation-delay: 2s;"></div>
      <div class="particle" style="left: 30%; top: 40%; animation-delay: 4s;"></div>
      <div class="particle" style="left: 40%; top: 60%; animation-delay: 1s;"></div>
      <div class="particle" style="left: 50%; top: 30%; animation-delay: 3s;"></div>
      <div class="particle" style="left: 60%; top: 70%; animation-delay: 5s;"></div>
      <div class="particle" style="left: 70%; top: 50%; animation-delay: 2.5s;"></div>
      <div class="particle" style="left: 80%; top: 20%; animation-delay: 4.5s;"></div>
      <div class="particle" style="left: 90%; top: 60%; animation-delay: 1.5s;"></div>

      <div class="network-line" style="top: 20%; width: 200px; animation-delay: 0s;"></div>
      <div class="network-line" style="top: 40%; width: 300px; animation-delay: 2s;"></div>
      <div class="network-line" style="top: 60%; width: 250px; animation-delay: 4s;"></div>
      <div class="network-line" style="top: 80%; width: 350px; animation-delay: 1s;"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid md:grid-cols-2 gap-12 items-center">
        <div class="fade-in">
          <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold leading-tight mb-6">
            Innovative <span class="gradient-text">IT Solutions</span> For Your Business
          </h1>
          <p class="text-lg text-slate-400 mb-8 leading-relaxed">
            Transform your business with cutting-edge technology solutions. We deliver excellence in software development, cloud services, and digital transformation.
          </p>
          <div class="flex flex-wrap gap-4">
            <button class="btn-glow bg-gradient-to-r from-cyan-500 to-blue-500 px-8 py-4 rounded-lg font-semibold text-lg hover:shadow-xl hover:shadow-cyan-500/50 transition-all relative z-10">
              Get Started
            </button>
            <button class="border-2 border-cyan-500 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-cyan-500/10 transition-all">
              Learn More
            </button>
          </div>
        </div>
        <div class="fade-in relative">
          <div class="relative w-full aspect-square max-w-md mx-auto">
            <div class="absolute inset-0 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full blur-3xl opacity-20 animate-pulse"></div>
            <img src="/placeholder.svg?height=500&width=500" alt="Professional" class="relative z-10 rounded-full border-4 border-cyan-500/30 shadow-2xl shadow-cyan-500/20">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="py-20 bg-slate-900/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-4xl md:text-5xl font-bold mb-4">About <span class="gradient-text">Our Company</span></h2>
        <p class="text-slate-400 text-lg max-w-2xl mx-auto">Leading the way in digital transformation with innovative solutions</p>
      </div>

      <div class="grid md:grid-cols-2 gap-12 items-center">
        <div class="fade-in">
          <img src="/placeholder.svg?height=400&width=600" alt="About Us" class="rounded-2xl shadow-2xl shadow-cyan-500/10">
        </div>
        <div class="fade-in">
          <h3 class="text-3xl font-bold mb-6">We Are Increasing Business Success With <span class="gradient-text">Technology</span></h3>
          <p class="text-slate-400 mb-8 leading-relaxed">
            With over 10 years of experience, we've helped hundreds of businesses transform their operations through innovative technology solutions. Our team of experts is dedicated to delivering excellence in every project.
          </p>
          <div class="grid grid-cols-2 gap-6">
            <div class="card-hover bg-slate-800/50 p-6 rounded-xl border border-slate-700">
              <div class="w-12 h-12 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-lg flex items-center justify-center mb-4 pulse-icon">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
              </div>
              <h4 class="font-semibold mb-2">Quality Service</h4>
              <p class="text-sm text-slate-400">Excellence in every delivery</p>
            </div>
            <div class="card-hover bg-slate-800/50 p-6 rounded-xl border border-slate-700">
              <div class="w-12 h-12 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-lg flex items-center justify-center mb-4 pulse-icon">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
              </div>
              <h4 class="font-semibold mb-2">Fast Delivery</h4>
              <p class="text-sm text-slate-400">Quick turnaround times</p>
            </div>
            <div class="card-hover bg-slate-800/50 p-6 rounded-xl border border-slate-700">
              <div class="w-12 h-12 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-lg flex items-center justify-center mb-4 pulse-icon">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                </svg>
              </div>
              <h4 class="font-semibold mb-2">Expert Team</h4>
              <p class="text-sm text-slate-400">Skilled professionals</p>
            </div>
            <div class="card-hover bg-slate-800/50 p-6 rounded-xl border border-slate-700">
              <div class="w-12 h-12 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-lg flex items-center justify-center mb-4 pulse-icon">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
                </svg>
              </div>
              <h4 class="font-semibold mb-2">24/7 Support</h4>
              <p class="text-sm text-slate-400">Always here to help</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Stats Section -->
  <section class="py-20 bg-gradient-to-r from-cyan-500/10 to-blue-500/10 border-y border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
        <div class="text-center fade-in">
          <div class="text-5xl font-bold gradient-text mb-2 stat-number">500+</div>
          <div class="text-slate-400">Projects Completed</div>
        </div>
        <div class="text-center fade-in">
          <div class="text-5xl font-bold gradient-text mb-2 stat-number">300+</div>
          <div class="text-slate-400">Happy Clients</div>
        </div>
        <div class="text-center fade-in">
          <div class="text-5xl font-bold gradient-text mb-2 stat-number">50+</div>
          <div class="text-slate-400">Team Members</div>
        </div>
        <div class="text-center fade-in">
          <div class="text-5xl font-bold gradient-text mb-2 stat-number">10+</div>
          <div class="text-slate-400">Years Experience</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section id="services" class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-4xl md:text-5xl font-bold mb-4">Our <span class="gradient-text">Services</span></h2>
        <p class="text-slate-400 text-lg max-w-2xl mx-auto">Comprehensive IT solutions tailored to your business needs</p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="card-hover bg-slate-900/50 p-8 rounded-2xl border border-slate-800 fade-in">
          <div class="w-16 h-16 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-xl flex items-center justify-center mb-6">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
            </svg>
          </div>
          <h3 class="text-2xl font-bold mb-4">Web Development</h3>
          <p class="text-slate-400 leading-relaxed">Custom web applications built with modern technologies for optimal performance and user experience.</p>
        </div>

        <div class="card-hover bg-slate-900/50 p-8 rounded-2xl border border-slate-800 fade-in">
          <div class="w-16 h-16 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-xl flex items-center justify-center mb-6">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
            </svg>
          </div>
          <h3 class="text-2xl font-bold mb-4">Mobile Apps</h3>
          <p class="text-slate-400 leading-relaxed">Native and cross-platform mobile applications that deliver seamless experiences on all devices.</p>
        </div>

        <div class="card-hover bg-slate-900/50 p-8 rounded-2xl border border-slate-800 fade-in">
          <div class="w-16 h-16 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-xl flex items-center justify-center mb-6">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
            </svg>
          </div>
          <h3 class="text-2xl font-bold mb-4">Cloud Solutions</h3>
          <p class="text-slate-400 leading-relaxed">Scalable cloud infrastructure and migration services to power your business growth.</p>
        </div>

        <div class="card-hover bg-slate-900/50 p-8 rounded-2xl border border-slate-800 fade-in">
          <div class="w-16 h-16 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-xl flex items-center justify-center mb-6">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
            </svg>
          </div>
          <h3 class="text-2xl font-bold mb-4">Cybersecurity</h3>
          <p class="text-slate-400 leading-relaxed">Comprehensive security solutions to protect your digital assets and data.</p>
        </div>

        <div class="card-hover bg-slate-900/50 p-8 rounded-2xl border border-slate-800 fade-in">
          <div class="w-16 h-16 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-xl flex items-center justify-center mb-6">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
            </svg>
          </div>
          <h3 class="text-2xl font-bold mb-4">Data Analytics</h3>
          <p class="text-slate-400 leading-relaxed">Transform your data into actionable insights with advanced analytics solutions.</p>
        </div>

        <div class="card-hover bg-slate-900/50 p-8 rounded-2xl border border-slate-800 fade-in">
          <div class="w-16 h-16 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-xl flex items-center justify-center mb-6">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
            </svg>
          </div>
          <h3 class="text-2xl font-bold mb-4">AI & ML</h3>
          <p class="text-slate-400 leading-relaxed">Leverage artificial intelligence and machine learning to automate and optimize processes.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section id="contact" class="py-20 bg-gradient-to-r from-cyan-500/10 to-blue-500/10">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <h2 class="text-4xl md:text-5xl font-bold mb-6">Ready to Transform Your Business?</h2>
      <p class="text-slate-400 text-lg mb-8 leading-relaxed">Let's discuss how our innovative solutions can help you achieve your goals</p>
      <button class="btn-glow bg-gradient-to-r from-cyan-500 to-blue-500 px-10 py-4 rounded-lg font-semibold text-lg hover:shadow-xl hover:shadow-cyan-500/50 transition-all relative z-10">
        Contact Us Today
      </button>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-slate-950 border-t border-slate-800 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid md:grid-cols-4 gap-8 mb-8">
        <div>
          <h3 class="text-2xl font-bold gradient-text mb-4">TechSolutions</h3>
          <p class="text-slate-400 text-sm">Innovative IT solutions for modern businesses.</p>
        </div>
        <div>
          <h4 class="font-semibold mb-4">Services</h4>
          <ul class="space-y-2 text-slate-400 text-sm">
            <li><a href="#" class="hover:text-cyan-400 transition-colors">Web Development</a></li>
            <li><a href="#" class="hover:text-cyan-400 transition-colors">Mobile Apps</a></li>
            <li><a href="#" class="hover:text-cyan-400 transition-colors">Cloud Solutions</a></li>
            <li><a href="#" class="hover:text-cyan-400 transition-colors">Cybersecurity</a></li>
          </ul>
        </div>
        <div>
          <h4 class="font-semibold mb-4">Company</h4>
          <ul class="space-y-2 text-slate-400 text-sm">
            <li><a href="#" class="hover:text-cyan-400 transition-colors">About Us</a></li>
            <li><a href="#" class="hover:text-cyan-400 transition-colors">Careers</a></li>
            <li><a href="#" class="hover:text-cyan-400 transition-colors">Blog</a></li>
            <li><a href="#" class="hover:text-cyan-400 transition-colors">Contact</a></li>
          </ul>
        </div>
        <div>
          <h4 class="font-semibold mb-4">Connect</h4>
          <div class="flex gap-4">
            <a href="#" class="w-10 h-10 bg-slate-800 rounded-lg flex items-center justify-center hover:bg-cyan-500 transition-colors">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
              </svg>
            </a>
            <a href="#" class="w-10 h-10 bg-slate-800 rounded-lg flex items-center justify-center hover:bg-cyan-500 transition-colors">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
              </svg>
            </a>
            <a href="#" class="w-10 h-10 bg-slate-800 rounded-lg flex items-center justify-center hover:bg-cyan-500 transition-colors">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
              </svg>
            </a>
          </div>
        </div>
      </div>
      <div class="border-t border-slate-800 pt-8 text-center text-slate-400 text-sm">
        <p>&copy; 2025 TechSolutions. All rights reserved.</p>
      </div>
    </div>
  </footer>

</body>

</html>