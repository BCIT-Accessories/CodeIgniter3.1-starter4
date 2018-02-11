function edit() {

var charImg = document.getElementById('charImg');
var set = document.getElementById('sets');

	if (set.value == "Default") {
		charImg.src = "./images/default.png";
	} else if (set.value == "Preset 1") {
		charImg.src = "./images/preset1.png";
	} else if (set.value == "Preset 2") {
		charImg.src = "./images/preset2.png";
	}
}
