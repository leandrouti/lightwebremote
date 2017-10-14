<!DOCTYPE html>
<html>
<style>
.btn{
	height: 20em;
	width: 10em;
}
</style>

<body>

<div id="demo">
<button class="btn" type="button" onclick="lightoff()">Light OFF</button>
<button class="btn" type="button" onclick="lighton()">Light ON</button>
<button class="btn" type="button" onclick="lightbright()">Light Bright</button>
<button class="btn" type="button" onclick="lightdark()">Light Dark</button>
<button class="btn" type="button" onclick="lightwhite()">Light White</button>
<button class="btn" type="button" onclick="lightwarm()">Light Warm</button>


</div>

<script>
function lightoff(){
	console.log("lightoff");
	var xhttp = new XMLHttpRequest();
	xhttp.open("GET", "./lightdown.php", true);
	xhttp.send();
}

function lighton(){
	console.log("lighton");
	var xhttp = new XMLHttpRequest();
	xhttp.open("GET", "./lightup.php", true);
	xhttp.send();
}

function lightbright(){
	console.log("lightbright");
	var xhttp = new XMLHttpRequest();
	xhttp.open("GET", "./lightbright.php", true);
	xhttp.send();
}

function lightdark(){
	console.log("lightdark");
	var xhttp = new XMLHttpRequest();
	xhttp.open("GET", "./lightdark.php", true);
	xhttp.send();
}

function lightwhite(){
	console.log("lightwhite");
	var xhttp = new XMLHttpRequest();
	xhttp.open("GET", "./lightwhite.php", true);
	xhttp.send();
}

function lightwarm(){
	console.log("lightwarm");
	var xhttp = new XMLHttpRequest();
	xhttp.open("GET", "./lightwarm.php", true);
	xhttp.send();
}

</script>

</body>
</html>

