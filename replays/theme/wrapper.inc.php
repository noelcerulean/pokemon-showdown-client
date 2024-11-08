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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.06405823304269753" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.2004774356685639" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8500652288379169" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.46113975195219314" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5553834595436153" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.2553903727127975" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9561122933218864"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.4837571151826867" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.04510587667766286">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.0016294048136724637">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3575313465588488">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.14455920407656708">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.679917074990589"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7347082156253222"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.746350607387297"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6342346227469438"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5495202028554593"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4772887625147715"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6895662872226633"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.572152655950162"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.09735801540153277"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.29469475238457243"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.3751684667482371"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6961448906450829"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.33179301340269807"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.31306084566014736"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.47912877727605174"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9991855422384033"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.29947266438249387"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.47746190864207017"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.3652434847614323"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
