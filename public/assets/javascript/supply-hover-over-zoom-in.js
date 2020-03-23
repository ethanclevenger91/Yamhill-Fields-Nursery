
for (let i = 0; i < 5; i++) {
    let supplyInspectBackground = document.getElementsByClassName("supply__inspect-background")[i];
    let itemImage = document.getElementsByClassName("supply__background-image")[i];
    let itemImageZoomIn = document.getElementsByClassName("supply__zoom-in")[i];
    let supplyZoomInContainer = document.getElementsByClassName("supply__zoom-in-container")[i];

    itemImage.addEventListener("click", function () {
        toggleExamine(event, i);
    });

    itemImage.addEventListener("mousemove", function () {
        updateZoomInImage(event, i);
    });
    supplyInspectBackground.addEventListener("click", function () {
        toggleExamine(event, i);
    });
}

window.onload = checkBrowserWidth();
window.addEventListener("resize", checkBrowserWidth);


function checkBrowserWidth() {
    for (let i = 0; i < 5; i++) {
        if (window.innerWidth >= 1200) {
            if (document.getElementsByClassName("supply__inspect-background")[i].classList.contains("show") === false) {
                document.getElementsByClassName("supply__inspect-background")[i].classList.add("show");
            }
        } else {
            document.getElementsByClassName("supply__inspect-background")[i].classList.remove("show");
        }

        if (window.innerWidth < 1200) {
            document.getElementsByClassName("supply__zoom-in-container")[i].classList.remove("inspect");
        }
    }
}

function toggleExamine(event, supplyNumber) {
    for (let i = 0; i < 5; i++) {
        if(i !== supplyNumber){
            document.getElementsByClassName("supply__zoom-in-container")[i].classList.remove("inspect");
        }
    }
  
    if (window.innerWidth >= 1200) {
        document.getElementsByClassName("supply__zoom-in-container")[supplyNumber].classList.toggle("inspect");
    }
}

function updateZoomInImage(event, supplyNumber) {
    let imageBaseX = 91;
    let imageBaseY = 59;

    let imageBaseCroppedX = 0;
    let imageBaseCroppedY = 0;

    let itemImageRect = document.getElementsByClassName("supply__background-image")[supplyNumber].getBoundingClientRect();

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
    if (mouseY > 240) {
        mouseY = 240;
    }

    let updatedX = imageBaseX - imageBaseCroppedX - 0.5 * mouseX;
    let updatedY = imageBaseY - imageBaseCroppedY - 0.5 * mouseY;

    document.getElementsByClassName("supply__zoom-in")[supplyNumber].style.backgroundPosition = updatedX + "px" + " " + updatedY + "px";
}