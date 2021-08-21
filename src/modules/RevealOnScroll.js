import throttle from "lodash/throttle"
import debounce from "lodash/debounce"

class RevealOnScroll {
  constructor() {
      this.browserHeight = window.innerHeight
    this.itemsToReveal = document.querySelectorAll(".col-to-reveal")
    this.hideInitially()
    this.scrollThrottle = throttle(this.calcCaller, 200).bind(this)
    this.events()
  }

  events() {
    window.addEventListener("scroll", this.scrollThrottle)
    window.addEventListener("resize", debounce(() => {
        console.log("Resize just ran")
        this.browserHeight = window.innerHeight
    }, 333))
  }

  calcCaller() {
    console.log("Scroll function ran")
    this.itemsToReveal.forEach((el) => {
      if (el.isRevealed === false) {
        this.calcIfScrolledTo(el)
      }
    })
  }

  calcIfScrolledTo(el) {
    if (window.scrollY + this.browserHeight > el.offsetTop) {
      console.log("Element was calculated")
      let scrollPercent = (el.getBoundingClientRect().top / this.browserHeight) * 100
      if (scrollPercent < 65) {
        el.classList.add("col--is-visible")
        el.isRevealed = true
        if (el.lastItem) {
          window.removeEventListener("scroll", this.scrollThrottle)
        }
      }
    }
  }

  hideInitially() {
    this.itemsToReveal.forEach((el) => {
      el.classList.add("col--hidden")
      el.isRevealed = false
    })
    this.itemsToReveal[this.itemsToReveal.length - 1].isLastItem = true
  }
}

export default RevealOnScroll
