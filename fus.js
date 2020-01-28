$(function() {
  $.ajax({
    url: "http://localhost/webtrack/chart_data.php",
    type: "GET",
    success: function(data) {
      chartData = data;
      var chartProperties = {
        caption: "Percentage profit comparison",
        xAxisName: "Company",
        yAxisName: "year4 %age profit",
        rotatevalues: "1",
        theme: "zune"
      };
      apiChart = new FusionCharts({
        
        type: "pie2d",
        renderAt: "chat-container",
        width: "500",
        height: "350",
        dataFormat: "json",
        dataSource: {
          chart: chartProperties,
          data: chartData
        }
      });
      apiChart.render();
    }
  });
});