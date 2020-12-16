<!DOCTYPE html>
<html>

<head>


</head>


<body>
<input type="text" id='videoId'/> <button onclick='showVideo()'>Show Video With this ID</button><br/><br/><br/>


<video id="myVideo" controls></video>

<!-- Use HLS.js to support the HLS format in browsers. -->
<script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
<script>
  function showVideo(){
    // Replace with your asset's playback ID
    var playbackId = document.getElementById('videoId').value.trim();
    var url = "https://stream.mux.com/"+playbackId+".m3u8";
    var video = document.getElementById("myVideo");
    
    // Let native HLS support handle it if possible
    if (video.canPlayType('application/vnd.apple.mpegurl')) {
      video.src = url;
    } else if (Hls.isSupported()) {
      // HLS.js-specific setup code
      hls = new Hls();
      hls.loadSource(url);
      hls.attachMedia(video);
    }
  }
</script>
</body>


</html>