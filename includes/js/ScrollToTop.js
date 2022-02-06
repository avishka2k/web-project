const btnScrollToTop = document.querySelector("#btnScrollToTop");

window.addEventListener("scroll", scrollFunction); 
function scrollFunction() {
if (window.pageYOffset > 300) { // Show backToTopButton
  if(!btnScrollToTop.classList.contains("btnEntrance")) {
      btnScrollToTop.classList.remove("btnExit");
      btnScrollToTop.classList.add("btnEntrance");
      btnScrollToTop.style.display = "block";
  }
}
else { // Hide backToTopButton
  if(btnScrollToTop.classList.contains("btnEntrance")) {
      btnScrollToTop.classList.remove("btnEntrance");
      btnScrollToTop.classList.add("btnExit");
    setTimeout(function() {
      btnScrollToTop.style.display = "none";
    }, 250);
  }
}
}
  btnScrollToTop.addEventListener("click", backToTop);

  function backToTop() {
      window.scrollTo({
          top: 0,
          left: 0,
          behavior: "smooth"
      });
  }