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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7191509420770723" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.675332414565557" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.1027989455793743" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.20145768166092282" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4727918285848698" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.39460220170231697" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.808204272256626"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8704854795844938" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6324818962385024">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3057996265027494">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9483947890853484">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.27062034316966654">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.005310739770830519"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.566986064074692"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7858955083826118"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.27911950619046233"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.12191350080306473"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9567242472732316"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.4003717366739372"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.39080512086848507"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.679798802568744"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.55521860913391"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7880152359699095"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.890401320722787"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.694598866443163"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5964537610151752"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6212485686014257"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.3765161521010596"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5077800148080267"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.29701121784114193"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9375245859642489"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
