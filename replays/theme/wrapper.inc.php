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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8397900611764035" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6075851737718583" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9247026004879981" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6429425271419897" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5228810077333979" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6334649936301682" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.43722370644664355"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8374881873076088" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.05808898403292928">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.14409506150752072">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6682419186335018">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.48443614876084085">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3496537872549965"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.037494679970638156"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6697410323825232"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7109080660505274"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.2775052010559591"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9933754264950914"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.22245293935292798"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.1713262709729233"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9967937376412876"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.21721993545729035"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.9760828247937223"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.732504065145209"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.24283057279529463"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.3211389591909706"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9494242216775066"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.29590689157251315"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.1246585432167664"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8965656392618648"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.021453976199501623"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
