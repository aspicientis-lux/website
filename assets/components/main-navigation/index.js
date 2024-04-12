(async () => {

  document
    .querySelector("div.hamburger")
    .addEventListener('click', event => {
      event.target.parentElement.classList.toggle("expanded");
  });

})();