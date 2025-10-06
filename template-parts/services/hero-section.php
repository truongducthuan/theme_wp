<style>
  .news-hero__background {
    position: relative;
    background-image: url('http://synora-home.local/wp-content/uploads/2025/10/services-back-ground.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    overflow: hidden;
  }

  .news-hero__background::before {
    content: "";
    position: absolute;
    inset: 0;
    background-color: rgba(255, 255, 255, 0.7);
    /* trắng mờ 70% */
    backdrop-filter: blur(2px);
    /* làm mờ nền nhẹ */
    z-index: 1;
  }

  /* Đảm bảo nội dung trong section hiển thị phía trên lớp phủ */
  .news-hero__background>* {
    position: relative;
    z-index: 2;
  }

  /* blog 4 */
  .provided__background {
    position: relative;
    background-image: url('http://synora-home.local/wp-content/uploads/2025/10/blog-4-1.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    /* overflow: hidden; */
  }
</style>

<section class="w-full bg-white">
  <div class="mx-auto w-full pt-24 bg-white max-w-7xl text-[#222627]">
    <div class="w-full">
      <img
        src="http://synora-home.local/wp-content/uploads/2025/10/services-home-scaled.png"
        alt="Digital transformation process visualization"
        class="w-full h-auto shadow-2xl object-cover" />
    </div>


    <!-- blog 1 -->
    <div>
      <div class="w-full flex flex-col items-center justify-center bg-white mt-28 pb-16">
        <div class="w-[850px] h-12 flex flex-row justify-between items-center gap-2.5 mb-7">
          <div class="w-6">
            <img
              src="http://synora-home.local/wp-content/uploads/2025/10/icon1.png"
              alt="Icon"
              class="w-full h-auto object-cover" />
          </div>
          <h1 class="flex-1 text-center text-[40px] text-[#2F2BEB] font-bold">私たちのサービス - 観光DX開発支援</h1>
          <div class="w-6">
            <img
              src="http://synora-home.local/wp-content/uploads/2025/10/icon1.png"
              alt="Icon"
              class="w-full h-auto object-cover" />
          </div>
        </div>
        <h3 class="text-center text-xl text-black font-bold">私たちは単なるソフトウェア会社ではなく、観光業界に特化した伴走型の技術パートナーです。</h3>
      </div>

      <div class="w-full grid grid-cols-3 gap-1 px-3 pb-16">
        <div class="min-h-36 flex flex-col gap-y-6 px-3">
          <div class="rounded-[20px] py-10 pl-8 pr-4 bg-[#F5F4FF] relative">
            <div class="w-10 h-10 absolute right-2.5 top-2.5 rounded-full bg-[#2BC8EB] text-black text-xl font-bold flex items-center justify-center">01</div>
            <div class="flex gap-4 items-center mb-6">
              <img
                src="http://synora-home.local/wp-content/uploads/2025/10/icon-technological.png"
                alt="Icon"
                class="w-[70px] h-auto object-cover" />
              <h4 class="flex-1 text-xl font-bold">増え続ける技術的複雑性</h4>
            </div>
            <p class="text-sm text-[#616669]">観光業界の複雑な商慣習や業務フローを理解し、それをシステムに落とし込む作業は、チームに高い専門性を要求し、新規メンバーのキャッチアップを困難にします。</p>
          </div>
          <div class="rounded-[20px] py-10 pl-8 pr-4 bg-[#F5F4FF] relative">
            <div class="w-10 h-10 absolute right-2.5 top-2.5 rounded-full bg-[#2BC8EB] text-black text-xl font-bold flex items-center justify-center">02</div>
            <div class="flex gap-4 items-center mb-6">
              <img
                src="http://synora-home.local/wp-content/uploads/2025/10/icon-domain.png"
                alt="Icon"
                class="w-[70px] h-auto object-cover" />
              <h4 class="flex-1 text-lg font-bold">求められる高度なドメイン知識</h4>
            </div>
            <p class="text-sm text-[#616669]">観光業界の複雑な商慣習や業務フローを理解し、それをシステムに落とし込む作業は、チームに高い専門性を要求し、新規メンバーのキャッチアップを困難にします。</p>
          </div>
        </div>
        <div class="min-h-36 flex items-center justify-center">
          <img
            src="http://synora-home.local/wp-content/uploads/2025/10/meeting-zoom.png"
            alt="Icon"
            class="w-[376px] h-auto object-cover" />
        </div>
        <div class="min-h-36 flex flex-col gap-y-6 px-3">
          <div class="rounded-[20px] py-10 pl-8 pr-4 bg-[#F5F4FF] relative">
            <div class="w-10 h-10 absolute right-2.5 top-2.5 rounded-full bg-[#2BC8EB] text-black text-xl font-bold flex items-center justify-center">03</div>
            <div class="flex gap-4 items-center mb-6">
              <img
                src="http://synora-home.local/wp-content/uploads/2025/10/icon-teams.png"
                alt="Icon"
                class="w-[70px] h-auto object-cover" />
              <h4 class="flex-1 text-xl font-bold">内製チーム強化の必要性</h4>
            </div>
            <p class="text-sm text-[#616669]">ビジネスのスピードを上げるには、開発チームの内製化が理想です。しかし、優秀な人材の採用は困難を極め、自社だけでチームをスケールさせることには限界があります。</p>
          </div>
          <div class="rounded-[20px] py-10 pl-8 pr-4 bg-[#F5F4FF] relative">
            <div class="w-10 h-10 absolute right-2.5 top-2.5 rounded-full bg-[#2BC8EB] text-black text-xl font-bold flex items-center justify-center">04</div>
            <div class="flex gap-4 items-center mb-6">
              <img
                src="http://synora-home.local/wp-content/uploads/2025/10/icon-domain.png"
                alt="Icon"
                class="w-[70px] h-auto object-cover" />
              <h4 class="flex-1 text-lg font-bold">恒常的なリソースの制約</h4>
            </div>
            <p class="text-sm text-[#616669]">既存システムの運用保守や、細かな改修依頼に対応する中で、次世代プロダクトの開発や、大規模なリファクタリングといった、重要だが緊急ではないタスクが後回しになりがちです。</p>
          </div>
        </div>
      </div>
    </div>

    <!-- blogs 2 -->
    <div class="mt-16 news-hero__background pt-[100px] pb-[60px]">
      <div class="w-full flex flex-col items-center justify-center pb-16">
        <div class="w-[850px] h-12 flex flex-row justify-between items-center gap-2.5 mb-7">
          <div class="w-6">
            <img
              src="http://synora-home.local/wp-content/uploads/2025/10/icon1.png"
              alt="Icon"
              class="w-full h-auto object-cover" />
          </div>
          <h1 class="flex-1 text-center text-[40px] text-[#2F2BEB] font-bold">私たちのサービス - 観光DX開発支援</h1>
          <div class="w-6">
            <img
              src="http://synora-home.local/wp-content/uploads/2025/10/icon1.png"
              alt="Icon"
              class="w-full h-auto object-cover" />
          </div>
        </div>
        <h3 class="text-center text-xl text-black font-bold">私たちは単なるソフトウェア会社ではなく、観光業界に特化した伴走型の技術パートナーです。</h3>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-6xl mx-auto px-4">
        <!-- Card 1 -->
        <div class="h-[450px] bg-[#2BC8EB] rounded-tr-[100px] shadow-md hover:shadow-xl transition-shadow duration-300">
          <div class="w-full h-full bg-white rounded-tr-[150px] p-8 flex flex-col items-center text-center ">
            <img
              src="http://synora-home.local/wp-content/uploads/2025/10/Background-4.png"
              alt="チーム支援"
              class="w-16 h-16 mb-6 object-contain" />
            <h3 class="text-lg font-bold mb-4 text-[#222627]">ラボ型開発支援（チーム拡張）</h3>
            <button
              class="mt-auto bg-[#2F2BEB] text-white text-sm font-semibold px-6 py-2 rounded-full hover:bg-[#1c1bbd] transition-colors duration-300">
              もっと詳しく
            </button>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="h-[450px] bg-[#2BC8EB] rounded-tr-[100px] shadow-md hover:shadow-xl transition-shadow duration-300">
          <div class="w-full h-full bg-white rounded-tr-[150px] p-8 flex flex-col items-center text-center ">
            <img
              src="http://synora-home.local/wp-content/uploads/2025/10/Background-4.png"
              alt="チーム支援"
              class="w-16 h-16 mb-6 object-contain" />
            <h3 class="text-lg font-bold mb-4 text-[#222627]">ラボ型開発支援（チーム拡張）</h3>
            <button
              class="mt-auto bg-[#2F2BEB] text-white text-sm font-semibold px-6 py-2 rounded-full hover:bg-[#1c1bbd] transition-colors duration-300">
              もっと詳しく
            </button>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="h-[450px] bg-[#2BC8EB] rounded-tr-[100px] shadow-md hover:shadow-xl transition-shadow duration-300">
          <div class="w-full h-full bg-white rounded-tr-[150px] p-8 flex flex-col items-center text-center ">
            <img
              src="http://synora-home.local/wp-content/uploads/2025/10/Background-4.png"
              alt="チーム支援"
              class="w-16 h-16 mb-6 object-contain" />
            <h3 class="text-lg font-bold mb-4 text-[#222627]">ラボ型開発支援（チーム拡張）</h3>
            <button
              class="mt-auto bg-[#2F2BEB] text-white text-sm font-semibold px-6 py-2 rounded-full hover:bg-[#1c1bbd] transition-colors duration-300">
              もっと詳しく
            </button>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="h-[450px] bg-[#2BC8EB] rounded-tr-[100px] shadow-md hover:shadow-xl transition-shadow duration-300">
          <div class="w-full h-full bg-white rounded-tr-[150px] p-8 flex flex-col items-center text-center ">
            <img
              src="http://synora-home.local/wp-content/uploads/2025/10/Background-4.png"
              alt="チーム支援"
              class="w-16 h-16 mb-6 object-contain" />
            <h3 class="text-lg font-bold mb-4 text-[#222627]">ラボ型開発支援（チーム拡張）</h3>
            <button
              class="mt-auto bg-[#2F2BEB] text-white text-sm font-semibold px-6 py-2 rounded-full hover:bg-[#1c1bbd] transition-colors duration-300">
              もっと詳しく
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- blog 3 -->
    <div class="max-w-6xl mx-auto px-6 py-16 bg-[#F8FAFF]">
      <div class="w-full flex flex-col items-center justify-center pb-16">
        <div class="w-[850px] h-12 flex flex-row justify-between items-center gap-2.5 mb-7">
          <div class="w-6">
            <img
              src="http://synora-home.local/wp-content/uploads/2025/10/icon1.png"
              alt="Icon"
              class="w-full h-auto object-cover" />
          </div>
          <h1 class="flex-1 text-center text-[40px] text-[#2F2BEB] font-bold">私たちのサービス - 観光DX開発支援</h1>
          <div class="w-6">
            <img
              src="http://synora-home.local/wp-content/uploads/2025/10/icon1.png"
              alt="Icon"
              class="w-full h-auto object-cover" />
          </div>
        </div>
      </div>

      <div class="grid md:grid-cols-2 gap-8 items-center">
        <!-- Left-->
        <div class="flex justify-center">
          <img
            src="http://synora-home.local/wp-content/uploads/2025/10/handle-tow-scaled.png"
            alt="Handshake"
            class="w-full max-w-sm rounded-[2rem] shadow-lg object-cover" />
        </div>

        <!-- right -->
        <div class="h-full bg-white border border-[#D0E3FF] rounded-2xl p-8 shadow-md flex flex-col justify-between">
          <div>
            <h3 class="text-lg md:text-xl font-semibold mb-4 text-gray-900">
              【大手旅行会社様：予約システム内製化の伴走支援】
            </h3>

            <span class="text-gray-600 mb-4 leading-relaxed text-center">
              <p>直面していた課題</p>
              <p>将来の事業戦略のために外部パッケージから脱却し、自社予約システムの内製化を推進。</p>
              <p>しかし、観光領域特有の大規模システムに対応できるノウハウとリソースが不足し、プロジェクトは停滞していた。</p>
            </span>

            <div class="space-y-3 text-gray-700">
              <p class="flex items-start">
                <span class="text-[#3B82F6] text-lg mr-2">•</span>
                <span>課題分析：既存構成を分析し、テクニカルリードをサポート。</span>
              </p>
              <p class="flex items-start">
                <span class="text-[#3B82F6] text-lg mr-2">•</span>
                <span>内製化支援：社内メンバーと協働し、実装とレビュー体制を構築。</span>
              </p>
              <p class="flex items-start">
                <span class="text-[#3B82F6] text-lg mr-2">•</span>
                <span>プロジェクト管理：進捗とリソースを最適化し、スムーズな移行を実現。</span>
              </p>
            </div>
          </div>

          <div class="mt-8 text-center">
            <a
              href="#"
              class=" w-full inline-block bg-gradient-to-r from-[#3B82F6] to-[#2563EB] text-white font-semibold px-8 py-3 shadow hover:opacity-90 transition">
              無料相談を予約する
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- blogs 4 -->
    <section class="mt-16 py-16 px-20 bg-[#F5F4FF]">
      <div class="w-full flex flex-col items-center justify-center pb-16">
        <div class="w-[850px] h-12 flex flex-row justify-between items-center gap-2.5 mb-7">
          <div class="w-6">
            <img
              src="http://synora-home.local/wp-content/uploads/2025/10/icon1.png"
              alt="Icon"
              class="w-full h-auto object-cover" />
          </div>
          <h1 class="flex-1 text-center text-[40px] text-[#2F2BEB] font-bold">提供サービス</h1>
          <div class="w-6">
            <img
              src="http://synora-home.local/wp-content/uploads/2025/10/icon1.png"
              alt="Icon"
              class="w-full h-auto object-cover" />
          </div>
        </div>
        <h3 class="text-center text-xl text-black font-bold">テクノロジーと人材の力で、観光DXを加速させるサービスをご提供します。</h3>
      </div>

      <div class="w-full grid grid-cols-3 gap-1 px-3 pb-16">
        <div class="min-h-36 flex flex-col gap-y-10 px-3">
          <div class="w-80 h-80 rounded-[20px] relative provided__background mb-16">
            <div class="h-16 w-3/5 p-5 bg-[#2BC8EB] absolute -bottom-10 left-1/2 -translate-x-1/2 rounded-[10px] text-[#222627] text-2xl font-bold">Alex Smith
              <img
                src="http://synora-home.local/wp-content/uploads/2025/10/Component-6.png"
                alt="Icon"
                class="w-10 h-auto object-cover absolute -top-1/2 translate-y-1/2 right-5" />
            </div>
          </div>
          <div class="w-80 h-80 rounded-[20px] relative provided__background">
            <div class="h-16 w-3/5 p-5 bg-[#2BC8EB] absolute -bottom-10 left-1/2 -translate-x-1/2 rounded-[10px] text-[#222627] text-2xl font-bold">Alex Smith
              <img
                src="http://synora-home.local/wp-content/uploads/2025/10/Component-6.png"
                alt="Icon"
                class="w-10 h-auto object-cover absolute -top-1/2 translate-y-1/2 right-5" />
            </div>
          </div>
        </div>
        <div class="h-full w-full flex items-center">
          <div class="w-full h-[400px] rounded-[20px] relative provided__background mb-16">
            <div class="h-16 w-3/5 p-5 bg-[#2BC8EB] absolute -bottom-10 left-1/2 -translate-x-1/2 rounded-[10px] text-[#222627] text-2xl font-bold">Alex Smith
              <img
                src="http://synora-home.local/wp-content/uploads/2025/10/Component-6.png"
                alt="Icon"
                class="w-10 h-auto object-cover absolute -top-1/2 translate-y-1/2 right-5" />
            </div>
          </div>
        </div>
        <div class="min-h-36 flex flex-col gap-y-10 px-3">
          <div class="w-80 h-80 rounded-[20px] relative provided__background mb-16">
            <div class="h-16 w-3/5 p-5 bg-[#2BC8EB] absolute -bottom-10 left-1/2 -translate-x-1/2 rounded-[10px] text-[#222627] text-2xl font-bold">Alex Smith
              <img
                src="http://synora-home.local/wp-content/uploads/2025/10/Component-6.png"
                alt="Icon"
                class="w-10 h-auto object-cover absolute -top-1/2 translate-y-1/2 right-5" />
            </div>
          </div>
          <div class="w-80 h-80 rounded-[20px] relative provided__background">
            <div class="h-16 w-3/5 p-5 bg-[#2BC8EB] absolute -bottom-10 left-1/2 -translate-x-1/2 rounded-[10px] text-[#222627] text-2xl font-bold">Alex Smith
              <img
                src="http://synora-home.local/wp-content/uploads/2025/10/Component-6.png"
                alt="Icon"
                class="w-10 h-auto object-cover absolute -top-1/2 translate-y-1/2 right-5" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- blogs 5 -->
    <section class="mt-16 py-16 px-20 bg-[#F5F4FF]">
      <div class="w-full flex flex-col items-center justify-center pb-16">
        <div class="w-[850px] h-12 flex flex-row justify-between items-center gap-2.5 mb-7">
          <div class="w-6">
            <img
              src="http://synora-home.local/wp-content/uploads/2025/10/icon1.png"
              alt="Icon"
              class="w-full h-auto object-cover" />
          </div>
          <h1 class="flex-1 text-center text-[40px] text-[#2F2BEB] font-bold">提供サービス</h1>
          <div class="w-6">
            <img
              src="http://synora-home.local/wp-content/uploads/2025/10/icon1.png"
              alt="Icon"
              class="w-full h-auto object-cover" />
          </div>
        </div>
        <h3 class="text-center text-xl text-black font-bold">テクノロジーと人材の力で、観光DXを加速させるサービスをご提供します。</h3>
      </div>

      <div class="w-full flex flex-col items-center gap-6 px-3 pb-16">
        <div class="h-[120px] w-full flex justify-between items-center gap-4">
          <div class="h-full w-[120px] rounded-full flex items-center justify-center bg-[#2BC8EB] text-[44px] font-bold">01</div>
          <div class="flex-1 h-full flex flex-col items-center justify-center gap-4 text-xl text-white font-bold rounded-[20px] bg-[#2F2BEB] px-7 py-4">
            <p>無料相談（課題の共有</p>
            <p>貴社チームが抱える課題や、目指す姿についてヒアリング。最適な支援の形を共に探ります。</p>
          </div>
        </div>
        <div class="h-[120px] w-[120px] rounded-2xl bg-[#2BC8EB] flex items-center justify-center">
          <img
            src="http://synora-home.local/wp-content/uploads/2025/10/icon-drop-down.png"
            alt="Icon"
            class="w-5 h-auto object-cover" />
        </div>
        <div class="h-[120px] w-full flex justify-between items-center gap-4">
          <div class="h-full w-[120px] rounded-full flex items-center justify-center bg-[#2BC8EB] text-[44px] font-bold">02</div>
          <div class="flex-1 h-full flex flex-col items-center justify-center gap-4 text-xl text-white font-bold rounded-[20px] bg-[#2F2BEB] px-7 py-4">
            <p>ご提案（支援体制の設計）</p>
            <p>課題解決に最適な支援形態（ラボ、プロジェクト等）と、貴社チームにフィットする体制をご提案します。</p>
          </div>
        </div>
        <div class="h-[120px] w-[120px] rounded-2xl bg-[#2BC8EB] flex items-center justify-center">
          <img
            src="http://synora-home.local/wp-content/uploads/2025/10/icon-drop-down.png"
            alt="Icon"
            class="w-5 h-auto object-cover" />
        </div>
        <div class="h-[120px] w-full flex justify-between items-center gap-4">
          <div class="h-full w-[120px] rounded-full flex items-center justify-center bg-[#2BC8EB] text-[44px] font-bold">03</div>
          <div class="flex-1 h-full flex flex-col items-center justify-center gap-4 text-xl text-white font-bold rounded-[20px] bg-[#2F2BEB] px-7 py-4">
            <p> 契約・チーム組成</p>
            <p>契約締結後、アサインメンバーとの顔合わせ・キックオフを実施。円滑な協業開始を準備します。
            </p>
          </div>
        </div>
        <div class="h-[120px] w-[120px] rounded-2xl bg-[#2BC8EB] flex items-center justify-center">
          <img
            src="http://synora-home.local/wp-content/uploads/2025/10/icon-drop-down.png"
            alt="Icon"
            class="w-5 h-auto object-cover" />
        </div>
        <div class="h-[120px] w-full flex justify-between items-center gap-4">
          <div class="h-full w-[120px] rounded-full flex items-center justify-center bg-[#2BC8EB] text-[44px] font-bold">04</div>
          <div class="flex-1 h-full flex flex-col items-center justify-center gap-4 text-xl text-white font-bold rounded-[20px] bg-[#2F2BEB] px-7 py-4">
            <p>支援開始</p>
            <p>貴社チームの一員として、合意したプロセスに則り、開発支援を開始します。</p>
          </div>
        </div>
      </div>
    </section>

    <!-- blogs 6 -->
    <section class="mt-16 py-16 px-20 bg-[#F5F4FF] flex">
      <!-- left -->
      <div class="w-2/5">
        <div class="w-full flex flex-col items-start justify-center pb-10">
          <div class="w-[180px] h-12 flex flex-row justify-between items-center gap-1 mb-1">
            <div class="w-6">
              <img
                src="http://synora-home.local/wp-content/uploads/2025/10/icon1.png"
                alt="Icon"
                class="w-full h-auto object-cover" />
            </div>
            <h3 class="flex-1 text-center text-lg text-[#2F2BEB] font-bold">提供サービス</h3>
            <div class="w-6">
              <img
                src="http://synora-home.local/wp-content/uploads/2025/10/icon1.png"
                alt="Icon"
                class="w-full h-auto object-cover" />
            </div>
          </div>
          <p class=" text-black font-normal">DXを通じて観光産業を盛り上げるパートナーを募集しています。お気軽にお問い合わせください。</p>
        </div>
        <div class="flex flex-col gap-4">
          <div class="h-20 w-full py-2 flex gap-5">
            <img
              src="http://synora-home.local/wp-content/uploads/2025/10/icon-helpone.png"
              alt="Icon"
              class="w-20 h-20 object-cover" />
            <span class="h-full flex-1 flex justify-center flex-col">
              <p class="text-[#616669] font-bold">Call Us Any Time</p>
              <p class="text-2xl font-bold">+(009) 1888 000 2222</p>
            </span>
          </div>
          <div class="h-20 w-full py-2 flex gap-5">
            <img
              src="http://synora-home.local/wp-content/uploads/2025/10/icon-helpone.png"
              alt="Icon"
              class="w-20 h-20 object-cover" />
            <span class="h-full flex-1 flex justify-center flex-col">
              <p class="text-[#616669] font-bold">Call Us Any Time</p>
              <p class="text-2xl font-bold">+(009) 1888 000 2222</p>
            </span>
          </div>
          <div class="h-20 w-full py-2 flex gap-5">
            <img
              src="http://synora-home.local/wp-content/uploads/2025/10/icon-helpone.png"
              alt="Icon"
              class="w-20 h-20 object-cover" />
            <span class="h-full flex-1 flex justify-center flex-col">
              <p class="text-[#616669] font-bold">Call Us Any Time</p>
              <p class="text-2xl font-bold">+(009) 1888 000 2222</p>
            </span>
          </div>
        </div>
      </div>

      <!-- right -->
      <div class="w-full flex  flex-1 items-center gap-6 px-3 pb-16">
        <img
          src="http://synora-home.local/wp-content/uploads/2025/10/blog6-image.jpg"
          alt="Icon"
          class="w-full h-auto object-cover rounded-[30px]" />
      </div>

    </section>

  </div>
</section>