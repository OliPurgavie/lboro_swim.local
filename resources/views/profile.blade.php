@extends('layouts.app')

<style type="text/css">
#donut {
  width: 29rem;
  height: 29rem;
  margin: 0 auto;
}

path.color0 {
  fill: #1072b8;
}

path.color1 {
  fill: #35526b;
}
</style>

@section('content')
<div class="container" style="height: 100%;">
  <div class="grid" style="width: 60%; margin: auto; height: 100%;">
    <div class="grid__cell desk-4-1" style="height: 100%;">
      <div class="content-container" style="padding: 10px 20px;">
        <p style="margin: 0; font-size: 1.8rem; margin-bottom: 20px;">{{ $swimmer->name }}</p>
        <img src="{{ asset('img/Profile_Img.png') }}" style="max-width: 100%; min-width: 80%;">
        <table>
          <tr>
            <td>
              <p>Age:</p>
            </td>
            <td>
              <p>21</p>
            </td>
          </tr>
          <tr>
            <td>
              <p>D.O.B:</p>
            </td>
            <td>
              <p>21/04/1997</p>
            </td>
          </tr>
          <tr>
            <td>
              <p>Home Club:</p>
            </td>
            <td>
              <p>Royal Wolverhampton</p>
            </td>
          </tr>
        </table>
      </div>
    </div>
    <div class="grid__cell desk-4-3" style="height: 100%;">
      <div style="padding: 10px; height: 100%;">
        <div class="dropdown-holder">
          <p style="font-size: 1.6rem; margin: 0; margin-bottom: 20px;">Reports:</p>
          <div style="border-bottom: 1px solid gray;">
            <button class="collapsible">Week 15</button>
            <div class="content">
              <div id="donut" data-donut="46"></div>

              <script src="https://d3js.org/d3.v3.min.js"></script>
              <script type="text/javascript">
              $(document).ready(function() {
                var duration   = 500,
                    transition = 200;

                drawDonutChart(
                  '#donut',
                  $('#donut').data('donut'),
                  290,
                  290,
                  ".75rem"
                );

                function drawDonutChart(element, percent, width, height, text_y) {
                  width = typeof width !== 'undefined' ? width : 290;
                  height = typeof height !== 'undefined' ? height : 290;
                  text_y = typeof text_y !== 'undefined' ? text_y : "-.10em";

                  var dataset = {
                        lower: calcPercent(0),
                        upper: calcPercent(percent)
                      },
                      radius = Math.min(width, height) / 2,
                      pie = d3.layout.pie().sort(null),
                      format = d3.format(".0%");

                  var arc = d3.svg.arc()
                        .innerRadius(radius - 50)
                        .outerRadius(radius);

                  var svg = d3.select(element).append("svg")
                        .attr("width", width)
                        .attr("height", height)
                        .append("g")
                        .attr("transform", "translate(" + width / 2 + "," + height / 2 + ")");

                  var path = svg.selectAll("path")
                        .data(pie(dataset.lower))
                        .enter().append("path")
                        .attr("class", function(d, i) { return "color" + i })
                        .attr("d", arc)
                        .each(function(d) { this._current = d; }); // store the initial values

                  var text = svg.append("text")
                        .attr("text-anchor", "middle")
                        .attr("dy", text_y);

                  if (typeof(percent) === "string") {
                    text.text(percent);
                  }
                  else {
                    var progress = 0;
                    var timeout = setTimeout(function () {
                      clearTimeout(timeout);
                      path = path.data(pie(dataset.upper)); // update the data
                      path.transition().duration(duration).attrTween("d", function (a) {
                        // Store the displayed angles in _current.
                        // Then, interpolate from _current to the new angles.
                        // During the transition, _current is updated in-place by d3.interpolate.
                        var i  = d3.interpolate(this._current, a);
                        var i2 = d3.interpolate(progress, percent)
                        this._current = i(0);
                        return function(t) {
                          text.text( format(i2(t) / 100) );
                          return arc(i(t));
                        };
                      }); // redraw the arcs
                    }, 200);
                  }
                };

                function calcPercent(percent) {
                  return [percent, 100-percent];
                };
              });
              </script>
            </div>
          </div>



          <div style="border-bottom: 1px solid gray;">
            <button class="collapsible">Week 14</button>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>
          <div style="border-bottom: 1px solid gray;">
            <button class="collapsible">Week 13</button>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>
          <div style="border-bottom: 1px solid gray;">
            <button class="collapsible">Week 12</button>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>
          <div style="border-bottom: 1px solid gray;">
            <button class="collapsible">Week 11</button>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>
          <div style="border-bottom: 1px solid gray;">
            <button class="collapsible">Week 10</button>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>
          <div style="border-bottom: 1px solid gray;">
            <button class="collapsible">Week 9</button>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>
          <div style="border-bottom: 1px solid gray;">
            <button class="collapsible">Week 8</button>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>
          <div style="border-bottom: 1px solid gray;">
            <button class="collapsible">Week 7</button>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>
          <div style="border-bottom: 1px solid gray;">
            <button class="collapsible">Week 6</button>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>
          <div style="border-bottom: 1px solid gray;">
            <button class="collapsible">Week 5</button>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>
          <div style="border-bottom: 1px solid gray;">
            <button class="collapsible">Week 4</button>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>
          <div style="border-bottom: 1px solid gray;">
            <button class="collapsible">Week 3</button>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>
          <div style="border-bottom: 1px solid gray;">
            <button class="collapsible">Week 2</button>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>
          <div style="border-bottom: 1px solid gray;">
            <button class="collapsible">Week 1</button>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
  var coll = document.getElementsByClassName("collapsible");
  var i;
  var j;

  for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
      if (this.classList.contains("active")){
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight){
          content.style.maxHeight = null;
        } else {
          content.style.maxHeight = content.scrollHeight + "px";
        }
      } else {
        for (j = 0; j < coll.length; j++) {
          if (coll[j].classList.contains("active")) {
            coll[j].classList.toggle("active");
            var hideContent = coll[j].nextElementSibling;
            if (hideContent.style.maxHeight){
              hideContent.style.maxHeight = null;
            } else {
              hideContent.style.maxHeight = hideContent.scrollHeight + "px";
            }
          }
        }
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight){
          content.style.maxHeight = null;
        } else {
          content.style.maxHeight = content.scrollHeight + "px";
        }
      }
    });
  }
});
</script>
@endsection
