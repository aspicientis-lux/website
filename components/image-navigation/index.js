class ImageNavigation extends HTMLElement {
    constructor() {
      super();
      this.src = '';
    }

    static get observedAttributes() {
      return ['src'];
    }

    attributeChangedCallback(property, oldValue, newValue) {
      if (oldValue === newValue) return;
      this[property] = newValue;
    }

    connectedCallback() {

        const shadow = this.attachShadow({ mode: 'closed' });
        shadow.innerHTML = `
            <style>
                
            </style>
            <div class="wrapper">
                <div class="image-navigation">
                    <slot></slot>
                </div>
            </div>
        `;
    }
}

customElements.define('image-navigation', ImageNavigation);