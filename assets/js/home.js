$(document).ready(function () {
  renderNewsList();
  handleSlideBanner()
});

// HANDLE SLIDE BANNER
function handleSlideBanner () {
  const slideBnEl = $('#slide_banner');

  // bannerSlide && bannerSlide.forEach((slide, index) => {
  //   setTimeout(() => {
  //     console.log({ bannerSlide });

  //     const html = ` <img
  //                   loading="lazy"
  //                   srcset="${slide.background}"
  //                   class="object-cover size-full"
  //                 />`

  //     slideBnEl.html(html)
  //   }, 1000);
  // })
}

setTimeout(() => {
  console.log({ newsLists });
}, 1000);


// HANDLE NEWS LIST
function renderNewsList(category = 'ALL') {
  const newsListEl = $('#news_list');
  let content = '';

  if (category === 'ALL') {
    newsLists?.forEach((news, index) => {
      content += renderNews(news, index);
    });
  } else {
    let count = 0;
    newsLists?.forEach((news, index) => {
      count++;
      if (news.category[0].name.toLowerCase() === category.toLowerCase()) {
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
      <div
        class="w-full border border-solid border-neutral-500 border-opacity-90 min-h-[1px] max-md:max-w-full"
      ></div>
      <a
        href="${news.guid}"
        class="flex flex-wrap gap-10 items-center self-center mt-7 px-16 mb-7 w-full"
      >
        <div
          class="flex flex-col self-stretch pr-1.5 pb-3.5 my-auto rounded-none w-[60px]"
        >
          <div class="text-base leading-7">${year}.${month}</div>
          <div
            class="self-start mt-2.5 text-5xl leading-3 max-md:text-4xl"
          >
            ${date}
          </div>
        </div>
        <div class="self-stretch my-auto text-xs text-zinc-400 uppercase">
          ${news.category[0].name}
        </div>
        <div class="self-stretch max-w-[500px] my-auto text-lg max-md:max-w-full create-3dots text-ellipsis">
          ${news.post_title}
        </div>
      </a>
      ${index > 0 ? '<div class="w-full border border-solid border-neutral-500 border-opacity-90 min-h-[1px] max-md:max-w-full"></div>' : ''}
    </div>
  `;
  return html;
}

function getCategory(categoryName) {
  renderNewsList(categoryName.trim());
}


