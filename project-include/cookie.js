window.onload = function() {
    if (document.cookie != undefined && document.cookie.indexOf('backGround') != -1) {
        document.body.setAttribute("class", document.cookie.split('=')[1])
    }
}

function setBackImage(element) {
    var expirationTime = new Date()
    expirationTime.setMinutes(expirationTime.getMinutes() + 1)
    document.cookie = 'backGround=' + element.value + '; expires=' + expirationTime.toUTCString()
    document.body.setAttribute("class", element.value)

}