jQuery(window).on('load', function() {
  // Hide the loader when the page is fully loaded
  const openInit = sessionStorage.getItem('openInit');
  if(openInit) {
    $('#open').hide();
    $('#loader').hide()
  }else {
    let text1 = 'Global Innovators Hub'
    let text2 = 'Tìm hiểu khoa học - Nắm chặt tương lai'
    let text3 = ''
    let screenWidth = window.screen.width;
    if(screenWidth <= 640) {
      text2 = 'Tìm hiểu khoa học'
      text3 = 'Nắm chặt tương lai'

      const fadeInText3 = document.querySelector('#fadeInText3');
      fadeInText3.textContent = '';
      text3.split('').forEach((char, index) => {
        const span = document.createElement('span');
        if(char == ' ') {
          span.classList.add('space')
        }else {
          span.textContent = char;
        }
    
        span.classList.add('char');
        fadeInText3.appendChild(span);
    
        setTimeout(() => {
          span.style.animation =  'bounce-bottom 0.4s both';
        }, index * 100);
      });
    }
    
    const fadeInText = document.querySelector('#fadeInText1');
    fadeInText.textContent = ''; // Clear the original text
    text1.split('').forEach((char, index) => {
      const span = document.createElement('span');
      if(char == ' ') {
        span.classList.add('space')
      }else {
        span.textContent = char;
      }
  
      span.classList.add('char');
      fadeInText.appendChild(span);
  
      setTimeout(() => {
        // span.style.opacity = 1; // Fade in the character
        //span.style.transform = 'translateY(50px)'
        span.style.animation =  'bounce-bottom 0.4s both';
      }, index * 60); // Adjust the timing as needed
    });
  
    const fadeInText2 = document.querySelector('#fadeInText2');
    fadeInText2.textContent = ''; // Clear the original text
    text2.split('').forEach((char, index) => {
      const span = document.createElement('span');
      if(char == ' ') {
        span.classList.add('space')
      }else {
        span.textContent = char;
      }
  
      span.classList.add('char');
      fadeInText2.appendChild(span);
  
      setTimeout(() => {
        // span.style.opacity = 1; // Fade in the character
        //span.style.transform = 'translateY(50px)'
        span.style.animation =  'bounce-bottom 0.4s both';
      }, index * 80); // Adjust the timing as needed
    });
  
    setTimeout(() => {
      $('#loader').hide()
      $('#open').show();
      sessionStorage.setItem('openInit', true);
      setTimeout(() => {
        $('#open').hide();
      }, 2000)
    }, 4000)
  }
});