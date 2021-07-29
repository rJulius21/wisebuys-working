

import "../css/style.css"

// Our modules / classes
import HeaderMenus from "./modules/HeaderMenus"

import ModuleTemplate from "./modules/ModuleTemplate"

// Instantiate a new object using our modules / classes
const headerMenus = new HeaderMenus()

const moduleTemplate = new ModuleTemplate()

// Allow new JS and CSS to load in browser without a traditional page refresh
if (module.hot) {
  module.hot.accept()
}
