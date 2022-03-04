
var windowObjectReference = null; // global variable

function openRequestedPopup(url, windowName) {
    if(windowObjectReference == null || windowObjectReference.closed) {
    windowObjectReference = window.open(url, windowName, "popup");
    } else {
    windowObjectReference.focus();
    };
}
