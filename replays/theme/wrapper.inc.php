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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5787827419009193" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.32075957913169395" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9574479102984323" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.044409832146131256" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.29100915241511016" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8661145701051789" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.47836481672205156"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.4794027644488965" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4353955312293092">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6730070978047487">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9032956529447795">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4417494807312947">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.18851061464087926"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6521054392870007"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.009102413850263558"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6268478654631104"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9350031974929358"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.37701954675362526"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.4621487826064108"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.23735346367177002"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9964110504820205"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9035341910086787"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5081357482411875"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.16773132219425269"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.50039603234654"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.10974689896385526"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.1882334557339247"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8181979643944985"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.11957061283675174"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.13528906428004572"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.36377625219403553"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
