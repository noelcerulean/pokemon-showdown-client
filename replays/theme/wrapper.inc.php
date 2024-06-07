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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.46799738462583074" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7463221855637154" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.35512907158690754" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5697496478609001" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6302431125174666" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.02410962741228828" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.0720796235983443"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8507902387403496" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.08667407816128492">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.06752167581788893">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9386601407119906">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.27614339054750037">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.22373122709446713"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6145248276414348"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6402788199449032"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9059580384435792"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4134363149411928"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2407301308595715"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.22366552669795547"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7558781827744971"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.13284884148926812"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7179332171969246"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5986628590793244"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.30015020182545316"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.3361889736394019"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.31825724791198784"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.4406473001717248"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8746387950947057"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8758904110220282"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.04121222597124219"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7917033583432833"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
