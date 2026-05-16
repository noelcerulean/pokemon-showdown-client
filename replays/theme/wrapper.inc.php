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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.23492225673843614" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9670759965192197" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.06026813614205628" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8007172588336535" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.3482723956666771" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.14932199749832442" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.4147760967015157"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6711906081840238" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5348923546611504">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6579043321870297">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7000603171580393">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.22826828118658637">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6642648146188002"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.4003648711887986"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6005881231745827"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2803229952645252"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.25651963039162196"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5108271262977864"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9535402317806343"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.3871209722797182"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9570521572613806"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9842478548760241"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.2931220857371941"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5603092012708135"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9695411009194754"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.36052479363722356"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.07232603010769911"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.026825938414907435"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.4643576604972499"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.019196445508006255"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7504931325861597"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
