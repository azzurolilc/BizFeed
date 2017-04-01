<!DOCTYPE html>
<html>
<head>

  <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>

  <script src="https://download.affectiva.com/js/3.1/affdex.js" type="text/javascript"> </script>

  <script src="bootstrap/bootstrap-theme.min.css" type="text/css"> </script>
  <script src="bootstrap/bootstrap.min.css" type="text/css"> </script>
  <script src="bootstrap/bootstrap.min.js" type="text/javascript"> </script>


  <!--  -->
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="demo/css/bootstrap-darkly.min.css" />
  <link href="demo/css/demo.css" rel="stylesheet" type="text/css" />

  <!-- outside vendor files -->
  <script src="demo/js/vendor/jquery-2.1.4.js"></script>
  <script src="demo/js/vendor/d3.min.js"></script>

  <!-- demo files -->
  <script src="demo/js/run_demo.js"></script>
  <script src="https://download.affectiva.com/js/3.1/affdex.js"></script>

  <!--  -->
</head>


<style>
  div::-webkit-media-controls {
    display:none !important;
  }
</style>


<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8" id="affdex_elements" style="width:680/4px;height:480/4px;"></div>


      

      <div>
        <button id="start" onclick="onStart()">Start</button>
        <button id="stop" onclick="onStop()">Stop</button>
        <button id="reset" onclick="onReset()">Reset</button>

        <button id="reset" onclick="sayHelloWorld()">hello</button>
        <button id="reset" onclick="sayHiBack()">back</button>

      </div>
    </div>


    <!-- <div id="text-width"></div> -->
    <!-- <div id="lightbox"></div> -->
    <div id="demo-setup">
      <div class="row">
        <div class="col-md-12 text-center">
          <div id="facevideo-node"></div>
          <video id="myVideo" width="640" height="350" controls ><source src="mov_bbb.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
          </video>
        </div>
      </div>

      <div id="messages" class="row">
        <div class="col-md-6 col-md-offset-3 demo-message" id="msg-starting-webcam">
          <div class="alert alert-info" role="alert">Connecting to webcam...</div>
        </div>
        <div class="col-md-6 col-md-offset-3 demo-message" id="msg-webcam-failure">
          <div class="alert alert-danger" role="alert"><strong>Error: </strong>Failed to connect to webcam.</div>
        </div>
        <div class="col-md-6 col-md-offset-3 demo-message" id="msg-detector-status">
          <div class="alert alert-info" role="alert">Loading and starting the emotions detector...</div>
        </div>
        <div class="col-md-6 col-md-offset-3 demo-message" id="msg-initialized">
          <div class="alert alert-info" role="alert">Emotion detector initialized...Click to start the video</div>
      </div>
        </div>

      </div>
      

    </div>

    <div class="row" id="video-container">
      <div class="col-md-12 text-center">
        <div id="player" style="pointer-events: none"></div>
        <div id="svg-container">
          <div class="row">
            <div id="ul-wrapper" class="col-md-2">
              <ul id="nav">
                <li class="all buttons all-face all-box box-squared" id="all"><span>Show all</span></li>
                <li class="joy buttons smiling-face joy-box box-squared" id="joy" onClick="JSSDKDemo.responses(this.id)"><span>Joy</span></li>
                <li class="anger buttons angry-face anger-box box-squared" id="anger" onClick="JSSDKDemo.responses(this.id)"><span>Anger</span></li>
                <li class="disgust buttons disgusted-face disgust-box box-squared" id="disgust"  onClick="JSSDKDemo.responses(this.id)"><span>Disgust</span></li>
                <li class="contempt buttons contempt-face contempt-box box-squared" id="contempt"  onClick="JSSDKDemo.responses(this.id)"><span>Contempt</span></li>
                <li class="surprise buttons surprise-face surprise-box box-squared" id="surprise"  onClick="JSSDKDemo.responses(this.id)"><span>Surprise</span></li>
              </ul>
            </div>
            <div id="svg-wrapper" class="col-md-8 text-center">
              <svg id="svg-curve"></svg>
            </div>

            <div id="play-again" class="col-md-2">
              <div class="well">
                <p>Frame capture complete!</p>
                <p><small>Watch the video synchronized with your emotions.</small></p>
                <p>&nbsp;</p>
                <button id="btn-play-again" class="btn btn-primary">Ok, got it</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--  -->





    <h1>My  PHP page</h1>

    <?php
    echo "My first PHP script!";
    ?>

    <!-- php read local txt file and print it out in webpage -->
    <?php
    $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    echo fread($myfile,filesize("webdictionary.txt"));
    fclose($myfile);
    ?>


    <!-- use js to get the data through php and print it out in website -->
    <p id="demo"></p>

    <script>
    var data = <?php echo json_encode("45", JSON_HEX_TAG); ?>; //Don't forget the extra semicolon!
    document.getElementById("demo").innerHTML = data;

  </script>



  <script type="text/javascript">
    function sayHelloWorld() {
      var hello = "hello";
      var world = "world";

      window.location.href = "index2.php?w1=" + hello + "&w2=" + world;
    }

  </script>


  <!-- create a local txt file, open it, and write into it -->

  $myfile = fopen("testfile2.txt", "w")

  <?php
// function sayHiBack() {
   // Check if we have parameters w1 and w2 being passed to the script through the URL
  if (isset($_GET["w1"]) && isset($_GET["w2"])) {

      // Put the two words together with a space in the middle to form "hello world"
    $hello = $_GET["w1"] . " " . $_GET["w2"];
    echo "$hello ";
      // Print out some JavaScript with $hello stuck in there which will put "hello world" into the javascript.
    echo "<script language='text/javascript'>function sayHiFromPHP() { alert('Just wanted to say $hello!'); }</script>";

    $myfile = fopen("newfile2.txt", "w") or die("Unable to open file!");
    fwrite($myfile, $hello);
    fclose($myfile);
  }
// }

  ?>





  <button id="reset" onclick="sayHiFromPHP()">hi</button>

  
</body>

</html>
