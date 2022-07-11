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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8236400254487646" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5631273652298394" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5180507630245132" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.2345017384498136" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.36881564882850393" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.054161839069368334" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6745003457674215"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.36765146229247336" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3537121602547735">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.40788083382429474">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.27778118382174477">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.25721316723301335">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.0813140953342879"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.4100661566254331"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.43162406344672233"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7861087097455381"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.2647249570687924"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.954479753337905"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7287795604440592"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.44301751238569276"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6337321297122949"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5976100320282123"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.07800330651053367"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.2945633830608667"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.28752542335848585"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7251021542243714"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.07180832435813489"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.009486396650871143"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.1718094628086595"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.27168267038892124"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.04846803942765554"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
