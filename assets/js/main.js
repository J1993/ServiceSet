setAlertPositionX('text');
setAlertPositionX('icon');

function setAlertPositionX(item) {

    //We obtain the width and heigth of the current screen.
    var widthScreen = innerWidth;//700
    var heigthScreen = innerHeight;//500

    /**
     * The condition can change depending of the element.
     */
    if (item == 'text') {

        var width = (widthScreen / 2) - 60 + "px";
        var heigth = (heigthScreen - 50) + "px";

        document.getElementById('discover').style.top = heigth;
        document.getElementById('discover').style.left = width;

    } else if (item == "icon") {

        var width = (widthScreen / 2) - 10 + "px";
        var heigth = (heigthScreen - 30) + "px";

        document.getElementById('expand-icon').style.top = heigth;
        document.getElementById('expand-icon').style.left = width;

    }
}

function screenResize() {
    setAlertPositionX('text');
    setAlertPositionX('icon');
}


