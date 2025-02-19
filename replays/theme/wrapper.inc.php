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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.32590402629974546" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6673921570935073" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.13818309964664688" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.3675477316467002" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.42751467983504576" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.49544838708911754" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.17844632176740327"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5915617663624946" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6614562364035279">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5257956649860622">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.42369046980698544">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.58489376275904">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3353163805337962"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7582732450437213"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8579370139212874"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.39966827627964485"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.985735208567462"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8490324333905743"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8222321232293222"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.10926104377620693"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.4477239526370942"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.2706424203614093"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.11715890940263662"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8997922832751837"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6914106955061805"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.4026938901776733"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7619009116263256"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.906025560536555"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.305679490199809"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5381914528388083"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.18252323998305986"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
