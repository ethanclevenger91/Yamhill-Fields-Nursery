
for (let i = 0; i < 6; i++) {
    let plantInspectBackground = document.getElementsByClassName("plant__inspect-background")[i];

    let itemImage = document.getElementsByClassName("plant__background-image")[i];
    let itemImageZoomIn = document.getElementsByClassName("plant__zoom-in")[i];
    let plantZoomInContainer = document.getElementsByClassName("plant__zoom-in-container")[i];

    itemImage.addEventListener("mousemove", function () {
        updateZoomInImage(event, i);
    });
    plantInspectBackground.addEventListener("click", function () {
        toggleExamine(event, i);
    });
}

window.onload = checkBrowserWidth();
window.addEventListener("resize", checkBrowserWidth);


function checkBrowserWidth() {
    for (let i = 0; i < 6; i++) {
        if (window.innerWidth >= 1200) {
            if (document.getElementsByClassName("plant__inspect-background")[i].classList.contains("show") === false) {
                document.getElementsByClassName("plant__inspect-background")[i].classList.add("show");
            }
        } else {
            document.getElementsByClassName("plant__inspect-background")[i].classList.remove("show");
        }

        if (window.innerWidth < 1200) {
            document.getElementsByClassName("plant__zoom-in-container")[i].classList.remove("inspect");
        }
    }
}

function toggleExamine(event, plantNumber) {
    if (window.innerWidth >= 1200) {
        document.getElementsByClassName("plant__zoom-in-container")[plantNumber].classList.toggle("inspect");
    }
}

function updateZoomInImage(event, plantNumber) {
    let imageBaseX = 91;
    let imageBaseY = 73;

    let imageBaseCroppedX = 0;
    let imageBaseCroppedY = 0;

    let itemImageRect = document.getElementsByClassName("plant__background-image")[plantNumber].getBoundingClientRect();

    let mouseX = event.pageX - itemImageRect.left - window.pageXOffset;
    let mouseY = event.pageY - itemImageRect.top - window.pageYOffset;

    if (mouseX < 0) {
        mouseX = 0;
    }
    if (mouseX > 370) {
        mouseX = 370;
    }
    if (mouseY < 0) {
        mouseY = 0;
    }
    if (mouseY > 300) {
        mouseY = 300;
    }

    let updatedX = imageBaseX - imageBaseCroppedX - 0.5 * mouseX;
    let updatedY = imageBaseY - imageBaseCroppedY - 0.5 * mouseY;

    document.getElementsByClassName("plant__zoom-in")[plantNumber].style.backgroundPosition = updatedX + "px" + " " + updatedY + "px";
}