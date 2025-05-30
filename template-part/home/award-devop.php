<!-- Awards Section -->
  <?php 
  $awards = get_field('award_section'); // Assuming you have a custom field for awards
  if (!empty($awards)):
  ?>
  <style>
    .awards-bg {
      background-image: url('<?php echo esc_url($awards['image']); ?>');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
    }
  </style>
    <section class="awards-bg py-16 lg:py-24 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Title -->
            <div class="text-center mb-12 fade-in">
                <h1 class="text-4xl lg:text-5xl font-bold text-white mb-8">
                    <?php echo esc_html__('受賞歴'); ?>
                </h1>
            </div>
            
            <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                <!-- Awards List -->
                <div class="bg-white bg-opacity-90 backdrop-blur-sm rounded-3xl p-8 lg:p-10 slide-in">
                    <div class="space-y-8 pl-2">
                      <?php 
                      if (!empty($awards['awards']) && is_array($awards['awards'])):
                          foreach ($awards['awards'] as $award):
                      ?>
                        <div class="award-item">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h3 class="font-semibold text-gray-900"><?php echo esc_html($award['description']); ?></h3>
                                </div>
                                <div class="text-gray-500 font-medium"><?php echo esc_html($award['year']); ?></div>
                            </div>
                        </div>
                      <?php 
                          endforeach;
                      endif;
                      ?>
                    </div>
                </div>
                
                <!-- Trophy Image -->
                <div class="flex justify-center relative">
                    <div class="trophy-glow">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trophy Animation -->
    <?php endif; ?> 

    <!-- DevSecOps Section -->
    <?php 
    $devop = get_field('devsecop_section'); // Assuming you have a custom field for DevSecOps
    if (!empty($devop)):
    ?>
    <section class="py-16 lg:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Title -->
            <div class="text-center mb-16 fade-in">
                <h2 class="text-3xl lg:text-4xl font-bold text-blue-600 mb-8">
                    <?php echo esc_html__($devop['title']); ?>
                </h2>
            </div>
            
            <!-- Services Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-12">
              <?php 
              if (!empty($devop['items']) && is_array($devop['items'])):
                  foreach ($devop['items'] as $item):
              ?>
                <div class="service-card bg-gray-200 rounded-xl p-6 cursor-pointer" onclick="showServiceDetails('<?php echo esc_attr($item['slug']); ?>')">
                    <div class="flex items-start space-x-4">
                        <div class="bg-black rounded-lg p-3 flex-shrink-0">
                            <?php echo $item['icon']; ?>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2"><?php echo esc_html($item['role']); ?></h3>
                            <p class="text-gray-600 text-sm"><?php echo esc_html($item['description']); ?></p>
                        </div>
                    </div>
                </div>
              <?php 
                  endforeach;
              endif;
              ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    
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

    <script>
        // Service details data
        const serviceDetails = {
            cicd: {
                title: 'CI/CD・DEVOPS',
                content: `
                    <p class="mb-4">継続的インテグレーション・継続的デリバリー（CI/CD）とDevOpsの実践により、ソフトウェア開発プロセスを効率化します。</p>
                    <h4 class="font-semibold text-gray-800 mb-2">主な特徴:</h4>
                    <ul class="list-disc list-inside space-y-2 mb-4">
                        <li>自動化されたビルド・テスト・デプロイメントパイプライン</li>
                        <li>コード品質の継続的な監視と改善</li>
                        <li>インフラストラクチャのコード化（IaC）</li>
                        <li>マイクロサービスアーキテクチャのサポート</li>
                        <li>コンテナ化とオーケストレーション</li>
                    </ul>
                    <p>開発チームと運用チームの連携を強化し、より迅速で安定したリリースサイクルを実現します。</p>
                `
            },
            document: {
                title: 'ドキュメントとナレッジ管理',
                content: `
                    <p class="mb-4">効率的なドキュメント作成と知識共有システムを構築し、チーム全体の生産性を向上させます。</p>
                    <h4 class="font-semibold text-gray-800 mb-2">主な特徴:</h4>
                    <ul class="list-disc list-inside space-y-2 mb-4">
                        <li>一元化されたドキュメント管理システム</li>
                        <li>バージョン管理と変更履歴の追跡</li>
                        <li>検索可能なナレッジベース</li>
                        <li>コラボレーティブな編集環境</li>
                        <li>アクセス権限の細かい制御</li>
                    </ul>
                    <p>組織の知識を効果的に管理し、チームメンバー間での情報共有を促進します。</p>
                `
            },
            code: {
                title: 'コード管理',
                content: `
                    <p class="mb-4">効率的なバージョン管理とコードレビューのプロセスを確立し、高品質なコード開発を支援します。</p>
                    <h4 class="font-semibold text-gray-800 mb-2">主な特徴:</h4>
                    <ul class="list-disc list-inside space-y-2 mb-4">
                        <li>分散型バージョン管理システム</li>
                        <li>ブランチ戦略とマージプロセスの最適化</li>
                        <li>自動化されたコードレビュー</li>
                        <li>静的コード解析とセキュリティスキャン</li>
                        <li>コーディング規約の自動チェック</li>
                    </ul>
                    <p>コードの品質と一貫性を維持しながら、開発チームの協業を促進します。</p>
                `
            },
            project: {
                title: 'プロジェクト管理',
                content: `
                    <p class="mb-4">アジャイル手法を活用した効率的なプロジェクト運営により、柔軟性と透明性を確保します。</p>
                    <h4 class="font-semibold text-gray-800 mb-2">主な特徴:</h4>
                    <ul class="list-disc list-inside space-y-2 mb-4">
                        <li>スクラム/カンバンボードによるタスク管理</li>
                        <li>スプリント計画と振り返り</li>
                        <li>バックログ管理と優先順位付け</li>
                        <li>リアルタイムの進捗追跡</li>
                        <li>自動化されたレポートと分析</li>
                    </ul>
                    <p>プロジェクトの透明性を高め、チームの自己組織化を促進することで、より効果的な成果物の提供を実現します。</p>
                `
            },
            assistant: {
                title: 'デジタルアシスタント',
                content: `
                    <p class="mb-4">AIを活用した業務効率化と自動化ソリューションにより、チームの生産性を向上させます。</p>
                    <h4 class="font-semibold text-gray-800 mb-2">主な特徴:</h4>
                    <ul class="list-disc list-inside space-y-2 mb-4">
                        <li>チャットボットによる情報検索と問い合わせ対応</li>
                        <li>ルーティンタスクの自動化</li>
                        <li>データ分析と予測モデリング</li>
                        <li>自然言語処理によるドキュメント生成</li>
                        <li>パーソナライズされた業務サポート</li>
                    </ul>
                    <p>人間の創造性と判断力が必要な業務に集中できるよう、反復的なタスクを自動化します。</p>
                `
            },
            collaboration: {
                title: 'アプリケーションコラボレーション',
                content: `
                    <p class="mb-4">チーム間の効果的な連携とコミュニケーション基盤を構築し、組織全体の協業を促進します。</p>
                    <h4 class="font-semibold text-gray-800 mb-2">主な特徴:</h4>
                    <ul class="list-disc list-inside space-y-2 mb-4">
                        <li>統合されたコミュニケーションプラットフォーム</li>
                        <li>リアルタイムのファイル共有と編集</li>
                        <li>仮想ワークスペースとオンラインミーティング</li>
                        <li>タスク割り当てと進捗追跡</li>
                        <li>クロスチームのコラボレーションツール</li>
                    </ul>
                    <p>地理的に分散したチームでも効果的に協力し、プロジェクトを成功に導くための環境を提供します。</p>
                `
            }
        };

        function showServiceDetails(serviceType) {
            const modal = document.getElementById('serviceModal');
            const title = document.getElementById('modalTitle');
            const content = document.getElementById('modalContent');
            
            const service = serviceDetails[serviceType];
            title.textContent = service.title;
            content.innerHTML = service.content;
            
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            const modal = document.getElementById('serviceModal');
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside
        document.getElementById('serviceModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeModal();
            }
        });

        // Add click tracking for analytics
        document.querySelectorAll('.service-card').forEach(card => {
            card.addEventListener('click', function() {
                const service = this.querySelector('h3').textContent;
                console.log(`Service clicked: ${service}`);
                // Here you could send analytics data
            });
        });

        // Trophy animation
        const trophy = document.querySelector('.trophy-glow');
        setInterval(() => {
            trophy.style.filter = 'drop-shadow(0 0 20px rgba(255, 215, 0, 0.7))';
            setTimeout(() => {
                trophy.style.filter = 'drop-shadow(0 0 15px rgba(235, 208, 0, 0.5))';
            }, 1000);
        }, 2000);
    </script>