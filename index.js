function toggleAboutMe() {
    const element = document.getElementById("content-main");
    if (element.classList.contains("hide")) {
        element.classList.remove("hide");
        element.classList.add("unhide");
    } else {
        element.classList.remove("unhide");
        element.classList.add("hide");
    }
}