@extends('layouts.app')

@section('content')
<div class="container" style="height: 100%;">
  <div class="grid" style="width: 60%; margin: auto; height: 100%; background-color: yellow;">
    <div class="grid__cell desk-4-1" style="background-color: orange; height: 100%;">
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
    <div class="grid__cell desk-4-3" style="background-color: green; height: 100%;">Right Side</div>
  </div>
</div>
@endsection
