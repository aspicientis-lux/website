const setup = async () => {

  const parser = new DOMParser()
  const resp = await fetch('/site/components/main-navigation/template.html')
  const html = await resp.text()
  const template = parser.parseFromString(html, 'text/html').querySelector('template')

  const component = class MainNavigation extends HTMLElement {
    constructor() {
      super()
      this.attachShadow({ mode: 'open'}).appendChild(template.content.cloneNode(true))

      const hamburger = this.shadowRoot.querySelector("div.hamburger");
      hamburger.addEventListener('click', () => {
        hamburger.parentElement.classList.toggle("collapsed");
      });

    }
  }

  customElements.define('main-navigation', component);
}

export default await setup();