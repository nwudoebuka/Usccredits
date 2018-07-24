"use strict";
window.chartColors = {
	red: 'rgb(255, 99, 132)',
	orange: 'rgb(255, 159, 64)',
	yellow: 'rgb(255, 205, 86)',
	green: 'rgb(75, 192, 192)',
	blues: 'rgba(3, 169, 245,.3)',
	blue: 'rgb(3, 169, 245,)',
	purple: 'rgb(153, 102, 255)',
	grey: 'rgb(231,233,237)',
	oranges: 'rgba(254,87,34,.4)',
	orange: 'rgb(254,87,34)',
};

window.randomScalingFactor = function() {
	return (Math.random() > 0.5 ? 1.0 : -1.0) * Math.round(Math.random() * 100);
}
var config = {
	type: 'line',
	data: {
		labels: ["1991", "1996", "2001", "2006", "2011", "2016"],
		datasets: [{
			label: "Unfilled",
			fill: true,
			backgroundColor: window.chartColors.oranges,
			borderColor: window.chartColors.orange,
			data: [
				randomScalingFactor(), 
				randomScalingFactor(), 
				randomScalingFactor(), 
				randomScalingFactor(), 
				randomScalingFactor(), 
				randomScalingFactor(), 
				randomScalingFactor()
			],
		}, 
		{
			label: "Filled",
			backgroundColor: window.chartColors.blues,
			borderColor: window.chartColors.blue,
			data: [
				randomScalingFactor(), 
				randomScalingFactor(), 
				randomScalingFactor(), 
				randomScalingFactor(), 
				randomScalingFactor(), 
				randomScalingFactor(), 
				randomScalingFactor()
			],
			fill: true,
		}]
	},
	options: {
		responsive: true,
		title:{
			display: false,
			text:'Chart.js Line Chart'
		},
		tooltips: {
			mode: 'index',
			intersect: false,
		},
		hover: {
			mode: 'nearest',
			intersect: true
		},
		scales: {
			xAxes: [{
				display: true,
				scaleLabel: {
					display: true,
					labelString: ' '
				}
			}],
			yAxes: [{
				display: true,
				scaleLabel: {
					display: true,
					labelString: ' '
				}
			}]
		}
	}
};

var piechart = {
	type: 'pie',
	data: {
		datasets: [
			{
				data: [40, 25, 35],
				backgroundColor: [
					"#fad7a4",
					"#fe9a7a",
					"#68cbf9",
				],
			},
			{
				data: [],
				backgroundColor: [
					"transparent",
					"transparent",
					"transparent",
				],
			}
		],
		labels: [
			"ETF",
			"Bound",
			"Stoke",
		]
	},
	options: {
		responsive: true,
		title: {
			display: false
		},
		legend: {
			display: true,
			position: 'right',
		},
	}
};

$(window).on('load',function() {
	if($('.linechart').hasClass('linecharts')){
		var ctx1 = document.getElementById("linechart-one").getContext("2d");
		window.myLine = new Chart(ctx1, config);
		var ctx3 = document.getElementById("linechart-three").getContext("2d");
		window.myLine = new Chart(ctx3, config);
	}
	if($('.piechart').hasClass('piecharts')){
		var ctx = document.getElementById("piechart-one").getContext("2d");
		window.myPie = new Chart(ctx, piechart);
	}
});