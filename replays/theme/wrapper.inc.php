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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6506225583410616" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7360947934890596" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9281455238332996" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.11425176860568964" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5238974647276662" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.07933468345200967" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7628626009024833"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.20048807763479992" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2154650423637383">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.06106103018493325">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3836158936569476">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6312025543363682">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7232800100652677"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9968576317416962"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8260046939536148"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.30191175688563154"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5574938135845908"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2852909019953682"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8736844174974492"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.08205634524521521"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6665651053409265"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6104169058993454"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.1631368543658589"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.3105653496576313"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.0015830277223911615"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.12490788852911128"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.11399293071170025"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.4551933362688425"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9719138822515916"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.39576863176174015"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6438280610889984"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
