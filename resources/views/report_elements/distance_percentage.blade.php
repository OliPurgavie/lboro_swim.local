<style type="text/css">
:root {
  background: #fff;
}

span#procent {
  display: block;
  position: absolute;
  left: 50%;
  top: 50%;
  font-size: 50px;
  transform: translate(-50%, -50%);
  color: #3949AB;
}

span#procent::after {
  content: '%';
}

.canvas-wrap {
  position: relative;
  width: 500px;
  height: 500px;
}
</style>

<script type="text/javascript">

window.onload = function() {
  var can = document.getElementById('canvas'),
      spanProcent = document.getElementById('procent'),
       c = can.getContext('2d');

  var posX = can.width / 2,
      posY = can.height / 2,
      fps = 1000 / 200,
      procent = 0,
      oneProcent = 360 / 100,
      result = oneProcent * 604;

  c.lineCap = 'round';
  arcMove();

  function arcMove(){
    var deegres = 0;
    var acrInterval = setInterval (function() {
      deegres += 1;
      c.clearRect( 0, 0, can.width, can.height );
      procent = deegres / oneProcent;

      spanProcent.innerHTML = procent.toFixed();

      c.beginPath();
      c.arc( posX, posY, 70, (Math.PI/180) * 270, (Math.PI/180) * (270 + 360) );
      c.strokeStyle = '#b1b1b1';
      c.lineWidth = '20';
      c.stroke();

      c.beginPath();
      c.strokeStyle = '#3949AB';
      c.lineWidth = '15';
      c.arc( posX, posY, 70, (Math.PI/180) * 270, (Math.PI/180) * (270 + deegres) );
      c.stroke();
      if( deegres >= result ) clearInterval(acrInterval);
    }, fps);

  }


}
</script>

<div class="canvas-wrap">
  <canvas id="canvas" width="500" height="500"></canvas>
  <span id="procent"></span>
</div>
