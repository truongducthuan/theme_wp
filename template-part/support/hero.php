<?php 
$hero = get_field('hero_section');
if (!empty($hero)) : 
?>
<style>
  .hero-bg {
    /* background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 50%, #06b6d4 100%); */
    background: url('<?php echo $hero['image']; ?>') no-repeat center center;
    position: relative;
    overflow: hidden;
  }
</style>
   <section class="hero-bg min-h-[500px] lg:min-h-[600px] flex items-center relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full relative z-10">
            <div class="max-w-3xl fade-in">
                <h1 class="backdrop-contrast-125 leading-5 p-4 text-4xl sm:text-5xl lg:text-6xl font-bold text-zinc-400 mb-6">
                    <?php echo ($hero['title']); ?>
                </h1>
                <div class="mt-8">
                    <button class="bg-white text-blue-900 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition-colors shadow-lg">
                        詳細を見る
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Animated Background Elements -->
        <div class="absolute top-1/4 right-1/4 w-32 h-32 border border-white/20 rounded-full animate-pulse"></div>
        <div class="absolute bottom-1/3 right-1/3 w-24 h-24 border border-white/30 rounded-full animate-ping"></div>
        <div class="absolute top-1/2 right-1/6 w-16 h-16 border border-white/25 rounded-full animate-bounce"></div>
    </section>
<?php endif; ?>