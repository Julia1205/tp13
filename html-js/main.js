function init() {
    const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
    let today  = new Date();
    let current_date = today.toLocaleDateString("fr-FR", options) + ' ' + today.toLocaleTimeString("fr-FR");
    let element = document.getElementById("date-container");
    element.innerText = current_date;
}


window.onload = function() {
    init();
};