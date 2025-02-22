$(document).ready(function() {

  // scroll top
  $('#scroll_top').click(function (e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, 'slow');
  })

  $('#scroll-class').click((e) => {
    e.preventDefault();
    $('html, body').animate({ scrollTop: 1586 }, 'slow');
      $('#navbar').hide()
  })
  
  $('#scroll-schedule').click((e) => {
    e.preventDefault();
    $('html, body').animate({ scrollTop: 2250 }, 'slow');
      $('#navbar').hide()
  })
  
  $('#scroll-faq').click((e) => {
    e.preventDefault();
    $('html, body').animate({ scrollTop: 3100 }, 'slow');
      $('#navbar').hide()
  })
  
  $('#scroll-access').click((e) => {
    e.preventDefault();
    $('html, body').animate({ scrollTop: 4000 }, 'slow');
      $('#navbar').hide()
  })

})

function renderNews () {
  let html = '';
  news.map(function(item) {
    const type = item.type == 1 ? 'event' : item.type == 2 ? 'holiday' : 'discount day';
    let className = ` bg-[${item.type == 1 ? '#ccfff5' : item.type == 2 ? '#eeff9b' : '#ead0ff'}]`;
    className += ' px-1.5 rounded-xl text-sm '
    html = html + `
      <div class="flex justify-start items-center gap-5 p-5 md:max-w-[70%] mx-auto bg-white first:rounded-t-xl border-b border-[#7cb7ff] border-dashed hover:opacity-75 transition">
        <img src=${item.image} alt=${item.description} class="w-10 h-8 rounded"/>
        <div class="text-sm">${item.date}</div>
        <div class="${className}">${type}</div>
        <div class="font-medium">${item.description}</div>
      </div>
    `
  })
  $('#content_news').html(html);
};

function renderClass () {
  let html = '';
  classes.map(function(item, index) {
    let className = index % 2 == 0 ? 'bg-[#ffcfaf]' : 'bg-[#dceeb8]'
    className += ' font-bold text-lg rounded-md w-full py-0.5 mb-4 text-center'
    html = html + `
      <div class="bg-secondary rounded-xl p-8 md:p-10">
        <h2 class="${className}">${item.title}</h2>
        <div class="font-semibold text-lg text-primary mb-2">${item.slogan}</div>
        <div class="font-bold mb-4">${item.apply_to}</div>
        <div class="text-sm md:text-base">${item.description}</div>
        <a href="#"><button class="bg-primary text-white px-8 uppercase mt-6 py-1 md:py-2 rounded-3xl hover:scale-105 hover:animate-pulse cursor-pointer transition-all duration-300">Click here for class details</button></a>
      </div>
    `
  })
  $('#content_class').html(html);
};

function calcWithScreenMap () {
  let width = 800;
  let screenWidth = window.screen.width;
  if(screenWidth <= 640) {
    width = 350;
  } else {
    width = 800;
  }
  const map = `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7507.158933463328!2d105.77631799470784!3d19.815419869794116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3136f7fdfeaf48ad%3A0x19762f422dc24e3c!2zVHLGsOG7nW5nIFRoaSwgVGhhbmggSMOzYSwgVGhhbmggSG9hLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1731319582024!5m2!1sen!2s" width="${width}" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`
  $('#map').html(map)
}

function logHeightFromTop() {
  var scrollTop = window.scrollY;
  var screenHeight = window.innerHeight;
  return scrollTop + screenHeight;
}

window.addEventListener('scroll', logHeightFromTop);