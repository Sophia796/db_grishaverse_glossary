/* Responsive-Design */
function mobileMenu() {
  var x = document.getElementsByID("nav");
  if (x.className === "nav") {
    x.className += " responsive";
  } else {
    x.className = "nav";
  }
}

function mobileMenu() {
  var x = document.getElementByID("nav");
  if (x.className === "nav") {
      x.className = "responsive";
  } else {
      x.className = "nav";
  }
}

function mobileMenu() {
  var x = document.getElementByID("topnav");
  if (x.className === "nav") {
      x.classList.remove("nav");
      x.classList.add("responsive");
  } else {
      x.classList.remove("responsive");
      x.classList.add("nav");
  }
}