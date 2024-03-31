var audioplayed = false;
const estrogen = new Audio('./assets/Estrogen Heist SCRATCH.wav')

function audio(estrogen) {
	if(!estrogen.paused){
		return console.log("audio is already playing")
	}else{
		estrogen.currentTime = 0;
		estrogen.play()
		console.log('Audio played')
		audioplayed = true;
	}
}

window.addEventListener("touchstart", function() {
	audio(estrogen)
	console.log("TOUCHED")
});
window.addEventListener("click", function() {
	audio(estrogen)
	console.log("CLICKED")
});

function visitors() {
	const url = './counter.txt'
	fetch(url).then(r => r.text()).then(t => {const count = document.getElementById('visitors').innerHTML = 'Visitors: ' + t});
}
visitors()