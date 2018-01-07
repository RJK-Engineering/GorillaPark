/*jslint node: true */
"use strict";

var xhttp = new XMLHttpRequest();

function closeBarrier() {
    document.getElementById("slagboom").className = "closed";
}

function openBarrier() {
    document.getElementById("slagboom").className = "open";
    setTimeout(closeBarrier, 5000);
}

function checkState() {
    // xhttp.open("GET", "http://localhost/actions/checkbarrier.php", true);
    // xhttp.open("GET", "http://10.11.15.133/actions/checkbarrier.php", true);
    xhttp.open("GET", "http://10.11.15.121/actions/checkbarrier.php", true);
    xhttp.send();

    setTimeout(checkState, 2000);
}

checkState();

xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        if (this.responseText == '1') {
            openBarrier();
        }
    }
};
