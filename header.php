<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo get_the_title(); ?></title>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
  />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/tailwindcss/output.css'; ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/style.css'; ?>">
  <?php // wp_head(); ?>

  <style>
    .hero-pattern {
      background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/bg.png');
    }
  </style>
</head>
<body>
  <main class="w-full h-full hero-pattern bg-[#222222]">
              <div class="w-full">
                <div class="flex justify-between items-center fixed top-10 left-0 right-0 z-20 max-w-[1200px] mx-auto flex-wrap bg-white min-h-[80px] rounded-[100px] max-md:max-w-full">
                  <a
                    href="/"
                    class="flex overflow-hidden gap-2 items-start pl-12 my-auto"
                  >
                    <img
                      loading="lazy"
                      src="https://cdn.builder.io/api/v1/image/assets/TEMP/010a4f8dceb2996979b22af2d117ef118321a7508a08b3912c7a86709f51f280?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5"
                      class="object-contain shrink-0 aspect-[1.19] w-[37px]"
                    />
                    <!-- Left -->
                    <div class="flex gap-1 items-center py-2">
                      <img
                        loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/3668739dbab36a10e93e1788a0b3eaf6457add280f4fc2efb57f2922ceb43234?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5"
                        class="object-contain shrink-0 self-stretch my-auto w-5 aspect-[1.11]"
                      />
                      <img
                        loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/cb78865e90c64651c783b3c4c149fe259308e9548212f76bb15c436111cbed26?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5"
                        class="object-contain shrink-0 self-stretch my-auto aspect-[0.94] w-[17px]"
                      />
                      <img
                        loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/d97b4b8d2669f6948f1711c8858e034f127b354f8db80c3ed63ffb19c85ce794?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5"
                        class="object-contain shrink-0 self-stretch my-auto w-4 aspect-[0.89]"
                      />
                      <img
                        loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/0975698bcf4575b68fc08a115bbbb92f3410fc7bd2be618daa71a31847b02d28?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5"
                        class="object-contain shrink-0 self-stretch my-auto w-3.5 aspect-[0.78]"
                      />
                      <img
                        loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/8b2c809d2db80741b432eb9a89ffaa574eb03c516bfc4334411e06e20cac7959?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5"
                        class="object-contain shrink-0 self-stretch my-auto w-5 aspect-[1.11]"
                      />
                      <img
                        loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/983a3e83cfa314d60cee67434a46b674ff51b25a64e7b449ae225b104d8627cc?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5"
                        class="object-contain shrink-0 self-stretch my-auto w-4 aspect-[0.89]"
                      />
                    </div>
                  </a>

                  <!-- Right -->
                  <div class="flex gap-10 items-center">
                    <div class="flex justify-between items-center gap-10" id="menus-top">
                      <a
                        href="#"
                        class="self-stretch hover:text-[#1e3a8a] h-full text-base font-bold tracking-wider relative menu-top transition duration-300 overflow-hidden text-black whitespace-nowrap"
                      >
                        事業内容
                      </a>
                      <a
                        href="#"
                        class="self-stretch hover:text-[#1e3a8a] h-full text-base font-bold tracking-wider relative menu-top transition duration-300 overflow-hidden text-black whitespace-nowrap"
                      >
                        実績
                      </a>
                      <a
                        href="#"
                        class="self-stretch hover:text-[#1e3a8a] h-full text-base font-bold tracking-wider relative menu-top transition duration-300 overflow-hidden text-black whitespace-nowrap"
                      >
                        企業案内
                      </a>
                      <a
                        href="#"
                        class="self-stretch hover:text-[#1e3a8a] h-full text-base font-bold tracking-wider relative menu-top transition duration-300 overflow-hidden text-black whitespace-nowrap"
                      >
                        採用情報
                      </a>
                      <a
                        href="#"
                        class="self-stretch hover:text-[#1e3a8a] h-full text-base font-bold tracking-wider relative menu-top transition duration-300 overflow-hidden text-black whitespace-nowrap"
                      >
                        お知らせ
                      </a>
                    </div>
                    <div class="flex gap-3 items-center">
                      <div
                        class="flex gap-2 items-center text-center py-3 my-auto text-sm text-white whitespace-nowrap w-[126px]"
                      >
                        <a
                          href="#"
                          class="gap-2.5 self-stretch px-5 py-3.5 my-auto hover:border-[1px] hover:border-solid hover:border-neutral-900 hover:bg-neutral-300 hover:text-neutral-900 bg-neutral-900 min-h-[45px] rounded-[100px] w-full max-md:px-5 transition-all"
                        >
                          お問い合わせ
                        </a>
                      </div>
                      <div
                        class="flex gap-2 items-center text-center pr-4 py-3 my-auto text-sm text-white whitespace-nowrap w-[140px]"
                      >
                        <a
                          href="#"
                          class="gap-2.5 self-stretch px-5 py-3.5 my-auto hover:border-[1px] hover:border-solid hover:border-blue-900 hover:bg-blue-300 hover:text-blue-900 bg-blue-900 min-h-[45px] rounded-[100px] w-full max-md:px-5 transition-all"
                        >
                          資料請求
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  