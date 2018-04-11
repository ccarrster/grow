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

		Math.radians = function(degrees) {
  			return degrees * Math.PI / 180;
		};
		function makeButton(x, y, callback, index, color, text, height, image){
			var width = height * 0.58;
			var result = '';
			var innerMultiplier = 0.95;
			var innerHeight = innerMultiplier * height;
			var innerWidth = innerMultiplier * width;
			var innerY = y + ((height - height * innerMultiplier) / 2.0);
			var innerX = x + ((width - width * innerMultiplier) / 2.0);
			for(i = -60; i <= 60; i += 60){
				result += '<div class="hex outerhex" style="background-color:'+color+'; position: absolute; top:'+y+'px; left:'+x+'px; transform: rotate('+i+'deg); height: '+height+'px; width: '+width+'px;" onclick="'+callback+'(\''+text+'\');"></div>';
			}
			result += '<div class="clipboard" style="-webkit-clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50);clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%); width:'+(innerHeight/Math.cos(Math.radians(30)))+'px; height:'+innerHeight+'px; position: absolute; top:'+innerY+'px; left:'+(innerX - (0.5 * innerWidth))+'px; background: url(\''+image+'\') no-repeat center; background-size: contain;"></div>';
			for(i = -60; i <= 60; i += 60){
				result += '<div class="hex outerhex" style="position: absolute; top:'+y+'px; left:'+x+'px; transform: rotate('+i+'deg); height: '+height+'px; width: '+width+'px;" onclick="'+callback+'(\''+text+'\');"></div>';
			}
			return result;
		}
	</script>
</head>
<body>
<div id="grid" style="position: relative;">
</div>
<script>
	document.getElementById("grid").innerHTML += makeButton(30, 10, 'logIt', 0, '#ff0000', 'Banana', 100, 'greenlarge.png');
	document.getElementById("grid").innerHTML += makeButton(30, 110, 'logIt', 1, '#00ff00', 'Meat', 100, 'blank.png');
	document.getElementById("grid").innerHTML += makeButton(116, 60, 'logIt', 2, '#0000ff', 'Sandwich', 100, 'orangeseed.png');
</script>

<!--div id="box" class="box" style="width: 300px; height: 300px;"><div class="shadowboard"></div><div class="clipboard" style="-webkit-clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);"></div><div class="handles"><div class="handle" data-handle="0" style="top: 0px; left: 140px;"><div class="delete-point"></div></div><div class="handle" data-handle="1" style="top: 70px; left: 280px;"><div class="delete-point"></div></div><div class="handle" data-handle="2" style="top: 210px; left: 280px;"><div class="delete-point"></div></div><div class="handle" data-handle="3" style="top: 280px; left: 140px;"><div class="delete-point"></div></div><div class="handle" data-handle="4" style="top: 210px; left: 0px;"><div class="delete-point"></div></div><div class="handle" data-handle="5" style="top: 70px; left: 0px;"><div class="delete-point"></div></div></div></div-->

</body>
</html>