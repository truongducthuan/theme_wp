<?php 
 /**
  * Template Name: Activelabo Page
  * Description: A page template for the activelabo section of the website.
  */
  get_header();
?>

<!-- Start Hero Section -->
<?php 
$hero = get_field('hero_section');
?>
<style>
  .hero-bg {
      background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('<?php echo esc_html($hero['image']); ?>');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
  }
</style>
 <!-- Reading Progress Bar -->
<div class="fixed top-0 left-0 w-full h-1 bg-gray-200 z-50">
    <div id="reading-progress" class="h-full bg-blue-600 transition-all duration-150" style="width: 0%"></div>
</div>

  <?php if ($hero): ?>
  <section class="hero-bg min-h-[500px] lg:min-h-[600px] flex items-center">
      <div class="max-w-7xl mx-auto px-4 w-full">
          <div class="max-w-auto fade-in">
              <h1 class="text-4xl sm:text-5xl lg:text-6xl text-center xl:text-7xl font-bold text-white mb-4 lg:mb-6 leading-tight">
                  <?php echo esc_html($hero['title']); ?>
              </h1>
              <p class="text-lg lg:text-xl text-blue-100 text-center mb-6">
                  <?php echo esc_html($hero['subtitle']); ?>
              </p>
              <div class="backdrop-contrast-125 rounded-lg p-4 lg:p-6 max-w-2xl">
                  <h2 class="text-xl lg:text-2xl font-semibold text-white mb-2">
                      <?php echo esc_html($hero['slogan']); ?>
                  </h2>
                  <p class="text-blue-100 text-base lg:text-lg leading-relaxed">
                      <?php echo esc_html($hero['subslogan']); ?>
                  </p>
              </div>
          </div>
      </div>
  </section>
  <?php endif; ?>
<!-- End Hero Section -->

<!-- Main Content Section -->
<?php 
  $content = get_field('content_section');
?>
  <?php if ($content): ?>
  <section class="py-12 lg:py-20 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="grid lg:grid-cols-2 gap-8 lg:gap-16 items-center">
              <!-- Left Column - Image -->
              <div class="order-2 lg:order-1 slide-in-left">
                  <div class="relative">
                      <!-- Main dashboard image -->
                      <div class="bg-gray-800 rounded-lg overflow-hidden shadow-2xl">
                        <img src="<?php echo esc_html($content['image']); ?>" alt="Analytics Dashboard" class="w-full h-auto">
                      </div>
                      
                      <!-- Floating UI elements -->
                      <div class="absolute -top-4 -left-4 bg-white rounded-full p-4 shadow-lg border-4 border-blue-100">
                          <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center">
                              <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                              </svg>
                          </div>
                      </div>
                      
                      <div class="absolute top-8 -right-4 bg-white rounded-full p-4 shadow-lg border-4 border-green-100">
                          <div class="w-8 h-8 bg-green-600 rounded-full flex items-center justify-center">
                              <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                  <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path>
                              </svg>
                          </div>
                      </div>
                      
                      <div class="absolute bottom-4 left-8 bg-white rounded-full p-4 shadow-lg border-4 border-purple-100">
                          <div class="w-8 h-8 bg-purple-600 rounded-full flex items-center justify-center">
                              <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                  <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"></path>
                              </svg>
                          </div>
                      </div>
                  </div>
              </div>
              
              <!-- Right Column - Content -->
              <div class="order-1 lg:order-2 slide-in-right">
                  <div class="lg:pl-8">
                      <h2 class="text-2xl lg:text-3xl xl:text-4xl font-bold text-gray-900 mb-6 leading-tight">
                        <?php echo esc_html($content['title']); ?>
                      </h2>
                      <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        <?php echo esc_html($content['subtitle']); ?>
                      </p>
                      
                      <!-- Features List -->
                      <div class="space-y-6 mb-8">
                        <?php 
                        if (!empty($content['features']) && is_array($content['features'])):
                          // Loop through each feature and display it
                        foreach ($content['features'] as $feature): ?>
                          <div class="flex items-start space-x-4">
                              <div class="flex-shrink-0 w-5 h-5 rounded-full mt-3">
                                <?php 
                                $svg = simplexml_load_string($feature['icon']);
                                echo $svg->asXML();
                                ?>
                              </div>
                              <div>
                                  <h3 class="font-semibold text-gray-900 mb-1 text-lg">
                                      <?php echo esc_html($feature['title']); ?>
                                  </h3>
                                  <p class="text-gray-600 leading-relaxed">
                                      <?php echo esc_html($feature['subtitle']); ?>
                                  </p>
                              </div>
                          </div>
                        <?php endforeach; endif;?>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <?php endif; ?>
<!-- End Main Content Section -->

<?php 
$features = get_field('feature_section');
?>
<?php if ($features): ?>
<!-- Features Section -->
    <section class="bg-slate-600 py-16 lg:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-12 lg:mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">
                    <?php echo esc_html($features['title']); ?>
                </h2>
                <p class="text-slate-200 text-lg lg:text-xl">
                    <?php echo esc_html($features['subtitle']); ?>
                </p>
            </div>
            
            <!-- Features Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
              <?php 
                if(!empty($features['features']) && is_array($features['features'])):
                  // Loop through each feature item and display it
                  foreach ($features['features'] as $feature):
              ?>
                <div class="bg-white rounded-lg p-6 lg:p-8 text-center shadow-lg hover:shadow-xl transition-shadow">
                    <div class="w-12 h-12 text-primary bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <?php 
                        // $svg = simplexml_load_string($feature['icon']);
                        // echo $svg->asXML();
                        echo ($feature['icon']);
                        ?>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">
                        <?php echo esc_html($feature['title']); ?>
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        <?php echo esc_html($feature['description']); ?>
                    </p>
                </div>
              <?php endforeach; endif; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-- End Features Section -->
    
    <!-- Cost Comparison Section -->
    <?php 
    $cost_comparison = get_field('cost_section');
    if(!empty($cost_comparison)):
    ?>
    <section class="bg-white py-16 lg:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <!-- Left Column - Comparison Table -->
                <div>
                    <div class="mb-8">
                        <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                            <?php echo esc_html($cost_comparison['title']); ?>
                        </h2>
                        <p class="text-gray-600 text-lg">
                            <?php echo esc_html($cost_comparison['subtitle']); ?>
                        </p>
                    </div>
                    
                    <!-- Comparison Table -->
                    <div class="space-y-6">
                      <?php 
                      if(!empty($cost_comparison['table']) && is_array($cost_comparison['table'])):
                        // Loop through each comparison item and display it
                        foreach ($cost_comparison['table'] as $rows):
                          if(!empty($rows) && is_array($rows)):
                            foreach ($rows as $row):
                      ?>
                        <!-- Header Row -->
                        <div class="grid grid-cols-3 gap-4 pb-4 border-b border-gray-200">
                            <div class="font-semibold text-gray-900"><?php echo esc_html($row['row1']); ?></div>
                            <div class="font-semibold text-gray-900 text-center"><?php echo esc_html($row['row2']); ?></div>
                            <div class="font-semibold text-blue-600 text-center"><?php echo esc_html($row['row3']); ?></div>
                        </div>
                      <?php 
                            endforeach; endif; endforeach; endif; ?>
                    </div>
                    
                    <!-- CTA Button -->
                    <div class="mt-8">
                        <a href="#" class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                            詳細資料をダウンロード
                        </a>
                    </div>
                </div>
                
                <!-- Right Column - Image -->
                <div class="order-first lg:order-last">
                    <div class="relative">
                        <img 
                            src="<?php echo esc_html($cost_comparison['image']); ?>" 
                            alt="Analytics Dashboard Comparison" 
                            class="w-full h-auto rounded-lg shadow-2xl"
                        >
                        <!-- Overlay elements for visual enhancement -->
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm rounded-lg p-3 shadow-lg">
                            <div class="flex items-center space-x-2">
                                <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                                <span class="text-sm font-medium text-gray-700">リアルタイム分析</span>
                            </div>
                        </div>
                        
                        <div class="absolute bottom-4 left-4 bg-white/90 backdrop-blur-sm rounded-lg p-3 shadow-lg">
                            <div class="flex items-center space-x-2">
                                <div class="w-3 h-3 bg-blue-500 rounded-full"></div>
                                <span class="text-sm font-medium text-gray-700">コスト最適化</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-- End Comparison Section -->

    <!-- Development Team Structure Section -->
    <?php 
    $structure = get_field('structure_section');
    if(!empty($structure)):
    ?>
    <section class="team-bg py-16 lg:py-24 relative grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16">
        <div class="max-w-7xl flex flex-col items-start mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center mx-auto mb-12 lg:mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                    <?php echo esc_html($structure['title']); ?>
                </h2>
                <p class="text-gray-700 text-lg">
                    <?php echo esc_html($structure['subtitle']); ?>
                </p>
            </div>
            
            <!-- Team Structure Diagram -->
            <div class="max-w-4xl mx-auto">
                <!-- Top Level - Customer -->
                <div class="flex justify-center mb-8">
                    <div class="bg-indigo-600 text-white px-6 py-3 rounded-lg font-semibold text-center shadow-lg">
                        <?php echo esc_html($structure['top_level']); ?>
                    </div>
                </div>
                
                <!-- Connection Line -->
                <div class="flex justify-center mb-8">
                    <div class="w-px h-8 bg-gray-400"></div>
                </div>
                
                <!-- Second Level - ActiveLabo and Management -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8 items-center">
                  <?php
                  if(!empty($structure['second_level']) && is_array($structure['second_level'])):
                    // Loop through each second level item and display it
                    foreach ($structure['second_level'] as $item): 
                    ?>
                    <div class="flex justify-center">
                        <div class="bg-indigo-600 text-white px-6 py-3 rounded-lg font-semibold text-center shadow-lg">
                            <?php echo esc_html($item['text']); ?>
                        </div>
                    </div>
                    
                  <?php 
                    endforeach;
                  endif; ?>
                </div>
                
                <!-- Connection Lines -->
                <div class="flex justify-center mb-8">
                    <div class="w-px h-8 bg-gray-400"></div>
                </div>
                
                <!-- Bottom Level - Development Team -->
                <div class="flex justify-center">
                    <div class="bg-indigo-600 text-white px-8 py-4 rounded-lg font-semibold text-center shadow-lg">
                        <?php echo esc_html($structure['botton_level']); ?>
                    </div>
                </div>
            </div>
        </div>
        <div></div>
    </section>
    <?php endif; ?>
    <!-- End Development Team Structure Section -->
    
    <!-- M&A Support Conditions Section -->
     <?php 
     $supports = get_field('support_section');
     if(!empty($supports)):
     ?>
    <section class="bg-white py-16 lg:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-12 lg:mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                    <?php echo esc_html($supports['title']); ?>
                </h2>
                <p class="text-gray-600 text-lg">
                    <?php echo esc_html($supports['subtitle']); ?>
                </p>
            </div>
            
            <!-- M&A Conditions Grid -->
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 mb-12">
                <!-- Left Column - Results -->
                <div class="text-center border border-gray-200 rounded-lg p-6 lg:p-8">
                  <?php if(!empty($supports['result'])):                    
                  ?>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6"><?php echo esc_html($supports['result']['title']); ?></h3>
                    <div class="space-y-4">
                        <p class="text-gray-700 leading-relaxed">
                            <?php echo esc_html($supports['result']['description']); ?>
                        </p>
                    </div>
                  <?php endif; ?>
                </div>
                
                <!-- Right Column - Valuation Settings -->
                <div class="text-center border border-gray-200 rounded-lg p-6 lg:p-8">
                  <?php if(!empty($supports['setting'])): 
                    $setting = $supports['setting'];  
                  ?>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6"><?php echo esc_html($setting['title']); ?></h3>
                    <div class="space-y-4">
                      <?php if(!empty($setting['items'])): 
                        foreach ($setting['items'] as $item): 
                      ?>
                        <div class="flex items-start space-x-3">
                            <div class="w-5 h-5 rounded-full mt-2 flex-shrink-0">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/check.svg" alt="check" />
                            </div>
                            <p class="text-gray-700"><?php echo esc_html($item['text']); ?></p>
                        </div>
                      <?php
                        endforeach;
                      endif; ?>
                      </div>
                  <?php endif; ?>
                </div>
            </div>
            
            <!-- M&A Timing Section -->
            <div class="text-center bg-gray-50 rounded-lg p-8 lg:p-12">
              <?php if(!empty($supports['m&a'])): 
                $timing = $supports['m&a'];  
              ?>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">
                    <?php echo esc_html($timing['text1']); ?>
                </h3>
                <p class="text-gray-700 text-lg leading-relaxed max-w-3xl mx-auto">
                    <?php echo esc_html($timing['text2']); ?>
                </p>
              <?php endif; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-- End M&A Support Conditions Section -->
    
    <!-- Training & Support Section -->
     <?php 
     $traning_support = get_field('traning_section');
      if(!empty($traning_support)):
     ?>
    <section class="py-16 lg:py-24 bg-[#D8E7F7]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-12 lg:mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                    <?php echo esc_html($traning_support['title']); ?>
                </h2>
                <p class="text-gray-700 text-lg">
                    <?php echo esc_html($traning_support['subtitle']); ?>
                </p>
            </div>
            
            <!-- Training Services Grid -->
            <div class="grid md:grid-cols-3 gap-8 lg:gap-12">
              <?php 
              if(!empty($traning_support['items']) && is_array($traning_support['items'])):
                // Loop through each service item and display it
                foreach ($traning_support['items'] as $item):
              ?>
                <div class="bg-white rounded-lg p-8 text-center shadow-lg hover:shadow-xl transition-shadow">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <?php 
                        // $svg = simplexml_load_string($item['icon']);
                        // echo $svg->asXML();
                        echo ($item['icon']);
                        ?>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">
                        <?php echo esc_html($item['title']); ?>
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        <?php echo esc_html($item['description']); ?>
                    </p>
                </div>
              <?php 
                endforeach;
              endif; ?>
            </div>
            <div class="flex justify-center mt-8">
              <a href="#" class="bg-indigo-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-indigo-700 transition-colors">
                  サポート内容を詳しく見る
              </a>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-- End Additional Support Section -->
    
    <!-- Main Comparison Section -->
    <?php 
    $price = get_field('price_section');
    if(!empty($price)):
    ?>
    <style>
      #price-comparison svg {
        width: 1.5rem;
        height: 1.5rem;
        display: block;
      }
    </style>
    <section class="py-12 lg:py-20" id="price-comparison">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Title -->
            <div class="text-center mb-8 lg:mb-12">
                <h1 class="text-2xl lg:text-3xl font-bold text-gray-900">
                    <?php echo esc_html($price['title']); ?>
                </h1>
            </div>
            
            <!-- Comparison Content -->
            <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 max-w-6xl mx-auto">
                <!-- Left Side - Title and Activelabo Column -->
                <div>
                    <!-- Activelabo Pricing Column -->
                     <?php if(!empty($price['price_active'])): 
                        $activelabo = $price['price_active'];
                      ?>
                    <div class="space-y-6">
                        <!-- Header -->
                        <div class="bg-purple-600 text-white p-4 rounded-lg text-center font-semibold">
                            <?php echo esc_html($activelabo['title']); ?>
                        </div>
                        <?php if(!empty($activelabo['items']) && is_array($activelabo['items'])): 
                          foreach ($activelabo['items'] as $item):  
                            $url = '/assets/svg/user.svg';
                            if ($item['slug'] == 'pm') {
                                $url = '/assets/svg/user2.svg';
                            }
                            if ($item['slug'] == 'enginer') {
                                $url = '/assets/svg/user3.svg';
                            }
                        ?>
                        <div class="bg-white text-center rounded-lg p-6 shadow-md">
                            <div class="flex justify-center items-center mb-3">
                                <div class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center mr-3">
                                  <img src="<?php echo get_template_directory_uri(); ?><?php echo $url; ?>" class="w-6 h-6 ?>" alt="tester" />
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900"><?php echo esc_html($item['role']); ?></h3>
                                    <p class="text-sm text-gray-600"><?php echo esc_html($item['description']); ?></p>
                                </div>
                            </div>
                            <p class="text-2xl font-bold text-gray-900"><?php echo esc_html($item['price']); ?></p>
                        </div>
                        <?php 
                          endforeach;
                        endif; ?>
                    </div>
                    <?php endif; ?>
                </div>
                
                <!-- Right Side - Comparison Columns -->
                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Other Company Offshore -->
                     <?php if(!empty($price['other_company'])): 
                        $other = $price['other_company'];
                      ?>
                    <div class="space-y-6">
                        <h3 class="text-lg rounded-lg p-4 bg-amber-100 font-semibold text-gray-900 text-center"><?php echo esc_html($other['title']); ?></h3>
                        
                        <?php 
                        if(!empty($other['items']) && is_array($other['items'])):
                          // Loop through each item and display it
                          foreach ($other['items'] as $item):
                            $url = '/assets/svg/user.svg';
                            if ($item['slug'] == 'pm') {
                                $url = '/assets/svg/user2.svg';
                            }
                            if ($item['slug'] == 'engineer') {
                                $url = '/assets/svg/user3.svg';
                            }
                        ?>
                        <div class="bg-white text-center rounded-lg p-6 shadow-md">
                            <div class="flex justify-center items-center mb-3">
                                <div class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center mr-3">
                                    <img src="<?php echo get_template_directory_uri(); ?><?php echo $url; ?>" class="w-6 h-6 ?>" alt="role" />
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900"><?php echo esc_html($item['role']); ?></h4>
                                    <p class="text-sm text-gray-600"><?php echo esc_html($item['description'] ? $item['description'] : ''); ?></p>
                                </div>
                            </div>
                            <p class="text-xl font-bold text-gray-900"><?php echo esc_html($item['price']); ?></p>
                        </div>
                        <?php 
                          endforeach;
                        endif; ?>
                    </div>
                    <?php endif; ?>
                    
                    <!-- Domestic Development -->
                     <?php if(!empty($price['domestic'])): 
                        $domestic = $price['domestic'];
                      ?>
                    <div class="space-y-6">
                        <h3 class="text-lg rounded-lg p-4 bg-amber-50 font-semibold text-gray-900 text-center"><?php echo esc_html($domestic['title']); ?></h3>
                        
                        <?php 
                        if(!empty($domestic['items']) && is_array($domestic['items'])):
                          // Loop through each item and display it
                          foreach ($domestic['items'] as $item):
                            $url = '/assets/svg/user.svg';
                            if ($item['slug'] == 'pm') {
                                $url = '/assets/svg/user2.svg';
                            }
                            if ($item['slug'] == 'engineer') {
                                $url = '/assets/svg/user3.svg';
                            }
                        ?>
                        <!-- Tester -->
                        <div class="bg-white text-center rounded-lg p-6 shadow-md">
                            <div class="flex items-center justify-center mb-3">
                                <div class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center mr-3">
                                    <img src="<?php echo get_template_directory_uri(); ?><?php echo $url; ?>" class="w-6 h-6 ?>" alt="tester" />
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900"><?php echo esc_html($item['role']); ?><h4>
                                    <p class="text-sm text-gray-600"><?php echo esc_html($item['description']); ?></p>
                                </div>
                            </div>
                            <p class="text-xl font-bold text-gray-900"><?php echo esc_html($item['price']); ?></p>
                        </div>
                        <?php 
                          endforeach;
                        endif; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-- End Main Comparison Section -->

    <!-- Scroll to Top Button -->
    <button id="scroll-top-btn" 
            class="fixed bottom-6 right-6 bg-blue-600 text-white rounded-full w-12 h-12 shadow-lg z-50 opacity-0 invisible transition-all duration-300 hover:bg-blue-700">
        <svg class="w-5 h-5 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
        </svg>
    </button>

<?php 
  get_footer();
?>