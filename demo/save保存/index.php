<!DOCTYPE html>
<html>
<head>

  <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>

  <script src="https://download.affectiva.com/js/3.1/affdex.js" type="text/javascript"> </script>

  


  <!--  -->
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="demo/css/bootstrap-darkly.min.css" />
  <link href="demo/css/demo.css" rel="stylesheet" type="text/css" />

  <!-- outside vendor files -->
  <script src="demo/js/vendor/jquery-2.1.4.js"></script>
  <script src="demo/js/vendor/d3.min.js"></script>

  <!-- demo files -->
  <!-- <script src="demo/js/run_demo.js"></script> -->
  <script src="https://download.affectiva.com/js/3.1/affdex.js"></script>


  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="./demo/css/demo.css">


  <!--  -->
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
        <li><a href="#">Mz. X</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Profile</a></li>
            <li><a href="#">History</a></li>
<!--             <li><a href="#">Foobar</a></li>
-->            <li role="separator" class="divider"></li>
<li><a href="#">Log Out</a></li>
</ul>
</li>
</ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>


<body>
  <div class="container-fluid" >
    <div class="row">
      <div class="col-md-8" id="affdex_elements" style="width:680/4px;height:480/4px;"></div>


      

      <!-- <div>
        <button id="start" onclick="onStart()">Start</button>
        <button id="stopbtn" onclick="onStop()">Stop</button>
        <button id="reset" onclick="onReset()">Reset</button>

        <button id="reset" onclick="sayHelloWorld()">hello</button>
        <button id="reset" onclick="sayHiBack()">back</button>

      </div> -->
    </div>


    <!-- <div id="text-width"></div> -->
    <!-- <div id="lightbox"></div> -->
    <div id="demo-setup">
      <div >

          <div class="col-sm-3 col-md-6">
          <iframe width="650" height="480" src="https://www.youtube.com/embed/B88UyrkryRw" frameborder="0" allowfullscreen></iframe> 
          </div>

        <div  class="col-sm-3 col-md-6" id="facevideo-node" >
          
        </div>

          <!-- <video id="myVideo" width="640" height="350" controls ><source src="mov_bbb.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
          </video> -->
          




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
                <!-- <li class="all buttons all-face all-box box-squared" id="all"><span>Show all</span></li> -->
                <li class="joy buttons  joy-box box-squared" id="joy" onClick="JSSDKDemo.responses(this.id)"><div style="text-align: center;">Joy</div></li>
                <li class="anger buttons  anger-box box-squared" id="anger" onClick="JSSDKDemo.responses(this.id)"><div style="text-align: center;">Anger</div></li>
                <li class="disgust buttons disgust-box box-squared" id="sadness"  onClick="JSSDKDemo.responses(this.id)"><div style="text-align: center;">Sad</div></li>
                <li class="contempt buttons contempt-box box-squared" id="contempt"  onClick="JSSDKDemo.responses(this.id)"><div style="text-align: center;">Contempt</div></li>
                <li class="surprise buttons surprise-box box-squared" id="surprise"  onClick="JSSDKDemo.responses(this.id)"><div style="text-align: center;">Surprise</div></li>
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



    

    <div id="someDiv" style="color:#000000"></div>

<div class="btn-group" role="group" aria-label="...">
  <button type="button" class="btn btn-default">Left</button>
  <button type="button" class="btn btn-default">Middle</button>
  <button type="button" class="btn btn-default">Right</button>


  <input id="someInput" type="text">
    <input type="button" class="btn btn-default" value="Enter your name" onClick="doStuff()">
    <input type="submit" class="btn btn-default" name="insert" value="Store Data" />
    <form action="stat.php" class="btn btn-default">
      <input type="submit" value="Check Statistic" />
    </form>
</div>


  </body>

  </html>

  <script>

    $(document).ready(function() {

      var isChrome = !!window.chrome && !!window.chrome.webstore;
      var isFirefox = typeof InstallTrigger !== 'undefined';
      var isOpera = (!!window.opr && !!opr.addons) || !!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0;

      if (isChrome || isFirefox || isOpera) {
        JSSDKDemo.init();
        JSSDKDemo.run();
      } else {
        JSSDKDemo.create_alert("incompatible-browser", "It appears that you are using an unsupported browser. Please try this demo on Chrome, Firefox, or Opera.");
      }
    });

    var xx;

    function doStuff()
    {
      var nameElement = document.getElementById("someInput");
      var theName = nameElement.value;
      document.getElementById("someDiv").innerHTML += theName;

    }




    var JSSDKDemo = (function() {

      xx = 471000;
      top = 10;
      bottom = 0;


      var detector = null;
      var capture_frames = false;
      var ready_to_accept_input = true;
      var finished_watching = false;
      var processed_frames = [ [], [], [], [], [] ];
      var frames_since_last_face = 0;
      var face_visible = true;

      var plot_window_ms = 20000;
      var video_cutoff_sec = 0;
      var playing = false;

      var time_left_sec = 0;

      var emotions = ["joy", "anger", "sadness", "contempt", "surprise"];
      var colors = ["rgba(255,99,132,1)", "rgba(54, 162, 235, 1)", "rgba(255, 206, 86, 1)", "rgba(75, 192, 192, 1)", "rgba(153, 102, 255, 1)"];
      var selected_emotion = "all";
      var svg_width = 720;
      var x_scale = d3.scale.linear().domain([0, 0]).range([0, svg_width]);
      var y_scale = d3.scale.linear().domain([100, 0]).range([2, 248]);
      var t = null;
      var cursor_interval = null;
      var uuid = null;

      var API_KEY = "AIzaSyCdQbLORhF7PGVJ7DG1tkoVJGgDYwA_o0M";

      var run = function() {

        var facevideo_node = document.getElementById("facevideo-node");
        detector = new affdex.CameraDetector(facevideo_node);
        detector.detectAllEmotions();

        detector.addEventListener("onWebcamConnectSuccess", function() {
          show_message("msg-starting-webcam");
        });

        detector.addEventListener("onWebcamConnectFailure", function() {
          show_message("msg-webcam-failure");
        });

        if (detector && !detector.isRunning) {
          detector.start();
        }

        uuid = guid();
        console.log("UUID: " + uuid);

        begin_capture();
        capture_frames = true;


        // get the video element inside the div with id "facevideo-node"
        var face_video = $("#facevideo-node video")[0];
        face_video.addEventListener("playing", function() {
          show_message("msg-detector-status");
        });
        
        detector.addEventListener("onInitializeSuccess", function() {
          show_message("msg-initialized");
        });
        
        detector.addEventListener("onImageResultsSuccess", function(faces, image, timestamp) {


            // get the time as close to the actual time of the frame as possible
            $(".demo-message").hide();
            //  account for time spent buffering
            var fake_timestamp = get_current_time_adjusted();

            if (capture_frames) {
              if (frames_since_last_face > 100 && face_visible) {
                face_visible = false;
                create_alert("no-face", "No face was detected. Please re-position your face and/or webcam.");
              }

              if (faces.length > 0) {
                if (!face_visible) {
                  face_visible = true;
                  fade_and_remove("#no-face");
                  $("#lightbox").fadeOut(1000);
                }
                frames_since_last_face = 0;
                emotions.forEach(function(val, idx) {
                  processed_frames[idx].push([fake_timestamp, faces[0].emotions[val]]);
                });
              } else {
                frames_since_last_face++;
                emotions.forEach(function(val, idx) {
                  processed_frames[idx].push([fake_timestamp, 0]);
                });
              }
              update_plot();
              var total = [0, 0, 0, 0, 0];

              if (processed_frames[0].length > 100) {
                // stop_capture();
                for (var i = 0; i < processed_frames[0].length; i++){
                  total[0] += parseFloat(processed_frames[0][i][1]).toFixed(2)/processed_frames[0].length;
                  total[1] += parseFloat(processed_frames[1][i][1]).toFixed(2)/processed_frames[0].length;
                  total[2] += parseFloat(processed_frames[2][i][1]).toFixed(2)/processed_frames[0].length;
                  total[3] += parseFloat(processed_frames[3][i][1]).toFixed(2)/processed_frames[0].length;
                  total[4] += parseFloat(processed_frames[4][i][1]).toFixed(2)/processed_frames[0].length;
                }
                alert(total);
                joymean = Math.floor(total[0]);
                angermean = Math.floor(total[1]);
                sadmean = Math.floor(total[2]);
                contemptmean = Math.floor(total[3]);
                surprisemean = Math.floor(total[4]);

              }
            }
          });
      };

      var begin_capture = function() {
        // take care of gap at beginning
        current_time = Date.now();
        x_scale = d3.scale.linear().domain([current_time - plot_window_ms,  current_time]).range([0, svg_width]);
        emotions.forEach( function(val, idx) {
          processed_frames[idx].push([current_time, 0]);
        });
        
        capture_frames = true;
        
        $("#video-container").show();
        init_plot();
      };

      var stop_capture = function() {
        capture_frames = false;
        detector.stop();
        $(".alert").hide();
        
        // focus on message
        $("#lightbox").fadeIn(750, function() {

            // make emotion buttons and player clickable
            //$("#ul-wrapper").css("pointer-events", "");
            $("#player").css("pointer-events", "");
            
            $("#play-again").fadeIn(500, function() {
              $("#lightbox").one("click", transition_to_playback);
            });
          });
      };


      var path = d3.svg.line().x(function(d, i) {
        return x_scale(d[0])
      }).y(function(d, i) {
        return y_scale(d[1])
      }).interpolate("basis");

      var init_plot = function() {
        var curve = d3.select("#svg-curve");

        var initial_data = [
            [ [0, 0] ], // joy
            [ [0, 0] ], // anger
            [ [0, 0] ], // disgust
            [ [0, 0] ], // contempt
            [ [0, 0] ]  // surprise
            ];

            curve.selectAll("path.curve").data(initial_data)
            .enter().append("svg:path")
            .attr("class", "curve")
            .attr("id", function(d, i){return emotions[i]})
            .attr("d", path).attr("stroke", function(d, i) { return colors[i] } )
            .attr("fill", "transparent")
            .attr("stroke-width","2px")
            .attr("stroke-opacity", "1");
          };

          var update_plot = function(message) {
            current_time = Date.now();
            x_scale = d3.scale.linear().domain([current_time - plot_window_ms,  current_time]).range([0, svg_width]);
            var curve = d3.select("#svg-curve");
            curve.selectAll("path.curve").data(processed_frames)
            .attr("d", path);
          };


          var text_time = function(time_sec) {
            return Math.floor(time_sec / 60) + ":" + ((time_sec % 60 < 10) ? ("0" + time_sec % 60) : time_sec % 60);
          };

          var guid = function() {
            function s4() {
              return Math.floor((1 + Math.random()) * 0x10000)
              .toString(16)
              .substring(1);
            }
            return s4() + s4() + '-' + s4() + '-' + s4() + '-' +
            s4() + '-' + s4() + s4() + s4();
          }

          var no_internet = function() {
            $(".alert").hide();
            create_alert("terminated", "It appears that you aren't connected to the Internet anymore. Please refresh the page and try again.");
          };

          var http_get_async = function(url, callback) {
            var xmlHttp = new XMLHttpRequest();
            xmlHttp.onreadystatechange = function() {
              if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                callback(xmlHttp.responseText);
              }
            };
            xmlHttp.open("GET", url, true);
            xmlHttp.send(null);
          };

          var get_current_time_adjusted = function() {
            return Date.now()
          };

          var create_alert = function(id, text) {
            $("#lightbox").fadeIn(500);
            $("<div></div>", {
              id: id,
              class: "alert alert-danger",
              display: "none",
              text: text,
            }).appendTo("#lightbox");
            $("#" + id).css({"text-align": "center", "z-index": 2});
            $("#" + id).fadeIn(1000);
          };

          var show_message = function(id) {
            $(".demo-message").hide();
            $(document.getElementById(id)).fadeIn("fast");
          };

          var fade_and_remove = function(id) {
            $(id).fadeOut(500, function() {
              this.remove();
            });
          };



          return {
            init: function() {
            // "show all" button
            $("#all").css("border", "3px solid #ffcc66");
            
            $("#all").click(function() {
                // set border
                if (selected_emotion !== "all") {
                  $("#" + selected_emotion).css("border", "");
                  $(this).css("border", "3px solid #ffcc66");
                }
                selected_emotion = "all";
                
                var curve = d3.select("#svg-curve");
                curve.selectAll("path.curve")
                .transition()
                .duration(400)
                .attr("stroke-opacity", 1.0);
              });
          },

          run: run,

          responses: function(clicked_id) {

            // set border
            if (selected_emotion !== clicked_id) {
              $("#" + selected_emotion).css("border", "");
              $("#" + clicked_id).css("border", "3px solid #ffcc66");
            }
            selected_emotion = clicked_id;
            
            var curve = d3.select("#svg-curve");
            curve.selectAll("path.curve")
            .transition()
            .duration(400)
            .attr("stroke-opacity", function(d,i) {
              if (this.id === clicked_id) {
                return 1.0;
              } else {
                return 0.2;
              }
            });
          },

          create_alert: create_alert
        };
      })();



      $(document).ready(function(){
        $('.button').click(function(){
          var clickBtnValue = $(this).val();
          var ajaxurl = 'insertajax.php',
          data =  {'action': clickBtnValue, name:     userName = document.getElementById('someDiv').innerHTML, joy: joymean, anger: angermean, sad: sadmean, contempt: contemptmean, surprise: surprisemean};
          $.post(ajaxurl, data, function (response) {
            // Response div goes here.
            alert("action performed successfully");
          });
        });

      });
    </script>