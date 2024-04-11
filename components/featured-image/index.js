class FeaturedImage extends HTMLElement {
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
                div {
                    max-width: 100vw;
                    height: 100vh;
                    overflow: hidden;
                    background-image: url('${this.src}');
                    background-size: cover;
                    background-position: center center;
                }

                img {
                    width: calc(100vw + 40px);
                    margin: 0 -20px;
                    visibility: hidden;
                }
            </style>
            <div><img src="${this.src}" /></div>
        `;
    }
}

customElements.define('featured-image', FeaturedImage);