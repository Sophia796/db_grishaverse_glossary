
/* Akkordion-Panel auf- und zuklappen */

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        
        /* Wechsel zwischen "active"-class hinzufügen und entfernen, um den Akkordion-Button zu markieren */
        this.classList.toggle("active");

        /* Den Akkordion-Inhalt verstecken und zeigen */
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        } 
    });
}