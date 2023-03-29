document.addEventListener("DOMContentLoaded", start);

function start() {
  document.querySelector("#menuknap").addEventListener("click", toggleMenu);
  document.querySelector("#menuknapluk").addEventListener("click", toggleMenu);
}

function toggleMenu() {
  console.log("toggleMenu");

  //            Burgermenuen er skjult på forsiden
  document.querySelector("#burger").classList.toggle("hidden");

  //            Hvis menuknappen er synlig skal den skjules. Hvis den er skjult skal den vises
  if (document.querySelector("#menuknap")) {
    document.querySelector("#menuknap").classList.toggle("hidden");
  }
}
