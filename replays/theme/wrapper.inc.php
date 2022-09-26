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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9264817294151231" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7101777883399736" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.13747888608874748" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.17796858932880477" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4918827355477915" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.2524473745199003" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7150797295672318"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.4490535880218385" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7845103802093609">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.643565430714091">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.873318040519588">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.2837871555076008">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4383051279056307"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6161384159525389"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.2984977522388812"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7056930537678612"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9917831444907519"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7216437989560356"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8907631194761774"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.3752794548178622"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5668488838821091"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.3984487760164359"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.43397505209800347"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6181540000963226"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5660853841348683"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.32472459876690674"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.4723261274082444"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.31512480760178185"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.32453781148550753"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7004478801543474"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.23423240878527563"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
