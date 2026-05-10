// 🔥 AKTİF MENÜ (DAHA SAĞLAM)
document.querySelectorAll(".nav-link").forEach(link => {

  let current = window.location.pathname.split("/").pop();

  if(link.getAttribute("href") === current){
    link.classList.add("active");
  }

});


// 🔥 DARK MODE
function toggleDark(){

  document.body.classList.toggle("dark");

  // localStorage ile kaydet
  if(document.body.classList.contains("dark")){
    localStorage.setItem("theme", "dark");
  } else {
    localStorage.setItem("theme", "light");
  }
}


// 🔥 SAYFA AÇILINCA DARK MODE KORU
window.addEventListener("DOMContentLoaded", () => {

  let theme = localStorage.getItem("theme");

  if(theme === "dark"){
    document.body.classList.add("dark");
  }

});


// 🔥 SMOOTH SCROLL (ekstra kalite)
document.querySelectorAll("a[href^='#']").forEach(anchor => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();
    document.querySelector(this.getAttribute("href"))?.scrollIntoView({
      behavior: "smooth"
    });
  });
});