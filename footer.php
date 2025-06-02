<!-- Call to Action Section -->
    <section class="bg-gradient-to-br from-slate-700 via-slate-800 to-slate-900 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-2xl lg:text-3xl font-bold text-white mb-4">
                導入を検討中の企業様へ
            </h2>
            <p class="text-lg text-gray-300 mb-8 max-w-3xl mx-auto leading-relaxed">
                当社のサービスに関して、ご質問や詳細な情報をお求めの場合は、お気軽にお問い合わせください。専門スタッフが丁寧にご対応いたします。
            </p>
            
            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="bg-white text-slate-800 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                    今すぐ相談する
                </button>
                <button class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-slate-800 transition-colors">
                    資料をダウンロードする
                </button>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="bg-slate-900 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-8 text-center md:text-left">
                <!-- Company Info -->
                <div>
                    <h3 class="text-white font-semibold mb-4">ActiveLabo</h3>
                    <p class="text-gray-400 text-sm">
                        革新的な開発ソリューションを提供
                    </p>
                </div>
                
                <!-- Links -->
                <div>
                    <h4 class="text-white font-semibold mb-4">サービス</h4>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="#" class="hover:text-white transition-colors">開発支援</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">コンサルティング</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">技術サポート</a></li>
                    </ul>
                </div>
                
                <!-- Contact -->
                <div>
                    <h4 class="text-white font-semibold mb-4">お問い合わせ</h4>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="#" class="hover:text-white transition-colors">プライバシーポリシー</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">利用規約</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">会社概要</a></li>
                    </ul>
                </div>
            </div>
            
            <!-- Copyright -->
            <div class="border-t border-gray-800 mt-8 pt-8 text-center">
                <p class="text-gray-400 text-sm">
                    © 2024 ActiveLabo. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>

    <script>
        // DOM elements
        const elements = {
            readingProgress: document.getElementById('reading-progress'),
            scrollTopBtn: document.getElementById('scroll-top-btn'),
        };

        // Reading progress tracking
        function updateReadingProgress() {
            const totalHeight = document.documentElement.scrollHeight - window.innerHeight;
            const progress = (window.scrollY / totalHeight) * 100;
            elements.readingProgress.style.width = `${Math.min(progress, 100)}%`;
            
            // Show/hide scroll to top button
            if (window.scrollY > 300) {
                elements.scrollTopBtn.classList.remove('opacity-0', 'invisible');
                elements.scrollTopBtn.classList.add('opacity-100', 'visible');
            } else {
                elements.scrollTopBtn.classList.add('opacity-0', 'invisible');
                elements.scrollTopBtn.classList.remove('opacity-100', 'visible');
            }
        }

        // Scroll to top
        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        // Event listeners
        elements.scrollTopBtn.addEventListener('click', scrollToTop);
        window.addEventListener('scroll', updateReadingProgress);

        // Initialize
        updateReadingProgress();
    </script>
</body>
</html> 