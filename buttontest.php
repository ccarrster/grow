<!DOCTYPE html>
<html>
<head>
	<style>
		.hex{
			
		}
		.innerhex{
			
		}
		.outerhex{
			
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
			var innerMultiplier = 0.95;
			var innerHeight = innerMultiplier * height;
			var innerWidth = innerMultiplier * width;
			var innerY = y + ((height - height * innerMultiplier) / 2.0);
			var innerX = x + ((width - width * innerMultiplier) / 2.0);
			for(i = -60; i <= 60; i += 60){
				result += '<div class="hex outerhex" style="opacity: 0.5; background-color: '+color+'; position: absolute; top:'+y+'px; left:'+x+'px; transform: rotate('+i+'deg); height: '+height+'px; width: '+width+'px;" onclick="'+callback+'(\''+text+'\');"></div>';
			}
			for(i = -60; i <= 60; i += 60){
				result += '<div class="hex innerhex" style="background-color: '+color+'; position: absolute; top:'+innerY+'px; left:'+innerX+'px; transform: rotate('+i+'deg); height: '+innerHeight+'px; width: '+innerWidth+'px;" onclick="'+callback+'(\''+text+'\');"></div>';
			}
			return result;
		}
	</script>
</head>
<body>
<div id="grid" style="position: relative;">
</div>
<script>
	document.getElementById("grid").innerHTML += makeButton(30, 10, 'logIt', 0, '#ff0000', 'Banana');
	document.getElementById("grid").innerHTML += makeButton(30, 110, 'logIt', 1, '#00ff00', 'Meat');
	document.getElementById("grid").innerHTML += makeButton(116, 60, 'logIt', 2, '#0000ff', 'Sandwich');
</script>
</body>
</html>