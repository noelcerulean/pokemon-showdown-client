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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9810421920360082" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.09393943401615434" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6520327654472022" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.629093900286362" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5867417537727155" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.2545413328652748" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.24364088906895276"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.4280181019058109" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.12162247902444223">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5590823877428341">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.13295849507899593">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8052487834593958">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.19157264994243106"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.4256281349146871"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7756376990274652"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.21519429863003947"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.8922687871036807"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.54777674343167"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.05637614719714401"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7976111538697364"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8720789091283154"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9459090090089213"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8688619076459259"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.48321310802089523"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8339183855089185"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9443309751651272"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6706917953968563"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.563769553960406"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.44960847914775415"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8836708075587631"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.37250695307215853"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
