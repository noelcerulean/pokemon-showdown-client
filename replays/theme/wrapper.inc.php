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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8363846356068538" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.293129522477241" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7221737084763205" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.27037176064463364" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.0990820995256887" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.17472451218228313" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.04718354062775365"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9352184309481071" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.14963767174157194">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4373238863496436">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.1472645309001368">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.47572150247210376">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6475803822909214"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6974891938770709"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8803867055839538"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7394461550936535"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.054940381200016875"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6645665287461844"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8035122647474"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.38194644745998874"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.12806362506914493"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7732093953506234"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.4535059412615936"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.4130568319664394"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.26239399544043973"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.29481534749225036"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5320411326367296"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.06525478697987719"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.19559248284580866"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9228487976816964"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.29402453704249454"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
