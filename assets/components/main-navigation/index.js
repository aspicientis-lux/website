import { Component } from '../components.js';

(async () => {

  const component = new Component("main-navigation", import.meta.url);
  const template = await component.fetchTemplate();

  class MainNavigation extends HTMLElement {
    constructor() {
      super()
      this.attachShadow({ mode: 'open'}).appendChild(template.content.cloneNode(true))

      const hamburger = this.shadowRoot.querySelector("div.hamburger");
      hamburger.addEventListener('click', () => {
        hamburger.parentElement.classList.toggle("collapsed");
      });

    }
  }

  customElements.define('main-navigation', MainNavigation);

})();