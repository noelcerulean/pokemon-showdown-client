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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.48072195253497063" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8198194705009523" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5433465399978508" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6207365711157482" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6361884731693441" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.49485853435676797" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.35241061741141344"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7310943155033904" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.0957850188029239">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6466128854765363">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9705075349161365">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.31726110575876265">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.29578207570582915"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6599114772100301"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.2423620062703875"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.45745097286874437"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.8157447109778022"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7716687173877039"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.703444436797015"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.2450514208238983"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7041575009583381"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.13451035720773685"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5650583536099576"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.981293712740172"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5732040373494598"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.28411878702054416"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.31774241260155867"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.25937799902208525"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8847560814144784"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6884038523470171"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.17632931443154254"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
