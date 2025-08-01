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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.15755873755714345" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9026078975108967" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.2241443349728991" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5432123343913691" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8829266207345721" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8271442329114631" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.03022685182106466"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.07873258001371108" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.40003591308035014">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7854308762450097">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8225964894168591">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.31872407071155995">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.27804514960733995"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.12205815758567162"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.4642675140800334"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.060141491937105274"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9945192966401866"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7121610975263446"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8748126734198882"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.04996590568258008"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.19306741763578628"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.19236446013496633"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.11653448526184995"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.3333038658466352"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.10423378001978434"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.16686956831045574"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.773095841492971"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.614620500262151"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6987942356397427"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.31337422111156044"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.05378734278218311"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
