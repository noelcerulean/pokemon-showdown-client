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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5240113428783688" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.019517955502573514" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8300664828380369" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.08960923852434366" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.3838483843940077" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8010624319451123" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9224274472615914"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.10680213308872855" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.862241050128383">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.1746295594354037">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3108055291811165">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6675468430623732">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9203229020032522"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.3600571292090904"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8038653705675152"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6448725708482668"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.07708817505130239"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3843154705981986"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.4038982497216601"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6552922291569299"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.47216161735410633"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7653361693734524"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.027889100866386185"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.43427320378085055"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5231857215411673"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6656557622698591"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9887040642146805"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.170520482971926"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8540606555168044"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8432203712176267"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.13420142938766233"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
