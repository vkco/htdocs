<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>сlock</title>
  <link rel="stylesheet" href="CSS/style_clock_2_2.css">
</head>

<body>

<div class="сlock">

  <div class="digital" style="--clr:#ff2972;">
    <div class="screen" data-text="hours">
      <div class="time">
        <div id="hour"></div>
      </div>
    </div>
</div>

  <div class="digital" style="--clr:#fee800;">
    <div class="screen" data-text="minutes">
      <div class="time">
        <div id="minutes"></div>
      </div>
    </div>
</div>

  <div class="digital" style="--clr:#04fc43;">
    <div class="screen" data-text="second">
      <div class="time">
        <div id="second"></div>
      </div>
    </div>
</div>

<div class="digital">
  <div class="box" id="hr" style="--clr:#04fc43"></div>
  <div class="box" id="hr" style="--clr:#fee800"></div>
  <div class="box" id="hr" style="--clr:#04fc43"></div>
  <div id="ampm"> </div>
</div>

<script>
let hours = document.getElementById('hour');
let minutes = document.getElementById('minutes');
let second = document.getElementById('second');
let ampm = document.getElementById('ampm');

setInterval(()=>{
  let h = new Date().getHours();
  let m = new Date().getMinutes();
  let s = new Date().getSeconds();

var am = h >=12 ? 'pm' : 'am';

// convert 24hts Clock to 12hours clock
if (h > 12 ){
  h = h -12;
}
// add zero before single digital number
h = (h < 10) ? "0" + h : h
m = (m < 10) ? "0" + m : m
s = (s < 10) ? "0" + s : s


  hours.innerHTML = h;
  minutes.innerHTML = m;
  second.innerHTML = s;
  ampm.innerHTML = am;

})

</script>

</body>
</html>
