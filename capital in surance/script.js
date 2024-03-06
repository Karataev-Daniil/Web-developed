class Slider {
    constructor() {
        this.currentIndex = 0;
        this.slides = document.querySelector('.slides');
        this.slideWidth = document.querySelector('.slide').offsetWidth;
    }

    nextSlide() {
        this.currentIndex = (this.currentIndex + 1) % this.slides.children.length;
        this.updateSlidePosition();
    }

    prevSlide() {
        this.currentIndex = (this.currentIndex - 1 + this.slides.children.length) % this.slides.children.length;
        this.updateSlidePosition();
    }

    updateSlidePosition() {
        const translateXValue = -this.currentIndex * this.slideWidth;
        this.slides.style.transform = `translateX(${translateXValue}px)`;
    }
}

const slider = new Slider();

function nextSlide() {
    slider.nextSlide();
}

function prevSlide() {
    slider.prevSlide();
}