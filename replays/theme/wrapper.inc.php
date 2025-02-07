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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.23950767842272191" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6958975573501491" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6929008057768602" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9664764349242583" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5911066314909947" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.3725585040664472" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9071203620193524"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.964992672407655" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4781318182760945">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.33030019415640277">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5462967926620856">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9668950032548134">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.14337603417517442"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5133980886826337"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.0003835744049962564"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6792856671723231"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.31279623412358304"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9078437190597652"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.20895416150826507"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.4235072962417292"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.529973491430662"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.4996786807535769"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.22303792898282748"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7128633188802114"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.08007366726955056"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.2200462344719858"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.1320790117110704"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.1723791611040859"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7039111526053714"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9775543670762372"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.009300863405145465"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
