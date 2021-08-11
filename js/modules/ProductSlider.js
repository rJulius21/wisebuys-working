class ProductSlider {
  constructor() {
    this.wrapper = document.querySelector('#frontPageSlider')
    this.lArr = this.wrapper.querySelector('.product-row__btn--left')
    this.rArr = this.wrapper.querySelector('.product-row__btn--right')

    this.slider = this.wrapper.querySelector('.product-row')
    this.sliderStyles = window.getComputedStyle(this.slider)
    this.sliderWidth = parseInt(this.sliderStyles.getPropertyValue('width'))

    this.viewport = this.wrapper.querySelector('.product-row__viewport')
    this.viewportStyles = window.getComputedStyle(this.viewport)
    this.viewportWidth = parseInt(this.viewportStyles.getPropertyValue('width'))
    this.viewportPadding = parseInt(this.viewportStyles.getPropertyValue('padding'))

    // Increment values
    this.slideMovement = this.viewportWidth - this.viewportPadding
    this.slideMoveCount = 0
    // Events
    this.events()
  }

  events() {
    //console.log('Log test: ' + this.slideMovement);
    this.moveSlide();
  }

  ////////////////////////////////////////////////
  ////////////////////////////////////////////////

  moveSlide() {
    this.wrapper.addEventListener("click", e => {
      if (e.target == this.rArr) {
        if ((this.slideMovement * this.slideMoveCount) > ((this.sliderWidth - this.viewportWidth) * -1)) {
          this.slideMoveCount--
          this.slider.style.transform = `translateX(${(this.slideMovement * this.slideMoveCount)}px)`;
          return this.slideMoveCount
        }
      }
      if (e.target == this.lArr) {
        if (this.slideMoveCount < 0) {
          this.slideMoveCount++
          this.slider.style.transform = `translateX(${(this.slideMovement * this.slideMoveCount)}px)`;
          return this.slideMoveCount
        }
      }
    })
  }
}

export default ProductSlider