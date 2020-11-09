<!DOCTYPE html>
<html>
<head>
	<title>get</title>
</head>
<body>
  <p>Click the button to get the item value:</p>
<button onclick="readValue()">Get the item value</button>
<p id="demo"></p>
<script type="text/javascript">
	function readValue() {
  var x = localStorage.getItem("id");
  document.getElementById("demo").innerHTML = x;
}
</script>
</body>
</html>