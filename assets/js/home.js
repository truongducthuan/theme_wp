$(document).ready(function () {
  renderNewsList();
  handleSlideBanner()
});

const widthScreen = window.innerWidth
const ourWorksEl = $('#our_work')

// HANDLE NEWS LIST
function renderNewsList(category = 'ALL') {
  const newsListEl = $('#news_list');
  let content = '';

  if (category === 'ALL') {
    // Duyệt qua danh sách và loại bỏ mục có category là "Uncategorized"
    newsLists?.forEach((news, index) => {
      if ( news.category[0].name.toLowerCase() === 'media' || news.category[0].name.toLowerCase() ==='press release') {
        content += renderNews(news, index);
      }
    });
  } else {
    let count = 0;
    newsLists?.forEach((news, index) => {
      // Loại bỏ mục có category là "Uncategorized" và chỉ hiển thị danh mục đã chọn
      if (
        news.category[0].name.toLowerCase() !== 'uncategorized' &&
        news.category[0].name.toLowerCase() === category.toLowerCase()
      ) {
        count++;
        if (count > 4) return;
        content += renderNews(news, index);
      }
    });
  }

  newsListEl.html(content);
}


function renderNews(news, index) {

  const postDate = new Date(news.post_date)
  const date = postDate.getDate();
  const month = postDate.getMonth() + 1;
  const year = postDate.getFullYear(); 

  const html =`
    <div class="flex flex-col w-full max-md:max-w-full news-link-bg-slice relative cursor-pointer overflow-hidden transition-all duration-300 ease-in-out">
      ${index == 0 ? '<div class="w-full border border-solid border-neutral-500 border-opacity-90 min-h-[1px] max-md:max-w-full"></div>' : ''}
      <a
        href="${news.guid}"
        class="flex flex-nowrap gap-3 md:gap-10 items-center self-center mt-4 md:mt-7 px-5 md:px-16 mb-7 w-full z-10"
      >
        <div
          class="flex flex-col self-stretch pr-1.5 pb-3.5 my-auto rounded-none w-[60px]"
        >
          <div class="text-xs md:text-base leading-7">${year}.${month}</div>
          <div
            class="self-start mt-2.5 text-4xl md:text-5xl leading-3"
          >
            ${date}
          </div>
        </div>
        <div class="self-stretch my-auto text-[10px] md:text-xs text-zinc-400 uppercase">
          ${news.category[0].name}
        </div>
        <div class="self-stretch max-w-[500px] my-auto text-sm md:text-lg max-md:max-w-full create-3dots text-ellipsis">
          ${news.post_title}
        </div>
      </a>
       <div
        class="w-full border border-solid border-neutral-500 border-opacity-90 min-h-[1px] max-md:max-w-full"
      ></div>
    </div>
  `;
  return html;
}

function getCategory(categoryName) {
  renderNewsList(categoryName.trim());
}


// handle our business
const businessItems = $('.business_title')
const businessContents = $('#business_content')

businessItems.each((index, item) => {
  $(item).mouseenter((e) => {
    e.preventDefault();
    const dataSet = $(item).attr('data-set');
    const currentImage = businessContents.find('img');
    if (currentImage.length && currentImage.attr('src') === dataSet) {
      return;
    }
    let html = `<img src="${dataSet}" alt="image" style="transition: opacity 0.5s ease-in-out;" class="z-10">`;
    businessContents.find('img').addClass('opacity-0');
    setTimeout(() => {
      businessContents.html(html);
    }, 500);
  })
})

businessItems.each((index, item) => {
  $(item).on('touchstart touchmove', (e) => {
    e.preventDefault();
    const dataSet = $(item).attr('data-set');
    const currentImage = businessContents.find('img');
    if (currentImage.length && currentImage.attr('src') === dataSet) {
      return;
    }
    let html = `<img src="${dataSet}" alt="image" style="transition: opacity 0.5s ease-in-out;" class="z-10">`;
    businessContents.find('img').addClass('opacity-0');
    setTimeout(() => {
      businessContents.html(html);
    }, 500);
  })
})


// WHAT WE DO
const textEffect = $('.shining-text__effect')
const textFadeEl = $('.text-fade--out')
function isElementInViewport(el, number) {
  const rect = el.getBoundingClientRect() || document.documentElement.getBoundingClientRect();

  return (
     // rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom  <= (window.innerHeight + number || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

function checkScroll() {
	if(widthScreen > 640) {
    if(isElementInViewport(textEffect[0], 0)) {
      textEffect[0].classList.add('text--effect');
      setTimeout(() => {
        textFadeEl?.removeClass('opacity-0');
      }, 1000)
    }

	} else {
    if(isElementInViewport(textEffect[0], 0)) {
      textEffect[0].classList.add('text--effect');
      setTimeout(() => {
        textFadeEl?.removeClass('opacity-0');
      }, 2000)
    }
	}
    
}

$(window).on('scroll', checkScroll);
