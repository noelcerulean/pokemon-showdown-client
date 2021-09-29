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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.152964745922767" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.4171300971616223" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7082325186040932" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5512581256200448" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9873181304738297" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8845158311018568" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7698321173610938"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.43207100493635786" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.489157180634161">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.08427489093140372">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7994750309739851">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.13906633603774377">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.24176965041140286"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.09952998488648324"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7408134458741018"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3850857942808754"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.21121703513784174"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3020581127296831"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6169202209852755"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6077044360267299"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.3540151551646955"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6381777983292976"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.2989159475448542"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.0007036849641901544"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8588015546294072"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.4104956029371347"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8460075158509275"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.31809066278939113"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.011450713070608076"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9555913988179323"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.41168494483935425"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
