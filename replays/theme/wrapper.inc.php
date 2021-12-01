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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.49908464955543663" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.13141564941851103" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5235310608522408" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9265053619409571" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4680503741752111" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5047814975337415" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.2957721638317148"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6811911337645911" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7633894862233264">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.08353930359060335">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3554208935003986">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.648730505980196">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7467624264613879"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8724852532102176"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.34622826838080867"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3616517611884378"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6809709865542615"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.28287634005349704"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5955452315017582"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.905603315584399"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.4584456733368072"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.012901970077891178"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6597847784699233"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5511797846709723"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6389332443587401"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.21853126281804758"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.872882639563596"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.636105452815487"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.41659320473097816"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.2867063885058172"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.3172555505151722"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
