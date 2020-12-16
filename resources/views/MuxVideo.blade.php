<!DOCTYPE html>
<html>

<head>
<style>
body {
  font: 14px "Open Sans", "Arial", sans-serif;
}

video {
  margin-top: 2px;
  border: 1px solid black;
}

.button {
  cursor: pointer;
  display: block;
  width: 160px;
  border: 1px solid black;
  font-size: 16px;
  text-align: center;
  padding-top: 2px;
  padding-bottom: 4px;
  color: white;
  background-color: darkgreen;
  text-decoration: none;
}

h2 {
  margin-bottom: 4px;
}

.left {
  margin-right: 10px;
  float: left;
  width: 160px;
  padding: 0px;
}

.right {
  margin-left: 10px;
  float: left;
  width: 160px;
  padding: 0px;
}

.bottom {
  clear: both;
  padding-top: 10px;
}
.overlay {
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    position: fixed;
    background: #22222259;
    display:none;
}

.overlay__inner {
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    position: absolute;
}

.overlay__content {
    left: 50%;
    position: absolute;
    top: 50%;
    transform: translate(-50%, -50%);
}

.spinner {
    width: 75px;
    height: 75px;
    display: inline-block;
    border-width: 2px;
    border-color: rgba(255, 255, 255, 0.05);
    border-top-color: #fff;
    animation: spin 1s infinite linear;
    border-radius: 100%;
    border-style: solid;
}

@keyframes spin {
  100% {
    transform: rotate(360deg);
  }
}
</style>
</head>
<script src="{{ asset('js/upchunk.js') }}"></script>
<script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
<body>
<!-- Learn about this code on MDN: https://developer.mozilla.org/en-US/docs/Web/API/MediaStream_Recording_API/Recording_a_media_element -->
<div class="overlay" id='loaderOverLay'>
    <div class="overlay__inner">
        <div class="overlay__content"><span class="spinner"></span></div>
    </div>
</div>
<br>
<div style="width: 100%; text-align:center;">
<div class="left">
  <div id="startButton" class="button">
    Start
  </div>
  <h2>Recording </h2>
  <video id="preview" width="160" height="120" autoplay muted></video>
</div>
<div class="right">
  <div id="stopButton" class="button">
    Stop
  </div>
  <h2>Preview</h2>
  <video id="recording" width="160" height="120" controls></video>
  <a id="downloadButton" class="button">
  </a>

  
</div>
</div>
<div class="bottom">
  <pre id="log"></pre>
</div>

<a id="videoResumeSub" class="button">
Submit Video Resume.  
</a>
</body>
<script>
let preview = document.getElementById("preview");
let recording = document.getElementById("recording");
let startButton = document.getElementById("startButton");
let stopButton = document.getElementById("stopButton");
let downloadButton = document.getElementById("downloadButton");
let logElement = document.getElementById("log");
let videoContent='';
let recordingTimeMS = 10000;
function log(msg) {
  logElement.innerHTML += msg + "\n";
}
function wait(delayInMS) {
  return new Promise(resolve => setTimeout(resolve, delayInMS));
}
function startRecording(stream, lengthInMS) {
  let recorder = new MediaRecorder(stream);
  let data = [];
 
  recorder.ondataavailable = event => data.push(event.data);
  recorder.start();
  log(recorder.state + " for " + (lengthInMS/1000) + " seconds...");
 
  let stopped = new Promise((resolve, reject) => {
    recorder.onstop = resolve;
    recorder.onerror = event => reject(event.name);
  });

  let recorded = wait(lengthInMS).then(
    () => recorder.state == "recording" && recorder.stop()
  );
 
  return Promise.all([
    stopped,
    recorded
  ])
  .then(() => data);
}
function stop(stream) {
  stream.getTracks().forEach(track => track.stop());
}
startButton.addEventListener("click", function() {
  navigator.mediaDevices.getUserMedia({
    video: true,
    audio: true
  }).then(stream => {
    preview.srcObject = stream;
    downloadButton.href = stream;
    preview.captureStream = preview.captureStream || preview.mozCaptureStream;
    return new Promise(resolve => preview.onplaying = resolve);
  }).then(() => startRecording(preview.captureStream(), recordingTimeMS))
  .then (recordedChunks => {
    let recordedBlob = new Blob(recordedChunks, { type: "video/mp4" });
	 
    videoContent=recordedBlob;
    recording.src = URL.createObjectURL(recordedBlob);
    downloadButton.href = recording.src;
    downloadButton.download = "RecordedVideo.mp4";
    
    log("Successfully recorded " + recordedBlob.size + " bytes of " +
        recordedBlob.type + " media.");
  })
  .catch(log);
}, false);stopButton.addEventListener("click", function() {
  stop(preview.srcObject);
}, false);
function blobToFile(theBlob, fileName){
    theBlob.lastModifiedDate = new Date();
    theBlob.name = fileName;
    return theBlob;
}

$('#videoResumeSub').click(function() {
    getUrlMux();
});

function getUrlMux(){
    if(videoContent==''){alert('Please record a video.'); return}   
    document.getElementById('loaderOverLay').style.display='block'; 
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        type: 'get',
        url: 'muxVideoLink',
        data: [],
        dataType: 'json',
        success: function(data) {
            console.log('data');
          console.log(data);
//          console.log(data.data.url); 
          uploadMux(data.data.url)
        },
        error: function(data) {
            console.log(data);
        }
      });
}






function uploadMux(linkUrl){
var file = new File([videoContent], "nameid.mp4");
console.log(file);
const url = linkUrl;
  const upload = UpChunk.createUpload({
    file,
    endpoint: url
  });
  upload.on('success', () => videoUploaded());

}
function videoUploaded(){
    videoContent='';
    document.getElementById('loaderOverLay').style.display='none';
    alert('Video Uploaded');
}

</script>
</html>