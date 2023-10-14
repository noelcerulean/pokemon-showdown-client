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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.1333554985549288" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5350048033660069" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.4768905419635969" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5275970054563928" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7979175081742051" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6275925543105298" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.18775598564620077"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.47143863515767426" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8028336191315486">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7046993977015066">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9773190635315161">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.37222922645189405">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2620079398209203"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7421353616009765"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.832784792349198"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5538220280041382"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9840917154713686"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6752236908967437"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6024064780240141"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9794397113449724"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.51755045585355"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5094747527881573"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.9401926950717221"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.4286495593393871"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9946899878264299"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.49536859142206824"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.12684924902902472"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.22558515103916243"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.35715797667304994"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.3906632693614627"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.12220753736044809"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
