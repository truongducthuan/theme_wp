<style>
  .provided__background_1 {
    position: relative;
    background-image: url('<?php echo get_template_directory_uri() . '/assets/imgs/services/provided_1.jpg'; ?>');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }

  .provided__background_2 {
    position: relative;
    background-image: url('<?php echo get_template_directory_uri() . '/assets/imgs/services/provided_2.jpg'; ?>');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }

  .provided__background_center {
    position: relative;
    background-image: url('<?php echo get_template_directory_uri() . '/assets/imgs/services/provided_center.jpg'; ?>');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }

  .provided__background_3 {
    position: relative;
    background-image: url('<?php echo get_template_directory_uri() . '/assets/imgs/services/provided_3.jpg'; ?>');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }

  .provided__background_4 {
    position: relative;
    background-image: url('<?php echo get_template_directory_uri() . '/assets/imgs/services/provided_4.jpg'; ?>');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }

  .provided-card {
    opacity: 0;
    transition: all 0.3s ease;
  }

  .provided-card.visible {
    animation: fadeInUp 0.6s ease-out forwards;
  }
</style>

<section class="mt-5 px-5 py-2 lg:py-5 lg:mt-16 lg:px-20 bg-[#F5F4FF]">
  <?php get_template_part('template-parts/services/common/header-title', null, ['title' => '提供サービス', 'sub-title' => 'テクノロジーと人材の力で、観光DXを加速させるサービスをご提供します。']); ?>

  <div class="w-full grid grid-cols-1 gap-1 px-3 pt-6 pb-16 lg:grid-cols-3">
    <div class="provided-card min-h-36 flex flex-col gap-y-4 px-3 items-center pb-16 md:pb-0 lg:gap-y-10">
      <div class="w-80 h-80 rounded-[20px] relative provided__background_1 mb-16">
        <div class="h-16 w-3/5 p-5 bg-[#2BC8EB] absolute -bottom-10 left-1/2 -translate-x-1/2 rounded-[10px] text-[#222627] text-2xl font-bold">Alex Smith</div>
      </div>
      <div class="w-80 h-80 rounded-[20px] relative provided__background_2">
        <div class="h-16 w-3/5 p-5 bg-[#2BC8EB] absolute -bottom-10 left-1/2 -translate-x-1/2 rounded-[10px] text-[#222627] text-2xl font-bold">Alex Smith</div>
      </div>
    </div>
    <div class="provided-card min-h-36 h-full w-full flex items-center justify-center my-10 lg:my-0 ">
      <div class="w-80 h-80 lg:w-full lg:h-[400px] rounded-[20px] relative provided__background_center mb-16">
        <div class="h-16 w-3/5 p-5 bg-[#2BC8EB] absolute -bottom-10 left-1/2 -translate-x-1/2 rounded-[10px] text-[#222627] text-2xl font-bold">Alex Smith</div>
      </div>
    </div>
    <div class="provided-card min-h-36 flex flex-col gap-y-4 px-3 items-center lg:gap-y-10">
      <div class="w-80 h-80 rounded-[20px] relative provided__background_3 mb-16">
        <div class="h-16 w-3/5 p-5 bg-[#2BC8EB] absolute -bottom-10 left-1/2 -translate-x-1/2 rounded-[10px] text-[#222627] text-2xl font-bold">Alex Smith</div>
      </div>
      <div class="provided-card w-80 h-80 rounded-[20px] relative provided__background_4">
        <div class="h-16 w-3/5 p-5 bg-[#2BC8EB] absolute -bottom-10 left-1/2 -translate-x-1/2 rounded-[10px] text-[#222627] text-2xl font-bold">Alex Smith</div>
      </div>
    </div>
  </div>
</section>

<script>
  let observerOptionServices = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  };

  const observerServicesServices = new IntersectionObserver((entries) => {
    entries.forEach((entry, index) => {
      if (entry.isIntersecting) {
        setTimeout(() => {
          entry.target.classList.add('visible');
        }, index * 100);
      }
    });
  }, observerOptionServices);

  // Observe all service cards
  document.querySelectorAll('.provided-card').forEach(card => {
    observerServicesServices.observe(card);
  });
</script>