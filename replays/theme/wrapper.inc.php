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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6838577113795743" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.3504490837276273" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.019503706294939693" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8032196242544785" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7925665394945742" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8551195699609981" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.24027600025519158"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.35697802716684013" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.08577888602663553">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3355267175688885">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9815524496801495">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7171329377238187">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.29093635392913364"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5275718545931636"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.1767608971357051"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4172054233557503"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6637681640592934"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.39409943286340376"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.19675588576131942"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.07807234174381539"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.31165736094917995"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9013541613444513"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.21414311213744996"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.04947124271619274"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4227691098398414"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.936768002459831"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9745253895246189"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7884020653996602"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8742319268121217"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6606032545757765"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.02480595583886469"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
