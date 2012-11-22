<?php

$nextSong = ($song['Song']['id'] +1);
?>

<div class="row">
	<div class="span9">
		<h2><?php echo $song['Song']['title'];?> by <?php echo $song['Song']['artist']; ?></h2>
	</div>
	<div class="span3" style="text-align: right;">
		<a href="http://sflan.stuzzgaming.com/songs/edit/<?php echo $song['Song']['id']; ?>" class="btn btn-primary">Edit Song</a> 
		<?php echo $this->Html->link('View List', array('controller' => 'songs', 'action' => "index"), array('class="btn"')); ?>
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


	

    function onPlayerStateChange(event) {        
        if(event.data === 0) {          
			window.location = "http://sflan.stuzzgaming.com/songs/play"
        }
    }

</script>
