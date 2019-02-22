@extends('layouts.app')

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


              <div class="grid">
                <div class="grid__cell desk-4-2">
                  @include('report_elements.swim_workload')
                </div>
                <div class="grid__cell desk-4-2">

                  @include('report_elements.stress_levels')

                </div>
                <div class="grid__cell desk-4-4">
                  <p>Full Report</p>
                </div>
              </div>


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
