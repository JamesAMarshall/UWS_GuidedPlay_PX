am4core.ready(function() {


// Create chart instance
var chart = am4core.create("chartdiv2", am4charts.XYChart);

var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
	var myObj;
	if(this.responseText)
	{
		myObj = logResponseText(this.responseText);
		chart.data = (myObj) ? myObj.result : null;
	}
	else
	{
		console.error("Graph data not set due to invalid responseText");
	}
}
};
xmlhttp.open("GET", "../php/requests/get_lightTempData.php", true);
xmlhttp.send(); 

// console.log(chart.data);

// Set up data source
// chart.dataSource.url = "../php/requests/graphData.php";
// chart.dataSource.parser = new am4core.JSONParser();
// chart.dataSource.parser.options.useColumnNames = true;
// chart.dataSource.load();
// chart.dataSource.events.on("done", function(ev) {
//   // Data loaded and parsed
// //   console.log(ev.target.data);
//   console.log("Success");
// });
// chart.dataSource.events.on("error", function(ev) {
//   console.log("Oopsy! Something went wrong");
// });


// Set input format for the dates
// chart.dateFormatter.inputDateFormat = "yyyy-MM-dd hh:mm:ss";

// Create axes
var dateAxis = chart.xAxes.push(new am4charts.ValueAxis());
var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());

// Create series
var series = chart.series.push(new am4charts.LineSeries());
series.dataFields.valueY = "temp";
series.dataFields.valueX = "plotNumber";
// console.log(series.dataFields);
series.tooltipText = "{Temp}"
series.strokeWidth = 2;
series.minBulletDistance = 15;

// // Drop-shaped tooltips
// series.tooltip.background.cornerRadius = 20;
// series.tooltip.background.strokeOpacity = 0;
// series.tooltip.pointerOrientation = "vertical";
// series.tooltip.label.minWidth = 40;
// series.tooltip.label.minHeight = 40;
// series.tooltip.label.textAlign = "middle";
// series.tooltip.label.textValign = "middle";

// Make bullets grow on hover
var bullet = series.bullets.push(new am4charts.CircleBullet());
bullet.circle.strokeWidth = 2;
bullet.circle.radius = 4;
bullet.circle.fill = am4core.color("#fff");

var bullethover = bullet.states.create("hover");
bullethover.properties.scale = 1.3;

// Make a panning cursor
// chart.cursor = new am4charts.XYCursor();
// chart.cursor.behavior = "panXY";
// chart.cursor.xAxis = dateAxis;
// chart.cursor.snapToSeries = series;

// Create vertical scrollbar and place it before the value axis
// chart.scrollbarY = new am4core.Scrollbar();
// chart.scrollbarY.parent = chart.leftAxesContainer;
// chart.scrollbarY.toBack();

// Create a horizontal scrollbar with previe and place it underneath the date axis
// chart.scrollbarX = new am4charts.XYChartScrollbar();
// chart.scrollbarX.series.push(series);
// chart.scrollbarX.parent = chart.bottomAxesContainer;

dateAxis.start = 0.79;
dateAxis.keepSelection = true;

// // Create axes
// var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
// dateAxis.dataFields.category = "date";

// // Create value axis
// var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());

// // Create series
// var series1 = chart.series.push(new am4charts.LineSeries());
// series1.dataFields.valueY = "temp";
// series1.dataFields.dateX = "date";
// series1.name = "Temp";
// series1.strokeWidth = 3;
// series1.tensionX = 0.7;
// series1.bullets.push(new am4charts.CircleBullet());

// // Add legend
// chart.legend = new am4charts.Legend();
});