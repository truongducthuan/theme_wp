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
      ${index == 0 ? '<div class="w-full border border-solid border-neutral-500 border-opacity-90 min-h-[1px] max-md:max-w-full"></div>' : ''}
      <a
        href="${news.guid}"
        class="flex flex-wrap gap-10 items-center self-center mt-7 px-16 mb-7 w-full z-10"
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


// WHAT WE DO
const textEffect = $('.shining-text__effect')
const textFadeEl = $('.text-fade--out')
function isElementInViewport(el, number) {
  const rect = el.getBoundingClientRect();

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
      }, 2000)
    }


		if (isElementInViewport(problem[0], 200)) {
        problem[0].classList.add('slide-top-deep-1');
    }
		if (isElementInViewport(solution[0], 0)) {
			solution[0].classList.add('slide-top-deep-1');
		}
		if (isElementInViewport(feature1[0], 0)) {
			feature1[0].classList.add('slide-top-deep-1');
		}
		if (isElementInViewport(feature2[0], 0)) {
			feature2[0].classList.add('slide-top-deep-1')
		}
		if (isElementInViewport(feature3[0], 0)) {
			feature3[0].classList.add('slide-top-deep-1');
		}
		if (isElementInViewport(contact[0], 500)) {
			contact[0].classList.add('slide-top-deep-1');
		}
		if (isElementInViewport(company[0], 200)) {
			company[0].classList.add('slide-top-deep-1');
		}
	} else {
        problem.removeClass('opacity-0');
		if (isElementInViewport(problem1[0], 0)) {
        	problem1[0].classList.add('slide-top-deep-1');
		}
		if (isElementInViewport(problem2[0], 0)) {
        	problem2[0].classList.add('slide-top-deep-1');
		}
		if (isElementInViewport(problem3[0], 0)) {
        	problem3[0].classList.add('slide-top-deep-1');
		}
		
		solution.removeClass('opacity-0')
		if (isElementInViewport(solution1[0], 0)) {
			solution1[0].classList.add('slide-top-deep-1');
		}
		if (isElementInViewport(solution2[0], 0)) {
			solution2[0].classList.add('slide-top-deep-1');
		}
		if (isElementInViewport(solution3[0], 0)) {
			solution3[0].classList.add('slide-top-deep-1');
		}
		
		if (isElementInViewport(feature1[0], 0)) {
			feature1[0].classList.add('slide-top-deep-1');
		}
		if (isElementInViewport(feature2[0], 0)) {
			feature2[0].classList.add('slide-top-deep-1')
		}
		if (isElementInViewport(feature3[0], 0)) {
			feature3[0].classList.add('slide-top-deep-1');
		}
		
		if (isElementInViewport(contact[0], 1000)) {
			contact[0].classList.add('slide-top-deep-1');
		}
		if (isElementInViewport(company[0], 500)) {
			company[0].classList.add('slide-top-deep-1');
		}
	}
    
}

$(window).on('scroll', checkScroll);
