<?php 
/*
Template Name: What We Do
*/
 get_header();
?>

<style>

  #slide-member .swiper {
  width: 100%;
  height: 100%;
}

.mySwiper3 .swiper-slide {
  text-align: center;
  font-size: 18px;

  /* Center slide text vertically */
  display: -webkit-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  -webkit-justify-content: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  -webkit-align-items: center;
  align-items: center;

  clip-path: polygon(30% 0, 100% 0%, 70% 100%, 0% 100%);
  /* margin-left: -210px; */
}

.mySwiper3 .swiper-slide img {
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.mySwiper3.swiper-wrapper{
  transition-timing-function: linear !important;
}

.mySwiper3 .photo {
  background: linear-gradient(180deg, #D9D9D900 30%, #182B84 100%);
}

.divide-bottom {
  border-bottom: 2px solid #B2B2B2 !important;
}

.clip-path--right {
  /* clip-path: polygon(100% 0, 100% 36%, 57% 100%, 0 100%, 70% 0); */
  clip-path: polygon(100% 0, 100% 60%, 73% 100%, 0 100%, 70% 0);
}

.gradient-text {
  font-size: 16rem;
}

.modal-close__top {
		  transform: translateY(10px) rotate(-40deg);
	  }

.modal-close__button {
  transform: translateY(0px) rotate(40deg);
}

#modal_member {
    transition: left 0.5s ease-in-out;
  }
  #modal_member.open {
    left: 0;
    transform: translateX(0);
  }
  #modal_member.close {
    left: 100%;
    /* transform: translateX(100%); */
  }

  .bg-modal {
    /* /* background: rgba(0,0,0,0.8); */
    /* filter: blur(5px); */ */
  }
  .bg_modal {
    filter: blur(10px);
  }

@media (max-width: 1400px) {
  .gradient-text {
    font-size: 15rem;
  }
}

@media (max-width: 1000px) {
  .gradient-text {
    font-size: 11rem;
  }
}

@media (max-width: 720px) {
  .gradient-text {
    font-size: 4rem;
  }
}

.mySwiper3 .swiper {
      width: 100%;
      height: 300px;
      margin-left: auto;
      margin-right: auto;
}

.scroll-modal {
  opacity: 1;
  transition: opacity .5s ease-in-out;
  /* width:100%; */
}
.-scroll-modal {
  opacity: 0;
  transition: opacity .5s ease-in-out;
}

</style>
<section class="relative">
  <div class="relative">
    <div class="flex absolute -left-1 top-0 flex-col mt-[80px] mb-[80px] w-[46%] max-lg:ml-0 max-lg:w-full">
    <img
      loading="lazy"
      src="<?php echo get_template_directory_uri() ?>/assets/svg/banner-left.svg"
      class="object-contain self-stretch my-auto mr-0 w-full aspect-[1.03] max-lg:mt-10 max-lg:max-w-full"
    />
  </div>

  <div class="max-w-[1200px] mx-auto px-5 lg:px-0 pt-32 lg:pt-60 z-10 relative text-[#B2B2B2]">
    <div
      class="flex gap-3 items-center self-start text-base text-white mb-5 lg:mb-10"
    >
      <div
        class="flex shrink-0 self-stretch my-auto w-2.5 h-2.5 bg-red-600 rounded-full" 
      ></div>
      <div class="self-stretch my-auto text-sm lg:text-base">会社概要</div>
    </div>
    <div class="flex justify-between gap-4">
      <div class="flex flex-col items-start justify-start self-start gap-8 text-white py-1 rounded-xl">
        <div class="font-bold text-4xl lg:text-[7.2rem] leading-[8rem] text-white uppercase">what we do</div>
      </div>
    </div>
    <div class="text-white mt-8 text-lg lg:text-3xl leading-6 lg:leading-[3rem]">
    圧倒的な技術力で <br >
    日本のDX化推進の一翼を担うエンジニア集団
    </div>
    <div class="text-sm lg:text-base mt-8">
    私たちは、金融と技術のプロフェッショナルが共に創業したITスタートアップです。<br >
私たちAgeLabは、テクノロジーで新しい時代を切り開き、新たな価値の創出を追求します。
    </div>
    <div class="flex justify-end items-end gap-4 mt-5 lg:mt-20 mb-10 w-full text-white"><span>Top -</span><p>会社概要</p></div>
  </div>

  <div class="relative w-full z-10 text-[#B2B2B2]">
    <div class="absolute right-0 lg:left-80 xl:left-[19rem] top-0 lg:-top-5 flex-col w-[70%] lg:w-[84%] mb-[80px] bg-gradient-to-t from-black to-inherit">
      <div class="gradient-text">message</div>  
  </div>
    <div class="absolute top-80 left-0 flex-col  bg-gradient-to-t from-black to-inherit">
      <img src="<?php echo get_template_directory_uri() ?>/assets/svg/Mask-bg-gray.svg" class="w-full" />
    </div>
    <div class="max-w-[1200px] px-5 lg:px-0 mx-auto">
      <div class="relative z-10 w-full lg:w-3/5 mx-auto pt-20 lg:pt-[200px]">
        <h3 class="text-white text-xl lg:text-4xl mb-10 leading-10 lg:leading-[3rem]">
          テクノロジーを活かして <br >
          関わる人・企業を幸せにする
        </h3>
        <p class="text-sm lg:text-base leading-8 lg:leading-[2.5rem]">
        私たちは、テクノロジーの力を活かして、お客様の課題解決やビジョンの実現をサポートすることを使命としています。急速に変化する社会において、柔軟かつ革新的なアプローチが求められる時代だからこそ、私たちは「信頼」「挑戦」「成長」という3つの価値観を大切にしています。<br >
  お客様との対話を重ね、本質的なニーズを理解し、最適なソリューションを提案することを常に心がけています。開発を通じて得られるのは、単なるシステムやプロダクトだけではありません。それは、私たちが共に築く「未来への可能性」です。
  これからも、お客様や社会の期待を超える価値を提供し続けることで、新しい未来を創造していきたいと考えています。私たちの旅は始まったばかりです。
        </p>
        <div class="flex justify-end items-end text-white">
          <p class="leading-8">
            代表取締役CEO <br >
            袴田 格
          </p>
        </div>
      </div>
    </div>
    
  </div>

  <div class="flex flex-col lg:flex-row justify-between items-center text-[#B2B2B2] mt-20 lg:mt-[9rem] mb-10 w-full relative">
    <div class="absolute lg:-top-[30rem] 2xl:-top-[500px] right-0 w-[65%]">
      <img src="<?php echo get_template_directory_uri() ?>/assets/svg/Mask-bg-black.svg" class="w-full" >
    </div>
    <div class="absolute -top-[55px] lg:top-[37rem] xl:-bottom-[215px] 2xl:-bottom-[200px] w-full z-10">
      <div class="gradient-text">Philosophy</div>
    </div>
    <div class="w-full lg:w-1/2 order-1 lg:order-1 relative z-20">
      <div class="ml-5 lg:ml-28 mr-5 lg:mr-0 flex flex-col gap-4 lg:gap-8 leading-7">
        <span class="text-white text-xl">ミッション/理念</span>
        <h3 class="text-white text-2xl lg:text-5xl my-1 lg:my-2">Driving Age with Technology</h3>
        <p class="text-sm lg:text-base lg:leading-[2.4rem]">
          説明テキストが入ります。説明テキストが入ります。説明テキストが入ります。<br>
          説明テキストが入ります。説明テキストが入ります。説明テキストが入ります。<br>
          説明テキストが入ります。説明テキストが入ります。説明テキストが入ります。<br>
          説明テキストが入ります。説明テキストが入ります。説明テキストが入ります。<br>
          説明テキストが入ります。説明テキストが入ります。説明テキストが入ります。<br>
          説明テキストが入ります。説明テキストが入ります。説明テキストが入ります。
        </p>
      </div>
    </div>
    <div class="mt-5 lg:mt-[100px] order-2 lg:order-2 w-full lg:w-1/2 h-[500px] lg:h-[650px] 2xl:h-[750px] overflow-hidden">
      <?php 
        $we_do = get_field('what_to_do', 2);
        ?>
      <div class="swiper mySwiperPhone">
        <div class="swiper-wrapper">
          <?php 
          if(!empty($we_do)):
            foreach($we_do as $item):
              $img = $item['image'];
              ?>
              <div class="swiper-slide">
                <div class="h-full clip-path--right"><img
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
  <div class="text-[#B2B2B2] pt-10 lg:pt-44 max-w-[1200px] mx-auto px-5 lg:px-0 flex flex-col lg:flex-row justify-between gap-5 relative z-20">
    <div class="text-white text-2xl">メンバー紹介</div>
    <p class="leading-[2.3rem]">説明テキストが入ります。説明テキストが入ります。説明テキストが入ります。<br >
    説明テキストが入ります。説明テキストが入ります。説明テキストが入ります。</p>
  </div>

  <?php 
  $members = get_field('members');
  ?>
  <div class="w-full h-[400px] lg:h-[640px] mt-10 lg:mt-32 mb-20 lg:mb-[6rem] relative" id="slide-member">
    <div class="absolute left-0 bottom-[50%]">
      <img src="<?php echo get_template_directory_uri() ?>/assets/svg/Mask group (4).svg" class="w-full" >
    </div>
    <div class="absolute mix-blend-difference -bottom-[14px] md:-bottom-[7rem] lg:-bottom-[6rem] right-0 md:-right-[10rem] lg:-right-[15rem]">
      <!-- <img class="w-full mix-blend-luminosity opacity-[0.1]" src="<?php // echo get_template_directory_uri(); ?>/assets/svg/TOP MEMBER.svg ?>" alt="top member" > -->
      <h1 class="gradient-text text-nowrap">top member</h1>
    </div>
    <div class="absolute top-0 right-0">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/Mask group.svg" alt="mask group" class="w-full" >
    </div>
      <div class="h-[1000px] relative z-10">
        <?php get_template_part('template-parts/members-slide'); ?>
      </div>
  </div>

  <?php 
  $table = get_field('table');
  ?>
  <div class="max-w-[1200px] mx-auto px-5 lg:px-0 text-[#B2B2B2] relative mb-20 lg:mb-32">
    <h2 class="text-white text-2xl">会社概要</h2>
    <div class="flex flex-col w-full lg:w-4/6 mx-auto mt-10 divide-y-2 divide-[#B2B2B2]">
    <?php if($table): 
      $index = 0;
      $count = count($table);
      foreach($table as $item):
        if (strpos($item['value'], '/n') !== false) {
          $item['value'] = str_replace('/n', '<br>', $item['value']);
        }
    ?>
      <div class="flex justify-start items-center gap-10 py-5 <?php echo $index == $count - 1 ? 'divide-bottom' : ''; ?>">
        <div class="text-white ml-5 lg:ml-16 min-w-16 lg:min-w-[200px]"><?php echo $item['label']; ?></div>
        <div class="text-[#B2B2B2]"><?php echo $item['value']; ?></div>
      </div>
    <?php $index++; endforeach; endif; ?>
    </div>
  </div>

</section>

<?php get_footer(); ?>

<script src="<?php echo get_template_directory_uri() ?>/assets/js/what-we-do.js"></script>