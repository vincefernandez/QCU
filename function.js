let count = 0;
setInterval(function () {
    count++;
    if (count == 3) {
        document.getElementById("a").style.color = "blue";
        document.getElementById("a").style.width = "90%";
    }
    if (count == 6) {
        document.getElementById("a").style.width = '0';
        document.getElementById("a").style.color = "red";
        count = 0;
    }
}, 500)