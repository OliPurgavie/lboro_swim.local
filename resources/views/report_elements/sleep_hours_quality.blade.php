<script type="text/javascript">
  google.charts.load("current", {packages:['corechart']});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ["Day", "Sleep Hours", "Sleep Quality"],

      ["Mon", 9, 9],
      ["Tue", 6, 5],
      ["Wed", 8, 8],
      ["Thu", 8, 8],
      ["Fri", 4, 10],
      ["Sat", 7, 6],
      ["Sun", 10, 9]
    ]);

    var options = {
      title: "Weekly Sleep",
      height: 400,
      seriesType: "bars",
      series: {1: {type: "line"}}
    };
    var chart = new google.visualization.ComboChart(document.getElementById('sleep_chart'));
    chart.draw(data, options);
  }
</script>

<div id="sleep_chart" style="width: 100%; height: auto;"></div>
