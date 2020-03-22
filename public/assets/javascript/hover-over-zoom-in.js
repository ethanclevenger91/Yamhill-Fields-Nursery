
let plantInspectBackground = document.getElementsByClassName("plant__inspect-background")[0];

let itemImage = document.getElementsByClassName("plant__background-image")[0];
let itemImageZoomIn = document.getElementsByClassName("plant__zoom-in")[0];
let plantZoomInContainer = document.getElementsByClassName("plant__zoom-in-container")[0];

itemImage.addEventListener("mousemove", updateZoomInImage);
plantInspectBackground.addEventListener("click", toggleExamine);


window.onload = checkBrowserWidth();
window.addEventListener("resize", checkBrowserWidth);


function checkBrowserWidth() {
    if (window.innerWidth >= 1200) {
        if (plantInspectBackground.classList.contains("show") === false) {
            plantInspectBackground.classList.add("show");
        }
    } else {
        plantInspectBackground.classList.remove("show");
    }

    if (window.innerWidth < 1200) {
        plantZoomInContainer.classList.remove("inspect");
    }
}

function toggleExamine() {
    if (window.innerWidth >= 1200) {
        plantZoomInContainer.classList.toggle("inspect");
    }
}

function updateZoomInImage(event) {

    let imageBaseX = 91;
    let imageBaseY = 73;

    let imageBaseCroppedX = 0;
    let imageBaseCroppedY = 0;

    let itemImageRect = itemImage.getBoundingClientRect();

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

    itemImageZoomIn.style.backgroundPosition = updatedX + "px" + " " + updatedY + "px";
}