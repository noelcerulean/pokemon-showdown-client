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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9436152027329001" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5382759321417843" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.21622935637109508" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6787567228709748" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.1658775438253366" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.4616180591277259" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.21324365344007656"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.560305215323204" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9264316953739864">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6204129441354798">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.14411310437822156">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.328157416642594">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.34707083192027177"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.26202515503916435"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9062427264620876"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7765489081506012"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.018485086764583825"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7725808656380602"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.22722899696851484"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.2962913160257685"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.20042136439038627"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.14195112733019544"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5605087989928459"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.546471253413461"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6327588136272362"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.4050696257822941"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.4259701572643573"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8894340885148277"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.376392237330778"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.3026320704152885"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5205930063529363"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
