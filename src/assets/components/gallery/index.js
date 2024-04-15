(() => {

    document.querySelectorAll("div.gallery div").forEach(div => {
        div.addEventListener("click", () => {
            // Check if a data src attribute is set (for larger images)
            if(div.hasAttribute("data-src")) {
                div.parentElement.querySelector("img").src = div.getAttribute("data-src");
            }
            div.parentElement.classList.toggle("fullscreen");
        })
    });
})();