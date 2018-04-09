<!DOCTYPE html>
<html>
<head>
	<style>
		.hexbutton{
			border-top: 1px solid #000000;
			border-bottom: 1px solid #000000;
			border-left: none;
			border-right: none;
			outline:none;
			padding: 0px;
			display: block;
			background: url("blank.png");
		}
	</style>
	<script>
		function logIt(index){
			console.log("Clicked "+index);
		}
		function makeButton(x, y, callback, index, color, text){
			var height = 100;
			var width = height * 0.58;
			var result = '';
			result += '<div style="background-color: '+color+'; position: absolute; top:'+y+'px; left:'+x+'px; transform: rotate(60deg);"><button class="hexbutton" style="height: '+height+'px; width: '+width+'px;" onclick="'+callback+'(\''+text+'\');"></button></div>';
			result += '<div style="background-color: '+color+'; position: absolute; top:'+y+'px; left:'+x+'px; transform: rotate(-60deg);"><button class="hexbutton" style="height: '+height+'px; width: '+width+'px;" onclick="'+callback+'(\''+text+'\');"></button></div>';
			result += '<div style="background-color: '+color+'; position: absolute; top:'+y+'px; left:'+x+'px;"><button class="hexbutton" style="height: '+height+'px; width: '+width+'px;" onclick="'+callback+'(\''+text+'\');">'+text+'</button></div>';
			return result;
		}
	</script>
</head>
<body>
<div id="grid" style="position: relative;">
</div>
<script>
	document.getElementById("grid").innerHTML += makeButton(30, 10, 'logIt', 0, 'red', 'Banana');
	document.getElementById("grid").innerHTML += makeButton(30, 110, 'logIt', 1, 'blue', 'Meat');
	document.getElementById("grid").innerHTML += makeButton(115, 60, 'logIt', 2, 'green', 'Sandwich');
</script>
</body>
</html>