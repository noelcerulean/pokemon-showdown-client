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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.588704818473567" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.2448486423506937" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8390869492815196" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7920195025539996" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6165166505882917" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.008766571604484241" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7383767529036198"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5356812729059128" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.11339249142379715">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9130632270169685">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.0378419147049498">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.03570054898836483">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.027376893706832606"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.478689724890331"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.26914158157714696"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.20613122482613488"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6107863096971728"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.40123710696630766"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.17891691212939875"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6392631423015893"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9389736047216217"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7127249118405474"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.14734272830141615"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.38227748222156066"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9999545494093274"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.17241522018368616"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9153490334471961"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6313363797527731"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.33734978623346934"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.2954679412659862"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.0640504423551369"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
