<!DOCTYPE html>
<html>
<head>

  <title>eAd</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="./demo/css/stat.css">

  <title></title>
  <script src="http://d3js.org/d3.v3.min.js" language="JavaScript"></script>
  <script src="./demo/js/liquidFillGauge.js" language="JavaScript"></script>


</head>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" 
      data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    
    <a class="navbar-brand" href="#">
      <img src="logo2.png" height="45px"></img>
    </a>
    <a class="navbar-brand" href="#">
      <p style="display:inline">Orgnization Y</p>
    </a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
<!--         <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
  <li><a href="#">Link</a></li> -->
<!--         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li> -->
      </ul>
<!--       <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form> -->
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Hello, Y.Admin</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Profile</a></li>
            <li><a href="#">History</a></li>
<!--             <li><a href="#">Foobar</a></li>
-->            <li role="separator" class="divider"></li>
<li><a href="login.html">Log Out</a></li>
</ul>
</li>
</ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>




<body>
<br/>

<p class="lead" margin="50px">====== Summary of your video clips ======</p>
<div id='dbdatavideo1' style="color:#ffffff">

<?php 

$host = "localhost"; 
$user = "dingwang"; 
$pass = "1115"; 
$db = "testdb"; 

$con = pg_connect("host=$host dbname=$db user=$user password=$pass")
    or die ("Could not connect to server\n"); 

$query = "SELECT * FROM COMPANY123 LIMIT 1 OFFSET 45"; 

$rs = pg_query($con, $query) or die("Cannot execute query: $query\n");

while ($row = pg_fetch_row($rs)) {
  echo "$row[4] $row[5] $row[6] $row[7] $row[8]\n";
}

pg_close($con); 

?>
</div>


<div id='dbdatavideo2' style="color:#ffffff">

<?php 

$host = "localhost"; 
$user = "dingwang"; 
$pass = "1115"; 
$db = "testdb"; 

$con = pg_connect("host=$host dbname=$db user=$user password=$pass")
    or die ("Could not connect to server\n"); 

$query = "SELECT * FROM COMPANY123 LIMIT 1 OFFSET 46"; 

$rs = pg_query($con, $query) or die("Cannot execute query: $query\n");

while ($row = pg_fetch_row($rs)) {
  echo "$row[4] $row[5] $row[6] $row[7] $row[8]\n";
}

pg_close($con); 

?>
</div>


<div id='dbdatavideo3' style="color:#ffffff">

<?php 

$host = "localhost"; 
$user = "dingwang"; 
$pass = "1115"; 
$db = "testdb"; 

$con = pg_connect("host=$host dbname=$db user=$user password=$pass")
    or die ("Could not connect to server\n"); 

$query = "SELECT * FROM COMPANY123 LIMIT 1 OFFSET 47"; 

$rs = pg_query($con, $query) or die("Cannot execute query: $query\n");

while ($row = pg_fetch_row($rs)) {
  echo "$row[4] $row[5] $row[6] $row[7] $row[8]\n";
}

pg_close($con); 

?>
</div>
  <table>

    <tr>
      <td>
        <h2 align="center">
          Videos
        </h2>
      </td>
      <td>
        <h2 align="center">Concentration</h2>
      </td>
      <td>
        <h2 align="center">Finished Watching</h2>
      </td>
      <td>
        <h2 align="center">Emotion Presented</h2>
      </td>
    </tr>

    <tr>
      <td>
        <img width="70%" class="imgsize" align='center' src="https://img.youtube.com/vi/B88UyrkryRw/sddefault.jpg" />
      </td>
      <td>
        <svg id="fillgauge1" onclick="gauge1.update(NewValue());"></svg>
      </td>
      <td>
        <svg id="fillgauge2" onclick="gauge2.update(NewValue());"></svg>
      </td>
      <td>
          <canvas id="myChart1" width="300" height="300"></canvas>
      </td>
    </tr>

    <tr>
      <td>
        <img width="70%" class="imgsize" src="https://img.youtube.com/vi/qA6HLeGw8xg/sddefault.jpg" ></img>
      </td>
      <td>
        <svg id="fillgauge3" onclick="gauge3.update(NewValue());"></svg>
      </td>
      
      <td>
      <svg id="fillgauge4"  onclick="gauge4.update(NewValue());"></svg>
      </td>
      <td>
          <canvas id="myChart2" width="300" height="300"></canvas>
      </td>
    </tr>

    <tr>
      <td>
        <img id="watched" width="70%" class="imgsize"  src="https://img.youtube.com/vi/tbzigjiQ45g/sddefault.jpg"></img>
      </td>
      <td>
        <svg id="fillgauge5" onclick="gauge5.update(NewValue());"></svg>
      </td>
      <td>
        <svg id="fillgauge6"  onclick="gauge6.update(NewValue());"></svg>
      </td>
      <td>
          <canvas id="myChart3" width="300" height="300"></canvas>
      </td>
    </tr>


  </table>




<script>

var ddd = document.getElementById("dbdatavideo1").innerHTML;
var res = ddd.split(" ");


var ctx = document.getElementById("myChart1");
var myChart = new Chart(ctx, {
    type: 'polarArea',
    data: {
        // labels: ["Joy", "Anger", "Sad", "Contempt", "Surprise"],
        datasets: [{
            label: 'Emotion Score',
            data: [parseInt(res[0]), parseInt(res[1]), parseInt(res[2]), parseInt(res[3]), parseInt(res[4])],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            // yAxes: [{
            //     ticks: {
            //         beginAtZero:true
            //     }
            // }]
            xAxes: [{
                display: false
            }]
        }
    }
});
// var chartInstance = new Chart(ctx, {
//     type: 'line',
//     data: data,
//     options: {
//         responsive: false
//     }
// });
</script>

<script>

var ddd = document.getElementById("dbdatavideo2").innerHTML;
var res = ddd.split(" ");


var ctx = document.getElementById("myChart2");
var myChart = new Chart(ctx, {
    type: 'polarArea',
    data: {
        // labels: ["Joy", "Anger", "Sad", "Contempt", "Surprise"],
        datasets: [{
            data: [parseInt(res[0]), parseInt(res[1]), parseInt(res[2]), parseInt(res[3]), parseInt(res[4])],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            // yAxes: [{
            //     ticks: {
            //         beginAtZero:true
            //     }
            // }]
            xAxes: [{
                display: false
            }]
        }
    }
});
// var chartInstance = new Chart(ctx, {
//     type: 'line',
//     data: data,
//     options: {
//         responsive: false
//     }
// });
</script>


<script>

var ddd = document.getElementById("dbdatavideo3").innerHTML;
var res = ddd.split(" ");


var ctx = document.getElementById("myChart3");
var myChart = new Chart(ctx, {
    type: 'polarArea',
    data: {
        // labels: ["Joy", "Anger", "Sad", "Contempt", "Surprise"],
        datasets: [{
            label: 'Emotion Score',
            data: [parseInt(res[0]), parseInt(res[1]), parseInt(res[2]), parseInt(res[3]), parseInt(res[4])],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            // yAxes: [{
            //     ticks: {
            //         beginAtZero:true
            //     }
            // }]
            xAxes: [{
                display: false
            }]
        }
    }
});
// var chartInstance = new Chart(ctx, {
//     type: 'line',
//     data: data,
//     options: {
//         responsive: false
//     }
// });
</script>


<script language="JavaScript">
  window.onload = function(){
    var gauge1 = loadLiquidFillGauge("fillgauge1", 55);
    var config2 = liquidFillGaugeDefaultSettings();
    config2.textColor = "rgb(250,128,114)";
    config2.waveColor = "rgb(250,173,114)";
    config2.circleColor = "rgb(250,173,114)";
    config2.waveTextColor = "rgb(250,218,114)";
    // config1.circleColor = "#FF7777";
    // config1.textColor = "#FF4444";
    // config1.waveTextColor = "#FFAAAA";
    // config1.waveColor = "#FFDDDD";
    // config1.circleThickness = 0.2;
    // config1.textVertPosition = 0.2;
    // config1.waveAnimateTime = 1000;
    var gauge2= loadLiquidFillGauge("fillgauge2", 28, config2);
    var config3 = liquidFillGaugeDefaultSettings();
    config3.textColor = "rgb(135,206,235)";
    config3.waveColor = "rgb(135,172,235)";
    config3.circleColor = "rgb(135,172,235)";
    config3.waveTextColor = "rgb(135,139,235)";
    // config2.circleColor = "#D4AB6A";
    // config2.textColor = "#553300";
    // config2.waveTextColor = "#805615";
    // config2.waveColor = "#AA7D39";
    // config2.circleThickness = 0.1;
    // config2.circleFillGap = 0.2;
    // config2.textVertPosition = 0.8;
    // config2.waveAnimateTime = 2000;
    // config2.waveHeight = 0.3;
    // config2.waveCount = 1;
    var gauge3 = loadLiquidFillGauge("fillgauge3", 60.1, config3);
    var config4 = liquidFillGaugeDefaultSettings();
    config4.textColor = "rgb(135,206,235)";
    config4.waveColor = "rgb(135,172,235)";
    config4.circleColor = "rgb(135,172,235)";
    config4.waveTextColor = "rgb(135,139,235)";
    // config3.textVertPosition = 0.8;
    // config3.waveAnimateTime = 5000;
    // config3.waveHeight = 0.15;
    // // config3.waveAnimate = false;
    // config3.waveOffset = 0.25;
    // config3.valueCountUp = false;
    // config3.displayPercent = false;
    var gauge4 = loadLiquidFillGauge("fillgauge4", 50, config4);
    var config5 = liquidFillGaugeDefaultSettings();
    config5.textColor = "rgb(152,251,152)";
    config5.waveColor = "rgb(152,251,185)";
    config5.circleColor = "rgb(152,251,185)";
    config5.waveTextColor = "rgb(152,251,217)";
    // config4.circleThickness = 0.15;
    // config4.circleColor = "#808015";
    // config4.textColor = "#555500";
    // config4.waveTextColor = "#FFFFAA";
    // config4.waveColor = "#AAAA39";
    // config4.textVertPosition = 0.8;
    // config4.waveAnimateTime = 1000;
    // config4.waveHeight = 0.05;
    // // config4.waveAnimate = true;
    // config4.waveRise = false;
    // config4.waveHeightScaling = false;
    // config4.waveOffset = 0.25;
    // config4.textSize = 0.75;
    // config4.waveCount = 3;
    var gauge5 = loadLiquidFillGauge("fillgauge5", 60.44, config5);
    var config6 = liquidFillGaugeDefaultSettings();
    config6.textColor = "rgb(152,251,152)";
    config6.waveColor = "rgb(152,251,185)";
    config6.circleColor = "rgb(152,251,185)";
    config6.waveTextColor = "rgb(152,251,217)";

    // config5.circleThickness = 0.15;
    // config5.circleColor = "#6DA398";
    // config5.textColor = "#0E5144";
    // config5.waveTextColor = "#6DA398";
    // config5.waveColor = "#246D5F";
    // config5.textVertPosition = 0.52;
    // config5.waveAnimateTime = 5000;
    // config5.waveHeight = 0;
    // // config5.waveAnimate = false;
    // config5.waveCount = 2;
    // config5.waveOffset = 0.25;
    // config5.textSize = 1.2;
    // config5.minValue = 30;
    // config5.maxValue = 150
    // config5.displayPercent = false;
    var gauge6 = loadLiquidFillGauge("fillgauge6", 100, config6);

    function NewValue(){
      if(Math.random() > .5){
        return Math.round(Math.random()*100);
      } else {
        return (Math.random()*100).toFixed(1);
      }
    }

  // your code here
}

</script>

</body>
</html>

