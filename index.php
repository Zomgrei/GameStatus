<html>
<head>
<!--
	GameStatus v0.0.1
	By Tim Hosey (Zomgrei)
	Initial Release
-->
<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
<link rel='stylesheet' href='style.css' />
<title>GameStatus</title>

<script type="text/javascript">
function ListByCat($cat) {
	$items = $('article').length;
	$('#cats a').css('font-weight', 'normal');
	$('#cats a#'+$cat).css('font-weight', 'bold');
	var title = $('#cats a#'+$cat).text();
	$('#cat_title').text(title);
	$i = 0;
	if ($cat=='' || $cat=='all') {
		while ($i < $items) {
			$('article').eq($i).css('display', 'block');
			$i++;
		}
	} else {
		while ($i < $items) {
			if ($('article').eq($i).attr('category')==$cat) {
				$('article').eq($i).css('display', 'block');
			} else {
				$('article').eq($i).css('display', 'none');
			}
			$i++;
		}
	}
}

$(document).ready(function() {
	ListByCat('all');
});
</script>
</head>
<body>

<div id="cats">Categories: <a id="all" href="javascript:ListByCat('all');">All</a>
&bull; <a id="fps" href="javascript:ListByCat('fps');">FPS</a>
&bull; <a id="rpg" href="javascript:ListByCat('rpg');">RPG</a>
&bull; <a id="strategy" href="javascript:ListByCat('strategy');">Strategy</a>
</div>

<div id="cat_title">
All
</div>

<!-- Shooters -->
<article category="fps">
	<h2>Left4Dead</h2>
	<h3>Status: <span class="completed">Completed</span></h3>
	Played more than 6 hours of online play.
</article>

<article category="fps" status="completed">
	<h2>Left4Dead 2</h2>
	<h3>Status: <span class="completed">Completed</span></h3>
	Played more than 6 hours of online play.
</article>

<!-- RPGs -->
<article category="rpg" status="completed">
	<h2>The Elder Scrolls V: Skyrim</h2>
	<h3>Status: <span class="completed">Completed</span></h3>
	Completed main story line.
</article>

<article category="rpg" status="completed">
	<h2>Fallout 3</h2>
	<h3>Status: <span class="completed">Completed</span></h3>
	Completed main quest line.
</article>

<article category="rpg" status="completed">
	<h2>Fallout: New Vegas</h2>
	<h3>Status: <span class="in-progress">In-Progress</span></h3>
	Need to complete main quest line.
</article>

<article category="rpg" status="completed">
	<h2>Ni-No Kuni: The Curse of the White Witch</h2>
	<h3>Status: <span class="not-started">Not Started</span></h3>
	Watched my wife play and now I want to play!
</article>

<!-- Strategy -->
<article category="strategy">
	<h2>Orcs Must Die! 2</h2>
	<h3>Status: <span class="in-progress">In-Progress</span></h3>
	Need to beat main story mission line.
</article>

</body>
</html>