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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6904563626879667" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.4151507013870148" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.23612176205821722" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.1850327818743609" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.40730911279631465" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.1978430104187756" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.23216180575837786"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.17193962904112348" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.006312619413556986">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6598348046890239">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.03795202111398721">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.0786494861819842">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7353089608520635"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7893008450348644"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9302094690804494"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.10074308417089828"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.2508538625551737"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6206335756510444"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.011087996886800955"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5133137849038012"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5903731689847072"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9614225487857326"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.3121267775327472"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.10226889133324013"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5089193393967144"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.1381506599634117"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.44655762019937106"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6133275982273276"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6793452812043284"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6274449305105376"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6377667999131549"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
