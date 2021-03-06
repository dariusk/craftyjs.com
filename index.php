<?php
$page = "home";
include 'header.php';
?>

<div id="grid">
<div class="box">

<button class="download" id="download"><h2>Download v0.4.9</h2></button> 
<p> 
	<label><input type="radio" id="minified" name="type" checked="checked"/><var>88.4</var>KB Minified &amp; Gzipped</label><br/> 
	<a href="http://craftyjs.com/release/0.4.9/crafty-min.js"><small>permalink</small></a> 
</p> 
<p> 
	<label><input type="radio" name="type" /><var>223</var>KB Uncompressed</label><br />	
	<a href="http://craftyjs.com/release/0.4.9/crafty.js"><small>permalink</small></a> 
</p> 
</div>

<div class="box browser">
<h2>Cross Browser compatible</h2>
<p>Your games will work on all modern browsers; even IE9!</p>
</div>

<div class="box canvas">
<h2>Canvas or DOM</h2>
<p>Choose the technology to render your entities, it will look exactly the same.</p>
</div>

<div class="box">
<h2>Small file size</h2>
<p>Small enough that you don't need to wory about it delaying your game.</p>
</div>

<div class="box">
<h2>Entity Component System</h2>
<p>A better way to approach game development without long chains of inheritence.</p>
</div>

<div class="box sprite">
<h2>Sprite Map support</h2>
<p>Splice and dice a sprite map to easily draw game entities.</p>
</div>

<div class="box collide">
<h2>Collision Detection</h2>
<p>Advanced SAT collision detection with more information than just true or false.</p>
</div>

<div class="box">
<h2>Fire &amp; Forget Events</h2>
<p>Event system for custom events that can be triggered whenever, whatever and bound just as easy.</p>
</div>

<div class="box">
<h2>Lots 'o Goodies</h2>
<p>Heaps of native components for sound, animation, effects and input to make your game pop!</p>
</div>
<div class="clearer"></div>

<script type="text/javascript"><!--
google_ad_client = "ca-pub-3441075034447689";
/* Crafty 3 */
google_ad_slot = "1672563900";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>

<h2>Demos</h2>
<ul id="demos" class="gridlist">
	<li><a href="http://hugeen.github.com/Defend-The-Den/"><img src="demos/thumbs/defendtheden.png"/><span>Defend the Den</span></a></li>
		<li><a href="http://blackscorp.github.com/cron/"><img src="demos/thumbs/cron.png"/><span>Cron</span></a></li>
	<li><a href="http://morrisgames.info/"><img src="demos/thumbs/code-commander.png"/><span>Code Commander</span></a></li>
	<li><a href="http://planktongames.com/wordy/"><img src="demos/thumbs/wordy.png"/><span>Wordy</span></a></li>
	<li><a href="http://lapiroff.name/orderlies/Q/"><img src="demos/thumbs/Q.png"/><span>Q</span></a></li>
	<li><a href="http://webtop.co:8056"><img src="demos/thumbs/blocko.png"/><span>Blockoworld</span></a></li>
	<li><a href="http://webtop.co/gta"><img src="demos/thumbs/gta.png"/><span>Driving</span></a></li>
	<li><a href="#fruitassassin"><img src="demos/thumbs/fruit.png"/><span>Fruit Assassin</span></a></li>
	<li><a href="#connect4"><img src="demos/thumbs/connect4.png"/><span>Connect 4</span></a></li>
	<li><a href="#asteroids"><img src="demos/thumbs/asteroids.png"/><span>Asteroids</span></a></li>
	<li><a href="#tutorial"><img src="demos/thumbs/rpg.png"/><span>RPG</span></a></li>
	<li><a href="#isometric"><img src="demos/thumbs/isometric.png"/><span>Isometric</span></a></li>
	<li><a href="http://bowlerhatgames.com/html-games/gridshock/"><img src="demos/thumbs/gridshock.png"/><span>GridShock</span></a></li>
	<li><a href="http://projects.edillingham.com/senet/"><img src="demos/thumbs/senet.png" /><span>Senet</span></a></li>
</ul>
<div class="clearer"></div>
<div id="modal"></div>
<div id="modal-window"><iframe></iframe></div>

<script type="text/javascript">
$(document).ready(function() {
	$("#download").click(function() {
		var url = ($("#minified").attr("checked") === true) ? "?c" : "";
		window.location = "download.php"+url;
	});
	$("#modal").click(function() {
		$("#modal-window iframe").attr("src", "");
		$(this).fadeOut(function() {
			$(this).hide();
		});
		$("#modal-window").fadeOut(function() {
			$(this).hide();
		});
	}).hide();
	$("#demos a").click(function() {
		var href = $(this).attr("href");
		if(href.substr(0,7) === "http://") {
			window.location = href;
			return;
		} else href = href.substr(1);
		
		$("#modal-window").css({left: $(window).width() / 2 - 400, top: $(window).height() / 2 - 300});
		$("#modal-window").fadeIn();
		$("#modal").fadeIn(function() {
			$("#modal-window iframe").attr("src", "demos/"+href+"/");
		});
		
	});
});
</script>
<style>
#modal { width:100%; height:100%; position:absolute; top:0; left:0; background:#000; opacity:0.2; display:none }
#modal-window { width:800px; height:600px; background:#eee; position:absolute; display:none; left:0; top:0;
	-moz-box-shadow: 0 0 5px #888;
	-webkit-box-shadow: 0 0 5px #888;
	box-shadow: 0 0 5px #888;
 }
#modal-window iframe { width:100%; height:100%; border:0 }
</style>
<?php
include 'footer.php';
?>