<div id="player"></div>

<script type="text/javascript" src="http://www.youtube.com/player_api"></script>

<script>

    var player;
    function onYouTubePlayerAPIReady() {
        player = new YT.Player('player', {
          height: '100%',
          width: '100%',
          videoId: '<?php echo $urlarray['v']; ?>',
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
		
        });
		player.addEventListener("onError", "onPlayerError");
    }
	
    function onPlayerReady(event) {
        event.target.playVideo();
    }

	function onPlayerError(errorCode) {
	}
	
    function onPlayerStateChange(event) {        
        if(event.data === 0) {          
            window.location.reload();
        }
    }

</script>
