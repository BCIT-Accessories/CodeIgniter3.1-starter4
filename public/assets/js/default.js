function edit() {
    var charImg = document.getElementById('charImg');
    var set = document.getElementById('sets');
    var setNum = set.options[set.selectedIndex].value;
    var path = "";
    switch (setNum) {
        case "0":
            path = "/assets/images/Default.png";
            break;
        case "1":
            path = "/assets/images/preset1.png";
            break;
        case "2":
            path = "/assets/images/preset2.png";
            break;
    }
    charImg.src = path;
}
