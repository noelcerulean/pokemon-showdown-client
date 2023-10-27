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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.09000133106033936" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.48866799429755114" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8588025205704481" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.02855642211950049" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.38761648521126135" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9796821618109357" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.05970485077383825"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9898090403893942" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.970749502389495">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5201759938161798">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.37395371593103466">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.3568932422424005">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.21001949214747562"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.2897749117983779"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9071669093415187"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.039053281735640155"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.47255070192130444"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.11356835629811801"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.2379630026422579"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8714054817929293"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9099510959599013"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.4260157770070703"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5263514533933904"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9039889633895748"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.13827088600489135"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9121394369575511"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.020876742775783663"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7399018191273898"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.727186084773358"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.39322214010620304"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.36804026398276757"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
