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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.33334343141646117" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.749645526603036" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.26665433449348086" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.49796504006632936" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6974257871983465" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.2535761059751267" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.09307538238422008"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9826985209576695" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.27011044760806047">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5568018184223655">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.012593481963131925">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.06513483688314681">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4080582241940047"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.21619705087983565"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7164671310538049"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8783510182566923"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.12328961875434441"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9253078790878948"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.3857302152616462"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.43861472517624933"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9156784976945878"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.30732355478612683"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.9364445561070676"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8206631480729769"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4920208753776767"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6105138303994118"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8308359631599589"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.746379848528844"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.20476286103160213"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.0888192196243256"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.1415669950258751"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
