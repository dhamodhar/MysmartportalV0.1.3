/**
 * Created by venkat.kurimeti on 2/1/2016.
 */
var capexChart = null, opexChart = null, tangibleChart = null, inTangibleChart = null, cumulativeChart = null;
var tabId = 0, previousTabId = "register";
var capex = [{"year":"Year 1", "value":800, "color": "#FEC514"},{"year":"Year 2", "value":864,"color": "#FEC514"},
    {"year":"Year 3", "value":933,"color": "#FEC514"},{"year":"Year 4", "value":1007,"color": "#FEC514"},
    {"year":"Year 5", "value":1088,"color": "#FEC514"}];
var opex = [{"year": "Year 1","value": 332,"color": "#2f4074"}, {"year": "Year 2","value": 356,"color": "#2f4074"},
    {"year": "Year 3","value": 381,"color": "#2f4074"}, {"year": "Year 4","value": 407,"color": "#2f4074"},
    {"year": "Year 5","value": 436,"color": "#2f4074"}];
var tangibleDataArray = [{"benifit": "Equipment Sold","value": 800,"color": "#67b7dc"}, {"benifit": "Utilization","value": 1142,"color": "#fdd400"},
    {"benifit": "Rentals","value": 332,"color": "#84b761"}, {"benifit": "Shrinkage","value": 240,"color": "#2f4074"}];
var intangibleDataArray = [{"benifit": "Nurse Time Saved","value": 3121,"color": "#67b7dc"}, {"benifit": "Technician Time Saved","value": 58254,"color": "#fdd400"}];
var cumulativeDataArray = [{"year": "Year 1","income": 22,"expenses": -10}, {"year": "Year 2","income": 592,"expenses": 571},
    {"year": "Year 3","income": 1165,"expenses": 571}, {"year": "Year 4","income": 1363,"expenses": 198},
    {"year": "Year 5","income": 1561,"expenses": 198}];
AmCharts.ready(function () {
alert("test");
    createCapitalExpenseChart();


});

function createCapitalExpenseChart(){
    capexChart = AmCharts.makeChart("capexChartDiv", {
        "type": "serial",
        "theme": "light",
        "marginRight": 70,
        "dataProvider": capex,
        "valueAxes": [{
            "axisAlpha": 0,
            "position": "left",
            "title": "",
            "labelsEnabled": false,
            "gridAlpha": 0
        }],
        "categoryAxis": {
            "gridAlpha": 0
        },
        "startDuration": 1,
        "graphs": [{
            "balloonText": "<b>[[category]]: [[value]]</b>",
            "fillColorsField": "color",
            "fillAlphas": 0.9,
            "lineAlpha": 0.2,
            "type": "column",
            "valueField": "value",
            "labelText" : "[[value]]",
            "labelPosition": "inside",
            "clustered": false
        }],
        "chartCursor": {
            "categoryBalloonEnabled": false,
            "cursorAlpha": 0,
            "zoomable": false
        },
        "categoryField": "year",
        "export": {
            "enabled": true
        }

    });
}
