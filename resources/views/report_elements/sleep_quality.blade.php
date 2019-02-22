<script type="text/javascript">
  google.charts.load("current", {packages:['corechart']});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ["Element", "Density", { role: "style" } ],
      ["Mon", 9, "#b87333"],
      ["Tue", 7, "silver"],
      ["Wed", 7, "gold"],
      ["Thu", 10, "color: #e5e4e2"],
      ["Fri", 8, "#b87333"],
      ["Sat", 6, "silver"],
      ["Sun", 10, "gold"]
    ]);

    var view = new google.visualization.DataView(data);
    view.setColumns([0, 1,
                     { calc: "stringify",
                       sourceColumn: 1,
                       type: "string",
                       role: "annotation" },
                     2]);

    var options = {
      width: 600,
      height: 400,
      bar: {groupWidth: "95%"},
      legend: { position: "none" },
    };
    var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
    chart.draw(view, options);
}
</script>

<div id="columnchart_values" style="width: 900px; height: 500px;"></div>
