/* Responsive-Design */
function mobileMenu() {
  var x = document.getElementsByID("nav");
  if (x.className === "nav") {
    x.className += " responsive";
  } else {
    x.className = "nav";
  }
}
