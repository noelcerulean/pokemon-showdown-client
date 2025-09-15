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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7409520567529146" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5191480561729511" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.07342853188630327" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.1748156225842843" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5146166969524679" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9426430902313225" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.26401796260770216"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.832888651638835" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.37076351431561494">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7799116729191">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8474784203390662">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6977629279654909">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3476915598560788"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9102195513670848"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5320436024088349"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6818065418534283"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.33352404268062563"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4162518463054832"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.41987625722630995"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.012973548204665564"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.39582563074485666"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9486176468749374"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.2226407152829748"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.35889048211943675"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.06744473537215612"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.3939886309533789"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.039483010542956"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.11407702600251302"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.41183286824209686"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9900078220104775"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8383068156104752"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
