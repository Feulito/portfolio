const links = ["#adeclarer",
                "#lehub",
                "#laby",
                "#proweb",
                "#junglewar",
                "",
                "documents/CVSebastienDuterte.pdf",
                "https://github.com/Feulito?tab=repositories"];

function initProjects() {
    var projets = document.getElementsByClassName('projet');
    var w = projets[0].clientWidth;

    for (var i = 0; i < projets.length; i += 1) {
        if (i < links.length) {
            projets[i].setAttribute('style', "height: "+ w + "px; cursor: pointer;");
            projets[i].setAttribute('onclick', 'location.href = "' + links[i] + '"');
            if (i == 6 || i == 7) {
                projets[i].setAttribute('onclick', 'location.target = "_blank"');
            }
        } else {
            projets[i].setAttribute('style', "height: "+ w + "px;");
        }
    }
}

window.onload = initProjects;