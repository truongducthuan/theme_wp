<?php 
$partner = get_field('partner_section');
if (!empty($partner)):
?>
 <section class="py-16 lg:py-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-8 lg:gap-12">
              <?php 
              if(is_array($partner)):
                foreach ($partner as $item):
              ?>
                <div class="partner-logo bg-blue-100 text-center cursor-pointer rounded-3xl">
                  <img src="<?php echo esc_html($item['image']); ?>" alt="Partner Logo" class="h-full w-full object-cover rounded-3xl" />
                </div>
              <?php endforeach; endif; ?>
            </div>
        </div>
    </section>
<?php
endif;
?>

        <!-- Service Details Modal -->
    <div id="serviceModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl max-w-2xl w-full max-h-[80vh] overflow-y-auto">
            <div class="p-6 lg:p-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 id="modalTitle" class="text-2xl font-bold text-gray-900"></h2>
                    <button onclick="closeModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div id="modalContent" class="text-gray-600 leading-relaxed">
                    <!-- Content will be dynamically inserted -->
                </div>
                <div class="mt-8 flex justify-end space-x-4">
                    <button onclick="closeModal()" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors">
                        閉じる
                    </button>
                    <button class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                        詳細を問い合わせる
                    </button>
                </div>
            </div>
        </div>
    </div>