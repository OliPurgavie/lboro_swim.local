<script type="text/javascript">
  google.charts.load("current", {packages:['corechart']});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['Day', 'Swim', 'Gym'],
        ['Mon', 10, 10],
        ['Tue', 10, 10],
        ['Wed', 20, 10],
        ['Thu', 10, 10],
        ['Fri', 10, 10],
        ['Sat', 10, 10],
        ['Sun', 10, 10]
      ]);

      var options = {
        width: 600,
        height: 400,
        legend: { position: 'none' },
        bar: { groupWidth: '75%' },
        isStacked: true,
      };

    var view = new google.visualization.DataView(data);
    view.setColumns([0,1,
                      { calc: "stringify",
                        sourceColumn: 1,
                        type: "string",
                        role: "annotation" },
                      2,
                      { calc: "stringify",
                        sourceColumn: 2,
                        type: "string",
                        role: "annotation" },]);


    var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
    chart.draw(view, options);
}
</script>

<div id="columnchart_values" style="width: 900px; height: 500px;"></div>
