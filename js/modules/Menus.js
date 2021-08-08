class Menus {
  constructor() {
    this.dropboxes = document.querySelectorAll(".header-drop-box")
    this.headerNavToggles = document.querySelectorAll(".header-nav__switch-btn")
    this.events()
  }

  events() {
    this.headerNavToggles.forEach(this.openDropbox)
    this.headerNavToggles.forEach(this.closeDropbox)
  }

  //////////////////////////////////////////
  //////////  DEFINE FUNCTIONS  ////////////
  //////////////////////////////////////////

  openDropbox(item, index) {
    item.addEventListener("click", () => {
      const boxCount = index
      const box = document.querySelectorAll(".header-drop-box")[boxCount]
      box.classList.toggle("header-drop-box--open")
    })
  }

  closeDropbox(item, index) {
    document.addEventListener("click", (e) => {
      const boxCount = index
      const box = document.querySelectorAll(".header-drop-box")[boxCount]
      if (e.target != item && e.target != box && e.target != box) {
        box.classList.remove("header-drop-box--open")
      }
    })
  }
}


export default Menus