

// Slider



class Slider{
    constructor() {
        this.slides = document.querySelectorAll('.slide');
        this.prevBtn = document.querySelector('.prev-btn');
        this.nextBtn = document.querySelector('.next-btn');
        this.caption = document.getElementById('slide-caption');
        this.currentSlide = 0;

        
        this.captions = [
            "\"Boneco Klaus\"",
            "\"Camiseta Luther\"",
            "\"Creme Pitts\""
        ]
        
        this.prevBtn.addEventListener('click', () => {
            this.prevSlide()
        });
        this.nextBtn.addEventListener('click', () => {
            this.nextSlide()

        });
    }   
    showSlide(index) {
        // Remove classe active de todos os slides
        this.slides.forEach(slide => slide.classList.remove('active'));
        
        // Adiciona classe active ao slide atual
        this.slides[index].classList.add('active');
        
        // Muda a legenda
        this.updateCaption(index);
        
        this.currentSlide = index;
    }
    updateCaption(index) {
        this.caption.style.opacity = '0';
        
        setTimeout(() => {
            this.caption.textContent = this.captions[index];
            this.caption.style.opacity = '1';
        }, 200);
    }
    nextSlide() {
        let nextIndex = this.currentSlide + 1;
        if (nextIndex >= this.slides.length) {
            nextIndex = 0;
        }
        this.showSlide(nextIndex);
    }
    
    prevSlide() {
        let prevIndex = this.currentSlide - 1;
        if (prevIndex < 0) {
            prevIndex = this.slides.length - 1;
        }
        this.showSlide(prevIndex);
    }
    
    goToSlide(index) {
        if (index >= 0 && index < this.slides.length) {
            this.showSlide(index);
        }
    }
}

new Slider()