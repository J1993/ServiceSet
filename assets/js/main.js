//--------- Setters ----------
setAlertPositionX('text');
setAlertPositionX('icon');


//---------- Getters and Methods. --------------

/*Method to get the screen resolution.
*@params param It will get the width or heigth of the current screen.
*/
function getScreen(param) {

    if (param == 'width') {
        return innerWidth;
    } else if (param == 'heigth') {
        return innerHeight;
    } else {
        console.log('Invalid parameter');
    }
}

/**
 * This function will set the discover more element to the center of the page.
 */
function setAlertPositionX(item) {

    //We obtain the width and heigth of the current screen.
    var widthScreen = innerWidth;//700
    var heigthScreen = innerHeight;//500

    /**
     * The condition can change depending of the element.
     */
    if (item == 'text') {

        var width = (getScreen('width') / 2) - 60 + "px";
        var heigth = (getScreen('heigth') - 50) + "px";

        document.getElementById('discover').style.top = heigth;
        document.getElementById('discover').style.left = width;

    } else if (item == "icon") {

        var width = (getScreen('width') / 2) - 10 + "px";
        var heigth = (getScreen('heigth') - 30) + "px";

        document.getElementById('expand-icon').style.top = heigth;
        document.getElementById('expand-icon').style.left = width;

    }
}

/**
 * This method will update the element when the screen is being resizable.
 */
function screenResize() {
    setAlertPositionX('text');
    setAlertPositionX('icon');
}


