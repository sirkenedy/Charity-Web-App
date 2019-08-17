<!DOCTYPE html>
<html>
<head>
	<title>preview image</title>
</head>
<body>
<form>
	<input type="file" accept="image/*" onchange="loadFile(event)">
	<img id="output" style="width: 100px;height: 100px;" />
</form>

<script>
	var loadFile = function(event) {
		var output = document.getElementById('output');
		output.src = URL.createObjectURL(event.target.files[0]);
	}
</script>
</body>
</html>