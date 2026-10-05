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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.23404853518784918" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.2748493637811742" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.22651854357398582" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.011996923341232923" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.37313263370498206" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8389831233363585" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7284330368144449"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9769237743068129" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8407935608759403">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9391686754622632">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5904335605260966">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.28677000763500615">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.38520321102196986"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.3588860557257343"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6223045168664809"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9219669292629757"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.999032205221664"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.987142078323439"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9377251805181333"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9459925883402436"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7877051585916961"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.49672857142670823"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.2326497496108384"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7170602023654038"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.533397915109481"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.33319716636096475"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.44545909007383555"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8141092020897946"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7563238609560545"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9400311565603667"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7529220513624058"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
