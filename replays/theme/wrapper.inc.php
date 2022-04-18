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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7273549342757744" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.833092620392968" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5933499301673952" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8344372023089297" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.22298615958030954" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7375146524382727" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.2566157301945331"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.95823991680501" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.18078954271690084">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.027367694316034363">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8295586095561007">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.27004618499942223">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9981512348073425"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.12384696541150086"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.26165290306635414"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.40277531478868966"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.1813818270038594"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.19994991755183467"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5140602136263897"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.626942761609055"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9620040457881871"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.40333249488742795"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.46286641409648577"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9128258193675183"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.801554122420294"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.12728047558848576"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.4016050749491127"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.2527689966077"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8344243708527999"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8957518862554938"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6916757234186712"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
