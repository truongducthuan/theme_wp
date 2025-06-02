function Carousel(options) {
    this.currentSlide = 0;
    this.totalSlides = options.totalSlides;
    this.container = document.getElementById(options.containerId);
    this.dots = document.querySelectorAll(options.dotSelector);
    this.section = document.querySelector(options.sectionSelector);
    this.prevBtn = document.querySelector(options.prevBtn);
    this.nextBtn = document.querySelector(options.nextBtn);
    this.autoPlayInterval = null;

    this.updateCarousel = () => {
        this.container.style.transform = `translateX(-${this.currentSlide * 100}%)`;
        this.dots.forEach((dot, index) => {
            dot.classList.toggle('active', index == this.currentSlide);
        });
    };

    this.nextSlide = () => {
        this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
        this.updateCarousel();
    }
    this.previousSlide = () => {
        this.currentSlide = (this.currentSlide - 1 + this.totalSlides) % this.totalSlides;
        this.updateCarousel();
    }

    this.nextBtn.addEventListener('click', () => {
        this.nextSlide();
    });

    this.prevBtn.addEventListener('click', () => {
      this.previousSlide()
    });

    this.dots.forEach((dot) => {
        let indexToUse = dot.getAttribute('data-index');
        dot.addEventListener('click', () => {
            this.currentSlide = indexToUse;
            this.updateCarousel();
        });
    })

    // Auto-play
    this.startAutoPlay = () => {
        this.autoPlayInterval = setInterval(this.nextSlide, 5000);
    };
    this.stopAutoPlay = () => {
        clearInterval(this.autoPlayInterval);
    };

    // Hover pause
    this.container.addEventListener('mouseenter', this.stopAutoPlay);
    this.container.addEventListener('mouseleave', this.startAutoPlay);

    // Touch/swipe
    let startX = 0;
    let endX = 0;
    this.container.addEventListener('touchstart', (e) => {
        startX = e.touches[0].clientX;
    });
    this.container.addEventListener('touchend', (e) => {
        endX = e.changedTouches[0].clientX;
        const diff = startX - endX;
        if (Math.abs(diff) > 50) {
            diff > 0 ? this.nextSlide() : this.previousSlide();
        }
    });

    // Keyboard
    document.addEventListener('keydown', (e) => {
        if (document.activeElement === document.body) {
            if (e.key === 'ArrowLeft') this.previousSlide();
            if (e.key === 'ArrowRight') this.nextSlide();
        }
    });

    // Init
    this.updateCarousel();
    this.startAutoPlay();
}