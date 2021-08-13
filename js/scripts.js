

import "../css/style.css"

// Our modules & classes
import Menus from "./modules/Menus"
import CardSlider from "./modules/ProductSlider"

import ModuleTemplate from "./modules/ModuleTemplate"

// Instantiate a new object using our modules / classes
const menus = new Menus()
const cardSliderFrontPage = new CardSlider('#frontPageSlider')

const moduleTemplate = new ModuleTemplate()

// Allow new JS and CSS to load in browser without a traditional page refresh
if (module.hot) {
  module.hot.accept()
}
