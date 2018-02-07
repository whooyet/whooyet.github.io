<?php
	if (isset($_GET['search'])){
		$url = "https://api.soundcloud.com/tracks.json?client_id=ad3e64a889ad85c64a4f5eee439c9771&q=".urlencode($_GET['search']);

		$tracks = file_get_contents($url);
		$tracks = json_decode($tracks, true);
		
		$volume = isset($_GET['vol']) ? $_GET['vol']*10 : 100;
		$seek = isset($_GET['seek']) ? $_GET['seek']*1000 : 0;
		$trackNum = isset($_GET['track']) ? $_GET['track'] : 0;
		
		if(count($tracks) <= $trackNum) {
			$trackNum = sizeof($tracks) - 1;
		}
		
		echo('<iframe width="100%" height="100%" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/'.$tracks[$trackNum]['id'].'&amp;color=ff5500&amp;auto_play=true&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>');
	}
?>
<script src="https://w.soundcloud.com/player/api.js" type="text/javascript"></script>
<script type="text/javascript">
  (function(){
	var widget = SC.Widget(document.querySelector("iframe"));
	widget.bind(SC.Widget.Events.READY, function() {
		widget.setVolume(<?php echo $volume;?>);
	});
	widget.bind(SC.Widget.Events.PLAY_PROGRESS, function() {
		widget.seekTo(<?php echo $seek;?>);
		widget.getPosition(function(position) {
			if(position == <?php echo $seek;?>){
				widget.unbind(SC.Widget.Events.PLAY_PROGRESS);
			}
		});
	});
  }());
</script>