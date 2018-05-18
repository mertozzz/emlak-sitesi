<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {

var options = {
	animationEnabled: true,
	title: {
		text: "Konut Türüne Göre Konut Talebi"
	},
	axisY: {
		title: "Konut Adedi",
		suffix: "",
		includeZero: false
	},
	axisX: {
		title: "Konut Türü"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.0#"%"",
		dataPoints: [
			{ label: "Daire", y: 5 },	
			{ label: "Residence", y: 1 },	
			{ label: "Villa", y: 1 },
			{ label: "Köşk", y: 1 },	
			
			
		]
	}]
};
$("#chartContainer").CanvasJSChart(options);

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
</body>
</html>