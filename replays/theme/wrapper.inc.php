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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.43053945191360454" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7790420494969406" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5248445491397085" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6248566949611947" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.45222549626428865" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.049609646435489596" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.3740531358488888"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6169582374897522" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9447125438196373">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6679583521748806">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3854537278144372">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4674381911612122">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7009211361446777"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.4757265732855771"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5903928715365492"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.24544308346212906"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4203259658179974"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.20332031010871066"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7875165445952323"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5075948817677862"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.378713984319472"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6914517059927943"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.3443929598940314"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6828672028947247"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6349008476589004"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.26717010524221996"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9009979964651176"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.3357133824384997"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7713482930008462"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.14486619344802487"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7177912404945137"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
