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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5726939719403832" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.10341109650501057" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.21363803666744174" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.4606800494492227" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5695820835241807" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8845641642360471" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8814197266591277"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7142190584008543" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.47102525080573443">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.37108130042425924">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.1814351119549562">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.49749959251810605">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.265929351206869"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.3452738985289674"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.12653413232448485"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7552938132385503"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7637757224599389"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9008369316600211"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.3180131262391641"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7620965786862266"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8759667213573714"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.41770533182936154"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.006734793731056232"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7767257306271165"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.050163959956594395"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8825828041597361"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9476719050393236"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6423947471660123"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5877802076605827"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5595451282378625"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.33979467289895293"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
