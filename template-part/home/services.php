   <!-- Services Section -->
    <?php 
    $services = get_field('services_section'); // Fetch services from ACF
    if (!empty($services)) :
    ?>
    <section class="py-16 lg:py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-8 lg:gap-12">
                <!-- Left Column - Service Image -->
                <div class="slide-in">
                    <div class="relative bg-gradient-to-br from-blue-900 to-indigo-900 rounded-2xl overflow-hidden shadow-2xl">
                      <img src="<?php echo esc_html($services['image']); ?>" alt="Service Image" class="w-full h-full object-cover" />
                    </div>
                </div>
                
                <!-- Right Column - Service Cards -->
                <div class="space-y-6">
                  <?php 
                  if (!empty($services['items'])) :
                      foreach ($services['items'] as $item) :
                  ?>
                    <div class="service-card bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                        <div class="flex items-start space-x-4">
                            <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <?php echo ($item['icon']); ?>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-blue-600 mb-2"><?php echo esc_html($item['title']); ?></h3>
                                <p class="text-gray-600 leading-relaxed">
                                    <?php echo esc_html($item['description']); ?>
                                </p>
                                <a href="#" class="mt-4 text-blue-600 font-semibold hover:text-blue-700 transition-colors">
                                    詳細を見る →
                                </a>
                            </div>
                        </div>
                    </div>
                  <?php 
                      endforeach;
                    endif;
                  ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Service Areas Section -->
     <?php 
     $areas = get_field('service_area'); // Fetch service areas from ACF
     if(!empty($areas)) :
     ?>
    <section class="py-16 lg:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Title -->
            <div class="text-center mb-16 fade-in">
                <h1 class="text-3xl lg:text-4xl font-bold text-blue-600 mb-4">
                    <?php echo esc_html($areas['title']); ?>
                </h1>
            </div>
            
            <!-- Service Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 mb-16">
                <?php 
                if (!empty($areas['cards'])) :
                  $index = 0; // Initialize index for delay
                    foreach ($areas['cards'] as $card) :
                      $index++;
                ?>
                <div>
                  <div class="service-card bg-white mx-3 rounded-2xl p-6 text-center shadow-md hover:shadow-xl cursor-pointer" 
                      style="--delay: 0.1s" 
                      onclick="showServiceDetails('web')"
                      data-service="web">
                      <div class="w-16 h-16 mx-auto mb-4 bg-blue-50 rounded-full flex items-center justify-center">
                          <?php echo ($card['icon']); ?>
                      </div>
                      
                  </div>
                  <div class="relative border-b border-gray-200 pt-4 mb-5 pb-2 text-center text-gray-200 text-start">
                    <span class="absolute -bottom-[15%] h-3 w-3 bg-gray-200 origin-center rotate-45"></span>
                    <span class="pb-2">0<?php echo $index; ?></span>
                  </div>
                  <h3 class="text-sm font-semibold text-gray-900 leading-tight">
                      <?php echo esc_html($card['title']); ?>
                  </h3>
                  
                </div>
                <?php 
                    endforeach;
                endif;
                ?>
            </div>
        </div>
    </section>
      <?php endif; ?>
    
    <!-- Description Section -->
    <section class="py-8 lg:py-12">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center slide-up">
            <p class="text-lg lg:text-xl text-blue-600 leading-relaxed mb-4">
                デジタル人材育成エコシステムを通じて、
            </p>
            <p class="text-lg lg:text-xl text-blue-600 leading-relaxed">
                中長期的に開発リソースを確保する仕組みを構築します。
            </p>
        </div>
    </section>