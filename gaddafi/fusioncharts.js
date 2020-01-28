var apiChart = new FusionCharts({
  type: "column2d",
  renderAt: "api-chart-container",
  width: "550",
  height: "350",
  dataFormat: "json",
  dataSource: {
    chart: chartProperties,
    data: chartData
  }
});
$(function() {
  $("#background-btn").click(function() {
    modifyBackground();
  });

  $("#canvas-btn").click(function() {
    modifyCanvas();
  });

  $("#dataplot-btn").click(function() {
    modifyDataplot();
  });

  apiChart.render();
});

function modifyBackground() {
  //to be implemented
}

function modifyCanvas() {
  //to be implemented
}

function modifyDataplot() {
  //to be implemented
}