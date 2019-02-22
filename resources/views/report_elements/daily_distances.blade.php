<script type="text/javascript">
  google.charts.load("current", {packages:['corechart']});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ["Session", "Distance", { role: "style" } ],
      @foreach($swim_data as $data)
        ["{{ $data->time }}", {{ $data->distance }}, 'blue'] @if(!$loop->last),@endif
      @endforeach
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
    var chart = new google.visualization.ColumnChart(document.getElementById("distance_values"));
    chart.draw(view, options);
}
</script>

<div id="distance_values" style="width: 900px; height: 500px;"></div>
