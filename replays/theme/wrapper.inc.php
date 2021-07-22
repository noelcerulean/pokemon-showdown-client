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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8780834426443147" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5423280723521708" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7187043269534867" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.051556728827210296" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.11297710525764115" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6919503961642199" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.13247436850765726"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7971398070720606" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5346202129224311">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7671924236549272">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6352275526806215">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.38499438970428557">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6982918320347489"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.12497983113913924"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.834304269711176"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4334610275062909"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.22200328284602522"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6195374469831645"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.37471413315896296"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.00019547412362386218"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8735477329490813"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7979228589263077"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5597909226380853"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.017235073907586607"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5618277811232002"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.134901602379345"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.08410951161112146"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.34784381745802384"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8641222201754519"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8591353147264684"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.1461402343959899"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
