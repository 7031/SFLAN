<div class="row">
	<div class="span10">
		<h2><?php echo $song['Song']['title'];?> by <?php echo $song['Song']['artist']; ?></h2>
	</div>
	<div class="span2" style="text-align: right;">
		<a href="http://sflan.stuzzgaming.com/songs/" class="btn">View list</a>
	</div>
</div>
<?php
$url = h($song['Song']['url']);
parse_str( parse_url($url, PHP_URL_QUERY ), $urlarray);
?>
<div id="player"></div>

<script type="text/javascript" src="http://www.youtube.com/player_api"></script>

<script>

    var player;
    function onYouTubePlayerAPIReady() {
        player = new YT.Player('player', {
          height: '529',
          width: '940',
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
