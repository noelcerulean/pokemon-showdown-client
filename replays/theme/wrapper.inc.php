<?php

if ((substr($_SERVER['REMOTE_ADDR'],0,11) === '69.164.163.') ||
		(substr(@$_SERVER['HTTP_X_FORWARDED_FOR'],0,11) === '69.164.163.')) {
	die('website disabled');
}

/********************************************************************
 * Header
 ********************************************************************/

function ThemeHeaderTemplate() {
	global $panels;
?>
<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title><?php if ($panels->pagetitle) echo htmlspecialchars($panels->pagetitle).' - '; ?>Pok&eacute;mon Showdown</title>

<?php if ($panels->pagedescription) { ?>
	<meta name="description" content="<?php echo htmlspecialchars($panels->pagedescription); ?>" />
<?php } ?>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8556188592492922" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.28400950537447067" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.46845768593187187" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.2985593617021485" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.511722173779287" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6842551679681375" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26211653-1']);
		_gaq.push(['_setDomainName', 'pokemonshowdown.com']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.2456022589262663"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6007498541119105" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4428033634588373">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9939805375848305">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.48649787327546634">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4595684964890214">Forum</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="http://play.pokemonshowdown.com/">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
<?php
}

/********************************************************************
 * Footer
 ********************************************************************/

function ThemeScriptsTemplate() {
?>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2040669010328242"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.10972611492047624"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.550521927313963"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8515159231696516"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.1200834865122995"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5762577451623303"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.48692809865949993"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.2486855762751743"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.30770505117000235"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.3791872339757789"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.003564975803084014"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.22570769127197954"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.568919737144804"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8610650841398317"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6751665925219943"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.808331697407298"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9123172218474629"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.455795327107575"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.4998118741522928"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
