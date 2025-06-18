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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9071534267685095" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.2617335450995346" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.07314309175507261" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7578030304397365" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.45141203738095115" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.4148354345272973" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8750511378717629"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.34973368967188456" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8696606639590831">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6210503698518648">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3472658510899489">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8488735106455403">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.791404639924753"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7911944209427499"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.29430273700135623"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.08111018925996616"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.593507144783799"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.06081349245970169"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9602524552942269"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7991637246884742"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.46769074303379"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.062228644617789985"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.05312364818585413"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7183642040781977"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.659755953868943"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.1823855869946449"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8818791395015186"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.13789938960552872"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7005296283641849"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8470568995695056"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9270071419254189"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
