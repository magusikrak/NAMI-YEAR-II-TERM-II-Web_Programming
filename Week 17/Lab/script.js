let show = false;
function myClickEvent() {
    // alert("the button was pressed");
    if (!show) {
        document.getElementById(
            "container"
        ).innerHTML = `<h1>huhu haha huhu haha </h1>`;
    } else {
        document.getElementById("container").innerHTML = ``;
    }
    show = !show;
}
function myLoadEvent() {
    var element = document.getElementById("elementId");
    element.addEventListener("click", myClickEvent);
}
document.addEventListener("DOMContentLoaded", myLoadEvent);
