<!-- Customer Testimonials Section -->
<?php 
$testimonials = get_field('customer_section');
if (!empty($testimonials)):
?>
    <section class="py-16 lg:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Title -->
            <div class="text-center mb-16 fade-in">
                <h1 class="text-3xl lg:text-4xl font-bold text-blue-600 mb-8">
                    <?php echo esc_html($testimonials['title']); ?>
                </h1>
            </div>
            
            <!-- Testimonials Carousel -->
            <div class="relative">
                <!-- Navigation Arrows -->
                <button 
                    class="nav-arrow absolute left-0 top-1/2 transform -translate-y-1/2 -translate-x-4 z-10 bg-white rounded-full p-3 shadow-lg"
                    id="prevBtnTestimonial"
                >
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                
                <button 
                    class="nav-arrow absolute right-0 top-1/2 transform -translate-y-1/2 translate-x-4 z-10 bg-white rounded-full p-3 shadow-lg"
                    id="nextBtnTestimonial"
                >
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
                
                <!-- Testimonials Container -->
                <div class="overflow-hidden">
                    <div class="carousel-container flex" id="testimonialContainer">
                        <?php 
                        if(!empty($testimonials['items']) && is_array($testimonials['items'])):
                            $index = 0;
                            $result = [];
                                $copy = $testimonials['items'];
                                $length = count($copy);
                                $dots = ceil($length / 3); // Calculate number of dots based on items
                                $chunkSize = 3;
                                if ($length > $chunkSize) {
                                    $result = array_chunk($copy, $chunkSize);
                                } else {
                                    $result[] = $copy;
                                }
                            foreach ($result as $testimonial):
                        ?>
                        <div class="w-full flex-shrink-0">
                            <div class="grid md:grid-cols-3 gap-8">
                            <?php foreach ($testimonial as $item): ?>
                                <div class="testimonial-card bg-blue-100 rounded-2xl pb-8 cursor-pointer" onclick="showTestimonialDetails(<?php echo esc_attr($item['id']); ?>)">
                                    <div class="text-center">
                                        <div class="h-[300px] overflow-hidden w-full mx-auto mb-4 flex items-center justify-center">
                                            <image src="<?php echo esc_html($item['image']); ?>" alt="<?php echo esc_html($item['name']); ?>" class="w-full h-full object-cover testimonial-image" />
                                        </div>
                                        <h3 class="text-lg font-semibold text-gray-800 mb-2"><?php echo esc_html($item['name']); ?></h3>
                                        <p class="text-sm text-gray-600 mb-4"><?php echo esc_html($item['role']); ?></p>
                                        <p class="text-gray-700 text-sm leading-relaxed">
                                            <?php echo esc_html($item['testimonial']); ?>
                                        </p>
                                        <div class="flex justify-center mt-4">
                                            <div class="flex text-yellow-400">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                    $index++;
                                    endforeach; // End of testimonial items
                                ?>
                            </div>
                        </div>
                        <?php 
                            endforeach; // End of testimonial sets
                        endif;
                        ?>
                    </div>
                </div>
                
                <!-- Carousel Dots -->
                <div class="flex justify-center mt-8 space-x-2">
                    <?php for ($i = 0; $i < $dots; $i++) { 
                        echo '<button class="carousel-dot carousel-dot-testimonial w-3 h-3 rounded-full bg-gray-300" data-index="' . $i . '"></button>'; 
                    } ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
    
    <!-- Contact Section -->
    <?php 
    $contact = get_field('contact_section');
    if (!empty($contact)):
    ?>
    <section class="contact-bg py-16 lg:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Company Information -->
                <div class="text-white slide-in">
                    <div class="space-y-8">
                        <!-- Logo -->
                        <div>
                            <div class="w-24 h-24 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                                <img src="<?php echo esc_html($contact['logo']); ?>" alt="Logo" class="w-full h-full object-cover" />
                            </div>
                            <p class="text-blue-100 text-lg">
                                <?php echo esc_html($contact['slogan']); ?>
                            </p>
                        </div>
                        
                        <!-- Address -->
                        <?php if (!empty($contact['location'])): ?>
                        <div class="flex items-start space-x-4">
                            <div class="bg-white bg-opacity-20 rounded-lg p-3">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Add</h3>
                                <p class="text-blue-100">
                                    <?php echo esc_html($contact['location']['address']); ?><br>
                                    <?php echo esc_html($contact['location']['description']); ?>
                                </p>
                            </div>
                        </div>
                        <?php endif; ?>
                        
                        <!-- Hotline -->
                        <?php if (!empty($contact['hotline'])): ?>
                        <div class="flex items-start space-x-4">
                            <div class="bg-white bg-opacity-20 rounded-lg p-3">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Hotline</h3>
                                <p class="text-blue-100 text-lg font-medium">
                                   <?php echo esc_html($contact['hotline']['phone']); ?>
                                </p>
                                <p class="text-blue-200 text-sm">
                                    <?php echo esc_html($contact['hotline']['description']); ?>
                                </p>
                            </div>
                        </div>
                        <?php endif; ?>
                        
                        <!-- Email -->
                        <?php if (!empty($contact['email'])): ?>
                        <div class="flex items-start space-x-4">
                            <div class="bg-white bg-opacity-20 rounded-lg p-3">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Email</h3>
                                <p class="text-blue-100 text-lg">
                                    <?php echo esc_html($contact['email']['email']); ?>
                                </p>
                                <p class="text-blue-200 text-sm">
                                    <?php echo esc_html($contact['email']['description']); ?>
                                </p>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                
                <!-- Contact Form -->
                <div class="bg-black bg-opacity-80 backdrop-blur-sm rounded-2xl p-8 fade-in">
                    <h3 class="text-2xl font-bold text-white mb-6">お問い合わせフォーム</h3>
                    <p class="text-gray-300 mb-8">
                        ご質問やご相談がございましたら、お気軽にお問い合わせください。担当者より迅速にご連絡いたします。
                    </p>
                    <?php echo do_shortcode('[contact-form-7 id="ffc535a" title="Contact form"]'); ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    
    <!-- Testimonial Details Modal -->
    <div id="testimonialModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl max-w-2xl w-full max-h-[80vh] overflow-y-auto">
            <div class="p-6 lg:p-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 id="testimonialModalTitle" class="text-2xl font-bold text-gray-900"></h2>
                    <button onclick="closeTestimonialModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div id="testimonialModalContent" class="text-gray-600 leading-relaxed">
                    <!-- Content will be dynamically inserted -->
                </div>
                <div class="mt-8 flex justify-end space-x-4">
                    <button onclick="closeTestimonialModal()" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors">
                        閉じる
                    </button>
                    <button class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                        詳細を問い合わせる
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const testimonials = <?php echo json_encode($testimonials['items']); ?>;

        function showTestimonialDetails(id) {
            const modal = document.getElementById('testimonialModal');
            const title = document.getElementById('testimonialModalTitle');
            const content = document.getElementById('testimonialModalContent');
            
            const testimonial = testimonials.find(t => t.id == id);
            title.textContent = `${testimonial.name} - ${testimonial.role}`;
            
            content.innerHTML = `
                <div class="mb-6">
                    <div class="flex items-center mb-4">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-800">${testimonial.name}</h3>
                            <p class="text-gray-600">${testimonial.role}</p>
                            <p class="text-blue-600 font-medium">${testimonial.testimonial}</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400 mr-3">
                            ${Array.from({ length: 5 }).map((_, i) => 
                                '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>'
                            ).join('')}
                        </div>
                        <span class="text-gray-600">5/5</span>
                    </div>
                </div>
                
                <div class="mb-6">
                    <h4 class="font-semibold text-gray-800 mb-2">プロジェクト詳細</h4>
                    <div class="bg-gray-50 rounded-lg p-4">
                        <p class="mb-2"><span class="font-medium">期間:</span> ${testimonial.duration}</p>
                    </div>
                </div>
                
                <div class="mb-6">
                    <h4 class="font-semibold text-gray-800 mb-2">お客様の声</h4>
                    <p class="text-gray-700 leading-relaxed">${testimonial.description}</p>
                </div>
                
                <div class="mb-6">
                    <h4 class="font-semibold text-gray-800 mb-2">主な成果</h4>
                    <ul class="list-disc list-inside space-y-1">
                        ${testimonial.results.split(',').map(result => `<li class="text-gray-700">${result}</li>`).join('')}
                    </ul>
                </div>
            `;
            
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeTestimonialModal() {
            const modal = document.getElementById('testimonialModal');
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Contact form functionality
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const data = {
                name: formData.get('name'),
                email: formData.get('email'),
                phone: formData.get('phone'),
                message: formData.get('message')
            };
            
            // Simulate form submission
            const submitButton = this.querySelector('button[type="submit"]');
            const originalText = submitButton.textContent;
            
            submitButton.textContent = '送信中...';
            submitButton.disabled = true;
            
            setTimeout(() => {
                alert('お問い合わせありがとうございます。担当者より3営業日以内にご連絡いたします。');
                this.reset();
                submitButton.textContent = originalText;
                submitButton.disabled = false;
                
                // Log form data for analytics
                console.log('Contact form submitted:', data);
            }, 2000);
        });

        // Form validation
        const formInputs = document.querySelectorAll('#contactForm input, #contactForm textarea');
        formInputs.forEach(input => {
            input.addEventListener('blur', function() {
                if (this.hasAttribute('required') && !this.value.trim()) {
                    this.classList.add('border-red-500');
                    this.classList.remove('border-gray-300');
                } else {
                    this.classList.remove('border-red-500');
                    this.classList.add('border-gray-300');
                }
            });
            
            input.addEventListener('input', function() {
                if (this.classList.contains('border-red-500') && this.value.trim()) {
                    this.classList.remove('border-red-500');
                    this.classList.add('border-gray-300');
                }
            });
        });

        // Close modal when clicking outside
        document.getElementById('testimonialModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeTestimonialModal();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeTestimonialModal();
            }
        });

    </script>