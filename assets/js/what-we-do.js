$(document).ready(() => {
  openModal()
})

function openModal () {
  const memberEl = $('.member_detail')
  const modalEl = $('#modal_member')
  console.log(memberEl, modalEl)

  memberEl.on('click', (e) => {
    const member = $(e.currentTarget)
    const data = JSON.parse(member[0].getAttribute('data-set'))
    let html = handleEvent(data)

    modalEl.html(html)
    console.log(modalEl.children('div'), 'child')

    modalEl.removeClass('left-[100%]')
    modalEl.removeClass('close')
    modalEl.children('div').removeClass('-scroll-modal')
    modalEl.addClass('open')
    setTimeout(() => {
      modalEl.children('div').addClass('scroll-modal')
    }, 200)
  })
}

function handleEvent (data) {
  return `
        <div class="absolute top-0 bottom-0 opacity-0 right-0 w-2/6 bg-white p-24 overflow-y-auto z-50">
          <div class="absolute top-[2.5rem] right-[6.5rem] flex items-center cursor-pointer" onclick="closeModal()">
            <div class="cursor-pointer text-3xl p-3.5 close-nav">
						  <span class="icon-menu top-0 menu-close__top"></span>
              <span class="icon-menu top-2 menu-close__bottom"></span>
					  </div>
            <span class="h-[14px]">Close</span>
          </div>
          <div>
            <img src="${data.photo}" alt="${data.name_2}">
          </div>
          <div class="text-xs my-2 text-[#595959]">${data.position}</div>
          <h2 class="text-xl font-bold mb-4 ">${data.name_1}</h2>
          <div class="tracking-widest text-sm">${data.description}</div>
        </div>
    `
}

function closeModal () {
  const modalEl = $('#modal_member')
  modalEl.removeClass('open')
  modalEl.children('div').removeClass('scroll-modal')
  modalEl.children('div').hide(500)
  // modalEl.children('div').addClass('-scroll-modal')
  modalEl.addClass('close')


}

