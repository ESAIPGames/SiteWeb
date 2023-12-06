function menu() {
    var menuElement = document.getElementById("menu");
    var menuDisplayStyle = window.getComputedStyle(menuElement).getPropertyValue("display");
    console.log(menuDisplayStyle);

    if (menuDisplayStyle === "none") {
        menuElement.style.display = "block";
    } else {
        menuElement.style.display = "none";
    }
}