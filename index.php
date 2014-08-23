<!doctype html>

<html>
<head>
<link rel="stylesheet" href="cal-heatmap.css" type="text/css">
<script type='text/javascript' src='d3.min.js'></script>
<script type='text/javascript' src='cal-heatmap.min.js'></script>


<title>A blank HTML5 page</title>
<meta charset="utf-8" />
</head>
<body>
	<center>
	<h1><br></h1>
	<div id="cal-heatmap"></div>
<script type="text/javascript">
	var cal = new CalHeatMap();
cal.init({
	domain: "month",
	subDomain: "x_day",
	data: "data.jsosn",
	cellSize: 30,
	cellPadding: 5,
	domainGutter: 40,
	range: 2,
	domainDynamicDimension: false,
	subDomainTextFormat: "%d",
	legend: [70, 75, 80, 85],
		itemName: "KG",

});
</script>

<?//=strtotime("23 August 2014")?>

</body>

</html>