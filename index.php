<?php 
get_header();

$args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'posts_per_page' => -1, // retrieve all posts
);
$newsList = array();
$posts = new WP_Query( $args );

?>


<div class="flex flex-col">
  <div
    class="flex overflow-hidden flex-col w-full max-md:max-w-full"
  >
    <div class="flex relative flex-col w-full max-md:max-w-full">
      <div class="flex relative z-10 flex-col w-full max-md:max-w-full">
        <!-- Start Banner -->
        <div class="w-full max-md:max-w-full">
          <div class="flex gap-5 max-md:flex-col relative">
            <!-- Text & -->
            <?php include(locate_template('template-parts/banner-left.php')); ?>

            <div class="flex flex-col w-3/5 max-md:ml-0 max-md:w-full">
              <div
                class="flex relative overflow-hidden flex-col items-start w-full h-full"
              >
              <?php 
                $banner_slides = get_field('banner_background');
                if(!empty($banner_slides)){
                  for ($i = 0; $i < count($banner_slides); $i++) {
                    $slide = $banner_slides[$i];
                    ?>
                    <div class="absolute -right-0 top-0 left-0 -bottom-0 w-full flex flex-col banner-slide__el">
                  <img
                    loading="lazy"
                    srcset="
                    <?php echo $slide['background'];?>"
                    class="object-cover size-full"
                  />
                  </div>
                  <?php
                  }
                }
                ?>
                <script> 
                  var slideIndex = 0;
                  showSlides();

                  var isActive = false;
                  function showSlides() {
                    var i;
                    var slides = document.getElementsByClassName("banner-slide__el");
                    for (i = 0; i < slides.length; i++) {
                      slides[i].style.zIndex = -2;
                      slides[i].classList.remove('banner-slide');
                    }
                    console.log('run  ', i, slideIndex)
        
                    slides[slideIndex].style.zIndex = -1;
                    slides[slideIndex].classList.add('banner-slide');

                    slideIndex++
                    if (slideIndex >= slides.length) {
                      slideIndex = 0;
                    }
                    setTimeout(showSlides, 10000); // Change image every 5 seconds
                  }
    
                </script>
                   
              </div>
            </div>

            <div class="absolute inset-0 max-w-[1200px] mx-auto w-full">
              <div class="absolute flex flex-col justify-center items-center left-0 top-[30%]">
                <div class="text-center text-white rotate-90">Join Us</div>
                <div class="shrink-0 mt-16 w-px border border-white border-solid h-[75px]"></div>
              </div>
                  <div class="relative mt-60 ml-[200px] max-md:mt-10 max-md:max-w-full">
                    <div class="flex gap-5 max-md:flex-col">
                      <div
                        class="flex flex-col w-[83%] max-md:ml-0 max-md:w-full"
                      >
                        <div
                          class="relative text-8xl font-black text-white uppercase max-md:mt-10 max-md:max-w-full max-md:text-4xl"
                        >
                          Driving Age
                        </div>
                      </div>
                      <div
                        class="flex flex-col ml-5 w-[17%] max-md:ml-0 max-md:w-full"
                      >
                        <div
                          class="relative self-stretch my-auto text-xs text-white max-md:mt-10"
                        >
                          Bringing Happiness
                          <br />
                          Enterprises by
                          <br />
                          Harnessing the Potential
                          <br />
                          of Technology
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                  class="relative text-right text-8xl font-black text-white uppercase max-md:max-w-full max-md:text-4xl"
                  >
                    with Technology
                  </div>
                </div>  
          </div>
        </div>
        <!-- End Banner -->

      <!-- Start slice -->
      <?php 
      $get_slices = get_field('slider');
      // echo '<pre>';
      // print_r($get_slices);
      // echo '</pre>';
      ?>
      <div class="flex flex-col mt-36 w-full lg:h-[450px] 2xl:h-[550px]">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <?php 
            if(is_array($get_slices)): 
              $counter = 0; // Initialize a counter
              foreach($get_slices as $slice):
                $counter++; // Increment the counter
                $img = $slice['photo'];
                $bg = $slice['background'];

                $parts = explode('/n', $slice['description']);
                $desc1 = $parts[0];
                $desc2 = $parts[1];
                ?>
                <div class="swiper-slide">
                  <div class="w-full h-full flex flex-col bg-transparent relative">
                    <div class="relative w-full h-full flex items-center justify-center">
                      <div class="w-2/3"><img src="<?php echo $img; ?>" class="rounded-tl-[50px]"></div>
                      <div class="absolute top-0 right-0 left-0 bottom-0  z-index-negative">
                        <img src="<?php echo $bg; ?>" class="" >
                        <div class="absolute right-0 bottom-[20px] bg-[#D70C18] py-0.5 px-4 text-white"><?php echo $slice['tag'];?></div>
                      </div>
                    </div>
                    <div class="text-white mt-4 leading-9"><?php echo '<span class="font-bold">'. $desc1 .'</span>' . '<br>' . '<span class="font-light">'. $desc2 .'</span>'; ?></div>
                    <div class="absolute top-[-60px] left-[20px] text-8xl font-bold text-white">0<?php echo $counter; ?></div>
                  </div>
                </div>
                <?php 
              endforeach;
            endif; 
            ?>
          </div>
        </div>
      </div>
      <!-- End Slice -->

      <!-- Start our work-->
      <div class="flex justify-between pt-36">
        <div class="mt-[100px] w-1/2">
          <img
          loading="lazy"
          srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/a46b0129ed07032c4537637ff30a47049b6736da5b8b44b7fc60d684daa6fbed?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/a46b0129ed07032c4537637ff30a47049b6736da5b8b44b7fc60d684daa6fbed?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/a46b0129ed07032c4537637ff30a47049b6736da5b8b44b7fc60d684daa6fbed?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/a46b0129ed07032c4537637ff30a47049b6736da5b8b44b7fc60d684daa6fbed?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/a46b0129ed07032c4537637ff30a47049b6736da5b8b44b7fc60d684daa6fbed?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/a46b0129ed07032c4537637ff30a47049b6736da5b8b44b7fc60d684daa6fbed?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/a46b0129ed07032c4537637ff30a47049b6736da5b8b44b7fc60d684daa6fbed?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/a46b0129ed07032c4537637ff30a47049b6736da5b8b44b7fc60d684daa6fbed?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5"
          class="object-contain mt-0 max-w-full aspect-[1.09] w-[639px] max-md:mt-0"
          />
        </div>
        <div class="relative w-1/2">
          <div class="absolute z-10 top-0 right-0 left-0 bottom-0">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/WHAT-WE-DO.png" alt="our work" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/WHAT-WE-DO.png" class="opacity-[0.1] w-full">
          </div>

          <div class="flex flex-col justify-start gap-9 mt-[70px]">
            <div
              class="flex relative z-10 flex-col self-start mr-36 max-w-full text-white whitespace-nowrap w-[615px] max-md:mr-2.5"
            >
              <div
                class="flex gap-3 justify-between items-center self-start text-base"
              >
                <div
                  class="flex shrink-0 self-stretch my-auto w-2.5 h-2.5 bg-red-600 rounded-full"
                ></div>
                <div class="self-stretch my-auto">私たちについて</div>
              </div>
              <div class="mt-9 text-5xl max-md:max-w-full max-md:text-4xl leading-[4.5rem]">
                圧倒的な技術力で
                <br />
                日本のDX化推進の一翼を担う
                <br />
                エンジニア集団
              </div>
            </div>

            <div
              class="flex relative z-10 flex-col self-start max-w-[570px] max-md:max-w-full"
            >
              <div class="self-start text-lg text-zinc-400 max-md:max-w-full">
                私たちは、金融と技術のプロフェッショナルが共に創業したITスタートアップです。
                <br />
                私たちAgeLabは、テクノロジーで新しい時代を切り開き、新たな価値の創出を追求します。
              </div>
              <div
                class="flex gap-5 btn-arrow hover:cursor-pointer justify-between self-end py-3.5 pr-3.5 pl-10 mt-20 max-w-full text-base text-black bg-white border border-black border-solid rounded-[100px] w-[295px] max-md:pl-5 max-md:mt-10"
              >
                <div class="my-auto">ABOUT US</div>
                <div
                  class="flex shrink-0 bg-blue-900 rounded-full h-[35px] w-[35px] p-2"
                >
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/arrow-white.svg" alt="arrow" srcset="">
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- End our work -->
  
      <div
        class="flex relative flex-col mt-52 w-full"
      >
        <!-- Start introduction -->
        <div class="self-end w-full relative">
          <div class="absolute top-0 right-0 left-0 z-index-negative w-full">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/INTRODUCTION.svg" alt="instruction" srcset="<?php echo get_template_directory_uri(); ?>/assets/svg/INTRODUCTION.svg" class="w-full opacity-[0.1]">
          </div>
          <div class="flex gap-5 max-md:flex-col max-w-[1200px] mx-auto">

            <div class="flex flex-col w-1/2 max-md:w-full">
              <div class="flex flex-col max-md:w-full">
                <div class="flex flex-col mt-11 max-md:mt-10 max-md:max-w-full">
                  <div class="flex gap-3 justify-between items-center self-start text-base">
                  <div
                    class="flex shrink-0 self-stretch my-auto w-2.5 h-2.5 bg-red-600 rounded-full"
                  ></div>
                  <div class="self-stretch my-auto text-white">事業内容</div>
                  </div>
                  <div
                    class="self-start mt-9 text-9xl font-black text-white uppercase leading-[110px] max-md:max-w-full max-md:text-4xl max-md:leading-10"
                  >
                    OUR
                    <br />
                    BUSINESS
                  </div>
                </div>
              </div>
              <div
                class="flex flex-col items-start w-full text-4xl text-white whitespace-nowrap mt-28 max-md:max-w-full"
              >
                <div
                  class="flex justify-between w-full"
                >
                  <div class="">アプリ/システム開発</div>
                  <img
                    loading="lazy"
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/d0e421bc33d72b78adcd217089f59719b7fb7edd857f166f7983fae18639ba1d?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5"
                    class="object-contain shrink-0 w-10 aspect-square"
                  />
             
                </div>
                <div
                  class="shrink-0 mt-4 h-px border border-solid border-zinc-400 w-full"
                ></div>
                <div
                  class="flex justify-between mt-4 w-full"
                >
                  <div class="">AI/DXコンサルティング</div>
                  <img
                    loading="lazy"
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/d0e421bc33d72b78adcd217089f59719b7fb7edd857f166f7983fae18639ba1d?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5"
                    class="object-contain shrink-0 w-10 aspect-square"
                  />
               
                </div>
                <div
                  class="shrink-0 mt-4 h-px border border-solid border-zinc-400 w-full"
                ></div>
                <div
                  class="flex justify-between gap-6 mt-4 w-full"
                >
                  <div class="">M&A/財務支援</div>
                  <img
                    loading="lazy"
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/d0e421bc33d72b78adcd217089f59719b7fb7edd857f166f7983fae18639ba1d?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5"
                    class="object-contain shrink-0 w-10 aspect-square"
                  />
                </div>
                <div
                  class="shrink-0 mt-4 h-px border border-solid border-zinc-400 w-full"
                ></div>
              </div>
            </div>

            <div class="flex flex-col mt-[7.5rem] ml-5 w-1/2 max-md:ml-0 max-md:w-full">
              <div
                class="flex shrink-0 mx-auto max-w-full bg-zinc-300 h-[657px] w-[520px] max-md:mt-10"
              ></div>
            </div>
          </div>
        </div>
        <!-- End introduction -->

        <!-- Start Run Text -->
        <div class="pt-36">
          <div
            class="decorative-text decorative-text--1"
            style="fill: #ffd700;"
          >
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="2850" height="100%">
                  <defs>
                      <text id="text-creator-first" x="0" y="150" class="mt-60 w-full font-bold text-center uppercase border border-solid border-zinc-600 text-[183px] max-md:mt-10 max-md:max-w-full max-md:text-4xl" font-family="Arial" font-size="14" fill="black">system that MAKES PEOPLE</text>
                  </defs>
                  <use href="#text-creator-first"/>
              </svg>
                
            </div>
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="2850" height="100%">
                  <defs>
                      <text id="text-creator-first" class="mt-60 w-full font-bold text-center uppercase border border-solid border-zinc-600 text-[183px] max-md:mt-10 max-md:max-w-full max-md:text-4xl" font-family="Arial" font-size="14" fill="blue">system that MAKES PEOPLE</text>
                  </defs>
                  <use href="#text-creator-first"/>
              </svg>
            </div>
          </div>
          <div
            class="decorative-text decorative-text--2"
          >
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="2700" height="100%">
                <text x="0" y="150" style="fill: #5F5F5F;" class="mt-60 w-full font-bold text-center uppercase border border-solid border-zinc-600 text-[183px] max-md:mt-10 max-md:max-w-full max-md:text-4xl">system that MAKES PEOPLE</text>
              </svg>
            </div>
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="2700" height="100%">
                <text x="0" y="150" style="fill: #5F5F5F;" class="mt-60 w-full font-bold text-center uppercase border border-solid border-zinc-600 text-[183px] max-md:mt-10 max-md:max-w-full max-md:text-4xl">system that MAKES PEOPLE</text>
              </svg>
            </div>
          </div>
        </div>
        <!-- End Run Text -->

        <!-- Start Achievements -->
        <div class="w-full pt-36">
          <div class="flex gap-5 max-md:flex-col">
            <div class="flex flex-col w-1/2 max-md:ml-0 max-md:w-full">
              <img
                loading="lazy"
                srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/2785dcb71aadb7ffd5a2af89dc41209a88fab0de823ce7eacb45c14c5ac1c611?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/2785dcb71aadb7ffd5a2af89dc41209a88fab0de823ce7eacb45c14c5ac1c611?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/2785dcb71aadb7ffd5a2af89dc41209a88fab0de823ce7eacb45c14c5ac1c611?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/2785dcb71aadb7ffd5a2af89dc41209a88fab0de823ce7eacb45c14c5ac1c611?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/2785dcb71aadb7ffd5a2af89dc41209a88fab0de823ce7eacb45c14c5ac1c611?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/2785dcb71aadb7ffd5a2af89dc41209a88fab0de823ce7eacb45c14c5ac1c611?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/2785dcb71aadb7ffd5a2af89dc41209a88fab0de823ce7eacb45c14c5ac1c611?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/2785dcb71aadb7ffd5a2af89dc41209a88fab0de823ce7eacb45c14c5ac1c611?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5"
                class="object-contain grow w-full aspect-[1.12] max-md:max-w-full"
              />
            </div>
            <div class="flex flex-col ml-5 w-1/2 max-md:ml-0 max-md:w-full">
              <div class="flex flex-col justify-start mt-11 gap-9 max-md:mt-10 max-md:max-w-full">
                <div
                  class="flex gap-3  text-base text-white whitespace-nowrap"
                >
                  <div
                    class="flex shrink-0 my-auto w-2.5 h-2.5 bg-red-600 rounded-full"
                  ></div>
                  <div>実績</div>
                </div>

                <div
                  class="self-start text-9xl font-black text-white uppercase leading-[110px] max-md:max-w-full max-md:text-4xl max-md:leading-10"
                >
                  <div class="flex items-center gap-2">OUR<span class="text-3xl text-center">Project</span></div>
                  <div>Achieve</div>
                  <div>ments</div>
                </div>
                <div
                  class="mt-24 text-lg text-zinc-400 max-md:mt-10 max-md:max-w-full mr-0 md:mr-[380px]"
                >
                  お客様に満足していただける高品質なシステム作りをしています。
                  <br />
                  デジタルの領域の実績は１,０００以上で、幅広くお客様のニーズにお応えします。
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Achievements -->

        <!-- Start Our Project -->
        <div class="relative w-full mt-36">
            <div class="absolute top-0 right-0 left-0 z-index-negative">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/OUR-PROJECT.svg" alt="" srcset="<?php echo get_template_directory_uri(); ?>/assets/svg/OUR-PROJECT.svg" class="w-full opacity-[0.1]">
            </div>

            <div class="flex flex-col md:flex-row max-w-[1200px] mx-auto">
              <div class="w-1/2 mt-[100px]">
                <div class="flex items-center justify-start gap-4">
                  <div class="text-xl text-white max-md:max-w-full">株式会社ABC</div>
                  <div class="text-white bg-[#D70C18] py-0.5 px-4">カテゴリー名</div>
                </div>
                <div
                  class="text-5xl text-white max-md:max-w-full max-md:text-4xl my-4"
                >
                  女性専用マッチングアプリ
                  <span class="lowercase mt-4">to-suto</span>
                </div>
                <div
                  class="flex gap-4 items-center mt-4 text-lg whitespace-nowrap text-zinc-400"
                >
                  <div class="self-stretch my-auto w-[71px]">＃タグ1</div>
                  <div class="self-stretch my-auto w-[71px]">＃タグ2</div>
                  <div class="self-stretch my-auto w-[71px]">＃タグ3</div>
                </div>

                <?php get_template_part('template-parts/view_more'); ?>
              </div>

              <?php 
            $phones = get_field('our_project');
        
            ?>
            <div id="project-slider" class="flex shrink-0 self-stretch -mt-[100px] w-1/2 h-[650px]">
              <div class="swiper mySwiperPhone">
                <div class="swiper-wrapper">
                  <?php 
                  if(!empty($phones)):
                    foreach($phones as $phone):
                      $img = $phone['photo'];
                      ?>
                      <div class="swiper-slide">
                        <div class="h-full"><img
                          loading="lazy"
                          src="<?php echo $img; ?>"
                          class="object-contain w-full h-full"
                        /></div>
                      </div>
                      <?php 
                    endforeach;
                  endif;
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Our Project -->
          
        <!-- Start News -->   
        <?php
         $categories = get_categories();
        ?>
        <div
        class="flex flex-col pt-36 items-start w-full max-w-[1200px] mx-auto"
        >
          
          <div class="flex gap-3 mt-1.5 text-base text-white whitespace-nowrap">
            <div
              class="flex shrink-0 my-auto w-2.5 h-2.5 bg-red-600 rounded-full"
            ></div>
            <div>お知らせ</div>
          </div>
          <div
            class="flex flex-wrap gap-5 justify-between mt-10 w-full max-w-[1202px] max-md:max-w-full"
          >
            <div
              class="text-9xl font-black leading-none text-white uppercase max-md:text-4xl"
            >
              NEWS
            </div>
            <?php get_template_part('template-parts/view_more'); ?>
          </div>
          <div
            class="flex flex-wrap gap-5 justify-between mt-12 w-full text-white uppercase max-w-[1203px] max-md:mt-10 max-md:max-w-full"
          >
            <div
              class="flex flex-col self-start text-base leading-7 tracking-[1.95px]"
              id="list_category"
            >
              <script>
                var categories = <?php echo json_encode($categories); ?>;
                categories.unshift({name: 'ALL'});
                let active = 'ALL';
                function renderCategory(active) {
                  document.getElementById('list_category').innerHTML = ""; // Clear the container before rendering
                  categories.map(category => {
                    const content = `
                    <div
                      class="flex flex-col py-2 whitespace-nowrap rounded-none w-fit cursor-pointer hover:opacity-80 hover:translate-x-2 transition-all"
                      onclick="getCategory('${category.name}');getActive('${category.name}');"
                      id="news_category"
                    >
                      <div class="max-md:mr-1 uppercase cursor-pointer">${category.name}</div>
                      ${active == category.name ? '<div class="shrink-0 mt-2 h-px border border-white border-solid"></div>' : ''}
                    </div>
                    `;
                    document.getElementById('list_category').innerHTML += content;
                  });
                }
                renderCategory(active);

                function getActive(categoryName) {
                  active = categoryName;
                  renderCategory(active);
                }
              </script>
            </div>
    
            <div
              class="flex flex-col font-extrabold whitespace-nowrap max-md:max-w-full"
              id="news_list"
            ></div>
          </div>
        </div>
        <!-- End News -->

        <!-- Start Recruit and Contact -->
        <div class="mt-40 w-full max-md:mt-10 max-md:max-w-full">
          <div class="flex max-md:flex-col">
            <div class="flex flex-col w-6/12 max-md:ml-0 max-md:w-full relative">
              <div class="w-full absolute inset-0 top-0 right-0 left-0 bottom-0">
                    <img
                      loading="lazy"
                      srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/9a1deabca10a6dbd35216a72b570918403a05fc42a6c163c3160b5105be996c1?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/9a1deabca10a6dbd35216a72b570918403a05fc42a6c163c3160b5105be996c1?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/9a1deabca10a6dbd35216a72b570918403a05fc42a6c163c3160b5105be996c1?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/9a1deabca10a6dbd35216a72b570918403a05fc42a6c163c3160b5105be996c1?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/9a1deabca10a6dbd35216a72b570918403a05fc42a6c163c3160b5105be996c1?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/9a1deabca10a6dbd35216a72b570918403a05fc42a6c163c3160b5105be996c1?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/9a1deabca10a6dbd35216a72b570918403a05fc42a6c163c3160b5105be996c1?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/9a1deabca10a6dbd35216a72b570918403a05fc42a6c163c3160b5105be996c1?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5"
                      class="object-cover size-full"
                    />
              </div>
              <div class="absolute flex flex-col justify-center items-center right-[40px] top-[50px]">
                <div class="text-center text-white rotate-90">Join Us</div>
                <div class="shrink-0 mt-16 w-px border border-white border-solid h-[75px]"></div>
              </div>
              <div class="flex flex-col grow text-white max-md:max-w-full">
                <div
                  class="flex relative flex-col px-20 pt-36 pb-16 w-full min-h-[622px] max-md:px-5 max-md:pt-24 max-md:max-w-full"
                >
                  <div
                    class="flex relative flex-wrap gap-5 justify-between items-start text-5xl font-black leading-none whitespace-nowrap max-md:max-w-full max-md:text-4xl"
                  >
                    <div class="self-start max-md:text-4xl">recruit</div>
                  </div>
                  <div
                    class="relative mt-20 mr-9 text-base leading-6 max-md:mt-10 max-md:mr-2.5 max-md:max-w-full"
                  >
                    エイジラボは、一緒に「挑戦」する仲間を求めています。ビジネス・プロダクト・コーポレートの様々な職種で採用を強化中です。募集要項をぜひご覧ください。
                  </div>
                  <div class="w-full">
                    <a href="#">
                      <?php get_template_part('template-parts/view_more'); ?>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="flex flex-col w-6/12 max-md:ml-0 max-md:w-full">
              <div
                class="flex relative flex-col flex-wrap grow gap-8 items-start px-20 pt-36 pb-16 text-white min-h-[622px] max-md:px-5 max-md:pt-24"
              >
                <div class="w-full absolute inset-0">
                  <img
                    loading="lazy"
                    srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/5710c57f30a9c5b10c36c539e7b5fc94d91fb9c2f748b1dfc7814099c2692c85?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/5710c57f30a9c5b10c36c539e7b5fc94d91fb9c2f748b1dfc7814099c2692c85?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/5710c57f30a9c5b10c36c539e7b5fc94d91fb9c2f748b1dfc7814099c2692c85?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/5710c57f30a9c5b10c36c539e7b5fc94d91fb9c2f748b1dfc7814099c2692c85?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/5710c57f30a9c5b10c36c539e7b5fc94d91fb9c2f748b1dfc7814099c2692c85?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/5710c57f30a9c5b10c36c539e7b5fc94d91fb9c2f748b1dfc7814099c2692c85?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/5710c57f30a9c5b10c36c539e7b5fc94d91fb9c2f748b1dfc7814099c2692c85?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/5710c57f30a9c5b10c36c539e7b5fc94d91fb9c2f748b1dfc7814099c2692c85?placeholderIfAbsent=true&apiKey=8af6f5d32b5144bd9e69424ca42ab7b5"
                    class="object-cover size-full"
                  />
                </div>
                <div class="absolute flex flex-col justify-center items-center right-[40px] top-[50px]">
                  <div class="text-center text-white rotate-90">Inquiry</div>
                  <div class="shrink-0 mt-16 w-px border border-white border-solid h-[75px]"></div>
                </div>
                <div
                  class="flex relative flex-col grow shrink-0 items-start basis-0 w-fit max-md:max-w-full"
                >
                  <div class="text-5xl font-black leading-none max-md:text-4xl">
                    Contact Us
                  </div>
                  <div
                    class="self-stretch mt-20 text-base leading-6 max-md:mt-10 max-md:max-w-full"
                  >
                    WEB・アプリ開発、デザイン、プロモーション、ブランディングなど、案件のご相談・その他ご質問などございましたら、どんなことでもお気軽にお問い合わせください。
                  </div>
                  <div class="w-full">
                    <a href="#">
                      <?php get_template_part('template-parts/view_more'); ?>
                    </a>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <!-- End Recruit and Contact -->
      </div>
    </div>
  </div>
</div>

<?php get_footer();
if(is_array($posts->posts)){
  foreach ($posts->posts as $post) {
    $post->category = get_the_category($post->ID);
    array_push($newsList, $post);
  }
}
?>

<script src="<?php echo get_template_directory_uri() . '/assets/js/home.js'; ?>"></script>

<script>
  var newsLists = <?php echo json_encode($newsList); ?>;
  var bannerSlide = <?php echo json_encode($banner_slides); ?>;

</script>