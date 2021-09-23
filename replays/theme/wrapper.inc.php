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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.3473641733005801" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.29979898800908344" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5804441574810866" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.13585936787351205" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.00808879186309297" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.0026562365159370493" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7018615831934558"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8867257013972261" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.855670755555044">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5205580877629854">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.04480210934434403">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.914218710824727">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5352743158397728"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9115129161315896"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.38101971234919896"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4063278291563863"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.3514353411596127"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.11894979304967856"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.2921403708410333"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.01384751088585734"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.03569057601467707"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9500547617759205"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.9592994523720104"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.2592852435826105"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9240918585077351"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9317238630991367"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.12908245768574922"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9162246161198286"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.633656312568001"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.31959069958686004"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.4360761178052728"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
