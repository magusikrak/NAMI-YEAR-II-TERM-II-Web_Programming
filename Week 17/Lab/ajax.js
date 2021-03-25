let show = false;
const myClickEvent = () => {
    if (show) {
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.open("GET", "/page.php", true);
        xmlHttp.onreadystatechange = () => {
            if (xmlHttp.readyState > 3) {
                // alert(xmlHttp.responseText);
                document.getElementById("container").innerHTML =
                    xmlHttp.responseText;
            }
        };
        xmlHttp.send();
    } else {
        document.getElementById("container").innerHTML = "";
    }
    show = !show;
};
function myLoadEvent() {
    var element = document.getElementById("elementId");
    element.addEventListener("click", myClickEvent);
}
document.addEventListener("DOMContentLoaded", myLoadEvent);
