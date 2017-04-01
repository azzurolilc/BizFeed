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

<script>
      var detector = null;
jQuery(document).ready(function($){
  // SDK Needs to create video and canvas nodes in the DOM in order to function
  // Here we are adding those nodes a predefined div.
  var divRoot = $("#affdex_elements")[0];
  var width = 680/4;
  var height = 480/4;
  var faceMode = affdex.FaceDetectorMode.LARGE_FACES;
  //Construct a CameraDetector and specify the image width / height and face detector mode.
  detector = new affdex.CameraDetector(divRoot, width, height, faceMode);

  //Enable detection of all Expressions, Emotions and Emojis classifiers.
  detector.detectAllEmotions();
  detector.detectAllExpressions();
  detector.detectAllEmojis();
  detector.detectAllAppearance();

  //Add a callback to notify when the detector is initialized and ready for runing.
  detector.addEventListener("onInitializeSuccess", function() {
    log('#logs', "The detector reports initialized");
    //Display canvas instead of video feed because we want to draw the feature points on it
    $("#face_video_canvas").css("display", "block");
    $("#face_video").css("display", "none");


var vid = document.getElementById("myVideo"); 
vid.play();


  });

  //Add a callback to notify when camera access is allowed
  detector.addEventListener("onWebcamConnectSuccess", function() {
    log('#logs', "Webcam access allowed");

  });

  //Add a callback to notify when camera access is denied
  detector.addEventListener("onWebcamConnectFailure", function() {
    log('#logs', "webcam denied");
    console.log("Webcam access denied");
  });

  //Add a callback to notify when detector is stopped
  detector.addEventListener("onStopSuccess", function() {
    log('#logs', "The detector reports stopped");
    $("#results").html("");
  });

  //Add a callback to receive the results from processing an image.
  //The faces object contains the list of the faces detected in an image.
  //Faces object contains probabilities for all the different expressions, emotions and appearance metrics
  detector.addEventListener("onImageResultsSuccess", function(faces, image, timestamp) {
    $('#results').html("");
    log('#results', "Timestamp: " + timestamp.toFixed(2));
    log('#results', "Number of faces found: " + faces.length);
    if (faces.length > 0) {
      log('#results', "Appearance: " + JSON.stringify(faces[0].appearance));
      log('#results', "Emotions: " + JSON.stringify(faces[0].emotions, function(key, val) {
        return val.toFixed ? Number(val.toFixed(0)) : val;
      }));
      log('#results', "Expressions: " + JSON.stringify(faces[0].expressions, function(key, val) {
        return val.toFixed ? Number(val.toFixed(0)) : val;
      }));
      log('#results', "Emoji: " + faces[0].emojis.dominantEmoji);
      drawFeaturePoints(image, faces[0].featurePoints);
    }
  });

  //Draw the detected facial feature points on the image
  function drawFeaturePoints(img, featurePoints) {
    var contxt = $('#face_video_canvas')[0].getContext('2d');

    var hRatio = contxt.canvas.width / img.width;
    var vRatio = contxt.canvas.height / img.height;
    var ratio = Math.min(hRatio, vRatio);

    contxt.strokeStyle = "#FFFFFF";
    for (var id in featurePoints) {
      contxt.beginPath();
      contxt.arc(featurePoints[id].x,
        featurePoints[id].y, 2, 0, 2 * Math.PI);
      contxt.stroke();

    }
  }
});

function log(node_name, msg) {
  $(node_name).append("<span>" + msg + "</span><br />")
}

//function executes when Start button is pushed.
function onStart() {
  if (detector && !detector.isRunning) {
    $("#logs").html("");
    detector.start();
  }
  log('#logs', "Clicked the start button");


}

//function executes when the Stop button is pushed.
function onStop() {
  log('#logs', "Clicked the stop button");
  if (detector && detector.isRunning) {
    detector.removeEventListener();
    detector.stop();
  }

var vid = document.getElementById("myVideo"); 
vid.pause(); 


};

//function executes when the Reset button is pushed.
function onReset() {
  log('#logs', "Clicked the reset button");
  if (detector && detector.isRunning) {
    detector.reset();

    $('#results').html("");
  }
};
</script>

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


<video id="myVideo" width="320" height="176" controls loop>
  <source src="mov_bbb.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>


      <div class="col-md-4">
        <div style="height:15em;">
          <strong>EMOTION TRACKING RESULTS</strong>
          <div id="results" style="word-wrap:break-word;"></div>
        </div>
        <div>
          <strong>DETECTOR LOG MSGS</strong>
        </div>
        <div id="logs"></div>
      </div>
    </div>
    <div>
      <button id="start" onclick="onStart()">Start</button>
      <button id="stop" onclick="onStop()">Stop</button>
      <button id="reset" onclick="onReset()">Reset</button>

      <button id="reset" onclick="sayHelloWorld()">hello</button>
      <button id="reset" onclick="sayHiBack()">back</button>

      <a href="d3test.html">d3test</a>
      <h3>Affectiva JS SDK CameraDetector to track different emotions.</h3>
      <p>
        <strong>Instructions</strong>
        </br>
        Press the start button to start the detector.
        <br/> When a face is detected, the probabilities of the different emotions are written to the DOM.
        <br/> Press the stop button to end the detector.
      </p>

    </div>
  </div>


<!--  -->
<div id="text-width"></div>
<div id="lightbox"></div>
<div id="demo-setup">
    <div class="row">
        <div class="col-md-12 text-center">
            <div id="facevideo-node"></div>
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
            <div class="alert alert-info" role="alert">Emotion detector initialized...</div>
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
