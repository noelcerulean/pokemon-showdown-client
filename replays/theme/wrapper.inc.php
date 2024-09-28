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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6813062947480857" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.36299196952654955" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.18092237265870348" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7862622421046495" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.18956158665240852" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.754755523508182" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.49964482260192367"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7124266665174874" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2149264805706117">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8834945425769658">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.061457616542811344">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4261921050738715">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9740530978796811"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.06068284613460473"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.47834605567910016"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3676319326642712"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.3703539942622853"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.17498244908530936"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7653284901326369"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5144002942997492"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.40093435667347377"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.4623494834247961"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.2778622321181503"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5043774472497535"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.28274220897347324"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.991065645956416"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.37220453220493566"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5704817999903233"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5100137367043633"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5822554256699533"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.957559929571955"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
