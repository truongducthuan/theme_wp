<style>
  #team .fade-in-up {
    animation: fadeInUp 0.6s ease-out forwards;
  }

  #team .team-card {
    position: relative;
    transition: all 0.3s ease;
  }

  #team .team-card::after {
    content: '';
    position: absolute;
    top: -30px;
    left: -30px;
    width: 100%;
    height: 100%;
    background: transparent;
    z-index: -1;
    border: 1.5px solid #2BC8EB;
    border-radius: 1.5rem;
    transition: background 0.3s ease;
  }

  #team .team-card:hover::after {
    background: #302CEB;
  }

  #team .team-card:hover {
    transform: translateY(-10px);
  }

  #team .team-card:hover .team-image {
    transform: scale(1.05);
  }

  #team .team-image {
    transition: transform 0.4s ease;
  }

  #team .share-btn {
    transition: all 0.3s ease;
  }

  #team .share-btn:hover {
    /* transform: scale(1.1) rotate(90deg); */
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  }

  #team .share-menu {
    opacity: 0;
    visibility: hidden;
    transform: translateY(10px) scale(0.9);
    transition: all 0.3s ease;
  }

  #team .share-menu.active {
    opacity: 1;
    visibility: visible;
    transform: translateY(0) scale(1);
  }

  #team .social-icon {
    transition: all 0.3s ease;
  }

  #team .social-icon:hover {
    transform: translateY(-3px);
  }
</style>

<?php
$members = [
  (object) [
    'id' => 1,
    'name' => 'John Doe',
    'position' => 'CEO, Solution',
    'image' => get_site_url() . '/wp-content/uploads/2025/10/t2.png',
    'social' => [
      'facebook' => '#',
      'twitter' => '#',
      'linkedin' => '#',
      'instagram' => '#'
    ],
  ],
  (object) [
    'id' => 2,
    'name' => 'Jane Smith',
    'position' => 'CTO, Architect',
    'image' => get_site_url() . '/wp-content/uploads/2025/10/t2.png',
    'social' => [
      'facebook' => '#',
      'twitter' => '#',
      'linkedin' => '#',
      'instagram' => '#'
    ],
  ],
  (object) [
    'id' => 3,
    'name' => 'Bob Johnson',
    'position' => 'CFO',
    'image' => get_site_url() . '/wp-content/uploads/2025/10/t2.png',
    'social' => [
      'facebook' => '#',
      'twitter' => '#',
      'instagram' => '#'
    ],
  ],
  (object) [
    'id' => 4,
    'name' => 'Alice Williams',
    'position' => 'CMO',
    'image' => get_site_url() . '/wp-content/uploads/2025/10/t2.png',
    'social' => [
      'facebook' => '#',
      'twitter' => '#',
      'instagram' => '#'
    ],
  ],
]
?>
<section class="max-w-7xl mx-auto px-4 md:px-8 lg:px-16 py-16 lg:py-24" id='team'>
  <!-- Section Header -->
  <div class="text-center mb-16 fade-in-up">
    <div class="flex items-center justify-center gap-3 mb-4">
      <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 3.5L13 6.5L10 9.5L7 6.5L10 3.5Z M10 10.5L13 13.5L10 16.5L7 13.5L10 10.5Z" />
      </svg>
      <h3 class="text-blue-600 font-bold text-xl">Team Members</h3>
      <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 3.5L13 6.5L10 9.5L7 6.5L10 3.5Z M10 10.5L13 13.5L10 16.5L7 13.5L10 10.5Z" />
      </svg>
    </div>
    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight">
      Our Expert And Skilled<br>Team Members
    </h2>
  </div>

  <!-- Team Grid -->
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-16">

    <?php
    foreach ($members as $member) {
    ?>
      <div class="team-card fade-in-up bg-white rounded-3xl shadow-lg" style="animation-delay: 0.1s">
        <div class="relative overflow-hidden rounded-2xl w-full h-full">
          <img src="<?php echo $member->image; ?>"
            alt="<?php echo $member->name; ?>"
            class="team-image w-full h-full object-cover">

          <!-- Info Overlay -->
          <div class="bg-secondary absolute bottom-[6%] left-0 right-[16%] p-4 rounded-r-2xl text-white">
            <h4 class="text-2xl font-bold mb-1"><?php echo $member->name; ?></h4>
            <p class="text-sm opacity-90"><?php echo $member->position; ?></p>
          </div>

          <div class="dropdown group share-btn absolute top-4 right-4 w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white shadow-lg">
            <button class="flex items-center space-x-1 hover:text-blue-400 transition-colors">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
              </svg>
            </button>
            <div class="dropdown-content flex flex-col items-center justify-center gap-5 absolute top-full left-0 right-0 mt-1 bg-primary rounded-full shadow-xl h-26 max-w-[100px]">
              <?php
              foreach ($member->social as $key => $url) {
                switch ($key) {
                  case 'facebook':
                    echo '
        <a href="' . $url . '" class="social-icon w-6 h-6 bg-inherit rounded-full mt-2 flex items-center justify-center text-white">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
          </svg>
        </a>
      ';
                    break;

                  case 'twitter':
                    echo '
        <a href="' . $url . '" class="social-icon w-6 h-6 bg-inherit rounded-full flex items-center justify-center text-white">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
          </svg>
        </a>
      ';
                    break;

                  case 'instagram':
                    echo '
        <a href="' . $url . '" class="social-icon w-6 h-6 bg-inherit rounded-full mb-2 flex items-center justify-center text-white">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
          </svg>
        </a>
      ';
                    break;
                }
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
</section>

<script>
  // Toggle share menu
  function toggleShareMenu(event, menuId) {
    event.stopPropagation();
    const menu = document.getElementById(menuId);
    const allMenus = document.querySelectorAll('.share-menu');

    // Close all other menus
    allMenus.forEach(m => {
      if (m.id !== menuId) {
        m.classList.remove('active');
      }
    });

    // Toggle current menu
    menu.classList.toggle('active');
  }

  // Close share menus when clicking outside
  document.addEventListener('click', function(event) {
    if (!event.target.closest('.share-btn') && !event.target.closest('.share-menu')) {
      document.querySelectorAll('.share-menu').forEach(menu => {
        menu.classList.remove('active');
      });
    }
  });

  document.querySelectorAll('#team .fade-in-up').forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(30px)';
    observer.observe(el);
  });
</script>