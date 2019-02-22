<script type="text/javascript">
  google.charts.load("current", {packages:['corechart']});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ["Session", "Workload", { role: "style" } ],
      @foreach($swim_data as $data)
        ["{{ $data->time }}", {{ $data->workload }}, @if($data->intensity < 4)"white" @elseif($data->intensity < 7)"green" @elseif($data->intensity < 9)"orange" @else "red" @endif] @if(!$loop->last),@endif
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
    var chart = new google.visualization.ColumnChart(document.getElementById("swim_workload_values"));
    chart.draw(view, options);
}
</script>

<div id="swim_workload_values" style="width: 900px; height: 500px;"></div>
