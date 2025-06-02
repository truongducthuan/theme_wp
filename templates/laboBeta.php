<?php 
/**
 * Template Name: Labo Beta
 * Description: A page template for the Labo Beta section of the website.
 */
?>

<!DOCTYPE html>
<html lang="<?php echo get_bloginfo('language'); ?>">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo get_the_title(); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/labobeta.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/index.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
  </head>
  <body>
    <!-- Header -->
    <header class="header">
      <div class="container">
        <div class="nav-brand">
          <span class="logo">ActiveLabo</span>
          <span class="beta-badge">Beta</span>
        </div>
        <nav class="nav-menu">
          <a href="#about">アクティブラボとは</a>
          <a href="#features">特長・メリット</a>
          <a href="#cost">コスト比較</a>
          <a href="#scheme">協業スキーム</a>
          <a href="#ma">M&A条件</a>
          <a href="#support">支援内容</a>
        </nav>
        <div class="nav-actions">
          <a href="#contact" class="nav-link">お問い合わせ</a>
          <a href="#request" class="btn btn-primary">資料請求</a>
        </div>
        <button class="mobile-menu-toggle">
          <i class="fas fa-bars"></i>
        </button>
      </div>
    </header>

    <!-- Reading Progress Bar -->
    <div class="fixed top-0 left-0 w-full h-1 bg-gray-200 z-50">
        <div id="reading-progress" class="h-full bg-blue-600 transition-all duration-150" style="width: 0%"></div>
    </div>

    <!-- Hero Section -->
    <?php 
    $hero = get_field('hero_section');
    if(!empty($hero)):
    ?>
    <section class="hero">
      <div class="container">
        <div class="hero-content">
          <div class="hero-text">
            <h1 class="hero-title"><?php echo esc_html($hero['title']); ?></h1>
            <p class="hero-subtitle">
              <?php echo esc_html($hero['subtitle']); ?></p>
            </p>
            <div class="hero-actions">
              <a href="#contact" class="btn btn-primary btn-large">
                お問い合わせ <i class="fas fa-chevron-right"></i>
              </a>
              <a href="#request" class="btn btn-outline btn-large">
                資料請求 <i class="fas fa-chevron-right"></i>
              </a>
            </div>
          </div>
          <div class="hero-image">
            <?php if(!empty($hero['image'])): ?>
            <img src="<?php echo esc_url($hero['image']); ?>" alt="<?php echo get_the_title(); ?>" />
            <?php else: ?>
            <div class="image-placeholder">
              <i class="fas fa-users fa-4x"></i>
              <p> </p>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>
    <?php endif; ?>

    <!-- About Section -->
    <?php 
    $about = get_field('about_section');
    if(!empty($about)):
    ?>
    <section id="about" class="about">
      <div class="container">
        <div class="section-header">
          <span class="section-badge"><?php echo esc_html($about['badge']); ?></span>
          <h2 class="section-title">
            <?php echo esc_html($about['title']); ?>
          </h2>
          <p class="section-subtitle">
            <?php echo esc_html($about['subtitle']); ?>
          </p>
        </div>
        <div class="about-content">
          <div class="about-features">
            <?php foreach($about['features'] as $feature): ?>
            <div class="feature-item">
              <h3><?php echo esc_html($feature['name']); ?></h3>
              <p><?php echo esc_html($feature['description']); ?></p>
            </div>
            <?php endforeach; ?>
          </div>
          <div class="about-image">
            <?php if(!empty($about['image'])): ?>
            <img src="<?php echo esc_url($about['image']); ?>" alt="アクティブラボのイメージ" class="w-full h-full object-cover" />
            <?php else: ?>
            <div class="image-placeholder">
              <i class="fas fa-laptop-code fa-4x"></i>
              <p>アクティブラボのイメージ</p>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>
    <?php endif; ?>

    <!-- Features Section -->
    <?php 
    $features = get_field('features_section');
    if(!empty($features)):
    ?>
    <section id="features" class="features">
      <div class="container">
        <div class="section-header">
          <span class="section-badge"><?php echo esc_html($features['badge']); ?></span>
          <h2 class="section-title">
            <?php echo esc_html($features['title']); ?>
          </h2>
        </div>
        <div class="features-grid">
          <?php foreach($features['items'] as $item): ?>
          <div class="feature-card">
            <div class="feature-icon">
              <?php echo ($item['icon']); ?>
            </div>
            <h3><?php echo esc_html($item['title']); ?></h3>
            <div class="feature-price">
              <?php if(!empty($item['price'])): ?>
              <?php echo esc_html($item['price']); ?>
              <?php endif; ?>
            </div>
            <p><?php echo esc_html($item['description']); ?></p>
          </div>
          <?php endforeach; ?> 
        </div>
      </div>
    </section>
    <?php endif; ?>

    <!-- Cost Comparison Section -->
    <?php 
    $costs = get_field('cost_section');
    if(!empty($costs)):
    ?>
    <section id="cost" class="cost-comparison">
      <div class="container">
        <div class="section-header">
          <span class="section-badge"><?php echo esc_html($costs['badge']); ?></span>
          <h2 class="section-title"><?php echo esc_html($costs['title']); ?></h2>
        </div>
        <div class="comparison-table">
          <table>
            <thead>
              <tr>
                <th>項目</th>
                <th>従来モデル</th>
                <th>アクティブラボ</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($costs['table'] as $item): ?>
              <tr>
                <td><?php echo esc_html($item['key']); ?></td>
                <td><?php echo esc_html($item['normal']); ?></td>
                <td class="highlight"><?php echo esc_html($item['special']); ?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <?php endif; ?>

    <!-- Collaboration Scheme Section -->
    <?php 
    $collaboration = get_field('collaboration_section');
    if(!empty($collaboration)):
    ?>
    <section id="scheme" class="collaboration">
      <div class="container">
        <div class="section-header">
          <span class="section-badge"><?php echo esc_html($collaboration['badge']); ?></span>
          <h2 class="section-title"><?php echo esc_html($collaboration['title']); ?></h2>
        </div>
        <div class="scheme-diagram">
          <div class="scheme-image">
            <?php if(!empty($collaboration['image'])): ?>
            <img src="<?php echo esc_url($collaboration['image']); ?>" alt="協業スキーム図" />
            <?php else: ?>
            <div class="image-placeholder">
              <i class="fas fa-project-diagram fa-4x"></i>
              <p>協業スキーム図</p>
            </div>
            <?php endif; ?>
          </div>
          <div class="scheme-entities">
            <?php foreach($collaboration['items'] as $entity): ?>
            <div class="entity-card">
              <div class="entity-icon">
                <?php echo ($entity['icon']); ?>
              </div>
              <h3><?php echo esc_html($entity['title']); ?></h3>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>
    <?php endif; ?>

    <!-- M&A Conditions Section -->
    <?php
    $ma_conditions = get_field('ma_condition');
    if(!empty($ma_conditions)):
    ?>
    <section id="ma" class="ma-conditions">
      <div class="container">
        <div class="section-header">
          <span class="section-badge"><?php echo esc_html($ma_conditions['badge']); ?></span>
          <h2 class="section-title"><?php echo esc_html($ma_conditions['title']); ?></h2>
        </div>
        <div class="ma-grid">
          <?php 
          if(!empty($ma_conditions['profit'])): ?>
          <div class="ma-card">
            <h3><?php echo esc_html($ma_conditions['profit']['title']); ?></h3>
            <p><?php echo esc_html($ma_conditions['profit']['description']); ?></p>
          </div>
          <?php endif; ?>
          <?php if(!empty($ma_conditions['estimated'])): ?>
          <div class="ma-card">
            <h3><?php echo esc_html($ma_conditions['estimated']['title']); ?></h3>
            <ul>
              <?php foreach($ma_conditions['estimated']['description'] as $item): ?>
              <li><?php echo esc_html($item['text']); ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
          <?php endif; ?>
          <?php if(!empty($ma_conditions['result'])): ?>
          <div class="ma-card ma-card-full">
            <h3><?php echo esc_html($ma_conditions['result']['title']); ?></h3>
            <p><?php echo esc_html($ma_conditions['result']['description']); ?></p>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </section>
    <?php endif; ?>

    <!-- Support Section -->
    <?php 
    $suport = get_field('support_section');
    if(!empty($suport)):
    ?>
    <section id="support" class="support">
      <div class="container">
        <div class="section-header">
          <span class="section-badge"><?php echo esc_html($suport['badge']); ?></span>
          <h2 class="section-title">
            <?php echo esc_html($suport['title']); ?>
          </h2>
        </div>
        <div class="support-grid">
          <?php foreach($suport['items'] as $item): ?>
          <div class="support-card">
            <div class="support-icon">
              <?php echo ($item['icon']); ?>
            </div>
            <h3><?php echo esc_html($item['name']); ?></h3>
            <p><?php echo esc_html($item['description']); ?></p>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    <?php endif; ?>

    <!-- CTA Section -->
    <?php 
    $cta = get_field('cta_section');
    if(!empty($cta)):
    ?>
    <section id="request" class="cta">
      <div class="container">
        <div class="cta-content">
          <div class="cta-text">
            <span class="section-badge"><?php echo esc_html($cta['badge']); ?></span>
            <h2><?php echo esc_html($cta['title']); ?></h2>
            <p><?php echo esc_html($cta['subtitle']); ?></p>
            <div class="cta-actions">
              <a href="#contact" class="btn btn-primary btn-large">
                今すぐ相談する <i class="fas fa-arrow-right"></i>
              </a>
              <a href="#flow" class="btn btn-outline btn-large">
                導入までの流れを見る <i class="fas fa-chevron-right"></i>
              </a>
            </div>
          </div>
          <div class="cta-image">
            <?php if(!empty($cta['image'])): ?>
            <img src="<?php echo esc_url($cta['image']); ?>" alt="CTAイメージ" />
            <?php else: ?>
            <div class="image-placeholder">
              <i class="fas fa-handshake fa-4x"></i>
              <p>CTAイメージ</p>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>
    <?php endif; ?>

    <!-- Contact Section -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="section-header">
          <span class="section-badge">お問い合わせ</span>
          <h2 class="section-title">ご質問・ご相談はこちらから</h2>
        </div>
        <div class="contact-form-wrapper">
          <div class="contact-card">
            <h3>お問い合わせフォーム</h3>
            <p>
              以下のフォームに必要事項をご記入ください。担当者より折り返しご連絡いたします。
            </p>
            <?php echo do_shortcode('[contact-form-7 id="da22d6c" title="labo beta form"]'); ?>
          </div>
        </div>
      </div>
    </section>

    <!-- Scroll to Top Button -->
    <button id="scroll-top-btn" 
            class="fixed bottom-6 right-6 bg-blue-600 text-white rounded-full w-12 h-12 shadow-lg z-50 opacity-0 invisible transition-all duration-300 hover:bg-blue-700">
        <svg class="w-5 h-5 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
        </svg>
    </button>

    <!-- Footer -->
    <?php get_footer(); ?>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/laboBeta.js ?>"></script>
  </body>
</html>
