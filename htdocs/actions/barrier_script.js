/*jslint node: true */
"use strict";

function closeBarrier() {
    
    document.getElementById("slagboom").className = "closed";
}

function openBarrier() {
    document.getElementById("slagboom").className = "open";
    setTimeout(closeBarrier, 5000);
}



