<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />

<!-- Website Design By: www.happyworm.com -->
<title>Demo : jPlayer as an audio playlist player</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="skin/pink.flag/jplayer.pink.flag.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="js/jplayer.playlist.min.js"></script>
<script type="text/javascript">
//<![CDATA[
$(document).ready(function(){

	new jPlayerPlaylist({
	
		jPlayer: "#jquery_jplayer_1",
		
		cssSelectorAncestor: "#jp_container_1"
	}, [
		<?php include('playlist.php') ?>
	], {
		playlistOptions: {
		autoPlay: true,
		loopOnPrevious: false,
		shuffleOnLoop: true,
		enableRemoveControls: true,
		displayTime: 'slow',
		addTime: 'fast',
		removeTime: 'fast',
		shuffleTime: 'slow'
		},
		swfPath: "js",
		supplied: "oga, mp3"
		//wmode: "window",
		//smoothPlayBar: true,
		

          
  
		//keyEnabled: true
		
		
	});
	


}).jPlayer("play");;
//]]>
</script>
</head>
<body>

		<div id="jquery_jplayer_1" class="jp-jplayer"></div>

		<div id="jp_container_1" class="jp-audio">
			<div class="jp-type-playlist">
				<div class="jp-gui jp-interface">
					<ul class="jp-controls">
						<li><a href="javascript:;" class="jp-previous" tabindex="1">previous</a></li>
						<li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
						<li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
						<li><a href="javascript:;" class="jp-next" tabindex="1">next</a></li>
						<li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
						<li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
						<li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
						<li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>
					</ul>
					<div class="jp-progress">
						<div class="jp-seek-bar">
							<div class="jp-play-bar"></div>

						</div>
						
					</div>
					<div class="jp-volume-bar">
						<div class="jp-volume-bar-value"></div>
					</div>
					<div class="jp-current-time"></div>
					<div class="jp-duration"></div>
					<ul class="jp-toggles">
						
						
					</ul>
				</div>
				
				<!-- <div class="jp-playlist" style="display:none;" >  -->
				<div class="jp-playlist" style="display:none;" >
					<ul>
						<!-- The method Playlist.displayPlaylist() uses this unordered list -->
						<li></li>
					</ul>
				</div>
				<div class="jp-no-solution">
					<span>Update Required</span>
					To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
				</div>
			</div>
		</div>
</body>

</html>
