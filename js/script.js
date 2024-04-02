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

function Timetil(){
	var countDownDate = new Date("April 5, 2024 00:00:00").getTime();
	var x = setInterval(function() {

		// Get today's date and time
		var now = new Date().getTime();
	  
		// Find the distance between now and the count down date
		var distance = countDownDate - now;
	  
		// Time calculations for days, hours, minutes and seconds
		var days = Math.floor(distance / (1000 * 60 * 60 * 24));
		var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		var seconds = Math.floor((distance % (1000 * 60)) / 1000);
	  
		// Display the result in the element with id="demo"
		document.getElementById("release").innerHTML = "The Release is in " + days + " days " + hours + " hours "
		+ minutes + " minutes " + seconds + " seconds ";
	  
		// If the count down is finished, write some text
		if (distance < 0) {
		  clearInterval(x);
		  document.getElementById("release").innerHTML = "<a href='https://open.spotify.com/artist/5n2BT6qtJoparlqZtjcmO0'>OUT NOW ON SPOTIFY</a>";
		}
	  }, 1000);
}
Timetil()
visitors()