@foreach($stress_data as $d)
<p>{{ $d->stress_level }}</p>
@endforeach

<script type="text/javascript">
  google.charts.load("current", {packages:['corechart']});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ["Day", "Stress"],
      @foreach($stress_data as $data)
        ["{{ $data->date }}", {{ $data->stress_level }}] @if(!$loop->last),@endif
      @endforeach
    ]);

    // var view = new google.visualization.DataView(data);
    // view.setColumns([0, 1,
    //                  { calc: "stringify",
    //                    sourceColumn: 1,
    //                    type: "string",
    //                    role: "annotation" },
    //                  2]);

    var options = {
      width: 600,
      height: 400,
      bar: {groupWidth: "95%"},
      legend: { position: "none" },
    };
    var chart = new google.visualization.LineChart(document.getElementById("stress_values"));
    chart.draw(data, options);
}
</script>

<div id="stress_values" style="width: 900px; height: 500px;"></div>
