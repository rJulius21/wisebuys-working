

class HeaderMenus {

  constructor() {
    this.openBtnCat = document.querySelector("#openBtnCat")
    this.openBtnCom = document.querySelector("#openBtnCom")
    this.openBtnOth = document.querySelector("#openBtnOth")

    this.closeBtnCat = document.querySelector("#closeBtnCat")
    this.closeBtnCom = document.querySelector("#closeBtnCom")
    this.closeBtnOth = document.querySelector("#closeBtnOth")

    this.dropboxCat = document.querySelector("#dropboxCat")
    this.dropboxCom = document.querySelector("#dropboxCom")
    this.dropboxOth = document.querySelector("#dropboxOth")

    this.events()
  }
  // END CONSTRUCTOR


  events() {
    this.dropboxCat.style.display = 'none';
    this.dropboxCom.style.display = 'none';
    this.dropboxOth.style.display = 'none';

    // START MENU OPEN EVENT LISTENERS
    this.openBtnCat.addEventListener("click", () => {
      if (this.dropboxCat.style.display === 'flex') {
        this.closeBoxCat()
      } else {
        this.openBoxCat()
      }

    })

    this.openBtnCom.addEventListener("click", () => {
      if (this.dropboxCom.style.display === 'flex') {
        this.closeBoxCom()
      } else {
        this.openBoxCom()
      }
    })

    this.openBtnOth.addEventListener("click", () => {
      if (this.dropboxOth.style.display === 'flex') {
        this.closeBoxOth()
      } else {
        this.openBoxOth()
      }
    })
    // START MENU CLOSE EVENT LISTENERS

    // START MENU CLOSE EVENT LISTENERS
    this.closeBtnCat.addEventListener("click", () => this.closeBoxCat())
    this.closeBtnCom.addEventListener("click", () => this.closeBoxCom())
    this.closeBtnOth.addEventListener("click", () => this.closeBoxOth())
    // START MENU CLOSE EVENT LISTENERS
  }
  // END EVENTS

  openBoxCat() {
    this.dropboxCat.style.display = 'flex';
  }
  closeBoxCat() {
    this.dropboxCat.style.display = 'none';
  }

  openBoxCom() {
    this.dropboxCom.style.display = 'flex';
  }
  closeBoxCom() {
    this.dropboxCom.style.display = 'none';
  }

  openBoxOth() {
    this.dropboxOth.style.display = 'flex';
  }
  closeBoxOth() {
    this.dropboxOth.style.display = 'none';
  }
}

export default HeaderMenus
