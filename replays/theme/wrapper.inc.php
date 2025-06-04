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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.4332292947009244" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.674745167955185" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7105253300116625" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.543672391429852" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7727348781682897" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5950723693993054" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8939497141956834"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.788487876454637" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4833330319817435">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4681474891135293">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.30640497900411057">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.35882501418363">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.15951481344841745"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.06967418028229089"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.33146839488629265"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9462638754399526"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7140342072523598"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.31178999466272495"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7698158305307801"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.28080186859229617"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5848862041227436"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5183787750678026"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.41135948535828115"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.19175313269885663"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.606367082980021"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8554471064465325"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.17042367644269074"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7522102826311889"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8847053094291442"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.48595218292686226"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.4370270902183957"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
