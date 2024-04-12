class ScrollToTop extends HTMLElement {
    constructor() {
      super();

        const shadow = this.attachShadow({ mode: 'closed' });
        shadow.innerHTML = this.#html;
        const scrollToTop = shadow.querySelector("a.scroll-to-top");

        window.addEventListener("scroll", () => {
            const display = window.scrollY >= 100 ? 'flex' : 'none';
            scrollToTop.style.display = display;
        });

        scrollToTop.addEventListener("click", () => {
            window.scrollTo(0,0);
        });
    }

    #html = `
        <style>
            a.scroll-to-top {
                height: 40px;
                width: 40px;
                z-index: 10;
                position: fixed;
                border-radius: 50%;
                color: black;
                background-color: #ffbf00;
                border: 2px solid #ffbf00;
                display: block;
                bottom: 30px;
                right: 30px;
                box-sizing: border-box;
                text-decoration: none;
                transition: 0.3s ease-in-out;
                display: none;
                justify-content: center;
                justify-items: center;
                align-items: center;

                svg {
                    height: 22px;
                    width: 22px;
                    margin-top: -1px;
                }
            }

            a.scroll-to-top:hover {
                background-color: black;
                color: white;
                border: 2px solid #666666;
            }

            div.top {
                display: none;
            }
        </style>
        <a href="javascript:void(0)" class="scroll-to-top">
            <svg viewBox="0 0 512 512" height="48" width="48" focusable="false" role="img" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="48"
                    d="m112 328 144-144 144 144"></path>
            </svg>
        </a>
    `;
}

customElements.define('scroll-to-top', ScrollToTop);