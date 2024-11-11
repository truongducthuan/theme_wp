const news = [
  {
    image: 'https://storage.googleapis.com/studio-cms-assets/projects/RQqJGMe2ag/s-1936x2400_v-frms_webp_7a86986a-7bb3-4ef2-971e-2efd04baf145_middle.webp',
    date: '2024/12/05',
    type: 1,
    description: 'Art Festival Held'
  },
  {
    image: 'https://storage.googleapis.com/studio-cms-assets/projects/RQqJGMe2ag/s-1800x2400_v-frms_webp_9c249d6d-f310-4697-ac0e-38e8bff82402_middle.webp',
    date: '2024/12/05',
    type: 2,
    description: 'Art Festival Held'
  },
  {
    image: 'https://storage.googleapis.com/studio-cms-assets/projects/RQqJGMe2ag/s-1936x2400_v-frms_webp_7a86986a-7bb3-4ef2-971e-2efd04baf145_middle.webp',
    date: '2024/12/05',
    type: 3,
    description: 'Art Festival Held'
  },
  {
    image: 'https://storage.googleapis.com/studio-cms-assets/projects/RQqJGMe2ag/s-1800x2400_v-frms_webp_9c249d6d-f310-4697-ac0e-38e8bff82402_middle.webp',
    date: '2024/12/05',
    type: 1,
    description: 'Art Festival Held'
  },
]

const classes = [
  {
    title: 'Title class',
    slogan: 'Have fun while learn',
    apply_to: 'Age 9 to 16',
    description: 'Creating crafts, learning the basics of how to use paints and crayons, and cultivating sensitivity and expressiveness'
  },
  {
    title: 'Title class',
    slogan: 'Have fun while learn',
    apply_to: 'Age 9 to 16',
    description: 'Creating crafts, learning the basics of how to use paints and crayons, and cultivating sensitivity and expressiveness'
  },
]

$(document).ready(function() {

  renderNews()
  renderClass()

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
      <div class="bg-secondary rounded-xl p-10">
        <h2 class="${className}">${item.title}</h2>
        <div class="font-semibold text-lg text-primary mb-2">${item.slogan}</div>
        <div class="font-bold mb-4">${item.apply_to}</div>
        <div>${item.description}</div>
        <a href="#"><button class="bg-primary text-white px-8 uppercase mt-6 py-2 rounded-3xl hover:scale-105 hover:animate-pulse cursor-pointer transition-all duration-300">Click here for class details</button></a>
      </div>
    `
  })
  $('#content_class').html(html);
};