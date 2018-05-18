<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {

var options = {
	animationEnabled: true,
	title: {
		text: "Oda Sayısına Göre Konut Talebi"
	},
	axisY: {
		title: "Konut Adedi",
		suffix: "",
		includeZero: false
	},
	axisX: {
		title: "Oda Sayisi"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.0#"%"",
		dataPoints: [
			{ label: "1+1", y: 1 },	
			{ label: "2+1", y: 3},	
			{ label: "3+1", y: 3 },
			{ label: "4+1", y: 1 },	
			
			
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