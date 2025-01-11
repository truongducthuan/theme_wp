<?php 
/**
 * Template Name: Contact Form
 */
get_header();
?>
<head>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/contact.css'; ?>" />

  <style>
    #contact_form .form_arrow {
      position: absolute;
      right: 20px;
      top: 50%;
      transform: translateY(-50%);
    }
    #contact_form .form_arrow::after {
      content: url("<?php echo get_template_directory_uri() . '/assets/svg/arrow-white.svg'; ?>");
      position: absolute;
      right: 50%;
    top: 50%;
    transform: translate(50%, -60%);

    }
  </style>
</head>

<section>
  <div class="relative">
    <div class="flex absolute -left-1 top-0 flex-col mt-[80px] mb-[80px] w-[46%] max-md:ml-0 max-md:w-full">
    <img
      loading="lazy"
      src="<?php echo get_template_directory_uri() ?>/assets/svg/banner-left.svg"
      class="object-contain self-stretch my-auto mr-0 w-full aspect-[1.03] max-md:mt-10 max-md:max-w-full"
    />
  </div>

  <div class="max-w-[1200px] mx-auto px-5 md:px-0 pt-32 md:pt-60 z-10 relative text-[#B2B2B2]">
    <div
      class="flex gap-3 items-center self-start text-base text-white mb-5 md:mb-10"
    >
      <div
        class="flex shrink-0 self-stretch my-auto w-2.5 h-2.5 bg-red-600 rounded-full" 
      ></div>
      <div class="self-stretch my-auto text-sm md:text-base">お問い合わせ</div>
    </div>
    <div class="flex justify-between gap-4">
      <div class="flex flex-col items-start justify-start self-start gap-8 text-white py-1 rounded-xl">
        <div class="font-bold text-4xl md:text-8xl text-white uppercase">contact</div>
      </div>
    </div>
  
    <div class="flex justify-end items-end gap-4 mt-5 md:mt-20 mb-10 w-full text-white"><span>Top -</span><p>事業内容</p></div>

    <div class="max-w-[1200px] mx-auto">
      <div class="w-full md:w-4/6 mx-auto mb-28" id="contact_form">
        <?php echo do_shortcode('[contact-form-7 id="d488858" title="Contact main form"]'); ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>