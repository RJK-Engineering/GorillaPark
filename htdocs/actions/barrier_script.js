/*jslint node: true */
"use strict";

function closeBarrier() {
    
    document.getElementById("slagboom").className = "closed";
}

function openBarrier() {
    document.getElementById("slagboom").className = "open";
    setTimeout(closeBarrier, 5000);
}

function checkState() {
    
    setTimeout(checkState, 1000);
    
    xhttp.open("POST", "actions/check_barrier.php", true);
    xhttp.send();
    
}
checkState();

xhttp.onreadystatechange = function () {
    
};


