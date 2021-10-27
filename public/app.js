// het mobiele menu, het hamburgermenu knopje en de donkere overlay selecteren
const mainMenu = document.querySelector(".nav-mobile");
const openMenu = document.querySelector(".openMenu");
const overlay = document.querySelector(".overlay");

// functies toeveoegen aan het hamburgermenu knopje en de donkere overlay
openMenu.addEventListener("click", show);
overlay.addEventListener("click", close);

/* in deze functie wordt de display veranderd van none naar flex. Hierdoor wordt het menu zichtbaar. De eigenschap top wordt gezet op 0 zodat de header als het ware plakt aan de bovenkant. De display van de overlay wordt veranderd van none naar block zodat de overlay zichtbaar wordt. De animatie die de overlay zichtbaar maakt wordt geactiveerd.
 */
function show() {
    mainMenu.style.display = "flex";
    mainMenu.style.top = "0";
    overlay.style.display = "block";
    overlay.style.animation = "fadeInAnimation 1s ease";
}

/* De eigenschap top wordt gezet op -100% zodat de header omhoog beweegt. De display van de overlay wordt veranderd van block naar none zodat de overlay onzichtbaar wordt wordt. De animatie die de overlay onzichtbaar maakt wordt geactiveerd.
 */
function close() {
    mainMenu.style.top = "-100%";
    overlay.style.animation = "fadeOutAnimation 1s ease";
    setTimeout(function() {
        overlay.style.display = "none";
        // mainMenu.style.display = "none";
    }, 990);
}

/* zet de huidige pagina in de navbar op active, hierdoor wordt het element 'bold' in vergelijking met andere elementen */
// url var holds the relative path
var url = window.location.pathname;
// get the name of the file (e.g : home.php, berichten.php)
var currentFile = url.substring(url.lastIndexOf('/') + 1);
switch (currentFile) {
    case "berichten.php":
        document.getElementsByClassName("nav-message")[0].className += " nav-active";
        document.getElementsByClassName("nav-message")[1].className += " nav-active";
        break;
    case "gallerij.php":
        document.getElementsByClassName("nav-gallery")[0].className += " nav-active";
        document.getElementsByClassName("nav-gallery")[1].className += " nav-active";
        break;
    case "home.php":
        document.getElementsByClassName("nav-home")[0].className += " nav-active";
        document.getElementsByClassName("nav-home")[1].className += " nav-active";
        break;
    case "vliegroutes.php":
        // yet to add
        // document.getElementsByClassName("nav-flightroutes")[0].className += " nav-active";
        // document.getElementsByClassName("nav-flightroutes")[1].className += " nav-active";
        break;
}