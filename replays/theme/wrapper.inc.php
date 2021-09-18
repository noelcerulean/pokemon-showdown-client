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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9479485743258804" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.2950941549063928" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8583851319726239" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.96055154773528" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7705490491847569" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.18302823533110235" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5925901514343281"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.16517061886008433" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.16909987791061099">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9917684779033455">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7468466058482293">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9197719887084987">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2726395211882797"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.2864304668879636"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7389796607712271"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9400758765822181"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.2335560872732534"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5938141734347224"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.02773900555592057"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.2879559801274907"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6025093591610331"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8371804979841067"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.10717801336313237"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5802178800372282"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7444206706335423"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5801332884456836"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.208483114516554"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.26066838363432776"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5599347318999854"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.12639223677902023"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.25988411043960347"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
