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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5115283870983673" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.05240996698717315" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.675502197563751" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.45785103212053224" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.29644364967652037" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8739231682546929" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6914619381299949"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.11218624655657616" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5148036696225529">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9675208818465388">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7048439681925842">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.3975283084939665">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9832948642098482"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7356032292253569"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.22568756257489886"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6514043972509016"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7044636212870987"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3023167103263218"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9417059459388102"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.4919875569280461"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.0641418232310027"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.3910486742434953"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5252999002303433"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7583754212925884"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5909738331479566"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7925494460110107"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5072085691914463"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5880472500403506"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6810311940683744"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8012900305675954"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5998867726507688"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
